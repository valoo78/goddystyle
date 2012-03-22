<?php

/* GDSOrderBundle:Liste:index.html.twig */
class __TwigTemplate_43825bfe99ad281725e289721434804d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsorder/css/order.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 8
    public function block_scripts($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        echo "  
";
    }

    // line 15
    public function block_content2($context, array $blocks = array())
    {
        // line 16
        echo "    <h1>Liste des restaurants</h1>
    <ul id=\"liste_resto\">
        <li>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_order_menu", array("resto" => "mcdo")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsorder/images/mcdo.png"), "html", null, true);
        echo "\" alt=\"McDonald\" />
            </a>
        </li>
        
        <li>
            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_order_menu", array("resto" => "subway")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsorder/images/subway.jpg"), "html", null, true);
        echo "\" alt=\"Subway\" />
            </a>
        </li>
        
        <li>
            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_order_menu", array("resto" => "grec")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsorder/images/grec.jpg"), "html", null, true);
        echo "\" alt=\"MacDoner\" />
            </a>
        </li>
        
        <li>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_order_menu", array("resto" => "nooi")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsorder/images/nooi.jpg"), "html", null, true);
        echo "\" alt=\"Nooi\" />
            </a>
        </li>
        
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_order_menu", array("resto" => "thevenin")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsorder/images/thevenin.jpg"), "html", null, true);
        echo "\" alt=\"Thevenin\" />
            </a>
        </li>
        
        <li>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_order_menu", array("resto" => "bdoree")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsorder/images/brioche.jpg"), "html", null, true);
        echo "\" alt=\"Brioche Dorée\" />
            </a>
        </li>
        
        <li>
            <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_order_menu", array("resto" => "asie")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsorder/images/china.jpg"), "html", null, true);
        echo "\" alt=\"Chinois\" />
            </a>
        </li>
        
        <li>
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GDS_order_menu", array("resto" => "wokbar")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsorder/images/wokbar.jpg"), "html", null, true);
        echo "\" alt=\"Wokbar\" />
            </a>
        </li>
        
        <li class=\"clearer\"></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "GDSOrderBundle:Liste:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
