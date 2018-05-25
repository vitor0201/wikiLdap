<?php

/* C:\xampp\htdocs\sistemas\vendor\cakephp\bake\src\Template\Bake\Plugin\.gitignore.twig */
class __TwigTemplate_997a1e7839e49867e46200ae9a85be7e41783652533b47061eb0be966ff42e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b02fd5bf7b0ca6c1a37f79413634d1cc88c280fbed8fa340e28173128f75d0d = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_8b02fd5bf7b0ca6c1a37f79413634d1cc88c280fbed8fa340e28173128f75d0d->enter($__internal_8b02fd5bf7b0ca6c1a37f79413634d1cc88c280fbed8fa340e28173128f75d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\.gitignore.twig"));

        // line 1
        echo "/composer.lock
/phpunit.xml
/vendor
";
        
        $__internal_8b02fd5bf7b0ca6c1a37f79413634d1cc88c280fbed8fa340e28173128f75d0d->leave($__internal_8b02fd5bf7b0ca6c1a37f79413634d1cc88c280fbed8fa340e28173128f75d0d_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\.gitignore.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/composer.lock
/phpunit.xml
/vendor
", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\.gitignore.twig", "");
    }
}
