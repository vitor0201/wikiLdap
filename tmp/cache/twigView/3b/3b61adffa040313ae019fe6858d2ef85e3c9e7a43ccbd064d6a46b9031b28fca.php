<?php

/* C:\xampp\htdocs\sistemas\vendor\cakephp\bake\src\Template\Bake\Plugin\tests\bootstrap.php.twig */
class __TwigTemplate_a9073d4bd410e52f5711597425144a00d467e5c2d3ebeb468a4052e87980da73 extends Twig_Template
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
        $__internal_e6c573b927357cd9b015ee46045b0cd3d0ce4f6dd9cf9ba2170a3132cd47aacf = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_e6c573b927357cd9b015ee46045b0cd3d0ce4f6dd9cf9ba2170a3132cd47aacf->enter($__internal_e6c573b927357cd9b015ee46045b0cd3d0ce4f6dd9cf9ba2170a3132cd47aacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\tests\\bootstrap.php.twig"));

        // line 18
        echo "<?php
/**
 * Test suite bootstrap for ";
        // line 20
        echo twig_escape_filter($this->env, ($context["plugin"] ?? null), "html", null, true);
        echo ".
 *
 * This function is used to find the location of CakePHP whether CakePHP
 * has been installed as a dependency of the plugin, or the plugin is itself
 * installed as a dependency of an application.
 */
\$findRoot = function (\$root) {
    do {
        \$lastRoot = \$root;
        \$root = dirname(\$root);
        if (is_dir(\$root . '/vendor/cakephp/cakephp')) {
            return \$root;
        }
    } while (\$root !== \$lastRoot);

    throw new Exception(\"Cannot find the root of the application, unable to run tests\");
};
\$root = \$findRoot(__FILE__);
unset(\$findRoot);

chdir(\$root);

if (file_exists(\$root . '/config/bootstrap.php')) {
    require \$root . '/config/bootstrap.php';

    return;
}
require \$root . '/vendor/cakephp/cakephp/tests/bootstrap.php';
";
        
        $__internal_e6c573b927357cd9b015ee46045b0cd3d0ce4f6dd9cf9ba2170a3132cd47aacf->leave($__internal_e6c573b927357cd9b015ee46045b0cd3d0ce4f6dd9cf9ba2170a3132cd47aacf_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\tests\\bootstrap.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 20,  22 => 18,);
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
 * Tests bootstrap file
 *
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
 * Test suite bootstrap for {{ plugin }}.
 *
 * This function is used to find the location of CakePHP whether CakePHP
 * has been installed as a dependency of the plugin, or the plugin is itself
 * installed as a dependency of an application.
 */
\$findRoot = function (\$root) {
    do {
        \$lastRoot = \$root;
        \$root = dirname(\$root);
        if (is_dir(\$root . '/vendor/cakephp/cakephp')) {
            return \$root;
        }
    } while (\$root !== \$lastRoot);

    throw new Exception(\"Cannot find the root of the application, unable to run tests\");
};
\$root = \$findRoot(__FILE__);
unset(\$findRoot);

chdir(\$root);

if (file_exists(\$root . '/config/bootstrap.php')) {
    require \$root . '/config/bootstrap.php';

    return;
}
require \$root . '/vendor/cakephp/cakephp/tests/bootstrap.php';
", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\tests\\bootstrap.php.twig", "");
    }
}
