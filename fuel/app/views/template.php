
<?php echo Asset::css(array('bootstrap.css','template.css',)); ?>
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">HITINTERNSHIP</a>
    </header>
    <ul class="nav">
      <li>
        <a href="<?php echo Uri::base(false).'application/create' ; ?> ">
          <i class="zmdi zmdi-view-dashboard"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="<?php echo Uri::base(false).'application/create' ; ?>">
          <i class="zmdi zmdi-link"></i> Apply
        </a>
        <a href="<?php echo Uri::base(false).'application' ; ?>">
          <i class="zmdi zmdi-link"></i> View student applications
        </a>
      </li>
      <li>
        <a href="<?php echo Uri::base(false).'listing/create' ; ?>">
          <i class="zmdi zmdi-widgets"></i> Create Job Offer
        </a>
        <a href="<?php echo Uri::base(false).'listing' ; ?>">
          <i class="zmdi zmdi-widgets"></i> Job Listings
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-calendar"></i> Notify
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-info-outline"></i> Add Forms
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-settings"></i> View Forms
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-comment-more"></i> Logout
        </a>
      </li>
    </ul>
  </div>
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
            </a>
          </li>
          <li><a href="#">Miara</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">

			<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
			<?php endif; ?>
			<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-danger">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
			<?php endif; ?>
			</div>
			<div class="col-md-12">
			<?php echo $content; ?>
			</div>
     
    
    </div>
  </div>
</div>

