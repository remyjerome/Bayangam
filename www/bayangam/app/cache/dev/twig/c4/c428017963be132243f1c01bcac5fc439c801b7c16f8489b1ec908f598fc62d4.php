<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6d7caf997b74361e749f001f317a9dd78970286d075e722ad500bf429ad5849e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("wpUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "wpUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7050919fc1971fa118c1fad25203d3ab511d9e1c69238b4540376462efed0e5 = $this->env->getExtension("native_profiler");
        $__internal_e7050919fc1971fa118c1fad25203d3ab511d9e1c69238b4540376462efed0e5->enter($__internal_e7050919fc1971fa118c1fad25203d3ab511d9e1c69238b4540376462efed0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7050919fc1971fa118c1fad25203d3ab511d9e1c69238b4540376462efed0e5->leave($__internal_e7050919fc1971fa118c1fad25203d3ab511d9e1c69238b4540376462efed0e5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7927f146433a9eb4c8565b6534f188a681719af71deb635f15f62447b2611d12 = $this->env->getExtension("native_profiler");
        $__internal_7927f146433a9eb4c8565b6534f188a681719af71deb635f15f62447b2611d12->enter($__internal_7927f146433a9eb4c8565b6534f188a681719af71deb635f15f62447b2611d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form style=\"margin:5%\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"form-group\">
      <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
      <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <div class=\"form-group\">
      <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
      <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
      <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>
    <input class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>

";
        
        $__internal_7927f146433a9eb4c8565b6534f188a681719af71deb635f15f62447b2611d12->leave($__internal_7927f146433a9eb4c8565b6534f188a681719af71deb635f15f62447b2611d12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  78 => 22,  70 => 17,  64 => 14,  60 => 13,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "wpUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form style="margin:5%" action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     <div class="form-group">*/
/*       <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*       <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*       <input class="form-control" type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <input class="form-control" type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*       <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*     </div>*/
/*     <input class="btn btn-default" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
