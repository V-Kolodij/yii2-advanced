<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/25/18
 * Time: 1:07 PM
 */

namespace common\models;
use creocoder\translateable\TranslateableBehavior;
use yii\db\ActiveRecord;

/**
 * ...
 * @property string $title
 * @property string $body
 * ...
 */
class Post extends ActiveRecord
{

    public static function tableName()
    {
        return 'post';
    }
//    public function rules()
//    {
//        return [
//            [['test'], 'required'],
//            [['test'], 'string', 'max' => 255],
//            ];
//    }
    public function behaviors()
    {
        return [
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['title', 'description', 'text'],
                'translationRelation'=> 'translations',
               'translationLanguageAttribute' => 'language',
            ],
        ];
    }

    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_INSERT | self::OP_UPDATE,
        ];
    }

    public function getTranslations()
    {
        return $this->hasMany(PostTranslation::className(), ['post_id' => 'id']);
    }
}