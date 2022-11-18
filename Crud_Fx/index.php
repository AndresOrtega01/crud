
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Login</title>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="login.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
    </head>
    <body>
    
        <section>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="box">
                <div class="fondo" style="--i:0;"></div>
                <div class="fondo" style="--i:1;"></div>
                <div class="fondo" style="--i:2;"></div>
                <div class="fondo" style="--i:3;"></div>
                <div class="fondo" style="--i:4;"></div>
                <div class="contenedor">
                    <div class="formulario">
                        <h2>Iniciar</h2>
                        <form id="formulario" method="post" action="menu.php">
                            <div class="input">
                                <input type="text" placeholder="Usuario" name="usuario" value=""  required>
                            </div>
                            <div class="input">
                                <input type="password" placeholder="Contraseña" name="clave" value="" required>
                            </div>
                            <div class="input">
                                <input type="submit" value="Iniciar">
                            </div>
                            <p class="olvidar">¿Olvidaste tu contraseña?<a href="#">Click aquí</a></p>
                            <p class="olvidar">¿No tienes cuenta?<a href="#">Click aquí</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
    </body>
        
</html>