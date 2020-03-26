<?php

namespace frontend\controllers;


use Yii;
use frontend\models\Geodata;
use frontend\models\GeodataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\imagine\Image;




/**
 * GeodataController implements the CRUD actions for Geodata model.
 */
class GeodataController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Geodata models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GeodataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Geodata model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Geodata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Geodata();

        if ($model->load(Yii::$app->request->post())) {

            Image::thumbnail('@webroot/images/Penguins.jpg', 220, 141)
                ->save(Yii::getAlias('@webroot/images/new/Penguins.jpg'), ['quality' => 50]);

            /*Image::frame('path/to/image.jpg', 5, '666', 0)
                ->rotate(-8)
                ->save('path/to/destination/image.jpg', ['jpeg_quality' => 50]);*/

            /*Image::frame('@webroot/images/marker-shadow.png', 5, '777', 0)
                ->rotate(-8)
                ->save('/frontend/web/images/new/Penguins.jpg', ['jpeg_quality' => 50, 'format' => 'jpg']);*/


            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Geodata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {


           $post = Yii::$app->request->post('Geodata');//обращение к значению в $_POST
           echo $request = $post['icon'];

           //Yii::info('Hello');
           return $this->redirect(['view', 'id' => $model->id]);


        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Geodata model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Geodata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Geodata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Geodata::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionTestpage(){

        return $this -> render('testpage');
    }

    public function actionLink(){

        return $this -> redirect(['index']);
    }
}
