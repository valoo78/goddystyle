<?php

/* GDSHomeBundle::header.html.twig */
class __TwigTemplate_8dfe9188833928e473ada697647315eb extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"header\">
    <div class=\"center\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Goddystyle\" id=\"logo\" />
        
        <object id=\"player\" type=\"application/x-shockwave-flash\" data=\"http://flash-mp3-player.net/medias/player_mp3_multi.swf\" width=\"200\" height=\"20\">
            <param name=\"movie\" value=\"http://flash-mp3-player.net/medias/player_mp3_multi.swf\" />
            <param name=\"bgcolor\" value=\"#fed200\" />
            <param name=\"FlashVars\" value=\"mp3=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("2.mp3"), "html", null, true);
        echo "|";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("1.mp3"), "html", null, true);
        echo "&amp;height=20&amp;volume=50&amp;showvolume=1&amp;loop=1&amp;sliderwidth=6&amp;sliderheight=10&amp;loadingcolor=bd060d&amp;bgcolor=bd060d&amp;bgcolor1=fed200&amp;bgcolor2=f6980c&amp;sliderovercolor=bd060d&amp;buttonovercolor=bd060d&amp;showlist=0\" />
        </object>
    </div>
</div>

<div id=\"menu\">
    <ul class=\"center\">
        <li class=\"separator\"></li>
        <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_home"), "html", null, true);
        echo "\">ACCUEIL</a></li>
        <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_film"), "html", null, true);
        echo "\">LE FILM</a></li>
        <li><a href=\"#\">LA LISTE</a></li>
        <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_photo"), "html", null, true);
        echo "\">PHOTOS</a></li>
        <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_party"), "html", null, true);
        echo "\">IN GODS WE TRUST !</a></li>
        <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_order_listeResto"), "html", null, true);
        echo "\">THE GOODY FOOD</a></li>
        <li id=\"facebook\"><a href=\"#\"title=\"Rejoignez-nous sur Facebook !\"></a></li>
    </ul>
    
</div>";
    }

    public function getTemplateName()
    {
        return "GDSHomeBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
