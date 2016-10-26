<?php
use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
 <header>My Company</header>
   <?= $content ?>
 <footer>&copy; 2014 by My Company</footer>
 <?php $this->endBody() ?>
</body>

<?php $this->endPage() ?>
