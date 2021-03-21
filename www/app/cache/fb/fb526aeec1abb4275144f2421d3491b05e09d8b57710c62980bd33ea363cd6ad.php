<?php

/* fillter/heatmap.twig */
class __TwigTemplate_188448ea129d665438329f29e639699cd38007a34a57808be97a50bec34ca4a3 extends Twig_Template
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
    \t\t\t<h5 class=\"pl-4 page-title\">";
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

<div class=\"search-body comparison\">
\t<div class=\"popup-list-open\"  >
\t\t<div class=\"popup-list-wrapper\">
\t\t\t<form action=\"#\" method=\"post\" class=\"j-forms\" id=\"criteria-form\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 float-left border-right criteria-group-left\">
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
\t\t\t\t\t\t\t<hr>";
        // line 44
        $this->displayBlock('location', $context, $blocks);
        // line 47
        $this->displayBlock('group', $context, $blocks);
        // line 50
        echo "\t\t\t\t\t\t\t 
\t\t\t\t\t\t</div>";
        // line 52
        $this->displayBlock('date', $context, $blocks);
        // line 55
        $this->displayBlock('event', $context, $blocks);
        // line 58
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
    }

    // line 44
    public function block_location($context, array $blocks = array())
    {
        // line 45
        $this->loadTemplate("fillter/location.twig", "fillter/heatmap.twig", 45)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 47
    public function block_group($context, array $blocks = array())
    {
        // line 48
        $this->loadTemplate("fillter/group.twig", "fillter/heatmap.twig", 48)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 52
    public function block_date($context, array $blocks = array())
    {
        // line 53
        $this->loadTemplate("fillter/date_heatmap.twig", "fillter/heatmap.twig", 53)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 55
    public function block_event($context, array $blocks = array())
    {
        // line 56
        $this->loadTemplate("fillter/event.twig", "fillter/heatmap.twig", 56)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    public function getTemplateName()
    {
        return "fillter/heatmap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 56,  118 => 55,  114 => 53,  111 => 52,  107 => 48,  104 => 47,  100 => 45,  97 => 44,  86 => 58,  84 => 55,  82 => 52,  79 => 50,  77 => 47,  75 => 44,  44 => 15,  39 => 13,  29 => 6,  23 => 1,);
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
/* <div class="search-body comparison">*/
/* 	<div class="popup-list-open"  >*/
/* 		<div class="popup-list-wrapper">*/
/* 			<form action="#" method="post" class="j-forms" id="criteria-form">*/
/* 				<div class="content">*/
/* 					<div class="row">*/
/* 						<div class="col-md-6 float-left border-right criteria-group-left">*/
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
/* 								{% include 'fillter/location.twig' with { 'base_url': base_url } %}*/
/* 							{% endblock %}*/
/* 							{% block group %}*/
/* 								{% include 'fillter/group.twig' with { 'base_url': base_url } %}*/
/* 							{% endblock %}*/
/* 							 */
/* 						</div>*/
/* 						 {% block date %}*/
/* 								{% include 'fillter/date_heatmap.twig' with { 'base_url': base_url } %}*/
/* 							{% endblock %}*/
/* 							{% block event %}*/
/* 								{% include 'fillter/event.twig' with { 'base_url': base_url } %}*/
/* 							{% endblock %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
