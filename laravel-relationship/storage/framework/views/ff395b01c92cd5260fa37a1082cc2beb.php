 
  
<?php $__env->startSection('content'); ?> 
<h2>Tambah Mahasiswa</h2> 
  
<div class="card"> 
    <div class="card-body"> 
        <form action="<?php echo e(route('students.store')); ?>" method="POST"> 
            <?php echo csrf_field(); ?> 
             
            <div class="mb-3"> 
                <label for="nim" class="form-label">NIM</label> 
                <input type="text" class="form-control <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  
                       id="nim" name="nim" value="<?php echo e(old('nim')); ?>"> 
                <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    <div class="invalid-feedback"><?php echo e($message); ?></div> 
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
            </div> 
  
            <div class="mb-3"> 
                <label for="name" class="form-label">Nama</label> 
                <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  
                       id="name" name="name" value="<?php echo e(old('name')); ?>"> 
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    <div class="invalid-feedback"><?php echo e($message); ?></div> 
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
            </div> 
  
            <div class="mb-3"> 
                <label for="address" class="form-label">Alamat</label> 
                <textarea class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  
                          id="address" name="address" rows="3"><?php echo e(old('address')); ?></textarea> 
                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    <div class="invalid-feedback"><?php echo e($message); ?></div> 
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
            </div> 
  
            <div class="mb-3"> 
                <label for="major_id" class="form-label">Jurusan</label> 
                <select class="form-control <?php $__errorArgs = ['major_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  
                        id="major_id" name="major_id"> 
                    <option value="">Pilih Jurusan</option> 
                    <?php $__currentLoopData = $majors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $major): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <option value="<?php echo e($major->id); ?>" <?php echo e(old('major_id') == $major->id ? 'selected' : ''); ?>> 
                            <?php echo e($major->name); ?> 
                        </option> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </select> 
                <?php $__errorArgs = ['major_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    <div class="invalid-feedback"><?php echo e($message); ?></div> 
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
            </div> 
  
            <div class="mb-3"> 
                <label class="form-label">Mata Kuliah</label> 
                <?php $__errorArgs = ['subjects'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    <div class="text-danger"><?php echo e($message); ?></div> 
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
<?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<div class="form-check"> 
<input class="form-check-input" type="checkbox" name="subjects[]"  
value="<?php echo e($subject->id); ?>" id="subject<?php echo e($subject->id); ?>" 
<?php echo e(in_array($subject->id, old('subjects', [])) ? 'checked' : ''); ?>>
<label class="form-check-label" for="subject<?php echo e($subject->id); ?>"> 
<?php echo e($subject->name); ?> (<?php echo e($subject->sks); ?> SKS) 
</label> 
</div> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div> 
<button type="submit" class="btn btn-primary">Simpan</button> 
<a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">Kembali</a> 
</form> </div> 
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laravel\laravel-relationship\resources\views/students/create.blade.php ENDPATH**/ ?>