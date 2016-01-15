<?php

/* Product/index.twig */
class __TwigTemplate_e2b55de55fdcc105f0ae251d690d5563368f0182d7741098e36bd6e1fa7ae837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/index.twig", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
        $context["menus"] = array(0 => "product", 1 => "product_master");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["searchForm"]) ? $context["searchForm"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "商品管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "商品マスター";
    }

    // line 31
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 32
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap-datetimepicker.min.css\">
";
    }

    // line 35
    public function block_javascript($context, array $blocks = array())
    {
        // line 36
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment.min.js\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment-ja.js\"></script>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap-datetimepicker.min.js\"></script>
<script>
\$(function() {

    var inputDate = document.createElement('input');
    inputDate.setAttribute('type', 'date');
    if (inputDate.type !== 'date') {
        \$('input[id\$=_date_start]').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

        \$('input[id\$=_date_end]').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });
    }

    // フォーム値を確認し、アコーディオンを制御
    // 値あり : 開く / 値なし : 閉じる
    (function(\$, f) {
        //フォームがないページは処理キャンセル
        var \$ac = \$(\".accpanel\");
        if (!\$ac) {
            return false
        }

        //フォーム内全項目取得
        var c = f();
        if (c.formState()) {
            if (\$ac.css(\"display\") == \"none\") {
                \$ac.parent('li').addClass(\"active\");
                \$ac.slideDown(0);
            }
        } else {
            \$ac.parent('li').removeClass(\"active\");
            \$ac.slideUp(0);
        }
    })(\$, formPropStateSubscriber);
});
</script>
<script>
    function fnConfirm(action) {
        document.search_form.action = action;
        document.search_form.submit();
    }
    function fnCopy(action) {
        if (confirm('この商品情報を複製しても宜しいですか？')) {
            document.search_form.action = action;
            document.search_form.submit();
        }
    }
</script>
";
    }

    // line 97
    public function block_main($context, array $blocks = array())
    {
        // line 98
        echo "            <!--検索条件設定テーブルここから-->
            <div class=\"search-box\">
                <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"";
        // line 100
        echo $this->env->getExtension('routing')->getUrl("admin_product");
        echo "\">
                \t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "_token", array()), 'widget');
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-12 accordion\">

                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "id", array()), 'widget', array("attr" => array("placeholder" => "商品名・ID・コード", "class" => "input_search")));
        echo "

                            <a href=\"#\" class=\"toggle";
        // line 107
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo " active";
        }
        echo "\">
                                <svg class=\"cb cb-minus\"> <use xlink:href=\"#cb-minus\"/></svg> <svg class=\"cb cb-minus\"> <use xlink:href=\"#cb-minus\"/></svg>
                            </a>
                            <div class=\"search-box-inner accpanel\" ";
        // line 110
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo " style=\"display: block;\"";
        }
        echo ">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-lg-10 col-lg-offset-1 search\">

                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>カテゴリ</label>
                                                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "category_id", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <label>種別</label>
                                                <div class=\"form-group\">
                                                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "status", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                        </div><!-- /.row -->

                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <label>登録日</label>
                                                <div class=\"form-group range\">
                                                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "create_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "create_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <label>更新日</label>
                                                <div class=\"form-group range\">
                                                    ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "update_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "update_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <p class=\"text-center\"><a href=\"#\" class=\"search-clear\">検索条件をクリア</a></p>
                                            </div>
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class=\"row btn_area\">
                        <div class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center\">
                            <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"eccube.fnFormModeSubmit('search_form', 'search', '', ''); return false;\">
                                検索する <svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\"></svg>
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!--検索条件設定テーブルここまで-->

        ";
        // line 166
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 167
            echo "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box\">
                        ";
            // line 170
            if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 0)) {
                // line 171
                echo "                        <div class=\"box-header with-arrow\">
                            <h3 class=\"box-title\">検索結果 <span class=\"normal\"><strong>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()), "html", null, true);
                echo " 件</strong> が該当しました</span></h3>
                        </div><!-- /.box-header -->
                        <div class=\"box-body no-padding\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <ul class=\"link-with-bar\">
                                    <li>
                                        ";
                // line 179
                if ((null === (isset($context["page_status"]) ? $context["page_status"] : null))) {
                    // line 180
                    echo "                                        <a>すべて</a>
                                        ";
                } else {
                    // line 182
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_page", array("page_no" => (isset($context["page_no"]) ? $context["page_no"] : null))), "html", null, true);
                    echo "\">すべて</a>
                                        ";
                }
                // line 184
                echo "                                    </li>
                                    ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["disps"]) ? $context["disps"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["disp"]) {
                    // line 186
                    echo "                                      <li>
                                      ";
                    // line 187
                    if (((isset($context["page_status"]) ? $context["page_status"] : null) == $this->getAttribute($context["disp"], "id", array()))) {
                        // line 188
                        echo "                                      <a>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["disp"], "name", array()));
                        echo "</a>
                                      ";
                    } else {
                        // line 190
                        echo "                                      <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_page", array("page_no" => (isset($context["page_no"]) ? $context["page_no"] : null), "status" => $this->getAttribute($context["disp"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["disp"], "name", array()));
                        echo "</a>
                                      ";
                    }
                    // line 192
                    echo "                                      </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "                                      <li>
                                      ";
                // line 195
                if (((isset($context["page_status"]) ? $context["page_status"] : null) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_product_stock_status", array()))) {
                    // line 196
                    echo "                                          <a>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "admin.product.search.stock"), "method"), "html", null, true);
                    echo "</a>
                                      ";
                } else {
                    // line 198
                    echo "                                          <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_page", array("page_no" => (isset($context["page_no"]) ? $context["page_no"] : null), "status" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_product_stock_status", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "admin.product.search.stock"), "method"), "html", null, true);
                    echo "</a>
                                      ";
                }
                // line 200
                echo "                                      </li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6\">
                                    <ul class=\"sort-dd\">
                                    <li class=\"dropdown\">
                                        ";
                // line 206
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) ? $context["pageMaxis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    if (($this->getAttribute($context["pageMax"], "name", array()) == (isset($context["page_count"]) ? $context["page_count"] : null))) {
                        // line 207
                        echo "                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pageMax"], "name", array()));
                        echo "件<svg class=\"cb cb-angle-down icon_down\"><use xlink:href=\"#cb-angle-down\"></svg></a>
                                            <ul class=\"dropdown-menu\">
                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 210
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) ? $context["pageMaxis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    if (($this->getAttribute($context["pageMax"], "name", array()) != (isset($context["page_count"]) ? $context["page_count"] : null))) {
                        // line 211
                        echo "                                                <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_page", array("page_no" => 1, "page_count" => $this->getAttribute($context["pageMax"], "name", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pageMax"], "name", array()));
                        echo "件</a></li>
                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "                                            </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">CSVダウンロード<svg class=\"cb cb-angle-down icon_down\"><use xlink:href=\"#cb-angle-down\"></svg></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
                // line 218
                echo $this->env->getExtension('routing')->getUrl("admin_product_export");
                echo "\">CSVダウンロード</a></li>
                                            <li><a href=\"";
                // line 219
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_setting_shop_csv", array("id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_PRODUCT"))), "html", null, true);
                echo "\">出力項目設定</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"item_list\">
                                <div class=\"tableish tableish-striped\">

                                    ";
                // line 228
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                    // line 229
                    echo "                                        <div class=\"item_box tr\">
                                            <div class=\"item_id td\">
                                                ";
                    // line 231
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "
                                            </div>

                                            <div class=\"item_photo td\">
                                                <a href=\"";
                    // line 235
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_product_edit", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\">
                                                \t<img src=\"";
                    // line 236
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute($context["Product"], "mainFileName", array())), "html", null, true);
                    echo "\" />
                                                </a>
                                            </div>
                                            <div class=\"item_detail td\">
                                                <a href=\"";
                    // line 240
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_product_edit", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\">
                                                    ";
                    // line 241
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
                    echo "
                                                </a><br>
                                                <span>
                                                    ";
                    // line 244
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_min", array()), "html", null, true);
                    echo "
                                                    ";
                    // line 245
                    if (($this->getAttribute($context["Product"], "code_min", array()) != $this->getAttribute($context["Product"], "code_max", array()))) {
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_max", array()), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 247
                    echo "                                                </span>
                                            </div>
                                            <div class=\"icon_edit td\">
                                                <div class=\"dropdown\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"><use xlink:href=\"#cb-ellipsis-h\"></svg></a>
                                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"";
                    // line 253
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_product_class", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\">規格</a></li>
                                                    <li><a href=\"";
                    // line 254
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_product_display", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\">確認</a></li>
                                                    <li><a href=\"#\" onclick=\"fnCopy('";
                    // line 255
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_product_copy", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "');return false;\">複製</a></li>
                                                    <li><a href=\"";
                    // line 256
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_product_delete", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\" data-message=\"商品情報を削除してもよろしいですか？\">削除</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- /.item_box -->
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 262
                echo "                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        ";
                // line 265
                if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()) > 0)) {
                    // line 266
                    echo "                            ";
                    $this->loadTemplate("pager.twig", "Product/index.twig", 266)->display(array_merge($context, array("pages" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "paginationData", array()), "routes" => "admin_product_page")));
                    // line 267
                    echo "                        ";
                }
                // line 268
                echo "                        ";
            } else {
                // line 269
                echo "                        <div class=\"box-header with-arrow\">
                            <h3 class=\"box-title\">検索条件に該当するデータがありませんでした。</h3>
                        </div><!-- /.box-header -->
                        ";
            }
            // line 273
            echo "                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div>

        ";
        }
    }

    public function getTemplateName()
    {
        return "Product/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 273,  491 => 269,  488 => 268,  485 => 267,  482 => 266,  480 => 265,  475 => 262,  461 => 256,  457 => 255,  453 => 254,  449 => 253,  441 => 247,  434 => 245,  430 => 244,  424 => 241,  420 => 240,  411 => 236,  407 => 235,  400 => 231,  396 => 229,  392 => 228,  380 => 219,  376 => 218,  369 => 213,  357 => 211,  351 => 210,  340 => 207,  335 => 206,  327 => 200,  319 => 198,  313 => 196,  311 => 195,  308 => 194,  301 => 192,  293 => 190,  287 => 188,  285 => 187,  282 => 186,  278 => 185,  275 => 184,  269 => 182,  265 => 180,  263 => 179,  253 => 172,  250 => 171,  248 => 170,  243 => 167,  241 => 166,  209 => 139,  198 => 133,  186 => 124,  177 => 118,  164 => 110,  156 => 107,  151 => 105,  144 => 101,  140 => 100,  136 => 98,  133 => 97,  71 => 38,  67 => 37,  62 => 36,  59 => 35,  52 => 32,  49 => 31,  43 => 27,  37 => 26,  33 => 22,  31 => 29,  29 => 24,  11 => 22,);
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
/* {% set menus = ['product', 'product_master'] %}*/
/* */
/* {% block title %}商品管理{% endblock %}*/
/* {% block sub_title %}商品マスター{% endblock %}*/
/* */
/* {% form_theme searchForm 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block stylesheet %}*/
/* <link rel="stylesheet" href="{{ app.config.admin_urlpath }}/assets/css/bootstrap-datetimepicker.min.css">*/
/* {% endblock stylesheet %}*/
/* */
/* {% block javascript %}*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/moment.min.js"></script>*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/moment-ja.js"></script>*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/vendor/bootstrap-datetimepicker.min.js"></script>*/
/* <script>*/
/* $(function() {*/
/* */
/*     var inputDate = document.createElement('input');*/
/*     inputDate.setAttribute('type', 'date');*/
/*     if (inputDate.type !== 'date') {*/
/*         $('input[id$=_date_start]').datetimepicker({*/
/*             locale: 'ja',*/
/*             format: 'YYYY-MM-DD',*/
/*             useCurrent: false,*/
/*             showTodayButton: true*/
/*         });*/
/* */
/*         $('input[id$=_date_end]').datetimepicker({*/
/*             locale: 'ja',*/
/*             format: 'YYYY-MM-DD',*/
/*             useCurrent: false,*/
/*             showTodayButton: true*/
/*         });*/
/*     }*/
/* */
/*     // フォーム値を確認し、アコーディオンを制御*/
/*     // 値あり : 開く / 値なし : 閉じる*/
/*     (function($, f) {*/
/*         //フォームがないページは処理キャンセル*/
/*         var $ac = $(".accpanel");*/
/*         if (!$ac) {*/
/*             return false*/
/*         }*/
/* */
/*         //フォーム内全項目取得*/
/*         var c = f();*/
/*         if (c.formState()) {*/
/*             if ($ac.css("display") == "none") {*/
/*                 $ac.parent('li').addClass("active");*/
/*                 $ac.slideDown(0);*/
/*             }*/
/*         } else {*/
/*             $ac.parent('li').removeClass("active");*/
/*             $ac.slideUp(0);*/
/*         }*/
/*     })($, formPropStateSubscriber);*/
/* });*/
/* </script>*/
/* <script>*/
/*     function fnConfirm(action) {*/
/*         document.search_form.action = action;*/
/*         document.search_form.submit();*/
/*     }*/
/*     function fnCopy(action) {*/
/*         if (confirm('この商品情報を複製しても宜しいですか？')) {*/
/*             document.search_form.action = action;*/
/*             document.search_form.submit();*/
/*         }*/
/*     }*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/*             <!--検索条件設定テーブルここから-->*/
/*             <div class="search-box">*/
/*                 <form name="search_form" id="search_form" method="post" action="{{ url('admin_product') }}">*/
/*                 	{{ form_widget(searchForm._token) }}*/
/*                     <div class="row">*/
/*                         <div class="col-md-12 accordion">*/
/* */
/*                             {{ form_widget(searchForm.id, { attr: { placeholder: '商品名・ID・コード', class : 'input_search' } } ) }}*/
/* */
/*                             <a href="#" class="toggle{% if active %} active{% endif %}">*/
/*                                 <svg class="cb cb-minus"> <use xlink:href="#cb-minus"/></svg> <svg class="cb cb-minus"> <use xlink:href="#cb-minus"/></svg>*/
/*                             </a>*/
/*                             <div class="search-box-inner accpanel" {% if active %} style="display: block;"{% endif %}>*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-12 col-lg-10 col-lg-offset-1 search">*/
/* */
/*                                         <div class="row">*/
/*                                             <div class="col-md-6">*/
/*                                                 <div class="form-group">*/
/*                                                     <label>カテゴリ</label>*/
/*                                                     {{ form_widget(searchForm.category_id) }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-md-6">*/
/*                                                 <label>種別</label>*/
/*                                                 <div class="form-group">*/
/*                                                     {{ form_widget(searchForm.status) }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div><!-- /.row -->*/
/* */
/*                                         <div class="row">*/
/*                                             <div class="col-sm-6">*/
/*                                                 <label>登録日</label>*/
/*                                                 <div class="form-group range">*/
/*                                                     {{ form_widget(searchForm.create_date_start, {'attr': {'class': 'input_cal'}}) }} ～ {{ form_widget(searchForm.create_date_end, {'attr': {'class': 'input_cal'}}) }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-sm-6">*/
/*                                                 <label>更新日</label>*/
/*                                                 <div class="form-group range">*/
/*                                                     {{ form_widget(searchForm.update_date_start, {'attr': {'class': 'input_cal'}}) }} ～ {{ form_widget(searchForm.update_date_end, {'attr': {'class': 'input_cal'}}) }}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div><!-- /.row -->*/
/*                                         <div class="row">*/
/*                                             <div class="col-sm-12">*/
/*                                                 <p class="text-center"><a href="#" class="search-clear">検索条件をクリア</a></p>*/
/*                                             </div>*/
/*                                         </div><!-- /.row -->*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /.col -->*/
/*                     </div>*/
/*                     <div class="row btn_area">*/
/*                         <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center">*/
/*                             <button class="btn btn-primary btn-block btn-lg" onclick="eccube.fnFormModeSubmit('search_form', 'search', '', ''); return false;">*/
/*                                 検索する <svg class="cb cb-angle-right"><use xlink:href="#cb-angle-right"></svg>*/
/*                             </button>*/
/*                         </div>*/
/*                         <!-- /.col -->*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*             <!--検索条件設定テーブルここまで-->*/
/* */
/*         {% if pagination %}*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="box">*/
/*                         {% if pagination|length > 0 %}*/
/*                         <div class="box-header with-arrow">*/
/*                             <h3 class="box-title">検索結果 <span class="normal"><strong>{{ pagination.totalItemCount }} 件</strong> が該当しました</span></h3>*/
/*                         </div><!-- /.box-header -->*/
/*                         <div class="box-body no-padding">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <ul class="link-with-bar">*/
/*                                     <li>*/
/*                                         {% if page_status is null %}*/
/*                                         <a>すべて</a>*/
/*                                         {% else %}*/
/*                                         <a href="{{ path('admin_product_page', {'page_no': page_no} ) }}">すべて</a>*/
/*                                         {% endif %}*/
/*                                     </li>*/
/*                                     {% for disp in disps %}*/
/*                                       <li>*/
/*                                       {% if page_status == disp.id %}*/
/*                                       <a>{{ disp.name|e }}</a>*/
/*                                       {% else %}*/
/*                                       <a href="{{ path('admin_product_page', {'page_no': page_no, 'status': disp.id} ) }}">{{ disp.name|e }}</a>*/
/*                                       {% endif %}*/
/*                                       </li>*/
/*                                     {% endfor %}*/
/*                                       <li>*/
/*                                       {% if page_status == app.config.admin_product_stock_status %}*/
/*                                           <a>{{ app.translator.trans('admin.product.search.stock') }}</a>*/
/*                                       {% else %}*/
/*                                           <a href="{{ path('admin_product_page', {'page_no': page_no, 'status': app.config.admin_product_stock_status} ) }}">{{ app.translator.trans('admin.product.search.stock') }}</a>*/
/*                                       {% endif %}*/
/*                                       </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <ul class="sort-dd">*/
/*                                     <li class="dropdown">*/
/*                                         {% for pageMax in pageMaxis if pageMax.name == page_count %}*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown">{{ pageMax.name|e }}件<svg class="cb cb-angle-down icon_down"><use xlink:href="#cb-angle-down"></svg></a>*/
/*                                             <ul class="dropdown-menu">*/
/*                                         {% endfor %}*/
/*                                         {% for pageMax in pageMaxis if pageMax.name != page_count %}*/
/*                                                 <li><a href="{{ path('admin_product_page', {'page_no': 1, 'page_count': pageMax.name}) }}">{{ pageMax.name|e }}件</a></li>*/
/*                                         {% endfor %}*/
/*                                             </ul>*/
/*                                     </li>*/
/*                                     <li class="dropdown">*/
/*                                         <a class="dropdown-toggle" data-toggle="dropdown">CSVダウンロード<svg class="cb cb-angle-down icon_down"><use xlink:href="#cb-angle-down"></svg></a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li><a href="{{ url('admin_product_export') }}">CSVダウンロード</a></li>*/
/*                                             <li><a href="{{ url('admin_setting_shop_csv', { id : constant('\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_PRODUCT') }) }}">出力項目設定</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="item_list">*/
/*                                 <div class="tableish tableish-striped">*/
/* */
/*                                     {% for Product in pagination %}*/
/*                                         <div class="item_box tr">*/
/*                                             <div class="item_id td">*/
/*                                                 {{Product.id}}*/
/*                                             </div>*/
/* */
/*                                             <div class="item_photo td">*/
/*                                                 <a href="{{ url('admin_product_product_edit', { id : Product.id }) }}">*/
/*                                                 	<img src="{{ app.config.image_save_urlpath }}/{{ Product.mainFileName|no_image_product }}" />*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="item_detail td">*/
/*                                                 <a href="{{ url('admin_product_product_edit', { id : Product.id }) }}">*/
/*                                                     {{ Product.name }}*/
/*                                                 </a><br>*/
/*                                                 <span>*/
/*                                                     {{ Product.code_min }}*/
/*                                                     {% if Product.code_min != Product.code_max %} ～ {{ Product.code_max }}*/
/*                                                     {% endif %}*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                             <div class="icon_edit td">*/
/*                                                 <div class="dropdown">*/
/*                                                     <a class="dropdown-toggle" data-toggle="dropdown"><svg class="cb cb-ellipsis-h"><use xlink:href="#cb-ellipsis-h"></svg></a>*/
/*                                                     <ul class="dropdown-menu dropdown-menu-right">*/
/*                                                     <li><a href="{{ url('admin_product_product_class', { id : Product.id }) }}">規格</a></li>*/
/*                                                     <li><a href="{{ url('admin_product_product_display', {'id' : Product.id}) }}" target="_blank">確認</a></li>*/
/*                                                     <li><a href="#" onclick="fnCopy('{{ url('admin_product_product_copy', {'id' : Product.id}) }}');return false;">複製</a></li>*/
/*                                                     <li><a href="{{ url('admin_product_product_delete', {'id' : Product.id}) }}" {{ csrf_token_for_anchor() }} data-method="delete" data-message="商品情報を削除してもよろしいですか？">削除</a></li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div><!-- /.item_box -->*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- /.box-body -->*/
/*                         {% if pagination.totalItemCount > 0 %}*/
/*                             {% include "pager.twig" with { 'pages' : pagination.paginationData, 'routes' : 'admin_product_page' } %}*/
/*                         {% endif %}*/
/*                         {% else %}*/
/*                         <div class="box-header with-arrow">*/
/*                             <h3 class="box-title">検索条件に該当するデータがありませんでした。</h3>*/
/*                         </div><!-- /.box-header -->*/
/*                         {% endif %}*/
/*                     </div><!-- /.box -->*/
/*                 </div><!-- /.col -->*/
/*             </div>*/
/* */
/*         {% endif %}*/
/* {% endblock %}*/
/* */
