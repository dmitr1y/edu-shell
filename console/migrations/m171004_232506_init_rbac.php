<?php

use yii\db\Migration;

class m171004_232506_init_rbac extends Migration
{
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $viewPost=$auth->createPermission('viewPost');
        $viewPost->description= 'View post';
        $auth->add($viewPost);

        $user=$auth->createRole('user');
        $auth->add($user);
        $auth->addChild($user,$viewPost);

        // add "createPost" permission
        $createPost = $auth->createPermission('createPost');
        $createPost->description = 'Create a post';
        $auth->add($createPost);

        // add "updatePost" permission
        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);

        // add "author" role and give this role the "createPost" permission
        $author = $auth->createRole('author');
        $auth->add($author);
        $auth->addChild($author, $createPost);


        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updatePost);
        $auth->addChild($admin, $author);

        $viewAdmin=$auth->createPermission('viewAdmin');
        $auth->add($viewAdmin);

        $auth->addChild($admin,$viewAdmin);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($author, 2);
        $auth->assign($admin, 1);
    }

    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
        return false;
    }
}
