<?php

/* Mypage/navi.twig */
class __TwigTemplate_cec71c50b8ff6d91b72b16ade8e2320b416f44d74757b7188ae323eedeeeaf3f extends Twig_Template
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
        $context["favorite"] = $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array());
        // line 23
        echo "<nav class=\"local_nav ";
        if (((isset($context["favorite"]) ? $context["favorite"] : null) == 1)) {
            echo "favorite";
        }
        echo "\">
    <ul>
        <li class=\"";
        // line 25
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "index")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("mypage");
        echo "\">ご注文履歴</a></li>
        ";
        // line 26
        if (((isset($context["favorite"]) ? $context["favorite"] : null) == 1)) {
            // line 27
            echo "        <li  class=\"";
            if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "favorite")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("mypage_favorite");
            echo "\">お気に入り一覧</a></li>
        ";
        }
        // line 29
        echo "        <li class=\"";
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "change")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("mypage_change");
        echo "\">会員情報編集</a></li>
        <li class=\"";
        // line 30
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "delivery")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("mypage_delivery");
        echo "\">お届け先編集</a></li>
        <li class=\"";
        // line 31
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "withdraw")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("mypage_withdraw");
        echo "\">退会手続き</a></li>
    </ul>
</nav>
<div class=\"message\">
    <p>
        ようこそ ／ ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name02", array()), "html", null, true);
        echo " 様
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "Mypage/navi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  66 => 31,  58 => 30,  49 => 29,  39 => 27,  37 => 26,  29 => 25,  21 => 23,  19 => 22,);
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
/* {% set favorite = BaseInfo.option_favorite_product %}*/
/* <nav class="local_nav {% if favorite == 1 %}favorite{% endif %}">*/
/*     <ul>*/
/*         <li class="{% if mypageno|default('') == 'index' %}active{% endif %}"><a href="{{ url('mypage') }}">ご注文履歴</a></li>*/
/*         {% if favorite == 1 %}*/
/*         <li  class="{% if mypageno|default('') == 'favorite' %}active{% endif %}"><a href="{{ url('mypage_favorite') }}">お気に入り一覧</a></li>*/
/*         {% endif %}*/
/*         <li class="{% if mypageno|default('') == 'change' %}active{% endif %}"><a href="{{ url('mypage_change') }}">会員情報編集</a></li>*/
/*         <li class="{% if mypageno|default('') == 'delivery' %}active{% endif %}"><a href="{{ url('mypage_delivery') }}">お届け先編集</a></li>*/
/*         <li class="{% if mypageno|default('') == 'withdraw' %}active{% endif %}"><a href="{{ url('mypage_withdraw') }}">退会手続き</a></li>*/
/*     </ul>*/
/* </nav>*/
/* <div class="message">*/
/*     <p>*/
/*         ようこそ ／ {{ app.user.name01 }} {{ app.user.name02 }} 様*/
/*     </p>*/
/* </div>*/
/* */
