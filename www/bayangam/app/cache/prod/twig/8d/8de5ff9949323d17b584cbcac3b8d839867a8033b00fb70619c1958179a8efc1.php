<?php

/* wpAssociationBundle:Organisation:action.html.twig */
class __TwigTemplate_535619d94ccc2684ee0dbbc86fd92b423546535849b70df854f752a8f67d7aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Organisation:action.html.twig", 1);
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
        echo "<!-- bloc-5 -->
<div class=\"bloc l-bloc bgc-white\" id=\"bloc-5\">
\t<div class=\"container bloc-md\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2 class=\"mg-sm\">
\t\t\t\t\t<strong>Nous travaillons chaque jour pour mettre en place la mission :</strong>
\t\t\t\t</h2>
\t\t\t\t<div class=\"divider-h\">
\t\t\t\t\t<span class=\"divider\"></span>
\t\t\t\t</div>
\t\t\t\t<h3 class=\"mg-md\">
\t\t\t\t\tLa fête National Camerounaise à Télécom !
\t\t\t\t</h3>
\t\t\t\t<p class=\"mg-lg\">
\t\t\t\t\tLe 2O mai, à l'occasion de la fête nationale Camerounaise, nous avons investis le restaurant de Télécom Paristech de nos couleurs et proposé une boisson à base de bissap et des chips de plantain. Une découverte culinaire qui fut pour certains... originale.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- bloc-5 END -->
";
    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Organisation:action.html.twig";
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
/* <!-- bloc-5 -->*/
/* <div class="bloc l-bloc bgc-white" id="bloc-5">*/
/* 	<div class="container bloc-md">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-12">*/
/* 				<h2 class="mg-sm">*/
/* 					<strong>Nous travaillons chaque jour pour mettre en place la mission :</strong>*/
/* 				</h2>*/
/* 				<div class="divider-h">*/
/* 					<span class="divider"></span>*/
/* 				</div>*/
/* 				<h3 class="mg-md">*/
/* 					La fête National Camerounaise à Télécom !*/
/* 				</h3>*/
/* 				<p class="mg-lg">*/
/* 					Le 2O mai, à l'occasion de la fête nationale Camerounaise, nous avons investis le restaurant de Télécom Paristech de nos couleurs et proposé une boisson à base de bissap et des chips de plantain. Une découverte culinaire qui fut pour certains... originale.*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- bloc-5 END -->*/
/* {% endblock %}*/
/* */
