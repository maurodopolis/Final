<?php
/* @var $this AlumnosmController */
/* @var $model Alumnosm */

$this->breadcrumbs=array(
	'Alumnosms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alumnosm', 'url'=>array('index')),
	array('label'=>'Manage Alumnosm', 'url'=>array('admin')),
);
?>

<h1>Create Alumnosm</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>