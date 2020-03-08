<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<table class="tabela show">
<tr><td><strong>Nome</strong></td><td><strong>Telefone</strong></td>
<td><strong>E-Mail</strong>&emsp;&emsp;(editar detalhes)</td> </tr>
<tr><td><?php echo e($agenda->nome); ?></td><td><?php echo e($agenda->telefone); ?></td>
<td>
 <?php
 if (e($agenda->anotacao['email'])) {
     echo "<a href='".e($agenda->id)."/anotacao'>".e($agenda->anotacao['email'])."</a>";
     }
     else{
        echo "<a href='".e($agenda->id)."/anotacao'>&nbsp;sem e-mail !</a>";
     } 
 ?>
 </td>
</tr>
<tr><td colspan="3">
<button type="button" onclick="window.location.href='<?php echo e($agenda->id); ?>/edit'">Editar</button>&emsp;&emsp;
<button type="button" onclick="window.location.href='<?php echo e($agenda->id); ?>/del'">Apagar</button>

</td></tr>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>