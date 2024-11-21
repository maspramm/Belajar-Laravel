

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h3>Detail Mahasiswa</h3>
                        <div class="mb-3">
                            <img src="<?php echo e(asset('storage/public/posts/' . $post->foto_mahasiswa)); ?>" alt="foto_mahasiswa"
                                class="rounded-circle" style="width: 100px; height: 110px">
                        </div>
                        <p><strong>NIM:</strong> <?php echo e($post->nim); ?></p>
                        <p><strong>Nama Mahasiswa:</strong> <?php echo e($post->nama_mahasiswa); ?></p>
                        <!-- Add more fields as necessary -->
                        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-md btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mahasiswa\resources\views/posts/show.blade.php ENDPATH**/ ?>