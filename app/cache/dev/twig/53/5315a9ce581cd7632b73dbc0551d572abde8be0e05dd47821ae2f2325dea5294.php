<?php

/* PrestaShopBundle:Admin/Module:catalog.html.twig */
class __TwigTemplate_c09c793f2689f7cbf0d71e774e94325b933c96fc95bf831f0fe0a733bf8de181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 25);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2331b69ec5b40af80dae7bece7b805c91107b63b52ee245130dcfc9463b790b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2331b69ec5b40af80dae7bece7b805c91107b63b52ee245130dcfc9463b790b8->enter($__internal_2331b69ec5b40af80dae7bece7b805c91107b63b52ee245130dcfc9463b790b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2331b69ec5b40af80dae7bece7b805c91107b63b52ee245130dcfc9463b790b8->leave($__internal_2331b69ec5b40af80dae7bece7b805c91107b63b52ee245130dcfc9463b790b8_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa8022f16166be5514dc0d9379b5e0ecd6ccf269b543a6960b4a8594467f274e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8022f16166be5514dc0d9379b5e0ecd6ccf269b543a6960b4a8594467f274e->enter($__internal_aa8022f16166be5514dc0d9379b5e0ecd6ccf269b543a6960b4a8594467f274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/loader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "filterCategoryTab"), "method")) {
            // line 34
            echo "      <script>
        \$('body').on('moduleCatalogLoaded', function() {
          \$('.module-category-menu[data-category-tab=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "filterCategoryTab"), "method"), "html", null, true);
            echo "\"]').click();
      });
      </script>
    ";
        }
        
        $__internal_aa8022f16166be5514dc0d9379b5e0ecd6ccf269b543a6960b4a8594467f274e->leave($__internal_aa8022f16166be5514dc0d9379b5e0ecd6ccf269b543a6960b4a8594467f274e_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a9338791c5766e3a0c8205bbf623b42186485afb0927ae9799ff5c87d5b1f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9338791c5766e3a0c8205bbf623b42186485afb0927ae9799ff5c87d5b1f9e->enter($__internal_9a9338791c5766e3a0c8205bbf623b42186485afb0927ae9799ff5c87d5b1f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10 module-catalog-page\">
            ";
        // line 46
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 46)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 47
        echo "            ";
        // line 48
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 48)->display($context);
        // line 49
        echo "            ";
        // line 50
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 50)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 51
        echo "            ";
        // line 52
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 52)->display($context);
        // line 53
        echo "            ";
        // line 54
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 54)->display($context);
        // line 55
        echo "            ";
        // line 56
        echo "            ";
        if ($this->getAttribute(($context["topMenuData"] ?? null), "categories", array(), "any", true, true)) {
            // line 57
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:categories_grid.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 57)->display(array_merge($context, array("categories" => $this->getAttribute(($context["topMenuData"] ?? $this->getContext($context, "topMenuData")), "categories", array()))));
            // line 58
            echo "            ";
        }
        // line 59
        echo "        </div>
    </div>
";
        
        $__internal_9a9338791c5766e3a0c8205bbf623b42186485afb0927ae9799ff5c87d5b1f9e->leave($__internal_9a9338791c5766e3a0c8205bbf623b42186485afb0927ae9799ff5c87d5b1f9e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  121 => 58,  118 => 57,  115 => 56,  113 => 55,  110 => 54,  108 => 53,  105 => 52,  103 => 51,  100 => 50,  98 => 49,  95 => 48,  93 => 47,  90 => 46,  86 => 43,  80 => 42,  68 => 36,  64 => 34,  62 => 33,  58 => 32,  54 => 31,  50 => 30,  46 => 29,  41 => 28,  35 => 27,  11 => 25,);
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

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('themes/default/js/bundle/plugins/jquery.pstagger.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/loader.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module.js') }}\"></script>
    {% if app.request.get('filterCategoryTab') %}
      <script>
        \$('body').on('moduleCatalogLoaded', function() {
          \$('.module-category-menu[data-category-tab=\"{{ app.request.get('filterCategoryTab') }}\"]').click();
      });
      </script>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10 module-catalog-page\">
            {# Addons connect modal #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# PrestaTrust modal #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig' %}
            {# Contains toolbar-nav for module page #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# Contains menu with Selection/Categories/Popular and Tag Search #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig' %}
            {# Temporary loader until ajax has finished and display the full catalog #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig' %}
            {# Module Categories Grid #}
            {% if topMenuData.categories is defined %}
                {% include 'PrestaShopBundle:Admin/Module/Includes:categories_grid.html.twig' with { 'categories' : topMenuData.categories }  %}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "PrestaShopBundle:Admin/Module:catalog.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/catalog.html.twig");
    }
}
