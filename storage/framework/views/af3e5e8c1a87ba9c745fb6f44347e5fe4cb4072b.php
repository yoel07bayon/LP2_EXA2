estoy en el archivo estudiante crear

<form action="<?php echo e(url('/estudiantes')); ?>" method="post">

<?php echo e(csrf_field()); ?>

Nombre: <input type="text" name="nombre" id="nombre" value="">
<br>
Ap. Paterno: <input type="text" name="appaterno" id="appaterno" value="">
<br>
Ap. Materno: : <input type="text" name="apmaterno" id="apmaterno" value="">
<br>
Fecha Nacimiento: : <input type="date" name="fechanacimiento" id="fechanacimiento" value="">
<br>
<input type="submit" value="Registrar">

</form>
<?php /**PATH C:\xampp\htdocs\startLaravel\resources\views/estudiante/crear.blade.php ENDPATH**/ ?>