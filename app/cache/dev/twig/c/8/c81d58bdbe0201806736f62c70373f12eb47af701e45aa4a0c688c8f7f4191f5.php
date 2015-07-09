<?php

/* ::base.html.twig */
class __TwigTemplate_c81d58bdbe0201806736f62c70373f12eb47af701e45aa4a0c688c8f7f4191f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19ca48e2354bec2405c8eebf3ac6267f40c806074cbcc45eafd31a0550408313 = $this->env->getExtension("native_profiler");
        $__internal_19ca48e2354bec2405c8eebf3ac6267f40c806074cbcc45eafd31a0550408313->enter($__internal_19ca48e2354bec2405c8eebf3ac6267f40c806074cbcc45eafd31a0550408313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        if ($this->renderBlock("title", $context, $blocks)) {
            // line 7
            $this->displayBlock("title", $context, $blocks);
            echo "| Get Quotation faster!";
        } else {
            // line 9
            echo "Quottum App!";
        }
        // line 11
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://assets.roomorama-cache.com/favicon.ico"), "html", null, true);
        echo "\" />

</head>
<body>
<div class=\"topbar\">
    <div class=\"header\">
        <a href=\"\"><div class=\"logo\"></div><div class=\"logo-small\"></div></a>
        <div class=\"search-input\"><input type=\"text\" id=\"search\" placeholder=\"\" ></div>
        <!--\t<a onclick=\"showNotification(\\'\\', \\'1\\')\"><div class=\"menu_btn\" id=\"notifications_btn\" title=\"\"><img src=\"assets/assets/images/notification.png\" id=\"notifications_img\" /></div></a>
        -->   <a href=\"index.php?do=quoteusa\" id=\"messages_url\"><div class=\"menu_btn\" title=\"Sending Messages\"><img src=\"../assets/assets/images/message.png\" /></div></a>
        <!--<a href=\"../account.php\"><div class=\"menu_btn\" title=\"Edit Account\"><img src=\"../assets/assets/images/timeline.png\" /></div></a>
     -->  <a href=\"index.php?do=users&amp;action=edit&amp;id=5\"><div class=\"menu_btn\" title=\"Account\"><img src=\"../assets/assets/images/icons/edit_h.png\"></div></a>
        <a href=\"logout.php\"><div class=\"menu_btn\" title=\"Sign Out\"><img src=\"../assets/assets/images/logout.png\"></div></a>

        <!--    <a href=\"../admin/index.php\"><div class=\"menu_btn\" title=\"Admin\"><img src=\"../assets/assets/images/icons/private_post_h.png\"></div></a>
    -->            <div class=\"notification-container\">
            <div class=\"notification-content\">

                <div id=\"notifications-content\"></div>
                <div class=\"notification-row\"><div class=\"notification-padding\"><a href=\"\"> </a></div></div>
            </div>
        </div>
    </div>
    <div class=\"search-container\"></div>
</div>
<br><br>
";
        // line 52
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 53
            echo "    <div class=\"alert alert-success\">
        ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 55
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    </div>
";
        }
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</body>
</html>
";
        
        $__internal_19ca48e2354bec2405c8eebf3ac6267f40c806074cbcc45eafd31a0550408313->leave($__internal_19ca48e2354bec2405c8eebf3ac6267f40c806074cbcc45eafd31a0550408313_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67229aca49494879e827d07bf3f6e3fa303497661b5c27751dd2fe96e4d8fa90 = $this->env->getExtension("native_profiler");
        $__internal_67229aca49494879e827d07bf3f6e3fa303497661b5c27751dd2fe96e4d8fa90->enter($__internal_67229aca49494879e827d07bf3f6e3fa303497661b5c27751dd2fe96e4d8fa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" />
        ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7ceb511_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ceb511_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/built/layout_style_1.css");
            // line 21
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />

        ";
        } else {
            // asset "7ceb511"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ceb511") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/built/layout.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />

        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "
    ";
        
        $__internal_67229aca49494879e827d07bf3f6e3fa303497661b5c27751dd2fe96e4d8fa90->leave($__internal_67229aca49494879e827d07bf3f6e3fa303497661b5c27751dd2fe96e4d8fa90_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_d201d5cf9a6635eff7a9a8e73c1fa115134f84828a0cbf5c1171bb6fec9a16d8 = $this->env->getExtension("native_profiler");
        $__internal_d201d5cf9a6635eff7a9a8e73c1fa115134f84828a0cbf5c1171bb6fec9a16d8->enter($__internal_d201d5cf9a6635eff7a9a8e73c1fa115134f84828a0cbf5c1171bb6fec9a16d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d201d5cf9a6635eff7a9a8e73c1fa115134f84828a0cbf5c1171bb6fec9a16d8->leave($__internal_d201d5cf9a6635eff7a9a8e73c1fa115134f84828a0cbf5c1171bb6fec9a16d8_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7a18de8f8dd03072df1836fa6321f834c811c4c95c723516acb879156e64b7f = $this->env->getExtension("native_profiler");
        $__internal_e7a18de8f8dd03072df1836fa6321f834c811c4c95c723516acb879156e64b7f->enter($__internal_e7a18de8f8dd03072df1836fa6321f834c811c4c95c723516acb879156e64b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>

";
        
        $__internal_e7a18de8f8dd03072df1836fa6321f834c811c4c95c723516acb879156e64b7f->leave($__internal_e7a18de8f8dd03072df1836fa6321f834c811c4c95c723516acb879156e64b7f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  161 => 61,  150 => 60,  142 => 24,  126 => 21,  122 => 14,  119 => 13,  113 => 12,  104 => 65,  102 => 61,  100 => 60,  97 => 59,  93 => 57,  84 => 55,  80 => 54,  77 => 53,  75 => 52,  45 => 26,  43 => 12,  40 => 11,  37 => 9,  33 => 7,  31 => 6,  25 => 1,);
    }
}
