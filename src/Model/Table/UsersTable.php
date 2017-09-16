<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\CoachesTable|\Cake\ORM\Association\HasMany $Coaches
 * @property \App\Model\Table\EmailsTable|\Cake\ORM\Association\HasMany $Emails
 * @property \App\Model\Table\ManagersTable|\Cake\ORM\Association\HasMany $Managers
 * @property \App\Model\Table\PhoneNumbersTable|\Cake\ORM\Association\HasMany $PhoneNumbers
 * @property \App\Model\Table\PlayersTable|\Cake\ORM\Association\HasMany $Players
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\HasMany $Roles
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    protected function _getFullName()
    {
        return $this->_properties['first_name'] . '  ' .
            $this->_properties['last_name'];
    }

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('full_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Coaches', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Emails', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Managers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('PhoneNumbers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Players', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Roles', [
            'foreignKey' => 'user_id'
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

        $validator
            ->scalar('first_name')
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->dateTime('dob')
            ->requirePresence('dob', 'create')
            ->notEmpty('dob');

        return $validator;
    }
}
