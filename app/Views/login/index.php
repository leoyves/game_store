<?php
/**
 * Created by PhpStorm.
 * User: ygoti
 * Date: 09/06/2021
 * Time: 13:34
 */

/**
 * @var string $message
 * @var \CodeIgniter\View\View $this
 * @var array $produts
 */
$this->extend('main_template_login')
?>
<?php
$this->section('content')
?>

<?= form_open(current_url(),['method'=>'post']) ?>

<div class="form-group">
    <?= form_label('Login','login',[
        'for'=>'login','class'=>'control-label'
    ]) ?>
    <?= form_input('login','',['class'=>'form-control']) ?>
</div>

<div class="form-group">
    <?= form_label('Password','password',[
        'for'=>'password','class'=>'control-label'
    ]) ?>
    <?= form_input('password','',[
        'class'=>'form-control'
    ],'password') ?>
</div>

<?= form_submit('submit','Login',[
    'class'=>'btn btn-primary'
]) ?>

<?= form_close() ?>

<?php $this->endSection();?>

