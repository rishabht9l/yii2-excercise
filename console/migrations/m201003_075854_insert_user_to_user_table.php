<?php

use yii\db\Migration;

/**
 * Class m201003_075854_insert_user_to_user_table
 */
class m201003_075854_insert_user_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    // migration to insert a user with auth_token to access APIS
    public function safeUp()
    {
        $this->insert('user',array(
            'email'=>'rishabhmehrotra1@gmail.com',
            'username' =>'rishabh-mehrotra',
            'password_hash' => '$2y$13$efY8d6XBSartiBowAJo4v.aRmPxEl5fF8gVCZHWWSFemTK55BOGtG',
            'auth_key' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImtpZCI6IjI5NTI4MTRmZjZiNDkyMyJ9.eyJzdWIiOiIyOTUyODE0ZmY2YjQ5MjMiLCJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE2MDE2NDk2NjQsImV4cCI6MTYwMTY1MzI2NCwianRpIjoiNzMwMzZjZDE2MDhlOTViIn0.XfnSXcX2hWiH6EoiNJdI3fX5iMgBQjdWadNZwhJTQF8',
            'status' => 1,
            'created_at' => 1527165123,
            'updated_at' => 1527165123,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201003_075854_insert_user_to_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201003_075854_insert_user_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
