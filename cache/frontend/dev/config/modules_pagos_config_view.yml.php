<?php
// auto-generated by sfViewConfigHandler
// date: 2015/01/18 17:25:38
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'newSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'editSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'newSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addMeta('charset', 'utf-8~', false, false);
  $response->addMeta('viewport', 'width=device-width, initial-scale=1.0', false, false);
  $response->addMeta('description', '', false, false);
  $response->addMeta('author', '', false, false);

  $response->addStylesheet('bootstrap', '', array (  'bootstrap' => true,));
  $response->addStylesheet('bootstrap-responsive', '', array (  'bootstrap' => true,));
  $response->addStylesheet('docs', '', array (  'bootstrap' => true,));
  $response->addStylesheet('google-code-prettify', '', array (  'bootstrap' => true,));
  $response->addStylesheet('dropzone', '', array ());
  $response->addJavascript('widgets', '', array ());
  $response->addJavascript('jquery', '', array ());
  $response->addJavascript('bootstrap-transition', '', array ());
  $response->addJavascript('bootstrap-alert', '', array ());
  $response->addJavascript('bootstrap-modal', '', array ());
  $response->addJavascript('bootstrap-dropdown', '', array ());
  $response->addJavascript('bootstrap-scrollspy', '', array ());
  $response->addJavascript('bootstrap-tab', '', array ());
  $response->addJavascript('bootstrap-tooltip', '', array ());
  $response->addJavascript('bootstrap-popover', '', array ());
  $response->addJavascript('bootstrap-button', '', array ());
  $response->addJavascript('bootstrap-collapse', '', array ());
  $response->addJavascript('bootstrap-carousel', '', array ());
  $response->addJavascript('bootstrap-typeahead', '', array ());
  $response->addJavascript('bootstrap-affix', '', array ());
  $response->addJavascript('holder/holder', '', array ());
  $response->addJavascript('google-code-prettify/prettify', '', array ());
  $response->addJavascript('application', '', array ());
  $response->addJavascript('dropzone', '', array ());
  $response->addJavascript('jquery.form.js', '', array ());
  $response->addJavascript('js-personal/validators', '', array ());
  $response->addJavascript('js-personal/dump', '', array ());
  $response->addJavascript('jquery.maskedinput.js', '', array ());
}
else if ($templateName.$this->viewName == 'editSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addMeta('charset', 'utf-8~', false, false);
  $response->addMeta('viewport', 'width=device-width, initial-scale=1.0', false, false);
  $response->addMeta('description', '', false, false);
  $response->addMeta('author', '', false, false);

  $response->addStylesheet('bootstrap', '', array (  'bootstrap' => true,));
  $response->addStylesheet('bootstrap-responsive', '', array (  'bootstrap' => true,));
  $response->addStylesheet('docs', '', array (  'bootstrap' => true,));
  $response->addStylesheet('google-code-prettify', '', array (  'bootstrap' => true,));
  $response->addStylesheet('dropzone', '', array ());
  $response->addJavascript('widgets', '', array ());
  $response->addJavascript('jquery', '', array ());
  $response->addJavascript('bootstrap-transition', '', array ());
  $response->addJavascript('bootstrap-alert', '', array ());
  $response->addJavascript('bootstrap-modal', '', array ());
  $response->addJavascript('bootstrap-dropdown', '', array ());
  $response->addJavascript('bootstrap-scrollspy', '', array ());
  $response->addJavascript('bootstrap-tab', '', array ());
  $response->addJavascript('bootstrap-tooltip', '', array ());
  $response->addJavascript('bootstrap-popover', '', array ());
  $response->addJavascript('bootstrap-button', '', array ());
  $response->addJavascript('bootstrap-collapse', '', array ());
  $response->addJavascript('bootstrap-carousel', '', array ());
  $response->addJavascript('bootstrap-typeahead', '', array ());
  $response->addJavascript('bootstrap-affix', '', array ());
  $response->addJavascript('holder/holder', '', array ());
  $response->addJavascript('google-code-prettify/prettify', '', array ());
  $response->addJavascript('application', '', array ());
  $response->addJavascript('dropzone', '', array ());
  $response->addJavascript('jquery.form.js', '', array ());
  $response->addJavascript('js-personal/validators', '', array ());
  $response->addJavascript('jquery.maskedinput.js', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addMeta('charset', 'utf-8~', false, false);
  $response->addMeta('viewport', 'width=device-width, initial-scale=1.0', false, false);
  $response->addMeta('description', '', false, false);
  $response->addMeta('author', '', false, false);

  $response->addStylesheet('bootstrap', '', array (  'bootstrap' => true,));
  $response->addStylesheet('bootstrap-responsive', '', array (  'bootstrap' => true,));
  $response->addStylesheet('docs', '', array (  'bootstrap' => true,));
  $response->addStylesheet('google-code-prettify', '', array (  'bootstrap' => true,));
  $response->addJavascript('widgets', '', array ());
  $response->addJavascript('jquery', '', array ());
  $response->addJavascript('bootstrap-transition', '', array ());
  $response->addJavascript('bootstrap-alert', '', array ());
  $response->addJavascript('bootstrap-modal', '', array ());
  $response->addJavascript('bootstrap-dropdown', '', array ());
  $response->addJavascript('bootstrap-scrollspy', '', array ());
  $response->addJavascript('bootstrap-tab', '', array ());
  $response->addJavascript('bootstrap-tooltip', '', array ());
  $response->addJavascript('bootstrap-popover', '', array ());
  $response->addJavascript('bootstrap-button', '', array ());
  $response->addJavascript('bootstrap-collapse', '', array ());
  $response->addJavascript('bootstrap-carousel', '', array ());
  $response->addJavascript('bootstrap-typeahead', '', array ());
  $response->addJavascript('bootstrap-affix', '', array ());
  $response->addJavascript('holder/holder', '', array ());
  $response->addJavascript('google-code-prettify/prettify', '', array ());
  $response->addJavascript('application', '', array ());
}

