<?= $this->extend('layouts/master') ?>

<?= $this->section('head') ?>
<!-- summernote -->
<link rel="stylesheet" href="<?= base_url('assets/adminlte3') ?>/plugins/summernote/summernote-bs4.css">
<?= $this->endSection() ?>

<?= $this->section('foot') ?>
<!-- Summernote -->
<script src="<?= base_url('assets/adminlte3') ?>/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
            Bootstrap WYSIHTML5
            <small>Simple and fast</small>
            </h3>
            <!-- tools box -->
            <div class="card-tools">
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <div class="mb-3">
            <textarea class="textarea" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <p class="text-sm mb-0">
            Editor <a href="https://github.com/summernote/summernote">Documentation and license
            information.</a>
            </p>
        </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<?= $this->endSection() ?>