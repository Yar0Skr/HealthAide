<?php

use yii\db\Migration;

/**
 * Class m200717_111735_add_name_field_to_location
 */
class m200717_111735_add_name_field_to_location extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('locations','name',$this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200717_111735_add_name_field_to_location cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200717_111735_add_name_field_to_location cannot be reverted.\n";

        return false;
    }
    */
}
