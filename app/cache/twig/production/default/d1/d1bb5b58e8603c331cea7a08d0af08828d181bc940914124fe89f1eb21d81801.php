<?php

/* Mypage/index.twig */
class __TwigTemplate_ccdb406dbb1e09dc5d2bd72934858921bcbf72251f1f7042eafe3978850b5043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/index.twig", 22);
        $this->blocks = array(
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
        $context["mypageno"] = "index";
        // line 26
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "    <h1 class=\"page-heading\">マイページ/ご注文履歴</h1>
    <div class=\"container-fluid\">

        ";
        // line 32
        $this->loadTemplate("Mypage/navi.twig", "Mypage/index.twig", 32)->display($context);
        // line 33
        echo "
        <div class=\"row\">
            <div class=\"col-md-12\">

                ";
        // line 37
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()) > 0)) {
            // line 38
            echo "                    <p class=\"intro\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()), "html", null, true);
            echo "件</strong>の履歴があります。</p>

                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 41
                echo "                        <div class=\"historylist_column row\">
                            <div class=\"col-sm-4\">
                                <h3 class=\"order_date\">";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Order"], "order_date", array()), "Y/m/d H:i:s"), "html", null, true);
                echo "</h3>
                                <dl class=\"order_detail\">
                                    <dt>ご注文番号：</dt>
                                    <dd>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "</dd>
                                    ";
                // line 47
                if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_mypage_order_status_display", array())) {
                    // line 48
                    echo "                                        <dt>ご注文状況：</dt>
                                        <dd>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "CustomerOrderStatus", array()), "html", null, true);
                    echo "</dd>
                                    ";
                }
                // line 51
                echo "                                </dl>
                                <p><a class=\"btn btn-default btn-sm\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mypage_history", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                echo "\">詳細を見る</a></p>
                            </div>
                            <div class=\"col-sm-8\">
                                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Order"], "OrderDetails", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["OrderDetail"]) {
                    // line 56
                    echo "                                    <div class=\"item_box table\">
                                        <div class=\"tbody\">
                                            <div class=\"tr\">
                                                <div class=\"item_photo td\">
                                                    ";
                    // line 60
                    if ((null === $this->getAttribute($context["OrderDetail"], "Product", array()))) {
                        // line 61
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct(""), "html", null, true);
                        echo "\" />
                                                    ";
                    } else {
                        // line 63
                        echo "                                                        ";
                        if ($this->getAttribute($context["OrderDetail"], "enable", array())) {
                            // line 64
                            echo "                                                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute($this->getAttribute($context["OrderDetail"], "product", array()), "MainListImage", array())), "html", null, true);
                            echo "\">
                                                        ";
                        } else {
                            // line 66
                            echo "                                                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct(""), "html", null, true);
                            echo "\" />
                                                        ";
                        }
                        // line 68
                        echo "                                                    ";
                    }
                    // line 69
                    echo "                                                </div>
                                                <dl class=\"item_detail td\">
                                                    <dt class=\"item_name\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_name", array()), "html", null, true);
                    echo "</dt>
                                                    <dd class=\"item_pattern small\">
                                                        ";
                    // line 73
                    if ( !twig_test_empty($this->getAttribute($context["OrderDetail"], "class_category_name1", array()))) {
                        // line 74
                        echo "                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "class_category_name1", array()), "html", null, true);
                        echo "
                                                        ";
                    }
                    // line 76
                    echo "                                                        ";
                    if ( !twig_test_empty($this->getAttribute($context["OrderDetail"], "class_category_name1", array()))) {
                        // line 77
                        echo "                                                            / ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "class_category_name2", array()), "html", null, true);
                        echo "
                                                        ";
                    }
                    // line 79
                    echo "                                                    </dd>
                                                    <dd class=\"item_price\">";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["OrderDetail"], "price_inc_tax", array())), "html", null, true);
                    echo " ×";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "quantity", array()), "html", null, true);
                    echo "</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div><!--/item_box-->
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderDetail'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                            </div>
                        </div><!--/historylist_column-->
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
                    ";
            // line 90
            $this->loadTemplate("pagination.twig", "Mypage/index.twig", 90)->display(array_merge($context, array("pages" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "paginationData", array()))));
            // line 91
            echo "
                ";
        } else {
            // line 93
            echo "                    <p class=\"intro\">ご注文履歴がありません。</p>
                ";
        }
        // line 95
        echo "
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
";
    }

    public function getTemplateName()
    {
        return "Mypage/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 95,  196 => 93,  192 => 91,  190 => 90,  187 => 89,  179 => 86,  165 => 80,  162 => 79,  156 => 77,  153 => 76,  147 => 74,  145 => 73,  140 => 71,  136 => 69,  133 => 68,  125 => 66,  117 => 64,  114 => 63,  106 => 61,  104 => 60,  98 => 56,  94 => 55,  88 => 52,  85 => 51,  80 => 49,  77 => 48,  75 => 47,  71 => 46,  65 => 43,  61 => 41,  57 => 40,  51 => 38,  49 => 37,  43 => 33,  41 => 32,  36 => 29,  33 => 28,  29 => 22,  27 => 26,  25 => 24,  11 => 22,);
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
/* {% set mypageno = 'index' %}*/
/* */
/* {% set body_class = 'mypage' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="page-heading">マイページ/ご注文履歴</h1>*/
/*     <div class="container-fluid">*/
/* */
/*         {% include 'Mypage/navi.twig' %}*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/* */
/*                 {% if pagination.totalItemCount > 0 %}*/
/*                     <p class="intro"><strong>{{ pagination.totalItemCount }}件</strong>の履歴があります。</p>*/
/* */
/*                     {% for Order in pagination %}*/
/*                         <div class="historylist_column row">*/
/*                             <div class="col-sm-4">*/
/*                                 <h3 class="order_date">{{ Order.order_date|date("Y/m/d H:i:s") }}</h3>*/
/*                                 <dl class="order_detail">*/
/*                                     <dt>ご注文番号：</dt>*/
/*                                     <dd>{{ Order.id }}</dd>*/
/*                                     {% if BaseInfo.option_mypage_order_status_display %}*/
/*                                         <dt>ご注文状況：</dt>*/
/*                                         <dd>{{ Order.CustomerOrderStatus }}</dd>*/
/*                                     {% endif %}*/
/*                                 </dl>*/
/*                                 <p><a class="btn btn-default btn-sm" href="{{ url('mypage_history', {'id': Order.id}) }}">詳細を見る</a></p>*/
/*                             </div>*/
/*                             <div class="col-sm-8">*/
/*                                 {% for OrderDetail in Order.OrderDetails %}*/
/*                                     <div class="item_box table">*/
/*                                         <div class="tbody">*/
/*                                             <div class="tr">*/
/*                                                 <div class="item_photo td">*/
/*                                                     {% if OrderDetail.Product is null %}*/
/*                                                         <img src="{{ app.config.image_save_urlpath }}/{{ '' | no_image_product }}" />*/
/*                                                     {% else %}*/
/*                                                         {% if OrderDetail.enable %}*/
/*                                                             <img src="{{ app.config.image_save_urlpath }}/{{ OrderDetail.product.MainListImage|no_image_product }}">*/
/*                                                         {% else %}*/
/*                                                             <img src="{{ app.config.image_save_urlpath }}/{{ ''|no_image_product }}" />*/
/*                                                         {% endif %}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/*                                                 <dl class="item_detail td">*/
/*                                                     <dt class="item_name">{{ OrderDetail.product_name }}</dt>*/
/*                                                     <dd class="item_pattern small">*/
/*                                                         {% if OrderDetail.class_category_name1 is not empty %}*/
/*                                                             {{ OrderDetail.class_category_name1 }}*/
/*                                                         {% endif %}*/
/*                                                         {% if OrderDetail.class_category_name1 is not empty %}*/
/*                                                             / {{ OrderDetail.class_category_name2 }}*/
/*                                                         {% endif %}*/
/*                                                     </dd>*/
/*                                                     <dd class="item_price">{{ OrderDetail.price_inc_tax|price }} ×{{ OrderDetail.quantity }}</dd>*/
/*                                                 </dl>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div><!--/item_box-->*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div><!--/historylist_column-->*/
/*                     {% endfor %}*/
/* */
/*                     {% include "pagination.twig" with {'pages': pagination.paginationData} %}*/
/* */
/*                 {% else %}*/
/*                     <p class="intro">ご注文履歴がありません。</p>*/
/*                 {% endif %}*/
/* */
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
