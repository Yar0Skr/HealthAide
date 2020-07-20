<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%blog}}`.
 */
class m200705_105103_create_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'header' => $this->string(),
            'short_info' => $this->text(),
            'text'=> $this->text(),
            'image' => $this->string(),
            'alt_tag' => $this->string(),
            'order_number' => $this->integer(),
            'url_name' => $this->string()->unique()->notNull(),
            'read_time' => $this->string(),
            'author' => $this->string(),
            'is_delete'  => $this->integer()
                ->notNull()
                ->defaultValue(0),
            'created_at' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog}}');
    }
}
