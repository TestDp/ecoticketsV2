<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Hola <?php echo e($name); ?>, gracias por registrarte en <strong>FACIN</strong> !</h2>
<p>Por favor confirma tu correo electrónico.</p>
<p>Para ello simplemente debes hacer click en el siguiente enlace:</p>

<a href="<?php echo e(url('/register/verify/' . $CodigoConfirmacion)); ?>">
    Clic para confirmar tu email
</a>
</body>
</html>
