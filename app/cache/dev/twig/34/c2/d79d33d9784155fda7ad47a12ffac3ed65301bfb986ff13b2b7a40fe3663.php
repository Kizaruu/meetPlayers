<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_34c2d79d33d9784155fda7ad47a12ffac3ed65301bfb986ff13b2b7a40fe3663 extends Twig_Template
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
        // line 39
        echo "                </section>
                <section class=\"col-lg-8\">

                    <div id=\"article\">
                        ";
        // line 43
        $this->displayBlock('article', $context, $blocks);
        // line 45
        echo "                    </div>
                </section>
            </div>    
                    <footer class=\"row\">
                        <section class=\"col-lg-6\">
                            <h2>Contact</h2>
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_profil");
        echo "\">Contact</a></li>
                            <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_recherche");
        echo "\">Soumettre une idée</a></li>
                            <br>   
                        </section>
                        <section class=\"col-lg-6\">
                            <h2>Infos</h2>
                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_profil");
        echo "\">FAQ</a></li>
                            <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_recherche");
        echo "\">Plan du site</a></li>
                            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_messages");
        echo "\">Conditions</a></li>                       
                        </section>
                    </footer>            
            </div>
        </div
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/MeetPlayers.css"), "html", null, true);
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
        echo "                
                    ";
    }

    // line 43
    public function block_article($context, array $blocks = array())
    {
        echo "  
                        ";
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 43,  155 => 37,  140 => 22,  136 => 21,  132 => 20,  128 => 19,  123 => 16,  120 => 15,  114 => 10,  109 => 9,  106 => 8,  101 => 12,  99 => 8,  94 => 5,  91 => 4,  79 => 59,  75 => 58,  71 => 57,  63 => 52,  59 => 51,  51 => 45,  49 => 43,  43 => 39,  41 => 37,  35 => 33,  33 => 15,  30 => 14,  28 => 4,  24 => 2,);
    }
}
