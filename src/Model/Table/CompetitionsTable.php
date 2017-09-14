<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Competitions Model
 *
 * @method \App\Model\Entity\Competition get($primaryKey, $options = [])
 * @method \App\Model\Entity\Competition newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Competition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Competition|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Competition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Competition[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Competition findOrCreate($search, callable $callback = null, $options = [])
 */
class CompetitionsTable extends Table
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

        $this->setTable('competitions');
        $this->setDisplayField('name');
        $this->setPrimaryKey(['id', 'name', 'year']);
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
            ->allowEmpty('name', 'create')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->dateTime('year')
            ->allowEmpty('year', 'create');

        $validator
            ->dateTime('time')
            ->requirePresence('time', 'create')
            ->notEmpty('time');

        $validator
            ->scalar('comments')
            ->allowEmpty('comments');

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
        $rules->add($rules->isUnique(['name']));
        $rules->add($rules->isUnique(['year']));

        return $rules;
    }
}
