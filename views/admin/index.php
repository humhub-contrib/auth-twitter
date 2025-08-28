<?php
/* @var $this \humhub\components\View */
/* @var $model \humhubContrib\auth\twitter\models\ConfigureForm */

use humhub\widgets\form\ActiveForm;
use yii\helpers\Html;

?>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= Yii::t('AuthTwitterModule.base', '<strong>Twitter</strong> Sign-In configuration') ?></div>

        <div class="panel-body">
            <p>
                <?= Html::a(Yii::t('AuthTwitterModule.base', 'Twitter Documentation'), 'https://developer.twitter.com/en/docs/authentication/guides/log-in-with-twitter', ['class' => 'btn btn-primary float-end btn-sm', 'target' => '_blank']); ?>
                <?= Yii::t('AuthTwitterModule.base', 'Please follow the Twitter instructions to create the required <strong>OAuth client</strong> credentials.'); ?>
                <br/>
            </p>
            <br/>

            <?php $form = ActiveForm::begin(['id' => 'configure-form', 'enableClientValidation' => false, 'enableClientScript' => false]); ?>

            <?= $form->field($model, 'enabled')->checkbox(); ?>

            <br/>
            <?= $form->field($model, 'consumerId'); ?>
            <?= $form->field($model, 'consumerSecret'); ?>

            <br/>
            <?= $form->field($model, 'redirectUri')->textInput(['readonly' => true]); ?>
            <br/>

            <div class="mb-3">
                <?= Html::submitButton(Yii::t('base', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => '']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
