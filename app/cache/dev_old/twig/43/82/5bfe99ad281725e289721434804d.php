<?php

/* GDSOrderBundle:Liste:index.html.twig */
class __TwigTemplate_43825bfe99ad281725e289721434804d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Livraison de repas</title>
    </head>
    <body>
        <h1>Choisissez votre restaurant</h1>

        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"GoddyStyle\" height=\"200\" width=\"300\" />
    </body>
</html>
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
