<!-- login -->
<?
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>
<section class="wrap__section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Form Login -->
                <div class="card mx-auto" style="max-width: 380px;">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Руйхатдан утиш</h4>

                        <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>

                        <?=$form->field($newUser, 'name')->textInput(['autofocus' => true])?>

                        <?=$form->field($newUser, 'email')->textInput()?>

                        <?=$form->field($newUser, 'password')->passwordInput()?>

                        <div class="form-group">
                            <?=Html::submitButton('Руйхатдан утиш', ['class'=>'btn btn-primary btn-block']) ?>
                        </div>

                        <? ActiveForm::end()?>
                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->

<!--                <p class="text-center mt-4">Don't have account? <a href="#">Sign up</a></p>-->
            </div>
        </div>
    </div>
</section>
<!-- end login -->