<!--//END HEADER -->
<!--============================= BLOG =============================-->
<section class="blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php echo $this->session->flashdata('msg'); ?>
                <?php foreach ($data->result() as $row) : ?>
                    <div class="blog-single-item">
                        <div class="blog-img_block">
                            <div style="height: 300px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;">
                                    <img style="position: absolute; width: 100%; height: 100%; object-fit: cover;" src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="blog-img">
                                </div>
                            </div>

                            <div class="blog-date">
                                <span><?php echo $row->tanggal; ?></span>
                            </div>
                        </div>
                        <div class="blog-tiltle_block">
                            <h4><a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>"><?php echo $row->tulisan_judul; ?></a></h4>
                            <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $row->tulisan_author; ?></span> </a> | <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $row->tulisan_kategori_nama; ?></span></a></h6>
                            <?php
                            $content_from_database = $row->tulisan_isi;

                            // Decode HTML entities jika diperlukan
                            $decoded_content = htmlspecialchars_decode($content_from_database);

                            // Hilangkan semua tag HTML kecuali <a> dan <p>
                            $cleaned_content = strip_tags($decoded_content, '<a><p>');

                            // Fungsi untuk membatasi jumlah kata
                            

                            // Gunakan fungsi limit_words() dan tambahkan elipsis di akhir
                            $limited_content = limit_words($cleaned_content, 10) . '...';

                            echo $limited_content;
                            ?>
                            <div class="blog-icons">
                                <div class="blog-share_block">
                                    <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <nav>
                    <?php error_reporting(0);
                    echo $page; ?>
                </nav>
            </div>
            <div class="col-md-4">
                <form action="<?php echo site_url('blog/search'); ?>" method="get">
                    <input type="text" name="keyword" placeholder="Search" class="blog-search" required>
                    <button type="submit" class="btn btn-warning btn-blogsearch">SEARCH</button>
                </form>
                <div class="blog-category_block">
                    <h3>Kategori</h3>
                    <ul>
                        <?php foreach ($category->result() as $row) : ?>
                            <li><a href="<?php echo site_url('blog/kategori/' . str_replace(" ", "-", $row->kategori_nama)); ?>"><?php echo $row->kategori_nama; ?><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="blog-featured_post">
                    <h3>Populer</h3>
                    <?php foreach ($populer->result() as $row) : ?>
                        <div class="blog-featured-img_block">

                            <img style="width: 100px; height: 100px;" src="<?php echo base_url('assets/images/' . $row->tulisan_gambar); ?>" class="img-fluid" alt="blog-featured-img">
                            <h5><a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>"><?php echo limit_words($row->tulisan_judul, 3) . '...'; ?></a></h5>
                            <p><?php  $content_from_database = $row->tulisan_isi;

// Decode HTML entities jika diperlukan
$decoded_content = htmlspecialchars_decode($content_from_database);

// Hilangkan semua tag HTML kecuali <a> dan <p>
$cleaned_content = strip_tags($decoded_content, '<a><p>');

// Fungsi untuk membatasi jumlah kata


// Gunakan fungsi limit_words() dan tambahkan elipsis di akhir
$limited_content = limit_words($cleaned_content, 5) . '...';

echo $limited_content;
?> </p>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                </div>


            </div>
        </div>
    </div>
</section>
<!--//END BLOG -->
<!--============================= FOOTER =============================-->