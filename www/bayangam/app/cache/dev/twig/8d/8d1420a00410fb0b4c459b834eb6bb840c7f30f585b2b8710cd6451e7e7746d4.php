<?php

/* wpAssociationBundle:Home:index.html.twig */
class __TwigTemplate_94d9cfcd7ddc0d2c7e1734bd59f5b17cb639dee9e38d062d74d13129a06a1d2a extends Twig_Template
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
        $__internal_a588d38363f996429e7d822006d239b7ba59fa8dfd515e5bf9abbb1b952bdb26 = $this->env->getExtension("native_profiler");
        $__internal_a588d38363f996429e7d822006d239b7ba59fa8dfd515e5bf9abbb1b952bdb26->enter($__internal_a588d38363f996429e7d822006d239b7ba59fa8dfd515e5bf9abbb1b952bdb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wpAssociationBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a588d38363f996429e7d822006d239b7ba59fa8dfd515e5bf9abbb1b952bdb26->leave($__internal_a588d38363f996429e7d822006d239b7ba59fa8dfd515e5bf9abbb1b952bdb26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e7595a8530b9904378bfe38319175eb2594bc73547b364176f3b74b91a83ff1 = $this->env->getExtension("native_profiler");
        $__internal_0e7595a8530b9904378bfe38319175eb2594bc73547b364176f3b74b91a83ff1->enter($__internal_0e7595a8530b9904378bfe38319175eb2594bc73547b364176f3b74b91a83ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Home
";
        
        $__internal_0e7595a8530b9904378bfe38319175eb2594bc73547b364176f3b74b91a83ff1->leave($__internal_0e7595a8530b9904378bfe38319175eb2594bc73547b364176f3b74b91a83ff1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbc6c4ec00d29c5907ac96baf8fbe3bf39382f1c2efc9bb90821388ef4ea4a5b = $this->env->getExtension("native_profiler");
        $__internal_dbc6c4ec00d29c5907ac96baf8fbe3bf39382f1c2efc9bb90821388ef4ea4a5b->enter($__internal_dbc6c4ec00d29c5907ac96baf8fbe3bf39382f1c2efc9bb90821388ef4ea4a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
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
        
        $__internal_dbc6c4ec00d29c5907ac96baf8fbe3bf39382f1c2efc9bb90821388ef4ea4a5b->leave($__internal_dbc6c4ec00d29c5907ac96baf8fbe3bf39382f1c2efc9bb90821388ef4ea4a5b_prof);

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
        return array (  136 => 70,  126 => 66,  121 => 64,  117 => 63,  109 => 57,  105 => 56,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
