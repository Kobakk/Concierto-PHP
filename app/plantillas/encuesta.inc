<?php ob_start();?>

<form action="" method="post">
    <fieldset>
        <legend>Como te llamas</legend>
        <p>
            <label>
                Nombre: <input type="text" name="name" size="30" placeholder="¿Cuál es su nombre?"> 
            </label>
        </p>
        <p>
            <label>
                Apellido: <input type="text" name="apellido" size="30" placeholder="¿Como te apellidás?"> 
            </label>
        </p>
    </fieldset>
    <fieldset>
        <legend>Dónde residis</legend>
        <p>
            <label>Ciudad:
                <input type="text" name="ciudad" size="30" placeholder="¿En qué ciudad residis?">
            </label>
        </p>
        <p>
            <label> Provincia:
                <select name="Provincia" id="">
                    <option value="">Selecciona la provincia de tu ciudad</option>
                </select>
            </label>
        </p>
        <p>
            <label>Código Postal:
                <input type="text" name="cp" size="30" placeholder="Cod. Postal">
            </label>
        </p>
    </fieldset>
    <fieldset>
        <legend>Cómo podemos contactar con vox</legend>
            <p>
                <label> Telefono:
                    <input type="telefono"  name="telefono" value="" size="50">
                </label>
            </p>
            <p>
                <label>ECorreo:
                    <input type="email"  name="eCorreo" value="" size="50">
                </label>
            </p>
    </fieldset>
    <fieldset>
        <legend> Contraseña <legend>
            <p>
                <label>Contraseña:
                    <input type="password" name="pass1" size="10" placeholder="Tu contra" 
                    title="Mínimo 8 caracteres, máximo 15, con al menos:
                    una mayuscula, una miniscula, un dígito y un crácter ?,#,%,$ o @ ">
                </label>
            </p>
            <p>
                <label>Repite la contraseña:
                    <input type="password" name="pass2" size="10" placeholder="Tu contra" 
                    title="Mínimo 8 caracteres, máximo 15, con al menos:
                    una mayuscula, una miniscula, un dígito y un crácter ?,#,%,$ o @ ">
                </label>
            </p>
    </fieldset>
</form>

<?php $contenido = ob_get_clean();
include 'base.php';?>