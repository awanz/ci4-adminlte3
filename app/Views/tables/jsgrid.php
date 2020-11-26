<?= $this->extend('layouts/master') ?>

<?= $this->section('head') ?>
<!-- jsGrid -->
<link rel="stylesheet" href="<?= base_url('assets/adminlte3') ?>/plugins/jsgrid/jsgrid.min.css">
<link rel="stylesheet" href="<?= base_url('assets/adminlte3') ?>/plugins/jsgrid/jsgrid-theme.min.css">
<?= $this->endSection() ?>

<?= $this->section('foot') ?>
<!-- jsGrid -->
<script src="<?= base_url('assets/adminlte3') ?>/plugins/jsgrid/demos/db.js"></script>
<script src="<?= base_url('assets/adminlte3') ?>/plugins/jsgrid/jsgrid.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",
 
        sorting: true,
        paging: true,
 
        data: db.clients,
 
        fields: [
            { name: "Name", type: "text", width: 150 },
            { name: "Age", type: "number", width: 50 },
            { name: "Address", type: "text", width: 200 },
            { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
            { name: "Married", type: "checkbox", title: "Is Married" }
        ]
    });
  });
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">jsGrid</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="jsGrid1"></div>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>