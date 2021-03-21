<?php

/* templates/index.html */
class __TwigTemplate_702d8955bd15eb2ebf9165c4c579a0e9d2f8d6ebf27cf96a9365f4f9dbe143d2 extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array(
                $this,
                'block_header'
            ),
            'top' => array(
                $this,
                'block_top'
            ),
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

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 5
        echo "
<body class=\"\">


\t";
        // line 9
        $this->displayBlock('top', $context, $blocks);
        // line 13
        echo "
\t";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "\t
\t";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('footer', $context, $blocks);
        // line 28
        echo "
</body>
</html>";
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        $this->loadTemplate("templates/header.html", "templates/index.html", 2)->display(array_merge($context, array(
            "base_url" => (isset($context["base_url"]) ? $context["base_url"] : null)
        )));
        // line 3
        echo "
";
    }

    // line 9
    public function block_top($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->loadTemplate("templates/top.html", "templates/index.html", 10)->display(array_merge($context, array(
            "base_url" => (isset($context["base_url"]) ? $context["base_url"] : null)
        )));
        // line 11
        echo "\t
\t";
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        // line 15
        echo "\t\t";
        $this->loadTemplate("templates/menu.html", "templates/index.html", 15)->display($context);
        // line 16
        echo "\t\t
\t";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "\t
\t
\t";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        $this->loadTemplate("templates/footer.html", "templates/index.html", 25)->display(array_merge($context, array(
            "base_url" => (isset($context["base_url"]) ? $context["base_url"] : null)
        )));
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "templates/index.html";
    }

    public function getDebugInfo()
    {
        return array(
            101 => 26,
            99 => 25,
            96 => 24,
            90 => 20,
            87 => 19,
            82 => 16,
            79 => 15,
            76 => 14,
            71 => 11,
            68 => 10,
            65 => 9,
            60 => 3,
            58 => 2,
            55 => 1,
            49 => 28,
            47 => 24,
            44 => 23,
            42 => 19,
            39 => 18,
            37 => 14,
            34 => 13,
            32 => 9,
            26 => 5,
            24 => 1
        );
    }
}
/* {% block header %}*/
/* {% include 'templates/header.html' with { 'base_url': base_url } %}*/
/* */
/* {% endblock %}*/
/* */
/* <body class="">*/
/* */
/* */
/* 	{% block top %}*/
/* 	{% include 'templates/top.html' with { 'base_url': base_url } %}*/
/* 	*/
/* 	{% endblock %}*/
/* */
/* 	{% block head %}*/
/* 		{% include 'templates/menu.html' %}*/
/* 		*/
/* 	{% endblock %}*/
/* 	*/
/* 	{% block content %}*/
/* 	*/
/* 	*/
/* 	{% endblock %}*/
/* */
/* {% block footer %}*/
/* {% include 'templates/footer.html' with { 'base_url': base_url } %}*/
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
