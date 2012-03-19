<?php

/* GDSHomeBundle:Default:index.html.twig */
class __TwigTemplate_647e0d70550348cf08c320c4b984bb6e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/css/home.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/js/jquery.orbit.min.js"), "html", null, true);
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
    <ul id=\"message\">
        <li>Chères isépiennes, chers isépiens,</li>
        <li class=\"g\">rands et petits,</li>
        <li class=\"o\">isifs et travailleurs,</li>
        <li class=\"d\">éfaitistes et Optimistes,</li>
        <li class=\"d\">EBOUT ET REJOIGNEZ NOUS !!!</li>
        <li class=\"y\"> SI PARTIIIIIIII !!!!</li>
        <li></li>
        <li class=\"s\">autez, rampez, plantez, nagez,</li>
        <li class=\"t\">out sera prévu pour ce COMING OUT !!</li>
        <li class=\"y\">ALLAAAAAAH !!!</li>
        <li class=\"l\">a campagne démarre, ca y est !</li>
        <li class=\"e\">t…</li>
    </ul>
    
    <div id=\"slider_container\">
        <div id=\"slider\"> 
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/images/goddystyle.png"), "html", null, true);
        echo "\" alt=\"Goddystyle\" />
            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/images/salle.jpg"), "html", null, true);
        echo "\" alt=\"MyBoat\" />
        </div>
    </div>
";
    }

    // line 44
    public function block_content2($context, array $blocks = array())
    {
        // line 45
        echo "    <p><span>… Goddy Style</span> vous a prévu un programme de ouf ! Soirée, concert, open bouffe, open activités, open plaisir, open kiff … Tout a été pensé pour vous !
    Rentrez dans l’univers des Dieux Grecs, monde des rêves et des enfers.
    </p>
    <p><span>Pendant une semaine</span>, vous vous retrouverez dans un monde méconnu, une ambiance que vous n’aurez jamais vécue, une atmosphère que vous ne vivrez plus jamais.
\tParadis, Enfer, Zeus, Hadès, Nymphes, Titans, tout le monde sera au rendez-vous du 9 au 13 avril pour une semaine de folie au sein de l’Olympe !
    </p>
";
    }

    public function getTemplateName()
    {
        return "GDSHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
