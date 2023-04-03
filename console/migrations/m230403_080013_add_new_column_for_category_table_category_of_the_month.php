<?php

use yii\db\Migration;

/**
 * Class m230403_080013_add_new_column_for_category_table_category_of_the_month
 */
class m230403_080013_add_new_column_for_category_table_category_of_the_month extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%category}}', 'category_of_the_month', $this->string()->notNull()->after('image'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230403_080013_add_new_column_for_category_table_category_of_the_month cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230403_080013_add_new_column_for_category_table_category_of_the_month cannot be reverted.\n";

        return false;
    }
    */
}
