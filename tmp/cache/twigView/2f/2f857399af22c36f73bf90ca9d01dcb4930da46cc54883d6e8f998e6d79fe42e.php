<?php

/* C:\xampp\htdocs\cakeproject\vendor\cakephp\bake\src\Template\Bake\Template\add.twig */
class __TwigTemplate_f59737416de2a10e91b11fb05d543ea21714993cfe82b695f64f62efa350d67c extends Twig_Template
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
        $__internal_f6032aa206755c1c284fbc133ec49c6fb3022b0ff9deb7cc56994edcfc5f7e08 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_f6032aa206755c1c284fbc133ec49c6fb3022b0ff9deb7cc56994edcfc5f7e08->enter($__internal_f6032aa206755c1c284fbc133ec49c6fb3022b0ff9deb7cc56994edcfc5f7e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\cakeproject\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\add.twig"));

        // line 16
        echo "<?php
/**
 * @var \\";
        // line 18
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\View\\AppView \$this
 * @var \\";
        // line 19
        echo twig_escape_filter($this->env, ($context["entityClass"] ?? null), "html", null, true);
        echo " \$";
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo "
 */
?>
";
        // line 22
echo $context['_view']->element("form",array(),array());
        
        $__internal_f6032aa206755c1c284fbc133ec49c6fb3022b0ff9deb7cc56994edcfc5f7e08->leave($__internal_f6032aa206755c1c284fbc133ec49c6fb3022b0ff9deb7cc56994edcfc5f7e08_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cakeproject\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 22,  30 => 19,  26 => 18,  22 => 16,);
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
/**
 * @var \\{{ namespace }}\\View\\AppView \$this
 * @var \\{{ entityClass }} \${{ singularVar }}
 */
?>
{% element 'form' %}
", "C:\\xampp\\htdocs\\cakeproject\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Template\\add.twig", "");
    }
}
