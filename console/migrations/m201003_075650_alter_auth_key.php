<?php

use yii\db\Migration;

/**
 * Class m201003_075650_alter_auth_key
 */
class m201003_075650_alter_auth_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('user', 'auth_key', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201003_075650_alter_auth_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201003_075650_alter_auth_key cannot be reverted.\n";

        return false;
    }
    */
}
