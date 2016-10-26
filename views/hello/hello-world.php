<?php use yii\web\View ?>
<?php $this->title="my page"?>
<?php $this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, framework, php']); ?>
<?php $this->registerMetaTag(['name' => 'description', 'content' => 'hello worlds!'], 'description'); ?>
this controller ID is :<?= $this->context->id; ?>
foo`s value is <?= $foo; ?>
bar`s value is <?= $bar['name']; ?>
<?php \Yii::$app->view->on(View::EVENT_END_BODY, function () {
    echo date('Y-m-d');
});
 ?>