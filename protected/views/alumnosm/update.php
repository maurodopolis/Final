<?php
/* @var $this AlumnosmController */
/* @var $model Alumnosm */

$this->breadcrumbs=array(
	'Alumnosms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumnosm', 'url'=>array('index')),
	array('label'=>'Create Alumnosm', 'url'=>array('create')),
	array('label'=>'View Alumnosm', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Alumnosm', 'url'=>array('admin')),
);
?>

<h1>Update Alumnosm <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>