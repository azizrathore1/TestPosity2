<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	//'Users'=>array('index'),
	//$model->user_id,
);
/*
$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);*/
?>

<h1>you are sucessfully created User  <strong><?php echo $model->username; ?> </strong></h1>
<br>
<br>
<h3>User detail information</h3>
<p>Now you can login in our website </p>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'username',
		'password',
		'email',
	),
)); ?>
