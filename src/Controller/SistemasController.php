<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Sistemas Controller
 *
 * @property \App\Model\Table\SistemasTable $Sistemas
 *
 * @method \App\Model\Entity\Sistema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('home');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $sistemas = $this->paginate($this->Sistemas);

        $this->set(compact('sistemas'));
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function home()
    {
        $sistemas = $this->Sistemas->find('all');

        $this->set(compact('sistemas'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistema id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistema = $this->Sistemas->get($id, [
            'contain' => []
        ]);

        $this->set('sistema', $sistema);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistema = $this->Sistemas->newEntity();
        if ($this->request->is('post')) {
            $sistema = $this->Sistemas->patchEntity($sistema, $this->request->getData());
            if ($this->Sistemas->save($sistema)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $this->set(compact('sistema'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistema id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistema = $this->Sistemas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistema = $this->Sistemas->patchEntity($sistema, $this->request->getData());
            if ($this->Sistemas->save($sistema)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo, por favor tente novamente.'));
        }
        $this->set(compact('sistema'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistema id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistema = $this->Sistemas->get($id);
        if ($this->Sistemas->delete($sistema)) {
            $this->Flash->success(__('Apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Não pode ser apagado, por favor tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
