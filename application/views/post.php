<div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post-single">
              <div class="post-thumbnail"><img src="<?php echo base_url('assets/img/blog-post-3.jpeg'); ?>" alt="..." class="img-fluid"></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="category"><a href="#">Business</a><a href="#">Financial</a></div>
                </div>
                <h1><?php echo $title; ?><a href="<?php echo base_url('blog/'.$post['slug']); ?>"><i class="fa fa-bookmark-o"></i></a></h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="<?php echo base_url('assets/img/avatar-1.jpg'); ?>" alt="..." class="img-fluid"></div>
                    <div class="title"><span><?php echo $post['username']; ?></span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
                <div class="post-body">
                     <?php echo $post['text']; ?>
                  </div>
            <div class="post-tags"> <?php foreach ($tags as $tag): ?>
                <a href="#" class="tag"><?php echo '#'.$tag; ?></a>
                <?php endforeach; ?></div>
                <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="#" class="prev-post text-left d-flex align-items-center">
                    <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                    <div class="text"><strong class="text-primary">Previous Post </strong>
                      <h6>I Bought a Wedding Dress.</h6>
                    </div></a><a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
                    <div class="text"><strong class="text-primary">Next Post </strong>
                      <h6>I Bought a Wedding Dress.</h6>
                    </div>
                    <div class="icon next"><i class="fa fa-angle-right">   </i></div></a></div>
                <div class="post-comments">
                  <header>
                    <h3 class="h6">Comentarios publicados</h3>
                  </header>
                  <?php foreach ($comments as $comment): ?>
                  <div class="comment">
                    
                    <div class="comment-header d-flex justify-content-between">
                      <div class="user d-flex align-items-center">
                  <!--      <div class="image"><img src="<?php echo base_url('assets/img/user.svg'); ?>" alt="..." class="img-fluid rounded-circle"></div> -->
                        <div class="title"><strong><?php echo $comment['name']; ?></strong><!--<span class="date">May 2016</span>--></div>
                      </div>
                    </div>
                    <div class="comment-body">
                      <?php echo $comment['text']; ?>
                    </div>
                    
                  </div>
                  <?php endforeach; ?>
                  
                  <!-- Una idea casi mejor sería dejar esto en manos de Facebook o de Disqus. Mejor disqus -->
                  
                <div class="add-comment">
                  <header>
                    <h3 class="h6">Deja un comentario</h3>
                  </header>
                  <?php echo validation_errors(); ?>
                  <?php echo form_open('blog/'.$this->uri->segment(2).'/add_comment'); ?>
                  <?php echo form_hidden('id', $post['id']); ?>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <input type="text" name="name" id="username" placeholder="Name" "class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="email" name="email" id="email" placeholder="Email (no será publicado)" class="form-control">
                      </div>
                      <div class="form-group col-md-12">
                        <textarea name="text" id="text" placeholder="Escribe tu comentario" class="form-control"></textarea>
                      </div>
                      <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-secondary">Submit Comment</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </main>
      
   