<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
// LINK DOS ICONES https://fontawesome.com/icons?d=gallery

/**
 * Menus Controller
 *
 * @property \App\Model\Table\MenusTable $Menus
 *
 * @method \App\Model\Entity\Menu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MenusController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('sidebar');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $menus = $this->paginate($this->Menus->find()->contain('Superiores'));

        $this->set(compact('menus'));
    }

    /**
     * View method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $menu = $this->Menus->get($id, [
            'contain' => ['Grupos', 'Superiores'],
        ]);

        $this->set('menu', $menu);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $menu = $this->Menus->newEntity();
        if ($this->request->is('post')) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $grupos = $this->Menus->Grupos->find('list', ['limit' => 200]);
        $superiores = $this->Menus->Superiores->find('list', ['limit' => 200]);
        $this->set(compact('menu', 'grupos', 'superiores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $menu = $this->Menus->get($id, [
            'contain' => ['Grupos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $grupos = $this->Menus->Grupos->find('list', ['limit' => 200]);
        $superiores = $this->Menus->Superiores->find('list', ['limit' => 200]);

        $this->set(compact('menu', 'grupos', 'superiores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menu = $this->Menus->get($id);
        if ($this->Menus->delete($menu)) {
            $this->Flash->success(__('Apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Não pode ser apagado, por favor tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function sidebar()
    {
        $grupo_usuario = ($this->request->session()->read('Auth.User.grupo'));
        $sidebars = $this->Menus->find()
            ->where(
                [
                    'Menus.ativo' => true,
                    'Menus.superior_id IS NULL'
                ]
            );

        $superiores = TableRegistry::get('Superiores');
        $superiores = $superiores->find();
        
        if (isset($grupo_usuario)) {
            $sidebars
            ->select([
                'Menus.nome',
                'Menus.icone',
                'Menus.home',
                "Menus.id",
                "Menus.superior_id"
            ])
            ->join('Grupos', function ($q) use ($grupo_usuario) {
                return ($q->where([
                    'Menus.ativo' => true,
                    'Menus.superior_id IS NOT NULL'
                ])->orWhere([
                    'Grupos.id IN ' => $grupo_usuario,
                    'Menus.publico' => true
                    ])
                );
            })
            ->group([
                'Menus.nome',
                'Menus.icone',
                'Menus.home',
                "Menus.id",
                "Menus.superior_id"
            ]);
            $superiores->contain(
                 'Menus', function ($q) use ($grupo_usuario) {
                    return ($q
                    ->select([
                        'Menus.nome',
                        'Menus.icone',
                        'Menus.home',
                        "Menus.id",
                        "Menus.superior_id"
                    ])
                    ->join('Grupos')
                    ->orWhere([
                        'Grupos.id IN ' => $grupo_usuario,
                        'Menus.publico' => true
                        ]))
                    ->group([
                            'Menus.nome',
                            'Menus.icone',
                            'Menus.home',
                            "Menus.id",
                            "Menus.superior_id"
                        ]);
                } 
            );
        } else {
            $sidebars->andWhere(['Menus.publico' => true]);
            $superiores->contain('Menus', function ($q){
                return ($q->where([
                    'Menus.ativo' => true,
                    'Menus.superior_id IS NOT NULL',
                    'Menus.publico' => true
                    ]));
            });
        }

        $this->set(compact('sidebars', 'superiores'));
    }
}
