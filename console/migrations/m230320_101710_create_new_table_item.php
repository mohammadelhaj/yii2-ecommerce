<?php

use yii\db\Migration;

/**
 * Class m230320_101710_create_new_table_item
 */
class m230320_101710_create_new_table_item extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'order_items',
            [
                'id' => $this->primaryKey(),                
                'order_id' => $this->integer()->notNull(),
                'user_id' => $this->integer()->notNull(),
                'seller_id' => $this->integer()->notNull(),
                'total_cost' => $this->double()->notNull(),
                'status' => $this->string(20)->notNull(),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230320_101710_create_new_table_item cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230320_101710_create_new_table_item cannot be reverted.\n";

        return false;
    }
    */
}
