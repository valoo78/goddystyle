<?php

/* GDSOrderBundle:Default:index.html.twig */
class __TwigTemplate_98183bf4d18f59c6b2a1fb62da80adcf extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "GDSOrderBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
