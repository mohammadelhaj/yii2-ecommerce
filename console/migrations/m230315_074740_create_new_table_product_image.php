<?php

use yii\db\Migration;

/**
 * Class m230315_074740_create_new_table_product_image
 */
class m230315_074740_create_new_table_product_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_image}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'image_name' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230315_074740_create_new_table_product_image cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230315_074740_create_new_table_product_image cannot be reverted.\n";

        return false;
    }
    */
}
