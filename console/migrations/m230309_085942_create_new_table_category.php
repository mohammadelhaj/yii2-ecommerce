<?php

use yii\db\Migration;

/**
 * Class m230309_085942_create_new_table_category
 */
class m230309_085942_create_new_table_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->notNull(),
            'name' => $this->string(32)->notNull(),
            'description' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230309_085942_create_new_table_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230309_085942_create_new_table_category cannot be reverted.\n";

        return false;
    }
    */
}
