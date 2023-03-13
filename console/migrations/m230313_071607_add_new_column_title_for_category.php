<?php

use yii\db\Migration;

/**
 * Class m230313_071607_add_new_column_title_for_category
 */
class m230313_071607_add_new_column_title_for_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%category}}', 'title', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230313_071607_add_new_column_title_for_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230313_071607_add_new_column_title_for_category cannot be reverted.\n";

        return false;
    }
    */
}
