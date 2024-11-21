
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH MAHASISWA</a>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">FOTO</th>
                                <th scope="col">NIM</th>
                                <th scope="col">NAMA MAHASISWA</th>
                                <th scope="col">ACT</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center">
                                        <img src="<?php echo e(asset('storage/public/posts/' . $post->foto_mahasiswa)); ?>" 
                                            class="rounded-circle" 
                                            style="width: 80px; height: 85px">
                                    </td>
                                    <td><?php echo e($post->nim); ?></td>
                                    <td><?php echo e($post->nama_mahasiswa); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(route('posts.pdf', $post->id)); ?>" class="btn btn-sm btn-info">Cetak PDF</a>
                                        <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-sm btn-info">SHOW</a>
                                        <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" style="display:inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="text-center alert alert-danger">Data Mahasiswa belum Tersedia.</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                        <?php echo e($posts->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mahasiswa\resources\views/posts/index.blade.php ENDPATH**/ ?>