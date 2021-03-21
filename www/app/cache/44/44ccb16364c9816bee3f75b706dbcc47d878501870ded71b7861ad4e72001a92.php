<?php

/* pages/dashboard.php */
class __TwigTemplate_d4588ed4bef8674fda7001630abcfe5b6fc103491775e15515ea05e815677678 extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/index.html", "pages/dashboard.php", 1);
        $this->blocks = array(
            'head' => array(
                $this,
                'block_head'
            ),
            'content' => array(
                $this,
                'block_content'
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <h1>Index</h1>
    <p class=\"important\">
        Welcome on my awesome homepage.
    </p>
";
    }

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
            48 => 13,
            45 => 12,
            35 => 5,
            32 => 4,
            29 => 3,
            11 => 1
        );
    }
}
/* {% extends "templates/index.html" %}*/
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
/* */
