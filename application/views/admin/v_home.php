<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Post</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datepicker/datepicker3.css' ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/iCheck/all.css' ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/colorpicker/bootstrap-colorpicker.min.css' ?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/select2/select2.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><?= $sekolah->nama_sekolah ?></span>
      </a>
      <?php
      $this->load->view('admin/v_header');
      ?>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <?php $data['sekolah'] = $sekolah;
          $data['jum_pesan'] = $jum_pesan;
          $data['jum_comment'] = $jum_comment;
          $this->load->view('admin/v_sidebar', $data); ?>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Home
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Landing Page</a></li>
            <li class="active">Home</li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Slider</h3>
                  <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Slider</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Kalimat</th>
                        <th style="text-align:right;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($slider as $slide) : ?>
                        <tr>
                          <td><img width="50" height="50" src="<?= base_url() . 'assets/images/slider/' . $slide->gambar ?>"></td>
                          <td><?= $slide->judul ?></td>
                          <td><?= $slide->kalimat ?></td>
                          <td style="text-align:right;">
                            <a class="btn" data-toggle="modal" data-target="#ModalEdit<?= $slide->slider_id ?>"><span class="fa fa-pencil"></span></a>
                            <!-- Modal Edit Slider -->
                            <div class="modal fade" id="ModalEdit<?= $slide->slider_id ?>" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel<?= $slide->slider_id ?>">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 15px; top: 15px;">
                                      <span aria-hidden="true"><span class="fa fa-close"></span></span>
                                    </button>
                                    <h4 class="modal-title" id="ModalEditLabel<?= $slide->slider_id ?>" style="position: absolute; left: 15px; top: 15px;">Edit Slider</h4>
                                  </div>
                                  <form class="form-horizontal" action="<?= base_url() . 'admin/landing/update_slider' ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $slide->slider_id ?>">
                                    <div class="modal-body">
                                      <div class="form-group">
                                        <label for="inputUserName<?= $slide->slider_id ?>" class="col-sm-4 control-label">Judul</label>
                                        <div class="col-sm-7">
                                          <input type="text" name="judul" class="form-control" value="<?= $slide->judul ?>" id="inputUserName<?= $slide->slider_id ?>" placeholder="Judul">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserKalimat<?= $slide->slider_id ?>" class="col-sm-4 control-label">Kalimat</label>
                                        <div class="col-sm-7">
                                          <textarea name="kalimat" class="form-control" id="inputUserKalimat<?= $slide->slider_id ?>"><?= $slide->kalimat ?></textarea>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserGambar<?= $slide->slider_id ?>" class="col-sm-4 control-label">Gambar</label>
                                        <div class="col-sm-7">
                                          <input type="file" name="foto" id="inputUserGambar<?= $slide->slider_id ?>">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>


                            <a class="btn" data-toggle="modal" data-target="#ModalHapus<?= $slide->slider_id ?>"><span class="fa fa-trash"></span></a>
                            <!-- Modal Hapus Slider -->
                            <div class="modal fade" id="ModalHapus<?= $slide->slider_id ?>" tabindex="-1" role="dialog" aria-labelledby="ModalHapusLabel<?= $slide->slider_id ?>">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 15px; top: 15px;">
                                      <span aria-hidden="true"><span class="fa fa-close"></span></span>
                                    </button>
                                    <h4 class="modal-title" id="ModalHapusLabel<?= $slide->slider_id ?>" style="position: absolute; left: 15px; top: 15px;">Hapus Slider</h4>
                                  </div>
                                  <form class="form-horizontal" action="<?= base_url() . 'admin/landing/hapus_slider' ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body text-center"> <!-- Tambahkan kelas text-center di sini -->
                                      <input type="hidden" name="id" value="<?= $slide->slider_id ?>" />
                                      <input type="hidden" name="gambar" value="<?= $slide->gambar ?>">
                                      <p>Apakah Anda yakin ingin menghapus Slider <b><?= $slide->judul ?></b> ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary btn-flat" id="hapus">Hapus</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section style="margin:0 10px;padding:10px;">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Content</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                        <th>Judul Content</th>
                        <th>Content</th>
                        <th style="text-align:right;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($content as $cont) : ?>
                        <tr>
                          <td><?= $cont->judul_content ?></td>
                          <?php
                          function limit_words($string, $word_limit)
                          {
                            $words = explode(" ", $string);
                            return implode(" ", array_splice($words, 0, $word_limit));
                          }
                          $content_from_database = $cont->content;

                          // Decode HTML entities jika diperlukan
                          $decoded_content = htmlspecialchars_decode($content_from_database);

                          // Hilangkan semua tag HTML kecuali <a> dan <p>
                          $cleaned_content = strip_tags($decoded_content, '<a><p>');

                          // Fungsi untuk membatasi jumlah kata


                          // Gunakan fungsi limit_words() dan tambahkan elipsis di akhir
                          $limited_content = limit_words($cleaned_content, 5) . '...';

                          ?>
                          <td><?= $limited_content ?>....</td>
                          <td style="text-align:right;">
                            <a class="btn" href="<?= base_url('admin/landing/edit_content_home/' . $cont->id) ?>"><span class="fa fa-pencil"></span></a>

                            <a class="btn" data-toggle="modal" data-target="#ModalHapus<?= $cont->id ?>"><span class="fa fa-trash"></span></a>
                            <!-- Modal Hapus Slider -->
                            <div class="modal fade" id="ModalHapus<?= $cont->id ?>" tabindex="-1" role="dialog" aria-labelledby="ModalHapusLabel<?= $cont->id ?>">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 15px; top: 15px;">
                                      <span aria-hidden="true"><span class="fa fa-close"></span></span>
                                    </button>
                                    <h4 class="modal-title" id="ModalHapusLabel<?= $cont->id ?>" style="position: absolute; left: 15px; top: 15px;">Hapus Slider</h4>
                                  </div>
                                  <form class="form-horizontal" action="<?= base_url() . 'admin/landing/hapus_content_home/' . $cont->id ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body text-center">
                                      <p>Apakah Anda yakin ingin menghapus Content <b><?= $cont->judul_content ?></b> ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary btn-flat" id="hapus">Hapus</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Judul Content</h3>
            </div>

            <form action="<?php echo base_url() . 'admin/landing/tambah_content_home' ?>" method="post">

              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-10">
                    <input type="text" name="judul" class="form-control" placeholder="Judul Content" required />
                  </div>
                  <!-- /.col -->
                  <div class="col-md-2">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Publish</button>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-body -->

              </div>
          </div>
          <!-- /.box -->

          <div class="row">
            <div class="col-md-12">

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Content</h3>
                </div>
                <div class="box-body">

                  <textarea id="ckeditor" name="content" required></textarea>

                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
              </form>
            </div>

            <!-- /.row -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 <a href="#"><?= $sekolah->nama_sekolah ?></a>.</strong> All rights reserved.
      </footer>
      <!-- ./wrapper -->
      <!--Modal Add Pengguna-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
              <h4 class="modal-title" id="myModalLabel">Tambah Slider</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url() . 'admin/landing/tambah_slider' ?>" method="post" enctype="multipart/form-data">

              <div class="modal-body">

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                  <div class="col-sm-7">
                    <input type="text" name="judul" class="form-control" id="inputUserName" placeholder="Judul" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">Kalimat</label>
                  <div class="col-sm-7">
                    <textarea name="kalimat" id="" class="form-control" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">Gambar</label>
                  <div class="col-sm-7">
                    <input type="file" name="gambar" required />
                  </div>
                </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- jQuery 2.2.3 -->
      <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>

      <!-- Bootstrap 3.3.6 -->
      <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
      <!-- Select2 -->
      <script src="<?php echo base_url() . 'assets/plugins/select2/select2.full.min.js' ?>"></script>
      <!-- InputMask -->
      <script src="<?php echo base_url() . 'assets/plugins/input-mask/jquery.inputmask.js' ?>"></script>
      <script src="<?php echo base_url() . 'assets/plugins/input-mask/jquery.inputmask.date.extensions.js' ?>"></script>
      <script src="<?php echo base_url() . 'assets/plugins/input-mask/jquery.inputmask.extensions.js' ?>"></script>
      <!-- date-range-picker -->
      <script src="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.js' ?>"></script>
      <!-- bootstrap datepicker -->
      <script src="<?php echo base_url() . 'assets/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
      <!-- bootstrap color picker -->
      <script src="<?php echo base_url() . 'assets/plugins/colorpicker/bootstrap-colorpicker.min.js' ?>"></script>
      <!-- bootstrap time picker -->
      <script src="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>
      <!-- SlimScroll 1.3.0 -->
      <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
      <!-- iCheck 1.0.1 -->
      <script src="<?php echo base_url() . 'assets/plugins/iCheck/icheck.min.js' ?>"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
      <script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js' ?>"></script>
      <!-- Page script -->

      <script>
        $(function() {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.

          CKEDITOR.replace('ckeditor');


        });
      </script>

      <script>
        $(function() {
          //Initialize Select2 Elements
          $(".select2").select2();

          //Datemask dd/mm/yyyy
          $("#datemask").inputmask("dd/mm/yyyy", {
            "placeholder": "dd/mm/yyyy"
          });
          //Datemask2 mm/dd/yyyy
          $("#datemask2").inputmask("mm/dd/yyyy", {
            "placeholder": "mm/dd/yyyy"
          });
          //Money Euro
          $("[data-mask]").inputmask();

          //Date range picker
          $('#reservation').daterangepicker();
          //Date range picker with time picker
          $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            format: 'MM/DD/YYYY h:mm A'
          });
          //Date range as a button
          $('#daterange-btn').daterangepicker({
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
            function(start, end) {
              $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
          );

          //Date picker
          $('#datepicker').datepicker({
            autoclose: true
          });

          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
          });
          //Red color scheme for iCheck
          $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
          });
          //Flat red color scheme for iCheck
          $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
          });

          //Colorpicker
          $(".my-colorpicker1").colorpicker();
          //color picker with addon
          $(".my-colorpicker2").colorpicker();

          //Timepicker
          $(".timepicker").timepicker({
            showInputs: false
          });
        });
      </script>

      <?php if ($this->session->flashdata('msg') == 'error') : ?>
        <script type="text/javascript">
          $.toast({
            heading: 'Error',
            text: "Wajib Memasukan Gambar",
            showHideTransition: 'slide',
            icon: 'error',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#FF4859'
          });
        </script>

      <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
          $.toast({
            heading: 'Success',
            text: "Siswa Berhasil disimpan ke database.",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#7EC857'
          });
        </script>
      <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
        <script type="text/javascript">
          $.toast({
            heading: 'Info',
            text: "Siswa berhasil di update",
            showHideTransition: 'slide',
            icon: 'info',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#00C9E6'
          });
        </script>
      <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
        <script type="text/javascript">
          $.toast({
            heading: 'Success',
            text: "Siswa Berhasil dihapus.",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#7EC857'
          });
        </script>
      <?php else : ?>

      <?php endif; ?>

</body>

</html>