<?= $this->extend('Manager/Layout/main.php') ?>
<?= $this->section('title') ?>
<?php echo $title ?? ''; ?>
<?= $this->endSection() ?>
<!--envio para template principal os arquivos ccs e styles dessa view -->
<?= $this->section('styles') ?>
<!--envio para template principal o conteudo de stilo da pagina -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.0/r-2.3.0/datatables.min.css" />

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!--envio para template principal o conteudo dessa view -->
<div class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header">
                    <h1><?php echo $title ?? ''; ?></h1>
                </div>
                <div class="card-body">
                    <table class="table table-borderless table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>

                    </table>

                </div>
            </div>
        </div>
    </div>



</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!--envio para template principal os arquivos scripts dessa view -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.0/r-2.3.0/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            ajax: '<?php echo route_to('categories.get.all'); ?>',
            columns: [{
                    data: 'id'
                },
                {
                    data: 'name'
                },
                {
                    data: 'slug'
                },
                {
                    data: 'actions'
                },
            ],
        });
    });
</script>
<?= $this->endSection() ?>