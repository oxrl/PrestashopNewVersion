<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d6880a696d20e889a897aa3cd6577bfbef9c4423246476d986542d57e62b114e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4edb99a74db89611e8194c36ad14529990d0bd1ce2a0c9e346a0770be302874e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edb99a74db89611e8194c36ad14529990d0bd1ce2a0c9e346a0770be302874e->enter($__internal_4edb99a74db89611e8194c36ad14529990d0bd1ce2a0c9e346a0770be302874e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4edb99a74db89611e8194c36ad14529990d0bd1ce2a0c9e346a0770be302874e->leave($__internal_4edb99a74db89611e8194c36ad14529990d0bd1ce2a0c9e346a0770be302874e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f3fcddc9986351d2c3a1086fc0f823984c4e42a066d1c583d09192803a4305c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3fcddc9986351d2c3a1086fc0f823984c4e42a066d1c583d09192803a4305c->enter($__internal_8f3fcddc9986351d2c3a1086fc0f823984c4e42a066d1c583d09192803a4305c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f3fcddc9986351d2c3a1086fc0f823984c4e42a066d1c583d09192803a4305c->leave($__internal_8f3fcddc9986351d2c3a1086fc0f823984c4e42a066d1c583d09192803a4305c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b9f3190355978099acd8ae44c8b45fcd652c3e6661433a2e24b8ef25b6e68a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9f3190355978099acd8ae44c8b45fcd652c3e6661433a2e24b8ef25b6e68a8->enter($__internal_6b9f3190355978099acd8ae44c8b45fcd652c3e6661433a2e24b8ef25b6e68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b9f3190355978099acd8ae44c8b45fcd652c3e6661433a2e24b8ef25b6e68a8->leave($__internal_6b9f3190355978099acd8ae44c8b45fcd652c3e6661433a2e24b8ef25b6e68a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_893916c05407c2fa2a19f2b98dce824fabec8908fb14beac189e50ffba47d014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893916c05407c2fa2a19f2b98dce824fabec8908fb14beac189e50ffba47d014->enter($__internal_893916c05407c2fa2a19f2b98dce824fabec8908fb14beac189e50ffba47d014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_893916c05407c2fa2a19f2b98dce824fabec8908fb14beac189e50ffba47d014->leave($__internal_893916c05407c2fa2a19f2b98dce824fabec8908fb14beac189e50ffba47d014_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\prestashop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
