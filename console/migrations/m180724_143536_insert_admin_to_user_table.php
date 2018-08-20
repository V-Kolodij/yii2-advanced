<?php

use dektrium\user\helpers\Password;
use yii\db\Migration;
use dektrium\user\models\User;


/**
 * Class m180724_143536_insert_admin_to_user_table
 */
class m180724_143536_insert_admin_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $time = time();

        $this->insert('{{%user}}', [
            'id' => 1,
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password_hash' => Password::hash('123456'),
            'auth_key' => \Yii::$app->security->generateRandomString(),
            'confirmed_at' => $time,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        $this->insert('{{profile}}', ['user_id' => 1]);
    }

    public function down()
    {
        $user = User::findOne(['username' => 'admin']);
        Yii::$app->authManager->revokeAll($user->id);
        Yii::$app->runAction('user/delete', [
            'admin',
            'interactive' => false
        ]);
    }
}