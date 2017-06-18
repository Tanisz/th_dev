<?php

class ProjectsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/no-sidebar';

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
				'actions'=>array('index','view','official','unofficial'),
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
		$model=new Projects;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Projects']))
		{
			$model->attributes=$_POST['Projects'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->projects_id));
		}

		$this->render('create',array(
			'model'=>$model,
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

		if(isset($_POST['Projects']))
		{
			$model->attributes=$_POST['Projects'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->projects_id));
		}

		$this->render('update',array(
			'model'=>$model,
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Projects');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        
        public function actionOfficial()
	{       
                
                $criteria = new CDbCriteria();
                $criteria->with = array(
                                    'conditions'=>array(
                                        'alias'=>'conditions', 
                                            'with'=>array('testing_status'=>array('alias'=>'testingstatus'),                                            
                                                )
                                        ),
                                   /* 'projects_part'=>array(
                                        'alias'=>'projects_part',

                                    )*/
                                    );

                $criteria->condition = 'project_type_id = :project_type_id';
                $criteria->params=(array(':project_type_id'=>2));
                
		$dataProvider=new CActiveDataProvider('Projects',
                        array(
                            'criteria'=> $criteria
                            )
                        );
		$this->render('official',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionUnofficial()
	{
            
            $criteria = new CDbCriteria();
            $criteria->with = array(
                                'conditions'=>array(
                                    'alias'=>'conditions', 
                                        'with'=>array('testing_status'=>array('alias'=>'testingstatus'),                                            
                                            )
                                    ),
                               /* 'projects_part'=>array(
                                    'alias'=>'projects_part',
                                       
                                )*/
                                );
                 
            $criteria->condition = 'project_type_id = :project_type_id';
            $criteria->params=(array(':project_type_id'=>'1'));
            
            
		$dataProvider=new CActiveDataProvider('Projects',
                        array(
                            'criteria'=> $criteria
                            )
                        );
		$this->render('unofficial',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Projects('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Projects']))
			$model->attributes=$_GET['Projects'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Projects the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Projects::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Projects $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='projects-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionDownload($project_id=null)
	{
         
            $criteria = new CDbCriteria();
            $criteria->condition = "projects_id =:projects_id";
            $criteria->params = array(':projects_id' => $project_id);
            
            $downloads = Downloads::model()->findAll($criteria);
            
            $dir_path = Yii::getPathOfAlias('webroot') . '/downloads';
            $fileName = $dir_path . "/$downloads->filename";
            if (file_exists($fileName))
                return Yii::app()->getRequest()->sendFile($downloads->filename, @file_get_contents($fileName));
            else
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        
      
}
