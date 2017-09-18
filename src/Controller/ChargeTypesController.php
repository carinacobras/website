<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChargeTypes Controller
 *
 * @property \App\Model\Table\ChargeTypesTable $ChargeTypes
 *
 * @method \App\Model\Entity\ChargeType[] paginate($object = null, array $settings = [])
 */
class ChargeTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $chargeTypes = $this->paginate($this->ChargeTypes);

        $this->set(compact('chargeTypes'));
        $this->set('_serialize', ['chargeTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Charge Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chargeType = $this->ChargeTypes->get($id, [
            'contain' => ['Charges']
        ]);

        $this->set('chargeType', $chargeType);
        $this->set('_serialize', ['chargeType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chargeType = $this->ChargeTypes->newEntity();
        if ($this->request->is('post')) {
            $chargeType = $this->ChargeTypes->patchEntity($chargeType, $this->request->getData());
            if ($this->ChargeTypes->save($chargeType)) {
                $this->Flash->success(__('The charge type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The charge type could not be saved. Please, try again.'));
        }
        $this->set(compact('chargeType'));
        $this->set('_serialize', ['chargeType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Charge Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chargeType = $this->ChargeTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chargeType = $this->ChargeTypes->patchEntity($chargeType, $this->request->getData());
            if ($this->ChargeTypes->save($chargeType)) {
                $this->Flash->success(__('The charge type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The charge type could not be saved. Please, try again.'));
        }
        $this->set(compact('chargeType'));
        $this->set('_serialize', ['chargeType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Charge Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chargeType = $this->ChargeTypes->get($id);
        if ($this->ChargeTypes->delete($chargeType)) {
            $this->Flash->success(__('The charge type has been deleted.'));
        } else {
            $this->Flash->error(__('The charge type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
