<!-- Required Js -->
<script src="<?= base_url() ?>assets/js/vendor-all.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/ripple.js"></script>
<script src="<?= base_url() ?>assets/js/pcoded.min.js"></script>
<!-- Sweet Alerts js -->
<script src="<?= base_url() ?>assets/js/sweetalert2/sweetalert2.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.js">
</script>

<!-- Apex Chart -->
<!-- <script src="<?= base_url() ?>assets/js/plugins/apexcharts.min.js"></script> -->

<!-- custom-chart js -->
<!-- <script src="<?= base_url() ?>assets/js/pages/dashboard-main.js"></script> -->

<script>
  $('.form-check-input').on('click', function() {
    const menuId = $(this).data('menuid');
    const userId = $(this).data('userid');

    $.ajax({
      url: "<?= base_url('backend/setting/ubahakses') ?>",
      type: 'post',
      data: {
        menuId: menuId,
        userId: userId
      },
      success: function() {
        document.location.href = "<?= base_url('backend/setting/akses/') ?>" + userId;
      }
    })
  })

  $(document).ready(function() {
    $('#table').DataTable();
  });
  $(document).ready(function() {
    $('#table2').DataTable();
  });
  // delete
  $('.hapus').on('click', function(e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: "Apakah anda yakin?",
      text: "Anda ingin menghapus data ini!",
      type: "warning",
      showCancelButton: !0,
      confirmButtonText: "Iya, hapus!",
      cancelButtonText: "Tidak, Tutup!",
      confirmButtonClass: "btn btn-danger mt-2",
      cancelButtonClass: "btn btn-secondary ml-2 mt-2",
      buttonsStyling: !1
    }).
    then(function(t) {
      t.value ? Swal.fire({
        document: location.href = href,
        title: "Dihapus!",
        text: "File anda telah di hapus.",
        type: "success"
      }) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
        title: "Batal",
        text: "File anda tidak terhapus.",
        type: "error"
      })
    })
  });
</script>
</body>

</html>