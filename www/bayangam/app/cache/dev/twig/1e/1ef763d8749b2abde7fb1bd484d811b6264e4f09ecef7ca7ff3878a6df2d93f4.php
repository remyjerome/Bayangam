<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_287c98e00bd0d15d565ee5f200eade9816a195cad1d149e992354d4f2fbabcbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_702f23f7a21a8321c82bb8a59a26df93c7ce35e093bbe9b90bf94f1efd8bb59a = $this->env->getExtension("native_profiler");
        $__internal_702f23f7a21a8321c82bb8a59a26df93c7ce35e093bbe9b90bf94f1efd8bb59a->enter($__internal_702f23f7a21a8321c82bb8a59a26df93c7ce35e093bbe9b90bf94f1efd8bb59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_702f23f7a21a8321c82bb8a59a26df93c7ce35e093bbe9b90bf94f1efd8bb59a->leave($__internal_702f23f7a21a8321c82bb8a59a26df93c7ce35e093bbe9b90bf94f1efd8bb59a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bdef56e9ac4f42f53416fb4e3d55d38d8f83a1f0a59b313fc882799bb6a83fb = $this->env->getExtension("native_profiler");
        $__internal_8bdef56e9ac4f42f53416fb4e3d55d38d8f83a1f0a59b313fc882799bb6a83fb->enter($__internal_8bdef56e9ac4f42f53416fb4e3d55d38d8f83a1f0a59b313fc882799bb6a83fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8bdef56e9ac4f42f53416fb4e3d55d38d8f83a1f0a59b313fc882799bb6a83fb->leave($__internal_8bdef56e9ac4f42f53416fb4e3d55d38d8f83a1f0a59b313fc882799bb6a83fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7f552e36f3fd07170594c47afe094b13510cd0fd4f0fbefd0b6c0970af2ff57 = $this->env->getExtension("native_profiler");
        $__internal_f7f552e36f3fd07170594c47afe094b13510cd0fd4f0fbefd0b6c0970af2ff57->enter($__internal_f7f552e36f3fd07170594c47afe094b13510cd0fd4f0fbefd0b6c0970af2ff57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f7f552e36f3fd07170594c47afe094b13510cd0fd4f0fbefd0b6c0970af2ff57->leave($__internal_f7f552e36f3fd07170594c47afe094b13510cd0fd4f0fbefd0b6c0970af2ff57_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9a8402ccedf20d32bb8387d7fccfcb27af48d5560503e6f2fa68980b784f218 = $this->env->getExtension("native_profiler");
        $__internal_e9a8402ccedf20d32bb8387d7fccfcb27af48d5560503e6f2fa68980b784f218->enter($__internal_e9a8402ccedf20d32bb8387d7fccfcb27af48d5560503e6f2fa68980b784f218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e9a8402ccedf20d32bb8387d7fccfcb27af48d5560503e6f2fa68980b784f218->leave($__internal_e9a8402ccedf20d32bb8387d7fccfcb27af48d5560503e6f2fa68980b784f218_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
