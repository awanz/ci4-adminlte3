<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?= $breadcrumb_title ?></h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <?php
                foreach ($breadcrumb as $key => $value) {
            ?>
                <li class="breadcrumb-item <?php if ($value['link'] == null) { echo "active"; } ?>">
                    <?php 
                    if ($value['link'] == null) {
                    ?>
                    <?= $value['title'] ?>
                    <?php 
                    }else{
                    ?>
                    <a href="<?= base_url($value['link']) ?>"><?= $value['title'] ?></a>
                    <?php
                    } 
                    ?>
                </li>
            <?php
                }
            ?>
        </ol>
        </div>
    </div>
    </div>
</div>