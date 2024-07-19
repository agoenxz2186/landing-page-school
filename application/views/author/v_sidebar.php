<ul class="sidebar-menu">
  <li class="treeview ">
    <a href="#">
      <i class="fa fa-newspaper-o"></i>
      <span>Berita</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class=""><a href="<?php echo base_url() . 'author/dashboard' ?>"><i class="fa fa-list"></i> List Berita</a></li>
      <li><a href="<?php echo base_url() . 'author/dashboard/add_tulisan' ?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
    </ul>
  </li>
  <li>
    <a href="<?php echo base_url() . 'author/komentar' ?>">
      <i class="fa fa-comments"></i> <span>Komentar</span>
      <span class="pull-right-container">
        <?php $id = $this->session->idadmin;

        $xkomen = $this->db->query("SELECT tbl_komentar.*, 
             tbl_tulisan.tulisan_judul, 
             tbl_tulisan.tulisan_slug,
             tbl_tulisan.tulisan_pengguna_id
      FROM tbl_komentar
      JOIN tbl_tulisan ON tbl_komentar.komentar_tulisan_id = tbl_tulisan.tulisan_id
      WHERE tbl_tulisan.tulisan_pengguna_id = '$id'
      ORDER BY tbl_komentar.komentar_id DESC")->num_rows(); ?>
        <small class="label pull-right bg-green"><?php echo $xkomen; ?></small>
      </span>
    </a>
  </li>

  <li>
    <a href="<?php echo base_url() . 'administrator/logout' ?>">
      <i class="fa fa-sign-out"></i> <span>Sign Out</span>
      <span class="pull-right-container">
        <small class="label pull-right"></small>
      </span>
    </a>
  </li>
</ul>