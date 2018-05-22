
 <!-- /container -->


    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
          <div class="container">
            <div class="row">
              <?php foreach ($post as $post_item): ?>
              <!-- post -->
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href="<?php echo base_url('blog/'.$post_item['slug']); ?>"><img src="<?php echo base_url('assets/img/blog-post-1.jpeg'); ?>" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last"><?php echo $post_item['date']; ?></div>
                    <div class="category"><a href="#"><?php echo $post_item['cat_name']; ?></a></div>
                  </div><a href="post.html">
                    <h3 class="h4"><a href="<?php echo base_url('blog/'.$post_item['slug']); ?>"><?php echo $post_item['title']; ?></h3></a>
                  <p class="text-muted"><?php echo $post_item['excerpt']; ?></p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="<?php echo base_url('assets/img/avatar-3.jpg'); ?>" alt="..." class="img-fluid"></div>
                      <div class="title"><span><?php echo $post_item['username']; ?></span></div></a>
                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="comments meta-last"><i class="icon-comment"></i></div>
                  </footer>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
           <?php if (isset($post))  echo $page_links; ?>
              <ul class="pagination pagination-template d-flex justify-content-center">
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </main>
       
