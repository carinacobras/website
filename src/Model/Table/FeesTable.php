<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fees Model
 *
 * @property \App\Model\Table\FeesTypesTable|\Cake\ORM\Association\BelongsTo $FeesTypes
 * @property |\Cake\ORM\Association\HasMany $Transactions
 * @property \App\Model\Table\PlayersTable|\Cake\ORM\Association\BelongsToMany $Players
 *
 * @method \App\Model\Entity\Fee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fee findOrCreate($search, callable $callback = null, $options = [])
 */
class FeesTable extends Table
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

        $this->setTable('fees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('FeesTypes', [
            'foreignKey' => 'fees_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'fee_id'
        ]);
        $this->belongsToMany('Players', [
            'foreignKey' => 'fee_id',
            'targetForeignKey' => 'player_id',
            'joinTable' => 'players_fees'
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
        $rules->add($rules->existsIn(['fees_type_id'], 'FeesTypes'));

        return $rules;
    }
}
