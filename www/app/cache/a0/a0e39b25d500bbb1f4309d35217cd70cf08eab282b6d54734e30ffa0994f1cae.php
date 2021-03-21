<?php

/* layout/option.html */
class __TwigTemplate_6158aceb6ec9b62d966739ad3f9e40964a8c642e8770dd351e8832d21d7c591f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'option' => array($this, 'block_option'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('option', $context, $blocks);
    }

    public function block_option($context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"row seacrh-header\">
\t<div class=\"col-lg-4 offset-lg-4 offset-sm-3 col-sm-6 offset-sm-1 col-xs-12\">
\t\t\t<div class=\"input-daterange input-group\" id=\"datepicker\">
\t\t\t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm form-control\" name=\"start\">
\t\t\t\t<span class=\"input-to\">to</span>
\t\t\t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm form-control\" name=\"end\">
\t\t\t\t<button class=\"btn btn-primary input-group-addon\" id=\"basic-addon1\">Search</button>
\t\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "layout/option.html";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
/* {% block option %}*/
/* */
/* <div class="row seacrh-header">*/
/* 	<div class="col-lg-4 offset-lg-4 offset-sm-3 col-sm-6 offset-sm-1 col-xs-12">*/
/* 			<div class="input-daterange input-group" id="datepicker">*/
/* 				<input autocomplete="off" type="text" class="input-sm form-control" name="start">*/
/* 				<span class="input-to">to</span>*/
/* 				<input autocomplete="off" type="text" class="input-sm form-control" name="end">*/
/* 				<button class="btn btn-primary input-group-addon" id="basic-addon1">Search</button>*/
/* 			</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
