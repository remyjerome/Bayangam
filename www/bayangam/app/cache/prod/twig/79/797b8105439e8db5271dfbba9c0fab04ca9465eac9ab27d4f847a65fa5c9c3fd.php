<?php

/* ::base.html.twig */
class __TwigTemplate_ca0f3b9443e3a44a7ab64ab240d02544accb0b9b1c2dd02fd65e7eb11a01951f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
      <div class=\"page-container\">
        ";
        // line 28
        $this->displayBlock('nav', $context, $blocks);
        // line 110
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 152
        echo "        </div>
        ";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 159
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Association Bayngam";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jumbotron.css"), "html", null, true);
        echo "\">




            <link rel='stylesheet' href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
            <link rel='stylesheet' href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/feather.min.css"), "html", null, true);
        echo "\"/>

            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">

            <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style2.css"), "html", null, true);
        echo "\">
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 28
    public function block_nav($context, array $blocks = array())
    {
        // line 29
        echo "        <div class=\"bloc l-bloc bgc-white\" id=\"nav-bloc\">
          <div class=\"container bloc-sm b-divider\">
            <nav class=\"navbar row\">
              <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/arbaf-nord-logo.gif"), "html", null, true);
        echo "\" alt=\"logo\" height=\"50\" /></a>
                <button id=\"nav-toggle\" type=\"button\" class=\"ui-navbar-toggle navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-1\">
                  <span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                </button>
              </div>
              <div class=\"collapse navbar-collapse navbar-1\">
                <ul class=\"site-navigation nav navbar-nav\">
                  <li>
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("rj_by_homepage");
        echo "\">Accueil</a>
                  </li>
                  <li>
                    <div class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" id=\"pl-1\" data-toggle=\"dropdown\" aria-expanded=\"false\">Organisation<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                          <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("rj_by_equipe");
        echo "\" class=\"a-btn a-block\">Notre Équipe</a>
                        </li>
                        <li>
                          <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("rj_by_but");
        echo "\" class=\"a-btn a-block\">Notre But</a>
                        </li>
                        <li>
                          <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("rj_by_action");
        echo "\" class=\"a-btn a-block\">Nos Actions Préliminaires</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <div class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" id=\"pl-1\" data-toggle=\"dropdown\" aria-expanded=\"true\">Soutien<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                          <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("rj_by_soutien");
        echo "\" class=\"a-btn a-block\">Ils nous soutiennent</a>
                        </li>
                        <li>
                          <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("rj_by_aide");
        echo "\" class=\"a-btn a-block\">Comment nous aider ?</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <div class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" id=\"pl-1\" data-toggle=\"dropdown\" aria-expanded=\"true\">Archives<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                          <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("rj_by_archives", array("annee" => 2016));
        echo "\" class=\"a-btn a-block\">Année 2016</a>
                        </li>
                        <li>
                          <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("rj_by_archives", array("annee" => 2015));
        echo "\" class=\"a-btn a-block\">Année 2015</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <div class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" id=\"pl-1\" data-toggle=\"dropdown\" aria-expanded=\"true\">Ressources<span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                          <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("rj_by_galerie");
        echo "\" class=\"a-btn a-block\">Galerie</a>
                        </li>
                        <li>
                          <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("rj_by_cours");
        echo "\" class=\"a-btn a-block\">Cours</a>
                        </li>
                        <li>
                          <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("rj_by_blog");
        echo "\" class=\"a-btn a-block\">Blogs</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("rj_by_cantact");
        echo "\">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        ";
    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        // line 111
        echo "
        ";
    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        // line 114
        echo "        <div class=\"bloc d-bloc bgc-dark-cerulean\" id=\"bloc-9\">
        \t<div class=\"container bloc-sm\">
        \t\t<div class=\"row\">
        \t\t\t<div class=\"col-sm-12\">
        \t\t\t\t<h6 class=\" mg-clear\">
        \t\t\t\t\t<strong>L&rsquo;équipe en bref :</strong>
        \t\t\t\t</h6>
        \t\t\t</div>
        \t\t</div>
        \t\t<div class=\"row voffset\">
        \t\t\t<div class=\"col-sm-3\">
        \t\t\t\t<img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ract.jpg"), "html", null, true);
        echo "\" class=\"center-block img-circle\" width=\"60\" height=\"70\" />
        \t\t\t\t<h3 class=\"text-center mg-sm \">
        \t\t\t\t\tSylvain RACT
        \t\t\t\t</h3>
        \t\t\t</div>
        \t\t\t<div class=\"col-sm-3\">
        \t\t\t\t<img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/mehyaoui.jpg"), "html", null, true);
        echo "\" class=\"center-block img-circle\" width=\"60\" height=\"70\" />
        \t\t\t\t<h3 class=\"text-center sm-shadow mg-sm \">
        \t\t\t\t\tSelma MEYHAOUI
        \t\t\t\t</h3>
        \t\t\t</div>
        \t\t\t<div class=\"col-sm-3\">
        \t\t\t\t<img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/montane.jpg"), "html", null, true);
        echo "\" class=\"center-block img-circle\" width=\"60\" height=\"70\" />
        \t\t\t\t<h3 class=\"text-center sm-shadow mg-sm \">
        \t\t\t\t\tJonathan MONTANÉ
        \t\t\t\t</h3>
        \t\t\t</div>
        \t\t\t<div class=\"col-sm-3\">
        \t\t\t\t<img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bolbenes.jpg"), "html", null, true);
        echo "\" class=\"center-block img-circle\" width=\"60\" height=\"70\" />
        \t\t\t\t<h3 class=\"text-center sm-shadow mg-sm \">
        \t\t\t\t\tGuillaume BOLBÈNES
        \t\t\t\t</h3>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        ";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
            <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
          \t<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/blocs.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 157,  317 => 156,  313 => 155,  310 => 154,  307 => 153,  294 => 143,  285 => 137,  276 => 131,  267 => 125,  254 => 114,  251 => 113,  246 => 111,  243 => 110,  231 => 102,  222 => 96,  216 => 93,  210 => 90,  197 => 80,  191 => 77,  178 => 67,  172 => 64,  159 => 54,  153 => 51,  147 => 48,  137 => 41,  126 => 33,  120 => 29,  117 => 28,  111 => 21,  107 => 20,  103 => 19,  97 => 16,  92 => 14,  88 => 13,  80 => 8,  75 => 7,  72 => 6,  66 => 5,  59 => 159,  57 => 153,  54 => 152,  51 => 113,  48 => 110,  46 => 28,  37 => 23,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Association Bayngam{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*             <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}">*/
/* */
/* */
/* */
/* */
/*             <link rel='stylesheet' href="{{ asset('css/font-awesome.min.css') }}"/>*/
/*             <link rel='stylesheet' href="{{ asset('css/feather.min.css') }}"/>*/
/* */
/*             <link rel="stylesheet" href="{{ asset('css/reset.css') }}">*/
/* */
/*             <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}">*/
/*             <script src="{{ asset('js/modernizr.js') }}"></script>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body>*/
/*       <div class="page-container">*/
/*         {% block nav %}*/
/*         <div class="bloc l-bloc bgc-white" id="nav-bloc">*/
/*           <div class="container bloc-sm b-divider">*/
/*             <nav class="navbar row">*/
/*               <div class="navbar-header">*/
/*                 <a class="navbar-brand" href="index.html"><img src="{{ asset('img/arbaf-nord-logo.gif') }}" alt="logo" height="50" /></a>*/
/*                 <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">*/
/*                   <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>*/
/*                 </button>*/
/*               </div>*/
/*               <div class="collapse navbar-collapse navbar-1">*/
/*                 <ul class="site-navigation nav navbar-nav">*/
/*                   <li>*/
/*                     <a href="{{ path('rj_by_homepage') }}">Accueil</a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <div class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" id="pl-1" data-toggle="dropdown" aria-expanded="false">Organisation<span class="caret"></span></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_equipe') }}" class="a-btn a-block">Notre Équipe</a>*/
/*                         </li>*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_but') }}" class="a-btn a-block">Notre But</a>*/
/*                         </li>*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_action') }}" class="a-btn a-block">Nos Actions Préliminaires</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/*                   </li>*/
/*                   <li>*/
/*                     <div class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" id="pl-1" data-toggle="dropdown" aria-expanded="true">Soutien<span class="caret"></span></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_soutien') }}" class="a-btn a-block">Ils nous soutiennent</a>*/
/*                         </li>*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_aide') }}" class="a-btn a-block">Comment nous aider ?</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/*                   </li>*/
/*                   <li>*/
/*                     <div class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" id="pl-1" data-toggle="dropdown" aria-expanded="true">Archives<span class="caret"></span></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_archives', { 'annee': 2016 }) }}" class="a-btn a-block">Année 2016</a>*/
/*                         </li>*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_archives', { 'annee': 2015 }) }}" class="a-btn a-block">Année 2015</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/*                   </li>*/
/*                   <li>*/
/*                     <div class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" id="pl-1" data-toggle="dropdown" aria-expanded="true">Ressources<span class="caret"></span></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_galerie') }}" class="a-btn a-block">Galerie</a>*/
/*                         </li>*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_cours') }}" class="a-btn a-block">Cours</a>*/
/*                         </li>*/
/*                         <li>*/
/*                           <a href="{{ path('rj_by_blog') }}" class="a-btn a-block">Blogs</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </div>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href="{{ path('rj_by_cantact') }}">Contact</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div>*/
/*             </nav>*/
/*           </div>*/
/*         </div>*/
/*         {% endblock %}*/
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/*         {% block footer %}*/
/*         <div class="bloc d-bloc bgc-dark-cerulean" id="bloc-9">*/
/*         	<div class="container bloc-sm">*/
/*         		<div class="row">*/
/*         			<div class="col-sm-12">*/
/*         				<h6 class=" mg-clear">*/
/*         					<strong>L&rsquo;équipe en bref :</strong>*/
/*         				</h6>*/
/*         			</div>*/
/*         		</div>*/
/*         		<div class="row voffset">*/
/*         			<div class="col-sm-3">*/
/*         				<img src="{{ asset('img/ract.jpg') }}" class="center-block img-circle" width="60" height="70" />*/
/*         				<h3 class="text-center mg-sm ">*/
/*         					Sylvain RACT*/
/*         				</h3>*/
/*         			</div>*/
/*         			<div class="col-sm-3">*/
/*         				<img src="{{ asset('img/mehyaoui.jpg') }}" class="center-block img-circle" width="60" height="70" />*/
/*         				<h3 class="text-center sm-shadow mg-sm ">*/
/*         					Selma MEYHAOUI*/
/*         				</h3>*/
/*         			</div>*/
/*         			<div class="col-sm-3">*/
/*         				<img src="{{ asset('img/montane.jpg') }}" class="center-block img-circle" width="60" height="70" />*/
/*         				<h3 class="text-center sm-shadow mg-sm ">*/
/*         					Jonathan MONTANÉ*/
/*         				</h3>*/
/*         			</div>*/
/*         			<div class="col-sm-3">*/
/*         				<img src="{{ asset('img/bolbenes.jpg') }}" class="center-block img-circle" width="60" height="70" />*/
/*         				<h3 class="text-center sm-shadow mg-sm ">*/
/*         					Guillaume BOLBÈNES*/
/*         				</h3>*/
/*         			</div>*/
/*         		</div>*/
/*         	</div>*/
/*         </div>*/
/*         {% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*             <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*           	<script src="{{ asset('js/blocs.js') }}"></script>*/
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
