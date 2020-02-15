	</div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('template/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('template/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url('template/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Custom scripts for this template -->
  <script src="<?= base_url('template/js/resume.min.js'); ?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript">
    
  	$(document).ready(function() {
  		$("body").css("overflow", "hidden");
      $('.tabel-sertifikat').DataTable({
        
        'fnDrawCallback': function (oSettings) {
            $('.dataTables_length').each(function () {
              $(this).append('<a href="<?= base_url('/') ?>#buat" class="btn btn-default mr-xs" type="button"><span class="fa fa-plus"></span> Tambah</a>')
            });
          }
        
      });
  	})

    function konfirmasi_hapus (ev) {
      ev.preventDefault();
      var url = ev.currentTarget.getAttribute('href');
      //console.log(url);
      swal({
        title: "Apakah kamu Yakin?",
        text: "Setelah dihapus, Kamu tidak akan dapat memulihkan data ini!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href= url;
          swal("Data Kamu dihapus!", {
            icon: "success",
          });
        } else {
          swal("Data Kamu tidak dihapus!");
        }
      });
    }
  </script>
  <script type="text/javascript">


    <?php if ($this->session->flashdata('success')) {?>
        toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php } else if ($this->session->flashdata('error')) {?>
        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    <?php } else if ($this->session->flashdata('warning')) {?>
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php } else if ($this->session->flashdata('info')) {?>
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php }?>


    </script>
</body>

</html>