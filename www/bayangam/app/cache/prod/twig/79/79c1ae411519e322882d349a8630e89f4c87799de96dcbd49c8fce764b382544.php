<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_c3690e8b62263c3d851d493a803e669ca1e5c902822eb4a3d5fd3bd2c7608c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        $context["route"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "    ";
        $context["action"] = ((((isset($context["route"]) ? $context["route"] : null) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, (isset($context["route"]) ? $context["route"] : null))));
        // line 15
        echo "
    ";
        // line 16
        if ((((($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 18
(isset($context["route"]) ? $context["route"] : null)) &&         // line 19
(isset($context["action"]) ? $context["action"] : null)) && $this->getAttribute(        // line 20
(isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => (isset($context["route"]) ? $context["route"] : null)), "method")) && $this->getAttribute(        // line 21
(isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => (isset($context["action"]) ? $context["action"] : null), 1 => ((twig_in_filter((isset($context["action"]) ? $context["action"] : null), array(0 => "VIEW", 1 => "EDIT"))) ? ((isset($context["object"]) ? $context["object"] : null)) : (null))), "method"))) {
            // line 23
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => (isset($context["route"]) ? $context["route"] : null), 1 => (isset($context["object"]) ? $context["object"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 24
            $this->displayBlock('field', $context, $blocks);
            // line 25
            echo "</a>
    ";
        } else {
            // line 27
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"));
            // line 28
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type", array()));
            // line 29
            echo "
        ";
            // line 30
            if (((isset($context["isEditable"]) ? $context["isEditable"] : null) && (isset($context["xEditableType"]) ? $context["xEditableType"] : null))) {
                // line 31
                echo "            ";
                $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name", array()), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")));
                // line 32
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 33
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 36
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "</td>
";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
    }

    // line 32
    public function block_field_span_attributes($context, array $blocks = array())
    {
        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : null), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label", array()), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "translationDomain", array())), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  94 => 24,  89 => 39,  86 => 38,  80 => 36,  74 => 33,  69 => 32,  66 => 31,  64 => 30,  61 => 29,  58 => 28,  55 => 27,  51 => 25,  49 => 24,  45 => 23,  43 => 21,  42 => 20,  41 => 19,  40 => 18,  39 => 17,  38 => 16,  35 => 15,  32 => 14,  30 => 13,  24 => 12,  21 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* <td class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}" objectId="{{ admin.id(object) }}">*/
/*     {% set route = field_description.options.route.name|default(null) %}*/
/*     {% set action = route == 'show' ? 'VIEW' : route|upper %}*/
/* */
/*     {% if*/
/*         field_description.options.identifier is defined*/
/*         and route*/
/*         and action*/
/*         and admin.hasRoute(route)*/
/*         and admin.isGranted(action, action in ['VIEW', 'EDIT'] ? object : null)*/
/*     %}*/
/*         <a class="sonata-link-identifier" href="{{ admin.generateObjectUrl(route, object, field_description.options.route.parameters) }}">*/
/*             {%- block field %}{{ value }}{% endblock -%}*/
/*         </a>*/
/*     {% else %}*/
/*         {% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.isGranted('EDIT', object) %}*/
/*         {% set xEditableType = field_description.type|sonata_xeditable_type %}*/
/* */
/*         {% if isEditable and xEditableType %}*/
/*             {% set url = path('sonata_admin_set_object_field_value', { 'context': 'list', 'field': field_description.name, 'objectId': admin.id(object), 'code': admin.code(object) })  %}*/
/*             <span {% block field_span_attributes %}class="x-editable" data-type="{{ xEditableType }}" data-value="{{ value }}" data-title="{{ field_description.label|trans({}, field_description.translationDomain) }}" data-pk="{{ admin.id(object) }}" data-url="{{ url }}" {% endblock %}>*/
/*                 {{ block('field') }}*/
/*             </span>*/
/*         {% else %}*/
/*             {{ block('field') }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* </td>*/
/* */