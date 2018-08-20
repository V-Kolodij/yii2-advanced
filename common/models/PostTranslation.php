<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post_translation".
 *
 * @property int $post_id
 * @property string $language
 * @property string $title
 * @property string $body
 */
class PostTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['language', 'title', 'description', 'text'], 'required'],
            [['post_id'], 'integer'],
            [['description', 'text'], 'string'],
            [['language'], 'string', 'max' => 16],
            [['title'], 'string', 'max' => 255],
            [['post_id', 'language'], 'unique', 'targetAttribute' => ['post_id', 'language']],
        ];
    }

    /**
     * {@inheritdoc}
     */
        public function attributeLabels()
        {
            switch ($this->language) {
                case 'de-DE':
                    return [
                        'title' => 'Titel DE',
                        'description' => 'Inhalt DE',
                        'text' => 'Text-DE',
                    ];
                case 'ru-RU':
                    return [
                        'title' => 'Заголовок RU',
                        'description' => 'Опис RU',
                        'text' => 'Текст RU',
                    ];
                default:
                    return [
                        'title' => Yii::t('app', 'title'),
                        'description' => Yii::t('app', 'description'),
                        'text' => Yii::t('app', 'text'),
                    ];
            }
        }
}
