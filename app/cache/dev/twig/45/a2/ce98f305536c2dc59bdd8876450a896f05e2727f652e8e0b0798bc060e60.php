<?php

/* MeetPlayersMeetPlayersBundle:MeetPlayers:acceuil.html.twig */
class __TwigTemplate_45a2ce98f305536c2dc59bdd8876450a896f05e2727f652e8e0b0798bc060e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");

        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_aside($context, array $blocks = array())
    {
        // line 7
        echo "    <div id=\"aside\">
       <h1>News</h1>
       <div id=\"news\">
        <h1>Tournoi d'Ales</h1>
        <p>
          Tournoi d'Ales du 18 juin au 30 juin.
        </p>
        <p>29/06/2014</p>
      </div>
      <div id=\"news\">
        <h1>Tournoi de Nîmes</h1>
        <p>
          Tournoi de Nîmes du 18 juillet au 30 juillet.
        </p>
        <p>29/06/2014</p>
      </div>
     </div>
";
    }

    // line 27
    public function block_article($context, array $blocks = array())
    {
        // line 28
        echo "  <section class=\"col-lg-8\">

  <div id=\"article\">
    <div id=\"TexteBienvenue\">
      <h1>Bienvenue</h1>
      <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
      </p>

    </div>
    <div id=\"MembresConnectes\">
      <h1>Derniers membres connectés</h1>
      <div id=\"photosconnectes\">
        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Images/PhotosProfils/1.png"), "html", null, true);
        echo "\">
        <img src=\"Images/PhotosProfils/2.png\">
        <img src=\"Images/PhotosProfils/3.png\">
        <img src=\"Images/PhotosProfils/4.png\">
        <img src=\"Images/PhotosProfils/5.png\">
      </div>
    </div>
    <div id=\"MembresInscrits\">
      <h1>Derniers membres inscrits</h1>
      <div id=\"photosinscrits\">
        <img src=\"Images/PhotosProfils/7.png\">
        <img src=\"Images/PhotosProfils/8.png\">
        <img src=\"Images/PhotosProfils/9.png\">
        <img src=\"Images/PhotosProfils/10.png\">
        <img src=\"Images/PhotosProfils/11.png\">
      </div>
    </div>
  </div>
  </section>

</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "MeetPlayersMeetPlayersBundle:MeetPlayers:acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 40,  56 => 28,  53 => 27,  32 => 7,  29 => 6,);
    }
}
