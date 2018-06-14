<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactsPhonenumbers Model
 *
 * @property \App\Model\Table\ContactsTable|\Cake\ORM\Association\BelongsTo $Contacts
 * @property |\Cake\ORM\Association\BelongsTo $Phonenumbers
 *
 * @method \App\Model\Entity\ContactsPhonenumber get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactsPhonenumber newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ContactsPhonenumber[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactsPhonenumber|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactsPhonenumber patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactsPhonenumber[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactsPhonenumber findOrCreate($search, callable $callback = null, $options = [])
 */
class ContactsPhonenumbersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('contacts_phonenumbers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Phonenumbers', [
            'foreignKey' => 'phonenumber_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));
        $rules->add($rules->existsIn(['phonenumber_id'], 'Phonenumbers'));

        return $rules;
    }
}
