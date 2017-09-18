<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Charges Model
 *
 * @property \App\Model\Table\ChargeTypesTable|\Cake\ORM\Association\BelongsTo $ChargeTypes
 * @property \App\Model\Table\InvoiceItemsTable|\Cake\ORM\Association\HasMany $InvoiceItems
 *
 * @method \App\Model\Entity\Charge get($primaryKey, $options = [])
 * @method \App\Model\Entity\Charge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Charge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Charge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Charge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Charge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Charge findOrCreate($search, callable $callback = null, $options = [])
 */
class ChargesTable extends Table
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

        $this->setTable('charges');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ChargeTypes', [
            'foreignKey' => 'charge_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('InvoiceItems', [
            'foreignKey' => 'charge_id'
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
        $rules->add($rules->existsIn(['charge_type_id'], 'ChargeTypes'));

        return $rules;
    }
}
