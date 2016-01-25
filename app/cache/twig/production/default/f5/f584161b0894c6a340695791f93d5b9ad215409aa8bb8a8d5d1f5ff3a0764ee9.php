<?php

/* pagination.twig */
class __TwigTemplate_b58e6c02d16d134d604a6f8d22f0d6fef8fb13342e27d6bb127e16c2a30a8b16 extends Twig_Template
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
        if (($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "pageCount", array()) > 1)) {
            // line 23
            echo "<div class=\"pagination\">
    <ul>
        ";
            // line 25
            if ($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "previous", array(), "any", true, true)) {
                // line 26
                echo "        <li class=\"pagenation__item-previous\">
            <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("pageno" => $this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "previous", array())))), "html", null, true);
                echo "\"
               aria-label=\"Previous\"><span aria-hidden=\"true\">前へ</span></a>
        </li>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "pagesInRange", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "            ";
                if (($context["page"] == $this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "current", array()))) {
                    // line 34
                    echo "                <li class=\"pagenation__item active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("pageno" => $context["page"]))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                } else {
                    // line 36
                    echo "                <li class=\"pagenation__item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("pageno" => $context["page"]))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                }
                // line 38
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
        ";
            // line 40
            if ($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "next", array(), "any", true, true)) {
                // line 41
                echo "        <li class=\"pagenation__item-next\">
            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("pageno" => $this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "next", array())))), "html", null, true);
                echo "\"
               aria-label=\"Next\"><span aria-hidden=\"true\">次へ</span></a>
        </li>
        ";
            }
            // line 46
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 46,  77 => 42,  74 => 41,  72 => 40,  69 => 39,  63 => 38,  55 => 36,  47 => 34,  44 => 33,  40 => 32,  37 => 31,  30 => 27,  27 => 26,  25 => 25,  21 => 23,  19 => 22,);
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
/* {% if pages.pageCount > 1 %}*/
/* <div class="pagination">*/
/*     <ul>*/
/*         {% if pages.previous is defined %}*/
/*         <li class="pagenation__item-previous">*/
/*             <a href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': pages.previous})) }}"*/
/*                aria-label="Previous"><span aria-hidden="true">前へ</span></a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% for page in pages.pagesInRange %}*/
/*             {% if page == pages.current %}*/
/*                 <li class="pagenation__item active"><a href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': page})) }}"> {{ page }} </a></li>*/
/*             {% else %}*/
/*                 <li class="pagenation__item"><a href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': page})) }}"> {{ page }} </a></li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% if pages.next is defined %}*/
/*         <li class="pagenation__item-next">*/
/*             <a href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'pageno': pages.next})) }}"*/
/*                aria-label="Next"><span aria-hidden="true">次へ</span></a>*/
/*         </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* </div>*/
/* {% endif %}*/
/* */
