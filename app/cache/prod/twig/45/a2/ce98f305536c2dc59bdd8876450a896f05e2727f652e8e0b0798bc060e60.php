<?php

/* MeetPlayersMeetPlayersBundle:MeetPlayers:acceuil.html.twig */
class __TwigTemplate_45a2ce98f305536c2dc59bdd8876450a896f05e2727f652e8e0b0798bc060e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html>

 

 <html>

     <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
         <title>TennisPlay</title>
          ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "     </head>

     <body>
         <div class=\"container\">
             <nav class=\"navbar navbar-inverse\">
                 <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"#\">Profil</a></li>
                    <li><a href=\"#\">Recherche</a></li>
                    <li><a href=\"#\">Messages</a></li>
                 </ul> 
                 <form class =\"navbar-form pull-right\">
                    <input type=\"text\" style = \"width:150px\" calss=\"input-small\" placeholder=\"Recherche\">
                    <button type=\"submit\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span>Chercher</button>
                 </form>
                </nav>
          </div>
        

         <div id=\"aside\">
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
   <div div id=\"article\">
    <div id=\"TexteBienvenue\">
   \t<h1>Bienvenue</h1>
    <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
    </p>

</div>
<div id=\"MembresConnectes\">
<h1>Derniers membres connectés</h1>
<div id=\"photosconnectes\">
  <img src=\"Images/PhotosProfils/1.png\">
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
   <footer>
   \tContact
   </footer>

  </body>

</html>";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
          ";
    }

    public function getTemplateName()
    {
        return "MeetPlayersMeetPlayersBundle:MeetPlayers:acceuil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 13,  113 => 13,  110 => 12,  34 => 15,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 12,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 15,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 12,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 12,  30 => 7,);
    }
}
