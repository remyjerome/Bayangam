<?php

/* wpAssociationBundle:Ressources:cours.html.twig */
class __TwigTemplate_9f35f8f3449ab162f32402390d01760ceb5e8aa8e2b37c075fd37d278e4d10ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Ressources:cours.html.twig", 1);
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
        echo "    Soutien
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<!-- bloc-21 -->
<div class=\"bloc l-bloc bgc-white tc-dark-cerulean-2\" id=\"bloc-21\">
\t<div class=\"container bloc-md\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2 class=\"mg-sm\">
\t\t\t\t\t<strong>Les cours</strong>
\t\t\t\t</h2>
\t\t\t\t<div class=\"divider-h\">
\t\t\t\t\t<span class=\"divider\"></span>
\t\t\t\t</div>
\t\t\t\t<h4 class=\"mg-md \">
\t\t\t\t\tVoici quelques exemples de TP proposé aux étudiants :
\t\t\t\t</h4><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pdf/1.pdf"), "html", null, true);
        echo "\" class=\"a-btn a-block\">Jeu de caractères</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pdf/2.pdf"), "html", null, true);
        echo "\" class=\"a-btn a-block\">Semaine n°2-Internet</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pdf/3.pdf"), "html", null, true);
        echo "\" class=\"a-btn a-block\">Semaine n°3-Un peu de pratique en tableur</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pdf/4.pdf"), "html", null, true);
        echo "\" class=\"a-btn a-block\">Semaine n°3-Internet</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- bloc-21 END -->

";
    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Ressources:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Soutien*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <!-- bloc-21 -->*/
/* <div class="bloc l-bloc bgc-white tc-dark-cerulean-2" id="bloc-21">*/
/* 	<div class="container bloc-md">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-12">*/
/* 				<h2 class="mg-sm">*/
/* 					<strong>Les cours</strong>*/
/* 				</h2>*/
/* 				<div class="divider-h">*/
/* 					<span class="divider"></span>*/
/* 				</div>*/
/* 				<h4 class="mg-md ">*/
/* 					Voici quelques exemples de TP proposé aux étudiants :*/
/* 				</h4><a href="{{ asset('pdf/1.pdf') }}" class="a-btn a-block">Jeu de caractères</a><a href="{{ asset('pdf/2.pdf') }}" class="a-btn a-block">Semaine n°2-Internet</a><a href="{{ asset('pdf/3.pdf') }}" class="a-btn a-block">Semaine n°3-Un peu de pratique en tableur</a><a href="{{ asset('pdf/4.pdf') }}" class="a-btn a-block">Semaine n°3-Internet</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- bloc-21 END -->*/
/* */
/* {% endblock %}*/
/* */
