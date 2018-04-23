<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orderitems Controller
 *
 * @property \App\Model\Table\OrderItemsTable $Orderitems
 *
 * @method \App\Model\Entity\OrderItem[] paginate($object = null, array $settings = [])
 */
class OrderitemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $Orderitems = $this->paginate($this->Orderitems);

        $this->set(compact('Orderitems'));
        $this->set('_serialize', ['Orderitems']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderitem = $this->Orderitems->get($id, [
            'contain' => ['orderlines']
        ]);

        $this->set('orderitem', $orderitem);
        $this->set('_serialize', ['orderitem']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderitem = $this->Orderitems->newEntity();
        if ($this->request->is('post')) {
            $orderitem = $this->Orderitems->patchEntity($orderitem, $this->request->getData());
            if ($this->Orderitems->save($orderitem)) {
                $this->Flash->success(__('The order item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order item could not be saved. Please, try again.'));
        }
        $this->set(compact('orderitem'));
        $this->set('_serialize', ['orderitem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderitem = $this->Orderitems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderitem = $this->Orderitems->patchEntity($orderitem, $this->request->getData());
            if ($this->Orderitems->save($orderitem)) {
                $this->Flash->success(__('The order item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order item could not be saved. Please, try again.'));
        }
        $this->set(compact('orderitem'));
        $this->set('_serialize', ['orderitem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderitem = $this->Orderitems->get($id);
        if ($this->Orderitems->delete($orderitem)) {
            $this->Flash->success(__('The order item has been deleted.'));
        } else {
            $this->Flash->error(__('The order item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
