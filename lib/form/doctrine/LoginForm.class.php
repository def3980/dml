<?php

/**
 * Description of InicioForm
 *
 * @author orojas
 */
class LoginForm extends BaseForm {

    protected static 
        $users = array(
            'def.3980@gmail.com' => 'def.3980@gmail.com', 
            'susanatamara@hotmail.com' => 'susanatamara@hotmail.com'
        );

    public function configure() {
        $this->setWidgets(array(
            'usr' => new sfWidgetFormChoice(array(
                'choices' => self::$users,
                'default' => 0
            )),
            'pwd' => new sfWidgetFormInputPassword(),
        ));
        $this->widgetSchema->setNameFormat('login[%s]');        
        $this->setValidators(array(
            'usr' => new sfValidatorChoice(array('choices' => array_keys(self::$users), 'empty_value' => reset(self::$users), 'required' => false)),
            'pwd' => new sfValidatorString(array('max_length' => 254, 'required'  => false)),
        ));
        $this->widgetSchema->setFormFormatterName('list');
    }
    
}