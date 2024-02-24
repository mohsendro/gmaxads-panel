<!--begin::Head-->
<head>
    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <base href="http://127.0.0.1:8000/" />
    <title>پنل کاربری جیمکس ادز</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <meta charset="utf-8" />
    <!-- <meta name="description" content="پنل کاربری جیمکس ادز" /> -->
    <!-- <meta name="keywords" content="پنل کاربری جیمکس ادز" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="fa_IR" />
    <!-- <meta property="og:type" content="article" /> -->
    <!-- <meta property="og:title" content="پنل کاربری جیمکس ادز" /> -->
    <!-- <meta property="og:url" content="https://panel.gmaxads.com/" /> -->
    <!-- <meta property="og:site_name" content="پنل کاربری جیمکس ادز" /> -->

    <link rel="canonical" href="https://panel.gmaxads.com/" />
    <link rel="shortcut icon" href="<?php echo asset('favicon.ico'); ?>" />
    <!--begin::Fonts(mوatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="<?php echo asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset('assets/plugins/custom/datatables/datatables.bundle.css'); ?>" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mوatory for all pages)-->
    <link href="<?php echo asset('assets/plugins/global/plugins.bundle.rtl.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset('assets/css/style.bundle.rtl.css'); ?>" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
