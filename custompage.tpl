<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulario de Registro</title>
            <style>
                /* Estilos CSS aquí */
                .container {
                    width: 50%;
                    margin: auto;
                }
                .formulario {
                    margin-top: 50px;
                    margin-bottom: 30px;
                }
                .titulo {
                    text-align: center;
                }
                .campo {
                    margin-bottom: 20px;
                }
                .campo label {
                    display: block;
                    margin-bottom: 5px;
                }
                .campo input {
                    width: 100%;
                    padding: 5px;
                }
                body {
                    font-family: 'Prompt', sans-serif;
                }
        
                .boton {
                    display: block;
                    width: 100%;
                    padding: 10px;
                    background-color: #0056b3; /* Azul oscuro */
                    color: #fff;
                    border: none;
                    cursor: pointer;
                    margin-bottom: 30px;
                }
            </style>
        </head>
        <body>
            <div class="container"> 
                <form action="controlador_registrar_usuario.php" method="POST" class="formulario">
                    <h2 class="titulo">Registro</h2>
                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required>   
                    </div>  
                    <div class="campo">
                        <label for="apellido">Apellidos</label>
                        <input type="text" id="apellido" name="apellido" required>   
                    </div>      
                    <div class="campo">
                        <label for="correo">Correo</label>
                        <input type="email" id="correo" name="correo" required>   
                    </div>       
                    <div class="campo">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" id="contraseña" name="contraseña" required>   
                    </div>         
                    <button type="submit" class="boton">Registrarse</button>
                </form>
            </div>
        </body>
        </html>
    
        <?php
    }
}

?>