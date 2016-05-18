<?php

/* wpAssociationBundle:Ressources:blog-jonathan.html.twig */
class __TwigTemplate_6e2c118658ed7b5507009955e10c3f0530263460de154236b9189c5461de97ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Ressources:blog-jonathan.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Ressources
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<!-- bloc-19 -->
<div class=\"bloc l-bloc bgc-white tc-black\" id=\"bloc-19\">
\t<div class=\"container bloc-md\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-10 col-sm-12\">
\t\t\t\t<h2 class=\"mg-sm\">
\t\t\t\t\t<strong>Le voyage à travers le regar de Jonathan.</strong>
\t\t\t\t</h2>
\t\t\t\t<div class=\"divider-h\">
\t\t\t\t\t<span class=\"divider\"></span>
\t\t\t\t</div>
\t\t\t\t<h2 class=\"tc-dark-cerulean-2 mg-md\">
\t\t\t\t\t01/06/2011 : Jour du départ.
\t\t\t\t</h2>
\t\t\t\t<p class=\"mg-lg\">
\t\t\t\t\tIl est deux heures. Je vérifie pour une dernière fois mes affaires, en sachant pertinemment que j'oublie quelque chose, sans savoir quoi. Il reste quelques affaires dans ma chambre de maisel, que je n'ai pas pu transporter ni envoyer chez moi, je les descends alors avec moi au local du forum où je dois retrouver Sylvain.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- bloc-19 END -->
";
    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Ressources:blog-jonathan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Ressources*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <!-- bloc-19 -->*/
/* <div class="bloc l-bloc bgc-white tc-black" id="bloc-19">*/
/* 	<div class="container bloc-md">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-10 col-sm-12">*/
/* 				<h2 class="mg-sm">*/
/* 					<strong>Le voyage à travers le regar de Jonathan.</strong>*/
/* 				</h2>*/
/* 				<div class="divider-h">*/
/* 					<span class="divider"></span>*/
/* 				</div>*/
/* 				<h2 class="tc-dark-cerulean-2 mg-md">*/
/* 					01/06/2011 : Jour du départ.*/
/* 				</h2>*/
/* 				<p class="mg-lg">*/
/* 					Il est deux heures. Je vérifie pour une dernière fois mes affaires, en sachant pertinemment que j'oublie quelque chose, sans savoir quoi. Il reste quelques affaires dans ma chambre de maisel, que je n'ai pas pu transporter ni envoyer chez moi, je les descends alors avec moi au local du forum où je dois retrouver Sylvain.*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- bloc-19 END -->*/
/* {% endblock %}*/
/* */
