<?php

/* GDSHomeBundle:Film:film.html.twig */
class __TwigTemplate_ba7d45b4de1aecee76c425607852b396 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/css/film.css"), "html", null, true);
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
    <iframe src=\"http://www.youtube.com/embed/NTN_0ayKOJI\" frameborder=\"0\" allowfullscreen></iframe>
";
    }

    // line 16
    public function block_content2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GDSHomeBundle:Film:film.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
