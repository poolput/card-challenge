<?php

/* filter/criteria.twig */
class __TwigTemplate_99af5bbd21179e0a6ff3616fb734d447d0ddc971352f2c3de2167174cfbcc933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'location' => array($this, 'block_location'),
            'group' => array($this, 'block_group'),
            'date' => array($this, 'block_date'),
            'event' => array($this, 'block_event'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row seacrh-header\" id=\"criteria\">
\t<div id=\"btn-title-header-block\">
\t\t<div class=\" row\">
\t\t\t<div class=\"col-md-8 float-left \">
    \t\t\t<h5 class=\"pl-4 page-title\">
    \t\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
        echo "
    \t\t\t</h5>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"btn-date-header-block\">
    \t<div class=\"input-daterange input-group\" id=\"datepicker\">
    \t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm form-control date-start\" name=\"start\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"> 
    \t\t<span class=\"input-to pt-2\">-</span> 
    \t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm form-control date-end\" name=\"end\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
    \t</div>
    </div>
\t<div id=\"btn-search-header-block\">
\t\t<button class=\"popup-list-open btn btn-outline-secondary  waves-effect waves-light \" type=\"button\" id=\"search-more\">
\t\t\tMore <span class=\"triangle_down\"></span>
\t\t</button>
\t\t<button class=\"btn btn-secondary \" id=\"search\">Search</button>
\t</div>
</div>

<div class=\"search-body\">
\t<div class=\"popup-list-open\"  >
\t\t<div class=\"popup-list-wrapper\">
\t\t\t<form action=\"#\" method=\"post\" class=\"j-forms\" id=\"criteria-form\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 float-left border-right criteria-group-left\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option_left_select\" id=\"group-header-left\" value=\"1\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option_right_select\" id=\"group-header-right\" value=\"1\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 float-left\">
\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_left\" checked value=\"1\" class=\"group-left\">&nbsp; Location
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 float-left \">
\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_left\" value=\"2\" class=\"group-left\">&nbsp; Group
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t";
        // line 46
        $this->displayBlock('location', $context, $blocks);
        // line 49
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('group', $context, $blocks);
        // line 52
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 float-left criteria-group-right\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 float-left\">
\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_right\" checked  value=\"1\" class=\"group-right\">&nbsp; Date
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--<div class=\"col-md-6 float-left\" id=\"criteria-option-event\">
\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_right\" value=\"2\" class=\"group-right\">&nbsp; Event
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t";
        // line 65
        $this->displayBlock('date', $context, $blocks);
        // line 68
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('event', $context, $blocks);
        // line 71
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
    }

    // line 46
    public function block_location($context, array $blocks = array())
    {
        // line 47
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("filter/location.twig", "filter/criteria.twig", 47)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
        // line 48
        echo "\t\t\t\t\t\t\t";
    }

    // line 49
    public function block_group($context, array $blocks = array())
    {
        // line 50
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("filter/group.twig", "filter/criteria.twig", 50)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
        // line 51
        echo "\t\t\t\t\t\t\t";
    }

    // line 65
    public function block_date($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("filter/date.twig", "filter/criteria.twig", 66)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
        // line 67
        echo "\t\t\t\t\t\t\t";
    }

    // line 68
    public function block_event($context, array $blocks = array())
    {
        // line 69
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("filter/event.twig", "filter/criteria.twig", 69)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
        // line 70
        echo "\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "filter/criteria.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 70,  149 => 69,  146 => 68,  142 => 67,  139 => 66,  136 => 65,  132 => 51,  129 => 50,  126 => 49,  122 => 48,  119 => 47,  116 => 46,  104 => 71,  101 => 68,  99 => 65,  84 => 52,  81 => 49,  79 => 46,  45 => 15,  40 => 13,  30 => 6,  23 => 1,);
    }
}
/* <div class="row seacrh-header" id="criteria">*/
/* 	<div id="btn-title-header-block">*/
/* 		<div class=" row">*/
/* 			<div class="col-md-8 float-left ">*/
/*     			<h5 class="pl-4 page-title">*/
/*     				{{ page_title }}*/
/*     			</h5>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div id="btn-date-header-block">*/
/*     	<div class="input-daterange input-group" id="datepicker">*/
/*     		<input autocomplete="off" type="text" class="input-sm form-control date-start" name="start" value="{{ 'now'|date('Y-m-d') }}"> */
/*     		<span class="input-to pt-2">-</span> */
/*     		<input autocomplete="off" type="text" class="input-sm form-control date-end" name="end" value="{{ 'now'|date('Y-m-d') }}">*/
/*     	</div>*/
/*     </div>*/
/* 	<div id="btn-search-header-block">*/
/* 		<button class="popup-list-open btn btn-outline-secondary  waves-effect waves-light " type="button" id="search-more">*/
/* 			More <span class="triangle_down"></span>*/
/* 		</button>*/
/* 		<button class="btn btn-secondary " id="search">Search</button>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="search-body">*/
/* 	<div class="popup-list-open"  >*/
/* 		<div class="popup-list-wrapper">*/
/* 			<form action="#" method="post" class="j-forms" id="criteria-form">*/
/* 				<div class="content">*/
/* 					<div class="row">*/
/* 						<div class="col-md-6 float-left border-right criteria-group-left">*/
/* 							<input type="hidden" name="option_left_select" id="group-header-left" value="1">*/
/* 							<input type="hidden" name="option_right_select" id="group-header-right" value="1">*/
/* 							<div class="row">*/
/* 								<div class="col-md-6 float-left">*/
/* 									<label> <input type="radio" name="option_left" checked value="1" class="group-left">&nbsp; Location*/
/* 									</label>*/
/* 								</div>*/
/* 								<div class="col-md-6 float-left ">*/
/* 									<label> <input type="radio" name="option_left" value="2" class="group-left">&nbsp; Group*/
/* 									</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 							{% block location %}*/
/* 								{% include 'filter/location.twig' with { 'base_url': base_url } %}*/
/* 							{% endblock %}*/
/* 							{% block group %}*/
/* 								{% include 'filter/group.twig' with { 'base_url': base_url } %}*/
/* 							{% endblock %}*/
/* 						</div>*/
/* 						<div class="col-md-6 float-left criteria-group-right">*/
/* 							<div class="row">*/
/* 								<div class="col-md-6 float-left">*/
/* 									<label> <input type="radio" name="option_right" checked  value="1" class="group-right">&nbsp; Date*/
/* 									</label>*/
/* 								</div>*/
/* 								<!--<div class="col-md-6 float-left" id="criteria-option-event">*/
/* 									<label> <input type="radio" name="option_right" value="2" class="group-right">&nbsp; Event*/
/* 									</label>*/
/* 								</div>-->*/
/* 							</div>*/
/* 							<hr>*/
/* 							{% block date %}*/
/* 								{% include 'filter/date.twig' with { 'base_url': base_url} %}*/
/* 							{% endblock %}*/
/* 							{% block event %}*/
/* 								{% include 'filter/event.twig' with { 'base_url': base_url } %}*/
/* 							{% endblock %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
