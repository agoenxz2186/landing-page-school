<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <?php foreach($slider as $key => $slide): ?>
                <li data-target="#carousel" data-slide-to="<?= $key ?>" <?= $key === 0 ? 'class="active"' : '' ?>></li>
                <?php endforeach; ?>
            </ol>

            <div class="carousel-inner" role="listbox">
                <?php foreach($slider as $key => $slide): ?>
                <div style="height: 500px;" class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                    <img class="d-block" src="<?= base_url('assets/images/slider/'.$slide->gambar) ?>" alt="<?= $slide->judul ?>">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1><?= $slide->judul ?></h1>
                            <h4><?= $slide->kalimat ?></h4>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<?php foreach ($content as $cont):?>
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <h2><?=$cont->judul_content?></h2>
            </div>
            <?=$cont->content?>
        </div>
    </div>
</section>
<?php endforeach?>
<!--//END ABOUT -->
<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita->result() as $row) : ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="courses_box mb-4">
                        <div style="height: 200px; overflow: hidden;">
                            <div style="position: relative; width: 100%; height: 100%;">
                                <img style="position: absolute; width: 100%; height: 100%; object-fit: cover;" src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="blog-img">
                            </div>
                        </div>
                        <!-- // end .course-img-wrap -->
                        <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>" class="course-box-content">
                            <h3 style="text-align:center;"><?php echo $row->tulisan_judul; ?></h3>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->
<!--============================= EVENTS =============================-->
<section class="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-img2">
                    <?php foreach ($pengumuman->result() as $row) : ?>
                        <div class="row">
                            <div class="col-sm-3"> <img src="<?php echo base_url() . 'theme/images/announcement-icon.png' ?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                            <div class="col-sm-9">
                                <h3><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h3>
                                <span><?php echo $row->tanggal; ?></span>
                                <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>

                            </div><!-- // end .col-sm-7 -->
                        </div><!-- // end .row -->
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($agenda->result() as $row) : ?>
                            <div class="event_date">
                                <div class="event-date-wrap">
                                    <p><?php echo date("d", strtotime($row->agenda_tanggal)); ?></p>
                                    <span><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></span>
                                </div>
                            </div>
                            <div class="date-description">
                                <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a></h3>
                                <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                                <hr class="event_line">
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END EVENTS -->
<!--============================= DETAILED CHART =============================-->
<div class="detailed_chart" style="background: url('<?=base_url("assets/images/$sekolah->background")?>');">
                
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_1.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_guru; ?></span> Guru
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_2.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_siswa; ?></span> Siswa
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_3.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_files; ?></span> Download
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_4.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda; ?></span> Agenda</p>
                </div>
            </div>
        </div>
    </div>
</div>