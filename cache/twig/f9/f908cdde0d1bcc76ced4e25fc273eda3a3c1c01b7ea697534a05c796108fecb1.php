<?php

/* forms/fields/markdown/markdown.html.twig */
class __TwigTemplate_bd24ae9b34b37124b3225b8faf4ab21fae4679b4284d3bbc7556ae70b4933299 extends Twig_Template
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
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        echo "
<div class=\"form-field\">
    <div class=\"form-data form-markdown-wrapper cm-s-paper\">
        <textarea data-grav-mdeditor=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("markdown" => true)), "html_attr");
        echo "\" name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\" data-grav-urlpreview=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/media/";
        echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
        echo ".json\">";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
"), "html");
        echo "</textarea>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/markdown/markdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% set value = (value is null ? field.default : value) %}*/
/* */
/* <div class="form-field">*/
/*     <div class="form-data form-markdown-wrapper cm-s-paper">*/
/*         <textarea data-grav-mdeditor="{{ { 'markdown': true }|json_encode|e('html_attr') }}" name="{{ (scope ~ field.name)|fieldName }}" data-grav-urlpreview="{{ base_url }}/media/{{ admin.route|trim('/') }}.json">{{ value|join("\n")|e('html') }}</textarea>*/
/*     </div>*/
/* </div>*/
/* */
