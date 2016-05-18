<?php

/* wpAssociationBundle:Archives:archives.html.twig */
class __TwigTemplate_681b97191b41bfe6322def9b460c35ca5e6f26a35bc1531a47ebadfbc42ef97a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "wpAssociationBundle:Archives:archives.html.twig", 1);
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
        echo "    Contact
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<header>
  <h1>L'année ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : null), "html", null, true);
        echo "</h1>
</header>

<section id=\"cd-timeline\" class=\"cd-container\">
  <div class=\"cd-timeline-block\">
    <div class=\"cd-timeline-img cd-picture\">
      <img src=\"img/cd-icon-picture.svg\" alt=\"Picture\">
    </div> <!-- cd-timeline-img -->

    <div class=\"cd-timeline-content\">
      <h2>Title of section 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
      <a href=\"#0\" class=\"cd-read-more\">Read more</a>
      <span class=\"cd-date\">Jan 14</span>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class=\"cd-timeline-block\">
    <div class=\"cd-timeline-img cd-movie\">
      <img src=\"img/cd-icon-movie.svg\" alt=\"Movie\">
    </div> <!-- cd-timeline-img -->

    <div class=\"cd-timeline-content\">
      <h2>Title of section 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
      <a href=\"#0\" class=\"cd-read-more\">Read more</a>
      <span class=\"cd-date\">Jan 18</span>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class=\"cd-timeline-block\">
    <div class=\"cd-timeline-img cd-picture\">
      <img src=\"img/cd-icon-picture.svg\" alt=\"Picture\">
    </div> <!-- cd-timeline-img -->

    <div class=\"cd-timeline-content\">
      <h2>Title of section 3</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
      <a href=\"#0\" class=\"cd-read-more\">Read more</a>
      <span class=\"cd-date\">Jan 24</span>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class=\"cd-timeline-block\">
    <div class=\"cd-timeline-img cd-location\">
      <img src=\"img/cd-icon-location.svg\" alt=\"Location\">
    </div> <!-- cd-timeline-img -->

    <div class=\"cd-timeline-content\">
      <h2>Title of section 4</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
      <a href=\"#0\" class=\"cd-read-more\">Read more</a>
      <span class=\"cd-date\">Feb 14</span>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class=\"cd-timeline-block\">
    <div class=\"cd-timeline-img cd-location\">
      <img src=\"img/cd-icon-location.svg\" alt=\"Location\">
    </div> <!-- cd-timeline-img -->

    <div class=\"cd-timeline-content\">
      <h2>Title of section 5</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
      <a href=\"#0\" class=\"cd-read-more\">Read more</a>
      <span class=\"cd-date\">Feb 18</span>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class=\"cd-timeline-block\">
    <div class=\"cd-timeline-img cd-movie\">
      <img src=\"img/cd-icon-movie.svg\" alt=\"Movie\">
    </div> <!-- cd-timeline-img -->

    <div class=\"cd-timeline-content\">
      <h2>Final Section</h2>
      <p>This is the content of the last section</p>
      <span class=\"cd-date\">Feb 26</span>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->
</section> <!-- cd-timeline -->
";
    }

    public function getTemplateName()
    {
        return "wpAssociationBundle:Archives:archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Contact*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <header>*/
/*   <h1>L'année {{annee}}</h1>*/
/* </header>*/
/* */
/* <section id="cd-timeline" class="cd-container">*/
/*   <div class="cd-timeline-block">*/
/*     <div class="cd-timeline-img cd-picture">*/
/*       <img src="img/cd-icon-picture.svg" alt="Picture">*/
/*     </div> <!-- cd-timeline-img -->*/
/* */
/*     <div class="cd-timeline-content">*/
/*       <h2>Title of section 1</h2>*/
/*       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>*/
/*       <a href="#0" class="cd-read-more">Read more</a>*/
/*       <span class="cd-date">Jan 14</span>*/
/*     </div> <!-- cd-timeline-content -->*/
/*   </div> <!-- cd-timeline-block -->*/
/* */
/*   <div class="cd-timeline-block">*/
/*     <div class="cd-timeline-img cd-movie">*/
/*       <img src="img/cd-icon-movie.svg" alt="Movie">*/
/*     </div> <!-- cd-timeline-img -->*/
/* */
/*     <div class="cd-timeline-content">*/
/*       <h2>Title of section 2</h2>*/
/*       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>*/
/*       <a href="#0" class="cd-read-more">Read more</a>*/
/*       <span class="cd-date">Jan 18</span>*/
/*     </div> <!-- cd-timeline-content -->*/
/*   </div> <!-- cd-timeline-block -->*/
/* */
/*   <div class="cd-timeline-block">*/
/*     <div class="cd-timeline-img cd-picture">*/
/*       <img src="img/cd-icon-picture.svg" alt="Picture">*/
/*     </div> <!-- cd-timeline-img -->*/
/* */
/*     <div class="cd-timeline-content">*/
/*       <h2>Title of section 3</h2>*/
/*       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>*/
/*       <a href="#0" class="cd-read-more">Read more</a>*/
/*       <span class="cd-date">Jan 24</span>*/
/*     </div> <!-- cd-timeline-content -->*/
/*   </div> <!-- cd-timeline-block -->*/
/* */
/*   <div class="cd-timeline-block">*/
/*     <div class="cd-timeline-img cd-location">*/
/*       <img src="img/cd-icon-location.svg" alt="Location">*/
/*     </div> <!-- cd-timeline-img -->*/
/* */
/*     <div class="cd-timeline-content">*/
/*       <h2>Title of section 4</h2>*/
/*       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>*/
/*       <a href="#0" class="cd-read-more">Read more</a>*/
/*       <span class="cd-date">Feb 14</span>*/
/*     </div> <!-- cd-timeline-content -->*/
/*   </div> <!-- cd-timeline-block -->*/
/* */
/*   <div class="cd-timeline-block">*/
/*     <div class="cd-timeline-img cd-location">*/
/*       <img src="img/cd-icon-location.svg" alt="Location">*/
/*     </div> <!-- cd-timeline-img -->*/
/* */
/*     <div class="cd-timeline-content">*/
/*       <h2>Title of section 5</h2>*/
/*       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>*/
/*       <a href="#0" class="cd-read-more">Read more</a>*/
/*       <span class="cd-date">Feb 18</span>*/
/*     </div> <!-- cd-timeline-content -->*/
/*   </div> <!-- cd-timeline-block -->*/
/* */
/*   <div class="cd-timeline-block">*/
/*     <div class="cd-timeline-img cd-movie">*/
/*       <img src="img/cd-icon-movie.svg" alt="Movie">*/
/*     </div> <!-- cd-timeline-img -->*/
/* */
/*     <div class="cd-timeline-content">*/
/*       <h2>Final Section</h2>*/
/*       <p>This is the content of the last section</p>*/
/*       <span class="cd-date">Feb 26</span>*/
/*     </div> <!-- cd-timeline-content -->*/
/*   </div> <!-- cd-timeline-block -->*/
/* </section> <!-- cd-timeline -->*/
/* {% endblock %}*/
/* */
