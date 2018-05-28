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
        $this->Newsltters = TableRegistry::get('Newsletters');

        // $emails = $this->Emails->find('all', array(
        //     'field' => array('Email.email_address')
        // ));

        // $newsletters = 

    
        // foreach ($emails as $email) {
        //     $this->out($email->email_address);
        // }
    }
}

?>