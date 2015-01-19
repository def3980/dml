<?php

/**
 * Description of InicioForm
 *
 * @author orojas
 */
class LoginForm extends BaseForm {
    
    public function configure() {
        $this->setWidgets(array(
            'usr'   => new sfWidgetFormInput(),
            'pwd'   => new sfWidgetFormInputPassword(),
        ));
        $this->widgetSchema->setNameFormat('login[%s]');        
        $this->setValidators(array(
            'usr'   => new sfValidatorString(array('max_length' => 254, 'required'  => false)),
            'pwd'   => new sfValidatorString(array('max_length' => 254, 'required'  => false)),
        ));
        $this->widgetSchema->setFormFormatterName('list');
    }
    
}

?>