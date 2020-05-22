<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\sturtznetwork\humhub\modules\hashtags\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t('HashtagsModule.base', 'Guest') : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("hashtags", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => Yii::t('HashtagsModule.base', 'Hi there !', ["name" => $displayName])
    ]
])

?>

<div class="panel-heading"><strong>Hashtags</strong> <?= Yii::t('HashtagsModule.base', 'overview') ?></div>

<div class="panel-body">
    <p><?= Yii::t('HashtagsModule.base', 'Hello World!') ?></p>

    <?=  Button::primary(Yii::t('HashtagsModule.base', 'Say Hello!'))->action("hashtags.hello")->loader(false); ?></div>
