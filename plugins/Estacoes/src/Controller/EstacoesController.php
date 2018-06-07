<?php
namespace Estacoes\Controller;

use Estacoes\Controller\AppController;

/**
 * Estacoes Controller
 *
 * @property \Estacoes\Model\Table\EstacoesTable $Estacoes
 *
 * @method \Estacoes\Model\Entity\Estaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $estacoes = $this->paginate($this->Estacoes);

        $this->set(compact('estacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Estaco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estaco = $this->Estacoes->get($id, [
            'contain' => []
        ]);

        $this->set('estaco', $estaco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estaco = $this->Estacoes->newEntity();
        if ($this->request->is('post')) {
            $estaco = $this->Estacoes->patchEntity($estaco, $this->request->getData());
            if ($this->Estacoes->save($estaco)) {
                $this->Flash->success(__('The estaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estaco could not be saved. Please, try again.'));
        }
        $this->set(compact('estaco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estaco = $this->Estacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estaco = $this->Estacoes->patchEntity($estaco, $this->request->getData());
            if ($this->Estacoes->save($estaco)) {
                $this->Flash->success(__('The estaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estaco could not be saved. Please, try again.'));
        }
        $this->set(compact('estaco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estaco = $this->Estacoes->get($id);
        if ($this->Estacoes->delete($estaco)) {
            $this->Flash->success(__('The estaco has been deleted.'));
        } else {
            $this->Flash->error(__('The estaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
