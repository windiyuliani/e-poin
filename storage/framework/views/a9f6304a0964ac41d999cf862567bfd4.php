<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Laravel 10</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            margin: 20px 0px;
            text-align: left;
        }

        table,
        th,
        td {
            border: 1px solid;
            text-align: left;
            padding-right: 20px;
        }
    </style>
</head>
<body>
    
     <h1>Detail Siswa</h1>
     <a href="<?php echo e(route('siswa.index')); ?>">Kembali</a>

     <table>
        <tr>
        <td colspan="4" style="text-align:center;"><img src="<?php echo e(asset('storage/siswas/'.$siswas->image)); ?>" width="120px" hight="120px" alt=""></td>
        </tr>
        <tr>
            <th colspan="2">Akun Siswa</th>
            <th colspan="2">Data Siswa</th>
        </tr>
        <tr>
            <th>Nama</th>
            <td>: <?php echo e($siswas->name); ?></td>
            <th>Nis</th>
            <td>: <?php echo e($siswas->nis); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td>: <?php echo e($siswas->email); ?></td>
            <th>Kelas</th>
            <td>: <?php echo e($siswas->tingkatan); ?> <?php echo e($siswas->jurusan); ?> <?php echo e($siswas->kelas); ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <th>No Hp</th>
            <td>: <?php echo e($siswas->hp); ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <th>Status</th>
            <?php if($siswas->status == 1): ?> :
            <td>: Aktif</td>
            <?php else: ?>
            <td>: Tidak Aktif</td>
            <?php endif; ?>

        </tr>
     </table>
</body>
</html><?php /**PATH C:\laragon\www\windi\resources\views/admin/siswa/show.blade.php ENDPATH**/ ?>