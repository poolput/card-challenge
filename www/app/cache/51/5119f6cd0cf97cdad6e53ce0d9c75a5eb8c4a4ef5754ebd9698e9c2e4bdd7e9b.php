<?php

/* filter/event.twig */
class __TwigTemplate_d931c084c2085402cf8dc25d09856ca7e70ee03962b707baf81a8fa1d84f4471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row pt-2 mb-5 item-event hide\">
\t\t\t\t\t\t\t\t<div class=\" col-md-2 float-left pt-1 criteria-select\">
\t\t\t\t\t\t\t\t\t<select name=\"option_event_year\" id=\"event_year\">
\t\t\t\t\t\t\t\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 5
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-10 float-left text-right pt-1 pb-3 criteria-input criteria-search-event\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_search_event\" id=\"criteria_search_event\" value=\"\" placeholder=\"Event Name\" class=\"input-sm form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1 block-event\">
\t\t\t\t\t\t\t\t\t<div class=\"row item-event item-event-0\" data-id=\"0\" data-value=\"0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"event_0\" id=\"event_0\" value=\"0\" class=\"event_all\"> &nbsp;Select All
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1 block-event item-event-child\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row item-block-event item-event-";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" data-value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option_event[]\" id=\"event_";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" class=\"event\"> &nbsp; ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["event"], "name", array())), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "filter/event.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  69 => 23,  60 => 21,  57 => 20,  53 => 19,  39 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row pt-2 mb-5 item-event hide">*/
/* 								<div class=" col-md-2 float-left pt-1 criteria-select">*/
/* 									<select name="option_event_year" id="event_year">*/
/* 										{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/* 											<option value="{{ year }}">{{ year }}</option>*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 								<div class="col-md-10 float-left text-right pt-1 pb-3 criteria-input criteria-search-event">*/
/* 									<input type="text" name="option_search_event" id="criteria_search_event" value="" placeholder="Event Name" class="input-sm form-control">*/
/* 								</div>*/
/* 								<div class="col-md-12 float-left pb-1 block-event">*/
/* 									<div class="row item-event item-event-0" data-id="0" data-value="0">*/
/* 										<div class="col-md-12 float-left pb-1">*/
/* 											<input type="checkbox" name="event_0" id="event_0" value="0" class="event_all"> &nbsp;Select All*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								{% for event in events %}*/
/* 									<div class="col-md-12 float-left pb-1 block-event item-event-child">*/
/* 										<div class="row item-block-event item-event-{{ event.id }}" data-id="{{ event.id }}" data-value="{{ event.name }}">*/
/* 											<div class="col-md-12 float-left pb-1">*/
/* 												<input type="checkbox" name="option_event[]" id="event_{{ event.id }}" value="{{ event.id }}" class="event"> &nbsp; {{ event.name|capitalize }}*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
