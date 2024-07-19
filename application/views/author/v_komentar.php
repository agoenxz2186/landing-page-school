
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Komentar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/favicon.png') ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.css') ?>">
  <!-- Datepicker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datepicker/datepicker3.css') ?>">
  <!-- Daterangepicker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- Timepicker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/timepicker/bootstrap-timepicker.min.css') ?>">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/skins/_all-skins.min.css') ?>">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/toast/jquery.toast.min.css') ?>">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <span class="logo-mini">></span>
        <span class="logo-lg"><?= $sekolah->nama_sekolah ?></span>
      </a>
      <?php $this->load->view('author/v_header'); ?>
      <!-- Sidebar -->
      <aside class="main-sidebar">
        <section class="sidebar">
          <?php
          $data['sekolah'] = $sekolah;
          $this->load->view('author/v_sidebar', $data);
          ?>
        </section>
      </aside>

      <!-- Content Wrapper -->
      <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header">
          <h1>Komentar<small></small></h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Komentar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Komentar</th>
                        <th>Tanggapan Untuk</th>
                        <th>Dikirimkan Pada</th>
                        <th style="text-align:right;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($komentar as $row) : ?>
                        <tr>
                          <td><?= $row->komentar_nama ?></td>
                          <td><?= $row->komentar_isi ?></td>
                          <td><a href="<?= site_url('artikel/' . $row->tulisan_slug) ?>" target="_blank"><?= $row->tulisan_judul ?></a></td>
                          <td><?= date("d M Y H:i", strtotime($row->komentar_tanggal)) ?></td>
                          <td style="text-align:right;">
                            <?php if ($row->komentar_status == '1' && $row->komentar_parent == '0') : ?>
                              <a class="btn btn-reply" href="javascript:void(0);" data-id="<?= $row->komentar_id ?>" data-post_id="<?= $row->komentar_tulisan_id ?>" title="Balas"><span class="fa fa-reply"></span></a>
                              <a class="btn btn-hapus" href="javascript:void(0);" data-id="<?= $row->komentar_id ?>" title="Hapus"><span class="fa fa-trash"></span></a>
                            <?php elseif ($row->komentar_status == '1') : ?>
                              <a class="btn btn-hapus" href="javascript:void(0);" data-id="<?= $row->komentar_id ?>" title="Hapus"><span class="fa fa-trash"></span></a>
                            <?php else : ?>
                              <a class="btn" href="<?= site_url('author/komentar/publish/' . $row->komentar_id) ?>" title="Publish"><span class="fa fa-send"></span></a>
                              <a class="btn btn-hapus" href="javascript:void(0);" data-id="<?= $row->komentar_id ?>" title="Hapus"><span class="fa fa-trash"></span></a>
                            <?php endif; ?>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- /.content-wrapper -->
        <!-- Footer -->
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 <a href="#"><?= $sekolah->nama_sekolah ?></a>.</strong> All rights reserved.
      </footer>

  <!-- Control Sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Komentar</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'author/komentar/hapus'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value=""/>
                            <p>Apakah Anda yakin mau menghapus komentar ini?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal Relpy-->
        <div class="modal fade" id="ModalReply" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Reply</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'author/komentar/reply'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="komenid" value=""/>
                     <input type="hidden" name="postid" value=""/>
                        <textarea name="komentar" class="form-control" rows="8" cols="80" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Relpy</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


  <!-- jQuery 2.2.3 -->
  <script src="<?= base_url('assets/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.min.js') ?>"></script>
  <!-- Datepicker -->
  <script src="<?= base_url('assets/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>
  <!-- Timepicker -->
  <script src="<?= base_url('assets/plugins/timepicker/bootstrap-timepicker.min.js') ?>"></script>
  <!-- Daterangepicker -->
  <script src="<?= base_url('assets/plugins/daterangepicker/moment.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>
  <!-- SlimScroll -->
  <script src="<?= base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/dist/js/app.min.js') ?>"></script>
  <!-- Toastr -->
  <script src="<?= base_url('assets/plugins/toast/jquery.toast.min.js') ?>"></script>

  <!-- Page script -->
  <script>
    $(function() {
      $("#example1").DataTable();

      $('#datepicker, #datepicker2').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
      });

      $(".timepicker").timepicker({
        showInputs: true,
        showMeridian: false
      });

      $('#example1').on('click', '.btn-reply', function() {
        var komentar_id = $(this).data('id');
        var post_id = $(this).data('post_id');
        $('#ModalReply').modal('show');
        $('[name="komenid"]').val(komentar_id);
        $('[name="postid"]').val(post_id);
      });

      $('#example1').on('click', '.btn-hapus', function() {
        var komentar_id = $(this).data('id');
        $('#ModalHapus').modal('show');
        $('[name="kode"]').val(komentar_id);
      });

      <?php if ($this->session->flashdata('msg') == 'error') : ?>
        $.toast({
          heading: 'Error',
          text: 'Gagal dihapus!',
          showHideTransition: 'slide',
          icon: 'error'
        });
      <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        $.toast({
          heading: 'Sukses',
          text: 'Berhasil dihapus!',
          showHideTransition: 'slide',
          icon: 'success'
        });
      <?php endif; ?>
    });
  </script>
</body>

</html>