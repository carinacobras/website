<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlayersFees Model
 *
 * @property \App\Model\Table\FeesTable|\Cake\ORM\Association\BelongsTo $Fees
 * @property \App\Model\Table\PlayersTable|\Cake\ORM\Association\BelongsTo $Players
 *
 * @method \App\Model\Entity\PlayersFee get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlayersFee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlayersFee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlayersFee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlayersFee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlayersFee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlayersFee findOrCreate($search, callable $callback = null, $options = [])
 */
class PlayersFeesTable extends Table
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

        $this->setTable('players_fees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Fees', [
            'foreignKey' => 'fees_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Players', [
            'foreignKey' => 'players_id',
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

        $validator
            ->scalar('status')
            ->allowEmpty('status');

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
        $rules->add($rules->existsIn(['fees_id'], 'Fees'));
        $rules->add($rules->existsIn(['players_id'], 'Players'));

        return $rules;
    }
}
