<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("operator/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("operator/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("operator/_partials/sidebar.php") ?>

  <div id="content-wrapper">

    <div class="container-fluid">

    <?php $this->load->view("operator/_partials/breadcrumb.php") ?>
   
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-key"></i>
            Ganti Password</div>

          <div class="card-body">
            <div class="table-responsive">
              <form method="post" action="<?php echo base_url().'operator/ganti_password_aksi'; ?>">
                  <div class="form-group">
                    <label class="control-label col-md-3">Password Baru</label>
                       <div class="col-md-9">
                            <input type="Password" class="form-control" placeholder="" name="password_baru" required="required">
                        </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Konfirmasi Password</label>
                       <div class="col-md-9">
                            <input type="Password" class="form-control" placeholder="" name="password_ulang" required="required">
                        </div>
                  </div>
                  <div class="form-group">
                       <div class="col-md-9">
                            <input type="submit" class="btn btn-success " value="SIMPAN">
                        </div>
                  </div>
              </form>
        
            
          </div>
        </div>
        
      </div>

   </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("operator/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("operator/_partials/scrolltop.php") ?>
<?php $this->load->view("operator/_partials/modal.php") ?>
<?php $this->load->view("operator/_partials/js.php") ?>
    
</body>
</html>