<?php

/* Product/detail.twig */
class __TwigTemplate_bd39a51db403d8c3f208cd9d6e4fa6cc6cb65303fbcf6e23e18489e160b2673a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/detail.twig", 22);
        $this->blocks = array(
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
        // line 24
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script>
    eccube.classCategories = ";
        // line 28
        echo twig_jsonencode_filter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "class_categories", array()));
        echo ";

    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var \$form = \$(form);
        var product_id = \$form.find('input[name=product_id]').val();
        var \$sele1 = \$form.find('select[name=classcategory_id1]');
        var \$sele2 = \$form.find('select[name=classcategory_id2]');
        eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
    }

    ";
        // line 39
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
            // line 40
            echo "    fnSetClassCategories(
            document.form1, ";
            // line 41
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
    );
    ";
        }
        // line 44
        echo "</script>

<script>
\$(function(){
    \$('.carousel').slick({
        infinite: false,
        speed: 300,
        prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    \$('.slides').slick({
        dots: true,
        arrows: false,
        speed: 300,
        customPaging: function(slider, i) {
            return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
        }
    });

    \$('#favorite').click(function() {
        \$('#mode').val('add_favorite');
    });

});
</script>

";
    }

    // line 84
    public function block_main($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        // line 98
        echo "
    <!-- ▼item_detail▼ -->
    <div id=\"item_detail\">
        <div class=\"row\">
            <!--★画像★-->
            <div id=\"item_photo_area\" class=\"col-sm-6\">
                <div class=\"slides\">
                    ";
        // line 105
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductImage", array())) > 0)) {
            // line 106
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductImage", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 107
                echo "                        <div><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/></div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    ";
        } else {
            // line 110
            echo "                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct(""), "html", null, true);
            echo "\"/></div>
                    ";
        }
        // line 112
        echo "                </div>
            </div>

            <section id=\"item_detail_area\" class=\"col-sm-6\">

                <!--★商品名★-->
                <h3 class=\"item_name\">";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "name", array()), "html", null, true);
        echo "</h3>
                <div class=\"item_detail\">
                    <!--★通常価格★-->
                    ";
        // line 121
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "hasProductClass", array())) {
            // line 122
            if (( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())) && ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array())))) {
                // line 123
                echo "                        <p class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } elseif (( !(null === $this->getAttribute(            // line 124
(isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())) &&  !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array())))) {
                // line 125
                echo "                        <p class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> ～ <span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 127
            echo "                    ";
        } else {
            // line 128
            if ( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array()))) {
                // line 129
                echo "                        <p class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 131
            echo "                    ";
        }
        // line 133
        echo "<!--★販売価格★-->
                    ";
        // line 134
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "hasProductClass", array())) {
            // line 135
            if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Min", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Max", array()))) {
                // line 136
                echo "                        <p class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } else {
                // line 138
                echo "                        <p class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span> ～ <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 140
            echo "                    ";
        } else {
            // line 141
            echo "<p class=\"sale_price text-primary\"> <span class=\"price02_default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array())), "html", null, true);
            echo "</span> <span class=\"small\">税込</span></p>
                    ";
        }
        // line 144
        echo "<!--▼商品コード-->
                    <p class=\"item_code\">商品コード： <span id=\"item_code_default\">
                        ";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()), "html", null, true);
        echo "
                        ";
        // line 147
        if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()) != $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()), "html", null, true);
        }
        // line 148
        echo "                        </span> </p>
                    <!--▲商品コード-->

                    <!-- ▼関連カテゴリ▼ -->
                    <div class=\"relative_cat\">
                        <p>関連カテゴリ</p>
                          ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductCategories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 155
            echo "                        <ol>
                            ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "path", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 157
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                        </ol>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                    </div>
                    <!-- ▲関連カテゴリ▲ -->

                    <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                        <!--▼買い物かご-->
                        <div class=\"cart_area\">
                            ";
        // line 167
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "stock_find", array())) {
            // line 168
            echo "
                                ";
            // line 170
            echo "                                ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array(), "any", true, true)) {
                // line 171
                echo "                                <ul class=\"classcategory_list\">
                                    ";
                // line 173
                echo "                                    <li>
                                        ";
                // line 174
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'widget');
                echo "
                                        ";
                // line 175
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'errors');
                echo "
                                    </li>
                                    ";
                // line 178
                echo "                                    ";
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
                    // line 179
                    echo "                                        <li>
                                            ";
                    // line 180
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'widget');
                    echo "
                                            ";
                    // line 181
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'errors');
                    echo "
                                        </li>
                                     ";
                }
                // line 184
                echo "                                </ul>
                                ";
            }
            // line 186
            echo "
                                ";
            // line 188
            echo "                                <dl class=\"quantity\">
                                    <dt>数量</dt>
                                    <dd>
                                        ";
            // line 191
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantity", array()), 'widget');
            echo "
                                        ";
            // line 192
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantity", array()), 'errors');
            echo "
                                    </dd>
                                </dl>

                                ";
            // line 197
            echo "                                <div class=\"btn_area\">
                                    <ul class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"cart\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">カートに入れる</button></li>
                                    </ul>
                                    ";
            // line 201
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array()) == 1)) {
                // line 202
                echo "                                    <ul class=\"row\">
                                        ";
                // line 203
                if (((isset($context["is_favorite"]) ? $context["is_favorite"] : null) == false)) {
                    // line 204
                    echo "                                            <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block prevention-btn prevention-mask\">お気に入りに追加</button></li>
                                        ";
                } else {
                    // line 206
                    echo "                                            <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block\" disabled=\"disabled\">お気に入りに追加済みです</button></li>
                                        ";
                }
                // line 208
                echo "                                    </ul>
                                    ";
            }
            // line 210
            echo "                                </div>
                            ";
        } else {
            // line 212
            echo "                                ";
            // line 213
            echo "                                <div class=\"btn_area\">
                                    <ul class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
                                    </ul>
                                </div>
                            ";
        }
        // line 219
        echo "                        </div>
                        <!--▲買い物かご-->
                        ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    </form>

                    <!--★商品説明★-->
                    <p class=\"item_comment\">";
        // line 225
        echo nl2br($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "description_detail", array()));
        echo "</p>

                </div>
                <!-- /.item_detail -->

            </section>
            <!--詳細ここまで-->
        </div>

        ";
        // line 235
        echo "        ";
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array())) {
            // line 236
            echo "        <div id=\"sub_area\" class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div class=\"freearea\">";
            // line 238
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array())));
            echo "</div>
            </div>
        </div>
        ";
        }
        // line 242
        echo "    </div>
    <!-- ▲item_detail▲ -->
";
    }

    public function getTemplateName()
    {
        return "Product/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 242,  416 => 238,  412 => 236,  409 => 235,  397 => 225,  390 => 221,  386 => 219,  378 => 213,  376 => 212,  372 => 210,  368 => 208,  364 => 206,  360 => 204,  358 => 203,  355 => 202,  353 => 201,  347 => 197,  340 => 192,  336 => 191,  331 => 188,  328 => 186,  324 => 184,  318 => 181,  314 => 180,  311 => 179,  308 => 178,  303 => 175,  299 => 174,  296 => 173,  293 => 171,  290 => 170,  287 => 168,  285 => 167,  277 => 161,  270 => 159,  257 => 157,  253 => 156,  250 => 155,  246 => 154,  238 => 148,  233 => 147,  229 => 146,  225 => 144,  219 => 141,  216 => 140,  208 => 138,  202 => 136,  200 => 135,  198 => 134,  195 => 133,  192 => 131,  186 => 129,  184 => 128,  181 => 127,  173 => 125,  171 => 124,  166 => 123,  164 => 122,  162 => 121,  156 => 118,  148 => 112,  140 => 110,  137 => 109,  126 => 107,  121 => 106,  119 => 105,  110 => 98,  108 => 85,  105 => 84,  63 => 44,  57 => 41,  54 => 40,  52 => 39,  38 => 28,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
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
/* {% set body_class = 'product_page' %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/*     eccube.classCategories = {{ Product.class_categories|json_encode|raw }};*/
/* */
/*     // 規格2に選択肢を割り当てる。*/
/*     function fnSetClassCategories(form, classcat_id2_selected) {*/
/*         var $form = $(form);*/
/*         var product_id = $form.find('input[name=product_id]').val();*/
/*         var $sele1 = $form.find('select[name=classcategory_id1]');*/
/*         var $sele2 = $form.find('select[name=classcategory_id2]');*/
/*         eccube.setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);*/
/*     }*/
/* */
/*     {% if form.classcategory_id2 is defined %}*/
/*     fnSetClassCategories(*/
/*             document.form1, {{ form.classcategory_id2.vars.value|json_encode|raw }}*/
/*     );*/
/*     {% endif %}*/
/* </script>*/
/* */
/* <script>*/
/* $(function(){*/
/*     $('.carousel').slick({*/
/*         infinite: false,*/
/*         speed: 300,*/
/*         prevArrow:'<button type="button" class="slick-prev"><span class="angle-circle"><svg class="cb cb-angle-right"><use xlink:href="#cb-angle-right" /></svg></span></button>',*/
/*         nextArrow:'<button type="button" class="slick-next"><span class="angle-circle"><svg class="cb cb-angle-right"><use xlink:href="#cb-angle-right" /></svg></span></button>',*/
/*         slidesToShow: 4,*/
/*         slidesToScroll: 4,*/
/*         responsive: [*/
/*             {*/
/*                 breakpoint: 768,*/
/*                 settings: {*/
/*                     slidesToShow: 3,*/
/*                     slidesToScroll: 3*/
/*                 }*/
/*             }*/
/*         ]*/
/*     });*/
/* */
/*     $('.slides').slick({*/
/*         dots: true,*/
/*         arrows: false,*/
/*         speed: 300,*/
/*         customPaging: function(slider, i) {*/
/*             return '<button class="thumbnail">' + $(slider.$slides[i]).find('img').prop('outerHTML') + '</button>';*/
/*         }*/
/*     });*/
/* */
/*     $('#favorite').click(function() {*/
/*         $('#mode').val('add_favorite');*/
/*     });*/
/* */
/* });*/
/* </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {# todo ブロック化}*/
/*     <div id="topicpath" class="row">*/
/*         {% for ProductCategory in Product.ProductCategories %}*/
/*         <ol>*/
/*             <li><a href="{{ url('product_list') }}">全商品</a></li>*/
/*             {% for Category in ProductCategory.Category.path %}*/
/*                 <li><a href="{{ url('product_list') }}?category_id={{ Category.id }}">{{ Category.name }}</a></li>*/
/*             {% endfor %}*/
/*             <li>{{ Product.name }}</li>*/
/*         </ol>*/
/*         {% endfor %}*/
/*     </div>*/
/*     #}*/
/* */
/*     <!-- ▼item_detail▼ -->*/
/*     <div id="item_detail">*/
/*         <div class="row">*/
/*             <!--★画像★-->*/
/*             <div id="item_photo_area" class="col-sm-6">*/
/*                 <div class="slides">*/
/*                     {% if Product.ProductImage|length > 0 %}*/
/*                         {% for ProductImage in Product.ProductImage %}*/
/*                         <div><img src="{{ app.config.image_save_urlpath }}/{{ ProductImage|no_image_product }}"/></div>*/
/*                         {% endfor %}*/
/*                     {% else %}*/
/*                         <div><img src="{{ app.config.image_save_urlpath }}/{{ ''|no_image_product }}"/></div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <section id="item_detail_area" class="col-sm-6">*/
/* */
/*                 <!--★商品名★-->*/
/*                 <h3 class="item_name">{{ Product.name }}</h3>*/
/*                 <div class="item_detail">*/
/*                     <!--★通常価格★-->*/
/*                     {% if Product.hasProductClass -%}*/
/*                         {% if Product.getPrice01Min is not null and Product.getPrice01Min == Product.getPrice01Max %}*/
/*                         <p class="normal_price"> 通常価格：<span class="price01_default">{{ Product.getPrice01IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                         {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}*/
/*                         <p class="normal_price"> 通常価格：<span class="price01_default">{{ Product.getPrice01IncTaxMin|price }}</span> ～ <span class="price01_default">{{ Product.getPrice01IncTaxMax|price }}</span> <span class="small">税込</span></p>*/
/*                         {% endif %}*/
/*                     {% else -%}*/
/*                         {% if Product.getPrice01Max is not null %}*/
/*                         <p class="normal_price"> 通常価格：<span class="price01_default">{{ Product.getPrice01IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                         {% endif %}*/
/*                     {% endif -%}*/
/* */
/*                     <!--★販売価格★-->*/
/*                     {% if Product.hasProductClass -%}*/
/*                         {% if Product.getPrice02Min == Product.getPrice02Max %}*/
/*                         <p class="sale_price text-primary"> <span class="price02_default">{{ Product.getPrice02IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                         {% else %}*/
/*                         <p class="sale_price text-primary"> <span class="price02_default">{{ Product.getPrice02IncTaxMin|price }}</span> ～ <span class="price02_default">{{ Product.getPrice02IncTaxMax|price }}</span> <span class="small">税込</span></p>*/
/*                         {% endif %}*/
/*                     {% else -%}*/
/*                         <p class="sale_price text-primary"> <span class="price02_default">{{ Product.getPrice02IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                     {% endif -%}*/
/* */
/*                     <!--▼商品コード-->*/
/*                     <p class="item_code">商品コード： <span id="item_code_default">*/
/*                         {{ Product.code_min }}*/
/*                         {% if Product.code_min != Product.code_max %} ～ {{ Product.code_max }}{% endif %}*/
/*                         </span> </p>*/
/*                     <!--▲商品コード-->*/
/* */
/*                     <!-- ▼関連カテゴリ▼ -->*/
/*                     <div class="relative_cat">*/
/*                         <p>関連カテゴリ</p>*/
/*                           {% for ProductCategory in Product.ProductCategories %}*/
/*                         <ol>*/
/*                             {% for Category in ProductCategory.Category.path %}*/
/*                             <li><a href="{{ url('product_list') }}?category_id={{ Category.id }}">{{ Category.name }}</a></li>*/
/*                             {% endfor %}*/
/*                         </ol>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <!-- ▲関連カテゴリ▲ -->*/
/* */
/*                     <form action="?" method="post" id="form1" name="form1">*/
/*                         <!--▼買い物かご-->*/
/*                         <div class="cart_area">*/
/*                             {% if Product.stock_find %}*/
/* */
/*                                 {# 規格 #}*/
/*                                 {% if form.classcategory_id1 is defined %}*/
/*                                 <ul class="classcategory_list">*/
/*                                     {# 規格1 #}*/
/*                                     <li>*/
/*                                         {{ form_widget(form.classcategory_id1) }}*/
/*                                         {{ form_errors(form.classcategory_id1) }}*/
/*                                     </li>*/
/*                                     {# 規格2 #}*/
/*                                     {% if form.classcategory_id2 is defined %}*/
/*                                         <li>*/
/*                                             {{ form_widget(form.classcategory_id2) }}*/
/*                                             {{ form_errors(form.classcategory_id2) }}*/
/*                                         </li>*/
/*                                      {% endif %}*/
/*                                 </ul>*/
/*                                 {% endif %}*/
/* */
/*                                 {# 数量 #}*/
/*                                 <dl class="quantity">*/
/*                                     <dt>数量</dt>*/
/*                                     <dd>*/
/*                                         {{ form_widget(form.quantity) }}*/
/*                                         {{ form_errors(form.quantity) }}*/
/*                                     </dd>*/
/*                                 </dl>*/
/* */
/*                                 {# カートボタン #}*/
/*                                 <div class="btn_area">*/
/*                                     <ul class="row">*/
/*                                         <li class="col-xs-12 col-sm-8"><button type="submit" id="cart" class="btn btn-primary btn-block prevention-btn prevention-mask">カートに入れる</button></li>*/
/*                                     </ul>*/
/*                                     {% if BaseInfo.option_favorite_product == 1 %}*/
/*                                     <ul class="row">*/
/*                                         {% if is_favorite == false %}*/
/*                                             <li class="col-xs-12 col-sm-8"><button type="submit" id="favorite" class="btn btn-info btn-block prevention-btn prevention-mask">お気に入りに追加</button></li>*/
/*                                         {% else %}*/
/*                                             <li class="col-xs-12 col-sm-8"><button type="submit" id="favorite" class="btn btn-info btn-block" disabled="disabled">お気に入りに追加済みです</button></li>*/
/*                                         {% endif %}*/
/*                                     </ul>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             {% else %}*/
/*                                 {# 在庫がない場合は品切れボタンのみ表示 #}*/
/*                                 <div class="btn_area">*/
/*                                     <ul class="row">*/
/*                                         <li class="col-xs-12 col-sm-8"><button type="button" class="btn btn-default btn-block" disabled="disabled">ただいま品切れ中です</button></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <!--▲買い物かご-->*/
/*                         {{ form_rest(form) }}*/
/*                     </form>*/
/* */
/*                     <!--★商品説明★-->*/
/*                     <p class="item_comment">{{ Product.description_detail|raw|nl2br }}</p>*/
/* */
/*                 </div>*/
/*                 <!-- /.item_detail -->*/
/* */
/*             </section>*/
/*             <!--詳細ここまで-->*/
/*         </div>*/
/* */
/*         {# フリーエリア #}*/
/*         {% if Product.freearea %}*/
/*         <div id="sub_area" class="row">*/
/*             <div class="col-sm-10 col-sm-offset-1">*/
/*                 <div class="freearea">{{ include(template_from_string(Product.freearea)) }}</div>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     <!-- ▲item_detail▲ -->*/
/* {% endblock %}*/
/* */
