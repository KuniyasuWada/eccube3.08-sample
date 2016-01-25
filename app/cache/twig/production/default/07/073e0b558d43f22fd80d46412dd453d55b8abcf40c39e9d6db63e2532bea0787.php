<?php

/* Shopping/index.twig */
class __TwigTemplate_49c5a0ca3d94f57464f55c8e2b2049f0c7a3b923367ab0d0ecd9c2693d95ea8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/index.twig", 22);
        $this->blocks = array(
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        // line 25
        echo "<script>
\$(function(){

    \$('.delivery').on('change', function() {
        \$('#shopping-form').attr('action', '";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("shopping_delivery");
        echo "').submit();
    });

    \$('.payment').on('change', function() {
        \$('#shopping-form').attr('action', '";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("shopping_payment");
        echo "').submit();
    });

    \$('.btn-shipping').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        return false;
    });

    \$('.btn-shipping-edit').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        return false;
    });

    \$('.btn-shipping-multiple').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        return false;
    });

    ";
        // line 51
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 52
            echo "    var ref = new Array();
    var name = new Array();
    var input = new Array();
    var customerin = new Array();
    \$('#customer').click(function() {
        // ref = \$('.customer-name01');
        var edit = \$('.customer-edit');
        var hidden = \$('.customer-in');

        \$(edit).each(function(index) {
            ref[index] = \$(this);
        });
        \$(hidden).each(function(index) {
            customerin[index] = \$(this);
        });
        \$(ref).each(function(index) {
            name[index] = \$(this).text();
        });
        \$(name).each(function(index) {
            input[index] = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name[index]);
        });
        \$(input).each(function(index) {
            ref[index].empty().append(input[index]);
        });

        \$('#customer').prop(\"disabled\", true);
        \$('.mod-button').show();
    });

    \$('#customer-ok').click(function() {

        var data;
        \$(ref).each(function(index) {
            var nameAfter = input[index].val();
            ref[index].empty().text(nameAfter);
            customerin[index].val(nameAfter);
            input[index].remove();
        });

        var postData = {};
        \$('.customer-in').each(function() {
          postData[\$(this).attr('name')] = \$(this).val();
        });

        \$.ajax({
            url: \"";
            // line 97
            echo $this->env->getExtension('routing')->getUrl("shopping_customer");
            echo "\",
            type: 'POST',
            data: postData,
            dataType: 'json',
        }).done(function(data){
        }).fail(function(data){
            alert('更新に失敗しました。入力内容を確認してください。');
            \$(ref).each(function(index) {
                ref[index].empty().text(name[index]);
                input[index].remove();
            });
        });

        \$('#customer').prop(\"disabled\", false);
        \$('.mod-button').hide();
    });

    \$('#customer-cancel').click(function() {

        \$(ref).each(function(index) {
            ref[index].empty().text(name[index]);
            input[index].remove();
        });

        \$('#customer').prop(\"disabled\", false);
        \$('.mod-button').hide();
    });
    ";
        }
        // line 125
        echo "
});
</script>
";
    }

    // line 130
    public function block_main($context, array $blocks = array())
    {
        // line 131
        echo "    <h1 class=\"page-heading\">ご注文内容のご確認</h1>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 135
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 136
            echo "                <div class=\"flowline step3\">
                ";
        } else {
            // line 138
            echo "                <div class=\"flowline step4\">
                ";
        }
        // line 140
        echo "                    <ul class=\"clearfix\">
                    <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 142
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 143
            echo "                        <li class=\"active\"><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 146
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li class=\"active\"><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 150
        echo "                    </ul>
                </div>
                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 153
            echo "                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 155
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["error"]), "html", null, true));
            echo "
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "            </div><!-- /.col -->
        </div><!-- /.row -->
        <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 161
        echo $this->env->getExtension('routing')->getUrl("shopping_confirm");
        echo "\">
            ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
            <div id=\"shopping_confirm\" class=\"row\">
                <div id=\"confirm_main\" class=\"col-sm-8\">
                    <div class=\"cart_item table\">
                        <div class=\"tbody\">
                            ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "orderDetails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["orderDetail"]) {
            // line 168
            echo "                            <div class=\"item_box tr\">
                                <div class=\"td table\">
                                    <div class=\"item_photo\"><img src=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute($this->getAttribute($context["orderDetail"], "product", array()), "MainListImage", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderDetail"], "productName", array()), "html", null, true);
            echo "\" /></div>
                                    <dl class=\"item_detail\">
                                        <dt class=\"item_name text-default\">";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderDetail"], "productName", array()), "html", null, true);
            echo "</dt>
                                        <dd class=\"item_pattern small\">
                                            ";
            // line 174
            if ($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array())) {
                // line 175
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array()), "className", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 177
            echo "                                            ";
            if ($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array())) {
                // line 178
                echo "                                                <br>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array()), "className", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 180
            echo "                                        </dd>
                                        <dd class=\"item_price\">";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["orderDetail"], "priceIncTax", array())), "html", null, true);
            echo " × ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["orderDetail"], "quantity", array())), "html", null, true);
            echo "</dd>
                                        <dd class=\"item_subtotal\">小計：";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["orderDetail"], "totalPrice", array())), "html", null, true);
            echo "</dd>
                                    </dl>
                                </div>
                            </div><!--/item_box-->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                        </div>
                    </div><!--/cart_item-->
                    <p><a href=\"";
        // line 189
        echo $this->env->getExtension('routing')->getUrl("cart");
        echo "\" class=\"btn btn-default btn-sm\">数量を変更または削除する</a></p>
                    <h2 class=\"heading02\">お客様情報</h2>
                    <div class=\"column is-edit\">
                        <p class=\"address\"><span class=\"customer-edit customer-name01\">";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-name02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
        echo "</span> 様<br>
                        〒<span class=\"customer-edit customer-zip01\">";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip01", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-zip02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip02", array()), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-pref\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "pref", array()), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr01\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr01", array()), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr02", array()), "html", null, true);
        echo "</span><br>
                        <span class=\"customer-edit customer-tel01\">";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel01", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-tel02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel02", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-tel03\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel03", array()), "html", null, true);
        echo "</span></p>
                        ";
        // line 195
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 196
            echo "                        <div class=\"customer-edit customer-email\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "email", array()), "html", null, true);
            echo "</div>
                        <div class=\"customer-edit customer-company_name\">";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "companyName", array()), "html", null, true);
            echo "</div>
                        <div class=\"mod-button\" style=\"display:none;\">
                            <span id=\"customer-ok\"><button type=\"button\" class=\"btn btn-default btn-sm\">OK</button></span>
                            <span id=\"customer-cancel\"><button type=\"button\" class=\"btn btn-default btn-sm\">キャンセル</button></span>
                        </div>
                        <p class=\"btn_edit\"><button type=\"button\" id=\"customer\" class=\"btn btn-default btn-sm\">変更</button></p>
                        <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-zip01\" class=\"customer-in\" name=\"customer_zip01\" value=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip01", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-zip02\" class=\"customer-in\" name=\"customer_zip02\" value=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip02", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "pref", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr01", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr02", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-tel01\" class=\"customer-in\" name=\"customer_tel01\" value=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel01", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-tel02\" class=\"customer-in\" name=\"customer_tel02\" value=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel02", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-tel03\" class=\"customer-in\" name=\"customer_tel03\" value=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel03", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "email", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "companyName", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 216
        echo "                    </div>

                    <h2 class=\"heading02\">配送情報</h2>
                    ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "shippings", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 220
            echo "                        ";
            $context["idx"] = $this->getAttribute($context["loop"], "index0", array());
            // line 221
            echo "                        <div class=\"column is-edit\">
                            <h3>お届け先";
            // line 222
            if ($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "multiple", array())) {
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ")";
            }
            echo "</h3>
                            <div class=\"cart_item table\">
                                <div class=\"tbody\">
                                ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping"], "shipmentItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["shipmentItem"]) {
                // line 226
                echo "                                    <div class=\"item_box tr\">
                                        <div class=\"td table\">
                                            <div class=\"item_photo\"><img src=\"";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "MainListImage", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                echo "\" /></div>
                                            <dl class=\"item_detail\">
                                                <dt class=\"item_name text-default\">";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                echo "</dt>
                                                <dd class=\"item_pattern small\">
                                                    ";
                // line 232
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array())) {
                    // line 233
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 235
                echo "                                                    ";
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array())) {
                    // line 236
                    echo "                                                        <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 238
                echo "                                                </dd>
                                                <dd class=\"item_price\">";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["shipmentItem"], "priceIncTax", array())), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["shipmentItem"], "quantity", array())), "html", null, true);
                echo "</dd>
                                                <dd class=\"item_subtotal\">小計：";
                // line 240
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($context["shipmentItem"], "totalPrice", array())), "html", null, true);
                echo "</dd>
                                            </dl>
                                        </div>
                                    </div><!--/item_box-->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipmentItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "                                </div>
                            </div>

                            <p class=\"address\">";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "name01", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "name02", array()), "html", null, true);
            echo " 様<br>
                            〒";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "zip02", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "pref", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "addr02", array()), "html", null, true);
            echo "<br>
                            ";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel03", array()), "html", null, true);
            echo "</p>
                            <div class=\"form-inline form-group\">
                                <label>配送方法</label>
                                ";
            // line 253
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "delivery", array()), 'widget', array("attr" => array("class" => "delivery")));
            echo "
                                ";
            // line 254
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "delivery", array()), 'errors');
            echo "
                            </div>

                            <div class=\"form-inline form-group\">
                                <label>お届け日</label>
                                ";
            // line 259
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "shippingDeliveryDate", array()), 'widget');
            echo "<br class=\"sp\">
                                <label>お届け時間</label>
                                ";
            // line 261
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "deliveryTime", array()), 'widget');
            echo "
                            </div>
                            ";
            // line 263
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 264
                echo "                            <p class=\"btn_edit\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("shopping_shipping_change", array("id" => $this->getAttribute($context["shipping"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-shipping\">変更</a></p>
                            ";
            } else {
                // line 266
                echo "                            <p class=\"btn_edit\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("shopping_shipping_edit_change", array("id" => $this->getAttribute($context["shipping"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-shipping-edit\">変更</a></p>
                            ";
            }
            // line 268
            echo "                        </div>
                        ";
            // line 269
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo "<hr>";
            }
            // line 270
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                    ";
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
            // line 272
            echo "                        <hr>
                        <div><a href=\"";
            // line 273
            echo $this->env->getExtension('routing')->getUrl("shopping_shipping_multiple_change");
            echo "\" class=\"btn btn-default btn-sm btn-shipping-multiple\">お届け先を追加する</a></div>
                    ";
        }
        // line 275
        echo "
                    <h2 class=\"heading02\">お支払方法</h2>
                    <div class=\"column\">
                        <div class=\"form-group\">
                            <ul class=\"payment_list\">
                            ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 281
            echo "                            <li>
                                ";
            // line 282
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => "payment")));
            echo "
                                ";
            // line 283
            if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()), "vars", array()), "choices", array()), $context["key"], array(), "array"), "data", array()), "payment_image", array()))) {
                // line 284
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()), "vars", array()), "choices", array()), $context["key"], array(), "array"), "data", array()), "payment_image", array()), "html", null, true);
                echo "\">
                                ";
            }
            // line 286
            echo "                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()), 'errors');
        echo "
                            </ul>
                        </div>
                    </div>
                    <h2 class=\"heading02\">お問い合わせ欄</h2>
                    <div class=\"column\">
                        ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("placeholder" => "お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)", "rows" => "6")));
        echo "
                        ";
        // line 295
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
        echo "
                    </div>
                </div><!-- /.col -->

                <div id=\"confirm_side\" class=\"col-sm-4\">
                    <div class=\"total_box\">
                        <dl>
                            <dt>小計</dt>
                            <dd class=\"text-primary\">";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "subtotal", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        <dl>
                            <dt>手数料</dt>
                            <dd>";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "charge", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        <dl>
                            <dt>送料</dt>
                            <dd>";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "deliveryFeeTotal", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        <div class=\"total_amount\">
                            <p class=\"total_price\">合計 <strong class=\"text-primary\">";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "total", array())), "html", null, true);
        echo "<span class=\"small\">税込</span></strong></p>
                            <p><button id=\"order-button\" type=\"submit\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">注文する</button></p>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Shopping/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 314,  665 => 311,  658 => 307,  651 => 303,  640 => 295,  636 => 294,  626 => 288,  619 => 286,  611 => 284,  609 => 283,  605 => 282,  602 => 281,  598 => 280,  591 => 275,  586 => 273,  583 => 272,  580 => 271,  566 => 270,  562 => 269,  559 => 268,  553 => 266,  547 => 264,  545 => 263,  540 => 261,  535 => 259,  527 => 254,  523 => 253,  513 => 250,  503 => 249,  497 => 248,  492 => 245,  481 => 240,  475 => 239,  472 => 238,  464 => 236,  461 => 235,  453 => 233,  451 => 232,  446 => 230,  437 => 228,  433 => 226,  429 => 225,  419 => 222,  416 => 221,  413 => 220,  396 => 219,  391 => 216,  386 => 214,  382 => 213,  378 => 212,  374 => 211,  370 => 210,  366 => 209,  362 => 208,  358 => 207,  354 => 206,  350 => 205,  346 => 204,  342 => 203,  333 => 197,  328 => 196,  326 => 195,  318 => 194,  306 => 193,  300 => 192,  294 => 189,  290 => 187,  279 => 182,  273 => 181,  270 => 180,  262 => 178,  259 => 177,  251 => 175,  249 => 174,  244 => 172,  235 => 170,  231 => 168,  227 => 167,  219 => 162,  215 => 161,  211 => 159,  201 => 155,  197 => 153,  193 => 152,  189 => 150,  183 => 146,  178 => 143,  176 => 142,  172 => 140,  168 => 138,  164 => 136,  162 => 135,  156 => 131,  153 => 130,  146 => 125,  115 => 97,  68 => 52,  66 => 51,  45 => 33,  38 => 29,  32 => 25,  29 => 24,  11 => 22,);
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
/* {% block javascript %}*/
/* <script>*/
/* $(function(){*/
/* */
/*     $('.delivery').on('change', function() {*/
/*         $('#shopping-form').attr('action', '{{ url("shopping_delivery") }}').submit();*/
/*     });*/
/* */
/*     $('.payment').on('change', function() {*/
/*         $('#shopping-form').attr('action', '{{ url("shopping_payment") }}').submit();*/
/*     });*/
/* */
/*     $('.btn-shipping').click(function() {*/
/*         $('#shopping-form').attr('action', $(this).attr('href')).submit();*/
/*         return false;*/
/*     });*/
/* */
/*     $('.btn-shipping-edit').click(function() {*/
/*         $('#shopping-form').attr('action', $(this).attr('href')).submit();*/
/*         return false;*/
/*     });*/
/* */
/*     $('.btn-shipping-multiple').click(function() {*/
/*         $('#shopping-form').attr('action', $(this).attr('href')).submit();*/
/*         return false;*/
/*     });*/
/* */
/*     {% if is_granted('ROLE_USER') == false %}*/
/*     var ref = new Array();*/
/*     var name = new Array();*/
/*     var input = new Array();*/
/*     var customerin = new Array();*/
/*     $('#customer').click(function() {*/
/*         // ref = $('.customer-name01');*/
/*         var edit = $('.customer-edit');*/
/*         var hidden = $('.customer-in');*/
/* */
/*         $(edit).each(function(index) {*/
/*             ref[index] = $(this);*/
/*         });*/
/*         $(hidden).each(function(index) {*/
/*             customerin[index] = $(this);*/
/*         });*/
/*         $(ref).each(function(index) {*/
/*             name[index] = $(this).text();*/
/*         });*/
/*         $(name).each(function(index) {*/
/*             input[index] = $('<input id="edit' + index + '" type="text" />').val(name[index]);*/
/*         });*/
/*         $(input).each(function(index) {*/
/*             ref[index].empty().append(input[index]);*/
/*         });*/
/* */
/*         $('#customer').prop("disabled", true);*/
/*         $('.mod-button').show();*/
/*     });*/
/* */
/*     $('#customer-ok').click(function() {*/
/* */
/*         var data;*/
/*         $(ref).each(function(index) {*/
/*             var nameAfter = input[index].val();*/
/*             ref[index].empty().text(nameAfter);*/
/*             customerin[index].val(nameAfter);*/
/*             input[index].remove();*/
/*         });*/
/* */
/*         var postData = {};*/
/*         $('.customer-in').each(function() {*/
/*           postData[$(this).attr('name')] = $(this).val();*/
/*         });*/
/* */
/*         $.ajax({*/
/*             url: "{{ url('shopping_customer') }}",*/
/*             type: 'POST',*/
/*             data: postData,*/
/*             dataType: 'json',*/
/*         }).done(function(data){*/
/*         }).fail(function(data){*/
/*             alert('更新に失敗しました。入力内容を確認してください。');*/
/*             $(ref).each(function(index) {*/
/*                 ref[index].empty().text(name[index]);*/
/*                 input[index].remove();*/
/*             });*/
/*         });*/
/* */
/*         $('#customer').prop("disabled", false);*/
/*         $('.mod-button').hide();*/
/*     });*/
/* */
/*     $('#customer-cancel').click(function() {*/
/* */
/*         $(ref).each(function(index) {*/
/*             ref[index].empty().text(name[index]);*/
/*             input[index].remove();*/
/*         });*/
/* */
/*         $('#customer').prop("disabled", false);*/
/*         $('.mod-button').hide();*/
/*     });*/
/*     {% endif %}*/
/* */
/* });*/
/* </script>*/
/* {% endblock javascript %}*/
/* */
/* {% block main %}*/
/*     <h1 class="page-heading">ご注文内容のご確認</h1>*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*                 <div class="flowline step3">*/
/*                 {% else %}*/
/*                 <div class="flowline step4">*/
/*                 {% endif %}*/
/*                     <ul class="clearfix">*/
/*                     <li><span class="flow_number">1</span><br>カートの商品</li>*/
/*                     {% if is_granted('ROLE_USER') %}*/
/*                         <li class="active"><span class="flow_number">2</span><br>ご注文内容確認</li>*/
/*                         <li><span class="flow_number">3</span><br>完了</li>*/
/*                     {% else %}*/
/*                         <li><span class="flow_number">2</span><br>お客様情報</li>*/
/*                         <li class="active"><span class="flow_number">3</span><br>ご注文内容確認</li>*/
/*                         <li><span class="flow_number">4</span><br>完了</li>*/
/*                     {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 {% for error in app.session.flashbag.get('eccube.front.request.error')  %}*/
/*                     <div class="message">*/
/*                         <p class="errormsg bg-danger">*/
/*                             <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>{{ error|trans|nl2br }}*/
/*                         </p>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/*         <form id="shopping-form" method="post" action="{{ url('shopping_confirm') }}">*/
/*             {{ form_widget(form._token) }}*/
/*             <div id="shopping_confirm" class="row">*/
/*                 <div id="confirm_main" class="col-sm-8">*/
/*                     <div class="cart_item table">*/
/*                         <div class="tbody">*/
/*                             {% for orderDetail in Order.orderDetails %}*/
/*                             <div class="item_box tr">*/
/*                                 <div class="td table">*/
/*                                     <div class="item_photo"><img src="{{ app.config.image_save_urlpath }}/{{ orderDetail.product.MainListImage|no_image_product }}" alt="{{ orderDetail.productName }}" /></div>*/
/*                                     <dl class="item_detail">*/
/*                                         <dt class="item_name text-default">{{ orderDetail.productName }}</dt>*/
/*                                         <dd class="item_pattern small">*/
/*                                             {% if orderDetail.productClass.classCategory1 %}*/
/*                                                 {{ orderDetail.productClass.classCategory1.className }}：{{ orderDetail.productClass.classCategory1 }}*/
/*                                             {% endif %}*/
/*                                             {% if orderDetail.productClass.classCategory2 %}*/
/*                                                 <br>{{ orderDetail.productClass.classCategory2.className }}：{{ orderDetail.productClass.classCategory2 }}*/
/*                                             {% endif %}*/
/*                                         </dd>*/
/*                                         <dd class="item_price">{{ orderDetail.priceIncTax|price }} × {{ orderDetail.quantity|number_format }}</dd>*/
/*                                         <dd class="item_subtotal">小計：{{ orderDetail.totalPrice|price }}</dd>*/
/*                                     </dl>*/
/*                                 </div>*/
/*                             </div><!--/item_box-->*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div><!--/cart_item-->*/
/*                     <p><a href="{{ url('cart') }}" class="btn btn-default btn-sm">数量を変更または削除する</a></p>*/
/*                     <h2 class="heading02">お客様情報</h2>*/
/*                     <div class="column is-edit">*/
/*                         <p class="address"><span class="customer-edit customer-name01">{{ Order.name01 }}</span> <span class="customer-edit customer-name02">{{ Order.name02 }}</span> 様<br>*/
/*                         〒<span class="customer-edit customer-zip01">{{ Order.zip01 }}</span>-<span class="customer-edit customer-zip02">{{ Order.zip02 }}</span> <span class="customer-edit customer-pref">{{ Order.pref }}</span><span class="customer-edit customer-addr01">{{ Order.addr01 }}</span><span class="customer-edit customer-addr02">{{ Order.addr02 }}</span><br>*/
/*                         <span class="customer-edit customer-tel01">{{ Order.tel01 }}</span>-<span class="customer-edit customer-tel02">{{ Order.tel02 }}</span>-<span class="customer-edit customer-tel03">{{ Order.tel03 }}</span></p>*/
/*                         {% if is_granted('ROLE_USER') == false %}*/
/*                         <div class="customer-edit customer-email">{{ Order.email }}</div>*/
/*                         <div class="customer-edit customer-company_name">{{ Order.companyName }}</div>*/
/*                         <div class="mod-button" style="display:none;">*/
/*                             <span id="customer-ok"><button type="button" class="btn btn-default btn-sm">OK</button></span>*/
/*                             <span id="customer-cancel"><button type="button" class="btn btn-default btn-sm">キャンセル</button></span>*/
/*                         </div>*/
/*                         <p class="btn_edit"><button type="button" id="customer" class="btn btn-default btn-sm">変更</button></p>*/
/*                         <input type="hidden" id="customer-name01" class="customer-in" name="customer_name01" value="{{ Order.name01 }}">*/
/*                         <input type="hidden" id="customer-name02" class="customer-in" name="customer_name02" value="{{ Order.name02 }}">*/
/*                         <input type="hidden" id="customer-zip01" class="customer-in" name="customer_zip01" value="{{ Order.zip01 }}">*/
/*                         <input type="hidden" id="customer-zip02" class="customer-in" name="customer_zip02" value="{{ Order.zip02 }}">*/
/*                         <input type="hidden" id="customer-pref" class="customer-in" name="customer_pref" value="{{ Order.pref }}">*/
/*                         <input type="hidden" id="customer-addr01" class="customer-in" name="customer_addr01" value="{{ Order.addr01 }}">*/
/*                         <input type="hidden" id="customer-addr02" class="customer-in" name="customer_addr02" value="{{ Order.addr02 }}">*/
/*                         <input type="hidden" id="customer-tel01" class="customer-in" name="customer_tel01" value="{{ Order.tel01 }}">*/
/*                         <input type="hidden" id="customer-tel02" class="customer-in" name="customer_tel02" value="{{ Order.tel02 }}">*/
/*                         <input type="hidden" id="customer-tel03" class="customer-in" name="customer_tel03" value="{{ Order.tel03 }}">*/
/*                         <input type="hidden" id="customer-email" class="customer-in" name="customer_email" value="{{ Order.email }}">*/
/*                         <input type="hidden" id="customer-company-name" class="customer-in" name="customer_company_name" value="{{ Order.companyName }}">*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                     <h2 class="heading02">配送情報</h2>*/
/*                     {% for shipping in Order.shippings %}*/
/*                         {% set idx = loop.index0 %}*/
/*                         <div class="column is-edit">*/
/*                             <h3>お届け先{% if Order.multiple %}({{ loop.index }}){% endif %}</h3>*/
/*                             <div class="cart_item table">*/
/*                                 <div class="tbody">*/
/*                                 {% for shipmentItem in shipping.shipmentItems %}*/
/*                                     <div class="item_box tr">*/
/*                                         <div class="td table">*/
/*                                             <div class="item_photo"><img src="{{ app.config.image_save_urlpath }}/{{ shipmentItem.product.MainListImage|no_image_product }}" alt="{{ shipmentItem.productName }}" /></div>*/
/*                                             <dl class="item_detail">*/
/*                                                 <dt class="item_name text-default">{{ shipmentItem.productName }}</dt>*/
/*                                                 <dd class="item_pattern small">*/
/*                                                     {% if shipmentItem.productClass.classCategory1 %}*/
/*                                                         {{ shipmentItem.productClass.classCategory1.className }}：{{ shipmentItem.productClass.classCategory1 }}*/
/*                                                     {% endif %}*/
/*                                                     {% if shipmentItem.productClass.classCategory2 %}*/
/*                                                         <br>{{ shipmentItem.productClass.classCategory2.className }}：{{ shipmentItem.productClass.classCategory2 }}*/
/*                                                     {% endif %}*/
/*                                                 </dd>*/
/*                                                 <dd class="item_price">{{ shipmentItem.priceIncTax|price }} × {{ shipmentItem.quantity|number_format }}</dd>*/
/*                                                 <dd class="item_subtotal">小計：{{ shipmentItem.totalPrice|price }}</dd>*/
/*                                             </dl>*/
/*                                         </div>*/
/*                                     </div><!--/item_box-->*/
/*                                 {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <p class="address">{{ shipping.name01 }} {{ shipping.name02 }} 様<br>*/
/*                             〒{{ shipping.zip01 }}-{{ shipping.zip02 }} {{ shipping.pref }}{{ shipping.addr01 }}{{ shipping.addr02 }}<br>*/
/*                             {{ shipping.tel01 }}-{{ shipping.tel02 }}-{{ shipping.tel03 }}</p>*/
/*                             <div class="form-inline form-group">*/
/*                                 <label>配送方法</label>*/
/*                                 {{ form_widget(form.shippings[idx].delivery, {'attr': {'class': 'delivery'}}) }}*/
/*                                 {{ form_errors(form.shippings[idx].delivery) }}*/
/*                             </div>*/
/* */
/*                             <div class="form-inline form-group">*/
/*                                 <label>お届け日</label>*/
/*                                 {{ form_widget(form.shippings[idx].shippingDeliveryDate) }}<br class="sp">*/
/*                                 <label>お届け時間</label>*/
/*                                 {{ form_widget(form.shippings[idx].deliveryTime) }}*/
/*                             </div>*/
/*                             {% if is_granted('ROLE_USER') %}*/
/*                             <p class="btn_edit"><a href="{{ url('shopping_shipping_change', {'id': shipping.id}) }}" class="btn btn-default btn-sm btn-shipping">変更</a></p>*/
/*                             {% else %}*/
/*                             <p class="btn_edit"><a href="{{ url('shopping_shipping_edit_change', {'id': shipping.id}) }}" class="btn btn-default btn-sm btn-shipping-edit">変更</a></p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         {% if loop.last == false%}<hr>{% endif %}*/
/*                     {% endfor %}*/
/*                     {% if BaseInfo.optionMultipleShipping %}*/
/*                         <hr>*/
/*                         <div><a href="{{ url('shopping_shipping_multiple_change') }}" class="btn btn-default btn-sm btn-shipping-multiple">お届け先を追加する</a></div>*/
/*                     {% endif %}*/
/* */
/*                     <h2 class="heading02">お支払方法</h2>*/
/*                     <div class="column">*/
/*                         <div class="form-group">*/
/*                             <ul class="payment_list">*/
/*                             {% for key, child in form.payment %}*/
/*                             <li>*/
/*                                 {{ form_widget(child, {'attr': {'class': 'payment'}}) }}*/
/*                                 {% if form.payment.vars.choices[key].data.payment_image is not null %}*/
/*                                 <img src="{{ app.config.image_save_urlpath }}/{{ form.payment.vars.choices[key].data.payment_image }}">*/
/*                                 {% endif %}*/
/*                             </li>*/
/*                             {% endfor %}*/
/*                             {{ form_errors(form.payment) }}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <h2 class="heading02">お問い合わせ欄</h2>*/
/*                     <div class="column">*/
/*                         {{ form_widget(form.message, {'attr': {'placeholder': 'お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)', 'rows': '6'}}) }}*/
/*                         {{ form_errors(form.message) }}*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/* */
/*                 <div id="confirm_side" class="col-sm-4">*/
/*                     <div class="total_box">*/
/*                         <dl>*/
/*                             <dt>小計</dt>*/
/*                             <dd class="text-primary">{{ Order.subtotal|price }}</dd>*/
/*                         </dl>*/
/*                         <dl>*/
/*                             <dt>手数料</dt>*/
/*                             <dd>{{ Order.charge|price }}</dd>*/
/*                         </dl>*/
/*                         <dl>*/
/*                             <dt>送料</dt>*/
/*                             <dd>{{ Order.deliveryFeeTotal|price }}</dd>*/
/*                         </dl>*/
/*                         <div class="total_amount">*/
/*                             <p class="total_price">合計 <strong class="text-primary">{{ Order.total|price }}<span class="small">税込</span></strong></p>*/
/*                             <p><button id="order-button" type="submit" class="btn btn-primary btn-block prevention-btn prevention-mask">注文する</button></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.row -->*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
