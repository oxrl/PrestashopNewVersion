<?php

/* ::base.html.twig */
class __TwigTemplate_be078feed936b4f1672aca9a5309f0c6a7dd88aca837ee6e33cc01ac44942a2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02235fb4080c8982b576262345f6177c6d7b40195ba15c6b95df54f15a038a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02235fb4080c8982b576262345f6177c6d7b40195ba15c6b95df54f15a038a53->enter($__internal_02235fb4080c8982b576262345f6177c6d7b40195ba15c6b95df54f15a038a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 25
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_02235fb4080c8982b576262345f6177c6d7b40195ba15c6b95df54f15a038a53->leave($__internal_02235fb4080c8982b576262345f6177c6d7b40195ba15c6b95df54f15a038a53_prof);

    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0e20afc91e057a5b86f99ef45e457bd017a11c79091b093a2c7f5fa05e22ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e20afc91e057a5b86f99ef45e457bd017a11c79091b093a2c7f5fa05e22ddd->enter($__internal_c0e20afc91e057a5b86f99ef45e457bd017a11c79091b093a2c7f5fa05e22ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c0e20afc91e057a5b86f99ef45e457bd017a11c79091b093a2c7f5fa05e22ddd->leave($__internal_c0e20afc91e057a5b86f99ef45e457bd017a11c79091b093a2c7f5fa05e22ddd_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4638ed7feda124604fae58c62bae613c5c61d7d091de79a4edc6c08a0f0edb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4638ed7feda124604fae58c62bae613c5c61d7d091de79a4edc6c08a0f0edb83->enter($__internal_4638ed7feda124604fae58c62bae613c5c61d7d091de79a4edc6c08a0f0edb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4638ed7feda124604fae58c62bae613c5c61d7d091de79a4edc6c08a0f0edb83->leave($__internal_4638ed7feda124604fae58c62bae613c5c61d7d091de79a4edc6c08a0f0edb83_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_adc6f7e27b47489bee211bfc8d816041c4bc72b8a1fef60379a0bd1e12443bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc6f7e27b47489bee211bfc8d816041c4bc72b8a1fef60379a0bd1e12443bcf->enter($__internal_adc6f7e27b47489bee211bfc8d816041c4bc72b8a1fef60379a0bd1e12443bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_adc6f7e27b47489bee211bfc8d816041c4bc72b8a1fef60379a0bd1e12443bcf->leave($__internal_adc6f7e27b47489bee211bfc8d816041c4bc72b8a1fef60379a0bd1e12443bcf_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e3c563b1b0e814339a8d8571cc3fcdbb5e632c3aeb39b5dbc4d0c0ef67d80f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3c563b1b0e814339a8d8571cc3fcdbb5e632c3aeb39b5dbc4d0c0ef67d80f7->enter($__internal_2e3c563b1b0e814339a8d8571cc3fcdbb5e632c3aeb39b5dbc4d0c0ef67d80f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e3c563b1b0e814339a8d8571cc3fcdbb5e632c3aeb39b5dbc4d0c0ef67d80f7->leave($__internal_2e3c563b1b0e814339a8d8571cc3fcdbb5e632c3aeb39b5dbc4d0c0ef67d80f7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  82 => 34,  71 => 30,  59 => 29,  50 => 36,  47 => 35,  45 => 34,  38 => 31,  36 => 30,  32 => 29,  26 => 25,);
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\prestashop\\app/Resources\\views/base.html.twig");
    }
}
