<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/2/18
 * Time: 12:19 PM
 */

namespace common\job;
use yii\base\Object;
use yii\queue\JobInterface;

class WriteJob extends Object implements JobInterface
{
    public $text;
    public $title;
    public $file;
    public function execute($queue)
    {
        $content = file_get_contents($this->file);
        $content.="\n";
        file_put_contents($this->file, ($content.implode(' , ', [$this->title, $this->text])));
    }

}