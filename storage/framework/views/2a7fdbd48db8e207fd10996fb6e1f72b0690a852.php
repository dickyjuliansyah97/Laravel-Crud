<?php $__env->startSection('nama_fitur'); ?>
  Tambah Data Buku
<?php $__env->stopSection(); ?>
<?php $__env->startSection('fitur'); ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form action="<?php echo e(route('buku.store')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label>Judul Buku</label>
    <input type="text" name="judul_buku" class="form-control"  placeholder="Masukkan judul buku...." required>
  </div>
    <div class="form-group">
    <label>Penulis Buku</label>
    <input type="text" name="penulis_buku" class="form-control" id="" placeholder="Masukkan nama pe penulis buku...." required>
  </div>
    <div class="form-group">
    <label>Tanggal Terbit Buku</label>
    <input type="date" name="tanggal_terbit_buku" class="form-control" required>
  </div>
  <div class="custom-file">
    <input type="file" name="sampul_buku" class="custom-file-input" required>
    <label class="custom-file-label">Pilih Gambar</label>
  </div>
  <div class="custom-file">
    <input type="file" name="sampel_buku" class="custom-file-input" required>
    <label class="custom-file-label">Pilih Dokumen</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>