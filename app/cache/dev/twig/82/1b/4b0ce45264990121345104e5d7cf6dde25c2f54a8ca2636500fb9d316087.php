<?php

/* MeetPlayersMeetPlayersBundle:MeetPlayers:messages.html.twig */
class __TwigTemplate_821b4b0ce45264990121345104e5d7cf6dde25c2f54a8ca2636500fb9d316087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_article($context, array $blocks = array())
    {
        // line 4
        echo "    <table class =\" table table-bordered table-striped table-condensed \">
        <caption>
            <h4>Mes messages</h4>

        </caption>
        <thead>
            <tr>
                <th >Expéditeur</th>
                <th >Contenu</th>
            </tr>
        </thead>
        <tbody >
            <tr>
                <td >Expéditeur</td >
                <td onclick=\"\">Demande croissante de certaines parties de l' animal
                    pour la mé decine chinoise traditionnelle et
                    fragmentation des habitats du fait du dé veloppement
                    non durable d' infrastructures </td >
            </tr >
            <tr>
                <td >Nom</td >
                <td >Production d' huile de palme et de pâ tes à papiers </
                    td >
            </tr >
            <tr>
                <td >Ville</td >
                <td >Pâte à papier , l' huile de palme et le caoutchouc </
                    td >
            </tr >
            <tr>
                <td >Age</td >
                <td >Les tigres captifs repr é sentent un danger pour les
                    tigres sauvages </td >
            </tr >
            <tr>
                <td >Classement</td >
                <td >Gros appétit pour l' huile de palme </td >
            </tr >
            <tr>
                <td >E-mail</td >
                <td >Commerce ill égal de produits dé rivés de tigres </td >
            </tr >
            </ tbody >
    </table>

    <div class =\"form-group \">
        <button class =\"pull-right btn btn-default\"><a href =\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("meet_players_meet_players_modifierprofil");
        echo "\">Modifier</a></button>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MeetPlayersMeetPlayersBundle:MeetPlayers:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 50,  31 => 4,  28 => 3,);
    }
}
