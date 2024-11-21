<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
            img {
            width: 80px;
            height: 85px;
            object-fit: cover;
            border-radius: 50%;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>FOTO</th>
                <th>NIM</th>
                <th>NAMA MAHASISWA</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center">
                        <?php if($post->foto_mahasiswa): ?>
                            <img src="<?php echo e(public_path('storage/posts/' . $post->foto_mahasiswa)); ?>" alt="Foto Mahasiswa">
                        <?php else: ?>
                            Tidak Ada Foto
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($post->nim); ?></td>
                    <td><?php echo e($post->nama_mahasiswa); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html><?php /**PATH C:\laragon\www\mahasiswa\resources\views/posts/pdf.blade.php ENDPATH**/ ?>