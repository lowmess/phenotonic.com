<?php

/* plugins.html.twig */
class __TwigTemplate_442fe22a794065883f6e80513f0d9c98a3fc66d49e60e777f4e8c78cd263ff77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins.html.twig", 1);
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
            $context["installing"] = (is_string($__internal_213955cfbbbabf9b512411519eeb2713c1614eeec2019625c8aafe5f0b2fccae = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) && is_string($__internal_5f07ac46e48b5101ee9f8f0394342c5557b9e98bb9aa1f4665c653ddefaf040d = "install") && ('' === $__internal_5f07ac46e48b5101ee9f8f0394342c5557b9e98bb9aa1f4665c653ddefaf040d || 0 === strpos($__internal_213955cfbbbabf9b512411519eeb2713c1614eeec2019625c8aafe5f0b2fccae, $__internal_5f07ac46e48b5101ee9f8f0394342c5557b9e98bb9aa1f4665c653ddefaf040d)));
            // line 5
            $context["installed"] = true;
            // line 8
            $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
            // line 9
            if ( !(isset($context["package"]) ? $context["package"] : null)) {
                // line 10
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 11
                $context["installed"] = false;
            }
            // line 14
            $context["plugin"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
            // line 15
            $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array())));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_titlebar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 20
            echo "        <div class=\"button-bar\">
        ";
            // line 21
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 22
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
        ";
            } else {
                // line 24
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
            <a class=\"button\" href=\"";
                // line 25
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins/install\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD");
                echo "</a>
            ";
                // line 26
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 27
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES");
                    echo "</button>
            ";
                }
                // line 29
                echo "        ";
            }
            // line 30
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 31
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
            echo "</h1>
    ";
        } else {
            // line 33
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 34
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 35
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS");
                echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                // line 36
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
                echo "</button>
        </div>
        ";
            } else {
                // line 39
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 40
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS");
                echo "</a>
        </div>
        ";
            }
            // line 43
            echo "
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 44
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
            echo "</h1>

    ";
        }
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "
    <div class=\"gpm gpm-plugins\">

        ";
        // line 53
        $this->loadTemplate("partials/messages.html.twig", "plugins.html.twig", 53)->display($context);
        // line 54
        echo "
        ";
        // line 55
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 56
            echo "            ";
            $this->loadTemplate("partials/plugins-list.html.twig", "plugins.html.twig", 56)->display($context);
            // line 57
            echo "        ";
        } else {
            // line 58
            echo "            ";
            $this->loadTemplate("partials/plugins-details.html.twig", "plugins.html.twig", 58)->display($context);
            // line 59
            echo "        ";
        }
        // line 60
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  167 => 59,  164 => 58,  161 => 57,  158 => 56,  156 => 55,  153 => 54,  151 => 53,  146 => 50,  143 => 49,  133 => 44,  130 => 43,  122 => 40,  119 => 39,  113 => 36,  107 => 35,  104 => 34,  101 => 33,  96 => 31,  93 => 30,  90 => 29,  84 => 27,  82 => 26,  76 => 25,  69 => 24,  61 => 22,  59 => 21,  56 => 20,  53 => 19,  50 => 18,  46 => 1,  43 => 15,  41 => 14,  38 => 11,  36 => 10,  34 => 9,  32 => 8,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/*     {% set installing = admin.route starts with 'install' %}*/
/*     {% set installed = true %}*/
/* */
/*     {# Try installed packages first, then remote #}*/
/*     {% set package = admin.plugins(true)[admin.route] %}*/
/*     {% if (not package) %}*/
/*         {% set package = admin.plugins(false)[admin.route] %}*/
/*         {% set installed = false %}*/
/*     {% endif %}*/
/* */
/*     {% set plugin = package.toArray() %}*/
/*     {% set title = "PLUGIN_ADMIN.PLUGIN"|tu ~ ": " ~ plugin.name|e %}*/
/* {% endif %}*/
/* */
/* {% block titlebar %}*/
/*     {% if not admin.route or installing %}*/
/*         <div class="button-bar">*/
/*         {% if (installing) %}*/
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         {% else %}*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD"|tu }}</a>*/
/*             {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*                 <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGINS"|tu }}</h1>*/
/*     {% else %}*/
/*         {% if (installed) %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGIN"|tu }}: {{ plugin.name|e }}</h1>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="gpm gpm-plugins">*/
/* */
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route or installing %}*/
/*             {%  include 'partials/plugins-list.html.twig' %}*/
/*         {% else %}*/
/*             {% include 'partials/plugins-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
