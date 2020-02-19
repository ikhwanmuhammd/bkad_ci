<div class="content-wrapper">
	<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Buku Kas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Buku Kas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Flash-data -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
  <?php if($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
      <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Buku kas <strong>berhasil</strong> <?= 
          $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div> -->
  <?php endif; ?>
  <!-- /.Flash-data -->

  <!-- Main-content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-primary mr-3" data-toggle="modal" data-target="#modal-tambah-buku-kas" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm"></i> Tambah Kas</button>
              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-transfer-buku-kas"><i class="fas fa-arrow-right fa-sm"></i> Transfer Kas</button>
              <div class="card-tools">
                <div class="input-group input-group-sm" >
                  <div class="input-group-append">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-head-fixed text-nowrap table-hover">
                <thead>
                  <tr>
                    <th width="10px">No</th>
                    <th>Kode Kas</th>
                    <th>Nama Kas</th>
                    <th>Sisa Saldo</th>
                    <th>Status</th>
                    <th>Keterangan Kas</th>
                    <th></th>
                    <th>Aksi</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($buku_kas as $bk) :?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $bk->kode_kas?></td>
                      <td><?php echo $bk->nama_kas?></td>
                      <td><?php echo "Rp. ".number_format($bk->saldo_kas,0,',','.')?></td>
                      <td><h5><span id="status" class="badge badge-pill badge-success"><?php echo $bk->status_kas?></span></h5></td>
                      <td><?php echo $bk->ket_kas?></td>
                      <td width="20px">
                        <a href="<?= base_url(); ?>kas/buku_kas/riwayat_buku_kas/<?= $bk->id_kas;?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Riwayat Kas"><i class="fa fa-history"></i></a>
                      </td>
                      <td width="20px">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah-pemasukan-kas"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Pemasukan"></i></a>
                      </td>
                      <td width="20px">
                        <a href="<?= base_url(); ?>kas/buku_kas/tambah_pengeluaran_kas/<?= $bk->id_kas;?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Pengeluaran"><i class="fa fa-minus"></i></a>
                      </td>
                      <td width="20px">
                        <a href="<?= base_url(); ?>kas/buku_kas/hapus_buku_kas/<?= $bk->id_kas;?>" class="btn btn-danger tombol-hapus" data-toggle="tooltip" data-placement="top" title="Hapus Kas"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <div class="modal fade" id="modal-tambah-buku-kas">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">Tambah Buku Kas</h4>
          </div>
          <!-- form start -->
          <form method="post" action="<?php echo base_url('kas/buku_kas/simpan_buku_kas') ?>">
            <div class="card-body">
              <div class="form-group">
                <label for="inputKodebukukas">Kode Kas</label>
                <input type="text" class="form-control" id="inputKodebukukas" placeholder="Kode Kas" name="kode_kas" value="<?php echo "BK".$no++ ?>" readonly>
              </div>
              <div class="form-group">
                <label for="inputNamabukukas">Nama Buku Kas</label>
                <input type="text" class="form-control" id="inputNamabukukas" placeholder="Nama Buku Kas" name="nama_kas" required>
              </div>
              <div class="form-group">
                <label for="fe">Saldo Awal Buku Kas</label>
                <input type="text" class="form-control" id="fe" placeholder="Rp. " name="saldo_kas" onkeypress="return hanyaAngka(event)" required>
              </div>
              <div class="form-group">
                <label or="pilihStatusbukukas">Status</label>
                <select class="form-control" id="pilihStatusbukukas" placeholder="--Pilih--" name="status_kas">
                  <option>Aktif</option>
                  <option>Nonaktif</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputKetbukukas">Keterangan Kas</label>
                <input type="text" class="form-control" rows="3" id="inputKetbukukas" placeholder="Keterangan Buku Kas" name="ket_kas" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal-tambah-buku-kas -->

    <div class="modal fade" id="modal-transfer-buku-kas">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <h4 class="modal-title">Transfer Buku Kas</h4>
          </div>
          <!-- form start -->
          
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal-transfer-buku-kas -->

    <div class="modal fade" id="modal-tambah-pemasukan-kas">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h4 class="modal-title">Tambah Pengeluaran Kas</h4>
          </div>
          <!-- form start -->
          
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal-transfer-buku-kas -->
  </section>
</div>
