<?php 
  $katfoot="SELECT * FROM tb_kategori ORDER BY judul_kategori LIMIT 6";
  $rsKatFoot=mysqli_query($konek, $katfoot);
?>
<!-- Footer Type-1 -->
    <footer class="footer footer-type-1 bg-dark">
      <div class="container">
        <div class="footer-widgets top-bottom-dividers pb-mdm-20">
          <div class="row">

            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">Informasi</h5>
                <ul class="list-no-dividers">
                  <li><a href="?p=about">Tentang Kami</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">Bantuan</h5>
                <ul class="list-no-dividers">                  
                  <li><a href="?p=contact">Kontak Kami</a></li>
                  <li><a href="?p=faq">F.A.Q</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">Kategori Buku</h5>
                <ul class="list-no-dividers">
                  <?php while($row=mysqli_fetch_assoc($rsKatFoot)){ ?>
                    <li><a href="?p=buku&id_kat=<?php echo $row['id_kategori']; ?>&halaman=1"><?php echo $row['judul_kategori']; ?></a></li>
                  <?php } ?>
                  <li>.........</li>
                </ul>
              </div>
            </div>              

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h5 class="widget-title uppercase">tentang kami</h5>
                <p class="mb-0">
                    Yozora Bookstore menjual berbagai macam kategori buku dari komik hingga novel fiksi, serta buku ilmiah lain dengan harga yang bersaing dan kualitas terjamin.
                </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-get-in-touch">
                <h5 class="widget-title uppercase">Kontak</h5>
                <address class="footer-address"><span>Alamat:</span> Jl. A. Yani No.189, Krajan, Kedungjambe, Singgahan,, Tuban, Jawa Timur</address>
                <p>No. HP: <a href="tel:+6281332565853">+6281332565853</a></p>
                <p>Email: <a href="mailto:prayogabismap@gmail.com">prayogabismap@gmail.com</a></p>
                <div class="social-icons rounded mt-20">
                  <a href="https://twitter.com/yozoraid" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/p.bismaps" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/yozora_id/" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div> <!-- end stay in touch -->           

          </div>
        </div>    
      </div> <!-- end container -->

      <div class="bottom-footer bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 copyright sm-text-center">
              <span>
                &copy; 2021 Yozora Bookstore | By YozoraID
              </span>
            </div>

            <div class="col-sm-4 text-center">
              <div id="back-to-top">
                <a href="#top">
                  <i class="fa fa-angle-up"></i>
                </a>
              </div>
            </div>

            <!--<div class="col-sm-4 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
              <i class="fa fa-cc-paypal"></i>
              <i class="fa fa-cc-visa"></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-discover"></i>
              <i class="fa fa-cc-amex"></i>
            </div>-->
          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->
