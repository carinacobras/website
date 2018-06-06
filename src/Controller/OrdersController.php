<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 *
 * @method \App\Model\Entity\Order[] paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 100000,
            'maxLimit' => 10000,
            'contain' => ['Players']
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
        $this->set('_serialize', ['orders']);
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Players', 'Invoices', 'orderlines']
        ]);

        $this->set('order', $order);
        $this->set('_serialize', ['order']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Orderlines = TableRegistry::get('Orderlines');
        $this->Orderitems = TableRegistry::get('Orderitems');

        $players = $this->Orders->Players->find('list', ['limit' => 10000, 'maxLimit' => 10000]);
        $orderitems = $this->Orderitems->find('list');

        $order = $this->Orders->newEntity();

        if ($this->request->is('post')) {

            $player = $this->Orders->Players->find('all', [
                'conditions' => ['id =' => $this->request->data['player_id']]
                ])->first();

            $data = $this->request->getData();
            $data['name'] = $player->full_name;

            $order = $this->Orders->patchEntity($order, $data);

       

            $saveorder = $this->Orders->save($order);
            if ( $saveorder ) {
                $this->Flash->success(__('The order has been saved.'));

                $o =  $this->Orderitems->find('all');

                foreach ($o as $orderitem) {
                    $data = [
                    'order_id'    => $order->id,
                    'order_item_id'    => $orderitem->id,
                    'player_name'    => $player->full_name
                    ];
                    $orderline = $this->Orderlines->newEntity();
                    $this->Orderlines->patchEntity($orderline, $data);
                    $this->Orderlines->save($orderline);
                }
                
               return $this->redirect(['action' => 'index']);
           }
           $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }

        $this->set(compact('order', 'players', 'orderitems'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $players = $this->Orders->Players->find('list', ['limit' => 200]);
        $this->set(compact('order', 'players'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
