<?
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<!-- login -->
<section class="wrap__section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Form Login -->
                <div class="card mx-auto" style="max-width: 380px;">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sign in</h4>
                        <!--<form action="#">
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password">
                            </div>
                            <div class="form-group">
                                <a href="#" class="float-right">Forgot password?</a>
                                <label class="float-left custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <span class="custom-control-label"> Remember </span>
                                </label>
                            </div> <
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login </button>
                            </div>
                        </form>-->

                        <?php 

                        $form = ActiveForm::begin(['id' => 'login-form']); ?>

                        <?=$form->field($model, 'email')->textInput(['autofocus' => true])?>

                        <?=$form->field($model, 'password')->textInput()?>

                        <div class="form-group">
                            <?=Html::submitButton('Кириш', ['class'=>'btn btn-primary btn-block']) ?>
                        </div>

                        <? ActiveForm::end()?>
                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->

                <p class="text-center mt-4">Don't have account? <a href="/user/register">Sign up</a></p>
            </div>
        </div>
    </div>
</section>
<!-- end login -->