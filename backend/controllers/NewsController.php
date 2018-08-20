<?php

namespace backend\controllers;

use common\rules\AuthorRule;
use Yii;
use common\models\News;
use backend\models\NewsSearch;
use yii\filters\AccessControl;
//use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\controllers\Controller;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],

                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);


            return $this->render('view', [
                'model' => $model,
            ]);

    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();


        if (Yii::$app->request->post()) {
            $dates = Yii::$app->request->post();


//print_r(Yii::$app->request->post());die;


            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
//
//
            }

//return $this->redirect(['view', 'id' => $model->id]);

//            if ($model->save()) {
//                return $this->redirect(['view', 'id' => $model->id]);
//            }
        }
//$post = Yii::$app->request->post();

//print_r($post);die();
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        $user_id = $model->user_id;
        if(Yii::$app->user->can('updateNews', ['author_id' => $user_id])){
            return $this->render('update', [
                'model' => $model,
            ]);
        }else{ throw new ForbiddenHttpException('У вас недостаточно прав для выполнения указанного действия');}

    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionRole()
    {
//        $admin = Yii::$app->authManager->createRole('admin');
//        $admin->description = 'Администратор';
//        Yii::$app->authManager->add($admin);
//
//        $content = Yii::$app->authManager->createRole('content');
//        $content->description = 'Контент менеджер';
//        Yii::$app->authManager->add($content);
//
//        $user = Yii::$app->authManager->createRole('user');
//        $user->description = 'Пользователь';
//        Yii::$app->authManager->add($user);
//
//        $ban = Yii::$app->authManager->createRole('banned');
//        $ban->description = 'Забанен';
//        Yii::$app->authManager->add($ban);

//        $permit = Yii::$app->authManager->createPermission('canAdmin');
//        $permit->description = 'Право на вход в админку';
//        Yii::$app->authManager->add($permit);

//        $role_admin = Yii::$app->authManager->getRole('admin');
//        $role_cont = Yii::$app->authManager->getRole('content');
//        $permit = Yii::$app->authManager->getPermission('canAdmin');
//        Yii::$app->authManager->addChild($role_admin, $permit);
//        Yii::$app->authManager->addChild($role_cont, $permit);
//        $userRole = Yii::$app->authManager->getRole('admin');
//        Yii::$app->authManager->assign($userRole, Yii::$app->user->getId());
//        $userRole = Yii::$app->authManager->getRole('content');
//      Yii::$app->authManager->assign($userRole, 2);

        $auth = Yii::$app->authManager;

//// добавляем разрешение "createPost"
//        $createPost = $auth->createPermission('createNews');
//        $createPost->description = 'Create a news';
//        $auth->add($createPost);
//
//// добавляем разрешение "updatePost"
//        $updatePost = $auth->createPermission('updateNews');
//        $updatePost->description = 'Update news';
//        $auth->add($updatePost);
//
//
//        $role_admin = Yii::$app->authManager->getRole('admin');
//        $role_cont = Yii::$app->authManager->getRole('content');
//        $auth->addChild($role_cont, $createPost);
//
//// добавляем роль "admin" и даём роли разрешение "updatePost"
//// а также все разрешения роли "author"
//
//        $auth->addChild($role_admin, $updatePost);
//        $auth->addChild($role_admin, $role_cont);

//        $rule = new AuthorRule();
//        $auth->add($rule);
//
//// добавляем разрешение "updateOwnPost" и привязываем к нему правило.
//        $updateOwnPost = $auth->createPermission('updateOwnPost');
//        $updateOwnPost->description = 'Update own post';
//        $updateOwnPost->ruleName = $rule->name;
//        $auth->add($updateOwnPost);

//        $updatePost = $auth->getPermission('updateNews');
//       $updateOwnPost = $auth->getPermission('updateOwnPost');
//// "updateOwnPost" будет использоваться из "updatePost"
//        $auth->addChild($updateOwnPost, $updatePost);
//$content = $auth->getRole('content');
//// разрешаем "автору" обновлять его посты
  //      $auth->addChild($content, $updateOwnPost);

        return "Bingo!";
    }

    public function actionParse(){
        $html_doc = file_get_contents('https://habr.com/sandbox/72702/');
        $pos = stripos($html_doc,'<div class="post__body post__body_full">');
        $html_doc = substr($html_doc, $pos);
        $pos =strpos($html_doc,"</div>");
        $html_doc = substr($html_doc,0,$pos);

        return $this->render('parse', ['html_doc' => $html_doc]);
    }
}
