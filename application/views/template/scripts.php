<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Custom Script -->
<script>
// Sidebar toggle
$('#sidebarToggle').on('click', function(e) {
    e.preventDefault();
    $('body').toggleClass('sidebar-toggled');
    $('.sidebar').toggleClass('toggled');
});

// Close sidebar when clicking outside
$(document).on('click', function(e) {
    if ($(e.target).closest('.sidebar, #sidebarToggle').length === 0) {
        $('body').removeClass('sidebar-toggled');
        $('.sidebar').removeClass('toggled');
    }
});
</script>