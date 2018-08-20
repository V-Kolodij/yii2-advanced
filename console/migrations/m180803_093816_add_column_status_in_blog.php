<?php

use yii\db\Migration;

/**
 * Class m180803_093816_add_column_status_in_blog
 */
class m180803_093816_add_column_status_in_blog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('blog', 'status', $this->integer(1)->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('blog', 'status');

    }


}
