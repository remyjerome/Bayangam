<?php

/* wpAssociationBundle:Home:index.html.twig */
class __TwigTemplate_a20978b09c13cedd65c5e13a9a9b26950180f65947f2934deed37e404bd0dc53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Home:index.html.twig", 1);
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
        echo "    Home
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"bloc l-bloc bgc-white\" id=\"bloc-1\">
  <div class=\"container bloc-md\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        <div id=\"carousel-1\" class=\"carousel no-shadows slide\" data-ride=\"carousel\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-1\" data-slide-to=\"0\" class=\"active\">
            </li>
            <li data-target=\"#carousel-1\" data-slide-to=\"1\">
            </li>
            <li data-target=\"#carousel-1\" data-slide-to=\"2\">
            </li>
            <li data-target=\"#carousel-1\" data-slide-to=\"3\">
            </li>
          </ol>
          <div class=\"carousel-inner\">
            <div class=\"item active\">
              <img src=\"img/1.jpg\" />
              <div class=\"carousel-caption\">
              </div>
            </div>
            <div class=\"item\">
              <img src=\"img/2.jpg\" />
              <div class=\"carousel-caption\">
              </div>
            </div>
            <div class=\"item\">
              <img src=\"img/3.jpg\" />
              <div class=\"carousel-caption\">
              </div>
            </div>
            <div class=\"item\">
              <img src=\"img/4.jpg\" />
              <div class=\"carousel-caption\">
              </div>
            </div>
          </div><a class=\"left carousel-control\" href=\"#carousel-1\" role=\"button\" data-slide=\"prev\"><span class=\"fa fa-chevron-left\"></span><span class=\"sr-only\">Previous</span></a><a class=\"right carousel-control\" href=\"#carousel-1\" role=\"button\" data-slide=\"next\"><span class=\"fa fa-chevron-right\"></span><span class=\"sr-only\">Next</span></a>
        </div>
      </div>
    </div>
  </div>
</div>

<header>
  <h1>Dernière action l'année 2016</h1>
</header>

<section id=\"cd-timeline\" class=\"cd-container\">
  ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 57
            echo "  <div class=\"cd-timeline-block\">
    <div class=\"cd-timeline-img cd-picture\">
      <img src=\"img/cd-icon-location.svg\" alt=\"Picture\">
    </div> <!-- cd-timeline-img -->

    <div class=\"cd-timeline-content\">
      <h2>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "titre", array()), "html", null, true);
            echo "</h2>
      <p>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "article", array()), "html", null, true);
            echo "</p>
      <!--<a href=\"#0\" class=\"cd-read-more\">Read more</a>-->
      <span class=\"cd-date\">";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "dateEvenement", array()), "m/d/Y"), "html", null, true);
            echo "</span>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</section> <!-- cd-timeline -->
";
    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 70,  111 => 66,  106 => 64,  102 => 63,  94 => 57,  90 => 56,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Home*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="bloc l-bloc bgc-white" id="bloc-1">*/
/*   <div class="container bloc-md">*/
/*     <div class="row">*/
/*       <div class="col-sm-12">*/
/*         <div id="carousel-1" class="carousel no-shadows slide" data-ride="carousel">*/
/*           <ol class="carousel-indicators">*/
/*             <li data-target="#carousel-1" data-slide-to="0" class="active">*/
/*             </li>*/
/*             <li data-target="#carousel-1" data-slide-to="1">*/
/*             </li>*/
/*             <li data-target="#carousel-1" data-slide-to="2">*/
/*             </li>*/
/*             <li data-target="#carousel-1" data-slide-to="3">*/
/*             </li>*/
/*           </ol>*/
/*           <div class="carousel-inner">*/
/*             <div class="item active">*/
/*               <img src="img/1.jpg" />*/
/*               <div class="carousel-caption">*/
/*               </div>*/
/*             </div>*/
/*             <div class="item">*/
/*               <img src="img/2.jpg" />*/
/*               <div class="carousel-caption">*/
/*               </div>*/
/*             </div>*/
/*             <div class="item">*/
/*               <img src="img/3.jpg" />*/
/*               <div class="carousel-caption">*/
/*               </div>*/
/*             </div>*/
/*             <div class="item">*/
/*               <img src="img/4.jpg" />*/
/*               <div class="carousel-caption">*/
/*               </div>*/
/*             </div>*/
/*           </div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><span class="fa fa-chevron-right"></span><span class="sr-only">Next</span></a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <header>*/
/*   <h1>Dernière action l'année 2016</h1>*/
/* </header>*/
/* */
/* <section id="cd-timeline" class="cd-container">*/
/*   {% for new in news %}*/
/*   <div class="cd-timeline-block">*/
/*     <div class="cd-timeline-img cd-picture">*/
/*       <img src="img/cd-icon-location.svg" alt="Picture">*/
/*     </div> <!-- cd-timeline-img -->*/
/* */
/*     <div class="cd-timeline-content">*/
/*       <h2>{{ new.titre }}</h2>*/
/*       <p>{{ new.article }}</p>*/
/*       <!--<a href="#0" class="cd-read-more">Read more</a>-->*/
/*       <span class="cd-date">{{ new.dateEvenement|date("m/d/Y") }}</span>*/
/*     </div> <!-- cd-timeline-content -->*/
/*   </div> <!-- cd-timeline-block -->*/
/*   {% endfor %}*/
/* </section> <!-- cd-timeline -->*/
/* {% endblock %}*/
/* */
