<?php $__env->startSection('nama_fitur'); ?>
	Daftar Buku
<?php $__env->stopSection(); ?>
<?php $__env->startSection('fitur'); ?>
	<?php if($message = Session::get('success')): ?>
	<div class="alert alert-success alert-block">
	    <button type="button" class="close" data-dismiss="alert">×</button>    
	    <strong><?php echo e($message); ?></strong>
	</div>
	<?php endif; ?>
	<a href="<?php echo e(route('buku.create')); ?>" class="text-white"><button class="btn btn-dark border-0 mb-2">
	Tambah</button></a>
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th>No</th>
	      <th>Judul Buku</th>
	      <th>Penulis Buku</th>
	      <th>Tanggal Terbit Buku</th>
	      <th>Sampul Buku</th>
	      <th>Sampel Buku</th>
	      <th>Kelola Data</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    <tr>
				<td>BK<?php echo e($data->id_buku); ?>P</td>
				<td><?php echo e($data->judul_buku); ?></td>
				<td><?php echo e($data->penulis_buku); ?></td>
				<td><?php echo e($data->tanggal_terbit_buku); ?></td>
				<td><img src="<?php echo e(url('uploads/gambar/'.$data->sampul_buku)); ?>" style="width: 150px; height: 200px;"></td>
				<td><?php echo e($data->sampel_buku); ?></td>
				<td>
					<a href="<?php echo e(route('buku.edit',$data->id_buku)); ?>" class="text-white"><button class=" btn btn-sm btn-warning border-0">Ubah</a></button>
					<form action="<?php echo e(route('buku.destroy', $data->id_buku)); ?>" method="post">
		                <?php echo e(csrf_field()); ?>

		                <?php echo e(method_field('DELETE')); ?>

		                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
		            </form>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	   </tbody>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>