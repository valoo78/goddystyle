<?php

/* GDSHomeBundle:Party:party.html.twig */
class __TwigTemplate_ca1204e9bdcf002db345abc6c2fa7e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
            'content' => array($this, 'block_content'),
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GDSHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/css/orbit.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/css/party.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.5.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/js/jquery.orbit-1.2.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(window).load(function() {
            \$('#slider').orbit();
\t});
    </script>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        echo "  
    
    <div id=\"slider_container\">
        <div id=\"slider\"> 
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/salle.jpg"), "html", null, true);
        echo "\" alt=\"MyBoat\" />
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/salle3.jpg"), "html", null, true);
        echo "\" alt=\"MyBoat\" />
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/salle4.jpg"), "html", null, true);
        echo "\" alt=\"MyBoat\" />
            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/salle2.jpg"), "html", null, true);
        echo "\" alt=\"MyBoat\" />
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/terrasse.jpg"), "html", null, true);
        echo "\" alt=\"MyBoat\" />
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/salle_topview.jpg"), "html", null, true);
        echo "\" alt=\"MyBoat\" />
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/etage.jpg"), "html", null, true);
        echo "\" alt=\"MyBoat\" />
        </div>
    </div>
    
    <div id=\"infos\">
        <h1>In Gods We Trust !</h1>
    </div>
";
    }

    // line 39
    public function block_content2($context, array $blocks = array())
    {
        // line 40
        echo "    <div id=\"infos2\" class=\"column\">
        <p>
        Vente de prévente à l’ISEP au 28 rue Notre Dame des Champs 75006 Paris, les <strong>vendredi 6 et mardi 10 avril</strong>.<br />

        Vous pouvez aussi les acheter en ligne dans pas longtemps !!<br /><br />

        Les DJS prévus vont nous envoyez du FAAAAT toute la nuit :<br />
        - DJ Cuinat<br />
        - DJ Paul de Laf<br /><br />
        
        
        
        Accès :
        <ul id=\"metro\">
            <li id=\"ligne5\"><strong>Porte de Pantin</strong></li>
            <li id=\"ligne7\"><strong>Corentin Cariou</strong></li>
        </ul>
        <br />
        Contact si vous voulez poser des questions à vos Dieux préférés :<br />
        Margaux :06 63 36 52 19<br />
        Florent : 06 13 69 37 85<br />
        </p>
    </div>
    <div id=\"googlemap\" class=\"column\">
        <iframe width=\"400\" height=\"250\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=my+boat+paris&amp;aq=&amp;sll=46.75984,1.738281&amp;sspn=8.535382,21.643066&amp;ie=UTF8&amp;hq=my+boat&amp;hnear=Paris,+%C3%8Ele-de-France&amp;t=m&amp;ll=48.891527,2.388067&amp;spn=0.014108,0.034246&amp;z=14&amp;output=embed\"></iframe><br /><small><a href=\"http://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=my+boat+paris&amp;aq=&amp;sll=46.75984,1.738281&amp;sspn=8.535382,21.643066&amp;ie=UTF8&amp;hq=my+boat&amp;hnear=Paris,+%C3%8Ele-de-France&amp;t=m&amp;ll=48.891527,2.388067&amp;spn=0.014108,0.034246&amp;z=14\" style=\"color:#0000FF;text-align:left\">Agrandir le plan</a></small>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GDSHomeBundle:Party:party.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
