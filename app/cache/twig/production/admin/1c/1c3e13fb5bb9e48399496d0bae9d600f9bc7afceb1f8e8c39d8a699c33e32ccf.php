<?php

/* Setting/System/authority.twig */
class __TwigTemplate_62a7ea8a035c91ffbb920a84612f7f80ff4fbb254db480d82fbfb96cb70c3de5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Setting/System/authority.twig", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            '__internal_ba8952d526b40008ec1cefcc1f07ff464cfe67d68fcc6205068a9c2af3db0bf6' => array($this, 'block___internal_ba8952d526b40008ec1cefcc1f07ff464cfe67d68fcc6205068a9c2af3db0bf6'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "authority");
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
        echo "権限管理";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "<script>
\$(function() {

    var \$collectionHolder = \$('#table-authority');
    var index = \$collectionHolder.find('.input-deny-url').length;

    \$('.add').click(function() {
        var prototype = \$collectionHolder.data('prototype');
        index++;
        var newForm = prototype.replace(/__name__/g, index);
        var \$lastRow = \$('#table-authority tbody > tr:last')
        \$lastRow.after(newForm);
    });

    \$(document).on('click', '.delete', function() {
        \$(this).parent('td').parent('tr').remove();
        var idx = \$collectionHolder.find('.input-deny-url').length;
        if (idx == 0) {
            var prototype = \$collectionHolder.data('prototype');
            var newForm = prototype.replace(/__name__/g, idx);
            var \$lastRow = \$('#table-authority tbody')
            \$lastRow.append(newForm);
        }
    });

});
</script>
";
    }

    // line 61
    public function block_main($context, array $blocks = array())
    {
        // line 62
        echo "    <form name=\"form1\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_system_authority");
        echo "\">
    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    <div class=\"row\" id=\"aside_wrap\">
        <div class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">権限設定</h3>
                    <div style=\"margin-left: 10px;\">
                        <p>";
        // line 70
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "baseUrl", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_route", array())), "html", null, true);
        echo "以降からのURLを拒否URLに入力してください。</p>
                        <p>拒否URL以降がアクセス拒否されます。(URLは前方一致)</p>
                        <p>例) /setting <span class=\"text-danger\">※「/」を必ず記入してください</span></p>
                    </div>
                </div><!-- /.box-header -->
                <div class=\"box-body form-inline\">
                    <div class=\"table_list\">
                        <div class=\"table-responsive\">
                            <table id=\"table-authority\" class=\"table table-striped table-condensed with-border\"
                                    data-prototype=\"";
        // line 79
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_ba8952d526b40008ec1cefcc1f07ff464cfe67d68fcc6205068a9c2af3db0bf6", $context, $blocks));
        echo "\">
                                <thead>
                                    <tr>
                                        <th style=\"width: 210px;\">権限</th>
                                        <th>拒否URL</th>
                                        <th style=\"width: 80px;\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["form"], "AuthorityRoles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 89
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["form"], "Authority", array()), 'widget', array("attr" => array("class" => "input-authority")));
            echo "
                                            ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["form"], "Authority", array()), 'errors');
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["form"], "deny_url", array()), 'widget', array("attr" => array("class" => "input-deny-url")));
            echo "
                                            ";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["form"], "deny_url", array()), 'errors');
            echo "
                                        </td>
                                        <td class=\"text-center\">
                                            <button type=\"button\" class=\"btn btn-default delete\">削除</button>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>
                        <button type=\"button\" class=\"btn btn-default add\">行追加</button>
                    </p>
                </div>
            </div>
        </div><!-- /.col -->

        <div class=\"col-md-3\" id=\"aside_column\">
            <div class=\"col_inner\">
                <div class=\"box no-header\">
                    <div class=\"box-body\">
                        <div class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">登録</button>
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

    // line 79
    public function block___internal_ba8952d526b40008ec1cefcc1f07ff464cfe67d68fcc6205068a9c2af3db0bf6($context, array $blocks = array())
    {
        echo twig_include($this->env, $context, "Setting/System/authority_prototype.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "AuthorityRoles", array()), "vars", array()), "prototype", array())));
    }

    public function getTemplateName()
    {
        return "Setting/System/authority.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 79,  160 => 103,  147 => 96,  143 => 95,  137 => 92,  133 => 91,  129 => 89,  125 => 88,  113 => 79,  101 => 70,  91 => 63,  86 => 62,  83 => 61,  52 => 32,  49 => 31,  43 => 27,  37 => 26,  33 => 22,  31 => 29,  29 => 24,  11 => 22,);
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
/* {% set menus = ['setting', 'system', 'authority'] %}*/
/* */
/* {% block title %}システム設定{% endblock %}*/
/* {% block sub_title %}権限管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/* $(function() {*/
/* */
/*     var $collectionHolder = $('#table-authority');*/
/*     var index = $collectionHolder.find('.input-deny-url').length;*/
/* */
/*     $('.add').click(function() {*/
/*         var prototype = $collectionHolder.data('prototype');*/
/*         index++;*/
/*         var newForm = prototype.replace(/__name__/g, index);*/
/*         var $lastRow = $('#table-authority tbody > tr:last')*/
/*         $lastRow.after(newForm);*/
/*     });*/
/* */
/*     $(document).on('click', '.delete', function() {*/
/*         $(this).parent('td').parent('tr').remove();*/
/*         var idx = $collectionHolder.find('.input-deny-url').length;*/
/*         if (idx == 0) {*/
/*             var prototype = $collectionHolder.data('prototype');*/
/*             var newForm = prototype.replace(/__name__/g, idx);*/
/*             var $lastRow = $('#table-authority tbody')*/
/*             $lastRow.append(newForm);*/
/*         }*/
/*     });*/
/* */
/* });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/*     <form name="form1" method="post" action="{{ url('admin_setting_system_authority') }}">*/
/*     {{ form_widget(form._token) }}*/
/*     <div class="row" id="aside_wrap">*/
/*         <div class="col-md-9">*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">権限設定</h3>*/
/*                     <div style="margin-left: 10px;">*/
/*                         <p>{{ app.request.baseUrl ~ '/' ~ app.config.admin_route}}以降からのURLを拒否URLに入力してください。</p>*/
/*                         <p>拒否URL以降がアクセス拒否されます。(URLは前方一致)</p>*/
/*                         <p>例) /setting <span class="text-danger">※「/」を必ず記入してください</span></p>*/
/*                     </div>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body form-inline">*/
/*                     <div class="table_list">*/
/*                         <div class="table-responsive">*/
/*                             <table id="table-authority" class="table table-striped table-condensed with-border"*/
/*                                     data-prototype="{% filter escape %}{{ include('Setting/System/authority_prototype.twig', {'form': form.AuthorityRoles.vars.prototype}) }}{% endfilter %}">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th style="width: 210px;">権限</th>*/
/*                                         <th>拒否URL</th>*/
/*                                         <th style="width: 80px;"></th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for form in form.AuthorityRoles %}*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             {{ form_widget(form.Authority, {'attr': {'class': 'input-authority'}}) }}*/
/*                                             {{ form_errors(form.Authority) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_widget(form.deny_url, {'attr': {'class': 'input-deny-url'}}) }}*/
/*                                             {{ form_errors(form.deny_url) }}*/
/*                                         </td>*/
/*                                         <td class="text-center">*/
/*                                             <button type="button" class="btn btn-default delete">削除</button>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                     <p>*/
/*                         <button type="button" class="btn btn-default add">行追加</button>*/
/*                     </p>*/
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
/*                                 <button class="btn btn-primary btn-block btn-lg" type="submit">登録</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*         </div><!-- /.col -->*/
/*     </div>*/
/*     </form>*/
/* {% endblock %}*/
/* */
