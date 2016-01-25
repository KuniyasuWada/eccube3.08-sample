<?php

/* Setting/System/log.twig */
class __TwigTemplate_716e76195b8f25cbcf64a8c39244236844eed6e37a8a6a1001ae11c1e010a764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("default_frame.twig", "Setting/System/log.twig", 23);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "log");
        // line 23
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 28
    public function block_sub_title($context, array $blocks = array())
    {
        echo "EC-CUBE ログ表示";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">EC-CUBE ログ表示</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\"lead\">
                        <form name=\"form1\" id=\"form1\" method=\"post\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                            <div class=\"form-inline\">
                                <div class=\"form-group\">
                                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "files", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    直近の";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "line_max", array()), 'widget', array("id" => "line-max", "attr" => array("class" => "form-control")));
        echo "行を
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-default\">読み込む</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
<textarea id=\"log\" class=\"form-control\" rows=\"20\"  wrap=\"off\" readonly>
";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["log"]) ? $context["log"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 57
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</textarea>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Setting/System/log.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 59,  88 => 57,  84 => 56,  71 => 46,  65 => 43,  59 => 40,  48 => 31,  45 => 30,  39 => 28,  33 => 27,  29 => 23,  27 => 25,  11 => 23,);
    }
}
/* {#*/
/* This file is part of EC-CUBE*/
/* */
/* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/* */
/* http://www.lockon.co.jp/*/
/* */
/* This program is free software; you can redistribute it and/or*/
/* modify it under the terms of the GNU General Public License*/
/* as published by the Free Software Foundation; either version 2*/
/* of the License, or (at your option) any later version.*/
/* */
/* This program is distributed in the hope that it will be useful,*/
/* but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/* GNU General Public License for more details.*/
/* */
/* You should have received a copy of the GNU General Public License*/
/* along with this program; if not, write to the Free Software*/
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/* #}*/
/* */
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['setting', 'system', 'log'] %}*/
/* */
/* {% block title %}システム設定{% endblock %}*/
/* {% block sub_title %}EC-CUBE ログ表示{% endblock %}*/
/* */
/* {% block main %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">EC-CUBE ログ表示</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <div class="lead">*/
/*                         <form name="form1" id="form1" method="post">*/
/*                             {{ form_widget(form._token) }}*/
/*                             <div class="form-inline">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_widget(form.files, {'attr': {'class': 'form-control'}}) }}*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     直近の{{ form_widget(form.line_max, {'id': 'line-max', 'attr': {'class': 'form-control'}}) }}行を*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <button type="submit" class="btn btn-default">読み込む</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                     <div>*/
/* <textarea id="log" class="form-control" rows="20"  wrap="off" readonly>*/
/* {% for line in log %}*/
/* {{ line }}*/
/* {% endfor %}*/
/* </textarea>*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
