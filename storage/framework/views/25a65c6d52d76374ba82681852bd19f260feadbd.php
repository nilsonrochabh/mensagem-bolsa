
<?php $__env->startSection('content'); ?>
<h1 class="text-center">Mensagem </h1>
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
            <label for="message-text" class="col-form-label"></label>
            <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Data</th>
      <th scope="col">Mensagem</th>
      <th scope="col">Bolsa</th>
      
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $mensagem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
      $bolsa=$msg->find($msg->id)->relBolsa;

    ?>
       <!-- <?php echo e($msg->mensagem); ?>-->
     <tr>
     <td> <?php echo e($msg->id); ?></td>
        <td> <?php echo e($msg->updated_at); ?></td>
        <td> <?php echo e($msg->mensagem); ?></td>
        <td> <?php echo e($bolsa->id_user); ?></td>
   
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
<?php echo $__env->make('../templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nil\Desktop\Projetos\site-matricula\resources\views/pages/bolsamensagem.blade.php ENDPATH**/ ?>