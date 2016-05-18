<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_8db2a7d87a4f22bea602a04fc84286e88d18d87712c9997f81702a05c5c56495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_005f1b949061de830a663223159237f71f0086fe55221cd650bcb6222c46a13c = $this->env->getExtension("native_profiler");
        $__internal_005f1b949061de830a663223159237f71f0086fe55221cd650bcb6222c46a13c->enter($__internal_005f1b949061de830a663223159237f71f0086fe55221cd650bcb6222c46a13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_005f1b949061de830a663223159237f71f0086fe55221cd650bcb6222c46a13c->leave($__internal_005f1b949061de830a663223159237f71f0086fe55221cd650bcb6222c46a13c_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d37c22bf14f5f67735ec5a5291814d21559767ca13bee26a9b12a30eef443cad = $this->env->getExtension("native_profiler");
        $__internal_d37c22bf14f5f67735ec5a5291814d21559767ca13bee26a9b12a30eef443cad->enter($__internal_d37c22bf14f5f67735ec5a5291814d21559767ca13bee26a9b12a30eef443cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d37c22bf14f5f67735ec5a5291814d21559767ca13bee26a9b12a30eef443cad->leave($__internal_d37c22bf14f5f67735ec5a5291814d21559767ca13bee26a9b12a30eef443cad_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
