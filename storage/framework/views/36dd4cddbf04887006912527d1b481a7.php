

<?php $__env->startSection('title','Cadastro'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h1>Cadastrar Pessoa</h1>
    <form action="<?php echo e(route('pessoas.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="mb-3">
            <label for="dataNascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="from-control-file" id="foto" name="foto" required>
        </div>
        <div class="mb-3">
            <label for="estadoCivil" class="form-label">Estado Civil</label>
            <input type="text" class="form-control" id="estadoCivil" name="estadoCivil" required>
        </div>
        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <input type="number" class="form-control" id="sexo" name="sexo" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="ativo" class="form-label">Ativo</label>
            <input type="checkbox" class="form-check-input" id="ativo" name="ativo" value="1">
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <div class="mb-3">
            <label for="igreja_id" class="form-label">Igreja</label>
            <select class="form-select" id="igreja_id" name="igreja_id">
                <option selected disabled>Selecione uma igreja</option>
                <?php $__currentLoopData = $igrejas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $igreja): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($igreja->id); ?>"><?php echo e($igreja->nome); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_igreja\igreja\resources\views/pessoas/create_pessoas.blade.php ENDPATH**/ ?>