<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Players Controller
 *
 * @property \App\Model\Table\PlayersTable $Players
 *
 * @method \App\Model\Entity\Player[] paginate($object = null, array $settings = [])
 */
class PlayersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Teams']
        ];
        $players = $this->paginate($this->Players);

        $this->set(compact('players'));
        $this->set('_serialize', ['players']);
    }

    /**
     * View method
     *
     * @param string|null $id Player id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $player = $this->Players->get($id, [
            'contain' => ['Users', 'Teams', 'Absences', 'Contacts', 'Ladders', 'Contacts.PhoneNumbers', 'Contacts.Relationships']
        ]);

        $this->set('player', $player);
        $this->set('_serialize', ['player']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $player = $this->Players->newEntity();
        if ($this->request->is('post')) {
            $player = $this->Players->patchEntity($player, $this->request->getData());

            if ($this->Players->save($player)) {
                $this->Flash->success(__('The player has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The player could not be saved. Please, try again.'));
        }
        $users = $this->Players->Users->find('list', ['limit' => 200]);
        $teams = $this->Players->Teams->find('list', ['limit' => 200]);
        $this->set(compact('player', 'users', 'teams'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Player id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $player = $this->Players->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $player = $this->Players->patchEntity($player, $this->request->getData());
         
            if ($this->Players->save($player)) {
                $this->Flash->success(__('The player has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The player could not be saved. Please, try again.'));
        }
        $users = $this->Players->Users->find('list', ['limit' => 200]);
        $teams = $this->Players->Teams->find('list', ['limit' => 200]);
        $this->set(compact('player', 'users', 'teams'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Player id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $player = $this->Players->get($id);
        if ($this->Players->delete($player)) {
            $this->Flash->success(__('The player has been deleted.'));
        } else {
            $this->Flash->error(__('The player could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    function choose($id = null) {
        // regular view code here
        $players = $this->Player->find('all', array(
          'contain' => array(
            'User'
          )
        ));
        // create a key-value that the FormHelper recognizes
        $players = Set::combine($players , '{n}.Player.id', '{n}.User.first_name');
      }
}
