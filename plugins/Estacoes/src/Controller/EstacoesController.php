<?php
namespace Estacoes\Controller;

use Estacoes\Controller\AppController;

/**
 * Estacoes Controller
 *
 * @property \Estacoes\Model\Table\EstacoesTable $Estacoes
 */
class EstacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {

        $this->loadComponent('Base.PaginationSession', ['session' => 'paginatorEstacoes']);
        $this->PaginationSession->restore();

        $this->loadComponent('Base.Filter');
        $this->Filter->addFilter([
            'ip' => ['field' => 'ip', 'operator' => 'like']
        ]);
        $conditions = $this->Filter->getConditions(['session' => 'filterSituacoes']);
        $this->set('url', $this->Filter->getUrl());

        $this->paginate['conditions'] = $conditions;
        $this->set('estacoes', $this->paginate($this->Estacoes));
        $this->PaginationSession->save();
    }


    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estacao = $this->Estacoes->newEntity();

        if ($this->request->is('post')) {
            $estacao = $this->Estacoes->patchEntity($estacao, $this->request->data);
            if ($this->Estacoes->save($estacao)) {
                $this->Flash->success(__('O registro foi salvo com sucesso.'));
            }
            else {
                $this->Flash->error(__('O registro não foi salvo. Por favor, tente novamente.'));
            }
        }
        $this->set('estacao', $estacao);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estacao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estacao = $this->Estacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estacao = $this->Estacoes->patchEntity($estacao, $this->request->data);
            if ($this->Estacoes->save($estacao)) {
                $this->Flash->success(__('O registro foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            else {
                $this->Flash->error(__('O registro não foi salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('estacao'));
        $this->set('_serialize', ['estacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estacao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estacao = $this->Estacoes->get($id);
        if ($this->Estacoes->delete($estacao)) {
            $this->Flash->success(__('O registro foi removido com sucesso.'));
        }
        else {
            $this->Flash->error(__('O registro não foi removido. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
