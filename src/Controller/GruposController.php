<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Grupos Controller
 *
 * @property \App\Model\Table\GruposTable $Grupos
 *
 * @method \App\Model\Entity\Grupo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $grupos = $this->paginate($this->Grupos);

        $this->set(compact('grupos'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grupo = $this->Grupos->get($id, [
            'contain' => ['Controladores', 'Categorias', 'Usuarios', 'Menus']
        ]);

        $this->set('grupo', $grupo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grupo = $this->Grupos->newEntity();
        if ($this->request->is('post')) {
            $grupo = $this->Grupos->patchEntity($grupo, $this->request->getData());
            if ($this->Grupos->save($grupo)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        // $superiorControladores = $this->Grupos->Controladores->find()-select('controller')->group('controller');
        $controladores = $this->Grupos->Controladores->find('list', ['limit' => 200]);
        $categorias = $this->Grupos->Categorias->find('list', ['limit' => 200]);
        $usuarios = $this->Grupos->Usuarios->find('list', ['limit' => 200]);
        $menus = $this->Grupos->Menus->find('list', ['limit' => 200]);
        $this->set(compact('grupo', 'controladores', 'categorias', 'usuarios', 'menus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grupo = $this->Grupos->get($id, [
            'contain' => ['Controladores', 'Categorias', 'Usuarios', 'Menus']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grupo = $this->Grupos->patchEntity($grupo, $this->request->getData());
            if ($this->Grupos->save($grupo)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $controladores = $this->Grupos->Controladores->find('list', ['limit' => 200]);
        $categorias = $this->Grupos->Categorias->find('list', ['limit' => 200]);
        $usuarios = $this->Grupos->Usuarios->find('list', ['limit' => 200]);
        $menus = $this->Grupos->Menus->find('list', ['limit' => 200]);
        $this->set(compact('grupo', 'controladores', 'categorias', 'usuarios', 'menus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grupo = $this->Grupos->get($id);
        if ($this->Grupos->delete($grupo)) {
            $this->Flash->success(__('Apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Não pode ser apagado, por favor tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
