<?php

class FixturesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * 
	 * 
	 * Invoke a view 
	 */
	/*public function actionFixtures()
	{
    $model=new Fixtures();

    // uncomment the following code to enable ajax-based validation
    /*
    if(isset($_POST['ajax']) && $_POST['ajax']==='results-results-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    */

   /* if(isset($_POST['Fixtures']))
    {
        $model->attributes=$_POST['Fixtures'];
        if($model->validate())
        {
            // form inputs are valid, do something here
            return;
        }
    }
    	$this->render('fixtures',array('model'=>$model));
	}*/
	
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Fixtures;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Fixtures']))
		{
			$model->attributes=$_POST['Fixtures'];
			if($model->save())
				$this->redirect(array('view','id'=>$jsonfile->fix_id));
				
		}

		/*$this->render('create',array(
			'model'=>$model,*/
		$this->render('create',array(
			'model'=>$model, 'args'=>',minDate: new Date('.date('Y, n, j, G, ').intval(date('i')+1).')'
		
		));
	}
	

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Fixtures']))
		{
			$model->attributes=$_POST['Fixtures'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->fix_id));
		}

		/*$this->render('update',array(
			'model'=>$model,*/
		//echo (60+CDateTimeParser::parse($model->date, 'dd/MM/yyyy hh:mm:ss')).' '.time();
		if(time()<=(60+CDateTimeParser::parse($model->date, 'dd/MM/yyyy hh:mm:ss')))
		    $args=',minDate: new Date('.date('Y, n, j, G, ').intval(date('i')+1).')';
		else
		    $args='';
		//echo $args;
		$this->render('update',array(
			'model'=>$model, 'args'=>$args     
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	/**
	 * 
	 * Displays fixtures ordered by date ...
	 */
	/*public function actionFixture()
	{
		$criteria = new CDbCriteria();
		$criteria->order = "date DESC";
		$model = Fixtures::model()->findAll($criteria);
		$this->render("Fixtures", array("model"=>$model));
	}
*/
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

		/* $criteria = new CDbCriteria();
		 $criteria->condition='date=:date';
		 $criteria->params=array(':date'=>date("y/m/d"));
		 $criteria->order = "date ASC";*/

		 
		 $dataProvider =new CActiveDataProvider('Fixtures');
		/* $this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
		
 	   // $this->createUrl('index',array(date("Y/M/D")));
	   
		//$urlDate = Fixtures::model()->getByDate($date);
		 
		$this->renderJSON($dataProvider->getData());
		
		//Fixtures::model()->getByDate($date);
		
	}
	
	/**
	 * 
	 * Stores to a json feed ...
	 * @param 
	 */
	
	protected function renderJSON($data)
	{
     	header('Content-type:application/json ;charset=utf-8');
     
     	$date = Yii::app()->request->getParam('date', date("Ymd"));
     	
     	 //echo $date;
    	 $criteria = new CDbCriteria();
		 //$criteria->condition='date=:date';
		// $criteria->params=array(':date'=>date("y/m/d"));
		 //$criteria->order = "date ASC";
		 
    	//$fixtures =Fixtures::model()->findAll();
    	$fixtures = Fixtures::model()->findAll(array('condition'=>'date=:date',
    								 		         'params'=>array(':date'=>$date)));
    	
 	 	echo CJSON::encode($fixtures);

   	    foreach (Yii::app()->log->routes as $route) {
        if($route instanceof CWebLogRoute) {
            $route->enabled = false; // disable any weblogroutes
        }
  
    }
    Yii::app()->end();
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Fixtures('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Fixtures']))
			$model->attributes=$_GET['Fixtures'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Fixtures the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Fixtures::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Fixtures $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fixtures-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
}
