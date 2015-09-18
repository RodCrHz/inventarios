<!DOCTYPE html>
<html>
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<?php $this->widget('ext.bootstrap.widgets.TbNavbar', array(
'type' =>'inverse',
'items'=>array(
			array(
				'class'=>'ext.bootstrap.widgets.TbMenu',
				'type' =>'navbar', //estos tipos estan definidos dentro de los widgets y ayudan al diseño 
				'items'=> array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				),
	),
)); ?>
<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
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
