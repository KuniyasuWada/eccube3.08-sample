<?php

/* Setting/System/system.twig */
class __TwigTemplate_f62436fff28d3dc428f683c9fb2149dca67ae4c9f17a3c4848f915031bf53020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 23
        $this->parent = $this->loadTemplate("default_frame.twig", "Setting/System/system.twig", 23);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "system_index");
        // line 23
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 28
    public function block_sub_title($context, array $blocks = array())
    {
        echo "システム情報";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">システム情報</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <dl class=\"dl-horizontal\">
                       ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrSystemInfo"]) ? $context["arrSystemInfo"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 40
            echo "                            <dt>
                               ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "
                            </dt>
                            <dd>
                               ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
            echo "
                            </dd>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </dl>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">PHP情報</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                    <iframe src=\"?mode=info\" height=\"500\" frameborder=\"0\" style=\"width: 100%;\"></iframe>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "Setting/System/system.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 47,  71 => 44,  65 => 41,  62 => 40,  58 => 39,  48 => 31,  45 => 30,  39 => 28,  33 => 27,  29 => 23,  27 => 25,  11 => 23,);
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
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['setting', 'system', 'system_index'] %}*/
/* */
/* {% block title %}システム設定{% endblock %}*/
/* {% block sub_title %}システム情報{% endblock %}*/
/* */
/* {% block main %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">システム情報</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <dl class="dl-horizontal">*/
/*                        {% for key, item in arrSystemInfo %}*/
/*                             <dt>*/
/*                                {{item.title}}*/
/*                             </dt>*/
/*                             <dd>*/
/*                                {{item.value}}*/
/*                             </dd>*/
/*                         {% endfor %}*/
/*                     </dl>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">PHP情報</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body no-padding">*/
/*                     <iframe src="?mode=info" height="500" frameborder="0" style="width: 100%;"></iframe>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
