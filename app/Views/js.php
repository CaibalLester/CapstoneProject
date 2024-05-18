<!-- JAVASCRIPT FILES -->
<script src="<?= base_url(); ?>req/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>req/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>req/js/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>req/js/custom.js"></script>


<script type="text/javascript">
    document.getElementById('openMessageModal').addEventListener('click', function () {
        document.getElementById('messageModal').style.display = 'block';
    });

    document.addEventListener('click', function (e) {
        if (e.target.id !== 'openMessageModal' && !document.getElementById('messageModal').contains(e.target)) {
            document.getElementById('messageModal').style.display = 'none';
        }
    });

    function closeMessageModal() {
        document.getElementById('messageModal').style.display = 'none';
    }
</script>