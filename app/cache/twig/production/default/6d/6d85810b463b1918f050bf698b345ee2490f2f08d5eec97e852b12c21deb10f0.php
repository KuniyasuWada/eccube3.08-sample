<?php

/* Shopping/login.twig */
class __TwigTemplate_84ce7811943e037057e6bd2e16580b6a2781b99d9ae6003661325ea21cd95e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/login.twig", 22);
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
        $context["body_class"] = "cart_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "
    <h1 class=\"page-heading\">ログイン</h1>
    <div class=\"container-fluid\">
        <form method=\"post\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("login_check");
        echo "\">
            <input type=\"hidden\" name=\"_target_path\" value=\"shopping\" />
            <input type=\"hidden\" name=\"_failure_path\" value=\"shopping_login\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

            <div id=\"login_box\" class=\"login_cart row\">
                ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "                <div class=\"col-sm-8 col-sm-offset-2\" style=\"height: 330px;\">
                ";
        } else {
            // line 39
            echo "                <div class=\"col-sm-8\" style=\"height: 330px;\">
                ";
        }
        // line 41
        echo "                    <div class=\"column\">
                        <div class=\"column_inner clearfix\">
                            <div class=\"icon\"><svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\"></use></svg></div>
                            <div class=\"form-group\">
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'widget', array("attr" => array("placeholder" => "メールアドレス")));
        echo " <br class=\"sp\">
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_pass", array()), 'widget', array("attr" => array("placeholder" => "パスワード")));
        echo "
                                ";
        // line 49
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_remember_me", array())) {
            // line 50
            echo "                                    ";
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 51
                echo "                                        <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 53
                echo "                                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_memory", array()), 'widget');
                echo "
                                    ";
            }
            // line 55
            echo "                                ";
        }
        // line 56
        echo "                            </div>
                            ";
        // line 57
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 58
            echo "                                <div class=\"form-group\">
                                    <span class=\"text-danger\">";
            // line 59
            echo $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null));
            echo "</span>
                                </div>
                            ";
        }
        // line 62
        echo "                            <div class=\"btn_area\">
                                <p><button type=\"submit\" class=\"btn btn-info btn-block btn-lg\">ログイン</button></p>
                                <ul>
                                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getUrl("forgot");
        echo "\">ログイン情報をお忘れですか？</a></li>
                                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getUrl("entry");
        echo "\">新規会員登録</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->

                ";
        // line 73
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 74
            echo "                ";
        } else {
            // line 75
            echo "                <div class=\"col-sm-4\" style=\"height: 330px;\">
                    <div class=\"column\">
                        <div class=\"column_inner\">
                            <p class=\"message\">会員登録をせずに購入手続きをされたい方は、下記よりお進みください。
                            <p class=\"btn_area\">
                                <a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getUrl("shopping_nonmember");
            echo "\" class=\"btn btn-info btn-block btn-lg\">ゲスト購入</a></p>
                        </div>
                    </div>
                </div><!-- /.col -->
                ";
        }
        // line 85
        echo "            </div><!-- /.row -->
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Shopping/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 85,  140 => 80,  133 => 75,  130 => 74,  128 => 73,  118 => 66,  114 => 65,  109 => 62,  103 => 59,  100 => 58,  98 => 57,  95 => 56,  92 => 55,  86 => 53,  82 => 51,  79 => 50,  77 => 49,  73 => 48,  67 => 45,  61 => 41,  57 => 39,  53 => 37,  51 => 36,  45 => 33,  39 => 30,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
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
/* {% set body_class = 'cart_page' %}*/
/* */
/* {% block main %}*/
/* */
/*     <h1 class="page-heading">ログイン</h1>*/
/*     <div class="container-fluid">*/
/*         <form method="post" action="{{ url('login_check') }}">*/
/*             <input type="hidden" name="_target_path" value="shopping" />*/
/*             <input type="hidden" name="_failure_path" value="shopping_login" />*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/* */
/*             <div id="login_box" class="login_cart row">*/
/*                 {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                 <div class="col-sm-8 col-sm-offset-2" style="height: 330px;">*/
/*                 {% else %}*/
/*                 <div class="col-sm-8" style="height: 330px;">*/
/*                 {% endif %}*/
/*                     <div class="column">*/
/*                         <div class="column_inner clearfix">*/
/*                             <div class="icon"><svg class="cb cb-user-circle"><use xlink:href="#cb-user-circle"></use></svg></div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_widget(form.login_email, {attr: {placeholder: 'メールアドレス'}}) }} <br class="sp">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_widget(form.login_pass, {attr: {placeholder: 'パスワード'}}) }}*/
/*                                 {% if BaseInfo.option_remember_me %}*/
/*                                     {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                                         <input type="hidden" name="login_memory" value="1">*/
/*                                     {% else %}*/
/*                                         {{ form_widget(form.login_memory) }}*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             {% if error %}*/
/*                                 <div class="form-group">*/
/*                                     <span class="text-danger">{{ error|trans|raw }}</span>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             <div class="btn_area">*/
/*                                 <p><button type="submit" class="btn btn-info btn-block btn-lg">ログイン</button></p>*/
/*                                 <ul>*/
/*                                 <li><a href="{{ url('forgot') }}">ログイン情報をお忘れですか？</a></li>*/
/*                                 <li><a href="{{ url('entry') }}">新規会員登録</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/* */
/*                 {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                 {% else %}*/
/*                 <div class="col-sm-4" style="height: 330px;">*/
/*                     <div class="column">*/
/*                         <div class="column_inner">*/
/*                             <p class="message">会員登録をせずに購入手続きをされたい方は、下記よりお進みください。*/
/*                             <p class="btn_area">*/
/*                                 <a href="{{ url('shopping_nonmember') }}" class="btn btn-info btn-block btn-lg">ゲスト購入</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*                 {% endif %}*/
/*             </div><!-- /.row -->*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
