<?php

/* MeetPlayersMeetPlayersBundle::layout.html.twig */
class __TwigTemplate_cad98aee6ba94ecd4e4196f0cd096d5f9827afb81e668502119fdb2240c868b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'aside' => array($this, 'block_aside'),
            'article' => array($this, 'block_article'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<html>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "    <body>
        ";
        // line 15
        $this->displayBlock('nav', $context, $blocks);
        // line 33
        echo "
        <div class=\"container\">
            <div class=\"row\">
                <section class=\"col-lg-4\">
                    ";
        // line 37
        $this->displayBlock('aside', $context, $blocks);
        // line 40
        echo "
                </section>


                <section class=\"col-lg-8\">

                    <div id=\"article\">
                        ";
        // line 47
        $this->displayBlock('article', $context, $blocks);
        // line 49
        echo "                    </div>
                </section>
            </div>
        </div>




        <div class=\"container\">
            <div class=\"row\">
                <section class=\"col-lg-12\">
                    <footer>
                        ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "                    </footer>
                </section>
            </div>
        </div>

    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            <title>MeetPlayers</title>
            ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        </head>
    ";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/MeetPlayers.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            ";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        // line 16
        echo "            <div class=\"container\">
                <nav class=\"navbar navbar-inverse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_homepage");
        echo "\">Acceuil</a></li>
                        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_profil");
        echo "\">Profil</a></li>
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_recherche");
        echo "\">Recherche</a></li>
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_messages");
        echo "\">Messages</a></li>
                    </ul> 
                    <form class =\"navbar-form pull-right\">
                        <input type=\"text\" style = \"width:150px\" class=\"input-small\" placeholder=\"Recherche\">
                        <button type=\"submit\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span>Chercher</button>
                    </form>
                </nav>
            </div>


        ";
    }

    // line 37
    public function block_aside($context, array $blocks = array())
    {
        // line 38
        echo "                
                    ";
    }

    // line 47
    public function block_article($context, array $blocks = array())
    {
        echo "  
                        ";
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "                            Contact
                        ";
    }

    public function getTemplateName()
    {
        return "MeetPlayersMeetPlayersBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 62,  160 => 61,  153 => 47,  148 => 38,  145 => 37,  130 => 22,  126 => 21,  122 => 20,  118 => 19,  113 => 16,  110 => 15,  104 => 10,  99 => 9,  96 => 8,  91 => 12,  89 => 8,  84 => 5,  81 => 4,  71 => 64,  69 => 61,  55 => 49,  53 => 47,  44 => 40,  42 => 37,  36 => 33,  34 => 15,  29 => 4,  25 => 2,  31 => 14,  28 => 10,);
    }
}
