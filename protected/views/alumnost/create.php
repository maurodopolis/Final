<?php
/* @var $this AlumnostController */
/* @var $model Alumnost */

$this->breadcrumbs=array(
	'Alumnosts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alumnost', 'url'=>array('index')),
	array('label'=>'Manage Alumnost', 'url'=>array('admin')),
);
?>

<h1>Create Alumnost</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>