<?php

/**
 * Description of MyHelpers
 *
 * @author Oswaldo Rojas
 * Miércoles, 26 de junio de 2013 10:43:45
 */
class MyHelpers {

    private static $_singleton = NULL;

    /**
     * Retorna una instacia de esta clase
     *
     * @return MyHelpers
     */    
    public static function opcion() {
        if (!isset(self::$_singleton)) :
            self::$_singleton = new MyHelpers();
        endif;
        return self::$_singleton;
    }
    
    /**
     * Usado en:
     *  - mantenimientos/_email
     *  - tickets_aereos
     */
    public function fechaEnEsp($date, $completa = true) {
        $dia    = explode("-", $date, 3);
        $year   = $dia[0];
        $month  = (string)(int)$dia[1];
        $day    = (string)(int)$dia[2];

        $dias = array("domingo","lunes","martes","mi&eacute;rcoles","jueves","viernes","s&aacute;bado");
        $diasAbrev = array("Dom","Lun","Mar","Mié","Jue","Vie","Sáb");
        
        $tomadia = $dias[intval((date("w",mktime(0,0,0,$month,$day,$year))))];
        $tomadiaAbrev = $diasAbrev[intval((date("w",mktime(0,0,0,$month,$day,$year))))];

        $meses = array("","enero","febrero","marzo","abril","mayo","junio",
                        "julio","agosto","septiembre","octubre","noviembre","diciembre");
        $mesesAbrev = array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");

        return $completa ? $tomadia.", ".$day." ".ucfirst($meses[$month])." ".$year
                : $tomadiaAbrev.", ".$day." ".$mesesAbrev[$month]." ".$year;
        //return $tomadiaAbrev.", ".$day." ".$mesesAbrev[$month]." ".$year;
    }

    /**
     * Usado en:
     *  - mantenimientos/_email
     */
    public function fechaYHoraEnEsp($date, $completa = true, $capital = true) {
        $dia    = explode("-", $date, 3);
        $year   = $dia[0];
        $month  = (string)(int)$dia[1];
        $day    = (string)(int)$dia[2];
        $hms    = explode(" ", $dia[2], 2);
        $time   = (string)$hms[1];

        $dias = array("domingo","lunes","martes","mi&eacute;rcoles","jueves","viernes","s&aacute;bado");
        $diasAbrev = array("dom","lun","mar","mié","jue","vie","sáb");
        
        $tomadia = $dias[intval((date("w",mktime(0,0,0,$month,$day,$year))))];
        $tomadiaAbrev = $diasAbrev[intval((date("w",mktime(0,0,0,$month,$day,$year))))];

        $meses = array("","enero","febrero","marzo","abril","mayo","junio",
                        "julio","agosto","septiembre","octubre","noviembre","diciembre");
        $mesesAbrev = array("","ene","feb","mar","abr","may","jun","jul","ago","sep","oct","nov","dic");

        return $completa ? ($capital ? ucfirst($tomadia) : $tomadia).", ".$day." ".($capital ? ucfirst($meses[$month]) : $meses[$month])." ".$year." ".$time
                : ($capital ? ucfirst($tomadiaAbrev) : $tomadiaAbrev).", ".$day." ".($capital ? ucfirst($mesesAbrev[$month]) : $mesesAbrev[$month])." ".$year." ".$time;
    }
    
    /**
     * Usado en:
     *  - mantenimientos/_email
     */
    public function numeroOrden($valor) {
        $no = 0;
        switch (true):
            case $valor < 10: $no = '0000'.$valor; break;
            case $valor < 100: $no = '000'.$valor; break;
            case $valor < 1000: $no = '00'.$valor; break;
            case $valor < 10000: $no = '0'.$valor; break;
            case $valor < 100000: $no = ''.$valor; break;
        endswitch;
        return $no;
    }
    
    /**
     * Usado en:
     *  - tickets_aereos/_email
     */
    public function formateandoNombre($nomape) {
        $nomape = explode(" ",$nomape);
        if (count($nomape) == 4):
            $n1 = $nomape[2];
            $n2 = (String) $nomape[3];
            $a1 = $nomape[0];
            return $n1.' '.$n2[0].'. '.$a1;
        else:
            return $nomape;
        endif;
    }
    
    /**
     * Usado en:
     *  - tickets_aereos/_email
     */
    public function cedula($cedula) {
        return $cedula != NULL ? substr($cedula, 0, -1).'-'.substr($cedula, -1) : 'sin registro';
    }
    
    /**
     * Usado para mostrar el formato de moneda
     */
    public function dinero($valor) {
        return number_format($valor,'2',',','.');
    }
}