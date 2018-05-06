<?php
/**
 */
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;

class ContactForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('enquirytype', ['type' => 'select'])
            ->addField('body', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('name', 'length', [
                'rule' => ['minLength', 10],
                'message' => 'A name is required'
            ])->add('email', 'format', [
                'rule' => 'email',
                'message' => 'A valid email address is required',
            ]);
    }
		
    protected function _execute(array $data)
    {
        $email = new Email();
        $email->profile('default');
        $enquiry_array = ['Uniform Query', 'Fees Query', 'First Time Player', 'General Query', 'Change Contact Details'];
        $email->from([$data['email']])
        ->to('carinacobras@gmail.com')
        ->subject($enquiry_array[$data['enquirytype']])
        ->send([$data['body']]);
        return true;
    }
}

?>