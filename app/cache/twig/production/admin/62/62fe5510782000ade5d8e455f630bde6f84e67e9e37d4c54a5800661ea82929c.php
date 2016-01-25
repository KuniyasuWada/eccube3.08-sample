<?php

/* Content/file.twig */
class __TwigTemplate_19f8ce1035ac0c9a7a6646f49efd4f36952330138477426307ed66ff90bb2418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 17
        $this->parent = $this->loadTemplate("default_frame.twig", "Content/file.twig", 17);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        // line 19
        $context["menus"] = array(0 => "content", 1 => "file");
        // line 24
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 17
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        echo "コンテンツ管理";
    }

    // line 22
    public function block_sub_title($context, array $blocks = array())
    {
        echo "ファイル管理";
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/file_manager.js\"></script>
<script>
";
        // line 29
        echo (isset($context["tpl_javascript"]) ? $context["tpl_javascript"] : null);
        echo "
    \$(function() {
        var bread_crumbs = ";
        // line 31
        echo (isset($context["now_dir_list"]) ? $context["now_dir_list"] : null);
        echo ";
        var file_path = '";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["html_dir"]) ? $context["html_dir"] : null), "html", null, true);
        echo "';
        var \$delimiter = '<span>&nbsp;&gt;&nbsp;</span>';
        var \$node = \$('#bread');
        var total = bread_crumbs.length;
        for (var i in bread_crumbs) {
            file_path += '/' + bread_crumbs[i];
            \$('<a href=\"javascript:;\" onclick=\"eccube.fileManager.openFolder(\\'' + file_path + '\\'); return false;\" />')
                .text(bread_crumbs[i])
                .appendTo(\$node);
            if (i < total - 1) \$node.append(\$delimiter);
        }
    });

    eccube.fileManager.IMG_FOLDER_CLOSE   = \"<svg class='cb cb-folder'><use xlink:href='#cb-folder' /></svg>\";  // フォルダクローズ時画像
    eccube.fileManager.IMG_FOLDER_OPEN    = \"<svg class='cb cb-folder-open'><use xlink:href='#cb-folder-open' /></svg>\";   // フォルダオープン時画像
    eccube.fileManager.IMG_PLUS           = \"<svg class='cb cb-plus-square'><use xlink:href='#cb-plus-square' /></svg>\";          // プラスライン
    eccube.fileManager.IMG_MINUS          = \"<svg class='cb cb-minus-square'><use xlink:href='#cb-minus-square' /></svg>\";         // マイナスライン
    eccube.fileManager.IMG_NORMAL         = \"　\";         // スペース
    ";
        // line 50
        echo (isset($context["tpl_onload"]) ? $context["tpl_onload"] : null);
        echo "
</script>

";
    }

    // line 54
    public function block_main($context, array $blocks = array())
    {
        // line 55
        echo "    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\"  enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"mode\" value=\"\" />
    <input type=\"hidden\" name=\"now_file\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["tpl_now_dir"]) ? $context["tpl_now_dir"] : null), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"now_dir\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["tpl_now_dir"]) ? $context["tpl_now_dir"] : null), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"tree_select_file\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["tpl_now_dir"]) ? $context["tpl_now_dir"] : null), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"tree_status\" value=\"\" />
    <input type=\"hidden\" name=\"select_file\" value=\"\" />
    <div class=\"row\" id=\"aside_wrap\">

        <div class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header form-horizontal\">
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 col-lg-3 control-label\">ファイルのアップロード</label>
                        <div class=\"col-sm-8 col-lg-9 padT07\">
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
                            <div class=\"marT10\"><a class=\"btn btn-default btn-sm\" href=\"javascript;\" onclick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('upload','',''); return false;\">アップロード</a></div>
                        </div>
                    </div>
                    <div class=\"form-group form-inline\">
                        <label class=\"col-sm-4 col-lg-3 control-label\">フォルダ作成</label>
                        <div class=\"col-sm-8 col-lg-9\">
                            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "create_file", array()), 'widget');
        echo "
                            <a class=\"btn btn-default btn-sm\" href=\"javascript:\" onclick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('create','',''); return false;\">作成</a>
                        </div>
                    </div>
                ";
        // line 82
        if ( !(null === (isset($context["error"]) ? $context["error"] : null))) {
            // line 83
            echo "                    <p class=\"text-danger errormsg\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 85
        echo "
                </div><!-- /.box-header -->

                <div id=\"bread\" style=\"margin-left: 10px;\"></div>
                <div class=\"box-body\">
                    <div class=\"table_list\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped with-border\">
                                <thead>
                                    <tr>
                                        <th>ファイル名</th>
                                        <th>サイズ</th>
                                        <th>更新日付</th>
                                        <th>表示</th>
                                        <th>ダウンロード</th>
                                        <th>削除</th>
                                    </tr>
                                </thead>
                                <tbody>
                ";
        // line 104
        if (((isset($context["tpl_is_top_dir"]) ? $context["tpl_is_top_dir"] : null) == false)) {
            // line 105
            echo "                    <tr id=\"parent_dir\" onclick=\"eccube.setValue('select_file', '";
            echo twig_escape_filter($this->env, (isset($context["tpl_parent_dir"]) ? $context["tpl_parent_dir"] : null), "html", null, true);
            echo "', 'form1'); eccube.fileManager.selectFile('parent_dir', '#808080');\" onDblClick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.fileManager.doubleClick(arrTree, '";
            echo twig_escape_filter($this->env, (isset($context["tpl_parent_dir"]) ? $context["tpl_parent_dir"] : null), "html", null, true);
            echo "', true, '";
            echo twig_escape_filter($this->env, (isset($context["tpl_now_dir"]) ? $context["tpl_now_dir"] : null), "html", null, true);
            echo "', true)\" style=\"\">
                        <td><svg class=\"cb cb-ellipsis-h\"><use xlink:href=\"#cb-ellipsis-h\" /></svg></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                ";
        }
        // line 114
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrFileList"]) ? $context["arrFileList"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 115
            echo "                    <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" style=\"\">
                        <td class=\"file-name\" onDblClick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.fileManager.doubleClick(arrTree, '";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "file_path", array()), "html", null, true);
            echo "', ";
            if ($this->getAttribute($context["file"], "is_dir", array())) {
                echo "true";
            } else {
                echo "false";
            }
            echo " '";
            echo twig_escape_filter($this->env, (isset($context["tpl_now_dir"]) ? $context["tpl_now_dir"] : null), "html", null, true);
            echo "', false)\">
                            ";
            // line 117
            if ($this->getAttribute($context["file"], "is_dir", array())) {
                // line 118
                echo "                                <svg class=\"cb cb-folder\"><use xlink:href=\"#cb-folder\" /></svg>
                            ";
            } else {
                // line 120
                echo "                                <svg class=\"cb cb-file-text\"><use xlink:href=\"#cb-file-text\" /></svg>
                            ";
            }
            // line 122
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "file_name", array()), "html", null, true);
            echo "
                        </td>
                        <td class=\"text-right\">
                            ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "file_size", array()), "html", null, true);
            echo "
                        </td>
                        <td class=\"text-center\">
                            ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "file_time", array()), "html", null, true);
            echo "
                        </td>
                        <td class=\"text-center\">
                            ";
            // line 131
            if ($this->getAttribute($context["file"], "is_dir", array())) {
                // line 132
                echo "                                <a href=\"javascript:;\" onclick=\"eccube.setValue('tree_select_file', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "file_path", array()), "html", null, true);
                echo "', 'form1'); eccube.fileManager.selectFile('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "', '#808080');eccube.setModeAndSubmit('move','',''); return false;\">表示</a>
                            ";
            } else {
                // line 134
                echo "                                <a href=\"";
                echo $this->env->getExtension('routing')->getUrl("admin_content_file_view");
                echo "?file=";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["file"], "file_path", array()), "url"), "html", null, true);
                echo "\" target=\"_blank\">表示</a>
                            ";
            }
            // line 136
            echo "                        </td>
                        ";
            // line 137
            if ($this->getAttribute($context["file"], "is_dir", array())) {
                // line 138
                echo "                            ";
                // line 139
                echo "                            <td class=\"text-center\">-</td>
                        ";
            } else {
                // line 141
                echo "                            <td class=\"text-center\">
                                <a href=\"";
                // line 142
                echo $this->env->getExtension('routing')->getUrl("admin_content_file_download");
                echo "?select_file=";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["file"], "file_path", array()), "url"), "html", null, true);
                echo "\" target=\"_blank\">ダウンロード</a>
                            </td>
                        ";
            }
            // line 145
            echo "                        <td class=\"text-center\">
                            <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_content_file_delete", array("select_file" => $this->getAttribute($context["file"], "file_path", array()))), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
            echo " data-method=\"delete\" data-message=\"一度削除したデータは元に戻せません。削除してもよろしいですか？\">削除</a>
                        </td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /.box-body --> 
            </div>
        </div><!-- /.col -->
        
        <div class=\"col-md-3\">
            <div class=\"col_inner\" id=\"aside_column\">
                <div class=\"box no-header\">
                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <div id=\"tree\"></div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col --> 

    </div>
    </form>


";
    }

    public function getTemplateName()
    {
        return "Content/file.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 150,  300 => 146,  297 => 145,  289 => 142,  286 => 141,  282 => 139,  280 => 138,  278 => 137,  275 => 136,  267 => 134,  259 => 132,  257 => 131,  251 => 128,  245 => 125,  238 => 122,  234 => 120,  230 => 118,  228 => 117,  216 => 116,  211 => 115,  193 => 114,  176 => 105,  174 => 104,  153 => 85,  147 => 83,  145 => 82,  138 => 78,  128 => 71,  121 => 67,  110 => 59,  106 => 58,  102 => 57,  98 => 55,  95 => 54,  87 => 50,  66 => 32,  62 => 31,  57 => 29,  51 => 27,  48 => 26,  42 => 22,  36 => 21,  32 => 17,  30 => 24,  28 => 19,  11 => 17,);
    }
}
/* {#*/
/* This file is part of EC-CUBE*/
/* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/* http://www.lockon.co.jp/*/
/* This program is free software; you can redistribute it and/or*/
/* modify it under the terms of the GNU General Public License*/
/* as published by the Free Software Foundation; either version 2*/
/* of the License, or (at your option) any later version.*/
/* This program is distributed in the hope that it will be useful,*/
/* but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/* GNU General Public License for more details.*/
/* You should have received a copy of the GNU General Public License*/
/* along with this program; if not, write to the Free Software*/
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/* #}*/
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['content', 'file'] %}*/
/* */
/* {% block title %}コンテンツ管理{% endblock %}*/
/* {% block sub_title %}ファイル管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* <script src="{{ app.config.admin_urlpath }}/assets/js/file_manager.js"></script>*/
/* <script>*/
/* {{ tpl_javascript|raw }}*/
/*     $(function() {*/
/*         var bread_crumbs = {{ now_dir_list|raw }};*/
/*         var file_path = '{{ html_dir }}';*/
/*         var $delimiter = '<span>&nbsp;&gt;&nbsp;</span>';*/
/*         var $node = $('#bread');*/
/*         var total = bread_crumbs.length;*/
/*         for (var i in bread_crumbs) {*/
/*             file_path += '/' + bread_crumbs[i];*/
/*             $('<a href="javascript:;" onclick="eccube.fileManager.openFolder(\'' + file_path + '\'); return false;" />')*/
/*                 .text(bread_crumbs[i])*/
/*                 .appendTo($node);*/
/*             if (i < total - 1) $node.append($delimiter);*/
/*         }*/
/*     });*/
/* */
/*     eccube.fileManager.IMG_FOLDER_CLOSE   = "<svg class='cb cb-folder'><use xlink:href='#cb-folder' /></svg>";  // フォルダクローズ時画像*/
/*     eccube.fileManager.IMG_FOLDER_OPEN    = "<svg class='cb cb-folder-open'><use xlink:href='#cb-folder-open' /></svg>";   // フォルダオープン時画像*/
/*     eccube.fileManager.IMG_PLUS           = "<svg class='cb cb-plus-square'><use xlink:href='#cb-plus-square' /></svg>";          // プラスライン*/
/*     eccube.fileManager.IMG_MINUS          = "<svg class='cb cb-minus-square'><use xlink:href='#cb-minus-square' /></svg>";         // マイナスライン*/
/*     eccube.fileManager.IMG_NORMAL         = "　";         // スペース*/
/*     {{ tpl_onload|raw }}*/
/* </script>*/
/* */
/* {% endblock javascript %}*/
/* {% block main %}*/
/*     <form name="form1" id="form1" method="post" action="?"  enctype="multipart/form-data">*/
/*     <input type="hidden" name="mode" value="" />*/
/*     <input type="hidden" name="now_file" value="{{ tpl_now_dir }}" />*/
/*     <input type="hidden" name="now_dir" value="{{ tpl_now_dir }}" />*/
/*     <input type="hidden" name="tree_select_file" value="{{ tpl_now_dir }}" />*/
/*     <input type="hidden" name="tree_status" value="" />*/
/*     <input type="hidden" name="select_file" value="" />*/
/*     <div class="row" id="aside_wrap">*/
/* */
/*         <div class="col-md-9">*/
/*             <div class="box">*/
/*                 <div class="box-header form-horizontal">*/
/*                     {{ form_widget(form._token) }}*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 col-lg-3 control-label">ファイルのアップロード</label>*/
/*                         <div class="col-sm-8 col-lg-9 padT07">*/
/*                             {{ form_widget(form.file) }}*/
/*                             <div class="marT10"><a class="btn btn-default btn-sm" href="javascript;" onclick="eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('upload','',''); return false;">アップロード</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group form-inline">*/
/*                         <label class="col-sm-4 col-lg-3 control-label">フォルダ作成</label>*/
/*                         <div class="col-sm-8 col-lg-9">*/
/*                             {{ form_widget(form.create_file) }}*/
/*                             <a class="btn btn-default btn-sm" href="javascript:" onclick="eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('create','',''); return false;">作成</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% if error is not null %}*/
/*                     <p class="text-danger errormsg">{{ error.message }}</p>*/
/*                 {% endif %}*/
/* */
/*                 </div><!-- /.box-header -->*/
/* */
/*                 <div id="bread" style="margin-left: 10px;"></div>*/
/*                 <div class="box-body">*/
/*                     <div class="table_list">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped with-border">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>ファイル名</th>*/
/*                                         <th>サイズ</th>*/
/*                                         <th>更新日付</th>*/
/*                                         <th>表示</th>*/
/*                                         <th>ダウンロード</th>*/
/*                                         <th>削除</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                 {% if tpl_is_top_dir == false %}*/
/*                     <tr id="parent_dir" onclick="eccube.setValue('select_file', '{{ tpl_parent_dir }}', 'form1'); eccube.fileManager.selectFile('parent_dir', '#808080');" onDblClick="eccube.fileManager.setTreeStatus('tree_status');eccube.fileManager.doubleClick(arrTree, '{{ tpl_parent_dir }}', true, '{{ tpl_now_dir }}', true)" style="">*/
/*                         <td><svg class="cb cb-ellipsis-h"><use xlink:href="#cb-ellipsis-h" /></svg></td>*/
/*                         <td>&nbsp;</td>*/
/*                         <td>&nbsp;</td>*/
/*                         <td>&nbsp;</td>*/
/*                         <td>&nbsp;</td>*/
/*                         <td>&nbsp;</td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/*                 {% for file in arrFileList %}*/
/*                     <tr id="{{ loop.index }}" style="">*/
/*                         <td class="file-name" onDblClick="eccube.fileManager.setTreeStatus('tree_status');eccube.fileManager.doubleClick(arrTree, '{{ file.file_path }}', {% if file.is_dir %}true{% else %}false{% endif %} '{{ tpl_now_dir }}', false)">*/
/*                             {% if file.is_dir %}*/
/*                                 <svg class="cb cb-folder"><use xlink:href="#cb-folder" /></svg>*/
/*                             {% else %}*/
/*                                 <svg class="cb cb-file-text"><use xlink:href="#cb-file-text" /></svg>*/
/*                             {% endif %}*/
/*                             {{ file.file_name }}*/
/*                         </td>*/
/*                         <td class="text-right">*/
/*                             {{ file.file_size }}*/
/*                         </td>*/
/*                         <td class="text-center">*/
/*                             {{ file.file_time }}*/
/*                         </td>*/
/*                         <td class="text-center">*/
/*                             {% if file.is_dir %}*/
/*                                 <a href="javascript:;" onclick="eccube.setValue('tree_select_file', '{{ file.file_path }}', 'form1'); eccube.fileManager.selectFile('{{ loop.index }}', '#808080');eccube.setModeAndSubmit('move','',''); return false;">表示</a>*/
/*                             {% else %}*/
/*                                 <a href="{{ url('admin_content_file_view') }}?file={{ file.file_path|e('url') }}" target="_blank">表示</a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         {% if file.is_dir %}*/
/*                             {# ディレクトリはダウンロード不可 #}*/
/*                             <td class="text-center">-</td>*/
/*                         {% else %}*/
/*                             <td class="text-center">*/
/*                                 <a href="{{ url('admin_content_file_download') }}?select_file={{ file.file_path|e('url') }}" target="_blank">ダウンロード</a>*/
/*                             </td>*/
/*                         {% endif %}*/
/*                         <td class="text-center">*/
/*                             <a href="{{ url('admin_content_file_delete', { 'select_file': file.file_path}) }}" {{ csrf_token_for_anchor() }} data-method="delete" data-message="一度削除したデータは元に戻せません。削除してもよろしいですか？">削除</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box-body --> */
/*             </div>*/
/*         </div><!-- /.col -->*/
/*         */
/*         <div class="col-md-3">*/
/*             <div class="col_inner" id="aside_column">*/
/*                 <div class="box no-header">*/
/*                     <div class="box-body">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                 <div id="tree"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*         </div><!-- /.col --> */
/* */
/*     </div>*/
/*     </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
