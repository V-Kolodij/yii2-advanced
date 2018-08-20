<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `post`.
 */
class m180625_095220_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => Schema::TYPE_PK,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post');
    }
}
