<?php

use yii\db\Migration;

/**
 * Class m230320_144701_add_new_column_product_id_for_table_ordre
 */
class m230320_144701_add_new_column_product_id_for_table_ordre extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'product_id', $this->integer()->notNull()->after('seller_id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230320_144701_add_new_column_product_id_for_table_ordre cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230320_144701_add_new_column_product_id_for_table_ordre cannot be reverted.\n";

        return false;
    }
    */
}
