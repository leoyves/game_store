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
 * @var array $products
 * @var \CodeIgniter\Pager\Pager $pager
 * @var \CodeIgniter\View\View $this
 */

$this->extend('main_template')
?>

<?php $this->section('content') ?>

<div class="text-right">
    <a href="<?= site_url(['products','add']) ?>" class="btn btn-primary mb-3 mr-3"> Add new</a>

</div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td> <?= esc($product['title']) ?></td>
            <td> <?= esc($product['price']) ?></td>
            <td class="text-right">
                <a href="<?= site_url(['products','edit',$product['id']]) ?>" class="btn btn-primary mb-3 mr-3"> edit</a>
                <a href="<?= site_url(['products','delete',$product['id']]) ?>" class="btn btn-warning mb-3 mr-3"> delete</a>



            </td>
        </tr>
        <?php endforeach; ?>

        </tbody>

    </table>

        <div>
            <?= $pager->links() ?>
        </div>

<?php $this->endSection() ?>




