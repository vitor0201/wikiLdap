<?php

/* C:\xampp\htdocs\sistemas\vendor\cakephp\bake\src\Template\Bake\Plugin\phpunit.xml.dist.twig */
class __TwigTemplate_d363fecc956da7d0d57b854ea79a66a62464854a7cfb0a7233c056b9fd862cd1 extends Twig_Template
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
        $__internal_6fb23075854fdb5aa8f3ad47963609887aa880c840ac9a554c8045b91a939291 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_6fb23075854fdb5aa8f3ad47963609887aa880c840ac9a554c8045b91a939291->enter($__internal_6fb23075854fdb5aa8f3ad47963609887aa880c840ac9a554c8045b91a939291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\phpunit.xml.dist.twig"));

        // line 16
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<phpunit
    colors=\"true\"
    processIsolation=\"false\"
    stopOnFailure=\"false\"
    syntaxCheck=\"false\"
    bootstrap=\"./tests/bootstrap.php\"
    >
    <php>
        <ini name=\"memory_limit\" value=\"-1\"/>
        <ini name=\"apc.enable_cli\" value=\"1\"/>
    </php>

    <!-- Add any additional test suites you want to run here -->
    <testsuites>
        <testsuite name=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["plugin"] ?? null), "html", null, true);
        echo " Test Suite\">
            <directory>./tests/TestCase</directory>
        </testsuite>
    </testsuites>

    <!-- Setup a listener for fixtures -->
    <listeners>
        <listener
        class=\"\\Cake\\TestSuite\\Fixture\\FixtureInjector\"
        file=\"./vendor/cakephp/cakephp/src/TestSuite/Fixture/FixtureInjector.php\">
            <arguments>
                <object class=\"\\Cake\\TestSuite\\Fixture\\FixtureManager\" />
            </arguments>
        </listener>
    </listeners>

    <filter>
        <whitelist>
            <directory suffix=\".php\">./src/</directory>
        </whitelist>
    </filter>

</phpunit>
";
        
        $__internal_6fb23075854fdb5aa8f3ad47963609887aa880c840ac9a554c8045b91a939291->leave($__internal_6fb23075854fdb5aa8f3ad47963609887aa880c840ac9a554c8045b91a939291_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\phpunit.xml.dist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 31,  22 => 16,);
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
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<phpunit
    colors=\"true\"
    processIsolation=\"false\"
    stopOnFailure=\"false\"
    syntaxCheck=\"false\"
    bootstrap=\"./tests/bootstrap.php\"
    >
    <php>
        <ini name=\"memory_limit\" value=\"-1\"/>
        <ini name=\"apc.enable_cli\" value=\"1\"/>
    </php>

    <!-- Add any additional test suites you want to run here -->
    <testsuites>
        <testsuite name=\"{{ plugin }} Test Suite\">
            <directory>./tests/TestCase</directory>
        </testsuite>
    </testsuites>

    <!-- Setup a listener for fixtures -->
    <listeners>
        <listener
        class=\"\\Cake\\TestSuite\\Fixture\\FixtureInjector\"
        file=\"./vendor/cakephp/cakephp/src/TestSuite/Fixture/FixtureInjector.php\">
            <arguments>
                <object class=\"\\Cake\\TestSuite\\Fixture\\FixtureManager\" />
            </arguments>
        </listener>
    </listeners>

    <filter>
        <whitelist>
            <directory suffix=\".php\">./src/</directory>
        </whitelist>
    </filter>

</phpunit>
", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\phpunit.xml.dist.twig", "");
    }
}
