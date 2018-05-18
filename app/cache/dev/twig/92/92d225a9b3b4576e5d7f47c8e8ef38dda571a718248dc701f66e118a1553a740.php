<?php

/* PrestaShopBundle:Admin:macros.html.twig */
class __TwigTemplate_ac218415ac25a031d121c028ca3ee30f57730630a1e4d688cc679ba8d5ef42cb extends Twig_Template
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
        $__internal_0ed24446b69cbc7bdf1d5152e97237a7c4000ed53259d951876acca843c10331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed24446b69cbc7bdf1d5152e97237a7c4000ed53259d951876acca843c10331->enter($__internal_0ed24446b69cbc7bdf1d5152e97237a7c4000ed53259d951876acca843c10331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:macros.html.twig"));

        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 46
        echo "
";
        // line 54
        echo "
";
        
        $__internal_0ed24446b69cbc7bdf1d5152e97237a7c4000ed53259d951876acca843c10331->leave($__internal_0ed24446b69cbc7bdf1d5152e97237a7c4000ed53259d951876acca843c10331_prof);

    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_847e02bbfae9b9eb2ed4200f4af09706e5f5d7d0e0d035b0d534ed83bebf1dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_847e02bbfae9b9eb2ed4200f4af09706e5f5d7d0e0d035b0d534ed83bebf1dfb->enter($__internal_847e02bbfae9b9eb2ed4200f4af09706e5f5d7d0e0d035b0d534ed83bebf1dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 26
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["name"] ?? $this->getContext($context, "name")), 'label', array("label_attr" => array("tooltip" => ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter(($context["placement"] ?? $this->getContext($context, "placement")), "top")) : ("top")))));
            echo "
";
            
            $__internal_847e02bbfae9b9eb2ed4200f4af09706e5f5d7d0e0d035b0d534ed83bebf1dfb->leave($__internal_847e02bbfae9b9eb2ed4200f4af09706e5f5d7d0e0d035b0d534ed83bebf1dfb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3eff30e62231c9669d6e0b465d1f102f80f54450edbf5f4d3249d47eb888105b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3eff30e62231c9669d6e0b465d1f102f80f54450edbf5f4d3249d47eb888105b->enter($__internal_3eff30e62231c9669d6e0b465d1f102f80f54450edbf5f4d3249d47eb888105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            // line 30
            echo "  ";
            echo twig_escape_filter($this->env, (((array_key_exists("variable", $context) && (twig_length_filter($this->env, ($context["variable"] ?? $this->getContext($context, "variable"))) > 0))) ? (($context["variable"] ?? $this->getContext($context, "variable"))) : (false)), "html", null, true);
            echo "
";
            
            $__internal_3eff30e62231c9669d6e0b465d1f102f80f54450edbf5f4d3249d47eb888105b->leave($__internal_3eff30e62231c9669d6e0b465d1f102f80f54450edbf5f4d3249d47eb888105b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_41feeb27a301d3c32bf3584b183f9bd530f3757e324310017a769d2303910f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_41feeb27a301d3c32bf3584b183f9bd530f3757e324310017a769d2303910f0c->enter($__internal_41feeb27a301d3c32bf3584b183f9bd530f3757e324310017a769d2303910f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter(($context["position"] ?? $this->getContext($context, "position")), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "</i>
  </span>
";
            
            $__internal_41feeb27a301d3c32bf3584b183f9bd530f3757e324310017a769d2303910f0c->leave($__internal_41feeb27a301d3c32bf3584b183f9bd530f3757e324310017a769d2303910f0c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getinfotip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_aee7e5742d17e81248be37cdcf6f682f0329134613139610e28326107d243a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_aee7e5742d17e81248be37cdcf6f682f0329134613139610e28326107d243a2f->enter($__internal_aee7e5742d17e81248be37cdcf6f682f0329134613139610e28326107d243a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_aee7e5742d17e81248be37cdcf6f682f0329134613139610e28326107d243a2f->leave($__internal_aee7e5742d17e81248be37cdcf6f682f0329134613139610e28326107d243a2f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fbeff170df8a3b8df443895faf2bac0e10b17ecb504c0c97fe730895b43702fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fbeff170df8a3b8df443895faf2bac0e10b17ecb504c0c97fe730895b43702fc->enter($__internal_fbeff170df8a3b8df443895faf2bac0e10b17ecb504c0c97fe730895b43702fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 48
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 50
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_fbeff170df8a3b8df443895faf2bac0e10b17ecb504c0c97fe730895b43702fc->leave($__internal_fbeff170df8a3b8df443895faf2bac0e10b17ecb504c0c97fe730895b43702fc_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getlabel_with_help($__label__ = null, $__help__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "help" => $__help__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_634f4215900825df8303119d00c0f35f4f346c9117415a9633ea0c189fee112e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_634f4215900825df8303119d00c0f35f4f346c9117415a9633ea0c189fee112e->enter($__internal_634f4215900825df8303119d00c0f35f4f346c9117415a9633ea0c189fee112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 56
            echo "<label class=\"form-control-label\">
  ";
            // line 57
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "\"
    data-content=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "\">
  </span>
</label>
";
            
            $__internal_634f4215900825df8303119d00c0f35f4f346c9117415a9633ea0c189fee112e->leave($__internal_634f4215900825df8303119d00c0f35f4f346c9117415a9633ea0c189fee112e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 60,  267 => 59,  262 => 57,  259 => 56,  243 => 55,  221 => 50,  217 => 48,  202 => 47,  180 => 42,  176 => 40,  161 => 39,  140 => 35,  133 => 34,  116 => 33,  95 => 30,  80 => 29,  59 => 26,  42 => 25,  34 => 54,  31 => 46,  28 => 38,  25 => 32,  22 => 28,);
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
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {'label_attr': {'tooltip': tooltip, 'tooltip_placement': placement|default('top')}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default('top') }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text)%}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text)%}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help) %}
<label class=\"form-control-label\">
  {{ label }}
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"{{ label }}\"
    data-content=\"{{ help }}\">
  </span>
</label>
{% endmacro %}
", "PrestaShopBundle:Admin:macros.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
