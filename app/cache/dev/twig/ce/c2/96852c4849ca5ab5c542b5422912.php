<?php

/* GDSHomeBundle::layout.html.twig */
class __TwigTemplate_cec296852c4849ca5ab5c542b5422912 extends Twig_Template
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

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>GoddyStyle</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        ";
        // line 11
        $this->displayBlock('scripts', $context, $blocks);
        // line 13
        echo "        <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
    </head>
    
    
    <body>
        ";
        // line 20
        echo "        ";
        $this->env->loadTemplate("GDSHomeBundle::header.html.twig")->display($context);
        // line 21
        echo "            
        <div id=\"body\">     
            <div class=\"center\" id=\"content\">                           
                ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "                <div style=\"clear:both;\"></div>
            </div>
        </div>
        
        <div id=\"body2\">     
            <div class=\"center\" id=\"content2\">                           
                ";
        // line 32
        $this->displayBlock('content2', $context, $blocks);
        // line 34
        echo "                <div style=\"clear:both;\"></div>
            </div>
        </div>   
            
            
        ";
        // line 40
        echo "        ";
        $this->env->loadTemplate("GDSHomeBundle::footer.html.twig")->display($context);
        // line 41
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/css/standard.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 11
    public function block_scripts($context, array $blocks = array())
    {
        // line 12
        echo "        ";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "                ";
    }

    // line 32
    public function block_content2($context, array $blocks = array())
    {
        // line 33
        echo "                ";
    }

    public function getTemplateName()
    {
        return "GDSHomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
