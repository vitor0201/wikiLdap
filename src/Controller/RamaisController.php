<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Ramais Controller
 *
 * @property \App\Model\Table\RamaisTable $Ramais
 *
 * @method \App\Model\Entity\Ramai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RamaisController extends AppController
{
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('home');
    }

    public function home()
    {
        $ramais = $this->Ramais->find()->all();
        $this->set(compact('ramais'));
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        //$ramais = $this->paginate($this->Ramais);
        $ramais = $this->Ramais->find()->all();
        $this->set(compact('ramais'));
    }

    /**
     * View method
     *
     * @param string|null $id Ramai id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ramai = $this->Ramais->get($id, [
            'contain' => []
        ]);

        $this->set('ramai', $ramai);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ramai = $this->Ramais->newEntity();
        if ($this->request->is('post')) {
            $ramai = $this->Ramais->patchEntity($ramai, $this->request->getData());
            if ($this->Ramais->save($ramai)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $this->set(compact('ramai'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ramai id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ramai = $this->Ramais->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ramai = $this->Ramais->patchEntity($ramai, $this->request->getData());
            if ($this->Ramais->save($ramai)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $this->set(compact('ramai'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ramai id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ramai = $this->Ramais->get($id);
        if ($this->Ramais->delete($ramai)) {
            $this->Flash->success(__('Apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Não pode ser apagado, por favor tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
