<?php

/* C:\xampp\htdocs\sistemas\vendor\cakephp\bake\src\Template\Bake\Plugin\src\Controller\AppController.php.twig */
class __TwigTemplate_fca5c292e72c7ce616cb9fcc706384d0d1435af6ea53a49f3ada482e3d9a16dc extends Twig_Template
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
        $__internal_a0eccd2ad64e4ff1da03e9cb5c25bd34590306ff7268d658ea8180f428888d8a = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_a0eccd2ad64e4ff1da03e9cb5c25bd34590306ff7268d658ea8180f428888d8a->enter($__internal_a0eccd2ad64e4ff1da03e9cb5c25bd34590306ff7268d658ea8180f428888d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\src\\Controller\\AppController.php.twig"));

        // line 16
        echo "<?php

namespace ";
        // line 18
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Controller;

use ";
        // line 20
        echo twig_escape_filter($this->env, ($context["baseNamespace"] ?? null), "html", null, true);
        echo "\\Controller\\AppController as BaseController;

class AppController extends BaseController
{

}
";
        
        $__internal_a0eccd2ad64e4ff1da03e9cb5c25bd34590306ff7268d658ea8180f428888d8a->leave($__internal_a0eccd2ad64e4ff1da03e9cb5c25bd34590306ff7268d658ea8180f428888d8a_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\src\\Controller\\AppController.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 20,  26 => 18,  22 => 16,);
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

namespace {{ namespace }}\\Controller;

use {{ baseNamespace }}\\Controller\\AppController as BaseController;

class AppController extends BaseController
{

}
", "C:\\xampp\\htdocs\\sistemas\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Plugin\\src\\Controller\\AppController.php.twig", "");
    }
}
