<?php

/* Setting/Shop/shop_master.twig */
class __TwigTemplate_344a4ca190a7b0a21fa9515821d13712a6312a5a0a8c84a171b7e77fa1c109d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("default_frame.twig", "Setting/Shop/shop_master.twig", 24);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "shop_index");
        // line 31
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 24
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        echo "基本情報設定";
    }

    // line 29
    public function block_sub_title($context, array $blocks = array())
    {
        echo "SHOPマスター";
    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        // line 34
        echo "<script src=\"//ajaxzip3.github.io/ajaxzip3.js\" charset=\"UTF-8\"></script>
<script>
\$(function() {
    \$('#zip-search').click(function(event) {
        AjaxZip3.zip2addr('shop_master[zip][zip01]', 'shop_master[zip][zip02]', 'shop_master[address][pref]', 'shop_master[address][addr01]');
    });
});
</script>
";
    }

    // line 45
    public function block_main($context, array $blocks = array())
    {
        // line 46
        echo "
    <div class=\"row\" id=\"aside_wrap\">
        <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"point_form\" method=\"post\" action=\"\">
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "

            <div class=\"col-md-9\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">基本情報編集</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">

                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_kana", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shop_name", array()), 'row');
        echo "
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shop_kana", array()), 'row');
        echo "
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shop_name_eng", array()), 'row');
        echo "

                        ";
        // line 65
        echo "                        <div class=\"form-group ";
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                                〒";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), 'widget');
        echo "
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), 'errors');
        echo "
                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), 'errors');
        echo "
                                <span><button type=\"button\" id=\"zip-search\" class=\"btn btn-default btn-sm\">郵便番号から自動入力</button></span>
                            </div>
                        </div>
                        ";
        // line 75
        echo "                        <div class=\"form-group ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), "vars", array()), "errors", array()))) {
            echo "has-error";
        }
        echo "\">
                            <div class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), 'widget');
        echo "
                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 82
        echo "                        <div class=\"form-group ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), "vars", array()), "errors", array()))) {
            echo "has-error";
        }
        echo "\">
                            <div class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
        echo "
                                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 89
        echo "                        <div class=\"form-group ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), "vars", array()), "errors", array()))) {
            echo "has-error";
        }
        echo "\">
                            <div class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
        echo "
                                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 96
        echo "                        <div class=\"form-group\">
                            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline ";
        // line 98
        if ((( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel01", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel02", array()), "vars", array()), "errors", array()))) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel03", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">
                                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel03", array()), 'widget');
        echo "
                                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel01", array()), 'errors');
        echo "
                                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel02", array()), 'errors');
        echo "
                                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel03", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 106
        echo "                        <div class=\"form-group\">
                            ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline ";
        // line 108
        if ((( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax01", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax02", array()), "vars", array()), "errors", array()))) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax03", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">
                                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax03", array()), 'widget');
        echo "
                                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax01", array()), 'errors');
        echo "
                                ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax02", array()), 'errors');
        echo "
                                ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax03", array()), 'errors');
        echo "
                            </div>
                        </div>

                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "business_hour", array()), 'row');
        echo "
                        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email01", array()), 'row');
        echo "
                        ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email02", array()), 'row');
        echo "
                        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email03", array()), 'row');
        echo "
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email04", array()), 'row');
        echo "
                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "good_traded", array()), 'row');
        echo "
                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'row');
        echo "

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">送料設定</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">

                        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_free_amount", array()), 'row');
        echo "
                        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_free_quantity", array()), 'row');
        echo "
                        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_product_delivery_fee", array()), 'row');
        echo "
                        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_multiple_shipping", array()), 'row');
        echo "

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">会員設定</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">

                        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_customer_activate", array()), 'row');
        echo "
                        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_mypage_order_status_display", array()), 'row');
        echo "
                        ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_favorite_product", array()), 'row');
        echo "
                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_remember_me", array()), 'row');
        echo "

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">商品設定</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">

                        ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nostock_hidden", array()), 'row');
        echo "

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">地図設定</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">

                        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array()), 'row');
        echo "
                        ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array()), 'row');
        echo "

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div>

            <div class=\"col-md-3\" id=\"aside_column\">
                <div class=\"col_inner\">
                    <div class=\"box no-header\">
                        <div class=\"box-body\">
                            <div class=\"row text-center\">
                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                        <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"document.form1.submit();\">登録</button>
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
        return "Setting/Shop/shop_master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 173,  362 => 172,  348 => 161,  334 => 150,  330 => 149,  326 => 148,  322 => 147,  308 => 136,  304 => 135,  300 => 134,  296 => 133,  282 => 122,  278 => 121,  274 => 120,  270 => 119,  266 => 118,  262 => 117,  258 => 116,  251 => 112,  247 => 111,  243 => 110,  235 => 109,  229 => 108,  225 => 107,  222 => 106,  216 => 102,  212 => 101,  208 => 100,  200 => 99,  194 => 98,  190 => 97,  187 => 96,  181 => 92,  177 => 91,  169 => 89,  163 => 85,  159 => 84,  151 => 82,  145 => 78,  141 => 77,  133 => 75,  126 => 70,  122 => 69,  116 => 68,  111 => 66,  104 => 65,  99 => 62,  95 => 61,  91 => 60,  87 => 59,  83 => 58,  71 => 49,  66 => 46,  63 => 45,  51 => 34,  48 => 33,  42 => 29,  36 => 28,  32 => 24,  30 => 31,  28 => 26,  11 => 24,);
    }
}
/* {#*/
/* /**/
/*  * This file is part of EC-CUBE*/
/*  **/
/*  * Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/*  **/
/*  * http://www.lockon.co.jp/*/
/*  **/
/*  * This program is free software; you can redistribute it and/or*/
/*  * modify it under the terms of the GNU General Public License*/
/*  * as published by the Free Software Foundation; either version 2*/
/*  * of the License, or (at your option) any later version.*/
/*  **/
/*  * This program is distributed in the hope that it will be useful,*/
/*  * but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/*  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/*  * GNU General Public License for more details.*/
/*  **/
/*  * You should have received a copy of the GNU General Public License*/
/*  * along with this program; if not, write to the Free Software*/
/*  * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/*  *//* */
/* #}*/
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['setting', 'shop', 'shop_index'] %}*/
/* */
/* {% block title %}基本情報設定{% endblock %}*/
/* {% block sub_title %}SHOPマスター{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* <script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>*/
/* <script>*/
/* $(function() {*/
/*     $('#zip-search').click(function(event) {*/
/*         AjaxZip3.zip2addr('shop_master[zip][zip01]', 'shop_master[zip][zip02]', 'shop_master[address][pref]', 'shop_master[address][addr01]');*/
/*     });*/
/* });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* */
/* {% block main %}*/
/* */
/*     <div class="row" id="aside_wrap">*/
/*         <form name="form1" role="form" class="form-horizontal" id="point_form" method="post" action="">*/
/*         {{ form_widget(form._token) }}*/
/* */
/*             <div class="col-md-9">*/
/*                 <div class="box">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">基本情報編集</h3>*/
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/* */
/*                         {{ form_row(form.company_name) }}*/
/*                         {{ form_row(form.company_kana) }}*/
/*                         {{ form_row(form.shop_name) }}*/
/*                         {{ form_row(form.shop_kana) }}*/
/*                         {{ form_row(form.shop_name_eng) }}*/
/* */
/*                         {# 住所：郵便番号 #}*/
/*                         <div class="form-group {% if form.zip.zip01.vars.errors is not empty or form.zip.zip02.vars.errors is not empty %}has-error{% endif %}">*/
/*                             {{ form_label(form.address) }}*/
/*                             <div class="col-sm-9 col-lg-10 input_zip form-inline">*/
/*                                 〒{{ form_widget(form.zip.zip01) }}-{{ form_widget(form.zip.zip02) }}*/
/*                                 {{ form_errors(form.zip.zip01) }}*/
/*                                 {{ form_errors(form.zip.zip02) }}*/
/*                                 <span><button type="button" id="zip-search" class="btn btn-default btn-sm">郵便番号から自動入力</button></span>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 住所：都道府県 #}*/
/*                         <div class="form-group {% if form.address.pref.vars.errors is not empty %}has-error{% endif %}">*/
/*                             <div class="col-sm-offset-2 col-sm-9 col-lg-10 form-inline">*/
/*                                 {{ form_widget(form.address.pref) }}*/
/*                                 {{ form_errors(form.address.pref) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 住所：住所1 #}*/
/*                         <div class="form-group {% if form.address.addr02.vars.errors is not empty  %}has-error{% endif %}">*/
/*                             <div class="col-sm-offset-2 col-sm-9 col-lg-10">*/
/*                                 {{ form_widget(form.address.addr01, { attr : { placeholder : '市区町村名（例：千代田区神田神保町）'}} ) }}*/
/*                                 {{ form_errors(form.address.addr01) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 住所：住所2 #}*/
/*                         <div class="form-group {% if form.address.addr02.vars.errors is not empty  %}has-error{% endif %}">*/
/*                             <div class="col-sm-offset-2 col-sm-9 col-lg-10">*/
/*                                 {{ form_widget(form.address.addr02, { attr : { placeholder : '番地・ビル名（例：1-3-5）' }}) }}*/
/*                                 {{ form_errors(form.address.addr02) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# 電話番号 #}*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.tel) }}*/
/*                             <div class="col-sm-9 col-lg-10 input_tel form-inline {% if form.tel.tel01.vars.errors is not empty or form.tel.tel02.vars.errors is not empty or form.tel.tel03.vars.errors is not empty %}has-error{% endif %}">*/
/*                                 {{ form_widget(form.tel.tel01) }}-{{ form_widget(form.tel.tel02) }}-{{ form_widget(form.tel.tel03) }}*/
/*                                 {{ form_errors(form.tel.tel01) }}*/
/*                                 {{ form_errors(form.tel.tel02) }}*/
/*                                 {{ form_errors(form.tel.tel03) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {# FAX番号 #}*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.fax) }}*/
/*                             <div class="col-sm-9 col-lg-10 input_tel form-inline {% if form.fax.fax01.vars.errors is not empty or form.fax.fax02.vars.errors is not empty or form.fax.fax03.vars.errors is not empty %}has-error{% endif %}">*/
/*                                 {{ form_widget(form.fax.fax01) }}-{{ form_widget(form.fax.fax02) }}-{{ form_widget(form.fax.fax03) }}*/
/*                                 {{ form_errors(form.fax.fax01) }}*/
/*                                 {{ form_errors(form.fax.fax02) }}*/
/*                                 {{ form_errors(form.fax.fax03) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {{ form_row(form.business_hour) }}*/
/*                         {{ form_row(form.email01) }}*/
/*                         {{ form_row(form.email02) }}*/
/*                         {{ form_row(form.email03) }}*/
/*                         {{ form_row(form.email04) }}*/
/*                         {{ form_row(form.good_traded) }}*/
/*                         {{ form_row(form.message) }}*/
/* */
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/* */
/*                 <div class="box">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">送料設定</h3>*/
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/* */
/*                         {{ form_row(form.delivery_free_amount) }}*/
/*                         {{ form_row(form.delivery_free_quantity) }}*/
/*                         {{ form_row(form.option_product_delivery_fee) }}*/
/*                         {{ form_row(form.option_multiple_shipping) }}*/
/* */
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/* */
/*                 <div class="box">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">会員設定</h3>*/
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/* */
/*                         {{ form_row(form.option_customer_activate) }}*/
/*                         {{ form_row(form.option_mypage_order_status_display) }}*/
/*                         {{ form_row(form.option_favorite_product) }}*/
/*                         {{ form_row(form.option_remember_me) }}*/
/* */
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/* */
/*                 <div class="box">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">商品設定</h3>*/
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/* */
/*                         {{ form_row(form.nostock_hidden) }}*/
/* */
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/* */
/*                 <div class="box">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">地図設定</h3>*/
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/* */
/*                         {{ form_row(form.latitude) }}*/
/*                         {{ form_row(form.longitude) }}*/
/* */
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/* */
/*             </div>*/
/* */
/*             <div class="col-md-3" id="aside_column">*/
/*                 <div class="col_inner">*/
/*                     <div class="box no-header">*/
/*                         <div class="box-body">*/
/*                             <div class="row text-center">*/
/*                                 <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                         <button class="btn btn-primary btn-block btn-lg" onclick="document.form1.submit();">登録</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- /.box-body -->*/
/*                     </div><!-- /.box -->*/
/*                 </div>*/
/*             </div><!-- /.col -->*/
/* */
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock %}*/
