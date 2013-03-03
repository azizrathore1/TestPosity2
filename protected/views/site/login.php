<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1><font><font class="">Engage your fans on Facebook with Postify Postcards</font></font></h1>

<h1>Login</h1>
<p class="text-large">
	<font><font>With our Facebook app, you can create real postcards directly from Facebook. </font><font>
	Companies can use our app and let his fans send real postcards</font></font><br><br>
	<font></font>
</p>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>
	<div class="grid_12 slide-text">
		<h3 class="h3"><font><font class="">Send a postcard from Facebook</font></font></h3>
		<p class="text-large"><font><font class="">With our Facebook app, you can create real postcards directly from Facebook. </font><font class="">
			Companies can use our app and let his fans send real postcards</font></font><br>
			<br><font></font>
		</p>
		<a class="btn" href="http://www.facebook.com/Postify.Postcards/app_363008717049846">
			<div class="start"></div>
			<img src="http://postify.com/se/wp-content/uploads/artwork-fb.png" alt="" class="">												<span><font><font>Send a postcard to Facebook</font></font></span>
			<div class="end"></div>
		</a> <!-- /.btn -->
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
