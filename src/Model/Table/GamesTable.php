<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Games Model
 *
 * @property \App\Model\Table\CompetitionsTable|\Cake\ORM\Association\BelongsTo $Competitions
 * @property \App\Model\Table\LocationsTable|\Cake\ORM\Association\BelongsTo $Locations
 *
 * @method \App\Model\Entity\Game get($primaryKey, $options = [])
 * @method \App\Model\Entity\Game newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Game[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Game|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Game patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Game[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Game findOrCreate($search, callable $callback = null, $options = [])
 */
class GamesTable extends Table
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

        $this->setTable('games');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Competitions', [
            'foreignKey' => 'competition_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Locations', [
            'foreignKey' => 'location_id',
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
            ->requirePresence('time', 'create')
            ->notEmpty('time');

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
        $rules->add($rules->existsIn(['location_id'], 'Locations'));

        return $rules;
    }
}
