<?php

/* C:\xampp\htdocs\sistemas\vendor\cakephp\bake\src\Template\Bake\View\helper.twig */
class __TwigTemplate_1ddba54d754273bc9dc1d4dc7e64e00fcbe619b1c6e8f690428a6aa62455a67b extends Twig_Template
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
        $__internal_26b1f48023a8864f0f47ec73b4f68f84de331dfaf126a98912fbb969621169f8 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_26b1f48023a8864f0f47ec73b4f68f84de331dfaf126a98912fbb969621169f8->enter($__internal_26b1f48023a8864f0f47ec73b4f68f84de331dfaf126a98912fbb969621169f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\View\\helper.twig"));

        // line 16
        echo "<?php
namespace ";
        // line 17
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\View\\Helper;

use Cake\\View\\Helper;
use Cake\\View\\View;

/**
 * ";
        // line 23
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " helper
 */
class ";
        // line 25
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "Helper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected \$_defaultConfig = [];

}
";
        
        $__internal_26b1f48023a8864f0f47ec73b4f68f84de331dfaf126a98912fbb969621169f8->leave($__internal_26b1f48023a8864f0f47ec73b4f68f84de331dfaf126a98912fbb969621169f8_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\View\\helper.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 25,  34 => 23,  25 => 17,  22 => 16,);
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
<?php
namespace {{ namespace }}\\View\\Helper;

use Cake\\View\\Helper;
use Cake\\View\\View;

/**
 * {{ name }} helper
 */
class {{ name }}Helper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected \$_defaultConfig = [];

}
", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\View\\helper.twig", "");
    }
}
