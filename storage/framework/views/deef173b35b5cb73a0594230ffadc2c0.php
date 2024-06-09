

<?php $__env->startSection('title','Igrejas'); ?>

<?php $__env->startSection('content'); ?>
<h2>Igrejas</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Endereço</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $igrejas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $igreja): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($igreja->id); ?></td>
            <td><?php echo e($igreja->nome); ?></td>
            <td><?php echo e($igreja->cidade); ?></td>
            <td><?php echo e($igreja->estado); ?></td>
            <td><?php echo e($igreja->endereco); ?></td>
            <td>
                <form action="<?php echo e(route('igrejas.destroy', $igreja->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_igreja\igreja\resources\views/igrejas/listar_igrejas.blade.php ENDPATH**/ ?>