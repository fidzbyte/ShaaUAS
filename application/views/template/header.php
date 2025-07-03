<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?> - <?= $page_title ?></title>
    
    <!-- Custom fonts -->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles -->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
    .sidebar-brand-text {
        font-size: 1.2rem;
        font-weight: 800;
        text-transform: uppercase;
    }
    .bg-gradient-primary {
        background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
    }
    </style>

    <style>
    /* Developer Profile Style */
    .developer-profile {
        border-top: 1px solid #e3e6f0;
        box-shadow: 0 -0.15rem 0.5rem rgba(0, 0, 0, 0.05);
        z-index: 100;
    }
    
    /* Footer Positioning */
    .sticky-footer {
        position: relative;
        margin-top: 2rem;
        padding: 1rem 0;
    }
    
    /* Content Padding Adjustment */
    #wrapper #content-wrapper {
        padding-bottom: 80px; /* Space for developer profile */
    }
    </style>

    <style>
    /* Developer Card Style */
    .developer-card {
        border-left: 4px solid #4e73df;
        border-radius: 0 8px 8px 0;
        margin-left: -1.5rem;
        margin-right: -1.5rem;
        transition: all 0.3s;
    }
    
    .developer-card:hover {
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        transform: translateY(-2px);
    }
    
    /* Footer Positioning */
    .sticky-footer {
        flex-shrink: 0;
        padding: 1.5rem 0;
    }
    
    /* Content Adjustment */
    #content-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    
    #content {
        flex: 1 0 auto;
        padding-bottom: 2rem;
    }
    </style>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">