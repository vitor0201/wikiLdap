<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controladores Controller
 *
 * @property \App\Model\Table\ControladoresTable $Controladores
 *
 * @method \App\Model\Entity\Controladore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ControladoresController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Search.Prg', [
            'actions' => ['index'],
        ]);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $control = $this->Controladores
            ->find('list', [
                'keyField' => 'controller',
                'valueField' => 'controller',
            ])
            ->select('controller')
            ->group('controller')->toArray();
        $this->set('control', ($control));
        $actions = $this->Controladores
            ->find('list', [
                'keyField' => 'action',
                'valueField' => 'action',
            ])
            ->select('action')
            ->group('action')->toArray();
        $this->set('actions', ($actions));

        $controladores = $this->paginate(
            $this->Controladores->find('search',
                ['search' => $this->request->getQueryParams()]));
        $this->set(compact('controladores'));
    }

    /**
     * View method
     *
     * @param string|null $id Controladore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controladore = $this->Controladores->get($id, [
            'contain' => ['Grupos'],
        ]);

        $this->set('controladore', $controladore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controladore = $this->Controladores->newEntity();
        if ($this->request->is('post')) {
            $controladore = $this->Controladores->patchEntity($controladore, $this->request->getData());
            if ($this->Controladores->save($controladore)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $grupos = $this->Controladores->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('controladore', 'grupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Controladore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controladore = $this->Controladores->get($id, [
            'contain' => ['Grupos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controladore = $this->Controladores->patchEntity($controladore, $this->request->getData());
            if ($this->Controladores->save($controladore)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $grupos = $this->Controladores->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('controladore', 'grupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Controladore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controladore = $this->Controladores->get($id);
        if ($this->Controladores->delete($controladore)) {
            $this->Flash->success(__('Apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Não pode ser apagado, por favor tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
