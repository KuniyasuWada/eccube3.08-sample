<?php

/* Block/footer.twig */
class __TwigTemplate_2e0d04e73a8146d9e8964c9767442ef068e5c5db8e14c76e9ef941d48688b2e9 extends Twig_Template
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
        echo "<div class=\"container-fluid inner\">
    <ul>
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("help_about");
        echo "\">当サイトについて</a></li>
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("help_privacy");
        echo "\">プライバシーポリシー</a></li>
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("help_tradelaw");
        echo "\">特定商取引法に基づく表記</a></li>
        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("contact");
        echo "\">お問い合わせ</a></li>
    </ul>
    <div class=\"footer_logo_area\">
        <p class=\"logo\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo "</a></p>
        <p class=\"copyright\">
            <small>copyright (c) ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo " all rights reserved.</small>
        </p>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Block/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 32,  41 => 30,  35 => 27,  31 => 26,  27 => 25,  23 => 24,  19 => 22,);
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
/* <div class="container-fluid inner">*/
/*     <ul>*/
/*         <li><a href="{{ url('help_about') }}">当サイトについて</a></li>*/
/*         <li><a href="{{ url('help_privacy') }}">プライバシーポリシー</a></li>*/
/*         <li><a href="{{ url('help_tradelaw') }}">特定商取引法に基づく表記</a></li>*/
/*         <li><a href="{{ url('contact') }}">お問い合わせ</a></li>*/
/*     </ul>*/
/*     <div class="footer_logo_area">*/
/*         <p class="logo"><a href="{{ url('homepage') }}">{{ BaseInfo.shop_name }}</a></p>*/
/*         <p class="copyright">*/
/*             <small>copyright (c) {{ BaseInfo.shop_name }} all rights reserved.</small>*/
/*         </p>*/
/*     </div>*/
/* </div>*/
/* */
/* */
