<?php

use yii\db\Migration;

class m171006_215715_offline_modules_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
//        $this->db->schema->getTableSchema('my_table', true) === null
        if ($this->db->schema->getTableSchema('offline_modules') === null) {
            $this->createTable('offline_modules', [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull()->unique(),
                'description' => $this->string(),
                'win' => $this->boolean()->defaultValue(0),
                'mac' => $this->boolean()->defaultValue(0),
                'lin' => $this->boolean()->defaultValue(0),
                'libs' => $this->string(),
                'instruction' => $this->text(),
                'url' => $this->text()->notNull(),
                'slug' => $this->string()->unique(),
            ], $tableOptions);
        }
    }

    public function safeDown()
    {
        $this->dropTable('offline_modules');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171006_215715_offline_modules_table cannot be reverted.\n";

        return false;
    }
    */
}
