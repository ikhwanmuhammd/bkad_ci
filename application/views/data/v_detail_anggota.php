<div class="content-wrapper halaman" data-halaman="Detail Anggota">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Detail Anggota
            <span class="badge badge-secondary">#<?php echo $detail->id ?></span>
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item">Database</li>
            <li class="breadcrumb-item">Data Anggota</li>
            <li class="breadcrumb-item active">Detail Anggota</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main-content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <?php if (!$detail->foto_anggota == '') {?>
                  <img class="img-thumbnail"
                    src="<?php echo base_url();?>assets/foto/anggota/<?php echo $detail->foto_anggota; ?>"
                    alt="Foto anggota <?php echo $detail->id ?>" width="300" height="400">
                <?php } else {?>
                  <img class="img-thumbnail"
                    src="<?php echo base_url();?>assets/foto/default_profile.jpg"
                    alt="Foto anggota <?php echo $detail->id ?>" width="300" height="400">
                <?php } ?>
              </div>
              <br>
              <h3 class="profile-username text-center"><?php echo strtoupper($detail->nama) ?></h3>
              <p class="text-muted text-center"><?php echo $detail->nik ?></p>
              <h5 class="text-center"><span id="status" class="badge badge-pill badge-success"><?php echo $detail->status_anggota?></span></h5>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-info card-outline">
            <div class="card-body">
              <ul class="list-group">
                <a href="<?= base_url(); ?>data/data_anggota/edit_anggota/<?= $detail->id;?>" class="btn btn-default btn-sm m-1"><i class="fa fa-edit"></i> Edit Detail Anggota</a>
                <a href="#" class="btn btn-default btn-sm m-1"><i class="fa fa-print"></i> Cetak Detail Anggota</a>
                <a href="#" class="btn btn-default btn-sm m-1" data-toggle="modal" data-target="#modal-status"><i class="fa fa-user-alt"></i> Ubah Status Anggota</a>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-success card-outline">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#detail" data-toggle="tab">Detail</a></li>
                <li class="nav-item"><a class="nav-link" href="#kelompok" data-toggle="tab">Kelompok</a></li>
                <li class="nav-item"><a class="nav-link" href="#riwayat" data-toggle="tab">Riwayat</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="detail">
                  <table class="table">
                  <tbody>
                    <tr>
                      <td>Tempat / Tgl Lahir</td>
                      <td width="2px">:</td>
                      <td><?php echo ucwords($detail->tmp_lahir).' , '.format_indo(date($detail->tgl_lahir)) ?></td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td width="2px">:</td>
                      <td><?php 
                      if ($detail->jk == 'L') {
                        echo "Laki-laki";
                      }else{
                        echo "Perempuan";
                      }?></td>
                    </tr>
                    <tr>
                      <td>Usia</td>
                      <td width="2px">:</td>
                      <td><?php
                      $tgl_lhr = new DateTime($detail->tgl_lahir);
                      $today = new DateTime('today');
                      $y = $today->diff($tgl_lhr)->y;
                      echo $y . " tahun ";
                      ?></td>
                    </tr>
                    <tr>
                      <td>No. Tlp / HP</td>
                      <td>:</td>
                      <td><?php 
                      if (!$detail->no_tlp = '') {
                        echo $detail->no_hp;
                      }else{
                        echo $detail->no_tlp."/".$detail->no_hp; 
                      }?></td>
                    </tr>
                    <tr>
                      <td>Detail Alamat</td>
                      <td>:</td>
                      <td><?php echo $detail->dtl_alamat ?></td>
                    </tr>
                    <tr>
                      <td>Desa</td>
                      <td>:</td>
                      <td><?php echo $detail->desa ?></td>
                    </tr>
                    <tr>
                      <td>Kecamatan</td>
                      <td>:</td>
                      <td><?php echo $detail->kecamatan ?></td>
                    </tr>
                    <tr>
                      <td>Kota</td>
                      <td>:</td>
                      <td><?php echo strtoupper($detail->kota) ?></td>
                    </tr>
                    <tr>
                      <td>Kode Pos</td>
                      <td>:</td>
                      <td><?php echo $detail->kode_pos ?></td>
                    </tr>
                    <tr>
                      <td>Pekerjaan</td>
                      <td>:</td>
                      <td><?php echo $detail->pekerjaan ?></td>
                    </tr>
                    <tr>
                      <td>Ahli Waris</td>
                      <td>:</td>
                      <td><?php echo strtoupper($detail->ahli_waris) ?></td>
                    </tr>
                    <tr>
                      <td>Tanggal Gabung</td>
                      <td>:</td>
                      <td><?php
                      echo format_indo(date($detail->tgl_gabung)) ?></td>
                    </tr>
                  </tbody>
                </table>
                </div>
                <!-- /.tab-detail -->

                <div class="tab-pane" id="kelompok">
                </div>
                <!-- /.tab-kelompok -->

                <div class="tab-pane" id="riwayat">
                  <!-- The timeline -->
                </div>
                <!-- /.tab-riwayat -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

  <div class="modal fade" id="modal-status">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h4 class="modal-title">Ubah Status <?php echo ucwords(strtolower($detail->nama)) ?></h4>
          </div>
          <!-- form start -->
          <form method="post" action="<?php echo base_url('data/data_anggota/ubah_status') ?>">
            <div class="modal-body">
              <input type="hidden" value="<?php echo $detail->id ?>" id="id" name="id">
              <div class="form-group">
                <label for="status_anggota">Status Anggota</label>
                <div class="input-group ml-2">
                  <div class="custom-control custom-radio col-md-6">
                    <input class="custom-control-input" type="radio" id="aktif" name="status_anggota" value="Aktif" <?php if ($detail->status_anggota == 'Aktif') echo 'checked';?>>
                    <label for="aktif" class="custom-control-label font-weight-normal">Aktif</label>
                  </div>
                  <div class="custom-control custom-radio col-md-6">
                    <input class="custom-control-input" type="radio" id="nonaktif" name="status_anggota" value="Nonaktif" <?php if ($detail->status_anggota == 'Nonaktif') echo 'checked';?> required>
                    <label for="nonaktif" class="custom-control-label font-weight-normal">Nonaktif</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.modal-body -->
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
    <!-- /.modal-tambah-desa -->
</div>