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
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <?= $this->fetch('table-head'); ?>
                        <?= $this->fetch('table-body'); ?>
                        <?= $this->fetch('table-footer'); ?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?= $this->fetch('pagination'); ?>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
