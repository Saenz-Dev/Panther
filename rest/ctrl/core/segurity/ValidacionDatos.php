<?php
/**
 * <b>Descripcion:</b> Clase que <br/>Valida los datos de las peticiones
 * <b>Caso de Uso:</b> PANTHER-Seguridad <br/>
 *
 * @author MIguel Angel Saenz Tibambre <a href = "mailto:saenzm963@gmail.com">saenzm963@gmail.com</a>
 */
class ValidacionDatos {
    public static function validarNombreApellido($datos) {
        if (strlen($datos) == 0 || strlen($datos) <= 3 || strlen($datos) > 30) {
            throw new ExcepcionApi(BAD_REQUEST, ST400, error_Structure_data);
        }
    }
    public static function validarTelefono($datos) {
        if (strlen($datos) != 10) {
            throw new ExcepcionApi(BAD_REQUEST, ST400, error_Structure_data);
        }
    }
}
?>