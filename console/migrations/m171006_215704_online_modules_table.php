<?php

use yii\db\Migration;

class m171006_215704_online_modules_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
//        $this->db->schema->getTableSchema('my_table', true) === null
        if ($this->db->schema->getTableSchema('online_modules') === null) {
            $this->createTable('online_modules', [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull()->unique(),
                'url' => $this->text()->notNull(),
                'description' => $this->text(),
                'slug' => $this->string()->unique(),
            ], $tableOptions);
        }
    }

    public function safeDown()
    {
//        echo "m171006_215704_online_modules_table cannot be reverted.\n";
        $this->dropTable('online_modules');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171006_215704_online_modules_table cannot be reverted.\n";

        return false;
    }
    */
}
