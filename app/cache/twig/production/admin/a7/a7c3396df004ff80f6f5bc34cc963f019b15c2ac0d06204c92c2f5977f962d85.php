<?php

/* default_frame.twig */
class __TwigTemplate_a211c9ae390b6e3dc5f032bc62385df82cbb84d5838f5a56ea913c58812d8968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'modal' => array($this, 'block_modal'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
";
        // line 23
        echo "<html lang=\"ja\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo " - EC-CUBE管理画面</title>
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/dashboard.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
";
        // line 34
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 35
        echo "<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>
</head>
<body>
<div id=\"wrapper\" class=\"sidebar-open\">
    <!-- ▼ #header ▼ -->
    <header id=\"header\" role=\"navigation\">
        <div class=\"navbar navbar-static-top\">
            <div class=\"logo\" href=\"./\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/logo.png\" width=\"172\"></div>
            <!-- Sidebar toggle button-->

            <div class=\"bt_toggle\">
                <a role=\"button\" data-toggle=\"offcanvas\" class=\"bt_drawermenu\" href=\"#\"> <span class=\"sr-only\">Toggle navigation</span>
                    <svg class=\"cb cb-bars\">
                        <use xlink:href=\"#cb-bars\"/>
                    </svg>
                </a>
            </div>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\" id=\"sitename\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo "<span class=\"cb cb-external-link\"></span></a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-menu\">
                <dl class=\"dropdown\">
                    ";
        // line 61
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 62
            echo "                        <dt class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <svg class=\"cb cb-user-circle\">
                                <use xlink:href=\"#cb-user-circle\" />
                            </svg>
                            <span class=\"hidden-xs\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
            echo " 様</span>
                            <svg class=\"cb cb-angle-down icon_down\">
                                <use xlink:href=\"#cb-angle-down\" />
                            </svg>
                        </dt>
                        <dd class=\"dropdown-menu\">
                            最終ログイン<br>
                            ";
            // line 73
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "login_date", array(), "any", false, true), "format", array(0 => "Y/m/d H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "login_date", array(), "any", false, true), "format", array(0 => "Y/m/d H:i"), "method"), "")) : ("")), "html", null, true);
            echo " <a class=\"btn btn-primary btn-xs\" href=\"";
            echo $this->env->getExtension('routing')->getUrl(($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_route", array()) . "_logout"));
            echo "\">ログアウト</a>
                        </dd>
                    ";
        }
        // line 76
        echo "                </dl>
            </div>
        </div>
    </header>
    <!-- ▲ #header ▲ -->
    <!-- ▼ #side ▼ -->
    <aside id=\"side\">
        <ul class=\"nav nav-sidebar\">
            <li>
                <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getUrl("admin_homepage");
        echo "\">
                    <svg class=\"cb cb-home\"><use xlink:href=\"#cb-home\" /></svg>ホーム<svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg>
                </a>
            </li>
            ";
        // line 89
        echo twig_include($this->env, $context, "nav.twig");
        echo "
        </ul>
    </aside>
    <!-- ▲ #side ▲ -->
    <!-- ▼ #main ▼ -->
    <div id=\"main\">
        <h1 class=\"page-header\">";
        // line 95
        $this->displayBlock("title", $context, $blocks);
        echo "<span>";
        $this->displayBlock("sub_title", $context, $blocks);
        echo "</span></h1>

        <div class=\"container-fluid\">

            ";
        // line 99
        echo twig_include($this->env, $context, "alert.twig");
        echo "

            ";
        // line 101
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "
        </div>
    </div>
    <!-- ▲ #main ▲ -->

    <!-- ▼ #modal ▼ -->
    ";
        // line 108
        $this->displayBlock('modal', $context, $blocks);
        // line 109
        echo "    <!-- ▲ #modal ▲ -->

</div>

<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/ie10-viewport-bug-workaround.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
    \$.ajax({
        url: '";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
";
        // line 128
        $this->displayBlock('javascript', $context, $blocks);
        // line 129
        echo "</body>
</html>
";
    }

    // line 34
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 101
    public function block_main($context, array $blocks = array())
    {
    }

    // line 108
    public function block_modal($context, array $blocks = array())
    {
    }

    // line 128
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 128,  234 => 108,  229 => 101,  224 => 34,  218 => 129,  216 => 128,  204 => 119,  195 => 115,  189 => 114,  183 => 113,  177 => 109,  175 => 108,  167 => 102,  165 => 101,  160 => 99,  151 => 95,  142 => 89,  135 => 85,  124 => 76,  116 => 73,  106 => 66,  100 => 62,  98 => 61,  89 => 57,  76 => 47,  64 => 40,  57 => 35,  55 => 34,  49 => 33,  43 => 32,  39 => 31,  32 => 27,  26 => 23,  23 => 1,);
    }
}
/* <!doctype html>*/
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
/* <html lang="ja">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ BaseInfo.shop_name }} - EC-CUBE管理画面</title>*/
/* <meta name="description" content="">*/
/* <meta name="author" content="">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <link rel="icon" href="{{ app.config.admin_urlpath }}/assets/img/favicon.ico">*/
/* <link rel="stylesheet" href="{{ app.config.admin_urlpath }}/assets/css/bootstrap.min.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <link rel="stylesheet" href="{{ app.config.admin_urlpath }}/assets/css/dashboard.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* {% block stylesheet %}{% endblock %}*/
/* <!--[if lt IE 9]>*/
/* <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/* <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* <![endif]-->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery-1.11.3.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"><\/script>')</script>*/
/* </head>*/
/* <body>*/
/* <div id="wrapper" class="sidebar-open">*/
/*     <!-- ▼ #header ▼ -->*/
/*     <header id="header" role="navigation">*/
/*         <div class="navbar navbar-static-top">*/
/*             <div class="logo" href="./"><img src="{{ app.config.admin_urlpath }}/assets/img/logo.png" width="172"></div>*/
/*             <!-- Sidebar toggle button-->*/
/* */
/*             <div class="bt_toggle">*/
/*                 <a role="button" data-toggle="offcanvas" class="bt_drawermenu" href="#"> <span class="sr-only">Toggle navigation</span>*/
/*                     <svg class="cb cb-bars">*/
/*                         <use xlink:href="#cb-bars"/>*/
/*                     </svg>*/
/*                 </a>*/
/*             </div>*/
/*             <a href="{{ url('homepage') }}" id="sitename" target="_blank">{{ BaseInfo.shop_name }}<span class="cb cb-external-link"></span></a>*/
/*             <!-- Navbar Right Menu -->*/
/*             <div class="navbar-menu">*/
/*                 <dl class="dropdown">*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <dt class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <svg class="cb cb-user-circle">*/
/*                                 <use xlink:href="#cb-user-circle" />*/
/*                             </svg>*/
/*                             <span class="hidden-xs">{{ app.user.name }} 様</span>*/
/*                             <svg class="cb cb-angle-down icon_down">*/
/*                                 <use xlink:href="#cb-angle-down" />*/
/*                             </svg>*/
/*                         </dt>*/
/*                         <dd class="dropdown-menu">*/
/*                             最終ログイン<br>*/
/*                             {{ app.user.login_date.format('Y/m/d H:i')|default('') }} <a class="btn btn-primary btn-xs" href="{{ url(app.config.admin_route ~ '_logout') }}">ログアウト</a>*/
/*                         </dd>*/
/*                     {% endif %}*/
/*                 </dl>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     <!-- ▲ #header ▲ -->*/
/*     <!-- ▼ #side ▼ -->*/
/*     <aside id="side">*/
/*         <ul class="nav nav-sidebar">*/
/*             <li>*/
/*                 <a href="{{ url('admin_homepage') }}">*/
/*                     <svg class="cb cb-home"><use xlink:href="#cb-home" /></svg>ホーム<svg class="cb cb-angle-down"><use xlink:href="#cb-angle-down" /></svg>*/
/*                 </a>*/
/*             </li>*/
/*             {{ include('nav.twig') }}*/
/*         </ul>*/
/*     </aside>*/
/*     <!-- ▲ #side ▲ -->*/
/*     <!-- ▼ #main ▼ -->*/
/*     <div id="main">*/
/*         <h1 class="page-header">{{ block('title') }}<span>{{ block('sub_title') }}</span></h1>*/
/* */
/*         <div class="container-fluid">*/
/* */
/*             {{ include('alert.twig') }}*/
/* */
/*             {% block main %}{% endblock %}*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-- ▲ #main ▲ -->*/
/* */
/*     <!-- ▼ #modal ▼ -->*/
/*     {% block modal %}{% endblock %}*/
/*     <!-- ▲ #modal ▲ -->*/
/* */
/* </div>*/
/* */
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/bootstrap.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/ie10-viewport-bug-workaround.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/function.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script>*/
/* $(function () {*/
/*     $.ajax({*/
/*         url: '{{ app.config.admin_urlpath }}/assets/img/svg.html',*/
/*         type: 'GET',*/
/*         dataType: 'html',*/
/*     }).done(function(data){*/
/*         $('body').prepend(data);*/
/*     }).fail(function(data){*/
/*     });*/
/* });*/
/* </script>*/
/* {% block javascript %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
