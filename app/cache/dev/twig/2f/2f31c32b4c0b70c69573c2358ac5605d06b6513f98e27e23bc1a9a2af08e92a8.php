<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9f6168dfab313a6443fccaf23c3e02538ed5667de2c1b6e20e7f377828468909 extends Twig_Template
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
        $__internal_a5b559fd039810aa100a058c57b54eae5509376ce0d4c703025cf3a9d695dbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b559fd039810aa100a058c57b54eae5509376ce0d4c703025cf3a9d695dbb9->enter($__internal_a5b559fd039810aa100a058c57b54eae5509376ce0d4c703025cf3a9d695dbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5b559fd039810aa100a058c57b54eae5509376ce0d4c703025cf3a9d695dbb9->leave($__internal_a5b559fd039810aa100a058c57b54eae5509376ce0d4c703025cf3a9d695dbb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cde765de546892f184c8c9e270dcd59a4f219c59fdd08315e4ef28166945dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cde765de546892f184c8c9e270dcd59a4f219c59fdd08315e4ef28166945dbc->enter($__internal_9cde765de546892f184c8c9e270dcd59a4f219c59fdd08315e4ef28166945dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9cde765de546892f184c8c9e270dcd59a4f219c59fdd08315e4ef28166945dbc->leave($__internal_9cde765de546892f184c8c9e270dcd59a4f219c59fdd08315e4ef28166945dbc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_51fc703096d53f16e0bb297a75b379ab082b7ec2712377081e2550974c1d8164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fc703096d53f16e0bb297a75b379ab082b7ec2712377081e2550974c1d8164->enter($__internal_51fc703096d53f16e0bb297a75b379ab082b7ec2712377081e2550974c1d8164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_51fc703096d53f16e0bb297a75b379ab082b7ec2712377081e2550974c1d8164->leave($__internal_51fc703096d53f16e0bb297a75b379ab082b7ec2712377081e2550974c1d8164_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_24c754f4470f1b99397f11ba0addf4a0149733ef19cb5b71691a93734a266a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c754f4470f1b99397f11ba0addf4a0149733ef19cb5b71691a93734a266a59->enter($__internal_24c754f4470f1b99397f11ba0addf4a0149733ef19cb5b71691a93734a266a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_24c754f4470f1b99397f11ba0addf4a0149733ef19cb5b71691a93734a266a59->leave($__internal_24c754f4470f1b99397f11ba0addf4a0149733ef19cb5b71691a93734a266a59_prof);

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
