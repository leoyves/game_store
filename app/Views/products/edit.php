<?php
/**
 * Created by PhpStorm.
 * User: ygoti
 * Date: 11/06/2021
 * Time: 10:47
 */
?>
<?php
/**
 * @var \CodeIgniter\View\View $this
 * @var string[] $entity
 */

$this->extend('main_template')
?>

<?php $this->section('content') ?>

<?php if (isset($validation)): ?>
    <?= $validation->listErrors() ?>
<?php endif; ?>

<?= form_open(current_url(),['method'=>'post']) ?>

<div class="form-group">
    <?= form_label('Title','title',[
        'for'=>'title','class'=>'control-label'
    ]) ?>

    <?= form_input('title',esc($entity['title']),[
        'class'=>'form-control'
    ]) ?>
</div>

<div class="form-group">
    <?= form_label('Price','price',[
        'for'=>'price','class'=>'control-label'
    ]) ?>

    <?= form_input('price',esc($entity['price']),[
        'class'=>'form-control',
        'min'=>0,
        'step'=>'.1'
    ],'number') ?>
</div>

<div class="form-group">
    <?= form_label('Description','description',[
        'for'=>'description','class'=>'control-label'
    ]) ?>
    <?= form_textarea('description',esc($entity['description']),[
        'class'=>'form-control'
    ]) ?>
</div>
<?= form_submit('submit','Submit',[
    'class'=>'btn btn-primary'
]) ?>
<?= form_close() ?>

<?php $this->endSection() ?>




