<?php $__env->startSection('nama_fitur'); ?>
    Edit Data Buku
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
<form action="<?php echo e(route('buku.update', $data->id_buku)); ?>" method="POST" enctype="multipart/form-data">
  <?php echo e(csrf_field()); ?> <?php echo e(method_field('PUT')); ?>

  <div class="form-group">
    <label>Judul Buku</label>
    <input type="text" name="judul_buku" class="form-control"  value="<?php echo e($data->judul_buku); ?>" required>
  </div>
    <div class="form-group">
    <label>Penulis Buku</label>
    <input type="text" name="penulis_buku" class="form-control" value="<?php echo e($data->penulis_buku); ?>" required>
  </div>
    <div class="form-group">
    <label>Tanggal Terbit Buku</label>
    <input type="date" name="tanggal_terbit_buku" class="form-control" value="<?php echo e($data->tanggal_terbit_buku); ?>" required>
  </div>
    <img src="<?php echo e(url('uploads/gambar/'.$data->sampul_buku)); ?>" style="width: 150px; height: 200px;">
    <div class="form-group">
    <label for="sampul_buku">File Gambar Sebelumnya</label>
    <input type="file" class="form-control-file" name="sampul_buku" required>
  </div>

  <div class="form-group">
    <label for="sampel_buku">File Dokumen Sebelumnya : <?php echo e($data->sampel_buku); ?></label>
    <input type="file" class="form-control-file" name="sampel_buku" required>
  </div>
  <button type="submit" class="btn btn-dark float-left">Simpan</button>
</form>
  <a href="<?php echo e(route('buku.index')); ?>" class="text-white"><button class="btn btn-dark float-right">Kembali</button></a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>