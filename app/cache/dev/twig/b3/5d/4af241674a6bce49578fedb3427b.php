<?php

/* GDSHomeBundle::topbar.html.twig */
class __TwigTemplate_b35d4af241674a6bce49578fedb3427b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"topbar\">
    <div class=\"center\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdshome/images/logo.png"), "html", null, true);
        echo "\" alt=\"Goddystyle\" id=\"logo\" />            
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "GDSHomeBundle::topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
