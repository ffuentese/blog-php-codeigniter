<div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div>
                <h2><?php echo $title; ?></h2>
                
                <div>
                  
                  <p>Bienvenido <?php echo $auth_username; ?></p>

                <?php echo validation_errors(); ?>

                <?php echo (isset($post)) ? form_open('blog/'.$post['slug'].'/edit') : form_open('blog/create'); ?>
                            
                 <div class="form-group">
                    <?php echo (isset($post)) ? form_hidden('id', $post['id']) : "" ?> <br />
                    <label for="title">Title</label>
                    <input type="input" class="form-control" name="title" value="<?php echo (isset($post)) ?  $post['title'] : ""   ?>" /><br />
                
                    <label for="text">Text</label>zx
                    <textarea id="summernote" name="text" class="form-control"><?php echo (isset($post)) ?  $post['text'] : "" ;  ?></textarea><br />
                    
    
                    
                    <?php echo form_dropdown('category', $categories, set_value('Seleccione un dato...'), 'class="form-control"'); ?> <br/>
                  
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" class="form-control" value="<?php echo (isset($post)) ?  $post['tags'] : "" ;  ?>" /><br />
                    
                    </div>
                    
                    <?php echo form_hidden('author', $auth_user_id); ?> <br />
                
                    <input type="submit" class="btn btn-primary" name="submit" value="Create post" />
                
                </form>
                </div>
            </div>
          </div>
        </main>
       
    