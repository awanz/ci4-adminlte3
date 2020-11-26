<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->include('layouts/head') ?>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <?= $this->include('layouts/navbar') ?>
      <?= $this->include('layouts/sidebar') ?>
      <div class="content-wrapper">
        <?= $this->include('layouts/breadcrumb') ?>
        <section class="content">
          <div class="container-fluid">
          <?= $this->renderSection('content') ?>
          </div>
          <?= $this->renderSection('modals') ?>
        </section>
      </div>
      <footer class="main-footer">
        <?= $this->include('layouts/footer') ?>
      </footer>
      <aside class="control-sidebar control-sidebar-dark">
      </aside>
    </div>
    <?= $this->include('layouts/foot') ?>
  </body>
</html>
