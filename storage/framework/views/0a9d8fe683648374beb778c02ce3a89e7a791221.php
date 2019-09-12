

<?php $__env->startSection('content'); ?>

<table class="tabela">
<tr> <td><strong>Id</strong></td><td><strong>Nome</strong></td>
 <td><strong>Telefone</strong></td><td><strong>E-Mail</strong></td> </tr>
<?php $__currentLoopData = $agenda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><a href="/show/<?php echo e($s->id); ?>"><?php echo e($s->id); ?></a></td>
 <td><?php echo e($s->nome); ?></td>
 <td><?php echo e($s->telefone); ?></td>
 <td><?php echo e($s->anotacao['email']); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<tr> <td colspan="4"><a href="/criar">[INSERIR]</a></td></tr>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>