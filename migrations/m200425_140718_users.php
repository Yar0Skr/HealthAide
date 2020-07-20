<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200425_140718_users
 */
class m200425_140718_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'username' => $this->string(),
            'password' => $this->string(),
            'auth_type' => $this->integer(),
            'is_delete'  => $this->integer()
                ->notNull()
                ->defaultValue(0),
            'created_at' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');

        $this->insert('users', [
            'name'       => 'admin',
            'username'   => 'admin',
            'password'   => Yii::$app->security->generatePasswordHash("adminadmin123"),
            'auth_type'  => 1,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200425_140718_users cannot be reverted.\n";

        return false;
    }
    */
}
