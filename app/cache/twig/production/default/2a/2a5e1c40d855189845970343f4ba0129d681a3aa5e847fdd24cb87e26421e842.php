<?php

/* Block/category.twig */
class __TwigTemplate_f24b6b9fc8707fdc34c2200a2c1250c98e56c2b4a7f1a147ccc96625c99ded92 extends Twig_Template
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
        // line 36
        echo "
<nav id=\"category\" class=\"drawer_block pc\">
    <ul class=\"category-nav\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) ? $context["Categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 40
            echo "        ";
            echo $this->getAttribute($this, "tree", array(0 => $context["Category"]), "method");
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul> <!-- category-nav -->
</nav>
";
    }

    // line 22
    public function gettree($__Category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    <li>
        <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()), "html", null, true);
            echo "\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "name", array()), "html", null, true);
            echo "
        </a>
        ";
            // line 27
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array())) > 0)) {
                // line 28
                echo "            <ul>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 30
                    echo "                    ";
                    echo $this->getAttribute($this, "tree", array(0 => $context["ChildCategory"]), "method");
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </ul>
        ";
            }
            // line 34
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "Block/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  87 => 32,  78 => 30,  74 => 29,  71 => 28,  69 => 27,  64 => 25,  58 => 24,  55 => 23,  43 => 22,  37 => 42,  28 => 40,  24 => 39,  19 => 36,);
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
/* {% macro tree(Category) %}*/
/*     <li>*/
/*         <a href="{{ url('product_list') }}?category_id={{ Category.id }}">*/
/*             {{ Category.name }}*/
/*         </a>*/
/*         {% if Category.children|length > 0 %}*/
/*             <ul>*/
/*             {% for ChildCategory in Category.children %}*/
/*                     {{ _self.tree(ChildCategory) }}*/
/*             {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* <nav id="category" class="drawer_block pc">*/
/*     <ul class="category-nav">*/
/*     {% for Category in Categories %}*/
/*         {{ _self.tree(Category) }}*/
/*     {% endfor %}*/
/*     </ul> <!-- category-nav -->*/
/* </nav>*/
/* */
