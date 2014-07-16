<?php
/* @var $this AlumnosmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumnosms',
);

$this->menu=array(
	array('label'=>'Create Alumnosm', 'url'=>array('create')),
	array('label'=>'Manage Alumnosm', 'url'=>array('admin')),
);
?>

<h1>Alumnosms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
