<?php

/* wpAssociationBundle:Soutien:aide.html.twig */
class __TwigTemplate_57f2b7a755c72fa24b1a1dc1179f218d092ca6dba85c1bec37d74a3b7db1e8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Soutien:aide.html.twig", 1);
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
        echo "<!-- bloc-6 -->
<div class=\"bloc l-bloc bgc-white\" id=\"bloc-6\">
\t<div class=\"container bloc-md\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2 class=\"mg-sm\">
\t\t\t\t\t<strong>Vous pouvez nous aider !</strong>
\t\t\t\t</h2>
\t\t\t\t<div class=\"divider-h\">
\t\t\t\t\t<span class=\"divider\"></span>
\t\t\t\t</div>
\t\t\t\t<h3 class=\"mg-md\">
\t\t\t\t\tNous financer
\t\t\t\t</h3>
\t\t\t\t<p class=\"mg-lg\">
\t\t\t\t\tNous avons estimé le prix du voyage à 1500 euros par personne, soit 6000 euros au total. (billets d'avion, visas, frais de fonctionnement etc) Nous sommes donc à la recherche de financements, si vous pouvez nous aider, n'hésitez pas à nous contacter.
\t\t\t\t</p>
\t\t\t\t<h3 class=\"mg-md\">
\t\t\t\t\tNous fournir du matériel
\t\t\t\t</h3>
\t\t\t\t<p class=\"mg-lg\">
\t\t\t\t\tLa salle dans laquelle nous allons dispenser notre formation à Bayangam n'est pas équipée en matériel informatique.Nous sommes donc à la recherche de matériel sous forme de dons ou de prêts, si vous pouvez nous aider, n'hésitez pas à nous contacter.
\t\t\t\t</p>
\t\t\t\t<h3 class=\"mg-md\">
\t\t\t\t\tParticiper à notre soirée caritative
\t\t\t\t</h3>
\t\t\t\t<p class=\"mg-lg\">
\t\t\t\t\tNous organiserons une soirée caritative le Vendredi 17 Juin 2011 dans les locaux de Télécom ParisTech (Paris XIIIe) sur le thème de l'Afrique.Vous pouvez nous aider à faire de cette soirée une réussite; en y participant, si vous êtes artiste ou simplement volontaire, en nous aidant à l'organiser, en nous offrant des lots pour une tombola etc. Dans tous les cas n'hésitez pas à nous contacter.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- bloc-6 END -->
";
    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Soutien:aide.html.twig";
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
/* <!-- bloc-6 -->*/
/* <div class="bloc l-bloc bgc-white" id="bloc-6">*/
/* 	<div class="container bloc-md">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-12">*/
/* 				<h2 class="mg-sm">*/
/* 					<strong>Vous pouvez nous aider !</strong>*/
/* 				</h2>*/
/* 				<div class="divider-h">*/
/* 					<span class="divider"></span>*/
/* 				</div>*/
/* 				<h3 class="mg-md">*/
/* 					Nous financer*/
/* 				</h3>*/
/* 				<p class="mg-lg">*/
/* 					Nous avons estimé le prix du voyage à 1500 euros par personne, soit 6000 euros au total. (billets d'avion, visas, frais de fonctionnement etc) Nous sommes donc à la recherche de financements, si vous pouvez nous aider, n'hésitez pas à nous contacter.*/
/* 				</p>*/
/* 				<h3 class="mg-md">*/
/* 					Nous fournir du matériel*/
/* 				</h3>*/
/* 				<p class="mg-lg">*/
/* 					La salle dans laquelle nous allons dispenser notre formation à Bayangam n'est pas équipée en matériel informatique.Nous sommes donc à la recherche de matériel sous forme de dons ou de prêts, si vous pouvez nous aider, n'hésitez pas à nous contacter.*/
/* 				</p>*/
/* 				<h3 class="mg-md">*/
/* 					Participer à notre soirée caritative*/
/* 				</h3>*/
/* 				<p class="mg-lg">*/
/* 					Nous organiserons une soirée caritative le Vendredi 17 Juin 2011 dans les locaux de Télécom ParisTech (Paris XIIIe) sur le thème de l'Afrique.Vous pouvez nous aider à faire de cette soirée une réussite; en y participant, si vous êtes artiste ou simplement volontaire, en nous aidant à l'organiser, en nous offrant des lots pour une tombola etc. Dans tous les cas n'hésitez pas à nous contacter.*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- bloc-6 END -->*/
/* {% endblock %}*/
/* */
