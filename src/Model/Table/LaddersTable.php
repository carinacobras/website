<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ladders Model
 *
 * @property \App\Model\Table\CompetitionsTable|\Cake\ORM\Association\BelongsTo $Competitions
 * @property \App\Model\Table\PlayersTable|\Cake\ORM\Association\BelongsTo $Players
 *
 * @method \App\Model\Entity\Ladder get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ladder newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ladder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ladder|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ladder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ladder[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ladder findOrCreate($search, callable $callback = null, $options = [])
 */
class LaddersTable extends Table
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

        $this->setTable('ladders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Competitions', [
            'foreignKey' => 'competition_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Players', [
            'className' => 'Players',
            'foreignKey' => 'player_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'className' => 'Players',
            'foreignKey' => 'id',
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
        $rules->add($rules->existsIn(['competition_id'], 'Competitions'));
        $rules->add($rules->existsIn(['player_id'], 'Players'));

        return $rules;
    }
}
