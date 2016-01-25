<?php

/* Mail/order.twig */
class __TwigTemplate_80ee41147e7a771226da367856f7b93580ad29cad9fdfed963cfdfac46e1c401 extends Twig_Template
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
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
        echo " 様

";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "

************************************************
　ご請求金額
************************************************

ご注文番号：";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()), "html", null, true);
        echo "
お支払い合計：";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_total", array())), "html", null, true);
        echo "
お支払い方法：";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_method", array()), "html", null, true);
        echo "
メッセージ：";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "message", array()), "html", null, true);
        echo "


************************************************
　ご注文商品明細
************************************************

";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "OrderDetails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderDetail"]) {
            // line 41
            echo "商品コード: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_code", array()), "html", null, true);
            echo "
商品名: ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_name", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "classcategory_name1", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "classcategory_name2", array()), "html", null, true);
            echo "
単価： ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->env->getExtension('eccube')->getCalcIncTax($this->getAttribute($context["OrderDetail"], "price", array()), $this->getAttribute($context["OrderDetail"], "tax_rate", array()), $this->getAttribute($context["OrderDetail"], "tax_rule", array()))), "html", null, true);
            echo "
数量： ";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["OrderDetail"], "quantity", array())), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
-------------------------------------------------
小　計 ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "subtotal", array())), "html", null, true);
        if (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tax", array()) > 0)) {
            echo "(うち消費税 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tax", array())), "html", null, true);
            echo ")";
        }
        // line 50
        echo "
送　料 ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "delivery_fee_total", array())), "html", null, true);
        echo "
手数料 ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "charge", array())), "html", null, true);
        echo "
============================================
合　計 ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_total", array())), "html", null, true);
        echo "

************************************************
　ご注文者情報
************************************************
お名前　：";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
        echo "　様
";
        // line 60
        if ($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "company_name", array())) {
            // line 61
            echo "会社名　：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "company_name", array()), "html", null, true);
            echo "
";
        }
        // line 63
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "form_country_enable", array())) {
            // line 64
            echo "国　　　：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "Country", array()), "html", null, true);
            echo "
ZIPCODE ：";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip_code", array()), "html", null, true);
            echo "
";
        }
        // line 67
        echo "郵便番号：〒";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip01", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip02", array()), "html", null, true);
        echo "
住所　　：";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "Pref", array()), "name", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr01", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr02", array()), "html", null, true);
        echo "
電話番号：";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel01", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel02", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel03", array()), "html", null, true);
        echo "
FAX番号 ：";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "fax01", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "fax02", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "fax03", array()), "html", null, true);
        echo "

メールアドレス：";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "email", array()), "html", null, true);
        echo "

************************************************
　配送情報
************************************************

";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "Shippings", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 79
            echo "◎お届け先";
            if ($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "multiple", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            }
            // line 80
            echo "
お名前　：";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "name01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "name02", array()), "html", null, true);
            echo "　様
";
            // line 82
            if ($this->getAttribute($context["Shipping"], "company_name", array())) {
                // line 83
                echo "会社名　：";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "company_name", array()), "html", null, true);
                echo "
";
            }
            // line 85
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "form_country_enable", array())) {
                // line 86
                echo "    　国　　　：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Shipping"], "Country", array()), "name", array()), "html", null, true);
                echo "
    　ZIPCODE ：";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip_code", array()), "html", null, true);
                echo "
";
            }
            // line 89
            echo "郵便番号：〒";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip02", array()), "html", null, true);
            echo "
住所　　：";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Shipping"], "Pref", array()), "name", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "addr02", array()), "html", null, true);
            echo "
電話番号：";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel03", array()), "html", null, true);
            echo "
FAX番号 ：";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "fax01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "fax02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "fax03", array()), "html", null, true);
            echo "

お届け日：";
            // line 94
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($context["Shipping"], "shipping_delivery_date", array()))) ? ("指定なし") : ($this->env->getExtension('eccube')->getDateFormatFilter($this->getAttribute($context["Shipping"], "shipping_delivery_date", array())))), "html", null, true);
            echo "
お届け時間：";
            // line 95
            echo twig_escape_filter($this->env, (($this->getAttribute($context["Shipping"], "shipping_delivery_time", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["Shipping"], "shipping_delivery_time", array()), "指定なし")) : ("指定なし")), "html", null, true);
            echo "

";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Shipping"], "ShipmentItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ShipmentItem"]) {
                // line 98
                echo "商品コード: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "product_code", array()), "html", null, true);
                echo "
商品名: ";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "product_name", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "classcategory_name1", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "classcategory_name2", array()), "html", null, true);
                echo "
数量：";
                // line 100
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["ShipmentItem"], "quantity", array())), "html", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ShipmentItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "Mail/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 105,  309 => 104,  288 => 100,  280 => 99,  275 => 98,  271 => 97,  266 => 95,  262 => 94,  253 => 92,  245 => 91,  239 => 90,  232 => 89,  227 => 87,  222 => 86,  220 => 85,  214 => 83,  212 => 82,  207 => 81,  204 => 80,  199 => 79,  182 => 78,  173 => 72,  164 => 70,  156 => 69,  150 => 68,  143 => 67,  138 => 65,  133 => 64,  131 => 63,  125 => 61,  123 => 60,  118 => 59,  110 => 54,  105 => 52,  101 => 51,  98 => 50,  91 => 49,  87 => 47,  78 => 44,  74 => 43,  66 => 42,  61 => 41,  57 => 40,  47 => 33,  43 => 32,  39 => 31,  35 => 30,  26 => 24,  19 => 22,);
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
/* {{ Order.name01 }} {{ Order.name02 }} 様*/
/* */
/* {{ header }}*/
/* */
/* *************************************************/
/* 　ご請求金額*/
/* *************************************************/
/* */
/* ご注文番号：{{ Order.id }}*/
/* お支払い合計：{{ Order.payment_total|price}}*/
/* お支払い方法：{{ Order.payment_method }}*/
/* メッセージ：{{ Order.message }}*/
/* */
/* */
/* *************************************************/
/* 　ご注文商品明細*/
/* *************************************************/
/* */
/* {% for OrderDetail in Order.OrderDetails %}*/
/* 商品コード: {{ OrderDetail.product_code }}*/
/* 商品名: {{ OrderDetail.product_name }}  {{ OrderDetail.classcategory_name1 }}  {{ OrderDetail.classcategory_name2 }}*/
/* 単価： {{ calc_inc_tax(OrderDetail.price, OrderDetail.tax_rate, OrderDetail.tax_rule)|price }}*/
/* 数量： {{ OrderDetail.quantity|number_format }}*/
/* */
/* {% endfor %}*/
/* */
/* -------------------------------------------------*/
/* 小　計 {{ Order.subtotal|price }}{% if Order.tax > 0 %}(うち消費税 {{ Order.tax|price }}){% endif %}*/
/* */
/* 送　料 {{ Order.delivery_fee_total|price}}*/
/* 手数料 {{ Order.charge|price }}*/
/* ============================================*/
/* 合　計 {{ Order.payment_total|price }}*/
/* */
/* *************************************************/
/* 　ご注文者情報*/
/* *************************************************/
/* お名前　：{{ Order.name01 }}{{ Order.name02 }}　様*/
/* {% if Order.company_name %}*/
/* 会社名　：{{ Order.company_name }}*/
/* {% endif %}*/
/* {% if app.config.form_country_enable %}*/
/* 国　　　：{{ Order.Country }}*/
/* ZIPCODE ：{{ Order.zip_code }}*/
/* {% endif %}*/
/* 郵便番号：〒{{ Order.zip01 }}-{{ Order.zip02 }}*/
/* 住所　　：{{ Order.Pref.name }}{{ Order.addr01 }}{{ Order.addr02 }}*/
/* 電話番号：{{ Order.tel01 }}-{{ Order.tel02 }}-{{ Order.tel03 }}*/
/* FAX番号 ：{{ Order.fax01 }}-{{ Order.fax02 }}-{{ Order.fax03 }}*/
/* */
/* メールアドレス：{{ Order.email }}*/
/* */
/* *************************************************/
/* 　配送情報*/
/* *************************************************/
/* */
/* {%  for Shipping in Order.Shippings %}*/
/* ◎お届け先{% if Order.multiple %}{{ loop.index }}{% endif %}*/
/* */
/* お名前　：{{ Shipping.name01 }}{{ Shipping.name02 }}　様*/
/* {% if Shipping.company_name %}*/
/* 会社名　：{{ Shipping.company_name }}*/
/* {% endif %}*/
/* {% if app.config.form_country_enable %}*/
/*     　国　　　：{{ Shipping.Country.name }}*/
/*     　ZIPCODE ：{{ Shipping.zip_code }}*/
/* {% endif %}*/
/* 郵便番号：〒{{ Shipping.zip01 }}-{{ Shipping.zip02 }}*/
/* 住所　　：{{ Shipping.Pref.name }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}*/
/* 電話番号：{{ Shipping.tel01 }}-{{ Shipping.tel02 }}-{{ Shipping.tel03 }}*/
/* FAX番号 ：{{ Shipping.fax01 }}-{{ Shipping.fax02 }}-{{ Shipping.fax03 }}*/
/* */
/* お届け日：{{ Shipping.shipping_delivery_date is empty ? '指定なし' : Shipping.shipping_delivery_date|date_format }}*/
/* お届け時間：{{ Shipping.shipping_delivery_time|default('指定なし') }}*/
/* */
/* {%  for ShipmentItem in Shipping.ShipmentItems %}*/
/* 商品コード: {{ ShipmentItem.product_code }}*/
/* 商品名: {{ ShipmentItem.product_name }}  {{ ShipmentItem.classcategory_name1 }}  {{ ShipmentItem.classcategory_name2 }}*/
/* 数量：{{ ShipmentItem.quantity|number_format }}*/
/* */
/* {% endfor %}*/
/* {% endfor %}*/
/* */
/* {{ footer }}*/
