<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />

<link title="RSS Feed" rel="alternate" type="application/rss+xml" href="<?php echo CHtml::normalizeUrl(array('post/feed')); ?>" />
<title><?php echo $this->pageTitle; ?></title>

<?php
// css
$baseUrl=Yii::app()->request->baseUrl;
Yii::app()->clientScript->registerCSSFile($baseUrl.'/css/main.css');

// initialize two application components
Yii::app()->widgetCollapse->init();
Yii::app()->highslide->init();
?>
</head>

<body class="page">
<div id="container">
  <div id="header">
    <H1><?php echo CHtml::link(CHtml::encode(Yii::app()->params['title']),Yii::app()->homeUrl); ?>
      <div id="rss"><?php echo CHtml::link(CHtml::image($baseUrl.'/systemImages/feed.gif'),array('post/feed')); ?></div>
    </H1>
  </div><!-- header -->

  <div id="sidebar">
    <?php $this->widget('UserLogin',array('visible'=>Yii::app()->user->isGuest)); ?>

    <?php $this->widget('UserMenu',array('visible'=>!Yii::app()->user->isGuest)); ?>

    <?php $this->widget('Calendar'); ?>

    <?php $this->widget('MonthlyArchives'); ?>

    <?php $this->widget('SiteSearch'); ?>

    <?php $this->widget('RecentPosts'); ?>

    <?php $this->widget('RecentComments'); ?>

    <?php $this->widget('TagCloud'); ?>

    <?php $this->widget('Links'); ?>

  </div><!-- sidebar -->

  <div id="content">
    <?php echo $content; ?>
  </div><!-- content -->

  <br class="clearfloat" />

  <div id="footer">
    <p><?php echo Yii::app()->params['copyrightInfo']; ?><br/>
    All Rights Reserved.<br/>
    <?php echo Yii::powered(); echo Yii::getVersion(); ?></p><br>
  </div><!-- footer -->
</div><!-- container -->

</body>

</html>