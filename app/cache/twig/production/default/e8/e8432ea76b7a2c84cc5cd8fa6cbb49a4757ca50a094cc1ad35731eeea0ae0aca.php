<?php

/* Mypage/login.twig */
class __TwigTemplate_540bda4f48f344d58ddf0b8c159022884afdbf45a3fad7394a2e95df24c5eeaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/login.twig", 22);
        $this->blocks = array(
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
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "    <h1 class=\"page-heading\">ログイン</h1>
    <div class=\"container-fluid\">
        <form name=\"login_mypage\" id=\"login_mypage\" method=\"post\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("login_check");
        echo "\" onsubmit=\"return eccube.checkLoginFormInputted('login_mypage')\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
            ";
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "eccube.login.target.path"), "method")) {
            // line 31
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "eccube.login.target.path"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["targetPath"]) {
                // line 32
                echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"";
                echo twig_escape_filter($this->env, $context["targetPath"], "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            ";
        }
        // line 35
        echo "            <div id=\"login_box\" class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2\">
                    <div class=\"column\">
                        <div class=\"column_inner clearfix\">
                            <div class=\"icon\"><svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg></div>
                            <div class=\"form-group\">
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'widget', array("attr" => array("style" => "ime-mode: disabled;", "placeholder" => "メールアドレス")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_pass", array()), 'widget', array("attr" => array("placeholder" => "パスワード")));
        echo "
                                ";
        // line 45
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_remember_me", array())) {
            // line 46
            echo "                                    ";
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 47
                echo "                                        <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 49
                echo "                                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_memory", array()), 'widget');
                echo "
                                    ";
            }
            // line 51
            echo "                                ";
        }
        // line 52
        echo "                            </div>
                            ";
        // line 53
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 54
            echo "                            <div class=\"form-group\">
                                <span class=\"text-danger\">";
            // line 55
            echo $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null));
            echo "</span>
                            </div>
                            ";
        }
        // line 58
        echo "                            <div class=\"btn_area\">
                                <p><button type=\"submit\" class=\"btn btn-info btn-block btn-lg\">ログイン</button></p>
                                <ul>
                                    <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getUrl("forgot");
        echo "\">ログイン情報をお忘れですか？</a></li>
                                    <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getUrl("entry");
        echo "\">新規会員登録</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Mypage/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 69,  122 => 62,  118 => 61,  113 => 58,  107 => 55,  104 => 54,  102 => 53,  99 => 52,  96 => 51,  90 => 49,  86 => 47,  83 => 46,  81 => 45,  77 => 44,  71 => 41,  63 => 35,  60 => 34,  51 => 32,  46 => 31,  44 => 30,  38 => 29,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
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
/* {% set body_class = 'mypage' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="page-heading">ログイン</h1>*/
/*     <div class="container-fluid">*/
/*         <form name="login_mypage" id="login_mypage" method="post" action="{{ url('login_check') }}" onsubmit="return eccube.checkLoginFormInputted('login_mypage')" {{ form_enctype(form) }}>*/
/*             {% if app.session.flashBag.has('eccube.login.target.path') %}*/
/*                 {% for targetPath in app.session.flashBag.get('eccube.login.target.path') %}*/
/*                     <input type="hidden" name="_target_path" value="{{ targetPath }}" />*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <div id="login_box" class="row">*/
/*                 <div class="col-sm-8 col-sm-offset-2">*/
/*                     <div class="column">*/
/*                         <div class="column_inner clearfix">*/
/*                             <div class="icon"><svg class="cb cb-user-circle"><use xlink:href="#cb-user-circle" /></svg></div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_widget(form.login_email, {'attr': {'style' : 'ime-mode: disabled;', 'placeholder' : 'メールアドレス' }}) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_widget(form.login_pass,  {'attr': {'placeholder' : 'パスワード' }}) }}*/
/*                                 {% if BaseInfo.option_remember_me %}*/
/*                                     {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                                         <input type="hidden" name="login_memory" value="1">*/
/*                                     {% else %}*/
/*                                         {{ form_widget(form.login_memory) }}*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             {% if error %}*/
/*                             <div class="form-group">*/
/*                                 <span class="text-danger">{{ error|trans|raw }}</span>*/
/*                             </div>*/
/*                             {% endif %}*/
/*                             <div class="btn_area">*/
/*                                 <p><button type="submit" class="btn btn-info btn-block btn-lg">ログイン</button></p>*/
/*                                 <ul>*/
/*                                     <li><a href="{{ url('forgot') }}">ログイン情報をお忘れですか？</a></li>*/
/*                                     <li><a href="{{ url('entry') }}">新規会員登録</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*             </div><!-- /.row -->*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
