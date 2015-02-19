<?php

/**
 * Clase global al cual se puede acceder dentro de cualquier modulo, modelo de clase,
 * modelo de formularios, modelo de filtros y de mas configuraciones del proyecto
 * en Symfony. La clase se autoinstancia gracias al metodo singleton y derivando
 * el acceso a los metodos de esta clase de manera facil y limpia.
 * 
 * Sirvete de agregar, modificar o mejorar los metodos que encuentres en esta clase.
 */

/**
 * Descripcion de la clase Singleton
 *
 * @author Oswaldo Rojas <def.3980@gmail.com>
 * @copyright (c) Viernes, 31 Octubre 2014 10:56:45
 */
class Singleton {

    private static $_singleton = NULL;

    private function sfCtxt() { return sfContext::getInstance(); }

    /**
     * Retorna una instacia de esta clase
     *
     * @return Singleton
     */    
    public static function getInstance() {
        if (!isset(self::$_singleton)):
            self::$_singleton = new Singleton();
        endif;
        return self::$_singleton;
    }
    
    /**
     * csv_to_array, permite pasar de un archivo a un arreglo asociativo
     * 
     * @param type $filename Ruta y nombre del archivo *.csv Default ''
     * @param type $delimiter Delimitador de cada campo dentro del archivo *.csv
     * 
     * @return array Arreglo asociativo de campos equivalente a su valor
     */
    public function csv_to_array($filename = '', $delimiter = ',') {
        if (!file_exists($filename) || !is_readable($filename))
            return FALSE;

        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }
    
    /**
     * timeout, funcion que permite usar el contexto de symfony en conjunto
     * con contenido parcial (html, javascript) para indicar una alerta al
     * usuario que la sesion se termino y que debe nuevamente loguearse.
     * 
     * Por la naturaleza de la accion que realiza esta funcion no tiene ninguna
     * opcion de retorno.
     */
    public function timeout() {
        $this->sfCtxt()->getResponse()->setSlot(
            'timeout_html', 
            get_partial('global/timeout_html')
        );
        $this->sfCtxt()->getResponse()->setSlot(
            'timeout_js', 
            get_partial('global/timeout_js')
        );
    }
    
    /**
     * dateTimeESN nos devuelve la fecha y hora () del sistema en español de acuerdo
     * al formato establecido a continuacion:
     *    Lunes, 1 enero 2014 00:00:01
     *    Lun, 1 ene 2014 00:00:01
     *    Lunes, 1 enero 2014
     *    Lun, 1 ene 2014
     * 
     * @param type date $date Recibe la fecha actual
     * @param type boolean $complete Indica si es completa la muestra de dias y meses
     * @param type boolean $capital Indica si el mes o dia van con letra capital
     * @param type boolean $timeOption Indica si quiero mostrar la hora
     * @return string Fecha en formato español
     */
    public function dateTimeESN($date, $complete = true, $capital = true, $timeOption = false) {
        $dia   = explode("-", $date, 3);
        $year  = $dia[0];
        $month = (string)(int)$dia[1];
        $day   = (string)(int)$dia[2];
        $hms   = explode(" ", $dia[2], 2);
        $time  = $timeOption ? (string)$hms[1] : null;

        $dias = array("domingo","lunes","martes","mi&eacute;rcoles","jueves","viernes","s&aacute;bado");
        $diasAbrev = array("dom","lun","mar","mi&eacute;","jue","vie","s&aacute;b");
        
        $tomadia = $dias[intval((date("w",mktime(0,0,0,$month,$day,$year))))];
        $tomadiaAbrev = $diasAbrev[intval((date("w",mktime(0,0,0,$month,$day,$year))))];

        $meses = array("","enero","febrero","marzo","abril","mayo","junio",
                        "julio","agosto","septiembre","octubre","noviembre","diciembre");
        $mesesAbrev = array("","ene","feb","mar","abr","may","jun","jul","ago","sep","oct","nov","dic");

        if ($timeOption) {
            return $complete 
                    ? ($capital 
                        ? ucfirst($tomadia) 
                        : $tomadia).", ".($day <= 9 ? '0'.$day : $day)." ".($capital 
                                                    ? ucfirst($meses[$month]) 
                                                    : $meses[$month])." ".$year." ".$time
                    : ($capital 
                        ? ucfirst($tomadiaAbrev) 
                        : $tomadiaAbrev).", ".($day <= 9 ? '0'.$day : $day)." ".($capital 
                                                        ? ucfirst($mesesAbrev[$month]) 
                                                        : $mesesAbrev[$month])." ".$year." ".$time;
        } else {
            return $complete 
                    ? ($capital
                        ? ucfirst($tomadia)
                        : $tomadia).", ".($day <= 9 ? '0'.$day : $day)." de ".($capital
                                                        ? ucfirst($meses[$month])
                                                        : $meses[$month])." de ".$year
                    : ($capital
                        ? ucfirst($tomadiaAbrev)
                        : $tomadiaAbrev).", ".($day <= 9 ? '0'.$day : $day)." ".($capital
                                                        ? ucfirst($mesesAbrev[$month])
                                                        : $mesesAbrev[$month])." ".$year;
        }
    }

    /**
     * numeroOrden, devuelve una numeración de un rango establecido previamente,
     * es decir devuelve la numeracion de un numero dado llenandolos de 0's. Ejemplo:
     * 1.- envio 1 y devuelve 000000001
     * 2.- envio 245 y devuelve 000000245
     * 3.- envio 3456723 y devuelve 003456723
     * 
     * @param type $valor
     * @return string Valor formateado
     */
    public function numeroDeOrden($valor) {
        $no = 0;
        switch (true):
            case $valor < 10: $no = '00000000'.$valor; break;
            case $valor < 100: $no = '0000000'.$valor; break;
            case $valor < 1000: $no = '000000'.$valor; break;
            case $valor < 10000: $no = '00000'.$valor; break;
            case $valor < 100000: $no = '0000'.$valor; break;
            case $valor < 1000000: $no = '000'.$valor; break;
            case $valor < 10000000: $no = '00'.$valor; break;
            case $valor < 100000000: $no = '0'.$valor; break;
            case $valor < 1000000000: $no = ''.$valor; break;
        endswitch;
        return $no;
    }
    
    /**
     * reemplazarComaXPunto, permite reemplazar la coma por el punto. Ideal para guadar
     * valores en BDD para cuando se utiliza algun plugin de jquery en los formularios
     * y estos tiene un formato establecido 
     * 
     * @param type $cadena
     * @return type string Sin contener coma, sólo punto
     */
    public function reemplazarComaXPunto($cadena) {
        return str_replace(',', '.', $cadena);
    }
    
    /**
     * convertirEnFormatoFechaDml, convertira la fecha dada en string a un formato
     * compatible con la aplicacion Dml y el motor de base de datos MySQL
     * 
     * @param type $fecha (99/99/9999)
     * @return type string en format de fecha (9999-99-99)
     */
    public function convertirEnFormatoFechaDml($fecha) {
        $corte = explode('/', $fecha, 3);
        if (count($corte) == 3) {
            //validando que nunca falte el cero por delante, en mes y dia
            return trim(
                        $corte[2]
                        .'-'
                        .str_pad(($corte[1] * 1), 2, '0', STR_PAD_LEFT)
                        .'-'
                        .str_pad(($corte[0] * 1), 2, '0', STR_PAD_LEFT)
                    );
        } else {
            return $fecha;
        }
    }
    
    /**
     * quitarComa, elimina cuanquier coma que exista en la cade de caracteres. Ideal
     * para manejo de cantidades numericas de tipo string
     * 
     * @param type $cadena
     * @return type string Sin contener coma
     */
    public function quitarComa($cadena) {
        return str_replace(',', '', $cadena);
    }

}