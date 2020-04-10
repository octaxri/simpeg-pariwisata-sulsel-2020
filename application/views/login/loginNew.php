<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>SIMPEG PARIWISATA SULSEL</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?=assets_url()?>css/pages/login/login-2.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <!--<link href="<?=assets_url()?>plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />-->
    <link href="<?=assets_url()?>css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <link href="<?=assets_url()?>css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?=assets_url()?>css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?=assets_url()?>css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?=assets_url()?>css/skins/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->
    <!--<link rel="shortcut icon" href="<?=assets_url()?>media/logosimpel.ico">-->

    <link rel="apple-touch-icon" sizes="76x76" href="<?=assets_url()?>img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=assets_url()?>img/pemprov.png">
    <style>
        .kt-login.kt-login--v2 .kt-login__wrapper .kt-login__container .kt-login__logo {
            text-align: center;
            margin: 0 auto 2rem auto;
        }
        .kt-login.kt-login--v2 .kt-login__wrapper .kt-login__container .kt-form .form-control{
            background: rgba(239,108,0,.8);
        }
        .kt-login.kt-login--v2 .kt-login__wrapper .kt-login__container .kt-login__account .kt-login__account-msg {
            color: #EF6C00;
        }
        .bg-image {
            object-fit: cover;
            position: fixed;
            top: 0;
            lef: 0;
            z-index: -1;
            width: 100vw;
            object-position: 50% 50%;
        }
        .layer-image{
            background-color: rgba(0, 0, 0, 0.25);
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>
<!-- end::Head -->
<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">

        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor " style="">
            <div class="layer-image">
                <img class="bg-image" src="<?=assets_url()?>media/samalona.jpg" alt="" style="">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="#">
                                <img width="300" src="<?=assets_url()?>media/logo-sulsel-stroke-putih.png">
                            </a>
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign In</h3>
                            </div>
                            <!--                            <form class="kt-form" action="">-->
                            <?=form_open(login_url(), array('class' => 'kt-form'))?>
                            <?=validation_errors('<div>', '</div>')?>
                            <?=($this->session->flashdata('gagal') ? '<div><b>'.$this->session->flashdata('gagal').'</b></div>' : '')?>
                            <div class="input-group">
                                <input class="form-control" type="username" name="username" id="signin-username" value="" placeholder="NIP/Username">
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="signin-password" value="" placeholder="Password">
                            </div>
                            <!--<div class="row kt-login__extra">
                               <div class="col">
                                  <label class="kt-checkbox">
                                     <input type="checkbox" name="remember"> Remember me
                                     <span></span>
                                  </label>
                               </div>
                               <div class="col kt-align-right kt-hidden">
                                  <a href="javascript:;" id="kt_login_forgot" class="kt-link kt-login__link">Forget Password ?</a>
                               </div>
                            </div>-->
                            <div class="kt-login__actions">
                                <button id="kt_login_signin_submit" class="btn btn-pill kt-login__btn-primary" type="submit">Masuk</button>
                            </div>
                            <?=form_close()?>
                            <!--                           </form>-->
                        </div>
                        <!--<div class="kt-login__signup">
                           <div class="kt-login__head">
                              <h3 class="kt-login__title">Sign Up</h3>
                              <div class="kt-login__desc">Enter your details to create your account:</div>
                           </div>
                           <form class="kt-login__form kt-form" action="">
                              <div class="input-group">
                                 <input class="form-control" type="text" placeholder="Fullname" name="fullname">
                              </div>
                              <div class="input-group">
                                 <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                              </div>
                              <div class="input-group">
                                 <input class="form-control" type="password" placeholder="Password" name="password">
                              </div>
                              <div class="input-group">
                                 <input class="form-control" type="password" placeholder="Confirm Password" name="rpassword">
                              </div>
                              <div class="row kt-login__extra">
                                 <div class="col kt-align-left">
                                    <label class="kt-checkbox">
                                       <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                                       <span></span>
                                    </label>
                                    <span class="form-text text-muted"></span>
                                 </div>
                              </div>
                              <div class="kt-login__actions">
                                 <button id="kt_login_signup_submit" class="btn btn-pill kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
                                 <button id="kt_login_signup_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</button>
                              </div>
                           </form>
                        </div>
                        <div class="kt-login__forgot">
                           <div class="kt-login__head">
                              <h3 class="kt-login__title">Forgotten Password ?</h3>
                              <div class="kt-login__desc">Enter your email to reset your password:</div>
                           </div>
                           <form class="kt-form" action="">
                              <div class="input-group">
                                 <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                              </div>
                              <div class="kt-login__actions">
                                 <button id="kt_login_forgot_submit" class="btn btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                 <button id="kt_login_forgot_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</button>
                              </div>
                           </form>
                        </div>
                        <div class="kt-login__account kt-hidden">
                           <span class="kt-login__account-msg">
                              Don't have an account yet ?
                           </span>&nbsp;&nbsp;
                           <a href="javascript:;" id="kt_login_signup" class="kt-link kt-link--light kt-login__account-link">Sign Up</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end:: Page -->
<!-- begin::Global Config(global config for global JS sciprts) -->
<!--<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                "#c5cbe3",
                "#a1a8c3",
                "#3d4465",
                "#3e4466"
                ],
                "shape": [
                "#f0f3ff",
                "#d9dffa",
                "#afb4d4",
                "#646c9a"
                ]
            }
        }
    };
</script>-->
<!-- end::Global Config -->
<!--begin::Global Theme Bundle(used by all pages) -->
<!--<script src="<?=assets_url()?>plugins/global/plugins.bundle.js" type="text/javascript"></script>
	<script src="<?=assets_url()?>js/scripts.bundle.js" type="text/javascript"></script>-->
<!--end::Global Theme Bundle -->
<!--begin::Page Scripts(used by this page) -->
<!--<script src="<?=assets_url()?>js/pages/custom/login/login-general.js" type="text/javascript"></script>-->
<!--end::Page Scripts -->
</body>
<!-- end::Body -->
</html>