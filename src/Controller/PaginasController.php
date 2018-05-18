<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

/**
 * Paginas Controller
 *
 * @property \App\Model\Table\PaginasTable $Paginas
 *
 * @method \App\Model\Entity\Pagina[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaginasController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['home', 'view', 'search']);
    }
    /**
     * Home Page
     *
     * @return void
     */
    public function home()
    {
        $grupos = ($this->request->session()->read('Auth.User.grupo'));

        $categorias = TableRegistry::get('Categorias');
        $categorias_publica = $categorias->find()->contain(['Subcategorias' => ['Paginas']])->cleanCopy();
        if ($grupos != null) {
            $categorias_privada = $categorias->find()
                ->select([
                    'Categorias.descricao',
                    'Categorias.id',
                ])
                ->contain([
                    'Subcategorias' => ['Paginas']])
                ->join('Grupos')
                ->where([
                    'Categorias.publico' => false,
                    'Categorias.ativo' => true,
                    'Grupos.id IN' => $grupos,
                ])->group([
                'Categorias.descricao',
                'Categorias.id',
            ])->cleanCopy();
            $this->set('categorias_privada', $categorias_privada);
        }
        $this->set('categorias', $categorias_publica->where(['Categorias.publico' => true, 'Categorias.ativo' => true]));
    }

    /**
     * Search method
     *
     * @return \Cake\Http\Response|void
     */
    public function search()
    {

        $keyword = $this->request->query('keyword');
        if (!empty($keyword && ($keyword) != null)) {

            $keyword = addslashes($keyword);
            $paginas = $this->Paginas
                ->find()
                ->join('Tags')
                ->where(['Paginas.title ILIKE' => '%' . $keyword . '%'])
                ->orWhere(['Tags.descricao ILIKE' => '%' . $keyword . '%']);
            $this->set(compact('paginas'));
        }
        // debug($pacientes);

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subcategorias'],
        ];
        $paginas = $this->paginate($this->Paginas);

        $this->set(compact('paginas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pagina id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null, $url = null)
    {
        $pagina = $this->Paginas->get($id, [
            'contain' => ['PaginasUsuarios'=>['Usuarios'], 'Tags', 'Subcategorias'=>['Categorias'=> ['Grupos']]],
        ]);
        $grupos_usuario = ($this->request->session()->read('Auth.User.grupo'));
        if ($url != $pagina->url) {
            throw new NotFoundException(__("404 - Página não encontrada"));
        }
        if($pagina->subcategoria->categoria->publico == true){
            $this->set('pagina', $pagina);
            $this->set('_serialize', ['pagina']);
        }
        else if($pagina->subcategoria->categoria->publico == false && isset($grupos_usuario)){
            foreach($pagina->subcategoria->categoria->grupos as $grupo){
                if(in_array($grupo['id'], $grupos_usuario)){
                    $this->set('pagina', $pagina);
                    $this->set('_serialize', ['pagina']);
                }
            };
        }else{
            $this->Flash->error(__('Você não tem permissão para acessar a página.'));
            return $this->redirect(['action' => 'home']);
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pagina = $this->Paginas->newEntity();
        if ($this->request->is('post')) {
            $pagina = $this->Paginas->patchEntity($pagina, $this->request->getData());
            //Seta o Slug, baseado no 'title'
            $pagina = $pagina->set('url');

            //Pesquisa o Usuário na tabela com o nome do usuário que está logado
            $usuarios = TableRegistry::get('Usuarios');
            $usuario = $this->request->session()->read('Auth.User.usuario');
            $usuario = $usuarios->find()->where(['nome LIKE' => $usuario])->first();
            $pagina->set('usuarios', $usuario);
            if ($this->Paginas->save($pagina)) {
                $this->Flash->success(__('A página foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A página não pode ser salva. Por favor tente novamente.'));
        }
        $categorias = TableRegistry::get('Categorias');
        $subcategorias = $categorias->find()->contain('Subcategorias')->where(['Categorias.ativo' => true])->toList();
        $usuarios = $this->Paginas->Usuarios->find('list', ['limit' => 200]);
        $tags = $this->Paginas->Tags->find('list', ['limit' => 200]);
        $this->set(compact('pagina', 'subcategorias', 'usuarios', 'tags'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Pagina id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pagina = $this->Paginas->get($id, [
            'contain' => ['Usuarios', 'Tags'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagina = $this->Paginas->patchEntity($pagina, $this->request->getData());
            
            //Pesquisa o Usuário na tabela com o nome do usuário que está logado
            $usuarios = TableRegistry::get('Usuarios');
            $usuario = $this->request->session()->read('Auth.User.usuario');
            $usuario = $usuarios->find()->where(['nome LIKE' => $usuario])->first();
            $pagina->set('usuarios', $usuario);
            // $pagina->usuarios = array($usuario);

            if ($this->Paginas->save($pagina)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $subcategorias = $this->Paginas->Subcategorias->find('list', ['limit' => 200]);
        $usuarios = $this->Paginas->Usuarios->find('list', ['limit' => 200]);
        $tags = $this->Paginas->Tags->find('list', ['limit' => 200]);
        $this->set(compact('pagina', 'subcategorias', 'usuarios', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pagina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pagina = $this->Paginas->get($id);
        if ($this->Paginas->delete($pagina)) {
            $this->Flash->success(__('Apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Não pode ser apagado, por favor tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
