<?php

/* Shopping/complete.twig */
class __TwigTemplate_cdd25d561b26fb4c932643023cae29ad9cb65cb5d4b5049c929a461927f05681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/complete.twig", 22);
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
        echo "    <h1 class=\"page-heading\">ご注文完了</h1>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 32
            echo "                <div class=\"flowline step3\">
                ";
        } else {
            // line 34
            echo "                <div class=\"flowline step4\">
                ";
        }
        // line 36
        echo "                    <ul class=\"clearfix\">
                        <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 39
            echo "                        <li><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li class=\"active\"><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 42
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li class=\"active\"><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 46
        echo "                    </ul>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->


        <div id=\"deliveradd_input\" class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div class=\"complete_message\">
                    <h2 class=\"heading01\">ご注文ありがとうございました</h2>
                    <p>ただいま、ご注文の確認メールをお送りさせていただきました。<br />
                        万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがもう一度お問い合わせいただくか、お電話にてお問い合わせくださいませ。<br />
                        今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>
                </div>
                <div class=\"row no-padding\">
                    <div class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p>
                            <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\" class=\"btn btn-info btn-block\">トップページへ</a>
                        </p>
                    </div>
                </div>

            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
";
    }

    public function getTemplateName()
    {
        return "Shopping/complete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 63,  67 => 46,  61 => 42,  56 => 39,  54 => 38,  50 => 36,  46 => 34,  42 => 32,  40 => 31,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
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
/*     <h1 class="page-heading">ご注文完了</h1>*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*                 <div class="flowline step3">*/
/*                 {% else %}*/
/*                 <div class="flowline step4">*/
/*                 {% endif %}*/
/*                     <ul class="clearfix">*/
/*                         <li><span class="flow_number">1</span><br>カートの商品</li>*/
/*                     {% if is_granted('ROLE_USER') %}*/
/*                         <li><span class="flow_number">2</span><br>ご注文内容確認</li>*/
/*                         <li class="active"><span class="flow_number">3</span><br>完了</li>*/
/*                     {% else %}*/
/*                         <li><span class="flow_number">2</span><br>お客様情報</li>*/
/*                         <li><span class="flow_number">3</span><br>ご注文内容確認</li>*/
/*                         <li class="active"><span class="flow_number">4</span><br>完了</li>*/
/*                     {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/* */
/* */
/*         <div id="deliveradd_input" class="row">*/
/*             <div class="col-sm-10 col-sm-offset-1">*/
/*                 <div class="complete_message">*/
/*                     <h2 class="heading01">ご注文ありがとうございました</h2>*/
/*                     <p>ただいま、ご注文の確認メールをお送りさせていただきました。<br />*/
/*                         万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがもう一度お問い合わせいただくか、お電話にてお問い合わせくださいませ。<br />*/
/*                         今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>*/
/*                 </div>*/
/*                 <div class="row no-padding">*/
/*                     <div class="btn_group col-sm-offset-4 col-sm-4">*/
/*                         <p>*/
/*                             <a href="{{ url('homepage') }}" class="btn btn-info btn-block">トップページへ</a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
