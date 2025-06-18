 
<?php $__env->startSection("judul"); ?> Edit User <?php $__env->stopSection(); ?> 
<?php $__env->startSection('konten'); ?> 
<div class="card shadow mb-4"> 
    <div class="card-header py-3"> 
    </div> 
    <div class="card-body">    
        <div class="row"> 
            <div class="col-lg-9"> 
                <form method="POST" action="<?php echo e(route('users.update', 
[$user->id])); ?>"> 
                    <input type="hidden" name="_method" value="PUT"> 
                  <?php echo csrf_field(); ?> 
                    <div class="form-group row"> 
                        <label class="col-sm-3 col-form-label text
center">Nama</label> 
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" 
id="nama" name="nama" value="<?php echo e($user->name); ?>"> 
                        </div> 
                      </div> 
                    <div class="form-group row"> 
                      <label class="col-sm-3 col-form-label text
center">Email</label> 
                      <div class="col-sm-9"> 
                        <input type="email" class="form-control" 
id="email" name="email" value="<?php echo e($user->email); ?>"> 
                      </div> 
                    </div> 
                    <div class="form-group row"> 
                        <label class="col-sm-3 col-form-label text
center">Username</label> 
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" 
id="username" name="username" value="<?php echo e($user->username); ?>" 
                          > 
                        </div> 
                      </div> 
 
                      <div class="form-group row"> 
                        <label class="col-sm-3 col-form-label text
center">Level</label> 
                        <div class="col-sm-4 mr-2"> 
                          <select  class="form-control select2-multiple" 
name="level[]" multiple="multiple"> 
                            <option value="ADMIN"  <?php echo e(in_array("ADMIN", 
json_decode($user->level)) ? "selected" : ""); ?>>ADMIN</option> 
                            <option value="GURU"  <?php echo e(in_array("GURU", 
json_decode($user->level)) ? "selected" : ""); ?>>GURU</option> 
                            <option value="STAFF"  <?php echo e(in_array("STAFF", 
json_decode($user->level)) ? "selected" : ""); ?>>STAFF</option> 
                          </select> 
                        </div> 
                      </div> 
                    <div class="form-group row"> 
                      <div class="col-sm-10 text-center"> 
                        <a href="<?php echo e(route('users.index')); ?>"  class="btn 
btn-warning btn-sm">Batal</a> 
                        <button type="submit" class="btn btn-primary btn
sm">Simpan</button> 
                      </div> 
                    </div> 
                  </form> 
            </div> 
            
        </div> 
    </div> 
</div> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laravel\laravel-sisfo\resources\views/user/edit.blade.php ENDPATH**/ ?>