   <aside class="col-lg-4">
          <!-- Widget [Search Bar Widget]-->
          <div class="widget search">
            <header>
              <h3 class="h6">Search the blog</h3>
            </header>
            <form action="#" class="search-form">
              <div class="form-group">
                <input type="search" placeholder="What are you looking for?">
                <button type="submit" class="submit"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
          <!-- Widget [Latest Posts Widget]        -->
          <div class="widget latest-posts">
            <header>
              <h3 class="h6">Latest Posts</h3>
            </header>
            <?php foreach ($ft_list_posts as $item): ?>
            <div class="blog-posts"><a href="<?php echo base_url('blog/'.$item['slug']); ?>">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="<?php echo base_url('assets/img/small-thumbnail-1.jpg'); ?>" alt="..." class="img-fluid"></div>
                  <div class="title"><strong><?php echo $item['title']; ?></strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 500</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a><a href="#">
              </div>
              <?php endforeach; ?>
          </div>
          <!-- Widget [Categories Widget]-->
          <div class="widget categories">
            <header>
              <h3 class="h6">Categories</h3>
            </header>
            <?php foreach (array_slice($categories, 1) as $cat_item): ?>
            <div class="item d-flex justify-content-between"><a href="#"><?php echo $cat_item; ?></a><span>12</span></div>
        <?php endforeach; ?>
          </div>
          <!-- Widget [Tags Cloud Widget]-->
          <div class="widget tags">       
            <header>
              <h3 class="h6">Tags</h3>
              
            </header>
            <ul class="list-inline">
              <?php foreach ($ft_tag_cloud as $tag): ?>
              <li class="list-inline-item"><a href="#" class="tag"><?php echo '#'.$tag; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </aside>
      </div>
    </div>
      <!-- Page Footer-->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <h6 class="text-white">Bootstrap Blog</h6>
            </div>
            <div class="contact-details">
              <p>53 Broadway, Broklyn, NY 11249</p>
              <p>Phone: (020) 123 456 789</p>
              <p>Email: <a href="mailto:info@company.com">Info@Company.com</a></p>
              <ul class="social-menu">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="menus d-flex">
              <ul class="list-unstyled">
                <li> <a href="#">My Account</a></li>
                <li> <a href="#">Add Listing</a></li>
                <li> <a href="#">Pricing</a></li>
                <li> <a href="#">Privacy &amp; Policy</a></li>
              </ul>
              <ul class="list-unstyled">
                <li> <a href="#">Our Partners</a></li>
                <li> <a href="#">FAQ</a></li>
                <li> <a href="#">How It Works</a></li>
                <li> <a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="latest-posts"><a href="#">
                <div class="post d-flex align-items-center">
                  <div class="image"><img src="<?php echo base_url('assets/img/small-thumbnail-1.jpg'); ?>" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Hotels for all budgets</strong><span class="date last-meta">October 26, 2016</span></div>
                </div></a><a href="#">
                <div class="post d-flex align-items-center">
                  <div class="image"><img src="<?php echo base_url('assets/img/small-thumbnail-2.jpg'); ?>" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Great street atrs in London</strong><span class="date last-meta">October 26, 2016</span></div>
                </div></a><a href="#">
                <div class="post d-flex align-items-center">
                  <div class="image"><img src="<?php echo base_url('assets/img/small-thumbnail-3.jpg'); ?>" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Best coffee shops in Sydney</strong><span class="date last-meta">October 26, 2016</span></div>
                </div></a></div>
          </div>
        </div>
      </div>
  <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2017. All rights reserved. Your great site.</p>
            </div>
            <div class="col-md-6 text-right">
              <p>Template By <a href="https://bootstraptemple.com" class="text-white">Bootstrap Temple</a>
                <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/popper.js/umd/popper.min.js'); ?>"> </script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/jquery.cookie/jquery.cookie.js'); ?>"> </script>
    <script src="<?php echo base_url('vendor/@fancyapps/fancybox/jquery.fancybox.min.js'); ?> "></script>
    <script src="<?php echo base_url('assets/js/front.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
     <script>
        $('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
        callbacks: {
        onImageUpload: function(image) {
            uploadImage(image[0]);
        }
        }
      });
      
    function uploadImage(image) {
    var data = new FormData();
    data.append("image", image);
    $.ajax({
        url: '<?php echo base_url("upload/"); ?>',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        dataType		: 'json',
        type: "post",
        success: function(data) {
            var filename = data;
            var image = $('<img>').attr('src', '<?php echo base_url("image/"); ?>' + filename.success);
            $('#summernote').summernote("insertNode", image[0]);
        },
        error: function(data) {
            console.log(data);
        }
    });
}
 </script>
</body>
</html>