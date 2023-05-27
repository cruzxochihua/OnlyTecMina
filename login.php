<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <form action="validar.php" method="post" class="form">
        <h2 class="form__title">Inicia Sesión</h2>
        <p class="form__paragraph">¿Aun no tienes una cuenta? <a href="#" class="form__link">Entra aqui</a></p>

        <div class="form__container">
            <div class="form__group">
                <input type="text" id="user" name="usuario" class="form__input" placeholder=" ">
                <label for="name" class="form__label">Usuario:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="password" id="password" name="contraseña" class="form__input" placeholder=" ">
                <label for="name" class="form__label">Contraseña:</label>
                <span class="form_line"></span>
            </div>

            <button class="form__buttom">INGRESAR</button>
        </div>
    </form>
    
</body>
</html>