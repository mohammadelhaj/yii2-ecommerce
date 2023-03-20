<?php

use yii\db\Migration;

/**
 * Class m230320_101150_add_new_column_price_for_shoopin_cart_table
 */
class m230320_101150_add_new_column_price_for_shoopin_cart_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('shopping_cart', 'price', $this->double());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230320_101150_add_new_column_price_for_shoopin_cart_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230320_101150_add_new_column_price_for_shoopin_cart_table cannot be reverted.\n";

        return false;
    }
    */
}
