<?= $this->extend('layouts/master') ?>

<?= $this->section('head') ?>
<!-- pace-progress -->
<link rel="stylesheet" href="<?= base_url('assets/adminlte3') ?>/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
<?= $this->endSection() ?>

<?= $this->section('foot') ?>
<!-- pace-progress -->
<script src="<?= base_url('assets/adminlte3') ?>/plugins/pace-progress/pace.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        Start creating your amazing application!
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
<?= $this->endSection() ?>