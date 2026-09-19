<!DOCTYPE html>
<html class="loading" lang="<?= session('lang') ?>" data-textdirection="<?= session('lang') != 'ar' ? 'ltr' : 'rtl' ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $title ?> | <?= lang('app.documentation') ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" href="<?= base_url('app-assets/images/logo/logo.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('app-assets/images/logo/logo.png') ?>">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/vendors/css/vendors' . (session('lang') != 'ar' ? '' : '-rtl') . '.min.css') ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css' . (session('lang') != 'ar' ? '' : '-rtl') . '/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css' . (session('lang') != 'ar' ? '' : '-rtl') . '/bootstrap-extended.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css' . (session('lang') != 'ar' ? '' : '-rtl') . '/colors.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css' . (session('lang') != 'ar' ? '' : '-rtl') . '/components.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css' . (session('lang') != 'ar' ? '' : '-rtl') . '/custom' . (session('lang') != 'ar' ? '' : '-rtl') . '.css') ?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css' . (session('lang') != 'ar' ? '' : '-rtl') . '/core/menu/menu-types/vertical-menu-modern.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css' . (session('lang') != 'ar' ? '' : '-rtl') . '/core/colors/palette-gradient.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/vendors/css/charts/morris.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/fonts/simple-line-icons/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app-assets/css' . (session('lang') != 'ar' ? '' : '-rtl') . '/core/colors/palette-gradient.css') ?>">
    <!-- END: Page CSS-->
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url() ?>"><img class="brand-logo" alt="modern admin logo" src="<?= base_url('app-assets/images/logo/logo.png') ?>">
                            <h3 class="brand-text"><?= lang('app.appName') ?></h3>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item">
                            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php if (session('lang') == 'ar') : ?>
                                    <i class="flag-icon flag-icon-sa"></i>
                                <?php elseif (session('lang') == 'sw') : ?>
                                    <i class="flag-icon flag-icon-tz"></i>
                                <?php endif ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <a class="dropdown-item" href="<?= base_url('locale/sw') ?>" data-language="sw">
                                    <i class="flag-icon flag-icon-tz"></i> Kiswahili
                                </a>
                                <a class="dropdown-item" href="<?= base_url('locale/ar') ?>" data-language="fr">
                                    <i class="flag-icon flag-icon-sa"></i> العربية
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

    <?= $this->include('docs/sidebar') ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/modern_admin" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url('app-assets/vendors/js/vendors.min.js') ?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url('app-assets/vendors/js/charts/chart.min.js') ?>"></script>
    <script src="<?= base_url('app-assets/vendors/js/charts/raphael-min.js') ?>"></script>
    <script src="<?= base_url('app-assets/vendors/js/charts/morris.min.js') ?>"></script>
    <script src="<?= base_url('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') ?>"></script>
    <script src="<?= base_url('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') ?>"></script>
    <script src="<?= base_url('app-assets/data/jvector/visitor-data.js') ?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('app-assets/js/core/app-menu.js') ?>"></script>
    <script src="<?= base_url('app-assets/js/core/app.js') ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url('app-assets/js/scripts/pages/dashboard-sales.js') ?>"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>