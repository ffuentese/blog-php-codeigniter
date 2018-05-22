<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - Login Form View
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

if( ! isset( $optional_login ) )
{
	echo '';
}



if( ! isset( $on_hold_message ) )
{
	if( isset( $login_error_mesg ) )
	{
		echo '
			<div style="border:1px solid red;">
				<p>
					Login Error #' . $this->authentication->login_errors_count . '/' . config_item('max_allowed_attempts') . ': Invalid Username, Email Address, or Password.
				</p>
				<p>
					Username, email address and password are all case sensitive.
				</p>
			</div>
		';
	}

	if( $this->input->get(AUTH_LOGOUT_PARAM) )
	{
		echo '
			<div style="border:1px solid green">
				<p>
					You have successfully logged out.
				</p>
			</div>
		';
	}

	
?>
<div class="container">
<div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8">
	<div class="container">
		<div>
		<h1>Login</h1>
		</div>
		<?php echo form_open( $login_url, ['class' => 'std-form'] ); ?>
  <div class="form-group">
		<label for="login_string" class="form_label">Username or Email</label>
		<input type="text" name="login_string" id="login_string"class="form-control" autocomplete="off" maxlength="255" />

		<br />

		<label for="login_pass" class="form_label">Password</label>
		<input type="password" name="login_pass" id="login_pass" class="form-control" <?php 
			if( config_item('max_chars_for_password') > 0 )
				echo 'maxlength="' . config_item('max_chars_for_password') . '"'; 
		?> autocomplete="off" readonly="readonly" onfocus="this.removeAttribute('readonly');" />


		<?php
			if( config_item('allow_remember_me') )
			{
		?>

			<br />

			<label for="remember_me" class="form_label">Remember Me</label>
			<input type="checkbox" id="remember_me" name="remember_me" value="yes" />

		<?php
			}
		?>

		<p>
			<?php
				$link_protocol = USE_SSL ? 'https' : NULL;
			?>
			<a href="<?php echo site_url('examples/recover', $link_protocol); ?>">
				Can't access your account?
			</a>
		</p>


		<input type="submit" class="btn btn-primary" name="submit" value="Login" id="submit_button"  />
		
		</div>

</form>
<?php if (isset($auth_username)): 
  echo '<p>Bienvenido'. $auth_username;
    endif; 
    ?>
          </div>
         
          </main>
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
            <div class="blog-posts"><a href="#">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="https://codeigniter-ffuentes.c9users.io/assets/img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 500</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a><a href="#">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="https://codeigniter-ffuentes.c9users.io/assets/img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 500</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a><a href="#">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="https://codeigniter-ffuentes.c9users.io/assets/img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 500</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a></div>
          </div>
          <!-- Widget [Categories Widget]-->
          <div class="widget categories">
            <header>
              <h3 class="h6">Categories</h3>
            </header>
            <div class="item d-flex justify-content-between"><a href="#">Growth</a><span>12</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
          </div>
          <!-- Widget [Tags Cloud Widget]-->
          <div class="widget tags">       
            <header>
              <h3 class="h6">Tags</h3>
            </header>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>

<?php

	}
	else
	{
		// EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
		echo '
			<div style="border:1px solid red;">
				<p>
					Excessive Login Attempts
				</p>
				<p>
					You have exceeded the maximum number of failed login<br />
					attempts that this website will allow.
				<p>
				<p>
					Your access to login and account recovery has been blocked for ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes.
				</p>
				<p>
					Please use the <a href="/examples/recover">Account Recovery</a> after ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes has passed,<br />
					or contact us if you require assistance gaining access to your account.
				</p>
			</div>
		';
	}

/* End of file login_form.php */
/* Location: /community_auth/views/examples/login_form.php */ 