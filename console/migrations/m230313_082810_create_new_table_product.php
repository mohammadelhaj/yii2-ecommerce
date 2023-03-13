<?php

use yii\db\Migration;

/**
 * Class m230313_082810_create_new_table_product
 */
class m230313_082810_create_new_table_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'price' => $this->double()->notNull(),
            'description' => $this->string()->notNull(),       
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230313_082810_create_new_table_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230313_082810_create_new_table_product cannot be reverted.\n";

        return false;
    }
    */
}
