<?php

//  dd($medewerkers);           




use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$medewerkerList = ArrayHelper::map($medewerkers ,'id','naam');
$menuList = ArrayHelper::map($menu,'id','naam');

// dd($medewerkerList);

?>

    <div class="bestelling-form">
        
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'medewerker_id')->dropDownList($medewerkerList, ['prompt' => ''])->label('Medewerker') ?>

        <?= $form->field($model, 'naam')->textInput(['maxlength' => true])->label('Klantnaam') ?>

        <?= $form->field($model, 'status')->dropDownList([ 'besteld' => 'Besteld', 'klaar' => 'Klaar', 'geleverd' => 'Geleverd', '' => '', ], ['prompt' => ''])->label('Status bestelling') ?>

        <?= $form->field($model, 'menu_id')->dropDownList($menuList, ['prompt' => '']) ->label('Bestelling')?>

     
        
            <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
