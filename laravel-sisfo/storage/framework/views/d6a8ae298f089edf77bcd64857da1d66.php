 
<?php $__env->startSection("judul"); ?> Users <?php $__env->stopSection(); ?> 
<?php $__env->startSection('konten'); ?> 
<?php if(session('status')): ?> 
    <div class="alert alert-success"> 
        <?php echo e(session('status')); ?> 
    </div> 
<?php endif; ?>  
<div class="card shadow mb-4"> 
    <div class="card-header py-3"> 
    </div> 
    <div class="card-body"> 
        <div class="table-responsive"> 
        <table class="table table-bordered"  id="dataTable" width="100%" 
cellspacing="0"> 
            <thead> 
              <tr> 
                <th><b>Name</b></th> 
                <th><b>Username</b></th> 
                <th><b>Email</b></th> 
                <th><b>Action</b></th> 
              </tr> 
            </thead> 
            <tbody> 
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <tr> 
                  <td><?php echo e($user->name); ?></td> 
                  <td><?php echo e($user->username); ?></td> 
                  <td><?php echo e($user->email); ?></td> 
                  <td> 
                    <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-sm btn-success">Edit</a>
                    <form  
onsubmit="return confirm('Hapus data user ?')"  
class="d-inline"  
action="<?php echo e(route('users.destroy', [$user->id])); ?>"  
method="POST"> 
<?php echo csrf_field(); ?> 
<input  
type="hidden"  
name="_method"  
value="DELETE"> 
<input  
type="submit"  
value="Hapus"  
class="btn btn-danger btn-sm"> 
</form> 
                  </td> 
                </tr> 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </tbody> 
      
          </table> 
        </div> 
        <p> 
    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary btn
sm">Tambah User</a> 
</p> 
    </div> 
</div> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laravel\laravel-sisfo\resources\views/user/index.blade.php ENDPATH**/ ?>