
<?php $__env->startSection('content'); ?>
<h1 class="text-center">Bolsas Aluno </h1>
<hr>
<div class="col-8 m-auto">
<button type="button" class="btn btn-primary" 
        data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ver as Mensagens</button>

<div class="modal fade" id="exampleModal" 
     tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensagens</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Menssage:</label>
            <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Bolsa</th>
      <th scope="col">Aluno</th>
      
    </tr>
  </thead>
 
  <tbody>
    <?php $__currentLoopData = $bolsa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bolsas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
      $usuario=$bolsas->find($bolsas->id)->relUsers
    ?>
    
    <tr>
      
      <td><?php echo e($bolsas->name); ?></td>
    <td><?php echo e($usuario->id); ?></td>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
    </tr>
    
  </tbody>
</table>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nil\Desktop\Projetos\site-matricula\resources\views/pages/bolsaaluno.blade.php ENDPATH**/ ?>