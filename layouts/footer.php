<footer class="footer">
        <div class="footer-body">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2>Về tôi</h2>
                <p>Website game được thiết kế chuyên nghiệp và đẹp mắt. Giao diện website WordPress này phù hợp
                  với game thủ ưa cảm giác mạnh và thu hút sự cú ý người dùng. web dễ sử dụng sẽ làm cho các quản
                  trị web và người truy cập web có được những trải nghiệm hấp dẫn. Người chơi có thể đăng tải tin
                  tức các trò game về để dùng thử, giới thiệu và thoải mái.</p>
                <button type="button" class="btn btn-outline-secondary">Xem thêm</button>
              </div>
              <div class="col-md-4">
                <h2>Chuyên mục</h2>
                <ul class="menu-footer">
                  <?php foreach ($arr4 as $key) { ?>
                  <li><a href="loai-tin.php?type=<?php echo $key['id_type']; ?>"><?php echo $key['typename']; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-md-4">
                <h2>Liên hệ</h2>
                <ul class="menu-footer">
                  <li><a href="mailto:nhutkhangit@gmail.com">Email: nhutkhangit@gmail.com</a></li>
                  <li><a href="callme:0817233044">Số điện thoại: 0817233044</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- footer body -->
        <div class="footer-bottom">
          <h2>@copyring 2019 | Design by <a href="https://www.facebook.com/boypoornt" target="_blank">Kend</a></h2>
        </div>
        <!-- footer bottom -->
      </footer>
      <!-- footer -->
    </div>
  </body>
<!-- Jquery -->
<script src="assets/owlcarousel/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="assets/owlcarousel/owl.carousel.min.js"></script>
  <script>
    $('.owl-slider').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:false,
      autoplay:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        1000:{
          items:1
        }
      }
    })

    $('.owl-relation').owlCarousel({
      loop:false,
      margin:10,
      nav:false,
      dots:false,
      autoplay:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        1000:{
          items:3
        }
      }
    })

  </script>
</html>
