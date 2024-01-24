 <div class="container-scroller">
  <div class="row p-0 m-0 proBanner" id="proBanner">
    <div class="col-md-12 p-0 m-0">

    </div>
  </div>
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      
      <a class="sidebar-brand brand-logo" href="/home"><img src="assets/images/logo.svg" alt="logo" /></a>
      
      <a class="sidebar-brand brand-logo-mini" href="/home"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal"><?= session()->get('username')?> </h5>
            <span><?= session()->get('level')?></span>
            </div>
          </div>
          <!-- <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a> -->
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">


            <!-- <a href="/" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div> -->
<!--               <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div> -->
            </a>


            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
<!--               <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div> -->
            </a>
          </div>
        </div>
      </li>
     





      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="/home/keluar" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="
              mdi mdi-logout "></i>
          </span>
          <span class="menu-title">Logout</span>
          
        </a>
         </li>
        </a>

    </ul>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
<!--     partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
     

        <ul class="navbar-nav navbar-nav-right">
     
          <li class="nav-item dropdown">
            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
              <div class="navbar-profile">
                <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= session()->get('username')?></p>
                <!-- <i class="mdi mdi-menu-down d-none d-sm-block"></i> -->
              </div>
            </a>
<!--             <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown"> -->
<!--               <h6 class="p-3 mb-0">Profile</h6> -->
<!--               <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-success"></i>
                  </div>
                </div> -->
                <!-- <div class="preview-item-content">
                  <p class="preview-subject mb-1">Settings</p>
                </div> -->
             <!--  </a> -->
     <!--          <div class="dropdown-divider"></div> --> 
              <!-- <a class="dropdown-item preview-item"> -->
           <!--      <div class="preview-thumbnail">
 --><!--                   <div class="preview-icon bg-dark rounded-circle"> -->
                    <!-- <i class="mdi mdi-logout text-danger"></i> -->
     <!--              </div>
                </div>
 -->                <!-- <div class="preview-item-content">
                  <p class="preview-subject mb-1">Log out</p>
                </div> -->
             <!--  </a> -->
              <!-- <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">Advanced settings</p>
            </div> -->
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-format-line-spacing"></span>
        </button>
      </div>
    </nav>

 <div class="main-panel">
          <div class="content-wrapper">
