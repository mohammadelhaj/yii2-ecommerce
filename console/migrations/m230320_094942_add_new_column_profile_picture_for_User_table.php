<?php

use yii\db\Migration;

/**
 * Class m230320_094942_add_new_column_profile_picture_for_User_table
 */
class m230320_094942_add_new_column_profile_picture_for_User_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'profile_pic',$this->string()->notNull()->after('username'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230320_094942_add_new_column_profile_picture_for_User_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230320_094942_add_new_column_profile_picture_for_User_table cannot be reverted.\n";

        return false;
    }
    */
}
