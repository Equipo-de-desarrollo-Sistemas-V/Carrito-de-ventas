<!DOCTYPE html>
<!-- Interfaz para RECUPERAR CONTRASEÑA -->
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar tu cuenta</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar container">
            <img src="css/assets/Logo_Integrado.svg" required class="logo">
            <input type="checkbox" id="toggler">
            <label for="toggler"><i class="ri-menu-line"></i></label>
            <div class="menu">
                <ul class="list">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="waves">
        <div class="bgcolor"></div>
        <div class="wave w1"></div>
    </section>

    <section class="container-all">
        <article class="login">
            <div class="card-login">
                <form id="formulario">
                    <h2>ACTUALIZA TU CONTRASEÑA</h2>
                    <p class="subcabecera">Ingresa la nueva <span>contraseña</span>. Guardala muy <span>bien</span>.</p>
                    <div class="passwords">
                        <div class="input-group">
                            <input type="password" name="contraseña" id="contraseña" required class="input">
                            <label for="contraseña" class="input-label">Contraseña</label>
                        </div>

                        <div class="input-group-2">
                            <input type="password" name="confirmar-contraseña" id="confirmar-contraseña" required
                                class="input">
                            <label for="confirmar-contraseña" class="input-label">Confirmar contraseña</label>
                        </div>
                        <input type="submit" value="Actualizar ->" class="btn-login">
                </form>
            </div>
        </article>
        <script src="js/alertaContraseña.js"></script>
    </section>
</body>
</html>