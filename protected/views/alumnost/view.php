<?php
/* @var $this AlumnostController */
/* @var $model Alumnost */

$this->breadcrumbs=array(
	'Alumnosts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Alumnost', 'url'=>array('index')),
	array('label'=>'Create Alumnost', 'url'=>array('create')),
	array('label'=>'Update Alumnost', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Alumnost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumnost', 'url'=>array('admin')),
);
?>

<h1>View Alumnost #<?php echo $model->id; ?></h1>

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
