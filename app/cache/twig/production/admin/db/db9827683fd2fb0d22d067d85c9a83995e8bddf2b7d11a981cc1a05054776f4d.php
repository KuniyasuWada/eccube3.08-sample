<?php

/* nav.twig */
class __TwigTemplate_4d4e491f7cdeb7dd0ed1945c7fd00d471d79b8fba04df53b4831e9bf2e77ba44 extends Twig_Template
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
        echo "
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "nav", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["level1"]) {
            if (!twig_in_filter((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "baseUrl", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_route", array())) . "/") . $this->getAttribute($context["level1"], "id", array())), (isset($context["AuthorityRoles"]) ? $context["AuthorityRoles"] : null))) {
                // line 24
                echo "    <li class=\"";
                if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 0, array(), "array") == $this->getAttribute($context["level1"], "id", array()))) {
                    echo "active";
                }
                echo "\">
        ";
                // line 25
                if (($this->getAttribute($context["level1"], "has_child", array(), "any", true, true) && ($this->getAttribute($context["level1"], "has_child", array()) == true))) {
                    // line 26
                    echo "            <a class=\"toggle\">
                <svg class=\"cb ";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "icon", array()), "html", null, true);
                    echo "\"> <use xlink:href=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "icon", array()), "html", null, true);
                    echo "\" /></svg>
                ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "name", array()), "html", null, true);
                    echo "
                <svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg>
            </a>
            <ul ";
                    // line 31
                    if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 0, array(), "array") == $this->getAttribute($context["level1"], "id", array()))) {
                        echo "class=\"active\" style=\"display: block;\"";
                    }
                    echo ">
                ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["level1"], "child", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["level2"]) {
                        if (!twig_in_filter((((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "baseUrl", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_route", array())) . "/") . $this->getAttribute($context["level1"], "id", array())) . "/") . $this->getAttribute($context["level2"], "id", array())), (isset($context["AuthorityRoles"]) ? $context["AuthorityRoles"] : null))) {
                            // line 33
                            echo "                    ";
                            if (($this->getAttribute($context["level2"], "url", array(), "any", true, true) && twig_in_filter($this->env->getExtension('routing')->getPath($this->getAttribute($context["level2"], "url", array())), (isset($context["AuthorityRoles"]) ? $context["AuthorityRoles"] : null)))) {
                                // line 34
                                echo "                    ";
                            } else {
                                // line 35
                                echo "                    <li class=\"";
                                if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 1, array(), "array") == $this->getAttribute($context["level2"], "id", array()))) {
                                    echo "active";
                                }
                                echo "\">
                        ";
                                // line 36
                                if (($this->getAttribute($context["level2"], "has_child", array(), "any", true, true) && ($this->getAttribute($context["level2"], "has_child", array()) == true))) {
                                    // line 37
                                    echo "                            <a class=\"toggle\">
                                ";
                                    // line 38
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["level2"], "name", array()), "html", null, true);
                                    echo "
                                <svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg>
                            </a>
                            <ul ";
                                    // line 41
                                    if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 1, array(), "array") == $this->getAttribute($context["level2"], "id", array()))) {
                                        echo "class=\"active\" style=\"display: block;\"";
                                    }
                                    echo ">
                                ";
                                    // line 42
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["level2"], "child", array()));
                                    foreach ($context['_seq'] as $context["_key"] => $context["level3"]) {
                                        // line 43
                                        echo "                                    ";
                                        if (($this->getAttribute($context["level3"], "url", array(), "any", true, true) && twig_in_filter($this->env->getExtension('routing')->getPath($this->getAttribute($context["level3"], "url", array())), (isset($context["AuthorityRoles"]) ? $context["AuthorityRoles"] : null)))) {
                                            // line 44
                                            echo "                                    ";
                                        } else {
                                            // line 45
                                            echo "                                    <li class=\"";
                                            if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 2, array(), "array") == $this->getAttribute($context["level3"], "id", array()))) {
                                                echo "active";
                                            }
                                            echo "\">
                                        <a href=\"";
                                            // line 46
                                            echo $this->env->getExtension('routing')->getUrl($this->getAttribute($context["level3"], "url", array()));
                                            echo "\">
                                            ";
                                            // line 47
                                            echo twig_escape_filter($this->env, $this->getAttribute($context["level3"], "name", array()), "html", null, true);
                                            echo "
                                        </a>
                                    </li>
                                    ";
                                        }
                                        // line 51
                                        echo "                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level3'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 52
                                    echo "                            </ul>
                        ";
                                } else {
                                    // line 54
                                    echo "                            <a href=\"";
                                    echo $this->env->getExtension('routing')->getUrl($this->getAttribute($context["level2"], "url", array()));
                                    echo "\">
                                ";
                                    // line 55
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["level2"], "name", array()), "html", null, true);
                                    echo "
                            </a>
                        ";
                                }
                                // line 58
                                echo "                    </li>
                   ";
                            }
                            // line 60
                            echo "                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "            </ul>
        ";
                } else {
                    // line 63
                    echo "            ";
                    if ($this->getAttribute($context["level1"], "url", array(), "any", true, true)) {
                        // line 64
                        echo "                <a href=\"";
                        echo $this->env->getExtension('routing')->getUrl($this->getAttribute($context["level1"], "url", array()));
                        echo "\">
                    ";
                        // line 65
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "name", array()), "html", null, true);
                        echo "
                </a>
            ";
                    } else {
                        // line 68
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "name", array()), "html", null, true);
                        echo "
            ";
                    }
                    // line 70
                    echo "        ";
                }
                // line 71
                echo "    </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 71,  176 => 70,  170 => 68,  164 => 65,  159 => 64,  156 => 63,  152 => 61,  145 => 60,  141 => 58,  135 => 55,  130 => 54,  126 => 52,  120 => 51,  113 => 47,  109 => 46,  102 => 45,  99 => 44,  96 => 43,  92 => 42,  86 => 41,  80 => 38,  77 => 37,  75 => 36,  68 => 35,  65 => 34,  62 => 33,  57 => 32,  51 => 31,  45 => 28,  39 => 27,  36 => 26,  34 => 25,  27 => 24,  22 => 23,  19 => 22,);
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
/* */
/* {% for level1 in app.config.nav if app.request.baseUrl ~ '/' ~ app.config.admin_route ~ '/' ~ level1.id not in AuthorityRoles %}*/
/*     <li class="{% if active_menus(menus)[0] == level1.id %}active{% endif %}">*/
/*         {% if level1.has_child is defined and level1.has_child == true %}*/
/*             <a class="toggle">*/
/*                 <svg class="cb {{ level1.icon }}"> <use xlink:href="#{{ level1.icon }}" /></svg>*/
/*                 {{ level1.name }}*/
/*                 <svg class="cb cb-angle-down"> <use xlink:href="#cb-angle-down" /></svg>*/
/*             </a>*/
/*             <ul {% if active_menus(menus)[0] == level1.id %}class="active" style="display: block;"{% endif %}>*/
/*                 {% for level2 in level1.child if app.request.baseUrl ~ '/' ~ app.config.admin_route ~ '/' ~ level1.id ~ '/' ~ level2.id not in AuthorityRoles %}*/
/*                     {% if level2.url is defined and path(level2.url)  in AuthorityRoles %}*/
/*                     {% else %}*/
/*                     <li class="{% if active_menus(menus)[1] == level2.id %}active{% endif %}">*/
/*                         {% if level2.has_child is defined and level2.has_child == true %}*/
/*                             <a class="toggle">*/
/*                                 {{ level2.name }}*/
/*                                 <svg class="cb cb-angle-down"> <use xlink:href="#cb-angle-down" /></svg>*/
/*                             </a>*/
/*                             <ul {% if active_menus(menus)[1] == level2.id %}class="active" style="display: block;"{% endif %}>*/
/*                                 {% for level3 in level2.child %}*/
/*                                     {% if level3.url is defined and path(level3.url)  in AuthorityRoles %}*/
/*                                     {% else %}*/
/*                                     <li class="{% if active_menus(menus)[2] == level3.id %}active{% endif %}">*/
/*                                         <a href="{{ url(level3.url) }}">*/
/*                                             {{ level3.name }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         {% else %}*/
/*                             <a href="{{ url(level2.url) }}">*/
/*                                 {{ level2.name }}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </li>*/
/*                    {% endif %}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% else %}*/
/*             {% if level1.url is defined %}*/
/*                 <a href="{{ url(level1.url) }}">*/
/*                     {{ level1.name }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 {{ level1.name }}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     </li>*/
/* {% endfor %}*/
