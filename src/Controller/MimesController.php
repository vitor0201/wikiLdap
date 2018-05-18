<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mimes Controller
 *
 * @property \App\Model\Table\MimesTable $Mimes
 *
 * @method \App\Model\Entity\Mime[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MimesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mimes = $this->paginate($this->Mimes);

        $this->set(compact('mimes'));
    }

    /**
     * View method
     *
     * @param string|null $id Mime id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mime = $this->Mimes->get($id, [
            'contain' => []
        ]);

        $this->set('mime', $mime);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mime = $this->Mimes->newEntity();
        if ($this->request->is('post')) {
            $mime = $this->Mimes->patchEntity($mime, $this->request->getData());
            if ($this->Mimes->save($mime)) {
                $this->Flash->success(__('The mime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mime could not be saved. Please, try again.'));
        }
        $this->set(compact('mime'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mime id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mime = $this->Mimes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mime = $this->Mimes->patchEntity($mime, $this->request->getData());
            if ($this->Mimes->save($mime)) {
                $this->Flash->success(__('The mime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mime could not be saved. Please, try again.'));
        }
        $this->set(compact('mime'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mime id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mime = $this->Mimes->get($id);
        if ($this->Mimes->delete($mime)) {
            $this->Flash->success(__('The mime has been deleted.'));
        } else {
            $this->Flash->error(__('The mime could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
