<?php
/**
 * <b>Descripcion:</b> Clase que <br/>Valida los datos de las peticiones
 * <b>Caso de Uso:</b> PANTHER-Seguridad <br/>
 *
 * @author MIguel Angel Saenz Tibambre <a href = "mailto:saenzm963@gmail.com">saenzm963@gmail.com</a>
 */
class ValidacionDatos {
    public static function validarNombreApellido($datos) {
        $regex = "/^(?=.{3,30}$)[a-zA-ZÁÉÍÓÚáéíóú\sÑñ]+(?:\s[a-zA-ZÁÉÍÓÚáéíóú\sÑñ]+)*$/";
        if (!preg_match($regex, $datos)) {
            throw new ExcepcionApi(BAD_REQUEST, ST400, error_Structure_data);
        }
    }
    public static function validarTelefono($datos) {
        $regex = "/^3\d{9}$/";
        if (!preg_match($regex, $datos)) {
            throw new ExcepcionApi(BAD_REQUEST, ST400, error_Structure_data);
        }
    }
}
?>