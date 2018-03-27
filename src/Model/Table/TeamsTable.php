<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teams Model
 *
 * @property \App\Model\Table\CompetitionsTable|\Cake\ORM\Association\BelongsTo $Competitions
 * @property \App\Model\Table\TrainingTable|\Cake\ORM\Association\HasMany $Training
 * @property \App\Model\Table\CoachesTable|\Cake\ORM\Association\HasMany $Coaches
 * @property \App\Model\Table\ManagersTable|\Cake\ORM\Association\HasMany $Managers
 * @property \App\Model\Table\PlayersTable|\Cake\ORM\Association\HasMany $Players
 * @property \App\Model\Table\TeamsJerseysTable|\Cake\ORM\Association\HasMany $TeamsJerseys
 *
 * @method \App\Model\Entity\Team get($primaryKey, $options = [])
 * @method \App\Model\Entity\Team newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Team[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Team|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Team patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Team[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Team findOrCreate($search, callable $callback = null, $options = [])
 */
class TeamsTable extends Table
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

        $this->setTable('teams');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Competitions', [
            'foreignKey' => 'competition_id'
        ]);
        $this->hasMany('Coaches', [
            'foreignKey' => 'team_id'
        ]);
        $this->hasMany('Managers', [
            'foreignKey' => 'team_id'
        ]);
        $this->hasMany('Players', [
            'foreignKey' => 'team_id'
        ]);
        $this->hasMany('Training', [
            'foreignKey' => 'team_id'
        ]);
        $this->hasMany('TeamsJerseys', [
            'foreignKey' => 'team_id'
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
            ->scalar('gender')
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

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

        return $rules;
    }
}
