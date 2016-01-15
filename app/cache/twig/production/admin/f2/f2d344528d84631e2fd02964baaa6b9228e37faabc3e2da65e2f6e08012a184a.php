<?php

/* login_frame.twig */
class __TwigTemplate_c72c65d944f99f0971a41ea7179938c62a71c9b843bc796dbbe098ccb91503ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
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
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo " - EC-CUBE管理画面</title>
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"robots\" content=\"noindex,nofollow\" />
<link rel=\"icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/dashboard.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>
<body id=\"login-page\">
<!--{\$GLOBAL_ERR}-->
<noscript>
    <p>JavaScript を有効にしてご利用下さい.</p>
</noscript>
<div id=\"wrapper\">
    ";
        // line 47
        $this->displayBlock('main', $context, $blocks);
        // line 48
        echo "</div>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/ie10-viewport-bug-workaround.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
    \$.ajax({
        url: '";
        // line 59
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
        // line 68
        $this->displayBlock('javascript', $context, $blocks);
        // line 69
        echo "</body>
</html>
";
    }

    // line 47
    public function block_main($context, array $blocks = array())
    {
    }

    // line 68
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "login_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 68,  121 => 47,  115 => 69,  113 => 68,  101 => 59,  92 => 55,  86 => 54,  80 => 53,  74 => 52,  68 => 48,  66 => 47,  49 => 35,  43 => 34,  39 => 33,  31 => 28,  24 => 23,  21 => 1,);
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
/* */
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ BaseInfo.shop_name }} - EC-CUBE管理画面</title>*/
/* <meta name="description" content="">*/
/* <meta name="author" content="">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta name="robots" content="noindex,nofollow" />*/
/* <link rel="icon" href="{{ app.config.admin_urlpath }}/assets/img/favicon.ico">*/
/* <link rel="stylesheet" href="{{ app.config.admin_urlpath }}/assets/css/bootstrap.min.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <link rel="stylesheet" href="{{ app.config.admin_urlpath }}/assets/css/dashboard.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <!--[if lt IE 9]>*/
/* <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/* <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* <![endif]-->*/
/* </head>*/
/* <body id="login-page">*/
/* <!--{$GLOBAL_ERR}-->*/
/* <noscript>*/
/*     <p>JavaScript を有効にしてご利用下さい.</p>*/
/* </noscript>*/
/* <div id="wrapper">*/
/*     {% block main %}{% endblock %}*/
/* </div>*/
/* */
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ app.config.admin_urlpath }}/assets/js/vendor/jquery-1.11.3.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"><\/script>')</script>*/
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
