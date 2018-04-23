<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orderitems Model
 *
 * @property \App\Model\Table\OrderlinesTable|\Cake\ORM\Association\HasMany $orderlines
 *
 * @method \App\Model\Entity\Orderitem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Orderitem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Orderitem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Orderitem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Orderitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Orderitem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Orderitem findOrCreate($search, callable $callback = null, $options = [])
 */
class OrderitemsTable extends Table
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

        $this->setTable('order_items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('orderlines', [
            'foreignKey' => 'order_item_id'
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
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        return $validator;
    }
}
