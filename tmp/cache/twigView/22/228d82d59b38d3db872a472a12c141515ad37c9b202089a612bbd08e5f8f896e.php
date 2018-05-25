<?php

/* C:\xampp\htdocs\sistemas\vendor\cakephp\bake\src\Template\Bake\Plugin\README.md.twig */
class __TwigTemplate_a46ca9284edbc312dbf955f17f726b54910551ddd84cd86fe204c9d148ce322c extends Twig_Template
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
        $__internal_a602f05ef01fb2a92898bbef8e8fb29eddb761333e203c8cdb21887c9217f181 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_a602f05ef01fb2a92898bbef8e8fb29eddb761333e203c8cdb21887c9217f181->enter($__internal_a602f05ef01fb2a92898bbef8e8fb29eddb761333e203c8cdb21887c9217f181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\README.md.twig"));

        // line 16
        echo "# ";
        echo twig_escape_filter($this->env, ($context["plugin"] ?? null), "html", null, true);
        echo " plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require ";
        // line 25
        echo twig_escape_filter($this->env, ($context["package"] ?? null), "html", null, true);
        echo "
```
";
        
        $__internal_a602f05ef01fb2a92898bbef8e8fb29eddb761333e203c8cdb21887c9217f181->leave($__internal_a602f05ef01fb2a92898bbef8e8fb29eddb761333e203c8cdb21887c9217f181_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\README.md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 25,  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
# {{ plugin }} plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require {{ package }}
```
", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\README.md.twig", "");
    }
}
