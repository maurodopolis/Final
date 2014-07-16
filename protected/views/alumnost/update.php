<?php
/* @var $this AlumnostController */
/* @var $model Alumnost */

$this->breadcrumbs=array(
	'Alumnosts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumnost', 'url'=>array('index')),
	array('label'=>'Create Alumnost', 'url'=>array('create')),
	array('label'=>'View Alumnost', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Alumnost', 'url'=>array('admin')),
);
?>

<h1>Update Alumnost <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>