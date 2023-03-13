<?php

use yii\db\Migration;

/**
 * Class m230311_170050_create_new_table_homepage_silder
 */
class m230311_170050_create_new_table_homepage_silder extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%homepage_slider}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'title' => $this->string()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230311_170050_create_new_table_homepage_silder cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230311_170050_create_new_table_homepage_silder cannot be reverted.\n";

        return false;
    }
    */
}
