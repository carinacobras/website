<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ladders Model
 *
 * @property \App\Model\Table\PlayersTable|\Cake\ORM\Association\BelongsTo $Players
 * @property \App\Model\Table\CompetitionsTable|\Cake\ORM\Association\HasMany $Competitions
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

        $this->belongsTo('Players', [
            'foreignKey' => 'player_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Competitions', [
            'foreignKey' => 'ladder_id'
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
            ->integer('rank')
            ->requirePresence('rank', 'create')
            ->notEmpty('rank')
            ->add('rank', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['rank']));
        $rules->add($rules->existsIn(['player_id'], 'Players'));

        return $rules;
    }
}
