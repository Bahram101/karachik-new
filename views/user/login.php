<?

use app\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
//use Yii;
?>

<!-- login -->
<section class="wrap__section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <? if(!empty(Yii::$app->session->getFlash('registered'))){?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= Yii::$app->session->getFlash('registered')?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?} ?>
                <? if(!empty(Yii::$app->session->getFlash('activated'))){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= Yii::$app->session->getFlash('activated')?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?} ?>
                <!-- Form Login -->
                <div class="card mx-auto" style="max-width: 380px;">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sign in</h4>


                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'layout' => 'horizontal',
                            'fieldConfig' => [
                                'template' => "{label}\n
                                    <div class=\"col-lg-12\">{input}</div>\n
                                    <div class=\"col-lg-12\">{error}</div>",
                                'labelOptions' => ['class' => ''],
                            ],
                        ]); ?>

                        <?=$form->field($model, 'name')->textInput(['autofocus' => true])?>

                        <?=$form->field($model, 'password')->textInput()?>

                        <?= $form->field($model, 'rememberMe', ['options' =>  ['class' => 'checkbox checkbox-danger']])->checkbox([
                            'template' => "<div class=\"col-lg-offset-1 col-lg-12 \">{input} {label}</div>\n<div class=\"col-lg-8 \">{error}</div>"
                        ])->label() ?>


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