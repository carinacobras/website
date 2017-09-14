<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FeesTypes Controller
 *
 * @property \App\Model\Table\FeesTypesTable $FeesTypes
 *
 * @method \App\Model\Entity\FeesType[] paginate($object = null, array $settings = [])
 */
class FeesTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $feesTypes = $this->paginate($this->FeesTypes);

        $this->set(compact('feesTypes'));
        $this->set('_serialize', ['feesTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Fees Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feesType = $this->FeesTypes->get($id, [
            'contain' => []
        ]);

        $this->set('feesType', $feesType);
        $this->set('_serialize', ['feesType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feesType = $this->FeesTypes->newEntity();
        if ($this->request->is('post')) {
            $feesType = $this->FeesTypes->patchEntity($feesType, $this->request->getData());
            if ($this->FeesTypes->save($feesType)) {
                $this->Flash->success(__('The fees type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fees type could not be saved. Please, try again.'));
        }
        $this->set(compact('feesType'));
        $this->set('_serialize', ['feesType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fees Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feesType = $this->FeesTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feesType = $this->FeesTypes->patchEntity($feesType, $this->request->getData());
            if ($this->FeesTypes->save($feesType)) {
                $this->Flash->success(__('The fees type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fees type could not be saved. Please, try again.'));
        }
        $this->set(compact('feesType'));
        $this->set('_serialize', ['feesType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fees Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feesType = $this->FeesTypes->get($id);
        if ($this->FeesTypes->delete($feesType)) {
            $this->Flash->success(__('The fees type has been deleted.'));
        } else {
            $this->Flash->error(__('The fees type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
