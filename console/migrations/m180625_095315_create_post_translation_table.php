<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `post_translation`.
 */
class m180625_095315_create_post_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post_translation}}', [
            'post_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'language' => Schema::TYPE_STRING . '(16) NOT NULL',
            'title' => $this->string(255)->notNull(),
            'description' => $this->string(255)->notNull(),
            'text' => $this->text()->notNull(),
        ]);

        $this->addPrimaryKey('', '{{%post_translation}}', ['post_id', 'language']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post_translation');
    }
}
