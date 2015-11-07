<?php

/* users.html.twig */
class __TwigTemplate_1e8bf4f396b1c3e185858c7a375a67bcc38cdb57cda696c3ddbd180a62da6819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "users.html.twig", 1);
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
            $context["user"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("users/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 9
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> ";
            // line 10
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_ACCOUNT");
            echo "</a>
        </div>
        <h1><i class=\"fa fa-fw fa-child\"></i> Users</h1>
    ";
        } else {
            // line 14
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 15
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            // line 16
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
            echo "</button>
        </div>
        <h1><i class=\"fa fa-fw fa-user\"></i> ";
            // line 18
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USER");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()));
            echo "</h1>
    ";
        }
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <div>
        ";
        // line 24
        $this->loadTemplate("partials/messages.html.twig", "users.html.twig", 24)->display($context);
        // line 25
        echo "
        ";
        // line 26
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 27
            echo "            ";
            $this->loadTemplate("partials/users-list.html.twig", "users.html.twig", 27)->display($context);
            // line 28
            echo "
            <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
                ";
            // line 30
            $this->loadTemplate("partials/blueprints-new.html.twig", "users.html.twig", 30)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "user/account_new"), "method"))));
            // line 31
            echo "            </div>
        ";
        } else {
            // line 33
            echo "            ";
            $this->loadTemplate("partials/users-details.html.twig", "users.html.twig", 33)->display($context);
            // line 34
            echo "        ";
        }
        // line 35
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  103 => 34,  100 => 33,  96 => 31,  94 => 30,  90 => 28,  87 => 27,  85 => 26,  82 => 25,  80 => 24,  77 => 23,  74 => 22,  65 => 18,  60 => 16,  54 => 15,  51 => 14,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/* {% set user = admin.data('users/' ~ admin.route) %}*/
/* {% endif %}*/
/* */
/* {% block titlebar %}*/
/*     {% if not admin.route %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="#modal" data-remodal-target="modal"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_ACCOUNT"|tu }}</a>*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-child"></i> Users</h1>*/
/*     {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-user"></i> {{ "PLUGIN_ADMIN.USER"|tu }}: {{ user.username|e }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div>*/
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route %}*/
/*             {%  include 'partials/users-list.html.twig' %}*/
/* */
/*             <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false">*/
/*                 {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('user/account_new') } %}*/
/*             </div>*/
/*         {% else %}*/
/*             {% include 'partials/users-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
