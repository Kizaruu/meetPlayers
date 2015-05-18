<?php

/* MeetPlayersMeetPlayersBundle:MeetPlayers:recherche.html.twig */
class __TwigTemplate_d0bf189a7380e704c47da04ed20933b8f3ad08ef8c13f134485ddd494b46194a extends Twig_Template
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

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "    <form class =\"form-horizontal col-lg-6\">
        <div class =\"form-group \">
            <legend>Recherche avancée</legend>
            </ div >
            <div class =\"row \">
                <div class =\"form-group \">
                    <label for=\" text \" class =\"col-lg-2\">Prenom </label >
                    <div class =\"col-lg-10\">
                        <input type =\" text \" class =\"form-control \" id=\" text \">
                    </div >
                </div >
            </div >
            <div class =\"row\">
                <div class =\"form-group \">
                    <label for=\" textarea \" class =\"col-lg-2\">Nom </label>
                    <div class =\"col-lg-10\">
                        <input type =\" textarea \" class =\"form-control \" id=\"
                               textarea \">
                    </div >
                </div >
            </div >
            <div class =\"row\">
                <div class =\"form-group \">
                    <label for=\" textarea \" class =\"col-lg-2\">Ville</label>
                    <div class =\"col-lg-10\">
                        <input type =\" textarea \" class =\"form-control \" id=\"
                               textarea \">
                    </div >
                </div >
            </div >
            <div class =\"row\">
                <div class =\"form-group \">
                    <label for=\" textarea \" class =\"col-lg-2\">Age</label>
                    <div class =\"col-lg-10\">
                        <input type =\" textarea \" class =\"form-control \" id=\"
                               textarea \">
                    </div >
                </div >
            </div >
            <div class =\"row\">
                <div class =\"form-group \">
                    <label for=\" textarea \" class =\"col-lg-2\">E-mail </label>
                    <div class =\"col-lg-10\">
                        <input type =\" textarea \" class =\"form-control \" id=\"
                               textarea \">
                    </div >
                </div >
            </div >
            <div class =\"row\">
                <div class =\"form-group \">
                    <label for=\" select \" class =\"col-lg-6\">Classement : </ label >
                        <div class =\"col-lg-10\">
                            <select id=\" select \" class =\"form-control \" >
                                <option >NC</ option >
                                <option >30/5</ option >
                                <option >30/4</ option >
                            </select >
                        </div >
                </div >
            </div >
            <div class =\"form-group \">
                <button class =\"pull-right btn btn-default \">Envoyer </ button >
            </div >
    </form >
";
    }

    public function getTemplateName()
    {
        return "MeetPlayersMeetPlayersBundle:MeetPlayers:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
