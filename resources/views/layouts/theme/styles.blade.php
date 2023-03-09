<script src="{{ asset('assets/js/loader.js') }}"></script>
<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css"  />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

<link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.min.css')}}"type="text/css">

    <link href="{{asset ('assets/css/elements/avatar.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{asset ('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{asset ('css/custom.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{asset ('assets/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{asset ('assets/css/apps/scrumboard.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/css/apps/notes.css') }}" rel="stylesheet" type="text/css" />

    <style>
        aside{
            display: none!important;
        }
        .page-item.active .page-link{
        z-index: 3;
        color: #ffffff;
        background-color: #001529;
        border-color: #001529;
        }
        @media (max-width:480px){
            .mtmobile {
                margin-bottom: 20px!important;
            }
            .mtmobile {
                margin-bottom: 10px!important;
            }
            .hideonsm {
                display: none!important;
            }
            .inblock {
                display: block;
            }
        }
        /*Sidebar color modificado que sobreescribe al style*/
        #sidebar ul.menu-categories li.menu.active > .dropdown-toggle {
        background: #01284d!important;}
        /*header de la pagina color modificado que sobreescribe al style*/
        .navbar {
        padding: 0;
        min-height: 80px;
        background: #01284d;
        -webkit-transition: .3s ease all;
        transition: .3s ease all;
        -webkit-box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%), 0 1px 20px 0 rgb(0 0 0 / 7%), 0px 1px 11px 0px rgb(0 0 0 / 7%);
        -moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
        box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%), 0 1px 20px 0 rgb(0 0 0 / 7%), 0px 1px 11px 0px rgb(0 0 0 / 7%);
    }

/*Cambio de color para header del sidebar*/
    .header-container .navbar-nav.theme-brand {
        width: 255px;
        height: 80px;
        display: flex;
        justify-content: space-around;
        background: #fff;
        border-right: 1px solid #445ede;
        background-image: linear-gradient(to right, #01284d 0%, #304aca 100%);
    }
/*header de la pagina color modificado que sobreescribe al style*/
    .navbar .navbar-item .nav-item .form-inline.search .search-form-control {
    border: 1px solid #304aca;
    width: 100%;
    width: 425px;
    height: 50px;
    background: #fff;
    }
    </style>
    @livewireStyles