<center>
<a href="<?php echo e(url('/estudiantes/create')); ?>"  class="btn btn-success"  >Agregar Estudiante</a>
</center>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
crossorigin="anonymous">

<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha Nacimiento</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($loop->iteration); ?> </td>
			<td><?php echo e($estudiante->nombre); ?></td>
            <td><?php echo e($estudiante->appaterno); ?></td>
            <td><?php echo e($estudiante->apmaterno); ?></td>
            <td><?php echo e($estudiante->fechanacimiento); ?></td>

			<td>
			<a href="<?php echo e(url('/estudiantes/'.$estudiante->id.'/edit')); ?>">Actualizar</a>

			|

			<form method="post" action="<?php echo e(url('/estudiantes/'.$estudiante->id)); ?>" style="display:inline" >

			  <?php echo e(csrf_field()); ?>

			  <?php echo e(method_field('DELETE')); ?>

			  <button class="btn btn-danger" type="submit" onclick="return confirm('Desea borrar?');">Eliminar</button>

			</form>


			</td>


		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
<?php echo e($estudiantes->links()); ?>

<?php /**PATH C:\xampp\htdocs\startLaravel\resources\views/estudiante/index.blade.php ENDPATH**/ ?>