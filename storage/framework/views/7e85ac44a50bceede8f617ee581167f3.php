 

 <?php $__env->startSection('title','Igrejas'); ?>

 <?php $__env->startSection('content'); ?>
 <div class="d-flex justify-content-around">
     <div class="col-sm-6">
         <div class="card" style="width: 18rem;">
             <img src="/img/igrejas.png" class="card-img-top" alt="..." style="width: 300px; height: 200px;">
             <div class="card-body">
                 <h5 class="card-title">Igrejas</h5>
                 <p class="card-text">Veja as igrejas cadastradas aqui</p>
                 <a href="<?php echo e(route('igrejas.index')); ?>" class="btn btn-primary">Carregar</a>
             </div>
         </div>
     </div>
     <div class="col-sm-6">
         <div class="card" style="width: 18rem;">
             <img src="/img/pessoas.png" class="card-img-top" alt="..." style="width: 300px; height: 200px;">
             <div class="card-body">
                 <h5 class="card-title">Pessoas</h5>
                 <p class="card-text">Veja as pessoas cadastradas aqui</p>
                 <a href="<?php echo e(route('pessoas.index')); ?>" class="btn btn-primary">Carregar</a>
             </div>
         </div>
     </div>
     <div class="col-sm-6">
         <div class="card" style="width: 18rem;">
             <img src="/img/membros.png" class="card-img-top" alt="..." style="width: 300px; height: 200px;">
             <div class="card-body">
                 <h5 class="card-title">Membros</h5>
                 <p class="card-text">Veja os membros cadastrados aqui</p>
                 <a href="<?php echo e(route('membros.index')); ?>" class="btn btn-primary">Carregar</a>
             </div>
         </div>
     </div>
 </div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_igreja\igreja\resources\views//layouts/inicial.blade.php ENDPATH**/ ?>