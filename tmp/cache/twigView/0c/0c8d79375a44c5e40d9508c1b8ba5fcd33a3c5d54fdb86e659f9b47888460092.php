<?php

/* C:\xampp\htdocs\cakeproject\vendor\cakephp\bake\src\Template\Bake\Model\behavior.twig */
class __TwigTemplate_992ad088601ed52b260535efd5ea276e1d60851659c510122eb1e30ece2b6a9f extends Twig_Template
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
        $__internal_3611d09516fea04c452f08157b3a1cb64ff89401250119e417ceee3aadede231 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_3611d09516fea04c452f08157b3a1cb64ff89401250119e417ceee3aadede231->enter($__internal_3611d09516fea04c452f08157b3a1cb64ff89401250119e417ceee3aadede231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\cakeproject\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Model\\behavior.twig"));

        // line 16
        echo "<?php
namespace ";
        // line 17
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Model\\Behavior;

use Cake\\ORM\\Behavior;
use Cake\\ORM\\Table;

/**
 * ";
        // line 23
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " behavior
 */
class ";
        // line 25
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "Behavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected \$_defaultConfig = [];
}
";
        
        $__internal_3611d09516fea04c452f08157b3a1cb64ff89401250119e417ceee3aadede231->leave($__internal_3611d09516fea04c452f08157b3a1cb64ff89401250119e417ceee3aadede231_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cakeproject\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Model\\behavior.twig";
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
namespace {{ namespace }}\\Model\\Behavior;

use Cake\\ORM\\Behavior;
use Cake\\ORM\\Table;

/**
 * {{ name }} behavior
 */
class {{ name }}Behavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected \$_defaultConfig = [];
}
", "C:\\xampp\\htdocs\\cakeproject\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Model\\behavior.twig", "");
    }
}
