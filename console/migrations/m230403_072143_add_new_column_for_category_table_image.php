<?php

use yii\db\Migration;

/**
 * Class m230403_072143_add_new_column_for_category_table_image
 */
class m230403_072143_add_new_column_for_category_table_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%category}}', 'image', $this->string()->notNull()->after('name'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230403_072143_add_new_column_for_category_table_image cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230403_072143_add_new_column_for_category_table_image cannot be reverted.\n";

        return false;
    }
    */
}
