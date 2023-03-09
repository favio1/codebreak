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
<link href="{{asset ('plugins/font-icons/fontawesome/css/fontawesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('css/fontawesome.css') }}" rel="stylesheet" type="text/css"/>

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
        color: #001529;
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
    </style>
    @livewireStyles