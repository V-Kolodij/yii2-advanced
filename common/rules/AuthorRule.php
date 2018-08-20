<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/19/18
 * Time: 4:16 PM
 */

namespace common\rules;


use yii\rbac\Item;
use yii\rbac\Rule;

class AuthorRule extends Rule
{
    public $name = 'isAuthor';

    /**
     * Executes the rule.
     *
     * @param string|int $user the user ID. This should be either an integer or a string representing
     * the unique identifier of a user. See [[\yii\web\User::id]].
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to [[CheckAccessInterface::checkAccess()]].
     * @return bool a value indicating whether the rule permits the auth item it is associated with.
     */
    public function execute($user_id, $item, $params)
    {
        return (isset($params['author_id']) and ($params['author_id'] == $user_id)) ? true : false;

    }
}