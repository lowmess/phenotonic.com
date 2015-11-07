<?php

/* themes.html.twig */
class __TwigTemplate_d69bf8984d4ff485862ac45059c1ffae25e96a3205bd3ca54d31ede26d43bffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "themes.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 4
            $context["installing"] = (is_string($__internal_5075b5f17e46e76bdd842c2ec1a1b9e82235200275a5d1a375ac8a354ccbbfe1 = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) && is_string($__internal_f80f61b0919a18c1cbe57332e90e9a0f5a17a2cde400690bbeb8c0c8d26d9062 = "install") && ('' === $__internal_f80f61b0919a18c1cbe57332e90e9a0f5a17a2cde400690bbeb8c0c8d26d9062 || 0 === strpos($__internal_5075b5f17e46e76bdd842c2ec1a1b9e82235200275a5d1a375ac8a354ccbbfe1, $__internal_f80f61b0919a18c1cbe57332e90e9a0f5a17a2cde400690bbeb8c0c8d26d9062)));
            // line 5
            $context["installed"] = true;
            // line 8
            $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
            // line 9
            if ( !(isset($context["package"]) ? $context["package"] : null)) {
                // line 10
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 11
                $context["installed"] = false;
            }
            // line 14
            $context["theme"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
            // line 15
            $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array())));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_titlebar($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 21
            echo "        <div class=\"button-bar\">
        ";
            // line 22
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 23
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
        ";
            } else {
                // line 25
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
            <a class=\"button\" href=\"";
                // line 26
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes/install\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD");
                echo "</a>
            ";
                // line 27
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 28
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES");
                    echo "</button>
            ";
                }
                // line 30
                echo "        ";
            }
            // line 31
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            // line 32
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
            echo "</h1>
    ";
        } else {
            // line 34
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 35
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 36
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES");
                echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                // line 37
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
                echo "</button>
        </div>
        ";
            } else {
                // line 40
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 41
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES");
                echo "</a>
        </div>
        ";
            }
            // line 44
            echo "        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()));
            echo "</h1>
    ";
        }
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "
    <div class=\"gpm gpm-themes\">

        ";
        // line 52
        $this->loadTemplate("partials/messages.html.twig", "themes.html.twig", 52)->display($context);
        // line 53
        echo "
        ";
        // line 54
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 55
            echo "            ";
            $this->loadTemplate("partials/themes-list.html.twig", "themes.html.twig", 55)->display($context);
            // line 56
            echo "        ";
        } else {
            // line 57
            echo "            ";
            $this->loadTemplate("partials/themes-details.html.twig", "themes.html.twig", 57)->display($context);
            // line 58
            echo "        ";
        }
        // line 59
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "themes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  153 => 54,  150 => 53,  148 => 52,  143 => 49,  140 => 48,  130 => 44,  122 => 41,  119 => 40,  113 => 37,  107 => 36,  104 => 35,  101 => 34,  96 => 32,  93 => 31,  90 => 30,  84 => 28,  82 => 27,  76 => 26,  69 => 25,  61 => 23,  59 => 22,  56 => 21,  53 => 20,  50 => 19,  46 => 1,  43 => 15,  41 => 14,  38 => 11,  36 => 10,  34 => 9,  32 => 8,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/*     {% set installing = admin.route starts with 'install' %}*/
/*     {% set installed = true %}*/
/* */
/*     {# Try installed packages first, then remote #}*/
/*     {% set package = admin.themes(true)[admin.route] %}*/
/*     {% if (not package) %}*/
/*         {% set package = admin.themes(false)[admin.route] %}*/
/*         {% set installed = false %}*/
/*     {% endif %}*/
/* */
/*     {% set theme = package.toArray() %}*/
/*     {% set title = "PLUGIN_ADMIN.THEME"|tu ~ ": " ~ theme.name|e %}*/
/* */
/* {% endif %}*/
/* */
/* {% block titlebar %}*/
/*     {% if not admin.route or installing %}*/
/*         <div class="button-bar">*/
/*         {% if (installing) %}*/
/*             <a class="button" href="{{ base_url_relative }}/themes"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         {% else %}*/
/*             <a class="button" href="{{ base_url }}/"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="{{ base_url_relative }}/themes/install"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD"|tu }}</a>*/
/*             {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*                 <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEMES"|tu }}</h1>*/
/*     {% else %}*/
/*         {% if (installed) %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/themes"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_THEMES"|tu }}</a>*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/themes/install"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_THEMES"|tu }}</a>*/
/*         </div>*/
/*         {% endif %}*/
/*         <h1><i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEME"|tu }}: {{ theme.name|e }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="gpm gpm-themes">*/
/* */
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route or installing %}*/
/*             {%  include 'partials/themes-list.html.twig' %}*/
/*         {% else %}*/
/*             {% include 'partials/themes-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
