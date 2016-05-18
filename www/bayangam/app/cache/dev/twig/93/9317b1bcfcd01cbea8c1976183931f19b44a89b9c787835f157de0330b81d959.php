<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20bde8f669f1372f466e1d0cb2dc2b555431dc7124708020914834727e56dfc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed55547d9265048a4438c3d6f1e5f9b75980fcef9b0f085ca7dbe22d3a6ecd42 = $this->env->getExtension("native_profiler");
        $__internal_ed55547d9265048a4438c3d6f1e5f9b75980fcef9b0f085ca7dbe22d3a6ecd42->enter($__internal_ed55547d9265048a4438c3d6f1e5f9b75980fcef9b0f085ca7dbe22d3a6ecd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed55547d9265048a4438c3d6f1e5f9b75980fcef9b0f085ca7dbe22d3a6ecd42->leave($__internal_ed55547d9265048a4438c3d6f1e5f9b75980fcef9b0f085ca7dbe22d3a6ecd42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c0de5a5317702ef14d7fcbc52ba20a6130c2c002815cbc799e358b6c98c4f263 = $this->env->getExtension("native_profiler");
        $__internal_c0de5a5317702ef14d7fcbc52ba20a6130c2c002815cbc799e358b6c98c4f263->enter($__internal_c0de5a5317702ef14d7fcbc52ba20a6130c2c002815cbc799e358b6c98c4f263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c0de5a5317702ef14d7fcbc52ba20a6130c2c002815cbc799e358b6c98c4f263->leave($__internal_c0de5a5317702ef14d7fcbc52ba20a6130c2c002815cbc799e358b6c98c4f263_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbd0cba6484b22a48a0975a093d02712243d570c2c2befc1f4840e40902028b0 = $this->env->getExtension("native_profiler");
        $__internal_fbd0cba6484b22a48a0975a093d02712243d570c2c2befc1f4840e40902028b0->enter($__internal_fbd0cba6484b22a48a0975a093d02712243d570c2c2befc1f4840e40902028b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fbd0cba6484b22a48a0975a093d02712243d570c2c2befc1f4840e40902028b0->leave($__internal_fbd0cba6484b22a48a0975a093d02712243d570c2c2befc1f4840e40902028b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1a40e19fc50a1d9331e1547f157b154cbeedb98ed8cb34047a54132f7cf3c9c = $this->env->getExtension("native_profiler");
        $__internal_e1a40e19fc50a1d9331e1547f157b154cbeedb98ed8cb34047a54132f7cf3c9c->enter($__internal_e1a40e19fc50a1d9331e1547f157b154cbeedb98ed8cb34047a54132f7cf3c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1a40e19fc50a1d9331e1547f157b154cbeedb98ed8cb34047a54132f7cf3c9c->leave($__internal_e1a40e19fc50a1d9331e1547f157b154cbeedb98ed8cb34047a54132f7cf3c9c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
