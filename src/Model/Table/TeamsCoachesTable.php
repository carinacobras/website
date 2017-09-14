<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeamsCoaches Model
 *
 * @property \App\Model\Table\TeamsTable|\Cake\ORM\Association\BelongsTo $Teams
 * @property \App\Model\Table\CoachesTable|\Cake\ORM\Association\BelongsTo $Coaches
 *
 * @method \App\Model\Entity\TeamsCoach get($primaryKey, $options = [])
 * @method \App\Model\Entity\TeamsCoach newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TeamsCoach[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TeamsCoach|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TeamsCoach patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TeamsCoach[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TeamsCoach findOrCreate($search, callable $callback = null, $options = [])
 */
class TeamsCoachesTable extends Table
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

        $this->setTable('teams_coaches');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Coaches', [
            'foreignKey' => 'coach_id',
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
        $rules->add($rules->existsIn(['team_id'], 'Teams'));
        $rules->add($rules->existsIn(['coach_id'], 'Coaches'));

        return $rules;
    }
}
