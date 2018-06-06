<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use SendGrid;
use Smtpapi;

use Cake\Event\Event;
use App\Controller\AppController;

require dirname(__DIR__) . '/../vendor/autoload.php';


/**
 * Newsletters Controller
 *
 * @property \App\Model\Table\NewslettersTable $Newsletters
 *
 * @method \App\Model\Entity\Newsletter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewslettersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $newsletters = $this->paginate($this->Newsletters);

        $this->set(compact('newsletters'));
    }

    /**
     * View method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newsletter = $this->Newsletters->get($id, [
            'contain' => []
        ]);
        $this->Emails = TableRegistry::get('Emails');
        $this->Users = TableRegistry::get('Users');



        if ($this->request->is(['patch', 'post', 'put'])) {
           
            $data = $this->request->getData();

            $newsletter = $this->Newsletters->patchEntity($newsletter, $data);
            if ($this->Newsletters->save($newsletter)) {
    
                $emails = $this->Emails->find('all', array(
                    'field' => array('Email.email_address')
                ));
                foreach ($emails as $email) {
                    $emailSender = new Email();
                    $emailSender->profile('default');
                    $from_address = 'registrar@carinacobras.com.au';
                    $body = $newsletter['body'] . '<p><a href="[UNSUBSCRIBE]">Unsubscribe here</a></p>';
    
                    $emailSender->from($from_address)
                    ->to($email->email_address)
                    ->subject($newsletter['subject'])
                    ->send($body);
                }

                $this->Flash->success(__('The newsletter has been sent.'));
            } else {
                $this->Flash->error(__('The newsletter could not be saved. Please, try again.'));
            }
        }

        $this->set('newsletter', $newsletter);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['index']);
        

        // if ($this->Auth->user('role_id') != 2) {
        //     $this->Auth->deny('index');
        // }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newsletter = $this->Newsletters->newEntity();
        if ($this->request->is('post')) {
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
            if ($this->Newsletters->save($newsletter)) {

                $this->Flash->success(__('The newsletter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter could not be saved. Please, try again.'));
        }
        $this->set(compact('newsletter'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newsletter = $this->Newsletters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
            if ($this->Newsletters->save($newsletter)) {
                $this->Flash->success(__('The newsletter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter could not be saved. Please, try again.'));
        }
        $this->set(compact('newsletter'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newsletter = $this->Newsletters->get($id);
        if ($this->Newsletters->delete($newsletter)) {
            $this->Flash->success(__('The newsletter has been deleted.'));
        } else {
            $this->Flash->error(__('The newsletter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
