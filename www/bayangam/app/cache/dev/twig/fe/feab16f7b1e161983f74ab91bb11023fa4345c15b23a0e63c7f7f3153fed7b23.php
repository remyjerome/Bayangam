<?php

/* wpUserBundle::layout.html.twig */
class __TwigTemplate_40fb523614c2d447bc2847d4ef650867991e01c67998b280983ec42f9545cd7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "wpUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b36b573111899b123c60c4861b3ca4def13ef84cd0ebcc17ef628e31e1124c3a = $this->env->getExtension("native_profiler");
        $__internal_b36b573111899b123c60c4861b3ca4def13ef84cd0ebcc17ef628e31e1124c3a->enter($__internal_b36b573111899b123c60c4861b3ca4def13ef84cd0ebcc17ef628e31e1124c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wpUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b36b573111899b123c60c4861b3ca4def13ef84cd0ebcc17ef628e31e1124c3a->leave($__internal_b36b573111899b123c60c4861b3ca4def13ef84cd0ebcc17ef628e31e1124c3a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_901434a6c3d42407dd06003cb8d3aaee8705eb58072b93d8af8c6d6c1987a85a = $this->env->getExtension("native_profiler");
        $__internal_901434a6c3d42407dd06003cb8d3aaee8705eb58072b93d8af8c6d6c1987a85a->enter($__internal_901434a6c3d42407dd06003cb8d3aaee8705eb58072b93d8af8c6d6c1987a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_901434a6c3d42407dd06003cb8d3aaee8705eb58072b93d8af8c6d6c1987a85a->leave($__internal_901434a6c3d42407dd06003cb8d3aaee8705eb58072b93d8af8c6d6c1987a85a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bc2861ca4eb0e5bc8ecf5d106c8aaa5b41de04b6706240bd8b5821f2335e01d = $this->env->getExtension("native_profiler");
        $__internal_0bc2861ca4eb0e5bc8ecf5d106c8aaa5b41de04b6706240bd8b5821f2335e01d->enter($__internal_0bc2861ca4eb0e5bc8ecf5d106c8aaa5b41de04b6706240bd8b5821f2335e01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<h2>Login</h2>
  <div>
            ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 16
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 18
        echo "  </div>

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        <div>
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "        </div>
";
        
        $__internal_0bc2861ca4eb0e5bc8ecf5d106c8aaa5b41de04b6706240bd8b5821f2335e01d->leave($__internal_0bc2861ca4eb0e5bc8ecf5d106c8aaa5b41de04b6706240bd8b5821f2335e01d_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a63abf3258a9bc17f0529f0e91cb06e277f5471e614144fd142a1ba76108a637 = $this->env->getExtension("native_profiler");
        $__internal_a63abf3258a9bc17f0529f0e91cb06e277f5471e614144fd142a1ba76108a637->enter($__internal_a63abf3258a9bc17f0529f0e91cb06e277f5471e614144fd142a1ba76108a637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "            ";
        
        $__internal_a63abf3258a9bc17f0529f0e91cb06e277f5471e614144fd142a1ba76108a637->leave($__internal_a63abf3258a9bc17f0529f0e91cb06e277f5471e614144fd142a1ba76108a637_prof);

    }

    public function getTemplateName()
    {
        return "wpUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 30,  130 => 29,  122 => 31,  120 => 29,  116 => 27,  110 => 26,  101 => 23,  96 => 22,  91 => 21,  87 => 20,  83 => 18,  75 => 16,  69 => 13,  65 => 12,  60 => 11,  58 => 10,  54 => 8,  48 => 7,  36 => 4,  11 => 2,);
    }
}
/* {# src/wp/AssociationBundle/Resources/views/Stream/index.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Login{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	<h2>Login</h2>*/
/*   <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*   </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* {% endblock %}*/
/* */
