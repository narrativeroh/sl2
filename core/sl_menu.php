<div class="container-fluid navbar bg-body-tertiary navbar-expand-md top-bar">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $pub;?>">
      <img src="<?php echo $pub;?>assets/SL_Logo.png" alt="Stats & Ladders" height="34"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <div class="switch-mode switch-mode-<?php echo $menu;?>" onClick="Javascript:window.location.href = '<?php echo $pub; if($menu == "Player"){echo "organiser/";}?>';" >
            <div class="float-end form-check form-switch form-switch-lg form-switch-<?php echo $menu;?>">
              <input id="menu-mode" class="form-check-input" type="checkbox"<?php if($menu=="Player"){echo " checked";}?> >
            </div>
            <div class="form-text text-white"><?php echo $menu;?> Mode</div>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav d-flex d-none d-md-block">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
             if($user['auth_img']<>"")
             {
               $user_url = $pub."uploads/".$user['auth_id']."/".$user['auth_img'];
             }
             else {
               $user_url = $pub."assets/default-user.png";
             }
            ?>
            <img id="menu-avatar" class="menu-avatar" src="<?php echo $user_url;?>"/> <?php echo $user['auth_name'];?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="<?php echo $pub;?>profile/">Profile</a></li>
            <li><a class="dropdown-item" href="<?php echo $pub;?>logout/">Logout</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav d-flex d-block d-md-none">
        <li class="nav-item"><a class="nav-link" href="<?php echo $pub;?>profile/">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo $pub;?>logout/">Logout</a></li>
          </ul>
      </div>
</div>
</div>

<div class="sidebar d-none d-md-block sidebar-<?php echo strtolower($menu);?>">
  <div class="sidebar-menu  d-grid gap-2 mb-2">
      <button class="btn btn-outline-light text-start">
        <i class="bi bi-speedometer"></i> <span class="btn-text">Dashboard</span>
      </button>

      <button class="btn btn-light text-start">
        <i class="bi bi-calendar"></i> <span class="btn-text">Events</span>
      </button>
      <div class="sidebar-submenu active">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="#">New Event</a></li>
          <li class="nav-item"><a href="#">All Events</a></li>
        </ul>
      </div>

    </div>
</div>

<div class="d-block d-md-none accordion accordion-flush" style="margin-top: 60px;" id="sidebar-menu">
  <div class="accordion-item  sidebar-<?php echo strtolower($menu);?>">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-dark" style="background: none;" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu-inner" aria-expanded="false" aria-controls="collapseTwo">MENU</button>
    </h2>
    <div id="sidebar-menu-inner" class="accordion-collapse collapse" data-bs-parent="#sidebar-menu">
      <div class="accordion-body">
        <button class="btn btn-lg btn-outline-light text-start d-block" style="width: 100%; margin-bottom: 10px;">
          <i class="bi bi-speedometer"></i> <span class="btn-text">Dashboard</span>
        </button>

        <button class="btn btn-lg btn-light text-start d-block" style="width: 100%; margin-bottom: 10px;">
          <i class="bi bi-calendar"></i> <span class="btn-text">Events</span>
        </button>
        <div class="mobile-sidebar-submenu active">
          <ul class="nav flex-column">
            <li class="nav-item"><a href="#">New Event</a></li>
            <li class="nav-item"><a href="#">All Events</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="col-12 vh-100"  style="padding: 16px; padding-left: 76px; padding-top: 80px;">
