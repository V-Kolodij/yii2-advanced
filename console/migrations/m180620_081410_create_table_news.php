<?php

use yii\db\Migration;

/**
 * Class m180620_081410_create_table_news
 */
class m180620_081410_create_table_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
                'id' => $this->primaryKey(),
                'title' => $this->string(255)->notNull(),
                'description' => $this->string(255)->notNull(),
                'text' => $this->text()->notNull(),
            ]
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
        return false;
    }
}


