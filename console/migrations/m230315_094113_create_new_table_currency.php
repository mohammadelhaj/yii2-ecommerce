<?php

use yii\db\Migration;

/**
 * Class m230315_094113_create_new_table_currency
 */
class m230315_094113_create_new_table_currency extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%currency}}', [
            'id' => $this->primaryKey(),
            'currency_country' => $this->string()->notNull(),
            'currency_name' => $this->string()->notNull(),
            'price_in_dollar' => $this->double()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230315_094113_create_new_table_currency cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230315_094113_create_new_table_currency cannot be reverted.\n";

        return false;
    }
    */
}
