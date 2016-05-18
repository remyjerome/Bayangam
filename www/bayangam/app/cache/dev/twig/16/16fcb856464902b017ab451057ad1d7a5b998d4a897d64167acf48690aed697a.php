<?php

/* wpAssociationBundle:Organisation:equipe.html.twig */
class __TwigTemplate_eb9566201d17770e054984dac1c6c87bdfa45db48a121749bf86226e0f01dac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Organisation:equipe.html.twig", 1);
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
        $__internal_711b22aabd48c7c8c3c366b8e288f1612368227844e82f79522135b584274601 = $this->env->getExtension("native_profiler");
        $__internal_711b22aabd48c7c8c3c366b8e288f1612368227844e82f79522135b584274601->enter($__internal_711b22aabd48c7c8c3c366b8e288f1612368227844e82f79522135b584274601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wpAssociationBundle:Organisation:equipe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711b22aabd48c7c8c3c366b8e288f1612368227844e82f79522135b584274601->leave($__internal_711b22aabd48c7c8c3c366b8e288f1612368227844e82f79522135b584274601_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c1b374ac12fb1273f2a2d9e07714b149f36338dc249d18dbb3a04ec1a5dc995 = $this->env->getExtension("native_profiler");
        $__internal_9c1b374ac12fb1273f2a2d9e07714b149f36338dc249d18dbb3a04ec1a5dc995->enter($__internal_9c1b374ac12fb1273f2a2d9e07714b149f36338dc249d18dbb3a04ec1a5dc995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Organisation
";
        
        $__internal_9c1b374ac12fb1273f2a2d9e07714b149f36338dc249d18dbb3a04ec1a5dc995->leave($__internal_9c1b374ac12fb1273f2a2d9e07714b149f36338dc249d18dbb3a04ec1a5dc995_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f4859fcbc9ad74207a6993aea36bb633b62b1fb37a84974f419f95e89daa493 = $this->env->getExtension("native_profiler");
        $__internal_2f4859fcbc9ad74207a6993aea36bb633b62b1fb37a84974f419f95e89daa493->enter($__internal_2f4859fcbc9ad74207a6993aea36bb633b62b1fb37a84974f419f95e89daa493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"bloc l-bloc bgc-white\" id=\"bloc-2\">
\t<div class=\"container bloc-md\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2 class=\"text-center mg-sm\">
\t\t\t\t\t<strong>Notre Équipe</strong>
\t\t\t\t</h2>
\t\t\t\t<p class=\"sub-heading text-center\">
\t\t\t\t\tN&rsquo;hésitez pas à nous contacter par email !
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row voffset-md\">
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<img class=\"img-circle center-block img-frame-rd mg-md\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ract.jpg"), "html", null, true);
        echo "\" width=\"130\" height=\"150\" />
\t\t\t\t<h3 class=\"text-center mg-sm\">
\t\t\t\t\tSylvain RACT
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\tCoordinateur
\t\t\t\t</p>
\t\t\t\t<h5 class=\"mg-md tc-dark-cerulean text-center\">
\t\t\t\t\t<span class=\"feather-icon icon-mail\"></span> <a href=\"mailto:bolbenes@telecom-paristech.fr\">bolbenes@telecom-paristech.fr</a>
\t\t\t\t</h5>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<img class=\"img-circle center-block img-frame-rd mg-md\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/mehyaoui.jpg"), "html", null, true);
        echo "\" width=\"130\" height=\"150\" />
\t\t\t\t<h3 class=\"text-center sm-shadow mg-sm\">
\t\t\t\t\tSelma MEYHAOUI
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\tResponsable du matériel
\t\t\t\t</p>
\t\t\t\t<h5 class=\"mg-md tc-dark-cerulean text-center\">
\t\t\t\t\t<span class=\"feather-icon icon-mail\"></span> <a href=\"mailto:montane@telecom-paristech.fr\">montane@telecom-paristech.fr</a>
\t\t\t\t</h5>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<img class=\"img-circle center-block img-frame-rd mg-md\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/montane.jpg"), "html", null, true);
        echo "\" width=\"130\" height=\"150\" />
\t\t\t\t<h3 class=\"text-center sm-shadow mg-sm\">
\t\t\t\t\tJonathan MONTANÉ
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\tTrésorière
\t\t\t\t</p>
\t\t\t\t<h5 class=\"mg-md tc-dark-cerulean text-center\">
\t\t\t\t\t<span class=\"feather-icon icon-mail\"></span> <a href=\"mailto:mehyaoui@telecom-paristech.fr\">mehyaoui@telecom-paristech.fr</a>
\t\t\t\t</h5>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<img class=\"img-circle center-block img-frame-rd mg-md\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bolbenes.jpg"), "html", null, true);
        echo "\" width=\"130\" height=\"150\" />
\t\t\t\t<h3 class=\"text-center sm-shadow mg-sm\">
\t\t\t\t\tGuillaume BOLBÈNES
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\tResponsable enseignement
\t\t\t\t</p>
\t\t\t\t<h5 class=\"mg-md tc-dark-cerulean text-center\">
\t\t\t\t\t<span class=\"feather-icon icon-mail\"></span> <a href=\"mailto:ract@telecom-paristech.fr\">ract@telecom-paristech.fr</a>
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- bloc-2 END -->

<!-- bloc-3 -->
<div class=\"bloc l-bloc bgc-white\" id=\"bloc-3\">
\t<div class=\"container bloc-md b-divider\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-8 col-sm-85 col-sm-8486 col-sm-84858487 col-sm-8485848684858486 col-sm-6\">
\t\t\t\t<img class=\"img-frame pull-right\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo_telecom.gif"), "html", null, true);
        echo "\" width=\"250\" height=\"250\" />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h2 class=\"mg-lg\">
\t\t\t\t\t<strong>Notre École</strong>
\t\t\t\t</h2>
\t\t\t\t<h3 class=\"mg-sm\">
\t\t\t\t\tTélécom ParisTech
\t\t\t\t</h3>
\t\t\t\t<p class=\"mg-lg\">
\t\t\t\t\tNous étudions tous en première année à Télécom ParisTech, la grande école des technologies de l'information et de la communication.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- bloc-3 END -->

";
        
        $__internal_2f4859fcbc9ad74207a6993aea36bb633b62b1fb37a84974f419f95e89daa493->leave($__internal_2f4859fcbc9ad74207a6993aea36bb633b62b1fb37a84974f419f95e89daa493_prof);

    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Organisation:equipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 79,  116 => 58,  101 => 46,  86 => 34,  71 => 22,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Organisation*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="bloc l-bloc bgc-white" id="bloc-2">*/
/* 	<div class="container bloc-md">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-12">*/
/* 				<h2 class="text-center mg-sm">*/
/* 					<strong>Notre Équipe</strong>*/
/* 				</h2>*/
/* 				<p class="sub-heading text-center">*/
/* 					N&rsquo;hésitez pas à nous contacter par email !*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row voffset-md">*/
/* 			<div class="col-sm-3">*/
/* 				<img class="img-circle center-block img-frame-rd mg-md" src="{{ asset('img/ract.jpg') }}" width="130" height="150" />*/
/* 				<h3 class="text-center mg-sm">*/
/* 					Sylvain RACT*/
/* 				</h3>*/
/* 				<p class="text-center">*/
/* 					Coordinateur*/
/* 				</p>*/
/* 				<h5 class="mg-md tc-dark-cerulean text-center">*/
/* 					<span class="feather-icon icon-mail"></span> <a href="mailto:bolbenes@telecom-paristech.fr">bolbenes@telecom-paristech.fr</a>*/
/* 				</h5>*/
/* 			</div>*/
/* 			<div class="col-sm-3">*/
/* 				<img class="img-circle center-block img-frame-rd mg-md" src="{{ asset('img/mehyaoui.jpg') }}" width="130" height="150" />*/
/* 				<h3 class="text-center sm-shadow mg-sm">*/
/* 					Selma MEYHAOUI*/
/* 				</h3>*/
/* 				<p class="text-center">*/
/* 					Responsable du matériel*/
/* 				</p>*/
/* 				<h5 class="mg-md tc-dark-cerulean text-center">*/
/* 					<span class="feather-icon icon-mail"></span> <a href="mailto:montane@telecom-paristech.fr">montane@telecom-paristech.fr</a>*/
/* 				</h5>*/
/* 			</div>*/
/* 			<div class="col-sm-3">*/
/* 				<img class="img-circle center-block img-frame-rd mg-md" src="{{ asset('img/montane.jpg') }}" width="130" height="150" />*/
/* 				<h3 class="text-center sm-shadow mg-sm">*/
/* 					Jonathan MONTANÉ*/
/* 				</h3>*/
/* 				<p class="text-center">*/
/* 					Trésorière*/
/* 				</p>*/
/* 				<h5 class="mg-md tc-dark-cerulean text-center">*/
/* 					<span class="feather-icon icon-mail"></span> <a href="mailto:mehyaoui@telecom-paristech.fr">mehyaoui@telecom-paristech.fr</a>*/
/* 				</h5>*/
/* 			</div>*/
/* 			<div class="col-sm-3">*/
/* 				<img class="img-circle center-block img-frame-rd mg-md" src="{{ asset('img/bolbenes.jpg') }}" width="130" height="150" />*/
/* 				<h3 class="text-center sm-shadow mg-sm">*/
/* 					Guillaume BOLBÈNES*/
/* 				</h3>*/
/* 				<p class="text-center">*/
/* 					Responsable enseignement*/
/* 				</p>*/
/* 				<h5 class="mg-md tc-dark-cerulean text-center">*/
/* 					<span class="feather-icon icon-mail"></span> <a href="mailto:ract@telecom-paristech.fr">ract@telecom-paristech.fr</a>*/
/* 				</h5>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- bloc-2 END -->*/
/* */
/* <!-- bloc-3 -->*/
/* <div class="bloc l-bloc bgc-white" id="bloc-3">*/
/* 	<div class="container bloc-md b-divider">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-8 col-sm-85 col-sm-8486 col-sm-84858487 col-sm-8485848684858486 col-sm-6">*/
/* 				<img class="img-frame pull-right" src="{{ asset('img/logo_telecom.gif') }}" width="250" height="250" />*/
/* 			</div>*/
/* 			<div class="col-sm-6">*/
/* 				<h2 class="mg-lg">*/
/* 					<strong>Notre École</strong>*/
/* 				</h2>*/
/* 				<h3 class="mg-sm">*/
/* 					Télécom ParisTech*/
/* 				</h3>*/
/* 				<p class="mg-lg">*/
/* 					Nous étudions tous en première année à Télécom ParisTech, la grande école des technologies de l'information et de la communication.*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- bloc-3 END -->*/
/* */
/* {% endblock %}*/
/* */
