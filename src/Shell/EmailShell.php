<?php
namespace App\Shell;
use Cake\Console\ConsoleOptionParser;
use Cake\Console\Shell;
use Cake\Mailer\Email;
use Cake\ORM\TableRegistry;

class EmailShell extends Shell
{
    public function main()
    {
        $this->Emails = TableRegistry::get('Emails');
        $this->Newsletters = TableRegistry::get('Newsletters');

        $id = 1;

        $newsletter = $this->Newsletters->get($id, [
            'contain' => []
        ]);

        $emails = $this->Emails->find('all', array(
            'field' => array('Email.email_address')
        ));

        foreach ($emails as $email) {
            $emailSender = new Email();
            $emailSender->profile('default');
            $from_address = 'registrar@carinacobras.com.au';

            $emailSender->from($from_address)
            ->to($email->email_address)
            ->subject($newsletter['subject'])
            ->send($newsletter['body']);
        }

    
    }
}

?>