<?php

/* default_frame.twig */
class __TwigTemplate_4c0c9d76c1eb015459f9fa8ca3747d090c4c2d97338065ac59b87912bdbaab3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
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
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        if ((array_key_exists("subtitle", $context) &&  !twig_test_empty((isset($context["subtitle"]) ? $context["subtitle"] : null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
        } elseif ((array_key_exists("title", $context) &&  !twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        }
        echo "</title>
";
        // line 28
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "author", array()))) {
            // line 29
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "author", array()), "html", null, true);
            echo "\">
";
        }
        // line 31
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "description", array()))) {
            // line 32
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "description", array()), "html", null, true);
            echo "\">
";
        }
        // line 34
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "keyword", array()))) {
            // line 35
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "keyword", array()), "html", null, true);
            echo "\">
";
        }
        // line 37
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "meta_robots", array()))) {
            // line 38
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "meta_robots", array()), "html", null, true);
            echo "\">
";
        }
        // line 40
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/slick.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/default.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<!-- for original theme CSS -->
";
        // line 46
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 47
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>

";
        // line 52
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Head", array())) {
            // line 53
            echo "    ";
            // line 54
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Head", array())));
            echo "
    ";
        }
        // line 58
        echo "
</head>
<body class=\"";
        // line 60
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter((isset($context["body_class"]) ? $context["body_class"] : null), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
<div id=\"wrapper\">
    <header id=\"header\">
        <div class=\"container-fluid inner\">
            ";
        // line 65
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Header", array())) {
            // line 66
            echo "                ";
            // line 67
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Header", array())));
            echo "
                ";
            // line 69
            echo "            ";
        }
        // line 70
        echo "            ";
        // line 71
        echo "            <p id=\"btn_menu\"><a class=\"nav-trigger\" href=\"#nav\">Menu<span></span></a></p>
        </div>
    </header>

    <div id=\"contents\" class=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "theme", array()), "html", null, true);
        echo "\">

        <div id=\"contents_top\">
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsTop", array())) {
            // line 80
            echo "                ";
            // line 81
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsTop", array())));
            echo "
                ";
            // line 83
            echo "            ";
        }
        // line 84
        echo "            ";
        // line 85
        echo "        </div>

        <div class=\"container-fluid inner\">
            ";
        // line 89
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideLeft", array())) {
            // line 90
            echo "                <div id=\"side_left\" class=\"side\">
                    ";
            // line 92
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideLeft", array())));
            echo "
                    ";
            // line 94
            echo "                </div>
            ";
        }
        // line 96
        echo "            ";
        // line 97
        echo "
            <div id=\"main\">
                ";
        // line 100
        echo "                ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainTop", array())) {
            // line 101
            echo "                    <div id=\"main_top\">
                        ";
            // line 102
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainTop", array())));
            echo "
                    </div>
                ";
        }
        // line 105
        echo "                ";
        // line 106
        echo "
                <div id=\"main_middle\">
                    ";
        // line 108
        $this->displayBlock('main', $context, $blocks);
        // line 109
        echo "                </div>

                ";
        // line 112
        echo "                ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainBottom", array())) {
            // line 113
            echo "                    <div id=\"main_bottom\">
                        ";
            // line 114
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainBottom", array())));
            echo "
                    </div>
                ";
        }
        // line 117
        echo "                ";
        // line 118
        echo "            </div>

            ";
        // line 121
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideRight", array())) {
            // line 122
            echo "                <div id=\"side_right\" class=\"side\">
                    ";
            // line 124
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideRight", array())));
            echo "
                    ";
            // line 126
            echo "                </div>
            ";
        }
        // line 128
        echo "            ";
        // line 129
        echo "
            ";
        // line 131
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsBottom", array())) {
            // line 132
            echo "                <div id=\"contents_bottom\">
                    ";
            // line 134
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsBottom", array())));
            echo "
                    ";
            // line 136
            echo "                </div>
            ";
        }
        // line 138
        echo "            ";
        // line 139
        echo "
        </div>

        <footer id=\"footer\">
            ";
        // line 144
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())) {
            // line 145
            echo "                ";
            // line 146
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())));
            echo "
                ";
            // line 148
            echo "            ";
        }
        // line 149
        echo "            ";
        // line 150
        echo "
        </footer>

    </div>

    <div id=\"drawer\" class=\"drawer sp\">
    </div>

</div>

<div class=\"overlay\"></div>

<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/slick.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
    \$('#drawer').append(\$('.drawer_block').clone(true).children());
    \$.ajax({
        url: '";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
";
        // line 179
        $this->displayBlock('javascript', $context, $blocks);
        // line 180
        echo "</body>
</html>
";
    }

    // line 46
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 108
    public function block_main($context, array $blocks = array())
    {
    }

    // line 179
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
        return array (  374 => 179,  369 => 108,  364 => 46,  358 => 180,  356 => 179,  344 => 170,  334 => 165,  328 => 164,  322 => 163,  316 => 162,  302 => 150,  300 => 149,  297 => 148,  292 => 146,  290 => 145,  287 => 144,  281 => 139,  279 => 138,  275 => 136,  270 => 134,  267 => 132,  264 => 131,  261 => 129,  259 => 128,  255 => 126,  250 => 124,  247 => 122,  244 => 121,  240 => 118,  238 => 117,  232 => 114,  229 => 113,  226 => 112,  222 => 109,  220 => 108,  216 => 106,  214 => 105,  208 => 102,  205 => 101,  202 => 100,  198 => 97,  196 => 96,  192 => 94,  187 => 92,  184 => 90,  181 => 89,  176 => 85,  174 => 84,  171 => 83,  166 => 81,  164 => 80,  161 => 79,  155 => 75,  149 => 71,  147 => 70,  144 => 69,  139 => 67,  137 => 66,  134 => 65,  127 => 60,  123 => 58,  117 => 54,  115 => 53,  113 => 52,  106 => 49,  102 => 47,  100 => 46,  93 => 44,  87 => 43,  81 => 42,  77 => 41,  74 => 40,  68 => 38,  66 => 37,  60 => 35,  58 => 34,  52 => 32,  50 => 31,  44 => 29,  42 => 28,  31 => 27,  25 => 23,  22 => 1,);
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
/* <title>{{ BaseInfo.shop_name }}{% if subtitle is defined and subtitle is not empty %} / {{ subtitle }}{% elseif title is defined and title is not empty %} / {{ title }}{% endif %}</title>*/
/* {% if PageLayout.author is not empty %}*/
/*     <meta name="author" content="{{ PageLayout.author }}">*/
/* {% endif %}*/
/* {% if PageLayout.description is not empty %}*/
/*     <meta name="description" content="{{ PageLayout.description }}">*/
/* {% endif %}*/
/* {% if PageLayout.keyword is not empty %}*/
/*     <meta name="keywords" content="{{ PageLayout.keyword }}">*/
/* {% endif %}*/
/* {% if PageLayout.meta_robots is not empty %}*/
/*     <meta name="robots" content="{{ PageLayout.meta_robots }}">*/
/* {% endif %}*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <link rel="icon" href="{{ app.config.front_urlpath }}/img/common/favicon.ico">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/style.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/slick.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/default.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <!-- for original theme CSS -->*/
/* {% block stylesheet %}{% endblock %}*/
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ app.config.front_urlpath }}/js/vendor/jquery-1.11.3.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"><\/script>')</script>*/
/* */
/* {# ▼Head COLUMN #}*/
/* {% if PageLayout.Head %}*/
/*     {# ▼上ナビ #}*/
/*     {{ include('block.twig', {'Blocks': PageLayout.Head}) }}*/
/*     {# ▲上ナビ #}*/
/* {% endif %}*/
/* {# ▲Head COLUMN #}*/
/* */
/* </head>*/
/* <body class="{{ body_class|default('other_page') }}">*/
/* <div id="wrapper">*/
/*     <header id="header">*/
/*         <div class="container-fluid inner">*/
/*             {# ▼HeaderInternal COLUMN #}*/
/*             {% if PageLayout.Header %}*/
/*                 {# ▼上ナビ #}*/
/*                 {{ include('block.twig', {'Blocks': PageLayout.Header}) }}*/
/*                 {# ▲上ナビ #}*/
/*             {% endif %}*/
/*             {# ▲HeaderInternal COLUMN #}*/
/*             <p id="btn_menu"><a class="nav-trigger" href="#nav">Menu<span></span></a></p>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <div id="contents" class="{{ PageLayout.theme }}">*/
/* */
/*         <div id="contents_top">*/
/*             {# ▼TOP COLUMN #}*/
/*             {% if PageLayout.ContentsTop %}*/
/*                 {# ▼上ナビ #}*/
/*                 {{ include('block.twig', {'Blocks': PageLayout.ContentsTop}) }}*/
/*                 {# ▲上ナビ #}*/
/*             {% endif %}*/
/*             {# ▲TOP COLUMN #}*/
/*         </div>*/
/* */
/*         <div class="container-fluid inner">*/
/*             {# ▼LEFT COLUMN #}*/
/*             {% if PageLayout.SideLeft %}*/
/*                 <div id="side_left" class="side">*/
/*                     {# ▼左ナビ #}*/
/*                     {{ include('block.twig', {'Blocks': PageLayout.SideLeft}) }}*/
/*                     {# ▲左ナビ #}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {# ▲LEFT COLUMN #}*/
/* */
/*             <div id="main">*/
/*                 {# ▼メイン上部 #}*/
/*                 {% if PageLayout.MainTop %}*/
/*                     <div id="main_top">*/
/*                         {{ include('block.twig', {'Blocks': PageLayout.MainTop}) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {# ▲メイン上部 #}*/
/* */
/*                 <div id="main_middle">*/
/*                     {% block main %}{% endblock %}*/
/*                 </div>*/
/* */
/*                 {# ▼メイン下部 #}*/
/*                 {% if PageLayout.MainBottom %}*/
/*                     <div id="main_bottom">*/
/*                         {{ include('block.twig', {'Blocks': PageLayout.MainBottom}) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {# ▲メイン下部 #}*/
/*             </div>*/
/* */
/*             {# ▼RIGHT COLUMN #}*/
/*             {% if PageLayout.SideRight %}*/
/*                 <div id="side_right" class="side">*/
/*                     {# ▼右ナビ #}*/
/*                     {{ include('block.twig', {'Blocks': PageLayout.SideRight}) }}*/
/*                     {# ▲右ナビ #}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {# ▲RIGHT COLUMN #}*/
/* */
/*             {# ▼BOTTOM COLUMN #}*/
/*             {% if PageLayout.ContentsBottom %}*/
/*                 <div id="contents_bottom">*/
/*                     {# ▼下ナビ #}*/
/*                     {{ include('block.twig', {'Blocks': PageLayout.ContentsBottom}) }}*/
/*                     {# ▲下ナビ #}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {# ▲BOTTOM COLUMN #}*/
/* */
/*         </div>*/
/* */
/*         <footer id="footer">*/
/*             {# ▼Footer COLUMN#}*/
/*             {% if PageLayout.Footer %}*/
/*                 {# ▼上ナビ #}*/
/*                 {{ include('block.twig', {'Blocks': PageLayout.Footer}) }}*/
/*                 {# ▲上ナビ #}*/
/*             {% endif %}*/
/*             {# ▲Footer COLUMN#}*/
/* */
/*         </footer>*/
/* */
/*     </div>*/
/* */
/*     <div id="drawer" class="drawer sp">*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <div class="overlay"></div>*/
/* */
/* <script src="{{ app.config.front_urlpath }}/js/vendor/bootstrap.custom.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.front_urlpath }}/js/vendor/slick.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.front_urlpath }}/js/function.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.front_urlpath }}/js/eccube.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script>*/
/* $(function () {*/
/*     $('#drawer').append($('.drawer_block').clone(true).children());*/
/*     $.ajax({*/
/*         url: '{{ app.config.front_urlpath }}/img/common/svg.html',*/
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
