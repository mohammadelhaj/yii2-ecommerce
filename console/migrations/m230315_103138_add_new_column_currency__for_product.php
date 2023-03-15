<?php

use yii\db\Migration;

/**
 * Class m230315_103138_add_new_column_currency__for_product
 */
class m230315_103138_add_new_column_currency__for_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product}}', 'currency',$this->string()->notNull()->after('price'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230315_103138_add_new_column_currency__for_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230315_103138_add_new_column_currency__for_product cannot be reverted.\n";

        return false;
    }
    */
}
