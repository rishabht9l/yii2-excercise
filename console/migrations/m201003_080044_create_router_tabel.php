<?php

use yii\db\Migration;

/**
 * Class m201003_080044_create_router_tabel
 */
class m201003_080044_create_router_tabel extends Migration
{
    /**
     * {@inheritdoc}
     */
    // migration for creating router table.
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%router}}', [
            'id' => $this->primaryKey(),
            'sap_id' => $this->string(18)->notNull()->unique(),
            'hostname' => $this->string(14)->notNull()->unique(),
            'loopback' => $this->string(32)->notNull()->unique(),
            'mac_address' => $this->string(32)->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201003_080044_create_router_tabel cannot be reverted.\n";

        return false;
    }


}
