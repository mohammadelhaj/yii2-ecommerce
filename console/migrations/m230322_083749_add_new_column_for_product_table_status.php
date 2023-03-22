<?php

use yii\db\Migration;

/**
 * Class m230322_083749_add_new_column_for_product_table_status
 */
class m230322_083749_add_new_column_for_product_table_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product}}', 'status', $this->string()->notNull()->after('currency'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230322_083749_add_new_column_for_product_table_status cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230322_083749_add_new_column_for_product_table_status cannot be reverted.\n";

        return false;
    }
    */
}
