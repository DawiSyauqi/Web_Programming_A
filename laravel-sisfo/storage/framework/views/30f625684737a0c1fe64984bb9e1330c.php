<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, 
shrink-to-fit=no"> 
    <meta name="description" content=""> 
    <meta name="author" content=""> 
 
    <title>Sisfo - <?php echo $__env->yieldContent('judul'); ?></title> 
 
    <!-- Custom fonts for this template--> 
    <link href="<?php echo e(asset('sbadmin/vendor/fontawesome
free/css/all.min.css')); ?>" rel="stylesheet" type="text/css"> 
    <link 
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,
 300i,400,400i,600,600i,700,700i,800,800i,900,900i" 
        rel="stylesheet"> 
 
    <!-- Custom styles for this template--> 
    <link href="<?php echo e(asset('sbadmin/css/sb-admin-2.min.css')); ?>" 
rel="stylesheet"> 

<link href=https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css rel="stylesheet" /> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>   
 <script> 
        $(document).ready(function() { 
            $('.select2-multiple').select2({ 
                placeholder: "Pilih", 
                allowClear: true 
            }); 
        }); 
    </script> 

    <link href="<?php echo e(asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet"> 
<script src="<?php echo e(asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')); ?>"></script> 
<script src="<?php echo e(asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script> 
<script src="<?php echo e(asset('sbadmin/js/demo/datatables-demo.js ')); ?>"></script>
 
</head> 
 
<body id="page-top"> 
 
    <!-- Page Wrapper --> 
    <div id="wrapper"> 
 
        <!-- Sidebar --> 
        <?php echo $__env->make("layouts.sidebar", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
        <!-- End of Sidebar --> 
 
        <!-- Content Wrapper --> 
        <div id="content-wrapper" class="d-flex flex-column"> 
 
            <!-- Main Content --> 
            <div id="content"> 
 
                <!-- Topbar --> 
                <?php echo $__env->make('layouts.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
                <!-- End of Topbar --> 
 
                <!-- Begin Page Content --> 
                <div class="container-fluid"> 
 
                    <!-- Page Heading --> 
                    <h1 class="h3 mb-4 text-gray-800"><?php echo $__env->yieldContent("judul"); ?></h1> 
                    <?php echo $__env->yieldContent("konten"); ?> 
 
                </div> 
                <!-- /.container-fluid --> 
 
            </div> 
            <!-- End of Main Content --> 
 
            <!-- Footer --> 
            <footer class="sticky-footer bg-white"> 
                <div class="container my-auto"> 
                    <div class="copyright text-center my-auto"> 
                        <span>Copyright &copy; Sisfo</span> 
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
 
    <!-- Logout Modal--> 
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" 
        aria-hidden="true"> 
        <div class="modal-dialog" role="document"> 
            <div class="modal-content"> 
                <div class="modal-header"> 
                    <h5 class="modal-title" id="exampleModalLabel">Yakin 
akan keluar aplikasi ?</h5> 
                    <button class="close" type="button" data
dismiss="modal" aria-label="Close"> 
                        <span aria-hidden="true">×</span> 
                    </button> 
                </div> 
                <div class="modal-body">Silahkan klik tombol logout untuk 
keluar aplikasi</div> 
                <div class="modal-footer"> 
                    <button class="btn btn-secondary" type="button" data
dismiss="modal">Cancel</button> 
                    <form action="<?php echo e(route("logout")); ?>" method="POST"> 
                        <?php echo csrf_field(); ?> 
                        <button class="btn btn-primary" 
style="cursor:pointer">Logout</button> 
                      </form> 
                </div> 
            </div> 
        </div> 
    </div> 
 
    <!-- Bootstrap core JavaScript--> 
    <script 
src="<?php echo e(asset('sbadmin/vendor/jquery/jquery.min.js')); ?>"></script> 
    <script 
src="<?php echo e(asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></s
 cript> 
 
    <!-- Core plugin JavaScript--> 
    <script src="<?php echo e(asset('sbadmin/vendor/jquery
easing/jquery.easing.min.js')); ?>"></script> 
 
    <!-- Custom scripts for all pages--> 
    <script src="<?php echo e(asset('sbadmin/js/sb-admin-2.min.js')); ?>"></script> 
 
</body> 
 
</html> <?php /**PATH C:\Laravel\laravel-sisfo\resources\views/layouts/main.blade.php ENDPATH**/ ?>