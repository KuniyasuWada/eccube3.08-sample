<?php

/* Setting/System/authority_prototype.twig */
class __TwigTemplate_230c996e7e760cefa3e12599e3f107f60ddbbf07383754886e36a49912d7ebbc extends Twig_Template
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
        // line 1
        echo "    <tr>
        <td>
            ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Authority", array()), 'widget', array("attr" => array("class" => "input-authority")));
        echo "
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Authority", array()), 'errors');
        echo "
        </td>
        <td>
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "deny_url", array()), 'widget', array("attr" => array("class" => "input-deny-url")));
        echo "
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "deny_url", array()), 'errors');
        echo "
        </td>
        <td class=\"text-center\">
            <button type=\"button\" class=\"btn btn-default delete\">削除</button>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return "Setting/System/authority_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/*     <tr>*/
/*         <td>*/
/*             {{ form_widget(form.Authority, {'attr': {'class': 'input-authority'}}) }}*/
/*             {{ form_errors(form.Authority) }}*/
/*         </td>*/
/*         <td>*/
/*             {{ form_widget(form.deny_url, {'attr': {'class': 'input-deny-url'}}) }}*/
/*             {{ form_errors(form.deny_url) }}*/
/*         </td>*/
/*         <td class="text-center">*/
/*             <button type="button" class="btn btn-default delete">削除</button>*/
/*         </td>*/
/*     </tr>*/
/* */
