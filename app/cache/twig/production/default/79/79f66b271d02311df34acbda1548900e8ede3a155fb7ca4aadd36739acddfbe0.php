<?php

/* Block/news.twig */
class __TwigTemplate_62b50d0df870183c87724f3e7e95796a255f36a764e44c9d32fcfc975373d0ce extends Twig_Template
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
        echo "<div class=\"col-sm-9 news_contents\">
    <div id=\"news_area\">
        <h2 class=\"heading01\">新着情報</h2>
        <div class=\"accordion\">
            <div class=\"newslist\">

                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NewsList"]) ? $context["NewsList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 29
            echo "                <dl>
                    <dt>
                        <span class=\"date\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["News"], "date", array()), "Y/m/d"), "html", null, true);
            echo "</span>
                        <span class=\"news_title\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "title", array()), "html", null, true);
            echo "
                        </span>
                        ";
            // line 35
            if (($this->getAttribute($context["News"], "comment", array()) || $this->getAttribute($context["News"], "url", array()))) {
                // line 36
                echo "                        <span class=\"angle-circle\"><svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg></span>
                        ";
            }
            // line 38
            echo "                    </dt>
                    ";
            // line 39
            if (($this->getAttribute($context["News"], "comment", array()) || $this->getAttribute($context["News"], "url", array()))) {
                // line 40
                echo "                    <dd>";
                echo nl2br($this->getAttribute($context["News"], "comment", array()));
                echo "
                        ";
                // line 41
                if ($this->getAttribute($context["News"], "url", array())) {
                    echo "<br>
                        <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "url", array()), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute($context["News"], "link_method", array()) == "1")) {
                        echo "target=\"_blank\"";
                    }
                    echo ">
                        詳しくはこちら
                        </a>";
                }
                // line 45
                echo "                    </dd>
                    ";
            }
            // line 47
            echo "                </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Block/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 49,  79 => 47,  75 => 45,  65 => 42,  61 => 41,  56 => 40,  54 => 39,  51 => 38,  47 => 36,  45 => 35,  40 => 33,  35 => 31,  31 => 29,  27 => 28,  19 => 22,);
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
/* <div class="col-sm-9 news_contents">*/
/*     <div id="news_area">*/
/*         <h2 class="heading01">新着情報</h2>*/
/*         <div class="accordion">*/
/*             <div class="newslist">*/
/* */
/*                 {% for News in NewsList %}*/
/*                 <dl>*/
/*                     <dt>*/
/*                         <span class="date">{{ News.date|date("Y/m/d") }}</span>*/
/*                         <span class="news_title">*/
/*                             {{ News.title }}*/
/*                         </span>*/
/*                         {% if News.comment or News.url %}*/
/*                         <span class="angle-circle"><svg class="cb cb-angle-down"><use xlink:href="#cb-angle-down" /></svg></span>*/
/*                         {% endif %}*/
/*                     </dt>*/
/*                     {% if News.comment or News.url %}*/
/*                     <dd>{{ News.comment|raw|nl2br}}*/
/*                         {% if News.url %}<br>*/
/*                         <a href="{{ News.url }}" {% if News.link_method == '1' %}target="_blank"{% endif %}>*/
/*                         詳しくはこちら*/
/*                         </a>{% endif %}*/
/*                     </dd>*/
/*                     {% endif %}*/
/*                 </dl>*/
/*                 {% endfor %}*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
