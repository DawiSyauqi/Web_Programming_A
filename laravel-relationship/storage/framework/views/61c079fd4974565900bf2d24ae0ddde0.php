 
  
<?php $__env->startSection('content'); ?> 
<div class="d-flex justify-content-between align-items-center mb-4"> 
    <h2>Daftar Mahasiswa</h2> 
    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary">Tambah Mahasiswa</a> 
</div> 
  
<div class="table-responsive"> 
    <table class="table table-striped"> 
        <thead> 
            <tr> 
                <th>NIM</th> 
                <th>Nama</th> 
                <th>Jurusan</th> 
                <th>Mata Kuliah</th> 
                <th>Total SKS</th> 
                <th>Aksi</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr> 
                <td><?php echo e($student->nim); ?></td> 
                <td><?php echo e($student->name); ?></td> 
                <td><?php echo e($student->major->name); ?></td> 
                <td> 
                    <?php $__currentLoopData = $student->subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <span class="badge bg-secondary me-1"><?php echo e($subject->name); ?></span> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </td> 
                <td><?php echo e($student->subjects->sum('sks')); ?></td> 
                <td> 
                    <a href="<?php echo e(route('students.show', $student->id)); ?>" class="btn btn-info 
btn-sm">Detail</a> 
                    <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-warning 
btn-sm">Edit</a> 
                    <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" 
class="d-inline"> 
                        <?php echo csrf_field(); ?> 
                        <?php echo method_field('DELETE'); ?> 
                        <button type="submit" class="btn btn-danger btn-sm"  
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button> 
                    </form> 
                </td> 
            </tr> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </tbody> 
    </table> 
</div> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laravel\laravel-relationship\resources\views/students/index.blade.php ENDPATH**/ ?>