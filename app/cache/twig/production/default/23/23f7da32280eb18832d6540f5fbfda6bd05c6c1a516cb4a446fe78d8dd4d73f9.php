<?php

/* Block/new_product.twig */
class __TwigTemplate_386382ead58fe0d67d22e5a8e19914bea3b4f1e676e198e899495be34b2c0bc7 extends Twig_Template
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
        echo "<div id=\"contents_top\">
<div id=\"item_list\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-xs-12\">
            <div class=\"row no-padding\">
                <div class=\"col-xs-6\">
                    <div class=\"img img_right\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img01.jpg\"></a></div>
                </div>
                <div class=\"col-xs-6\">
                    <div class=\"img\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img02.jpg\"></a></div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-xs-12 comment_area\">
            <div class=\"txt_center\">
                <h4>新入荷商品特集</h4>
                <h5>この季節にぴったりな商品をご用意しました</h5>
                <p>さわやかな日差しが過ごしやすい季節。心地よいくらしのための、お部屋のアクセントになるおすすめのファブリックやグッズをご紹介します。</p>
                <p><a class=\"btn btn-success\" href=\"#\">一覧を見る<svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></a></p>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img03.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">お気に入りのエスプレッソタイム</dt>
                        <dd class=\"item_comment\">コーヒータイムを上質な時間にしてくれる、口当たりのよさとデザイン性を兼ね備えたエスプレッソカップを集めました・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img04.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">アウトドアにおすすめのアイテム</dt>
                        <dd class=\"item_comment\">カジュアルすぎない感じがちょうどよい、大人のためのアウトドアマガジンから、バイヤーおすすめのアイテムをセレクト・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img05.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">フランス製のデッドストック</dt>
                        <dd class=\"item_comment\">60～70年代のフランス製のデッドストックの器を集めました。絶妙な色合いと、独特の優しい風合いをお楽しみいただけ・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img06.jpg\"></div>
                    <p class=\"item_comment text-warning\">木彫りのぬくもりがあたたかいアニマルオブジェ</p>
                    <dl>
                        <dt class=\"item_name\">オブジェ（ふくろう）</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img07.jpg\"></div>
                    <p class=\"item_comment text-warning\">青色が美しい職人が仕上げた吹きガラス</p>
                    <dl>
                        <dt class=\"item_name\">ガラス瓶</dt>
                        <dd class=\"item_price special_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img08.jpg\"></div>
                    <p class=\"item_comment text-warning\">いつかは持ちたい。一生モノの銀製カトラリー</p>
                    <dl>
                        <dt class=\"item_name\">シルバーカトラリー</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img09.jpg\"></div>
                    <p class=\"item_comment text-warning\">こだわりのシルクスクリーンプリントがポイント</p>
                    <dl>
                        <dt class=\"item_name\">フォトクッションカバー</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
    
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/new_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 122,  166 => 121,  152 => 110,  148 => 109,  134 => 98,  130 => 97,  116 => 86,  112 => 85,  96 => 72,  92 => 71,  78 => 60,  74 => 59,  60 => 48,  56 => 47,  35 => 31,  27 => 28,  19 => 22,);
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
/* <div id="contents_top">*/
/* <div id="item_list">*/
/*     <div class="row">*/
/*         <div class="col-sm-6 col-xs-12">*/
/*             <div class="row no-padding">*/
/*                 <div class="col-xs-6">*/
/*                     <div class="img img_right"><a href="{{ url('product_detail', {id : 2}) }}"><img src="{{ app.config.front_urlpath }}/img/top/img01.jpg"></a></div>*/
/*                 </div>*/
/*                 <div class="col-xs-6">*/
/*                     <div class="img"><a href="{{  url('product_detail', {id : 2}) }}"><img src="{{ app.config.front_urlpath }}/img/top/img02.jpg"></a></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6 col-xs-12 comment_area">*/
/*             <div class="txt_center">*/
/*                 <h4>新入荷商品特集</h4>*/
/*                 <h5>この季節にぴったりな商品をご用意しました</h5>*/
/*                 <p>さわやかな日差しが過ごしやすい季節。心地よいくらしのための、お部屋のアクセントになるおすすめのファブリックやグッズをご紹介します。</p>*/
/*                 <p><a class="btn btn-success" href="#">一覧を見る<svg class="cb cb-angle-right"><use xlink:href="#cb-angle-right" /></svg></a></p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-4 col-xs-12">*/
/*             <div class="pickup_item">*/
/*                 <a href="{{  url('product_detail', {id : 2}) }}">*/
/*                     <div class="item_photo"><img src="{{ app.config.front_urlpath }}/img/top/img03.jpg"></div>*/
/*                     <dl>*/
/*                         <dt class="item_name text-warning">お気に入りのエスプレッソタイム</dt>*/
/*                         <dd class="item_comment">コーヒータイムを上質な時間にしてくれる、口当たりのよさとデザイン性を兼ね備えたエスプレッソカップを集めました・・・</dd>*/
/*                         <dd class="more_link text-warning">read more</dd>*/
/*                     </dl>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-4 col-xs-12">*/
/*             <div class="pickup_item">*/
/*                 <a href="{{  url('product_detail', {id : 2}) }}">*/
/*                     <div class="item_photo"><img src="{{ app.config.front_urlpath }}/img/top/img04.jpg"></div>*/
/*                     <dl>*/
/*                         <dt class="item_name text-warning">アウトドアにおすすめのアイテム</dt>*/
/*                         <dd class="item_comment">カジュアルすぎない感じがちょうどよい、大人のためのアウトドアマガジンから、バイヤーおすすめのアイテムをセレクト・・・</dd>*/
/*                         <dd class="more_link text-warning">read more</dd>*/
/*                     </dl>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-4 col-xs-12">*/
/*             <div class="pickup_item">*/
/*                 <a href="{{  url('product_detail', {id : 2}) }}">*/
/*                     <div class="item_photo"><img src="{{ app.config.front_urlpath }}/img/top/img05.jpg"></div>*/
/*                     <dl>*/
/*                         <dt class="item_name text-warning">フランス製のデッドストック</dt>*/
/*                         <dd class="item_comment">60～70年代のフランス製のデッドストックの器を集めました。絶妙な色合いと、独特の優しい風合いをお楽しみいただけ・・・</dd>*/
/*                         <dd class="more_link text-warning">read more</dd>*/
/*                     </dl>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-3 col-xs-6">*/
/*             <div class="pickup_item">*/
/*                 <a href="{{  url('product_detail', {id : 2}) }}">*/
/*                     <div class="item_photo"><img src="{{ app.config.front_urlpath }}/img/top/img06.jpg"></div>*/
/*                     <p class="item_comment text-warning">木彫りのぬくもりがあたたかいアニマルオブジェ</p>*/
/*                     <dl>*/
/*                         <dt class="item_name">オブジェ（ふくろう）</dt>*/
/*                         <dd class="item_price">\ 1,785</dd>*/
/*                     </dl>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3 col-xs-6">*/
/*             <div class="pickup_item">*/
/*                 <a href="{{  url('product_detail', {id : 2}) }}">*/
/*                     <div class="item_photo"><img src="{{ app.config.front_urlpath }}/img/top/img07.jpg"></div>*/
/*                     <p class="item_comment text-warning">青色が美しい職人が仕上げた吹きガラス</p>*/
/*                     <dl>*/
/*                         <dt class="item_name">ガラス瓶</dt>*/
/*                         <dd class="item_price special_price">\ 1,785</dd>*/
/*                     </dl>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3 col-xs-6">*/
/*             <div class="pickup_item">*/
/*                 <a href="{{  url('product_detail', {id : 2}) }}">*/
/*                     <div class="item_photo"><img src="{{ app.config.front_urlpath }}/img/top/img08.jpg"></div>*/
/*                     <p class="item_comment text-warning">いつかは持ちたい。一生モノの銀製カトラリー</p>*/
/*                     <dl>*/
/*                         <dt class="item_name">シルバーカトラリー</dt>*/
/*                         <dd class="item_price">\ 1,785</dd>*/
/*                     </dl>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3 col-xs-6">*/
/*             <div class="pickup_item">*/
/*                 <a href="{{  url('product_detail', {id : 2}) }}">*/
/*                     <div class="item_photo"><img src="{{ app.config.front_urlpath }}/img/top/img09.jpg"></div>*/
/*                     <p class="item_comment text-warning">こだわりのシルクスクリーンプリントがポイント</p>*/
/*                     <dl>*/
/*                         <dt class="item_name">フォトクッションカバー</dt>*/
/*                         <dd class="item_price">\ 1,785</dd>*/
/*                     </dl>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/* </div>*/
/* </div>*/
