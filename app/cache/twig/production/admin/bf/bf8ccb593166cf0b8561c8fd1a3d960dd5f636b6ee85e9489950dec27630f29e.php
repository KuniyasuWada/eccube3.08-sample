<?php

/* Store/plugin_install.twig */
class __TwigTemplate_497024198d5e80ca86cdea2808c7c6ba260961e6ceef73da1ceca3397e01f6ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Store/plugin_install.twig", 22);
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
        // line 24
        $context["menus"] = array(0 => "store", 1 => "plugin", 2 => "plugin_list");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "オーナーズストア";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "プラグインのアップロード";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"row\" id=\"aside_wrap\">
    <form id=\"upload-form\" class=\"form-inline\" method=\"post\" action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("admin_store_plugin_install");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    <div class=\"col-md-9\">
       ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
       <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">新規プラグインアップロード</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <label class=\"col-sm-5 control-label\">プラグイン<br>(zip、tar、tar.gz形式)</label>
                    <div class=\"col-sm-7\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plugin_archive", array()), 'widget', array("attr" => array("accept" => "application/zip,application/x-tar,application/x-gzip")));
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plugin_archive", array()), 'errors');
        echo "
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 47
            echo "                            <div class=\"errormsg text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "message", array())), "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
    <div class=\"col-md-3\">
        <div class=\"col_inner\" id=\"aside_column\">
            <div class=\"box no-header\">
                <div class=\"box-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                            <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">アップロード</button>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div><!-- /.col -->
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "Store/plugin_install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 49,  84 => 47,  80 => 46,  76 => 45,  72 => 44,  60 => 35,  53 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
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
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['store', 'plugin', 'plugin_list'] %}*/
/* */
/* {% block title %}オーナーズストア{% endblock %}*/
/* {% block sub_title %}プラグインのアップロード{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block main %}*/
/* <div class="row" id="aside_wrap">*/
/*     <form id="upload-form" class="form-inline" method="post" action="{{ url('admin_store_plugin_install') }}" {{ form_enctype(form) }}>*/
/*     <div class="col-md-9">*/
/*        {{ form_widget(form._token) }}*/
/*        <div class="box">*/
/*             <div class="box-header">*/
/*                 <h3 class="box-title">新規プラグインアップロード</h3>*/
/*             </div><!-- /.box-header -->*/
/*             <div class="box-body">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-5 control-label">プラグイン<br>(zip、tar、tar.gz形式)</label>*/
/*                     <div class="col-sm-7">*/
/*                         {{ form_widget(form.plugin_archive, {'attr': {'accept': 'application/zip,application/x-tar,application/x-gzip'}}) }}*/
/*                         {{ form_errors(form.plugin_archive) }}*/
/*                         {% for error in errors %}*/
/*                             <div class="errormsg text-danger">{{ error.message|trans }}</div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.box-body -->*/
/*         </div><!-- /.box -->*/
/*     </div><!-- /.col -->*/
/*     <div class="col-md-3">*/
/*         <div class="col_inner" id="aside_column">*/
/*             <div class="box no-header">*/
/*                 <div class="box-body">*/
/*                     <div class="row text-center">*/
/*                         <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                             <button class="btn btn-primary btn-block btn-lg" type="submit">アップロード</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </div><!-- /.col -->*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
