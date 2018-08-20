<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/3/18
 * Time: 1:03 PM
 */

namespace common\job;


use common\models\Blog;
use common\models\User;
use Yii;
use yii\base\Object;
use yii\queue\JobInterface;

class MailJob extends Object implements JobInterface
{
    public $blogId;
    public $userId;



    public function execute($queue)
    {
        $blog = Blog::findOne($this->blogId);
        $user = User::findOne($this->userId);

        Yii::$app->mailer->compose()
            ->setTo($user->email)
            ->setFrom(Yii::$app->params['adminEmail'])
            ->setSubject($blog->title)
            ->setTextBody($blog->text)
            ->send();

    }
}