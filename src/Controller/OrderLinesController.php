<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * orderlines Controller
 *
 * @property \App\Model\Table\OrderlinesTable $orderlines
 *
 * @method \App\Model\Entity\orderline[] paginate($object = null, array $settings = [])
 */
class OrderlinesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Orderitems']
        ];
        $orderlines = $this->paginate($this->Orderlines);

        $this->set(compact('orderlines'));
        $this->set('_serialize', ['orderlines']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Line id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderline = $this->Orderlines->get($id, [
            'contain' => ['Orders', 'Orderitems']
        ]);

        $this->set('orderline', $orderline);
        $this->set('_serialize', ['orderline']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderline = $this->Orderlines->newEntity();
        if ($this->request->is('post')) {
            $orderline = $this->Orderlines->patchEntity($orderline, $this->request->getData());
            if ($this->Orderlines->save($orderline)) {
                $this->Flash->success(__('The order line has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order line could not be saved. Please, try again.'));
        }
        $orders = $this->Orderlines->Orders->find('list', ['limit' => 200]);
        $Orderitems = $this->Orderlines->Orderitems->find('list', ['limit' => 200]);
        $this->set(compact('orderline', 'orders', 'Orderitems'));
        $this->set('_serialize', ['orderline']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Line id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderline = $this->Orderlines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderline = $this->Orderlines->patchEntity($orderline, $this->request->getData());
            if ($this->Orderlines->save($orderline)) {
                $this->Flash->success(__('The order line has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order line could not be saved. Please, try again.'));
        }
        $orders = $this->Orderlines->Orders->find('list', ['limit' => 200]);
        $Orderitems = $this->Orderlines->Orderitems->find('list', ['limit' => 200]);
        $this->set(compact('orderline', 'orders', 'Orderitems'));
        $this->set('_serialize', ['orderline']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Line id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderline = $this->Orderlines->get($id);
        if ($this->Orderlines->delete($orderline)) {
            $this->Flash->success(__('The order line has been deleted.'));
        } else {
            $this->Flash->error(__('The order line could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
