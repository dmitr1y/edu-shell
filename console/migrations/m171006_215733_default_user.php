<?php//        $this->db->schema->getTableSchema('my_table', true) === null

use yii\db\Migration;

class m171006_215733_default_user extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        if ($this->db->schema->getTableSchema('{{%user}}') === null) {
            $this->insert('{{%user}}',['id' => 1,
                'name' => 'admin',
                'password_hash'=> '$2y$13$uqe3LPW9ya3RZhynJpPN5um9fvdxUmoqjOqQBJDdIDXSKxRZB5bPu',
                'auth_key'=>'',
                'password_reset_token'=>'',
                'email'=>'',
                'status'=>10,
                'role' =>0,
                'created_at'=> 0,
                'updated_at' => '',
                ]);
        }
    }

    public function safeDown()
    {
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171006_215733_default_user cannot be reverted.\n";

        return false;
    }
    */
}
