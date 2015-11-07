<?php

/* partials/users-details.html.twig */
class __TwigTemplate_acd59ebe44eaf248119706b4dae055c48e8073469de9ea0120699a2156b90687 extends Twig_Template
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
        // line 1
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "exists", array())) {
            // line 2
            echo "<div class=\"user-details\">
    <img src=\"http://www.gravatar.com/avatar/";
            // line 3
            echo $this->env->getExtension('GravTwigExtension')->md5Filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()));
            echo "?s=128\" />
    <p class=\"gravatar\">";
            // line 4
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVATAR_BY");
            echo " <a href=\"http://gravatar.com\" target=\"_blank\">gravatar.com</a></p>
    <h2>";
            // line 5
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "fullname", array());
            echo "</h2>
    ";
            // line 6
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array())) {
                echo "<h5>";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array());
                echo "</h5>";
            }
            // line 7
            echo "</div>
";
        } else {
            // line 9
            echo "<h1>";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE_NEW_USER");
            echo "</h1>
";
        }
        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("partials/blueprints.html.twig", "partials/users-details.html.twig", 12)->display(array_merge($context, array("data" => (isset($context["user"]) ? $context["user"] : null), "blueprints" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "blueprints", array()))));
        // line 13
        echo "
";
        // line 14
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "exists", array()) && ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "username", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array())))) {
            // line 15
            echo "<div class=\"button-bar danger\">
    <span class=\"danger-zone\"></span>
    <a class=\"button\" href=\"#\"><i class=\"fa fa-fw fa-warning\"></i>";
            // line 17
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_USER");
            echo "</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/users-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  62 => 15,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  46 => 9,  42 => 7,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if user.exists %}*/
/* <div class="user-details">*/
/*     <img src="http://www.gravatar.com/avatar/{{ user.email|md5 }}?s=128" />*/
/*     <p class="gravatar">{{ "PLUGIN_ADMIN.AVATAR_BY"|tu }} <a href="http://gravatar.com" target="_blank">gravatar.com</a></p>*/
/*     <h2>{{ user.fullname }}</h2>*/
/*     {% if user.title %}<h5>{{ user.title }}</h5>{% endif %}*/
/* </div>*/
/* {% else %}*/
/* <h1>{{ "PLUGIN_ADMIN.CREATE_NEW_USER"|tu }}</h1>*/
/* {% endif %}*/
/* */
/* {% include 'partials/blueprints.html.twig' with { data: user, blueprints: user.blueprints } %}*/
/* */
/* {% if user.exists and admin.user.username != user.username %}*/
/* <div class="button-bar danger">*/
/*     <span class="danger-zone"></span>*/
/*     <a class="button" href="#"><i class="fa fa-fw fa-warning"></i>{{ "PLUGIN_ADMIN.REMOVE_USER"|tu }}</a>*/
/* </div>*/
/* {% endif %}*/
/* */
