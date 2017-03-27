UUID Behavior for Yii2 ActiveRecord
===================================
Uses a PHP UUID library to generate valid UUID's, which can then be inserted into the database

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist enigmatix/yii2-uuid "*"
```

or add

```
"enigmatix/yii2-uuid": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \enigmatix\uuid\AutoloadExample::widget(); ?>```