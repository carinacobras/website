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
			->addField('phonenumber', ['type' => 'string'])
            ->addField('enquirytype', ['type' => 'select'])
            ->addField('body', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('name', 'length', [
                'rule' => ['minLength', 1],
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
        $enquiry_array = ['Uniform Query', 'Fees Query', 'First Time Player - Boys', 'First Time Player - Girls', 'General Query', 'Update my details'];
        $email_address = 'registrar@carinacobras.com.au';
        if ($data['enquirytype'] == 4) {
            $email_address = 'girlsregistrar@carinacobras.com.au';
        }
	 if ($data['enquirytype'] == 1) {
            $email_address = 'joseph19roque@yahoo.com';
        }
	 if ($data['enquirytype'] == 2) {
            $email_address = 'treasurer@carinacobras.com.au';
        }
            $email->from([$data['email']])
            ->to($email_address)
            ->subject($enquiry_array[$data['enquirytype']])
            ->send([$data['body']]);

        return true;
    }
}

?>
