<body>
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
<nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="<?php echo base_url() ?>images/logo.png" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url() ?>images/logo2.png" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>">
                <a href="<?php echo base_url('dashboard') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
            <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown <?php if($this->uri->segment(1)=="components"){echo "active";}?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('components/buttons') ?>">Buttons</a></li>
                    <li><i class="fa fa-id-badge"></i><a href="<?php echo base_url('components/badges') ?>">Badges</a></li>
                    <li><i class="fa fa-bars"></i><a href="<?php echo base_url('components/tabs') ?>">Tabs</a></li>
                    <li><i class="fa fa-share-square-o"></i><a href="<?php echo base_url('components/social_buttons') ?>">Social Buttons</a></li>
                    <li><i class="fa fa-id-card-o"></i><a href="<?php echo base_url('components/cards') ?>">Cards</a></li>
                    <li><i class="fa fa-exclamation-triangle"></i><a href="<?php echo base_url('components/alerts') ?>">Alerts</a></li>
                    <li><i class="fa fa-spinner"></i><a href="<?php echo base_url('components/progress_bars') ?>">Progress Bars</a></li>
                    <li><i class="fa fa-fire"></i><a href="<?php echo base_url('components/modals') ?>">Modals</a></li>
                    <li><i class="fa fa-book"></i><a href="<?php echo base_url('components/switches') ?>">Switches</a></li>
                    <li><i class="fa fa-th"></i><a href="<?php echo base_url('components/grids') ?>">Grids</a></li>
                    <li><i class="fa fa-file-word-o"></i><a href="<?php echo base_url('components/typography') ?>">Typography</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown <?php if($this->uri->segment(1)=="tables"){echo "active";}?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="<?php echo base_url('tables/basic_table') ?>">Basic Table</a></li>
                    <li><i class="fa fa-table"></i><a href="<?php echo base_url('tables/data_table') ?>">Data Table</a></li>
                    <li><i class="fa fa-table"></i><a href="<?php echo base_url('tables/manage_data_table') ?>">Manage Data Table</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown <?php if($this->uri->segment(1)=="forms"){echo "active";}?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url('forms/basic_form') ?>">Basic Form</a></li>
                    <li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url('forms/advanced_form') ?>">Advanced Form</a></li>
                </ul>
            </li>

            <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

            <li class="menu-item-has-children dropdown <?php if($this->uri->segment(1)=="icons"){echo "active";}?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-fort-awesome"></i><a href="<?php echo base_url('icons/font_awesome') ?>">Font Awesome</a></li>
                    <li><i class="menu-icon ti-themify-logo"></i><a href="<?php echo base_url('icons/themefy_icons') ?>">Themefy Icons</a></li>
                </ul>
            </li>
            <li class="<?php if($this->uri->segment(1)=="widgets"){echo "active";}?>">
                <a href="<?php echo base_url('widgets') ?>"> <i class="menu-icon ti-email"></i>Widgets </a>
            </li>
            <li class="menu-item-has-children dropdown <?php if($this->uri->segment(1)=="charts"){echo "active";}?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-line-chart"></i><a href="<?php echo base_url('charts/chart_js') ?>">Chart JS</a></li>
                    <li><i class="menu-icon fa fa-area-chart"></i><a href="<?php echo base_url('charts/flot_chart') ?>">Flot Chart</a></li>
                    <li><i class="menu-icon fa fa-pie-chart"></i><a href="<?php echo base_url('charts/peity_chart') ?>">Peity Chart</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children dropdown <?php if($this->uri->segment(1)=="maps"){echo "active";}?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo base_url('maps/google_maps') ?>">Google Maps</a></li>
                    <li><i class="menu-icon fa fa-street-view"></i><a href="<?php echo base_url('maps/vector_maps') ?>">Vector Maps</a></li>
                </ul>
            </li>
            <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown <?php if($this->uri->segment(1)=="pages"){echo "active";}?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url('pages/login') ?>">Login</a></li>
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url('pages/register') ?>">Register</a></li>
                    <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url('pages/forget_password') ?>">Forget Pass</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                    </form>
                </div>

                <div class="dropdown for-notification">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="count bg-danger">5</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="notification">
                    <p class="red">You have 3 Notification</p>
                    <a class="dropdown-item media bg-flat-color-1" href="#">
                        <i class="fa fa-check"></i>
                        <p>Server #1 overloaded.</p>
                    </a>
                    <a class="dropdown-item media bg-flat-color-4" href="#">
                        <i class="fa fa-info"></i>
                        <p>Server #2 overloaded.</p>
                    </a>
                    <a class="dropdown-item media bg-flat-color-5" href="#">
                        <i class="fa fa-warning"></i>
                        <p>Server #3 overloaded.</p>
                    </a>
                  </div>
                </div>

                <div class="dropdown for-message">
                  <button class="btn btn-secondary dropdown-toggle" type="button"
                        id="message"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti-email"></i>
                    <span class="count bg-primary">9</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="message">
                    <p class="red">You have 4 Mails</p>
                    <a class="dropdown-item media bg-flat-color-1" href="#">
                        <span class="photo media-left"><img alt="avatar" src="<?php echo base_url() ?>images/avatar/1.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Jonathan Smith</span>
                            <span class="time float-right">Just now</span>
                                <p>Hello, this is an example msg</p>
                        </span>
                    </a>
                    <a class="dropdown-item media bg-flat-color-4" href="#">
                        <span class="photo media-left"><img alt="avatar" src="<?php echo base_url() ?>images/avatar/2.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Jack Sanders</span>
                            <span class="time float-right">5 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </span>
                    </a>
                    <a class="dropdown-item media bg-flat-color-5" href="#">
                        <span class="photo media-left"><img alt="avatar" src="<?php echo base_url() ?>images/avatar/3.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Cheryl Wheeler</span>
                            <span class="time float-right">10 minutes ago</span>
                                <p>Hello, this is an example msg</p>
                        </span>
                    </a>
                    <a class="dropdown-item media bg-flat-color-3" href="#">
                        <span class="photo media-left"><img alt="avatar" src="<?php echo base_url() ?>images/avatar/4.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Rachel Santos</span>
                            <span class="time float-right">15 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </span>
                    </a>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>images/admin.jpg" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="<?php echo base_url() ?>user_authentication/logout"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>

            <div class="language-select dropdown" id="language-select">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                    <i class="flag-icon flag-icon-us"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="language" >
                    <div class="dropdown-item">
                        <span class="flag-icon flag-icon-fr"></span>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-es"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-us"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-it"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</header><!-- /header -->
<!-- Header-->