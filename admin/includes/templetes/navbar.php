<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.php"><?php echo lang('ADMIN_HOME');?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="nav navbar-nav">
        <li><a href="categories.php"><?php echo lang('ADMIN_CATEGORIES');?></a></li>
        <li><a href="items.php"><?php echo lang('ADMIN_ITEM');?></a></li>
        <li><a href="members.php"><?php echo lang('ADMIN_MEMBERS');?></a></li>
        <li><a href="comments.php"><?php echo lang('ADMIN_COMMENTS');?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['userName']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../index.php">Visit shop</a></li>
            <li><a href="members.php?do=edit&id=<?php echo $_SESSION['id'];?>"><?php echo lang('ADMIN_EDIT');?></a></li>
            <li><a href="#"><?php echo lang('ADMIN_SETTING');?></a></li>
            <li><a href="logout.php"><?php echo lang('ADMIN_LOGOUT');?></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>