<?php

/* index.twig */
class __TwigTemplate_65de280b0fc3e5e6de2574418d59fd72fd6b7581d7642289348506b0fb3dfea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "index.twig", 22);
        $this->blocks = array(
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
        // line 24
        $context["body_class"] = "front_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script>
\$(function(){
    \$('.main_visual').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        speed: 300
    });
});
</script>
";
    }

    // line 39
    public function block_main($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"row\">
       <div class=\"col-sm-12\">
            <div class=\"main_visual\">
                <div class=\"item\">
                  <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv01.jpg\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv02.jpg\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv03.jpg\">
                </div>
            </div>
        </div>
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
        return array (  70 => 50,  64 => 47,  58 => 44,  52 => 40,  49 => 39,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
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
/* {% set body_class = 'front_page' %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/* $(function(){*/
/*     $('.main_visual').slick({*/
/*         dots: true,*/
/*         arrows: false,*/
/*         autoplay: true,*/
/*         speed: 300*/
/*     });*/
/* });*/
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     <div class="row">*/
/*        <div class="col-sm-12">*/
/*             <div class="main_visual">*/
/*                 <div class="item">*/
/*                   <img src="{{ app.config.front_urlpath }}/img/top/mv01.jpg">*/
/*                 </div>*/
/*                 <div class="item">*/
/*                   <img src="{{ app.config.front_urlpath }}/img/top/mv02.jpg">*/
/*                 </div>*/
/*                 <div class="item">*/
/*                   <img src="{{ app.config.front_urlpath }}/img/top/mv03.jpg">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
