<?php

/* @PrestaShop/Admin/Improve/Module/addons_store.html.twig */
class __TwigTemplate_79d04c5c953f635777af670384fc7e4c7ad1b5862104f0dd438f489166b919a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Module/addons_store.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af7694a1663e5a56993cde93a4013b3d8354762b511958c6730ecf4aa628b457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7694a1663e5a56993cde93a4013b3d8354762b511958c6730ecf4aa628b457->enter($__internal_af7694a1663e5a56993cde93a4013b3d8354762b511958c6730ecf4aa628b457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Module/addons_store.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af7694a1663e5a56993cde93a4013b3d8354762b511958c6730ecf4aa628b457->leave($__internal_af7694a1663e5a56993cde93a4013b3d8354762b511958c6730ecf4aa628b457_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_6127f003dc0111f9c7569222c8771f5f1f2d68187f3618cc8b707241c3edd2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6127f003dc0111f9c7569222c8771f5f1f2d68187f3618cc8b707241c3edd2a0->enter($__internal_6127f003dc0111f9c7569222c8771f5f1f2d68187f3618cc8b707241c3edd2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "  ";
        echo ($context["pageContent"] ?? $this->getContext($context, "pageContent"));
        echo "
";
        
        $__internal_6127f003dc0111f9c7569222c8771f5f1f2d68187f3618cc8b707241c3edd2a0->leave($__internal_6127f003dc0111f9c7569222c8771f5f1f2d68187f3618cc8b707241c3edd2a0_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Module/addons_store.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 28,  34 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {{ pageContent|raw }}
{% endblock %}
", "@PrestaShop/Admin/Improve/Module/addons_store.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Module\\addons_store.html.twig");
    }
}
