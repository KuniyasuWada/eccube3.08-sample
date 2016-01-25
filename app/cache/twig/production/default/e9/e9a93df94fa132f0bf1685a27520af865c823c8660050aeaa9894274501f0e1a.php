<?php

/* Mail/entry_confirm.twig */
class __TwigTemplate_0417ff865a8a833adbb1fbc7c1d64593bdea1229bc5c77bf2f883ede16618d8a extends Twig_Template
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
        echo "　※本メールは自動配信メールです。
　等幅フォント(MSゴシック12ポイント、Osaka-等幅など)で
　最適にご覧になれます。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo "より会員登録を希望された方に
　お送りしています。
　もしお心当たりが無い場合はこのままこのメールを破棄していただ
　ければ会員登録はなされません。
　またその旨 ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "email02", array()), "html", null, true);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "name02", array()), "html", null, true);
        echo " 様

";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo "でございます。

この度は会員登録依頼をいただきまして、有り難うございます。

現在は仮登録の状態です。
　　　~~~~~~
本会員登録を完了するには下記URLにアクセスしてください。
※入力されたお客様の情報はSSL暗号化通信により保護されます。

";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["activateUrl"]) ? $context["activateUrl"] : null), "html", null, true);
        echo "

上記URLにて本会員登録が完了いたしましたら改めてご登録内容ご確認
メールをお送り致します。



";
    }

    public function getTemplateName()
    {
        return "Mail/entry_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 47,  48 => 38,  41 => 36,  34 => 32,  27 => 28,  19 => 22,);
    }
}
/* {#*/
/*  This file is part of EC-CUBE*/
/* */
/*  Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/* */
/*  http://www.lockon.co.jp/*/
/* */
/*  This program is free software; you can redistribute it and/or*/
/*  modify it under the terms of the GNU General Public License*/
/*  as published by the Free Software Foundation; either version 2*/
/*  of the License, or (at your option) any later version.*/
/* */
/*  This program is distributed in the hope that it will be useful,*/
/*  but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/*  GNU General Public License for more details.*/
/* */
/*  You should have received a copy of the GNU General Public License*/
/*  along with this program; if not, write to the Free Software*/
/*  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/*  #}*/
/* 　※本メールは自動配信メールです。*/
/* 　等幅フォント(MSゴシック12ポイント、Osaka-等幅など)で*/
/* 　最適にご覧になれます。*/
/* */
/* ┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓*/
/* 　※本メールは、*/
/* 　{{ BaseInfo.shop_name }}より会員登録を希望された方に*/
/* 　お送りしています。*/
/* 　もしお心当たりが無い場合はこのままこのメールを破棄していただ*/
/* 　ければ会員登録はなされません。*/
/* 　またその旨 {{ BaseInfo.email02 }} まで*/
/* 　ご連絡いただければ幸いです。*/
/* ┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛*/
/* */
/* {{ Customer.name01 }} {{ Customer.name02 }} 様*/
/* */
/* {{ BaseInfo.shop_name }}でございます。*/
/* */
/* この度は会員登録依頼をいただきまして、有り難うございます。*/
/* */
/* 現在は仮登録の状態です。*/
/* 　　　~~~~~~*/
/* 本会員登録を完了するには下記URLにアクセスしてください。*/
/* ※入力されたお客様の情報はSSL暗号化通信により保護されます。*/
/* */
/* {{ activateUrl }}*/
/* */
/* 上記URLにて本会員登録が完了いたしましたら改めてご登録内容ご確認*/
/* メールをお送り致します。*/
/* */
/* */
/* */
/* */
