<div class="navbar-wrapper">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>
    <img class="navbar-brand" src="https://info.wonderlabs.io/hubfs/NewBlogWonderlabs/logo.png">
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">About Us</a></li>
        <li><a href="" target="ext">Gallery</a></li>
        <li><a href="" target="ext">Accomodation</a></li>
        <li><a href="">Contact Us</a></li>
<?php if (isset($_SESSION['account'])): ?>
        <li>
          <a href="" class="btn-apply" data-toggle="dropdown"><?="Hi, {$_SESSION['account']['fname']} {$_SESSION['account']['lname']}"?></a>
            <ul class="dropdown-menu">
              <li><a href="#">Edit Profile</a></li>
              <li><a href="ajax/logout.php">Logout</a></li>
            </ul>
        </li>
<?php else: ?>
        <li><a href="" class="btn-apply" data-toggle="modal" data-target="#loginModal">Log-in</a></li>
<?php endif;?>
      </ul>
    </div>
  </div>
</div>