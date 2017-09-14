<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlayersFees Controller
 *
 * @property \App\Model\Table\PlayersFeesTable $PlayersFees
 *
 * @method \App\Model\Entity\PlayersFee[] paginate($object = null, array $settings = [])
 */
class PlayersFeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fees', 'Players']
        ];
        $playersFees = $this->paginate($this->PlayersFees);

        $this->set(compact('playersFees'));
        $this->set('_serialize', ['playersFees']);
    }

    /**
     * View method
     *
     * @param string|null $id Players Fee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $playersFee = $this->PlayersFees->get($id, [
            'contain' => ['Fees', 'Players']
        ]);

        $this->set('playersFee', $playersFee);
        $this->set('_serialize', ['playersFee']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $playersFee = $this->PlayersFees->newEntity();
        if ($this->request->is('post')) {
            $playersFee = $this->PlayersFees->patchEntity($playersFee, $this->request->getData());
            if ($this->PlayersFees->save($playersFee)) {
                $this->Flash->success(__('The players fee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The players fee could not be saved. Please, try again.'));
        }
        $fees = $this->PlayersFees->Fees->find('list', ['limit' => 200]);
        $players = $this->PlayersFees->Players->find('list', ['limit' => 200]);
        $this->set(compact('playersFee', 'fees', 'players'));
        $this->set('_serialize', ['playersFee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Players Fee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $playersFee = $this->PlayersFees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playersFee = $this->PlayersFees->patchEntity($playersFee, $this->request->getData());
            if ($this->PlayersFees->save($playersFee)) {
                $this->Flash->success(__('The players fee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The players fee could not be saved. Please, try again.'));
        }
        $fees = $this->PlayersFees->Fees->find('list', ['limit' => 200]);
        $players = $this->PlayersFees->Players->find('list', ['limit' => 200]);
        $this->set(compact('playersFee', 'fees', 'players'));
        $this->set('_serialize', ['playersFee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Players Fee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playersFee = $this->PlayersFees->get($id);
        if ($this->PlayersFees->delete($playersFee)) {
            $this->Flash->success(__('The players fee has been deleted.'));
        } else {
            $this->Flash->error(__('The players fee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
