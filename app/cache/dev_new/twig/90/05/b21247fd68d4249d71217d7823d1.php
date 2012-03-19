<?php

/* GDSHomeBundle::menu.html.twig */
class __TwigTemplate_9005b21247fd68d4249d71217d7823d1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"bloc_menu\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Goddystyle\" id=\"logo\" />
    
    <ul id=\"menu\">
        <li><a href=\"#\">ACCUEIL</a></li>
        <li><a href=\"#\">LE FILM</a></li>
        <li><a href=\"#\">LA LISTE</a></li>
        <li><a href=\"#\">PHOTOS</a></li>
        <li><a href=\"#\">IN GODS WE TRUST !</a></li>
        <li><a href=\"#\">THE GOODY FOOD</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "GDSHomeBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
