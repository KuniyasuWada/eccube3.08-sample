<?php

/* Setting/System/security.twig */
class __TwigTemplate_678035b3778be46ef706c81bf8aa085f62988d81b70a7693204bc641ce333631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Setting/System/security.twig", 22);
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
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "security");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "セキュリティ管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "    <form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_system_security");
        echo "\">
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    <div class=\"row\" id=\"aside_wrap\">
        <div class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">セキュリティ機能設定</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body form-horizontal\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 col-lg-2 control-label\">ディレクトリ名</label>
                            <div class=\"col-sm-3 col-lg-3\">
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "admin_route_dir", array()), 'widget');
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "admin_route_dir", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 col-lg-2 control-label\">IP制限</label>
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "admin_allow_host", array()), 'widget', array("attr" => array("rows" => "7", "aria-describedby" => "helpBlock")));
        echo "
                                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "admin_allow_host", array()), 'errors');
        echo "
                                <span id=\"helpBlock\" class=\"help-block\">※管理機能へのアクセスを特定のIPアドレスからの接続のみに制限します。
                                    アクセスを許可するIPアドレスを1行づつ入力してください。何も入力しない場合は全てを許可します。</span>
                            </div>
                        </div>
                </div><!-- /.box-body --> 
            </div><!-- /.box -->
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">サイトセキュリティ設定</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 form-inline\">SSL制限</label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 67
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "secure", array())) {
            // line 68
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "force_ssl", array()), 'widget');
            echo "
                                ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "force_ssl", array()), 'errors');
            echo "
                            ";
        } else {
            // line 71
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "force_ssl", array()), 'widget', array("attr" => array("disabled" => "disabled")));
            echo "
                                <p class=\"text-danger\">httpsからの接続でなければSSL制限を設定できません。</p>
                            ";
        }
        // line 74
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.col -->

        <div class=\"col-md-3\" id=\"aside_column\">
            <div class=\"col_inner\">
                <div class=\"box no-header\">
                    <div class=\"box-body\">
                        <div class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">設定</button>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col --> 
    </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "Setting/System/security.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 74,  116 => 71,  111 => 69,  106 => 68,  104 => 67,  86 => 52,  82 => 51,  73 => 45,  69 => 44,  55 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
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
/* {% set menus = ['setting', 'system', 'security'] %}*/
/* */
/* {% block title %}システム設定{% endblock %}*/
/* {% block sub_title %}セキュリティ管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <form method="post" action="{{ url('admin_setting_system_security') }}">*/
/*     {{ form_widget(form._token) }}*/
/*     <div class="row" id="aside_wrap">*/
/*         <div class="col-md-9">*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">セキュリティ機能設定</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body form-horizontal">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-3 col-lg-2 control-label">ディレクトリ名</label>*/
/*                             <div class="col-sm-3 col-lg-3">*/
/*                                 {{ form_widget(form.admin_route_dir) }}*/
/*                                 {{ form_errors(form.admin_route_dir) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-3 col-lg-2 control-label">IP制限</label>*/
/*                             <div class="col-sm-9 col-lg-10">*/
/*                                 {{ form_widget(form.admin_allow_host, {'attr': {'rows': '7', 'aria-describedby': 'helpBlock'}}) }}*/
/*                                 {{ form_errors(form.admin_allow_host) }}*/
/*                                 <span id="helpBlock" class="help-block">※管理機能へのアクセスを特定のIPアドレスからの接続のみに制限します。*/
/*                                     アクセスを許可するIPアドレスを1行づつ入力してください。何も入力しない場合は全てを許可します。</span>*/
/*                             </div>*/
/*                         </div>*/
/*                 </div><!-- /.box-body --> */
/*             </div><!-- /.box -->*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">サイトセキュリティ設定</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 col-lg-2 form-inline">SSL制限</label>*/
/*                         <div class="col-sm-9 col-lg-10">*/
/*                             {% if app.request.secure %}*/
/*                                 {{ form_widget(form.force_ssl) }}*/
/*                                 {{ form_errors(form.force_ssl) }}*/
/*                             {% else %}*/
/*                                 {{ form_widget(form.force_ssl, {'attr': {'disabled': 'disabled'}}) }}*/
/*                                 <p class="text-danger">httpsからの接続でなければSSL制限を設定できません。</p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!-- /.col -->*/
/* */
/*         <div class="col-md-3" id="aside_column">*/
/*             <div class="col_inner">*/
/*                 <div class="box no-header">*/
/*                     <div class="box-body">*/
/*                         <div class="row text-center">*/
/*                             <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                 <button class="btn btn-primary btn-block btn-lg" type="submit">設定</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*         </div><!-- /.col --> */
/*     </div>*/
/*     </form>*/
/* {% endblock %}*/
/* */
