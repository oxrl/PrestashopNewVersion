<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3f9fd3ce9f020ce540cdc38276475afb762e787dd74774570586f3cf728e7630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efda60724561bbdeddc9e0606177af09f3ebb4c3ba489abc380a12f6c5fa3020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efda60724561bbdeddc9e0606177af09f3ebb4c3ba489abc380a12f6c5fa3020->enter($__internal_efda60724561bbdeddc9e0606177af09f3ebb4c3ba489abc380a12f6c5fa3020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efda60724561bbdeddc9e0606177af09f3ebb4c3ba489abc380a12f6c5fa3020->leave($__internal_efda60724561bbdeddc9e0606177af09f3ebb4c3ba489abc380a12f6c5fa3020_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e20c62e778e3258f40cb2b0bbefc1fedf46d4d37c6022f1019cb4be3dfb7839f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20c62e778e3258f40cb2b0bbefc1fedf46d4d37c6022f1019cb4be3dfb7839f->enter($__internal_e20c62e778e3258f40cb2b0bbefc1fedf46d4d37c6022f1019cb4be3dfb7839f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e20c62e778e3258f40cb2b0bbefc1fedf46d4d37c6022f1019cb4be3dfb7839f->leave($__internal_e20c62e778e3258f40cb2b0bbefc1fedf46d4d37c6022f1019cb4be3dfb7839f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_955973488ac7680b4dcd46a2d32772ea82f36df1593f6a21801132e5a7a722bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955973488ac7680b4dcd46a2d32772ea82f36df1593f6a21801132e5a7a722bb->enter($__internal_955973488ac7680b4dcd46a2d32772ea82f36df1593f6a21801132e5a7a722bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_955973488ac7680b4dcd46a2d32772ea82f36df1593f6a21801132e5a7a722bb->leave($__internal_955973488ac7680b4dcd46a2d32772ea82f36df1593f6a21801132e5a7a722bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3f98e7f5d194cedb8e0a05a54071d62a2d18ccefaac767ba270eb270eec3fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f98e7f5d194cedb8e0a05a54071d62a2d18ccefaac767ba270eb270eec3fbf->enter($__internal_d3f98e7f5d194cedb8e0a05a54071d62a2d18ccefaac767ba270eb270eec3fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d3f98e7f5d194cedb8e0a05a54071d62a2d18ccefaac767ba270eb270eec3fbf->leave($__internal_d3f98e7f5d194cedb8e0a05a54071d62a2d18ccefaac767ba270eb270eec3fbf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\prestashop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
