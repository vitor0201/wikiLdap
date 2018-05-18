<?php
namespace App\Controller;

use App\Controller\AppController;
// use Cake\ORM\Query;
// use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

/**
 * Arquivos Controller
 *
 * @property \App\Model\Table\ArquivosTable $Arquivos
 *
 * @method \App\Model\Entity\Arquivo[] paginate($object = null, array $settings = [])
 */
class ArquivosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias'],
        ];
        $arquivos = $this->paginate($this->Arquivos);

        $this->set(compact('arquivos'));
        $this->set('_serialize', ['arquivos']);
    }

    /**
     * View method
     *
     * @param string|null $id Arquivo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arquivo = $this->Arquivos->get($id, [
            'contain' => ['Categorias', 'Tags'],
        ]);

        $this->set('arquivo', $arquivo);
        $this->set('_serialize', ['arquivo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arquivo = $this->Arquivos->newEntity();
        if ($this->request->is('post')) {
            if ($this->request->data['upload']['error'] === 0) {
                $arquivo = $this->Arquivos->patchEntity($arquivo, $this->request->getData());
                $arquivos = $this->request->data['upload'];
                $usuario = $this->request->session()->read('Auth.User.usuario');
                
                $arquivo->autor = $usuario;
                
                $mimes = TableRegistry::get('Mimes');
                $mime = $mimes->find('list', [
                    'keyField' => 'id',
                    'valueField' => 'mime',
                    ])->where(['Mimes.ativo' => true])->toArray();
                    
                    if (in_array($arquivos['type'], $mime)) {
                        $format = explode('/', $arquivos['type']);
                        $extension = (pathinfo($arquivos['name'], PATHINFO_EXTENSION));
                        
                        $arquivos['name'] = md5(time() . rand(0, 999)) . '.' . (($extension));
                        $arquivo->arquivo_tipo = $format[0];
                        $arquivo->ativo = true;
                        $arquivo->arquivo_caminho = $format[0] . '/' . $arquivos['name'];
                        if(empty($arquivo->titulo)) {
                            $arquivo->titulo = "Imagem" + rand(5, 10);
                        }
                        if(empty($arquivo->descricao)) {
                            $arquivo->descricao = "Imagem sem descrição";
                        }
                        if (move_uploaded_file($this->request->data['upload']['tmp_name'], WWW_ROOT .
                        $arquivo->arquivo_caminho));
                        {
                            if ($this->Arquivos->save($arquivo)) {
                                $arquivosT = TableRegistry::get('Arquivos');
                                $arquivosT = $arquivosT
                                ->find()
                                ->select(
                                    [
                                        /**
                                         * @corrigir: tirar o sistemas e pegar o servidor
                                         */
                                        'image' => "('/sistemas/' || arquivo_caminho)",
                                        'folder' => "coalesce('', 'Small')",
                                        ]
                                        )
                                        ->hydrate(false)
                                        ->toArray();
                                        
                                        $arquivos_json = json_encode($arquivosT);
                                        file_exists(file_put_contents(WWW_ROOT . 'js' . DS . 'images.json', ""));
                                        $file = fopen(WWW_ROOT . 'js' . DS . 'images.json', "w+");
                                        fwrite($file, $arquivos_json);
                                        fclose($file);
                                        
                                        $this->Flash->success(__('O Arquivo foi salvo.'));
                                        return $this->redirect(['action' => 'index']);
                                    } else {
                                        $this->Flash->error(__('Erro ao salvar o arquivo.'));
                                    }
                                }
                            } else {
                                $this->Flash->error(__('Formato não permitido.'));
                }
            }else {
                $this->Flash->error(__('Não pode ser salvo, verifique o tamanho do arquivo.'));
            }
        }
        $categorias = $this->Arquivos->Categorias->find('list', ['limit' => 200]);
        $tags = $this->Arquivos->Tags->find('list', ['limit' => 200]);
        $this->set(compact('arquivo', 'categorias', 'tags'));
        $this->set('_serialize', ['arquivo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Arquivo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arquivo = $this->Arquivos->get($id, [
            'contain' => ['Tags'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arquivo = $this->Arquivos->patchEntity($arquivo, $this->request->getData());
            if ($this->Arquivos->save($arquivo)) {
                $this->Flash->success(__('O arquivo foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O arquivo não pode ser salvo. Por favor tente novamente.'));
        }
        $categorias = $this->Arquivos->Categorias->find('list', ['limit' => 200]);
        $tags = $this->Arquivos->Tags->find('list', ['limit' => 200]);
        $this->set(compact('arquivo', 'categorias', 'tags'));
        $this->set('_serialize', ['arquivo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Arquivo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arquivo = $this->Arquivos->get($id);
        if ($this->Arquivos->delete($arquivo)) {
            if (WWW_ROOT . file_exists($arquivo->arquivo_caminho)) {
                unlink(WWW_ROOT . $arquivo->arquivo_caminho);
                $this->Flash->success(__('The arquivo has been deleted.'));
            }
        } else {
            $this->Flash->error(__('The arquivo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
