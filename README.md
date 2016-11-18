jpush
=====
extension for JPush

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist shenzhongwei/yii2-jpush "*"
```

or add

```
"shenzhongwei/yii2-jpush": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
 $push = new \common\JPush\PushModel();
 $push->PushReg('you_content',['your_registArr'],'your_title',['your_extraArr'],'your_alert',$your_env=false,'your_platform');
 ?>```
 'or'
 <?php
  $push = new \common\JPush\PushModel();
  $push->PushAll('you_content','your_title',['your_extraArr'],'your_alert',$your_env=false,'your_platform');
  ?>```