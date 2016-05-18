<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_3c2fe87e296fa4cd845645b00da8489a01b4b244349378954e21fca56e7214dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d50ad46c86519ffe2135d819df390475621b38833f162ff88ff28e200bc9f487 = $this->env->getExtension("native_profiler");
        $__internal_d50ad46c86519ffe2135d819df390475621b38833f162ff88ff28e200bc9f487->enter($__internal_d50ad46c86519ffe2135d819df390475621b38833f162ff88ff28e200bc9f487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_d50ad46c86519ffe2135d819df390475621b38833f162ff88ff28e200bc9f487->leave($__internal_d50ad46c86519ffe2135d819df390475621b38833f162ff88ff28e200bc9f487_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_e811c3f127b87857b68388f20365008b00409fef3891ed1900606cf2d182f8ec = $this->env->getExtension("native_profiler");
        $__internal_e811c3f127b87857b68388f20365008b00409fef3891ed1900606cf2d182f8ec->enter($__internal_e811c3f127b87857b68388f20365008b00409fef3891ed1900606cf2d182f8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_e811c3f127b87857b68388f20365008b00409fef3891ed1900606cf2d182f8ec->leave($__internal_e811c3f127b87857b68388f20365008b00409fef3891ed1900606cf2d182f8ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
