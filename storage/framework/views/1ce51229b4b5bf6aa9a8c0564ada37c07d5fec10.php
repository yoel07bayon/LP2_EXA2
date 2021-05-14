
<form action="<?php echo e(url('/estudiantes/'.$estudiante->id)); ?>" method="post">

<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PATCH')); ?>

<div class="form-group">


<label for="Nombre"  class="control-label" ><?php echo e('Nombre'); ?></label>
	<input type="text" placeholder="Nombre"  name="nombre" id="nombre" 	value="<?php echo e(isset($estudiante->nombre)?$estudiante->nombre:old('nombre')); ?>">
    
    <?php echo $errors->first('nombre','<div class="invalid-feedback">:message</div>'); ?>

<br>
    <label for="Paterno"  class="control-label" ><?php echo e('Paterno'); ?></label>
    <input type="text" placeholder="paterno"  name="appaterno" id="appaterno" 	value="<?php echo e(isset($estudiante->appaterno)?$estudiante->appaterno:old('appaterno')); ?>">
    
    <?php echo $errors->first('appaterno','<div class="invalid-feedback">:message</div>'); ?>

<br>
    <label for="Materno"  class="control-label" ><?php echo e('Materno'); ?></label>
    <input type="text" placeholder="escribe tu apellido materno"  name="apmaterno" id="apmaterno" 	value="<?php echo e(isset($estudiante->apmaterno)?$estudiante->apmaterno:old('apmaterno')); ?>">
    
    <?php echo $errors->first('apmaterno','<div class="invalid-feedback">:message</div>'); ?>


<br>

    <input type="submit"  class="btn btn-success" value="Actualizar">
    </div>
</form>


<?php /**PATH C:\xampp\htdocs\startLaravel\resources\views/estudiante/editar.blade.php ENDPATH**/ ?>