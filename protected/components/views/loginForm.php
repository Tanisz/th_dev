


<div id="login-dp">
    <form>
        <?php echo CHtml::beginForm(); ?>
        <div class="form-group">
            <?php echo CHtml::activeLabel($form, 'username', array('for' => 'exampleInputEmail1')); ?>
            <br/>
            <?php echo CHtml::activeTextField($form, 'username', array('class'=>"form-control",'id' => 'exampleInputEmail1', 'placeholder' => "Email")) ?>

            <?php echo CHtml::error($form, 'username'); ?>
        </div>   
        <div class="form-group">
            <?php echo CHtml::activeLabel($form, 'password', array('for' => 'exampleInputEmail1')); ?>
            <br/>
            <?php echo CHtml::activePasswordField($form, 'password', array('class'=>"form-control",'id' => 'exampleInputPassword1', 'placeholder' => "Password")) ?>
            <?php echo CHtml::error($form, 'password'); ?>
        </div>     
        <div class="form-group">
            <?php echo CHtml::activeCheckBox($form, 'rememberMe', array('class' => 'checkbox')); ?>
            <?php echo CHtml::activeLabel($form, 'rememberMe'); ?>
        </div>    
        <div class="form-group">
            <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-default')); ?>          
        </div>
        
        
         <?php echo CHtml::endForm(); ?>
        <div class="form-group">
            <label>Nem regisztráltál még?</label>
            <?php echo CHtml::submitButton('Regisztráció', array('submit'=>array('site/registration'),'class' => 'btn btn-danger')); ?>
            <?php //echo CHtml::submitButton('Regisztráció', array('class' => 'btn btn-danger')); ?>          
        </div>
    </form>
</div>

