<?php

/* Cart/index.twig */
class __TwigTemplate_28504605d620a36d459082e2e3b29e9e32089e034af933f49cdd8e85b0dc1de9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Cart/index.twig", 22);
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
        $context["body_class"] = "cart_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "    <h1 class=\"page-heading\">ショッピングカート</h1>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 32
            echo "                <div class=\"flowline step3\">
                ";
        } else {
            // line 34
            echo "                <div class=\"flowline step4\">
                ";
        }
        // line 36
        echo "                    <ul class=\"clearfix\">
                        <li class=\"active\"><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 39
            echo "                        <li><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 42
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 46
        echo "                    </ul>
                </div>

                ";
        // line 49
        $context["productStr"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.product"), "method");
        // line 50
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.error"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 51
            echo "                    ";
            $context["idx"] = $this->getAttribute($context["loop"], "index0", array());
            // line 52
            echo "                    ";
            if ($this->getAttribute((isset($context["productStr"]) ? $context["productStr"] : null), (isset($context["idx"]) ? $context["idx"] : null), array(), "array", true, true)) {
                // line 53
                echo "                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>
                            ";
                // line 56
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["error"], array("%product%" => $this->getAttribute((isset($context["productStr"]) ? $context["productStr"] : null), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"))), "html", null, true));
                echo "
                        </p>
                    </div>
                    ";
            } else {
                // line 60
                echo "                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
                // line 62
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["error"]), "html", null, true));
                echo "
                        </p>
                    </div>
                    ";
            }
            // line 66
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.cart.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 68
            echo "                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 70
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["error"]), "html", null, true));
            echo "
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
                ";
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : null), "CartItems", array())) > 0)) {
            // line 76
            echo "                <form name=\"form\" id=\"form_cart\" method=\"post\" action=\"";
            echo $this->env->getExtension('routing')->getUrl("cart");
            echo "\">
                    <p class=\"message\">
                        商品の合計金額は「<strong>";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : null), "total_price", array())), "html", null, true);
            echo "</strong>」です。
                        ";
            // line 79
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "delivery_free_amount", array()) && $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "delivery_free_quantity", array()))) {
                // line 80
                echo "                            <br />
                            ";
                // line 81
                if ((isset($context["is_delivery_free"]) ? $context["is_delivery_free"] : null)) {
                    // line 82
                    echo "                                現在送料無料です。
                            ";
                } else {
                    // line 84
                    echo "                                あと「<strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter((isset($context["least"]) ? $context["least"] : null)), "html", null, true);
                    echo "</strong>」または「<strong>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["quantity"]) ? $context["quantity"] : null)), "html", null, true);
                    echo "個</strong>」のお買い上げで<strong class=\"text-primary\">送料無料</strong>になります。
                            ";
                }
                // line 86
                echo "                        ";
            } elseif ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "delivery_free_amount", array())) {
                // line 87
                echo "                            <br />
                            ";
                // line 88
                if ((isset($context["is_delivery_free"]) ? $context["is_delivery_free"] : null)) {
                    // line 89
                    echo "                                現在送料無料です。
                            ";
                } else {
                    // line 91
                    echo "                                あと「<strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter((isset($context["least"]) ? $context["least"] : null)), "html", null, true);
                    echo "</strong>」のお買い上げで<strong class=\"text-primary\">送料無料</strong>になります。
                            ";
                }
                // line 93
                echo "                        ";
            } elseif ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "delivery_free_quantity", array())) {
                // line 94
                echo "                            <br />
                            ";
                // line 95
                if ((isset($context["is_delivery_free"]) ? $context["is_delivery_free"] : null)) {
                    // line 96
                    echo "                                現在送料無料です。
                            ";
                } else {
                    // line 98
                    echo "                                あと「<strong>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["quantity"]) ? $context["quantity"] : null)), "html", null, true);
                    echo "個</strong>」のお買い上げで<strong class=\"text-primary\">送料無料</strong>になります。
                            ";
                }
                // line 100
                echo "                        ";
            }
            // line 101
            echo "                    </p>
                    <div class=\"cart_item table\">
                        <div class=\"thead\">
                            <ol>
                                <li>削除</li>
                                <li>商品内容</li>
                                <li>数量</li>
                                <li>小計</li>
                            </ol>
                        </div>
                        <div class=\"tbody\">

                            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : null), "CartItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                // line 114
                echo "                                ";
                $context["ProductClass"] = $this->getAttribute($context["CartItem"], "Object", array());
                // line 115
                echo "                                ";
                $context["Product"] = $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "Product", array());
                // line 116
                echo "
                                <div class=\"item_box tr\">
                                    <div class=\"icon_edit td\">
                                        <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cart_remove", array("productClassId" => $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <svg class=\"cb cb-close\"><use xlink:href=\"#cb-close\" /></svg>
                                        </a>
                                    </div>
                                    <div class=\"td table\">
                                        <div class=\"item_photo\">
                                            <a target=\"_blank\" href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("product_detail", array("id" => $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "id", array()))), "html", null, true);
                echo "\">
                                                <img src=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "MainListImage", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "name", array()), "html", null, true);
                echo "\" />
                                            </a>
                                        </div>
                                        <dl class=\"item_detail\">
                                            <dt class=\"item_name text-default\">
                                                <a target=\"_blank\" href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("product_detail", array("id" => $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "name", array()), "html", null, true);
                echo "</a>
                                            </dt>
                                            <dd class=\"item_pattern small\">
                                                ";
                // line 134
                if (($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory1", array()) && $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory1", array()), "id", array()))) {
                    // line 135
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory1", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory1", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 137
                echo "                                                ";
                if (($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory2", array()) && $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory2", array()), "id", array()))) {
                    // line 138
                    echo "                                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory2", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory2", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 140
                echo "                                            </dd>
                                            <dd class=\"item_price\">￥";
                // line 141
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "price", array())), "html", null, true);
                echo "</dd>
                                            <dd class=\"item_subtotal\">小計：￥";
                // line 142
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "total_price", array())), "html", null, true);
                echo "</dd>
                                        </dl>
                                    </div>
                                    <div class=\"item_quantity td\">
                                        ";
                // line 146
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "quantity", array())), "html", null, true);
                echo "
                                        <ul>
                                            <li>
                                                ";
                // line 149
                if (($this->getAttribute($context["CartItem"], "quantity", array()) > 1)) {
                    // line 150
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cart_down", array("productClassId" => $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"put\" data-confirm=\"false\"><svg class=\"cb cb-minus\"><use xlink:href=\"#cb-minus\" /></svg></a>
                                                ";
                } else {
                    // line 152
                    echo "                                                    <span><svg class=\"cb cb-minus\"><use xlink:href=\"#cb-minus\" /></svg></span>
                                                ";
                }
                // line 154
                echo "                                            </li>
                                            <li>
                                                <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cart_up", array("productClassId" => $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\"><svg class=\"cb cb-plus\"><use xlink:href=\"#cb-plus\" /></svg></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"item_subtotal td\">￥";
                // line 160
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "total_price", array())), "html", null, true);
                echo "</div>
                                </div><!--/item_box-->
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "
                        </div>
                    </div><!--/cart_item-->

                    <div class=\"total_box\">
                        <dl class=\"total_price\">
                            <dt>合計：</dt>
                            <dd class=\"text-primary\">￥";
            // line 170
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : null), "total_price", array())), "html", null, true);
            echo "</dd>
                        </dl>
                        <div class=\"btn_group\">

                            <p>
                                <a href=\"";
            // line 175
            echo $this->env->getExtension('routing')->getPath("cart_buystep");
            echo "\" class=\"btn btn-primary btn-block\">レジに進む</a>
                            </p>
                            <p>
                                <a href=\"";
            // line 178
            echo $this->env->getExtension('routing')->getUrl("top");
            echo "\" class=\"btn btn-info btn-block\">お買い物を続ける</a>
                            </p>
                        </div>
                    </div>

                </form>
                ";
        } else {
            // line 185
            echo "                <div class=\"message\">
                    <p class=\"errormsg bg-danger\">
                        <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>現在カート内に商品はございません。
                    </p>
                </div>
                ";
        }
        // line 191
        echo "
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
";
    }

    public function getTemplateName()
    {
        return "Cart/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 191,  401 => 185,  391 => 178,  385 => 175,  377 => 170,  368 => 163,  359 => 160,  350 => 156,  346 => 154,  342 => 152,  334 => 150,  332 => 149,  326 => 146,  319 => 142,  315 => 141,  312 => 140,  304 => 138,  301 => 137,  293 => 135,  291 => 134,  283 => 131,  271 => 126,  267 => 125,  256 => 119,  251 => 116,  248 => 115,  245 => 114,  241 => 113,  227 => 101,  224 => 100,  218 => 98,  214 => 96,  212 => 95,  209 => 94,  206 => 93,  200 => 91,  196 => 89,  194 => 88,  191 => 87,  188 => 86,  180 => 84,  176 => 82,  174 => 81,  171 => 80,  169 => 79,  165 => 78,  159 => 76,  157 => 75,  154 => 74,  144 => 70,  140 => 68,  135 => 67,  121 => 66,  114 => 62,  110 => 60,  103 => 56,  98 => 53,  95 => 52,  92 => 51,  74 => 50,  72 => 49,  67 => 46,  61 => 42,  56 => 39,  54 => 38,  50 => 36,  46 => 34,  42 => 32,  40 => 31,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
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
/* {% set body_class = 'cart_page' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="page-heading">ショッピングカート</h1>*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-md-10 col-md-offset-1">*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*                 <div class="flowline step3">*/
/*                 {% else %}*/
/*                 <div class="flowline step4">*/
/*                 {% endif %}*/
/*                     <ul class="clearfix">*/
/*                         <li class="active"><span class="flow_number">1</span><br>カートの商品</li>*/
/*                     {% if is_granted('ROLE_USER') %}*/
/*                         <li><span class="flow_number">2</span><br>ご注文内容確認</li>*/
/*                         <li><span class="flow_number">3</span><br>完了</li>*/
/*                     {% else %}*/
/*                         <li><span class="flow_number">2</span><br>お客様情報</li>*/
/*                         <li><span class="flow_number">3</span><br>ご注文内容確認</li>*/
/*                         <li><span class="flow_number">4</span><br>完了</li>*/
/*                     {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 {% set productStr = app.session.flashbag.get('eccube.front.request.product') %}*/
/*                 {% for error in app.session.flashbag.get('eccube.front.request.error')  %}*/
/*                     {% set idx = loop.index0 %}*/
/*                     {% if productStr[idx] is defined %}*/
/*                     <div class="message">*/
/*                         <p class="errormsg bg-danger">*/
/*                             <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>*/
/*                             {{ error|trans({'%product%':productStr[idx]})|nl2br }}*/
/*                         </p>*/
/*                     </div>*/
/*                     {% else %}*/
/*                     <div class="message">*/
/*                         <p class="errormsg bg-danger">*/
/*                             <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>{{ error|trans|nl2br }}*/
/*                         </p>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% for error in app.session.flashbag.get('eccube.front.cart.error')  %}*/
/*                     <div class="message">*/
/*                         <p class="errormsg bg-danger">*/
/*                             <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>{{ error|trans|nl2br }}*/
/*                         </p>*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 {% if Cart.CartItems|length > 0 %}*/
/*                 <form name="form" id="form_cart" method="post" action="{{ url('cart') }}">*/
/*                     <p class="message">*/
/*                         商品の合計金額は「<strong>{{ Cart.total_price|price }}</strong>」です。*/
/*                         {% if BaseInfo.delivery_free_amount and BaseInfo.delivery_free_quantity %}*/
/*                             <br />*/
/*                             {% if is_delivery_free %}*/
/*                                 現在送料無料です。*/
/*                             {% else %}*/
/*                                 あと「<strong>{{ least|price }}</strong>」または「<strong>{{ quantity|number_format }}個</strong>」のお買い上げで<strong class="text-primary">送料無料</strong>になります。*/
/*                             {% endif %}*/
/*                         {% elseif BaseInfo.delivery_free_amount %}*/
/*                             <br />*/
/*                             {% if is_delivery_free %}*/
/*                                 現在送料無料です。*/
/*                             {% else %}*/
/*                                 あと「<strong>{{ least|price }}</strong>」のお買い上げで<strong class="text-primary">送料無料</strong>になります。*/
/*                             {% endif %}*/
/*                         {% elseif BaseInfo.delivery_free_quantity %}*/
/*                             <br />*/
/*                             {% if is_delivery_free %}*/
/*                                 現在送料無料です。*/
/*                             {% else %}*/
/*                                 あと「<strong>{{ quantity|number_format }}個</strong>」のお買い上げで<strong class="text-primary">送料無料</strong>になります。*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     </p>*/
/*                     <div class="cart_item table">*/
/*                         <div class="thead">*/
/*                             <ol>*/
/*                                 <li>削除</li>*/
/*                                 <li>商品内容</li>*/
/*                                 <li>数量</li>*/
/*                                 <li>小計</li>*/
/*                             </ol>*/
/*                         </div>*/
/*                         <div class="tbody">*/
/* */
/*                             {% for CartItem in Cart.CartItems %}*/
/*                                 {% set ProductClass = CartItem.Object %}*/
/*                                 {% set Product = ProductClass.Product %}*/
/* */
/*                                 <div class="item_box tr">*/
/*                                     <div class="icon_edit td">*/
/*                                         <a href="{{ url('cart_remove', {'productClassId': ProductClass.id }) }}" {{ csrf_token_for_anchor() }} data-method="put" data-message="カートから商品を削除してもよろしいですか?">*/
/*                                             <svg class="cb cb-close"><use xlink:href="#cb-close" /></svg>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <div class="td table">*/
/*                                         <div class="item_photo">*/
/*                                             <a target="_blank" href="{{ url('product_detail', {id : Product.id} ) }}">*/
/*                                                 <img src="{{ app.config.image_save_urlpath }}/{{ Product.MainListImage|no_image_product }}" alt="{{ Product.name }}" />*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <dl class="item_detail">*/
/*                                             <dt class="item_name text-default">*/
/*                                                 <a target="_blank" href="{{ url('product_detail', {id : Product.id} ) }}">{{ Product.name }}</a>*/
/*                                             </dt>*/
/*                                             <dd class="item_pattern small">*/
/*                                                 {% if ProductClass.ClassCategory1 and ProductClass.ClassCategory1.id %}*/
/*                                                     {{ ProductClass.ClassCategory1.ClassName }}：{{ ProductClass.ClassCategory1 }}*/
/*                                                 {% endif %}*/
/*                                                 {% if ProductClass.ClassCategory2 and ProductClass.ClassCategory2.id %}*/
/*                                                     <br>{{ ProductClass.ClassCategory2.ClassName }}：{{ ProductClass.ClassCategory2 }}*/
/*                                                 {% endif %}*/
/*                                             </dd>*/
/*                                             <dd class="item_price">￥{{ CartItem.price|number_format }}</dd>*/
/*                                             <dd class="item_subtotal">小計：￥{{ CartItem.total_price|number_format }}</dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="item_quantity td">*/
/*                                         {{ CartItem.quantity|number_format }}*/
/*                                         <ul>*/
/*                                             <li>*/
/*                                                 {% if CartItem.quantity > 1 %}*/
/*                                                     <a href="{{ url('cart_down', {'productClassId': ProductClass.id}) }}" {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false"><svg class="cb cb-minus"><use xlink:href="#cb-minus" /></svg></a>*/
/*                                                 {% else %}*/
/*                                                     <span><svg class="cb cb-minus"><use xlink:href="#cb-minus" /></svg></span>*/
/*                                                 {% endif %}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="{{ url('cart_up', {'productClassId': ProductClass.id}) }}" {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false"><svg class="cb cb-plus"><use xlink:href="#cb-plus" /></svg></a>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <div class="item_subtotal td">￥{{ CartItem.total_price|number_format }}</div>*/
/*                                 </div><!--/item_box-->*/
/*                             {% endfor %}*/
/* */
/*                         </div>*/
/*                     </div><!--/cart_item-->*/
/* */
/*                     <div class="total_box">*/
/*                         <dl class="total_price">*/
/*                             <dt>合計：</dt>*/
/*                             <dd class="text-primary">￥{{ Cart.total_price|number_format }}</dd>*/
/*                         </dl>*/
/*                         <div class="btn_group">*/
/* */
/*                             <p>*/
/*                                 <a href="{{ path('cart_buystep') }}" class="btn btn-primary btn-block">レジに進む</a>*/
/*                             </p>*/
/*                             <p>*/
/*                                 <a href="{{ url('top') }}" class="btn btn-info btn-block">お買い物を続ける</a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </form>*/
/*                 {% else %}*/
/*                 <div class="message">*/
/*                     <p class="errormsg bg-danger">*/
/*                         <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>現在カート内に商品はございません。*/
/*                     </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/* */
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
