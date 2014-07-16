<?php
/* @var $this AlumnostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumnosts',
);

$this->menu=array(
	array('label'=>'Create Alumnost', 'url'=>array('create')),
	array('label'=>'Manage Alumnost', 'url'=>array('admin')),
);
?>

<h1>Alumnosts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
