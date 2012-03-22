<?php

/* GDSPhotoBundle:Default:index.html.twig */
class __TwigTemplate_7b97e39f23689a9b3ce75c1cc51cc52e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsphoto/css/photo.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsphoto/css/galleriffic-2.css"), "html", null, true);
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
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsphoto/js/jquery-1.3.2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsphoto/js/jquery.galleriffic.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gdsphoto/js/jquery.opacityrollover.js"), "html", null, true);
        echo "\"></script>
    <!-- We only want the thunbnails to display when javascript is disabled -->
    <script type=\"text/javascript\">
\tdocument.write('<style>.noscript { display: none; }</style>');
    </script>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        echo " 
    
    <div id=\"container\">

\t\t\t\t<!-- Start Advanced Gallery Html Containers -->
\t\t\t\t<div id=\"gallery\" class=\"content\">
\t\t\t\t\t<div id=\"controls\" class=\"controls\"></div>
\t\t\t\t\t<div class=\"slideshow-container\">
\t\t\t\t\t\t<div id=\"loading\" class=\"loader\"></div>
\t\t\t\t\t\t<div id=\"slideshow\" class=\"slideshow\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"caption\" class=\"caption-container\"></div>
\t\t\t\t</div>
\t\t\t\t<div id=\"thumbs\" class=\"navigation\">
\t\t\t\t\t<ul class=\"thumbs noscript\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" name=\"leaf\" href=\"http://farm4.static.flickr.com/3261/2538183196_8baf9a8015.jpg\" title=\"Title #0\">
\t\t\t\t\t\t\t\t<img src=\"http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_s.jpg\" alt=\"Title #0\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #0</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" name=\"drop\" href=\"http://farm3.static.flickr.com/2404/2538171134_2f77bc00d9.jpg\" title=\"Title #1\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2404/2538171134_2f77bc00d9_s.jpg\" alt=\"Title #1\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\tAny html can be placed here ...
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" name=\"bigleaf\" href=\"http://farm3.static.flickr.com/2093/2538168854_f75e408156.jpg\" title=\"Title #2\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2093/2538168854_f75e408156_s.jpg\" alt=\"Title #2\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2093/2538168854_f75e408156_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #2</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
                                                <li>
\t\t\t\t\t\t\t<a class=\"thumb\" name=\"lizard\" href=\"http://farm4.static.flickr.com/3153/2538167690_c812461b7b.jpg\" title=\"Title #3\">
\t\t\t\t\t\t\t\t<img src=\"http://farm4.static.flickr.com/3153/2538167690_c812461b7b_s.jpg\" alt=\"Title #3\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm4.static.flickr.com/3153/2538167690_c812461b7b_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #3</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm4.static.flickr.com/3150/2538167224_0a6075dd18.jpg\" title=\"Title #4\">
\t\t\t\t\t\t\t\t<img src=\"http://farm4.static.flickr.com/3150/2538167224_0a6075dd18_s.jpg\" alt=\"Title #4\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm4.static.flickr.com/3150/2538167224_0a6075dd18_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #4</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm4.static.flickr.com/3204/2537348699_bfd38bd9fd.jpg\" title=\"Title #5\">
\t\t\t\t\t\t\t\t<img src=\"http://farm4.static.flickr.com/3204/2537348699_bfd38bd9fd_s.jpg\" alt=\"Title #5\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm4.static.flickr.com/3204/2537348699_bfd38bd9fd_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #5</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm4.static.flickr.com/3124/2538164582_b9d18f9d1b.jpg\" title=\"Title #6\">
\t\t\t\t\t\t\t\t<img src=\"http://farm4.static.flickr.com/3124/2538164582_b9d18f9d1b_s.jpg\" alt=\"Title #6\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm4.static.flickr.com/3124/2538164582_b9d18f9d1b_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #6</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm4.static.flickr.com/3205/2538164270_4369bbdd23.jpg\" title=\"Title #7\">
\t\t\t\t\t\t\t\t<img src=\"http://farm4.static.flickr.com/3205/2538164270_4369bbdd23_s.jpg\" alt=\"Title #7\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm4.static.flickr.com/3205/2538164270_c7d1646ecf_o.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #7</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm4.static.flickr.com/3211/2538163540_c2026243d2.jpg\" title=\"Title #8\">
\t\t\t\t\t\t\t\t<img src=\"http://farm4.static.flickr.com/3211/2538163540_c2026243d2_s.jpg\" alt=\"Title #8\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm4.static.flickr.com/3211/2538163540_c2026243d2_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #8</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2315/2537343449_f933be8036.jpg\" title=\"Title #9\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2315/2537343449_f933be8036_s.jpg\" alt=\"Title #9\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2315/2537343449_f933be8036_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #9</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2167/2082738157_436d1eb280.jpg\" title=\"Title #10\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2167/2082738157_436d1eb280_s.jpg\" alt=\"Title #10\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2167/2082738157_436d1eb280_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #10</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2342/2083508720_fa906f685e.jpg\" title=\"Title #11\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2342/2083508720_fa906f685e_s.jpg\" alt=\"Title #11\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2342/2083508720_fa906f685e_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #11</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2132/2082721339_4b06f6abba.jpg\" title=\"Title #12\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2132/2082721339_4b06f6abba_s.jpg\" alt=\"Title #12\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2132/2082721339_4b06f6abba_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #12</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2139/2083503622_5b17f16a60.jpg\" title=\"Title #13\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2139/2083503622_5b17f16a60_s.jpg\" alt=\"Title #13\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2139/2083503622_5b17f16a60_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #13</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2041/2083498578_114e117aab.jpg\" title=\"Title #14\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2041/2083498578_114e117aab_s.jpg\" alt=\"Title #14\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2041/2083498578_114e117aab_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #14</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2149/2082705341_afcdda0663.jpg\" title=\"Title #15\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2149/2082705341_afcdda0663_s.jpg\" alt=\"Title #15\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2149/2082705341_afcdda0663_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #15</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2014/2083478274_26775114dc.jpg\" title=\"Title #16\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2014/2083478274_26775114dc_s.jpg\" alt=\"Title #16\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2014/2083478274_26775114dc_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #16</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2194/2083464534_122e849241.jpg\" title=\"Title #17\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2194/2083464534_122e849241_s.jpg\" alt=\"Title #17\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2194/2083464534_122e849241_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #17</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm4.static.flickr.com/3127/2538173236_b704e7622e.jpg\" title=\"Title #18\">
\t\t\t\t\t\t\t\t<img src=\"http://farm4.static.flickr.com/3127/2538173236_b704e7622e_s.jpg\" alt=\"Title #18\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm4.static.flickr.com/3127/2538173236_b704e7622e_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #18</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2375/2538172432_3343a47341.jpg\" title=\"Title #19\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2375/2538172432_3343a47341_s.jpg\" alt=\"Title #19\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2375/2538172432_3343a47341_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #19</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2353/2083476642_d00372b96f.jpg\" title=\"Title #20\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2353/2083476642_d00372b96f_s.jpg\" alt=\"Title #20\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2353/2083476642_d00372b96f_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #20</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm3.static.flickr.com/2201/1502907190_7b4a2a0e34.jpg\" title=\"Title #21\">
\t\t\t\t\t\t\t\t<img src=\"http://farm3.static.flickr.com/2201/1502907190_7b4a2a0e34_s.jpg\" alt=\"Title #21\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm3.static.flickr.com/2201/1502907190_7b4a2a0e34_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #21</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm2.static.flickr.com/1116/1380178473_fc640e097a.jpg\" title=\"Title #22\">
\t\t\t\t\t\t\t\t<img src=\"http://farm2.static.flickr.com/1116/1380178473_fc640e097a_s.jpg\" alt=\"Title #22\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm2.static.flickr.com/1116/1380178473_fc640e097a_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #22</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"thumb\" href=\"http://farm2.static.flickr.com/1260/930424599_e75865c0d6.jpg\" title=\"Title #23\">
\t\t\t\t\t\t\t\t<img src=\"http://farm2.static.flickr.com/1260/930424599_e75865c0d6_s.jpg\" alt=\"Title #23\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t<a href=\"http://farm2.static.flickr.com/1260/930424599_e75865c0d6_b.jpg\">Download Original</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"image-title\">Title #23</div>
\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t</div>
    <script type=\"text/javascript\">
\t\t\tjQuery(document).ready(function(\$) {
\t\t\t\t// We only want these styles applied when javascript is enabled
\t\t\t\t\$('div.navigation').css({'width' : '300px', 'float' : 'left'});
\t\t\t\t\$('div.content').css('display', 'block');

\t\t\t\t// Initially set opacity on thumbs and add
\t\t\t\t// additional styling for hover effect on thumbs
\t\t\t\tvar onMouseOutOpacity = 0.67;
\t\t\t\t\$('#thumbs ul.thumbs li').opacityrollover({
\t\t\t\t\tmouseOutOpacity:   onMouseOutOpacity,
\t\t\t\t\tmouseOverOpacity:  1.0,
\t\t\t\t\tfadeSpeed:         'fast',
\t\t\t\t\texemptionSelector: '.selected'
\t\t\t\t});
\t\t\t\t
\t\t\t\t// Initialize Advanced Galleriffic Gallery
\t\t\t\tvar gallery = \$('#thumbs').galleriffic({
\t\t\t\t\tdelay:                     2500,
\t\t\t\t\tnumThumbs:                 15,
\t\t\t\t\tpreloadAhead:              10,
\t\t\t\t\tenableTopPager:            true,
\t\t\t\t\tenableBottomPager:         true,
\t\t\t\t\tmaxPagesToShow:            7,
\t\t\t\t\timageContainerSel:         '#slideshow',
\t\t\t\t\tcontrolsContainerSel:      '#controls',
\t\t\t\t\tcaptionContainerSel:       '#caption',
\t\t\t\t\tloadingContainerSel:       '#loading',
\t\t\t\t\trenderSSControls:          true,
\t\t\t\t\trenderNavControls:         true,
\t\t\t\t\tplayLinkText:              'Play Slideshow',
\t\t\t\t\tpauseLinkText:             'Pause Slideshow',
\t\t\t\t\tprevLinkText:              '&lsaquo; Previous Photo',
\t\t\t\t\tnextLinkText:              'Next Photo &rsaquo;',
\t\t\t\t\tnextPageLinkText:          'Next &rsaquo;',
\t\t\t\t\tprevPageLinkText:          '&lsaquo; Prev',
\t\t\t\t\tenableHistory:             false,
\t\t\t\t\tautoStart:                 false,
\t\t\t\t\tsyncTransitions:           true,
\t\t\t\t\tdefaultTransitionDuration: 900,
\t\t\t\t\tonSlideChange:             function(prevIndex, nextIndex) {
\t\t\t\t\t\t// 'this' refers to the gallery, which is an extension of \$('#thumbs')
\t\t\t\t\t\tthis.find('ul.thumbs').children()
\t\t\t\t\t\t\t.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
\t\t\t\t\t\t\t.eq(nextIndex).fadeTo('fast', 1.0);
\t\t\t\t\t},
\t\t\t\t\tonPageTransitionOut:       function(callback) {
\t\t\t\t\t\tthis.fadeTo('fast', 0.0, callback);
\t\t\t\t\t},
\t\t\t\t\tonPageTransitionIn:        function() {
\t\t\t\t\t\tthis.fadeTo('fast', 1.0);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t</script>
    
";
    }

    // line 404
    public function block_content2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GDSPhotoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
