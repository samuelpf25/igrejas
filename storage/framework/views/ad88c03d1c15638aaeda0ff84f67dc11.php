

<?php $__env->startSection('title','Cadastro'); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('membros.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="pessoa_id" class="form-label">Pessoa</label>
        <select class="form-select" id="pessoa_id" name="pessoa_id">
            <option selected disabled>Selecione uma pessoa</option>
            <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($pessoa->id); ?>"><?php echo e($pessoa->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="celula" class="form-label">Célula</label>
        <input type="text" class="form-control" id="celula" name="celula" required>
    </div>
    <div class="mb-3">
        <label for="vinculo" class="form-label">Vínculo</label>
        <input type="text" class="form-control" id="vinculo" name="vinculo" required>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_igreja\igreja\resources\views/membros/create_membro.blade.php ENDPATH**/ ?>