<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>

    <!-- Content Row -->
    <div class="row">
        <!-- Pasien Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Pasien</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo isset($count_pasien) ? $count_pasien : 0; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tambahkan card lainnya dengan pola yang sama -->
    </div>
</div>