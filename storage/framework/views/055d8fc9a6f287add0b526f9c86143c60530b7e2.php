<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HSM - MiniBook</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
<?php echo $__env->make('layouts.sideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper -->
   <?php echo $__env->make('layouts.topBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
       

          <!-- Content Row -->
          <div class="row">

          <?php echo $__env->yieldContent('content'); ?>
      
      <!-- End of Main Content -->

      <!-- Footer -->
     




      <footer style="margin-top: 500px;" class="sticky-footer text-center bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Created by &copy; <a target="_blank" href="https://github.com/SMH-MiniBook-Team" class="fa fa-heart"> HSM </a>-MiniBook</span>
          </div>
        </div>
      </footer>

      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 <?php echo $__env->make('layouts.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Bootstrap core JavaScript-->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\MiniMedia1\MiniMedia\resources\views/layouts/index.blade.php ENDPATH**/ ?>