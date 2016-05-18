<?php

/* wpAssociationBundle:Ressources:galerie.html.twig */
class __TwigTemplate_6293541e19bcbe6f30511d22895f978c8b4acde1fa607f8bdb002ddd67f0581d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Ressources:galerie.html.twig", 1);
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
        echo "<!-- bloc-7 -->
<div class=\"bloc l-bloc bgc-white\" id=\"bloc-7\">
\t<div class=\"container bloc-md\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2 class=\"text-center mg-md\">
\t\t\t\t\t<strong>Gallerie</strong>
\t\t\t\t</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row voffset\">
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<a href=\"#\" data-lightbox=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/1.jpg"), "html", null, true);
        echo "\" data-caption=\"Image description\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/1.jpg"), "html", null, true);
        echo "\" class=\"center-block\" width=\"270\" height=\"180\" /></a>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<a href=\"#\" data-lightbox=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/2.jpg"), "html", null, true);
        echo "\" data-caption=\"Image description\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/2.jpg"), "html", null, true);
        echo "\" class=\"center-block\" width=\"270\" height=\"180\" /></a>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<a href=\"#\" data-lightbox=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/3.jpg"), "html", null, true);
        echo "\" data-caption=\"Image description\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/3.jpg"), "html", null, true);
        echo "\" class=\"center-block\" width=\"270\" height=\"180\" /></a>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<a href=\"#\" data-lightbox=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/4.jpg"), "html", null, true);
        echo "\" data-caption=\"Image description\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/4.jpg"), "html", null, true);
        echo "\" class=\"center-block\" width=\"270\" height=\"180\" /></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row voffset\">
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<a href=\"#\" data-lightbox=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/placeholder-image.png"), "html", null, true);
        echo "\" data-caption=\"Image description\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/placeholder-image.png"), "html", null, true);
        echo "\" class=\"img-responsive\" /></a>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<a href=\"#\" data-lightbox=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/placeholder-image.png"), "html", null, true);
        echo "\" data-caption=\"Image description\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/placeholder-image.png"), "html", null, true);
        echo "\" class=\"img-responsive\" /></a>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<a href=\"#\" data-lightbox=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/placeholder-image.png"), "html", null, true);
        echo "\" data-caption=\"Image description\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/placeholder-image.png"), "html", null, true);
        echo "\" class=\"img-responsive\" /></a>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<a href=\"#\" data-lightbox=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/placeholder-image.png"), "html", null, true);
        echo "\" data-caption=\"Image description\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/placeholder-image.png"), "html", null, true);
        echo "\" class=\"img-responsive\" /></a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- bloc-7 END -->

";
    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Ressources:galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 43,  104 => 40,  96 => 37,  88 => 34,  78 => 29,  70 => 26,  62 => 23,  54 => 20,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Ressources*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <!-- bloc-7 -->*/
/* <div class="bloc l-bloc bgc-white" id="bloc-7">*/
/* 	<div class="container bloc-md">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-12">*/
/* 				<h2 class="text-center mg-md">*/
/* 					<strong>Gallerie</strong>*/
/* 				</h2>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row voffset">*/
/* 			<div class="col-sm-3">*/
/* 				<a href="#" data-lightbox="{{ asset('img/1.jpg') }}" data-caption="Image description"><img src="{{ asset('img/1.jpg') }}" class="center-block" width="270" height="180" /></a>*/
/* 			</div>*/
/* 			<div class="col-sm-3">*/
/* 				<a href="#" data-lightbox="{{ asset('img/2.jpg') }}" data-caption="Image description"><img src="{{ asset('img/2.jpg') }}" class="center-block" width="270" height="180" /></a>*/
/* 			</div>*/
/* 			<div class="col-sm-3">*/
/* 				<a href="#" data-lightbox="{{ asset('img/3.jpg') }}" data-caption="Image description"><img src="{{ asset('img/3.jpg') }}" class="center-block" width="270" height="180" /></a>*/
/* 			</div>*/
/* 			<div class="col-sm-3">*/
/* 				<a href="#" data-lightbox="{{ asset('img/4.jpg') }}" data-caption="Image description"><img src="{{ asset('img/4.jpg') }}" class="center-block" width="270" height="180" /></a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row voffset">*/
/* 			<div class="col-sm-3">*/
/* 				<a href="#" data-lightbox="{{ asset('img/placeholder-image.png') }}" data-caption="Image description"><img src="{{ asset('img/placeholder-image.png') }}" class="img-responsive" /></a>*/
/* 			</div>*/
/* 			<div class="col-sm-3">*/
/* 				<a href="#" data-lightbox="{{ asset('img/placeholder-image.png') }}" data-caption="Image description"><img src="{{ asset('img/placeholder-image.png') }}" class="img-responsive" /></a>*/
/* 			</div>*/
/* 			<div class="col-sm-3">*/
/* 				<a href="#" data-lightbox="{{ asset('img/placeholder-image.png') }}" data-caption="Image description"><img src="{{ asset('img/placeholder-image.png') }}" class="img-responsive" /></a>*/
/* 			</div>*/
/* 			<div class="col-sm-3">*/
/* 				<a href="#" data-lightbox="{{ asset('img/placeholder-image.png') }}" data-caption="Image description"><img src="{{ asset('img/placeholder-image.png') }}" class="img-responsive" /></a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- bloc-7 END -->*/
/* */
/* {% endblock %}*/
/* */
