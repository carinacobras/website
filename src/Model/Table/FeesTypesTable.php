<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FeesTypes Model
 *
 * @property \App\Model\Table\FeesTable|\Cake\ORM\Association\HasMany $Fees
 *
 * @method \App\Model\Entity\FeesType get($primaryKey, $options = [])
 * @method \App\Model\Entity\FeesType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FeesType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FeesType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FeesType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FeesType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FeesType findOrCreate($search, callable $callback = null, $options = [])
 */
class FeesTypesTable extends Table
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

        $this->setTable('fees_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Fees', [
            'foreignKey' => 'fees_type_id'
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
            ->allowEmpty('name');

        return $validator;
    }
}
