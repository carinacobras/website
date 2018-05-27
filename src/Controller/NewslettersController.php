<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use SendGrid;
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


            // $emails = $this->Emails->find('all',
            // [
            //     'contain' => ['Users'],
            //     'fields' => ['Users.first_name', 'Users.last_name', 'Emails.email_address']
            // ]
            // );

            // $from = new SendGrid\Email("Carina Cobras", "registrar@carinacobras.com.au");
            // $subject = $newsletter->subject;
            // $to = new SendGrid\Email("Registrar", "carinacobras@gmail.com");
           
            // $content = new SendGrid\Content("text/html", $newsletter->body);
            // $mail = new SendGrid\Mail($from, $subject, $to, $content);

            // $mail = new \SendGrid\Mail\Mail();

            $mail = new Email();

            $mail->from("registrar@carinacobras.com.au");
            $mail->to('tross1@tysonross.com');
            $mail->subject('test');

            // $mail->setFrom("Carina Cobras", "registrar@carinacobras.com.au");
            // $mail->setSubject($newsletter->subject);
            // $mail->addTo("Registrar", "carinacobras@gmail.com");
            // $mail->addContent("text/html", $newsletter->body);

            // $header = new Smtpapi\Header();

            // $header->addTo('tross1@tysonross.com');
            // $header->addTo('tross2@tysonross.com');

            // $header->addSendEachAt( strtotime('+5 minutes'));
            // $header->addSendEachAt( strtotime('+10 minutes'));
            
            // echo $header->jsonString();
            //$mail->addHeader($header->jsonString());
            
            // foreach ($emails as $email) {
            //     $sg_email = new Email($email['user']['first_name'] . ' ' . $email['user']['last_name'], $email['email_address']);
            //     $mail->personalization[0]->addTo($sg_email);
            // }

            // $mail->personalization[0]->addTo(new Email('Tyson Ross', 'tross1@tysonross.com'));
            // $mail->personalization[0]->addTo(new Email('Tyson Ross', 'tross2@tysonross.com'));

            // $json = json_encode( $mail);

            // $arr = json_decode($json, true);

            // $mail->set

            // $arr['personalizations']['send_each_at'] = [strtotime('+5 minutes'), strtotime('+10 minutes')];

            // echo json_encode( $arr);

           // $apiKey = getenv('SENDGRID_API_KEY');

            // $sg = new \SendGrid($apiKey);

            //$mail->setHeaders(array('x-smtpapi' => $header->jsonString()));
           
           
           // $response = $mail->send();
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
