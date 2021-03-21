<?php

/* pages/dashboard.php */
class __TwigTemplate_7b9acb244ea285b2cec47ff5698384f15b8f80a5dc71050d7e09377c8dd2dd80 extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/dashboard.php", 1);
        $this->blocks = array(
            'head' => array(
                $this,
                'block_head'
            ),
            'content' => array(
                $this,
                'block_content'
            ),
            'footer' => array(
                $this,
                'block_footer'
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <h1>Index</h1>
    <p class=\"important\">
        Welcome on my awesome homepage.
    </p>";
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {}

    public function getTemplateName()
    {
        return "pages/dashboard.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(
            52 => 19,
            45 => 13,
            42 => 12,
            33 => 5,
            30 => 3,
            11 => 1
        );
    }
}
/* {% extends "layout/index.html" %}*/
/*  */
/* {% block head %}*/
/* */
/*     {{ parent() }}*/
/*     */
/*     <style type="text/css">*/
/*         .important { color: #336699; }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Index</h1>*/
/*     <p class="important">*/
/*         Welcome on my awesome homepage.*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*  */
/* {% endblock %}*/
/* */
/* */
/* */
