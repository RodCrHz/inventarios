<!DOCTYPE html>
<html>
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<style>
	body {
		padding-top: 60px;
	}
</style>
</head>
<body>
<?php $this->widget('ext.bootstrap.widgets.TbNavbar', array(
'type' =>'inverse',
'items'=>array(
			array(
				'class'=>'ext.bootstrap.widgets.TbMenu',
				'type' =>'navbar', //estos tipos estan definidos dentro de los widgets y ayudan al diseño 
				'items'=> array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				),
	),
)); ?>
<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('ext.bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
</div>
<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Cruz.<br/>
		All Rights Reserved.<br/>
		<?php //echo Yii::powered(); ?>
	</div> <!-- footer -->
</body>
</html>
