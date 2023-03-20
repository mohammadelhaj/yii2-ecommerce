<?php

use yii\db\Migration;

/**
 * Class m230320_095248_add_new_table_Shopping_cart
 */
class m230320_095248_add_new_table_Shopping_cart extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shopping_cart}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230320_095248_add_new_table_Shopping_cart cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230320_095248_add_new_table_Shopping_cart cannot be reverted.\n";

        return false;
    }
    */
}
