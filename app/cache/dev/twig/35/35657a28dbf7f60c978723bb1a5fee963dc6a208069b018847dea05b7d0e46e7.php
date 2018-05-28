<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig */
class __TwigTemplate_441a032d458610ad032770a32ef3226ad9b67a46879194e9418a25e4767bae30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50eb0b9f3e323f7cb507280d9758b090f496b2bfbb1d20f579333764945037a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50eb0b9f3e323f7cb507280d9758b090f496b2bfbb1d20f579333764945037a3->enter($__internal_50eb0b9f3e323f7cb507280d9758b090f496b2bfbb1d20f579333764945037a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig"));

        // line 27
        $this->displayBlock('form_widget', $context, $blocks);
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 51
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 58
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 63
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 71
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 101
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 114
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 120
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 125
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 138
        $this->displayBlock('date_widget', $context, $blocks);
        // line 152
        $this->displayBlock('time_widget', $context, $blocks);
        // line 163
        $this->displayBlock('number_widget', $context, $blocks);
        // line 169
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 174
        $this->displayBlock('money_widget', $context, $blocks);
        // line 178
        $this->displayBlock('url_widget', $context, $blocks);
        // line 183
        $this->displayBlock('search_widget', $context, $blocks);
        // line 188
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 193
        $this->displayBlock('password_widget', $context, $blocks);
        // line 198
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 203
        $this->displayBlock('email_widget', $context, $blocks);
        // line 208
        $this->displayBlock('button_widget', $context, $blocks);
        // line 222
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 227
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 234
        $this->displayBlock('form_label', $context, $blocks);
        // line 269
        $this->displayBlock('button_label', $context, $blocks);
        // line 273
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 281
        $this->displayBlock('form_row', $context, $blocks);
        // line 289
        $this->displayBlock('button_row', $context, $blocks);
        // line 295
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 301
        $this->displayBlock('form', $context, $blocks);
        // line 307
        $this->displayBlock('form_start', $context, $blocks);
        // line 321
        $this->displayBlock('form_end', $context, $blocks);
        // line 328
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 332
        $this->displayBlock('form_errors', $context, $blocks);
        // line 342
        $this->displayBlock('form_rest', $context, $blocks);
        // line 349
        echo "
";
        // line 352
        $this->displayBlock('form_rows', $context, $blocks);
        // line 358
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 375
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 389
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 403
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_50eb0b9f3e323f7cb507280d9758b090f496b2bfbb1d20f579333764945037a3->leave($__internal_50eb0b9f3e323f7cb507280d9758b090f496b2bfbb1d20f579333764945037a3_prof);

    }

    // line 27
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_a3a4de32f17476a3f4601123ffaac238ea589f34a37fdd810aa30ce63b613922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a4de32f17476a3f4601123ffaac238ea589f34a37fdd810aa30ce63b613922->enter($__internal_a3a4de32f17476a3f4601123ffaac238ea589f34a37fdd810aa30ce63b613922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 28
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 29
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_a3a4de32f17476a3f4601123ffaac238ea589f34a37fdd810aa30ce63b613922->leave($__internal_a3a4de32f17476a3f4601123ffaac238ea589f34a37fdd810aa30ce63b613922_prof);

    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4ad8ca34313450267ca69da419245d36d41b3fa7c2c9b25e01f5e5f371c23bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad8ca34313450267ca69da419245d36d41b3fa7c2c9b25e01f5e5f371c23bfb->enter($__internal_4ad8ca34313450267ca69da419245d36d41b3fa7c2c9b25e01f5e5f371c23bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 36
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 37
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
  ";
        // line 38
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 38)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        
        $__internal_4ad8ca34313450267ca69da419245d36d41b3fa7c2c9b25e01f5e5f371c23bfb->leave($__internal_4ad8ca34313450267ca69da419245d36d41b3fa7c2c9b25e01f5e5f371c23bfb_prof);

    }

    // line 41
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_a8f553920596d0433e0facf1f960ae8d319247ae5145e2abdcb34a391c20abbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f553920596d0433e0facf1f960ae8d319247ae5145e2abdcb34a391c20abbd->enter($__internal_a8f553920596d0433e0facf1f960ae8d319247ae5145e2abdcb34a391c20abbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 42
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 43
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 46
        $this->displayBlock("form_rows", $context, $blocks);
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 48
        echo "</div>";
        
        $__internal_a8f553920596d0433e0facf1f960ae8d319247ae5145e2abdcb34a391c20abbd->leave($__internal_a8f553920596d0433e0facf1f960ae8d319247ae5145e2abdcb34a391c20abbd_prof);

    }

    // line 51
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_f825195260047eac278a73381e4015d6a97fbe7f22300c7a1adbca92a42fa951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f825195260047eac278a73381e4015d6a97fbe7f22300c7a1adbca92a42fa951->enter($__internal_f825195260047eac278a73381e4015d6a97fbe7f22300c7a1adbca92a42fa951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 52
        if (array_key_exists("prototype", $context)) {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 55
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_f825195260047eac278a73381e4015d6a97fbe7f22300c7a1adbca92a42fa951->leave($__internal_f825195260047eac278a73381e4015d6a97fbe7f22300c7a1adbca92a42fa951_prof);

    }

    // line 58
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9eda2a400e0392fb0772f22c3cac000dd96fda3eb0face63523b9b301f1f7cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eda2a400e0392fb0772f22c3cac000dd96fda3eb0face63523b9b301f1f7cd4->enter($__internal_9eda2a400e0392fb0772f22c3cac000dd96fda3eb0face63523b9b301f1f7cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 59
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
  ";
        // line 60
        $this->loadTemplate("PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 60)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        
        $__internal_9eda2a400e0392fb0772f22c3cac000dd96fda3eb0face63523b9b301f1f7cd4->leave($__internal_9eda2a400e0392fb0772f22c3cac000dd96fda3eb0face63523b9b301f1f7cd4_prof);

    }

    // line 63
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_4ae03ae5ff5e157643f19d1131c5bbec3bb2978d01f113bddf8c618d6763b293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae03ae5ff5e157643f19d1131c5bbec3bb2978d01f113bddf8c618d6763b293->enter($__internal_4ae03ae5ff5e157643f19d1131c5bbec3bb2978d01f113bddf8c618d6763b293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 64
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 65
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 67
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_4ae03ae5ff5e157643f19d1131c5bbec3bb2978d01f113bddf8c618d6763b293->leave($__internal_4ae03ae5ff5e157643f19d1131c5bbec3bb2978d01f113bddf8c618d6763b293_prof);

    }

    // line 71
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f71bf9b2499b704e803b24925bffa86c174a7a7558c50e51f7d5b57a632cc88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71bf9b2499b704e803b24925bffa86c174a7a7558c50e51f7d5b57a632cc88d->enter($__internal_f71bf9b2499b704e803b24925bffa86c174a7a7558c50e51f7d5b57a632cc88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 72
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</div>";
        
        $__internal_f71bf9b2499b704e803b24925bffa86c174a7a7558c50e51f7d5b57a632cc88d->leave($__internal_f71bf9b2499b704e803b24925bffa86c174a7a7558c50e51f7d5b57a632cc88d_prof);

    }

    // line 80
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b54543c6e3059ad3bfa3a12877cff780733472de250d419ceceee8cd35209454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54543c6e3059ad3bfa3a12877cff780733472de250d419ceceee8cd35209454->enter($__internal_b54543c6e3059ad3bfa3a12877cff780733472de250d419ceceee8cd35209454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 81
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 82
            $context["required"] = false;
        }
        // line 84
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 85
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 86
            echo "<option
        value=\"\"";
            // line 87
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 89
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 90
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 91
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 92
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 93
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 96
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 97
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 98
        echo "</select>";
        
        $__internal_b54543c6e3059ad3bfa3a12877cff780733472de250d419ceceee8cd35209454->leave($__internal_b54543c6e3059ad3bfa3a12877cff780733472de250d419ceceee8cd35209454_prof);

    }

    // line 101
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_dbd844d41efe2bcc28fb466d5740a03de0934fd63b4ef4ad2e8cec19103a39cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd844d41efe2bcc28fb466d5740a03de0934fd63b4ef4ad2e8cec19103a39cc->enter($__internal_dbd844d41efe2bcc28fb466d5740a03de0934fd63b4ef4ad2e8cec19103a39cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 103
            if (twig_test_iterable($context["choice"])) {
                // line 104
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 105
                $context["options"] = $context["choice"];
                // line 106
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 107
                echo "</optgroup>";
            } else {
                // line 109
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dbd844d41efe2bcc28fb466d5740a03de0934fd63b4ef4ad2e8cec19103a39cc->leave($__internal_dbd844d41efe2bcc28fb466d5740a03de0934fd63b4ef4ad2e8cec19103a39cc_prof);

    }

    // line 114
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1ee84253383edc4dbce25ef8aca8bba6e8002756a246ccf00fd987afff5a4633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee84253383edc4dbce25ef8aca8bba6e8002756a246ccf00fd987afff5a4633->enter($__internal_1ee84253383edc4dbce25ef8aca8bba6e8002756a246ccf00fd987afff5a4633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 115
        $context["switch"] = ((array_key_exists("switch", $context)) ? (_twig_default_filter(($context["switch"] ?? $this->getContext($context, "switch")), "")) : (""));
        // line 116
        echo "<input type=\"checkbox\"
         ";
        // line 117
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "data-toggle=\"switch\"";
        }
        echo " ";
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["switch"] ?? $this->getContext($context, "switch")), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_1ee84253383edc4dbce25ef8aca8bba6e8002756a246ccf00fd987afff5a4633->leave($__internal_1ee84253383edc4dbce25ef8aca8bba6e8002756a246ccf00fd987afff5a4633_prof);

    }

    // line 120
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_35a040b71e8760edc3e0724803acd3189f37adfd69c0ae99b3d8753db6545b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a040b71e8760edc3e0724803acd3189f37adfd69c0ae99b3d8753db6545b34->enter($__internal_35a040b71e8760edc3e0724803acd3189f37adfd69c0ae99b3d8753db6545b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 121
        echo "<input
    type=\"radio\" ";
        // line 122
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_35a040b71e8760edc3e0724803acd3189f37adfd69c0ae99b3d8753db6545b34->leave($__internal_35a040b71e8760edc3e0724803acd3189f37adfd69c0ae99b3d8753db6545b34_prof);

    }

    // line 125
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_dbb27a286d8f7726bbeb2cd84f00788acf838b0f90f7b6945a586ff297aa35be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb27a286d8f7726bbeb2cd84f00788acf838b0f90f7b6945a586ff297aa35be->enter($__internal_dbb27a286d8f7726bbeb2cd84f00788acf838b0f90f7b6945a586ff297aa35be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 126
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 127
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 129
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 134
            echo "</div>";
        }
        
        $__internal_dbb27a286d8f7726bbeb2cd84f00788acf838b0f90f7b6945a586ff297aa35be->leave($__internal_dbb27a286d8f7726bbeb2cd84f00788acf838b0f90f7b6945a586ff297aa35be_prof);

    }

    // line 138
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c2b209c7d176743e997e7b81fac87dc822c1c17b4af5b1772ed8c61389075c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b209c7d176743e997e7b81fac87dc822c1c17b4af5b1772ed8c61389075c7f->enter($__internal_c2b209c7d176743e997e7b81fac87dc822c1c17b4af5b1772ed8c61389075c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 139
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 140
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 144
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 145
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 146
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 148
            echo "</div>";
        }
        
        $__internal_c2b209c7d176743e997e7b81fac87dc822c1c17b4af5b1772ed8c61389075c7f->leave($__internal_c2b209c7d176743e997e7b81fac87dc822c1c17b4af5b1772ed8c61389075c7f_prof);

    }

    // line 152
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_77d4071056d3b3731b249f2d06ea50744e72bd2ba7e6eb6647b5fb56660245c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d4071056d3b3731b249f2d06ea50744e72bd2ba7e6eb6647b5fb56660245c0->enter($__internal_77d4071056d3b3731b249f2d06ea50744e72bd2ba7e6eb6647b5fb56660245c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 153
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 154
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 156
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 157
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
      ";
            // line 158
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 159
            echo "    </div>";
        }
        
        $__internal_77d4071056d3b3731b249f2d06ea50744e72bd2ba7e6eb6647b5fb56660245c0->leave($__internal_77d4071056d3b3731b249f2d06ea50744e72bd2ba7e6eb6647b5fb56660245c0_prof);

    }

    // line 163
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_cb704c804003c9dd8d891b3f02a84ceb87af2ff7c9287632957d47927a74c9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb704c804003c9dd8d891b3f02a84ceb87af2ff7c9287632957d47927a74c9b1->enter($__internal_cb704c804003c9dd8d891b3f02a84ceb87af2ff7c9287632957d47927a74c9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cb704c804003c9dd8d891b3f02a84ceb87af2ff7c9287632957d47927a74c9b1->leave($__internal_cb704c804003c9dd8d891b3f02a84ceb87af2ff7c9287632957d47927a74c9b1_prof);

    }

    // line 169
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_efe41f5f7b1bfde3f72058217467c215dad265cbe3b34529981d1e8dc4e07d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe41f5f7b1bfde3f72058217467c215dad265cbe3b34529981d1e8dc4e07d55->enter($__internal_efe41f5f7b1bfde3f72058217467c215dad265cbe3b34529981d1e8dc4e07d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_efe41f5f7b1bfde3f72058217467c215dad265cbe3b34529981d1e8dc4e07d55->leave($__internal_efe41f5f7b1bfde3f72058217467c215dad265cbe3b34529981d1e8dc4e07d55_prof);

    }

    // line 174
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_124f7c7b5118711c3e507b3db1f18b1a59bf147ce6e2fe58527761f09ba7d01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124f7c7b5118711c3e507b3db1f18b1a59bf147ce6e2fe58527761f09ba7d01b->enter($__internal_124f7c7b5118711c3e507b3db1f18b1a59bf147ce6e2fe58527761f09ba7d01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 175
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_124f7c7b5118711c3e507b3db1f18b1a59bf147ce6e2fe58527761f09ba7d01b->leave($__internal_124f7c7b5118711c3e507b3db1f18b1a59bf147ce6e2fe58527761f09ba7d01b_prof);

    }

    // line 178
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_ecaeada064342d2666b0c2751869df4c12707106f48ce05b7e7c8fe44b6d55c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecaeada064342d2666b0c2751869df4c12707106f48ce05b7e7c8fe44b6d55c2->enter($__internal_ecaeada064342d2666b0c2751869df4c12707106f48ce05b7e7c8fe44b6d55c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ecaeada064342d2666b0c2751869df4c12707106f48ce05b7e7c8fe44b6d55c2->leave($__internal_ecaeada064342d2666b0c2751869df4c12707106f48ce05b7e7c8fe44b6d55c2_prof);

    }

    // line 183
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_40864870b99f403eea7068e36de0f141e536dff0652042c069c5464fe752e321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40864870b99f403eea7068e36de0f141e536dff0652042c069c5464fe752e321->enter($__internal_40864870b99f403eea7068e36de0f141e536dff0652042c069c5464fe752e321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_40864870b99f403eea7068e36de0f141e536dff0652042c069c5464fe752e321->leave($__internal_40864870b99f403eea7068e36de0f141e536dff0652042c069c5464fe752e321_prof);

    }

    // line 188
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ec16f8f349d01f5498fc5ef7ff83e061fe7aded02daaa09e7dfd39cc5502ea3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec16f8f349d01f5498fc5ef7ff83e061fe7aded02daaa09e7dfd39cc5502ea3f->enter($__internal_ec16f8f349d01f5498fc5ef7ff83e061fe7aded02daaa09e7dfd39cc5502ea3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_ec16f8f349d01f5498fc5ef7ff83e061fe7aded02daaa09e7dfd39cc5502ea3f->leave($__internal_ec16f8f349d01f5498fc5ef7ff83e061fe7aded02daaa09e7dfd39cc5502ea3f_prof);

    }

    // line 193
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_8bdcd68a47523d8f9e512ae8bb22cfef6b53d9fecae65ee7d5fcb86a07607968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdcd68a47523d8f9e512ae8bb22cfef6b53d9fecae65ee7d5fcb86a07607968->enter($__internal_8bdcd68a47523d8f9e512ae8bb22cfef6b53d9fecae65ee7d5fcb86a07607968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8bdcd68a47523d8f9e512ae8bb22cfef6b53d9fecae65ee7d5fcb86a07607968->leave($__internal_8bdcd68a47523d8f9e512ae8bb22cfef6b53d9fecae65ee7d5fcb86a07607968_prof);

    }

    // line 198
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_71378d737d460992f2cbfdc92e8f5125b738cd1104c7dce2073ac013bf959038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71378d737d460992f2cbfdc92e8f5125b738cd1104c7dce2073ac013bf959038->enter($__internal_71378d737d460992f2cbfdc92e8f5125b738cd1104c7dce2073ac013bf959038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_71378d737d460992f2cbfdc92e8f5125b738cd1104c7dce2073ac013bf959038->leave($__internal_71378d737d460992f2cbfdc92e8f5125b738cd1104c7dce2073ac013bf959038_prof);

    }

    // line 203
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_497ac8841224ced85f658cc7ec0c49e7c354b35899a200b853e78998bff4c78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497ac8841224ced85f658cc7ec0c49e7c354b35899a200b853e78998bff4c78a->enter($__internal_497ac8841224ced85f658cc7ec0c49e7c354b35899a200b853e78998bff4c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_497ac8841224ced85f658cc7ec0c49e7c354b35899a200b853e78998bff4c78a->leave($__internal_497ac8841224ced85f658cc7ec0c49e7c354b35899a200b853e78998bff4c78a_prof);

    }

    // line 208
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9b4566a93625aed2c4d7fc985f74dbabbf72ad8c4088fc67bcc6d53f64bdb1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4566a93625aed2c4d7fc985f74dbabbf72ad8c4088fc67bcc6d53f64bdb1cf->enter($__internal_9b4566a93625aed2c4d7fc985f74dbabbf72ad8c4088fc67bcc6d53f64bdb1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 209
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 210
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 211
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 213
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 216
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 219
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo "</button>";
        
        $__internal_9b4566a93625aed2c4d7fc985f74dbabbf72ad8c4088fc67bcc6d53f64bdb1cf->leave($__internal_9b4566a93625aed2c4d7fc985f74dbabbf72ad8c4088fc67bcc6d53f64bdb1cf_prof);

    }

    // line 222
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_93aefa25b315362dff88fa70aa0f30edb2a5a3b108acafeb996413fe09cd2de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93aefa25b315362dff88fa70aa0f30edb2a5a3b108acafeb996413fe09cd2de8->enter($__internal_93aefa25b315362dff88fa70aa0f30edb2a5a3b108acafeb996413fe09cd2de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 223
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 224
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_93aefa25b315362dff88fa70aa0f30edb2a5a3b108acafeb996413fe09cd2de8->leave($__internal_93aefa25b315362dff88fa70aa0f30edb2a5a3b108acafeb996413fe09cd2de8_prof);

    }

    // line 227
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_03dfd420dc0ac5784d7abd4c996deefd4e79f760e3efcaa8fee37cc06c185e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dfd420dc0ac5784d7abd4c996deefd4e79f760e3efcaa8fee37cc06c185e39->enter($__internal_03dfd420dc0ac5784d7abd4c996deefd4e79f760e3efcaa8fee37cc06c185e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 228
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 229
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_03dfd420dc0ac5784d7abd4c996deefd4e79f760e3efcaa8fee37cc06c185e39->leave($__internal_03dfd420dc0ac5784d7abd4c996deefd4e79f760e3efcaa8fee37cc06c185e39_prof);

    }

    // line 234
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8cfa6c493acef65993e4c4dae81ea178204fea3907cf5f83d58ccb0ff0729f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfa6c493acef65993e4c4dae81ea178204fea3907cf5f83d58ccb0ff0729f22->enter($__internal_8cfa6c493acef65993e4c4dae81ea178204fea3907cf5f83d58ccb0ff0729f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 235
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 236
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 237
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 239
            echo "    ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 240
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 242
            echo "    ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 243
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 244
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 245
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 246
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 249
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 252
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))));
            echo "
      ";
            // line 253
            if ($this->getAttribute(($context["label_attr"] ?? null), "tooltip", array(), "array", true, true)) {
                // line 254
                echo "        ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip_placement", array(), "array")) : ("top"));
                // line 255
                echo "        <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
           title=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip", array(), "array"), "html", null, true);
                echo "\"></i>
      ";
            }
            // line 258
            echo "
      ";
            // line 259
            if ($this->getAttribute(($context["label_attr"] ?? null), "popover", array(), "array", true, true)) {
                // line 260
                echo "        ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "popover_placement", array(), "array")) : ("top"));
                // line 261
                echo "        <span class=\"help-box\" data-toggle=\"popover\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
           data-content=\"";
                // line 262
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "popover", array(), "array"), "html", null, true);
                echo "\"></span>
      ";
            }
            // line 264
            echo "    </label>";
        }
        
        $__internal_8cfa6c493acef65993e4c4dae81ea178204fea3907cf5f83d58ccb0ff0729f22->leave($__internal_8cfa6c493acef65993e4c4dae81ea178204fea3907cf5f83d58ccb0ff0729f22_prof);

    }

    // line 269
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_c330ee6526263711d1391feae144eae4c7163f4d850b965008dcaa007b97d6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c330ee6526263711d1391feae144eae4c7163f4d850b965008dcaa007b97d6a0->enter($__internal_c330ee6526263711d1391feae144eae4c7163f4d850b965008dcaa007b97d6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_c330ee6526263711d1391feae144eae4c7163f4d850b965008dcaa007b97d6a0->leave($__internal_c330ee6526263711d1391feae144eae4c7163f4d850b965008dcaa007b97d6a0_prof);

    }

    // line 273
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_87d49771ec6316a5f066a57ce1fb0a485756b660796789a17b67ea0c2535c273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d49771ec6316a5f066a57ce1fb0a485756b660796789a17b67ea0c2535c273->enter($__internal_87d49771ec6316a5f066a57ce1fb0a485756b660796789a17b67ea0c2535c273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 278
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_87d49771ec6316a5f066a57ce1fb0a485756b660796789a17b67ea0c2535c273->leave($__internal_87d49771ec6316a5f066a57ce1fb0a485756b660796789a17b67ea0c2535c273_prof);

    }

    // line 281
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_58c49689b617adf82449210c221cb1df22ea5895877353dd287ce665fb47bd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c49689b617adf82449210c221cb1df22ea5895877353dd287ce665fb47bd0f->enter($__internal_58c49689b617adf82449210c221cb1df22ea5895877353dd287ce665fb47bd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 282
        echo "<div>";
        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 286
        echo "</div>";
        
        $__internal_58c49689b617adf82449210c221cb1df22ea5895877353dd287ce665fb47bd0f->leave($__internal_58c49689b617adf82449210c221cb1df22ea5895877353dd287ce665fb47bd0f_prof);

    }

    // line 289
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8d23fad2e10ea36f13d3f462ac84a1989a5f1fc6b9bc54ed1ca28f2f729b31db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d23fad2e10ea36f13d3f462ac84a1989a5f1fc6b9bc54ed1ca28f2f729b31db->enter($__internal_8d23fad2e10ea36f13d3f462ac84a1989a5f1fc6b9bc54ed1ca28f2f729b31db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 290
        echo "<div>";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 292
        echo "</div>";
        
        $__internal_8d23fad2e10ea36f13d3f462ac84a1989a5f1fc6b9bc54ed1ca28f2f729b31db->leave($__internal_8d23fad2e10ea36f13d3f462ac84a1989a5f1fc6b9bc54ed1ca28f2f729b31db_prof);

    }

    // line 295
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_aac206f662eab65f7dc425b407b202bc616a6b1c3122593bce48fffced058ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac206f662eab65f7dc425b407b202bc616a6b1c3122593bce48fffced058ecc->enter($__internal_aac206f662eab65f7dc425b407b202bc616a6b1c3122593bce48fffced058ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 296
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_aac206f662eab65f7dc425b407b202bc616a6b1c3122593bce48fffced058ecc->leave($__internal_aac206f662eab65f7dc425b407b202bc616a6b1c3122593bce48fffced058ecc_prof);

    }

    // line 301
    public function block_form($context, array $blocks = array())
    {
        $__internal_46703e81b3db5f867682e1a2b52b2146f63144da52d6ca6ecf020a9d0642c0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46703e81b3db5f867682e1a2b52b2146f63144da52d6ca6ecf020a9d0642c0e6->enter($__internal_46703e81b3db5f867682e1a2b52b2146f63144da52d6ca6ecf020a9d0642c0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 302
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 303
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 304
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_46703e81b3db5f867682e1a2b52b2146f63144da52d6ca6ecf020a9d0642c0e6->leave($__internal_46703e81b3db5f867682e1a2b52b2146f63144da52d6ca6ecf020a9d0642c0e6_prof);

    }

    // line 307
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_554796bfbc1b14b41e24891a3d95e97d9069be73d31856e65560dc3690ac5a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554796bfbc1b14b41e24891a3d95e97d9069be73d31856e65560dc3690ac5a91->enter($__internal_554796bfbc1b14b41e24891a3d95e97d9069be73d31856e65560dc3690ac5a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 308
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 309
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 310
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 312
            $context["form_method"] = "POST";
        }
        // line 314
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\"
        method=\"";
        // line 315
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 316
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 317
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_554796bfbc1b14b41e24891a3d95e97d9069be73d31856e65560dc3690ac5a91->leave($__internal_554796bfbc1b14b41e24891a3d95e97d9069be73d31856e65560dc3690ac5a91_prof);

    }

    // line 321
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_2c60080936f4698ae78259499b11c92a0926b719f4459f7479c7e378b3e871dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c60080936f4698ae78259499b11c92a0926b719f4459f7479c7e378b3e871dd->enter($__internal_2c60080936f4698ae78259499b11c92a0926b719f4459f7479c7e378b3e871dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 322
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 323
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 325
        echo "</form>";
        
        $__internal_2c60080936f4698ae78259499b11c92a0926b719f4459f7479c7e378b3e871dd->leave($__internal_2c60080936f4698ae78259499b11c92a0926b719f4459f7479c7e378b3e871dd_prof);

    }

    // line 328
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_e6896d9c0422c7b852a75348ee96af8233dcad01c36a492828107116b390b7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6896d9c0422c7b852a75348ee96af8233dcad01c36a492828107116b390b7f8->enter($__internal_e6896d9c0422c7b852a75348ee96af8233dcad01c36a492828107116b390b7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 329
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_e6896d9c0422c7b852a75348ee96af8233dcad01c36a492828107116b390b7f8->leave($__internal_e6896d9c0422c7b852a75348ee96af8233dcad01c36a492828107116b390b7f8_prof);

    }

    // line 332
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_aebbd037846bca0a9f07b95c408049b3cd721d2f409a2ec06daefb1026fde9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebbd037846bca0a9f07b95c408049b3cd721d2f409a2ec06daefb1026fde9dd->enter($__internal_aebbd037846bca0a9f07b95c408049b3cd721d2f409a2ec06daefb1026fde9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 333
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 334
            echo "<ul>";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 336
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "</ul>";
        }
        
        $__internal_aebbd037846bca0a9f07b95c408049b3cd721d2f409a2ec06daefb1026fde9dd->leave($__internal_aebbd037846bca0a9f07b95c408049b3cd721d2f409a2ec06daefb1026fde9dd_prof);

    }

    // line 342
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_bc9031bcb81203802b9fa3babb159e76134256bce47ff8d33b4aab7892ecdd36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9031bcb81203802b9fa3babb159e76134256bce47ff8d33b4aab7892ecdd36->enter($__internal_bc9031bcb81203802b9fa3babb159e76134256bce47ff8d33b4aab7892ecdd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 344
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 345
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bc9031bcb81203802b9fa3babb159e76134256bce47ff8d33b4aab7892ecdd36->leave($__internal_bc9031bcb81203802b9fa3babb159e76134256bce47ff8d33b4aab7892ecdd36_prof);

    }

    // line 352
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_93256757307c1682eb6bb105bf02bd4106ce5965d7759c4b8fd1cdc10cd54f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93256757307c1682eb6bb105bf02bd4106ce5965d7759c4b8fd1cdc10cd54f2b->enter($__internal_93256757307c1682eb6bb105bf02bd4106ce5965d7759c4b8fd1cdc10cd54f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 354
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_93256757307c1682eb6bb105bf02bd4106ce5965d7759c4b8fd1cdc10cd54f2b->leave($__internal_93256757307c1682eb6bb105bf02bd4106ce5965d7759c4b8fd1cdc10cd54f2b_prof);

    }

    // line 358
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_b176e374045b05ec49bc4887cd8334685fe5c4b7bee3722c88de623734a0bf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b176e374045b05ec49bc4887cd8334685fe5c4b7bee3722c88de623734a0bf89->enter($__internal_b176e374045b05ec49bc4887cd8334685fe5c4b7bee3722c88de623734a0bf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 359
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 360
        if ((($context["read_only"] ?? $this->getContext($context, "read_only")) &&  !$this->getAttribute(($context["attr"] ?? null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 361
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 362
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 364
            echo " ";
            // line 365
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 367
$context["attrvalue"] === true)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 369
$context["attrvalue"] === false)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b176e374045b05ec49bc4887cd8334685fe5c4b7bee3722c88de623734a0bf89->leave($__internal_b176e374045b05ec49bc4887cd8334685fe5c4b7bee3722c88de623734a0bf89_prof);

    }

    // line 375
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_32d0e7213726b8703f42a78305786103ea74136e416539ab77a11db409565cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d0e7213726b8703f42a78305786103ea74136e416539ab77a11db409565cc8->enter($__internal_32d0e7213726b8703f42a78305786103ea74136e416539ab77a11db409565cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 376
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 378
            echo " ";
            // line 379
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 380
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 381
$context["attrvalue"] === true)) {
                // line 382
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 383
$context["attrvalue"] === false)) {
                // line 384
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_32d0e7213726b8703f42a78305786103ea74136e416539ab77a11db409565cc8->leave($__internal_32d0e7213726b8703f42a78305786103ea74136e416539ab77a11db409565cc8_prof);

    }

    // line 389
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_1c38398919a07d28bea264d5acfb055cdc85008681cd4d725a65423b5eb8d2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c38398919a07d28bea264d5acfb055cdc85008681cd4d725a65423b5eb8d2b1->enter($__internal_1c38398919a07d28bea264d5acfb055cdc85008681cd4d725a65423b5eb8d2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 390
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 392
            echo " ";
            // line 393
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 394
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 395
$context["attrvalue"] === true)) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 397
$context["attrvalue"] === false)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1c38398919a07d28bea264d5acfb055cdc85008681cd4d725a65423b5eb8d2b1->leave($__internal_1c38398919a07d28bea264d5acfb055cdc85008681cd4d725a65423b5eb8d2b1_prof);

    }

    // line 403
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_559180182d8cf632a702a86b78f3540d0e0eda4415b65b5a4fd826cfd455a3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559180182d8cf632a702a86b78f3540d0e0eda4415b65b5a4fd826cfd455a3b7->enter($__internal_559180182d8cf632a702a86b78f3540d0e0eda4415b65b5a4fd826cfd455a3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 405
            echo " ";
            // line 406
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 407
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 408
$context["attrvalue"] === true)) {
                // line 409
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 410
$context["attrvalue"] === false)) {
                // line 411
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_559180182d8cf632a702a86b78f3540d0e0eda4415b65b5a4fd826cfd455a3b7->leave($__internal_559180182d8cf632a702a86b78f3540d0e0eda4415b65b5a4fd826cfd455a3b7_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1335 => 411,  1333 => 410,  1328 => 409,  1326 => 408,  1321 => 407,  1319 => 406,  1317 => 405,  1313 => 404,  1307 => 403,  1292 => 398,  1290 => 397,  1285 => 396,  1283 => 395,  1278 => 394,  1276 => 393,  1274 => 392,  1270 => 391,  1261 => 390,  1255 => 389,  1240 => 384,  1238 => 383,  1233 => 382,  1231 => 381,  1226 => 380,  1224 => 379,  1222 => 378,  1218 => 377,  1212 => 376,  1206 => 375,  1191 => 370,  1189 => 369,  1184 => 368,  1182 => 367,  1177 => 366,  1175 => 365,  1173 => 364,  1169 => 363,  1165 => 362,  1161 => 361,  1157 => 360,  1151 => 359,  1145 => 358,  1134 => 354,  1130 => 353,  1124 => 352,  1112 => 345,  1110 => 344,  1106 => 343,  1100 => 342,  1092 => 338,  1084 => 336,  1080 => 335,  1078 => 334,  1076 => 333,  1070 => 332,  1061 => 329,  1055 => 328,  1048 => 325,  1045 => 323,  1043 => 322,  1037 => 321,  1027 => 317,  1025 => 316,  1004 => 315,  999 => 314,  996 => 312,  993 => 310,  991 => 309,  989 => 308,  983 => 307,  976 => 304,  974 => 303,  972 => 302,  966 => 301,  959 => 296,  953 => 295,  946 => 292,  944 => 291,  942 => 290,  936 => 289,  929 => 286,  927 => 285,  925 => 284,  923 => 283,  921 => 282,  915 => 281,  908 => 278,  902 => 273,  891 => 269,  883 => 264,  878 => 262,  873 => 261,  870 => 260,  868 => 259,  865 => 258,  860 => 256,  855 => 255,  852 => 254,  850 => 253,  832 => 252,  828 => 249,  825 => 246,  824 => 245,  823 => 244,  821 => 243,  818 => 242,  815 => 240,  812 => 239,  809 => 237,  807 => 236,  805 => 235,  799 => 234,  792 => 229,  790 => 228,  784 => 227,  777 => 224,  775 => 223,  769 => 222,  756 => 219,  752 => 216,  749 => 213,  748 => 212,  747 => 211,  745 => 210,  743 => 209,  737 => 208,  730 => 205,  728 => 204,  722 => 203,  715 => 200,  713 => 199,  707 => 198,  700 => 195,  698 => 194,  692 => 193,  684 => 190,  682 => 189,  676 => 188,  669 => 185,  667 => 184,  661 => 183,  654 => 180,  652 => 179,  646 => 178,  639 => 175,  633 => 174,  626 => 171,  624 => 170,  618 => 169,  611 => 166,  609 => 165,  603 => 163,  595 => 159,  585 => 158,  580 => 157,  578 => 156,  575 => 154,  573 => 153,  567 => 152,  559 => 148,  557 => 146,  556 => 145,  555 => 144,  554 => 143,  550 => 142,  547 => 140,  545 => 139,  539 => 138,  531 => 134,  529 => 133,  527 => 132,  525 => 131,  523 => 130,  519 => 129,  516 => 127,  514 => 126,  508 => 125,  491 => 122,  488 => 121,  482 => 120,  455 => 117,  452 => 116,  450 => 115,  444 => 114,  411 => 109,  408 => 107,  406 => 106,  404 => 105,  399 => 104,  397 => 103,  380 => 102,  374 => 101,  367 => 98,  365 => 97,  363 => 96,  357 => 93,  355 => 92,  353 => 91,  351 => 90,  349 => 89,  341 => 87,  338 => 86,  336 => 85,  329 => 84,  326 => 82,  324 => 81,  318 => 80,  311 => 77,  305 => 75,  303 => 74,  299 => 73,  295 => 72,  289 => 71,  281 => 67,  278 => 65,  276 => 64,  270 => 63,  263 => 60,  256 => 59,  250 => 58,  243 => 55,  240 => 53,  238 => 52,  232 => 51,  225 => 48,  223 => 47,  221 => 46,  218 => 44,  216 => 43,  212 => 42,  206 => 41,  199 => 38,  186 => 37,  184 => 36,  178 => 35,  170 => 31,  167 => 29,  165 => 28,  159 => 27,  152 => 403,  150 => 389,  148 => 375,  146 => 358,  144 => 352,  141 => 349,  139 => 342,  137 => 332,  135 => 328,  133 => 321,  131 => 307,  129 => 301,  127 => 295,  125 => 289,  123 => 281,  121 => 273,  119 => 269,  117 => 234,  115 => 227,  113 => 222,  111 => 208,  109 => 203,  107 => 198,  105 => 193,  103 => 188,  101 => 183,  99 => 178,  97 => 174,  95 => 169,  93 => 163,  91 => 152,  89 => 138,  87 => 125,  85 => 120,  83 => 114,  81 => 101,  79 => 80,  77 => 71,  75 => 63,  73 => 58,  71 => 51,  69 => 41,  67 => 35,  65 => 27,);
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
{# Widgets #}

{%- block form_widget -%}
  {% if compound %}
    {{- block('form_widget_compound') -}}
  {% else %}
    {{- block('form_widget_simple') -}}
  {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
  {%- set type = type|default('text') -%}
  <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
  {% include \"PrestaShopBundle:Admin/Product/Include:form_max_length.html.twig\" with {\"attr\": attr} %}
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
  <div {{ block('widget_container_attributes') }}>
    {%- if form.parent is empty -%}
      {{ form_errors(form) }}
    {%- endif -%}
    {{- block('form_rows') -}}
    {{- form_rest(form) -}}
  </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
  {% if prototype is defined %}
    {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
  {% endif %}
  {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
  <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
  {% include \"PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig\" with {\"attr\": attr} %}
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
  {% if expanded %}
    {{- block('choice_widget_expanded') -}}
  {% else %}
    {{- block('choice_widget_collapsed') -}}
  {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
  <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
      {{- form_widget(child) -}}
      {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
  </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
  {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
    {% set required = false %}
  {%- endif -%}
  <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
    {%- if placeholder is not none -%}
      <option
        value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder }}</option>
    {%- endif -%}
    {%- if preferred_choices|length > 0 -%}
      {% set options = preferred_choices %}
      {{- block('choice_widget_options') -}}
      {%- if choices|length > 0 and separator is not none -%}
        <option disabled=\"disabled\">{{ separator }}</option>
      {%- endif -%}
    {%- endif -%}
    {%- set options = choices -%}
    {{- block('choice_widget_options') -}}
  </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
  {% set switch = switch|default('') -%}
  <input type=\"checkbox\"
         {% if switch %}data-toggle=\"switch\"{% endif %} {% if switch %}class=\"{{ switch }}\"{% endif %} {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock checkbox_widget -%}

{%- block radio_widget -%}
  <input
    type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock radio_widget -%}

{%- block datetime_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- form_errors(form.date) -}}
      {{- form_errors(form.time) -}}
      {{- form_widget(form.date) -}}
      {{- form_widget(form.time) -}}
    </div>
  {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- date_pattern|replace({
        '{{ year }}':  form_widget(form.year),
        '{{ month }}': form_widget(form.month),
        '{{ day }}':   form_widget(form.day),
      })|raw -}}
    </div>
  {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
    <div {{ block('widget_container_attributes') }}>
      {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
    </div>
  {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
  {# type=\"number\" doesn't work with floats #}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default('number') -%}
  {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
  {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
  {%- set type = type|default('url') -%}
  {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
  {%- set type = type|default('search') -%}
  {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
  {%- set type = type|default('password') -%}
  {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
  {%- set type = type|default('hidden') -%}
  {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
  {%- set type = type|default('email') -%}
  {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block button_widget -%}
  {%- if label is empty -%}
    {%- if label_format is not empty -%}
      {% set label = label_format|replace({
      '%name%': name,
      '%id%': id,
      }) %}
    {%- else -%}
      {% set label = name|humanize %}
    {%- endif -%}
  {%- endif -%}
  <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
  {%- set type = type|default('submit') -%}
  {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
  {%- set type = type|default('reset') -%}
  {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({'for': id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {%- endif %}
    {% if label is empty -%}
      {%- if label_format is not empty -%}
        {% set label = label_format|replace({
        '%name%': name,
        '%id%': id,
        }) %}
      {%- else -%}
        {% set label = name|humanize %}
      {%- endif -%}
    {%- endif -%}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label|raw : label|raw }}
      {% if label_attr['tooltip'] is defined %}
        {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
        <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"{{ placement }}\"
           title=\"{{ label_attr['tooltip'] }}\"></i>
      {% endif %}

      {% if label_attr['popover'] is defined %}
        {% set placement = label_attr['popover_placement'] is defined ? label_attr['popover_placement'] : 'top' %}
        <span class=\"help-box\" data-toggle=\"popover\" data-placement=\"{{ placement }}\"
           data-content=\"{{ label_attr['popover'] }}\"></span>
      {% endif %}
    </label>

  {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
  {#
  No need to render the errors here, as all errors are mapped
  to the first child (see RepeatedTypeValidatorExtension).
  #}
  {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
  <div>
    {{- form_label(form) -}}
    {{- form_errors(form) -}}
    {{- form_widget(form) -}}
  </div>
{%- endblock form_row -%}

{%- block button_row -%}
  <div>
    {{- form_widget(form) -}}
  </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
  {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
  {{ form_start(form) }}
  {{- form_widget(form) -}}
  {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
  {% set method = method|upper %}
  {%- if method in [\"GET\", \"POST\"] -%}
    {% set form_method = method %}
  {%- else -%}
    {% set form_method = \"POST\" %}
  {%- endif -%}
  <form name=\"{{ name }}\"
        method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
  {%- if form_method != method -%}
    <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\"/>
  {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
  {%- if not render_rest is defined or render_rest -%}
    {{ form_rest(form) }}
  {%- endif -%}
  </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
  {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
  {%- if errors|length > 0 -%}
    <ul>
      {%- for error in errors -%}
        <li>{{ error.message }}</li>
      {%- endfor -%}
    </ul>
  {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
  {% for child in form -%}
    {% if not child.rendered %}
      {{- form_row(child) -}}
    {% endif %}
  {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
  {% for child in form %}
    {{- form_row(child) -}}
  {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"
  {%- if read_only and attr.readonly is not defined %} readonly=\"readonly\"{% endif -%}
  {%- if disabled %} disabled=\"disabled\"{% endif -%}
  {%- if required %} required=\"required\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
  {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock attributes -%}
", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_div_layout.html.twig");
    }
}
