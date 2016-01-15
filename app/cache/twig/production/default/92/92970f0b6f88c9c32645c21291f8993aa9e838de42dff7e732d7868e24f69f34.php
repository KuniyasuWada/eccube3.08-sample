<?php

/* Block/search_product.twig */
class __TwigTemplate_f46fcf0c218d0c9007986eb1175f9c747f46b1a3e50d95503407c8951a76ad6f extends Twig_Template
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
        echo "\t\t\t<div class=\"drawer_block pc header_bottom_area\">
                <div id=\"search\" class=\"search\">
                    <form method=\"get\" id=\"searchform\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("product_list");
        echo "\">
                        <div class=\"search_inner\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category_id", array()), 'widget');
        echo "
                            <div class=\"input_search clearfix\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("placeholder" => "キーワードを入力")));
        echo "
                                <button type=\"submit\" class=\"bt_search\"><svg class=\"cb cb-search\"><use xlink:href=\"#cb-search\" /></svg></button>
                            </div>
                        </div>
                    </form>
                </div>
\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "Block/search_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 28,  28 => 26,  23 => 24,  19 => 22,);
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
/* 			<div class="drawer_block pc header_bottom_area">*/
/*                 <div id="search" class="search">*/
/*                     <form method="get" id="searchform" action="{{ path('product_list') }}">*/
/*                         <div class="search_inner">*/
/*                             {{ form_widget(form.category_id) }}*/
/*                             <div class="input_search clearfix">*/
/*                                 {{ form_widget(form.name, {'attr': { 'placeholder' : "キーワードを入力" }} ) }}*/
/*                                 <button type="submit" class="bt_search"><svg class="cb cb-search"><use xlink:href="#cb-search" /></svg></button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/* 			</div>*/
