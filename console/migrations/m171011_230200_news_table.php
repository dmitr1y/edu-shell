<?php

use yii\db\Migration;

class m171011_230200_news_table extends Migration
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
                'id' => $this->primaryKey()->unique(),
                'header' => $this->string()->notNull(),
                'content' => $this->text()->notNull(),
                'author' => $this->string()->notNull(),
                'date' => $this->timestamp()->defaultValue(['expression'=>'CURRENT_TIMESTAMP']),
                'type' => $this->string()->defaultValue('normal'),
                'anons' => $this->text(),
                'slug' => $this->text()->unique(),
            ], $tableOptions);
        }
    }

    public function safeDown()
    {
        $this->dropTable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171011_230200_news_table cannot be reverted.\n";

        return false;
    }
    */
}
