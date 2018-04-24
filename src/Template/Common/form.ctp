<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= $this->fetch('title'); ?>
    </h1>
    <?= $this->fetch('breadcrumb'); ?>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- form start -->
                <?= $this->fetch('form-start'); ?>
                <div class="box-body">
                    <?= $this->fetch('form-content'); ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?= $this->fetch('form-button'); ?>
                </div>
                <?= $this->fetch('form-end'); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
