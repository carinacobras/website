<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChargeTypes Model
 *
 * @property \App\Model\Table\ChargesTable|\Cake\ORM\Association\HasMany $Charges
 *
 * @method \App\Model\Entity\ChargeType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ChargeType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ChargeType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ChargeType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChargeType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ChargeType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ChargeType findOrCreate($search, callable $callback = null, $options = [])
 */
class ChargeTypesTable extends Table
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

        $this->setTable('charge_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Charges', [
            'foreignKey' => 'charge_type_id'
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->date('year')
            ->requirePresence('year', 'create')
            ->notEmpty('year');

        return $validator;
    }
}
