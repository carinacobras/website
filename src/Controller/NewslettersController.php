<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use SendGrid;
use SendGrid\Email;
use Smtpapi;

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
            $this->Flash->success(__('The newsletter has been sent.'));


            $emails = $this->Emails->find('all',
            [
                'contain' => ['Users'],
                'fields' => ['Users.first_name', 'Users.last_name', 'Emails.email_address']
            ]
            );

            $from = new SendGrid\Email("Carina Cobras", "registrar@carinacobras.com.au");
            $subject = $newsletter->subject;
            $to = new SendGrid\Email("Registrar", "registrar@carinacobras.com.au");
           
            $content = new SendGrid\Content("text/plain", $newsletter->body);
            $mail = new SendGrid\Mail($from, $subject, $to, $content);
            
            foreach ($emails as $email) {
                $sg_email = new Email($email['user']['first_name'] . ' ' . $email['user']['last_name'], $email['email_address']);
                $mail->personalization[0]->addTo($sg_email);
            }

            // $apiKey = getenv('SENDGRID_API_KEY');

            // $sg = new \SendGrid($apiKey);
            // $response = $sg->client->mail()->send()->post($mail);
        }

        $this->set('newsletter', $newsletter);
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
