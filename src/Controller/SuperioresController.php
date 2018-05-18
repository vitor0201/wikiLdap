<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Superiores Controller
 *
 * @property \App\Model\Table\SuperioresTable $Superiores
 *
 * @method \App\Model\Entity\Superiore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuperioresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $superiores = $this->paginate($this->Superiores);

        $this->set(compact('superiores'));
    }

    /**
     * View method
     *
     * @param string|null $id Superiore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $superiore = $this->Superiores->get($id, [
            'contain' => []
        ]);

        $this->set('superiore', $superiore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $superiore = $this->Superiores->newEntity();
        if ($this->request->is('post')) {
            $superiore = $this->Superiores->patchEntity($superiore, $this->request->getData());
            if ($this->Superiores->save($superiore)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $this->set(compact('superiore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Superiore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $superiore = $this->Superiores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $superiore = $this->Superiores->patchEntity($superiore, $this->request->getData());
            if ($this->Superiores->save($superiore)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $this->set(compact('superiore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Superiore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $superiore = $this->Superiores->get($id);
        if ($this->Superiores->delete($superiore)) {
            $this->Flash->success(__('Apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Não pode ser apagado, por favor tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
