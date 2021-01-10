<?php echo $header, $navbar, $sidenav; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('mahasiswa/mhs') ?>">Mhs</a></li>
                        <li class="breadcrumb-item active">index</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List <?= $title ?> / <?= $this->session->username ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-outline-success"><i class="fas fa-plus"></i> Add Perusahaan</button>
                    </div>
                </div>
                </br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>telphon</th>
                            <th>provinsi</th>
                            <th>kabupaten</th>
                            <th>Kecamatan</th>
                            <th>kode pos</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dataPerusahaan as $row) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->email; ?></td>
                                <td><?= $row->telphon; ?></td>
                                <td><?= $row->provinsi; ?></td>
                                <td><?= $row->kabupaten; ?></td>
                                <td><?= $row->kecamatan; ?></td>
                                <td><?= $row->kode_pos; ?></td>
                                <td><?= $row->alamat; ?></td>
                                <td align="center">
                                    <button type="button" class="btn btn-outline-info">Edit</button>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>telphon</th>
                            <th>provinsi</th>
                            <th>kabupaten</th>
                            <th>Kecamatan</th>
                            <th>kode pos</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php echo $footer; ?>