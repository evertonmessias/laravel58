<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<table class="tabela">
<tr> <td><strong>Id</strong></td><td><strong>Nome</strong></td>
 <td><strong>Telefone</strong></td><td><strong>E-Mail</strong></td> 
 <td><strong>Perfil</strong></td> </tr>
<?php $__currentLoopData = $agenda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><a href="/show/<?php echo e($s->id); ?>">[ <?php echo e($s->id); ?> ]</a></td>
 <td><?php echo e($s->nome); ?></td>
 <td><?php echo e($s->telefone); ?></td>
 <td>
 <?php
 if (e($s->anotacao['email'])) {
     echo e($s->anotacao['email']);
     }
     else{
     echo "&emsp;---";
     } 
 ?>
 </td>
 <td>
 <?php
 if (e($s->anotacao['foto'])) {
     $foto = e($s->anotacao['foto']);
     echo "<a href='img/".$foto."' target='_blank'><img class='perfil mini' src='img/".$foto."'></a>";
     }
     else{
     echo "&emsp;---";
     }
 ?>
 </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>