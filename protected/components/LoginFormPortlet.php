<?php
Yii::import('zii.widgets.CPortlet');
class LoginFormPortlet extends CPortlet {
    
    public static function actions(){
        return array(
                   'GetLogin'=>'application.components.actions.getLogin',
        );
    }
    
    protected function renderContent() {
        $form=new LoginForm;
        if(isset($_POST['LoginForm']))
        {
            $form->attributes=$_POST['LoginForm'];
            if($form->validate())
                $this->controller->refresh();
        }
        $this->render('loginForm',array('form'=>$form));
    }
    
    
    protected function login($user)
	{
		$class=Yii::import($this->identityClass);
		$identity=new $class($user->username,$user->password);
		if($identity->authenticate())
		{
			if($this->enableRememberMe && $user->rememberMe)
				$duration=3600*24*30;   // 30 days
			else
				$duration=0;
			Yii::app()->user->login($identity,$duration);
			return true;
		}
		else
			$user->addError('password','Incorrect password.');
	} 
}
?>

