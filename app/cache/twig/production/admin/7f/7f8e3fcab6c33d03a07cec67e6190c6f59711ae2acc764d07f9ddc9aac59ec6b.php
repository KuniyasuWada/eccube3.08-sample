<?php

/* index.twig */
class __TwigTemplate_5a0f8b9679fb70484b1947236934ba5622ac1b852fb0af869074c3b60b1d5c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "index.twig", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        echo "ホーム";
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script>
\$(function(){
    \$('.order-summary-detail').click(function() {
        \$('#admin_search_order_status').val(\$(this).attr('data-order-status'));
        \$('#order-state').submit();
        return false;
    });
    \$('.shop-stock-detail').click(function() {
        \$('#shop-state-stock').submit();
        return false;
    });
    \$('.shop-member-detail').click(function() {
        \$('#shop-state-member').submit();
        return false;
    });
});
</script>
";
    }

    // line 46
    public function block_main($context, array $blocks = array())
    {
        // line 47
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                <form id=\"order-state\" name=\"form1\" action=\"";
        // line 50
        echo $this->env->getExtension('routing')->getUrl("admin_order");
        echo "\" method=\"post\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchOrderForm"]) ? $context["searchOrderForm"] : null), "_token", array()), 'widget');
        echo "
                <input type=\"hidden\" id=\"admin_search_order_status\" name=\"admin_search_order[status]\" value=\"\">
                <div class=\"box\" id=\"order_info\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">受注状況<a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getUrl("admin_order");
        echo "\" class=\"icon_wrap\"><svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg></a></h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding no-border\">
                        <div class=\"link_list\">
                            <div class=\"tableish\">
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["OrderStatuses"]) ? $context["OrderStatuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderStatus"]) {
            // line 61
            echo "                                <a href=\"\" class=\"item_box tr order-summary-detail\" data-order-status=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderStatus"], "id", array()), "html", null, true);
            echo "\">
                                    <div class=\"td\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderStatus"], "name", array()), "html", null, true);
            echo "</div>
                                    <div class=\"item_number text-right td\">";
            // line 63
            echo twig_escape_filter($this->env, ((( !twig_test_empty((isset($context["Orders"]) ? $context["Orders"] : null)) && $this->getAttribute((isset($context["Orders"]) ? $context["Orders"] : null), $this->getAttribute($context["OrderStatus"], "id", array()), array(), "array", true, true))) ? ($this->getAttribute((isset($context["Orders"]) ? $context["Orders"] : null), $this->getAttribute($context["OrderStatus"], "id", array()), array(), "array")) : (0)), "html", null, true);
            echo "</div>
                                    <div class=\"icon_link td\">
                                        <svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>
                                    </div>
                                </a><!-- /.item_box -->
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                </form>
            </div><!-- /.col -->

            <div class=\"col-md-6\">
                <div class=\"box\" id=\"cube_news\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">お知らせ</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding no-border\">
                        <iframe class=\"link_list_wrap\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "eccube_info_url", array()), "html", null, true);
        echo "\"></iframe>
                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"box\" id=\"sale_info\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">売り上げ状況</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding no-border\">
                        <div class=\"sale_box clearfix\">
                            <div class=\"monthly_sale\">
                                <div class=\"item_number\">
                                    ";
        // line 99
        echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["salesThisMonth"]) ? $context["salesThisMonth"] : null))) ? ("¥ 0") : ($this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["salesThisMonth"]) ? $context["salesThisMonth"] : null), "order_amount", array())))), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["salesThisMonth"]) ? $context["salesThisMonth"] : null))) ? (0) : (twig_number_format_filter($this->env, $this->getAttribute((isset($context["salesThisMonth"]) ? $context["salesThisMonth"] : null), "order_count", array())))), "html", null, true);
        echo " <span>件</span>
                                    <div class=\"small\">今月の売上高 / 売上件数</div>
                                </div>
                            </div>
                            <div class=\"yesterday_sale\">
                                <div class=\"item_number\">
                                    ";
        // line 105
        echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["salesYesterday"]) ? $context["salesYesterday"] : null))) ? ("¥ 0") : ($this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["salesYesterday"]) ? $context["salesYesterday"] : null), "order_amount", array())))), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["salesYesterday"]) ? $context["salesYesterday"] : null))) ? (0) : (twig_number_format_filter($this->env, $this->getAttribute((isset($context["salesYesterday"]) ? $context["salesYesterday"] : null), "order_count", array())))), "html", null, true);
        echo " <span>件</span>
                                    <div class=\"small\">昨日の売上高 / 売上件数</div>
                                </div>
                            </div>
                            <div class=\"today_sale\">
                                <div class=\"item_number\">
                                    ";
        // line 111
        echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["salesToday"]) ? $context["salesToday"] : null))) ? ("¥ 0") : ($this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["salesToday"]) ? $context["salesToday"] : null), "order_amount", array())))), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["salesToday"]) ? $context["salesToday"] : null))) ? (0) : (twig_number_format_filter($this->env, $this->getAttribute((isset($context["salesToday"]) ? $context["salesToday"] : null), "order_count", array())))), "html", null, true);
        echo "  <span>件</span>
                                    <div class=\"small\">今日の売上高 / 売上件数</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class=\"col-md-4\">
                <div class=\"box\" id=\"shop_info\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">ショップ状況</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding no-border\">
                        <form id=\"shop-state-stock\" name=\"form2\" action=\"";
        // line 125
        echo $this->env->getExtension('routing')->getUrl("admin_homepage_nonstock");
        echo "\" method=\"post\">
                            ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductForm"]) ? $context["searchProductForm"] : null), "_token", array()), 'widget');
        echo "
                        </form>
                        <form id=\"shop-state-member\" name=\"form3\" action=\"";
        // line 128
        echo $this->env->getExtension('routing')->getUrl("admin_customer");
        echo "\" method=\"post\">
                            ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchCustomerForm"]) ? $context["searchCustomerForm"] : null), "_token", array()), 'widget');
        echo "
                            <input type=\"hidden\" id=\"admin_search_customer_status_1\" name=\"admin_search_customer[customer_status]\" value=\"2\">
                        </form>
                        <div class=\"link_list\">
                            <div class=\"tableish\">
                                <a href=\"\" class=\"item_box tr shop-stock-detail\">
                                    <div class=\"icon td\"><svg class=\"cb cb-tag-slash\"><use xlink:href=\"#cb-tag-slash\" /></svg></div>
                                    <div class=\"item_number td\">";
        // line 136
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["countNonStockProducts"]) ? $context["countNonStockProducts"] : null)), "html", null, true);
        echo "<div class=\"small\">在庫切れ商品</div></div>
                                    <div class=\"icon_link td\">
                                        <svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>
                                    </div>
                                </a><!-- /.item_box -->
                                <a href=\"\" class=\"item_box tr shop-member-detail\">
                                    <div class=\"icon td\"><svg class=\"cb cb-users\"><use xlink:href=\"#cb-users\" /></svg></div>
                                    <div class=\"item_number text-left td\">";
        // line 143
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["countCustomers"]) ? $context["countCustomers"] : null)), "html", null, true);
        echo "<div class=\"small\">会員数</div></div>
                                    <div class=\"icon_link td\">
                                        <svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>
                                    </div>
                                </a><!-- /.item_box -->
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 143,  211 => 136,  201 => 129,  197 => 128,  192 => 126,  188 => 125,  169 => 111,  158 => 105,  147 => 99,  127 => 82,  112 => 69,  100 => 63,  96 => 62,  91 => 61,  87 => 60,  79 => 55,  72 => 51,  68 => 50,  63 => 47,  60 => 46,  39 => 27,  36 => 26,  30 => 24,  11 => 22,);
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
/* {% block title %}ホーム{% endblock %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/* $(function(){*/
/*     $('.order-summary-detail').click(function() {*/
/*         $('#admin_search_order_status').val($(this).attr('data-order-status'));*/
/*         $('#order-state').submit();*/
/*         return false;*/
/*     });*/
/*     $('.shop-stock-detail').click(function() {*/
/*         $('#shop-state-stock').submit();*/
/*         return false;*/
/*     });*/
/*     $('.shop-member-detail').click(function() {*/
/*         $('#shop-state-member').submit();*/
/*         return false;*/
/*     });*/
/* });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 <form id="order-state" name="form1" action="{{ url('admin_order') }}" method="post">*/
/*                 {{ form_widget(searchOrderForm._token) }}*/
/*                 <input type="hidden" id="admin_search_order_status" name="admin_search_order[status]" value="">*/
/*                 <div class="box" id="order_info">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">受注状況<a href="{{ url('admin_order') }}" class="icon_wrap"><svg class="cb cb-angle-right"> <use xlink:href="#cb-angle-right" /></svg></a></h3>*/
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body no-padding no-border">*/
/*                         <div class="link_list">*/
/*                             <div class="tableish">*/
/*                                 {% for OrderStatus in OrderStatuses %}*/
/*                                 <a href="" class="item_box tr order-summary-detail" data-order-status="{{ OrderStatus.id }}">*/
/*                                     <div class="td">{{ OrderStatus.name }}</div>*/
/*                                     <div class="item_number text-right td">{{ Orders is not empty and Orders[OrderStatus.id] is defined ? Orders[OrderStatus.id] : 0 }}</div>*/
/*                                     <div class="icon_link td">*/
/*                                         <svg class="cb cb-angle-right"> <use xlink:href="#cb-angle-right" /></svg>*/
/*                                     </div>*/
/*                                 </a><!-- /.item_box -->*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*                 </form>*/
/*             </div><!-- /.col -->*/
/* */
/*             <div class="col-md-6">*/
/*                 <div class="box" id="cube_news">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">お知らせ</h3>*/
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body no-padding no-border">*/
/*                         <iframe class="link_list_wrap" src="{{ app.config.eccube_info_url }}"></iframe>*/
/*                     </div><!-- /.box-body -->*/
/* */
/*                 </div><!-- /.box -->*/
/*             </div><!-- /.col -->*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-8">*/
/*                 <div class="box" id="sale_info">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">売り上げ状況</h3>*/
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body no-padding no-border">*/
/*                         <div class="sale_box clearfix">*/
/*                             <div class="monthly_sale">*/
/*                                 <div class="item_number">*/
/*                                     {{ salesThisMonth is empty ? '¥ 0' : salesThisMonth.order_amount|price }} / {{ salesThisMonth is empty ? 0 : salesThisMonth.order_count|number_format }} <span>件</span>*/
/*                                     <div class="small">今月の売上高 / 売上件数</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="yesterday_sale">*/
/*                                 <div class="item_number">*/
/*                                     {{ salesYesterday is empty ? '¥ 0' : salesYesterday.order_amount|price }} / {{ salesYesterday is empty ? 0 : salesYesterday.order_count|number_format }} <span>件</span>*/
/*                                     <div class="small">昨日の売上高 / 売上件数</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="today_sale">*/
/*                                 <div class="item_number">*/
/*                                     {{ salesToday is empty ? '¥ 0' : salesToday.order_amount|price }} / {{ salesToday is empty ? 0 : salesToday.order_count|number_format }}  <span>件</span>*/
/*                                     <div class="small">今日の売上高 / 売上件数</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div><!-- /.col -->*/
/*             <div class="col-md-4">*/
/*                 <div class="box" id="shop_info">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">ショップ状況</h3>*/
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body no-padding no-border">*/
/*                         <form id="shop-state-stock" name="form2" action="{{ url('admin_homepage_nonstock') }}" method="post">*/
/*                             {{ form_widget(searchProductForm._token) }}*/
/*                         </form>*/
/*                         <form id="shop-state-member" name="form3" action="{{ url('admin_customer') }}" method="post">*/
/*                             {{ form_widget(searchCustomerForm._token) }}*/
/*                             <input type="hidden" id="admin_search_customer_status_1" name="admin_search_customer[customer_status]" value="2">*/
/*                         </form>*/
/*                         <div class="link_list">*/
/*                             <div class="tableish">*/
/*                                 <a href="" class="item_box tr shop-stock-detail">*/
/*                                     <div class="icon td"><svg class="cb cb-tag-slash"><use xlink:href="#cb-tag-slash" /></svg></div>*/
/*                                     <div class="item_number td">{{ countNonStockProducts|number_format }}<div class="small">在庫切れ商品</div></div>*/
/*                                     <div class="icon_link td">*/
/*                                         <svg class="cb cb-angle-right"> <use xlink:href="#cb-angle-right" /></svg>*/
/*                                     </div>*/
/*                                 </a><!-- /.item_box -->*/
/*                                 <a href="" class="item_box tr shop-member-detail">*/
/*                                     <div class="icon td"><svg class="cb cb-users"><use xlink:href="#cb-users" /></svg></div>*/
/*                                     <div class="item_number text-left td">{{ countCustomers|number_format }}<div class="small">会員数</div></div>*/
/*                                     <div class="icon_link td">*/
/*                                         <svg class="cb cb-angle-right"> <use xlink:href="#cb-angle-right" /></svg>*/
/*                                     </div>*/
/*                                 </a><!-- /.item_box -->*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div><!-- /.col -->*/
/*         </div>*/
/* {% endblock %}*/
/* */
