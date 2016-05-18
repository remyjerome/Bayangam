<?php

/* wpAssociationBundle:Contact:contact.html.twig */
class __TwigTemplate_a5d9abbb1480d929840bde5f9f56a61e063c9fb4f6f07a4b90deca02bad344ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Contact:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c56cb74d8f5c981c783407c922613aaac8f13e9719fe68724942d1a08fdd6d3b = $this->env->getExtension("native_profiler");
        $__internal_c56cb74d8f5c981c783407c922613aaac8f13e9719fe68724942d1a08fdd6d3b->enter($__internal_c56cb74d8f5c981c783407c922613aaac8f13e9719fe68724942d1a08fdd6d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wpAssociationBundle:Contact:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56cb74d8f5c981c783407c922613aaac8f13e9719fe68724942d1a08fdd6d3b->leave($__internal_c56cb74d8f5c981c783407c922613aaac8f13e9719fe68724942d1a08fdd6d3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bee80103d68262ce5b9e801b9f71708857b21927b35300076bac8f5c3b96c2c6 = $this->env->getExtension("native_profiler");
        $__internal_bee80103d68262ce5b9e801b9f71708857b21927b35300076bac8f5c3b96c2c6->enter($__internal_bee80103d68262ce5b9e801b9f71708857b21927b35300076bac8f5c3b96c2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Contact
";
        
        $__internal_bee80103d68262ce5b9e801b9f71708857b21927b35300076bac8f5c3b96c2c6->leave($__internal_bee80103d68262ce5b9e801b9f71708857b21927b35300076bac8f5c3b96c2c6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_da7c0bf81392417f9c59511a4ccb8a7c20f24bfade451a3b32e600431216a44b = $this->env->getExtension("native_profiler");
        $__internal_da7c0bf81392417f9c59511a4ccb8a7c20f24bfade451a3b32e600431216a44b->enter($__internal_da7c0bf81392417f9c59511a4ccb8a7c20f24bfade451a3b32e600431216a44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"bloc l-bloc bgc-white\" id=\"bloc-8\">
\t<div class=\"container bloc-md\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2 class=\"mg-sm\">
\t\t\t\t\t<strong>Nous contacter</strong>
\t\t\t\t</h2>
\t\t\t\t<div class=\"divider-h\">
\t\t\t\t\t<span class=\"divider\"></span>
\t\t\t\t</div>
\t\t\t\t<form id=\"form_1\" novalidate>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\tNom
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input id=\"name\" class=\"form-control\" required />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input id=\"email\" class=\"form-control\" type=\"email\" required />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\tMessage
\t\t\t\t\t\t</label><textarea id=\"message\" class=\"form-control\" rows=\"4\" cols=\"50\" required></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"bloc-button btn btn-lg btn-wire wire-btn-dark-cerulean pull-left\" type=\"submit\">
\t\t\t\t\t\tEnvoyer
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_da7c0bf81392417f9c59511a4ccb8a7c20f24bfade451a3b32e600431216a44b->leave($__internal_da7c0bf81392417f9c59511a4ccb8a7c20f24bfade451a3b32e600431216a44b_prof);

    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Contact*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="bloc l-bloc bgc-white" id="bloc-8">*/
/* 	<div class="container bloc-md">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-12">*/
/* 				<h2 class="mg-sm">*/
/* 					<strong>Nous contacter</strong>*/
/* 				</h2>*/
/* 				<div class="divider-h">*/
/* 					<span class="divider"></span>*/
/* 				</div>*/
/* 				<form id="form_1" novalidate>*/
/* 					<div class="form-group">*/
/* 						<label>*/
/* 							Nom*/
/* 						</label>*/
/* 						<input id="name" class="form-control" required />*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label>*/
/* 							Email*/
/* 						</label>*/
/* 						<input id="email" class="form-control" type="email" required />*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label>*/
/* 							Message*/
/* 						</label><textarea id="message" class="form-control" rows="4" cols="50" required></textarea>*/
/* 					</div>*/
/* 					<button class="bloc-button btn btn-lg btn-wire wire-btn-dark-cerulean pull-left" type="submit">*/
/* 						Envoyer*/
/* 					</button>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
