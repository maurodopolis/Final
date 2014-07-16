<?php
/* @var $this AlumnosmController */
/* @var $model Alumnosm */

$this->breadcrumbs=array(
	'Alumnosms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Alumnosm', 'url'=>array('index')),
	array('label'=>'Create Alumnosm', 'url'=>array('create')),
	array('label'=>'Update Alumnosm', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Alumnosm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumnosm', 'url'=>array('admin')),
);
?>

<h1>View Alumnosm #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'matricula',
		'grado',
		'grupo',
		'id',
	),
)); ?>
