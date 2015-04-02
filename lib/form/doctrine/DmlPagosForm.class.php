<?php

/**
 * Fecha creacion : "Viernes, 5 Diciembre 2014 12:44:41"
 */

/**
 * DmlPagos formulario.
 *
 * @package    dml
 * @subpackage form
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DmlPagosForm extends BaseDmlPagosForm {

    public function configure() {
        // Personalizo los widget asociados a date o datetime de acuerdo al tipo
        // de dato obtenido desde la base de datos. Esto debido a que el widget
        // por defecto de Symfony no se ve amigable para el usuario y con esto
        // se podra aplicar el plugin bootstrap-datetimepicker.
        // Nota: se puede eliminar las siguientes lineas de codigo y volver al
        // estado normal del framework.
        unset(
            $this['personas'],
            $this['facturas'],
            $this['pa_fecha_crea'], 
            $this['pa_quien_crea'], 
            $this['pa_fecha_modifica'], 
            $this['pa_quien_modifica'], 
            $this['pa_fecha_borra'], 
            $this['pa_quien_borra'], 
            $this['pa_borrado_logico']
        );
        $this->widgetSchema->setLabels(array(
            'pa_iva'                => 'I.V.A.:',
            'pa_ice'                => 'I.C.E.:',
            'pa_comision'           => 'Comision:',
            'pa_valor_parcial'      => 'Valor parcial:',
        ));
//        $this->widgetSchema['pa_con_sin_factura'] = new sfWidgetFormInputHidden();
//        $this->widgetSchema['pa_numero_factura']->setDefault(
//            '000-000-'
//            .Singleton::getInstance()->numeroDeOrden(
//                DmlPagosTable::getCountNonInvoice() + 1
//            )
//        );
//        $this->widgetSchema['pa_beneficiarios_json'] = new sfWidgetFormDoctrineChoice(array(
//            'model' => 'DmlBeneficiarios',
//            'method' => 'getBeneficiarios',
//            'multiple' => true
//        ));
//        $this->widgetSchema['pa_fecha']              = new sfWidgetFormInputText();
//        $this->widgetSchema['pa_fecha_crea']         = new sfWidgetFormInputText();
//        $this->widgetSchema['pa_fecha_modifica']     = new sfWidgetFormInputText();
//        $this->widgetSchema['pa_fecha_borra']        = new sfWidgetFormInputText();
//        $this->widgetSchema['personas']->setOption('subtext', true);
//        $this->widgetSchema['personas']->setOption('spaces', 40);
//        $this->widgetSchema['tipos_gastos']->setOption('subtext', true);
//        $this->widgetSchema['tipos_gastos']->setOption('spaces', 40);
//        $this->widgetSchema['pa_beneficiarios_json']->setOption('subtext', true);
//        $this->widgetSchema['pa_beneficiarios_json']->setOption('spaces', 40);
//        unset(
//            $this['personas'], 
//            $this['pa_fecha_crea'], 
//            $this['pa_quien_crea'], 
//            $this['pa_fecha_modifica'], 
//            $this['pa_quien_modifica'], 
//            $this['pa_fecha_borra'], 
//            $this['pa_quien_borra'], 
//            $this['pa_borrado_logico']
//        ); 
//        $this->widgetSchema->setLabels(array(
//            'personas'              => 'Personas:',
//            'tipos_gastos'          => 'Opciones gastos:',
//            'pa_numero_factura'     => '# Factura:',
//            'pa_fecha'              => 'Fecha:',
//            'pa_detalle'            => 'Detalle:',
//            'pa_iva'                => 'I.V.A.:',
//            'pa_ice'                => 'I.C.E.:',
//            'pa_comision'           => 'Comision:',
//            'pa_valor_total'        => 'Valor total:',
//            'pa_beneficiarios_json' => 'Beneficiario(s):',
//        ));
    }
    
    /**
     * processValues es una funcion que sobreescribe al original 
     * sfFormDoctrine::processValues() para asi poder pasar la validacion de un
     * inputfile que no pertenece al modelo DmlPagos.
     * 
     * http://symfony.com/legacy/doc/more-with-symfony/1_4/en/06-Advanced-Forms
     * 
     * @param type $values
     * @return type
     */
//    public function processValues($values) {
//        if ($this->isNew() || !$this->isNew()) {
//            if (null === $this->getValue('bi_binario')) {
//                unset($values['bi_binario']);
//            }
//        }
//        
//        return $values;
//    }
    
    public function doSave($con = null) {
        if ($this->isNew()) {
            $this->getObject()->setPersonas($this->getOption('id'));
            $this->getObject()->setFacturas($this->getOption('idFa'));
            $this->getObject()->setPaFechaCrea(date('Y-m-d H:i:s'));
            $this->getObject()->setPaQuienCrea($this->getOption('id'));
            $this->getObject()->setPaBorradoLogico(false);
        } else if (!$this->isNew()) {
            $this->getObject()->setPersonas($this->getOption('id'));
            $this->getObject()->setFacturas($this->getOption('idFa'));
            $this->getObject()->setPaFechaModifica(date('Y-m-d H:i:s'));
            $this->getObject()->setPaQuienModifica($this->getOption('id'));
        }
        parent::doSave($con);
    }

}