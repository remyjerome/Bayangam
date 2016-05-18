<?php

/* wpAssociationBundle:Ressources:blog.html.twig */
class __TwigTemplate_5e5cbac22ecdaafa1190d7a7ba5731af2dc19ddc87f997f02e5fa19575be94fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Ressources:blog.html.twig", 1);
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
        echo "<!-- bloc-16 -->
<div class=\"bloc l-bloc bgc-white tc-dark-cerulean-2\" id=\"bloc-16\">
\t<div class=\"container bloc-md\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2 class=\"mg-sm\">
\t\t\t\t\t<strong>En direct de Bayangam</strong>
\t\t\t\t</h2>
\t\t\t\t<div class=\"divider-h\">
\t\t\t\t\t<span class=\"divider\"></span>
\t\t\t\t</div>
\t\t\t\t<h4 class=\"mg-md \">
\t\t\t\t\tSuivez le voyage à travers le regard de chacun de nous :
\t\t\t\t</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"ltc-dark-cerulean-2\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("rj_by_blog1");
        echo "\">Le blog de Guillaume</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"ltc-dark-cerulean-2\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("rj_by_blog2");
        echo "\">Le blog de Jonathan</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row voffset\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"ltc-dark-cerulean-2\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("rj_by_blog3");
        echo "\">Le blog de Selma</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a class=\"ltc-dark-cerulean-2\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("rj_by_blog4");
        echo "\">Le blog de Sylvain</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- bloc-16 END -->
";
    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Ressources:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 42,  77 => 37,  67 => 30,  59 => 25,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Soutien*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <!-- bloc-16 -->*/
/* <div class="bloc l-bloc bgc-white tc-dark-cerulean-2" id="bloc-16">*/
/* 	<div class="container bloc-md">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-12">*/
/* 				<h2 class="mg-sm">*/
/* 					<strong>En direct de Bayangam</strong>*/
/* 				</h2>*/
/* 				<div class="divider-h">*/
/* 					<span class="divider"></span>*/
/* 				</div>*/
/* 				<h4 class="mg-md ">*/
/* 					Suivez le voyage à travers le regard de chacun de nous :*/
/* 				</h4>*/
/* 				<div class="row">*/
/* 					<div class="col-sm-6">*/
/* 						<p>*/
/* 							<a class="ltc-dark-cerulean-2" href="{{ path('rj_by_blog1') }}">Le blog de Guillaume</a>*/
/* 						</p>*/
/* 					</div>*/
/* 					<div class="col-sm-6">*/
/* 						<p>*/
/* 							<a class="ltc-dark-cerulean-2" href="{{ path('rj_by_blog2') }}">Le blog de Jonathan</a>*/
/* 						</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row voffset">*/
/* 					<div class="col-sm-6">*/
/* 						<p>*/
/* 							<a class="ltc-dark-cerulean-2" href="{{ path('rj_by_blog3') }}">Le blog de Selma</a>*/
/* 						</p>*/
/* 					</div>*/
/* 					<div class="col-sm-6">*/
/* 						<p>*/
/* 							<a class="ltc-dark-cerulean-2" href="{{ path('rj_by_blog4') }}">Le blog de Sylvain</a>*/
/* 						</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- bloc-16 END -->*/
/* {% endblock %}*/
/* */
