<?php

use yii\db\Migration;

/**
 * Class m230403_085501_add_new_column_for_product_featured_product
 */
class m230403_085501_add_new_column_for_product_featured_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product}}', 'featured', $this->string()->notNull()->after('description'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230403_085501_add_new_column_for_product_featured_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230403_085501_add_new_column_for_product_featured_product cannot be reverted.\n";

        return false;
    }
    */
}
