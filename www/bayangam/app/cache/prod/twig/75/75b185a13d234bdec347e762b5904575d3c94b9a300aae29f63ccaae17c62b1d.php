<?php

/* wpAssociationBundle:Organisation:but.html.twig */
class __TwigTemplate_0d73327d2276e089bba7dd773a097ea3e00d756171586d886ce0a331c3651a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Organisation:but.html.twig", 1);
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
        echo "<!-- bloc-4 -->
<div class=\"bloc l-bloc bgc-white\" id=\"bloc-4\">
\t<div class=\"container bloc-md\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2 class=\"mg-sm\">
\t\t\t\t\t<strong>Le Projet Humanitaire</strong>
\t\t\t\t</h2>
\t\t\t\t<div class=\"divider-h\">
\t\t\t\t\t<span class=\"divider\"></span>
\t\t\t\t</div>
\t\t\t\t<h3 class=\"mg-md\">
\t\t\t\t\tNaissance
\t\t\t\t</h3>
\t\t\t\t<p class=\"mg-lg\">
\t\t\t\t\tTous quatre étudiants en première année à Télécom ParisTech, nous avons à réaliser un stage de formation humaine. Nous y voyons là l'opportunité, peut être la dernière si l'on considère une carrière d'ingénieur classique, de réaliser une mission humanitaire d'envergure internationale, et par là même un de nos rêves d'hommes.Attirés, chacun pour nos propres raisons par l'Afrique, nous nous sommes mis en quête d'un moyen de mettre à profit nos modestes connaissances. Cela nous a ammené à rencontrer M. Mephu, chercheur en informatique, et originaire du village camerounais de Bayangam, qui nous a proposé de partir initier les jeunes de ce village à la bureautique.
\t\t\t\t</p>
\t\t\t\t<h3 class=\"mg-md\">
\t\t\t\t\tDéroulement
\t\t\t\t</h3>
\t\t\t\t<p class=\"mg-lg\">
\t\t\t\t\tNous serons à Bayangam logés à la chefferie et nous pourrons dispenser nos cours dans un local mis à notre disposition par M. Honoré MELI, curé de Bayangam. Ce dispensaire ne comporte cependant pas pour l'instant de matériel informatique; nous profitons donc de la période qu'il nous reste avant le départ pour récolter du matériel.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- bloc-4 END -->
";
    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Organisation:but.html.twig";
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
/* <!-- bloc-4 -->*/
/* <div class="bloc l-bloc bgc-white" id="bloc-4">*/
/* 	<div class="container bloc-md">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-12">*/
/* 				<h2 class="mg-sm">*/
/* 					<strong>Le Projet Humanitaire</strong>*/
/* 				</h2>*/
/* 				<div class="divider-h">*/
/* 					<span class="divider"></span>*/
/* 				</div>*/
/* 				<h3 class="mg-md">*/
/* 					Naissance*/
/* 				</h3>*/
/* 				<p class="mg-lg">*/
/* 					Tous quatre étudiants en première année à Télécom ParisTech, nous avons à réaliser un stage de formation humaine. Nous y voyons là l'opportunité, peut être la dernière si l'on considère une carrière d'ingénieur classique, de réaliser une mission humanitaire d'envergure internationale, et par là même un de nos rêves d'hommes.Attirés, chacun pour nos propres raisons par l'Afrique, nous nous sommes mis en quête d'un moyen de mettre à profit nos modestes connaissances. Cela nous a ammené à rencontrer M. Mephu, chercheur en informatique, et originaire du village camerounais de Bayangam, qui nous a proposé de partir initier les jeunes de ce village à la bureautique.*/
/* 				</p>*/
/* 				<h3 class="mg-md">*/
/* 					Déroulement*/
/* 				</h3>*/
/* 				<p class="mg-lg">*/
/* 					Nous serons à Bayangam logés à la chefferie et nous pourrons dispenser nos cours dans un local mis à notre disposition par M. Honoré MELI, curé de Bayangam. Ce dispensaire ne comporte cependant pas pour l'instant de matériel informatique; nous profitons donc de la période qu'il nous reste avant le départ pour récolter du matériel.*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- bloc-4 END -->*/
/* {% endblock %}*/
/* */
