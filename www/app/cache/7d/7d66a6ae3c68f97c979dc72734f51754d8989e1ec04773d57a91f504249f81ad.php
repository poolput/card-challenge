<?php

/* fillter/date_heatmap.twig */
class __TwigTemplate_bb2371a02498c99d30805603daa718d3232153f0d0eaf541c016469f47487604 extends Twig_Template
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
        echo "<div class=\"col-md-6 float-left criteria-group-right\">
\t<input type=\"hidden\" name=\"option_right\" checked  value=\"1\" class=\"group-right\">
\t<div class=\"row item-date\">
\t\t<div class=\"col-md-12 float-left\">
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\"float-left criteria-date-radio \">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"radio\" name=\"option_group_date\" checked value=\"1\"> Date
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"float-left text-left criteria-date-radio-label\">
\t\t\t\t\t<div class=\"block-fillter-start\">
\t\t\t\t\t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm criteria-date \" name=\"option_date_start\" id=\"option_date_start\" value=\"2020-08-25\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 float-left\">
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio\">
\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\" value=\"2\"> Week
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\" float-left text-right pt-1 criteria-date-radio-label\">
\t\t\t\t\t<div class=\"criteria-week text-left\"  >
\t\t\t\t\t\t<div class=\"  block-fillter-start \">
\t\t\t\t\t\t<select name=\"option_week_year_start\" id=\"option_week_year_start\" class=\"\">";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 5)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 29
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select name=\"option_week_start\" id=\"option_week_start\" class=\"ml-1\">";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["week_format"]) ? $context["week_format"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["week"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 float-left\">
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio\">
\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\" value=\"3\"> Month
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\" float-left text-left pt-1 criteria-date-radio-label\">
\t\t\t\t\t<div class=\"  criteria-week text-left \"  >
\t\t\t\t\t\t<div class=\"block-fillter-start\">
\t\t\t\t\t\t\t<select name=\"option_month_year_start\" id=\"option_month_year_start\" class=\"\">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 5)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"option_month_start\" id=\"option_month_start\" class=\"ml-1\">";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(12, 1));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 float-left\">
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio \">
\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\" value=\"4\"> Quarter
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\" float-left text-left pt-1 criteria-date-radio-label\">
\t\t\t\t\t<div class=\" input-group criteria-week text-left\"  >
\t\t\t\t\t\t<div class=\"block-fillter-start\">
\t\t\t\t\t\t\t<select name=\"option_quarter_year_start\" id=\"option_quarter_year_start\" class=\"\">";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 5)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"option_quarter_start\" id=\"option_quarter_start\" class=\"ml-1\">";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(4, 1));
        foreach ($context['_seq'] as $context["key"] => $context["quarter"]) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "\">Quarter&nbsp;";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['quarter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 float-left\">
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio\">
\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\" value=\"5\"> Year
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\" float-left text-left pt-1 criteria-date-radio-label\">
\t\t\t\t\t<div class=\" input-group criteria-week text-left\"  >
\t\t\t\t\t\t<div class=\"block-fillter-start\">
\t\t\t\t\t\t\t<select name=\"option_year_start\" id=\"option_year_start\" class=\"\">";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 5)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 101
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 float-left\">
\t\t\t<hr>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 float-left pt-1 criteria-label\">
\t\t\t\t\t<label> <input type=\"checkbox\" name=\"option_time\" value=\"1\"> Time
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-10 float-left text-right pt-1\">
\t\t\t\t\t<div class=\" input-group criteria-time text-right\"  >
\t\t\t\t\t\t<input type=\"text\" name=\"option_time_start\" value=\"\" placeholder=\"Start: 00:00\" class=\"input-sm form-control\">
\t\t\t\t\t\t<input type=\"text\" name=\"option_time_end\" value=\"\" placeholder=\"End: 23:59\" class=\"ml-1 input-sm form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 float-left\">
\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"col-md-2 float-left pt-1 criteria-label\">
\t\t\t\t\t<label><input type=\"checkbox\" name=\"option_recurrence\" id=\"option_recurrence\"> Day
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-10 float-left text-right pt-1\">
\t\t\t\t\t<div class=\"  input-group criteria-recurrence text-right \">
\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"2\" class=\"recurrence \">&nbsp;Monday</label>
\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"3\" class=\"recurrence \">&nbsp;Tuesday</label>
\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"4\" class=\"recurrence \">&nbsp;Wednesday</label>
\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"5\" class=\"recurrence \">&nbsp;Thursday</label>
\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"6\" class=\"recurrence \">&nbsp;Friday</label>
\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"7\" class=\"recurrence \">&nbsp;Saturday</label>
\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"1\" class=\"recurrence \">&nbsp;Sunday</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 float-left\">
\t\t\t<div class=\"row mt-2 \">
\t\t\t\t<div class=\"col-md-12 float-left text-right pt-1\">
\t\t\t\t\t<div class=\" input-group criteria-staff text-right\">
\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_entrance\" value=\"1\" >&nbsp;Entrance</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "fillter/date_heatmap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 103,  195 => 101,  191 => 100,  174 => 84,  164 => 82,  160 => 81,  157 => 79,  147 => 77,  143 => 76,  126 => 60,  116 => 58,  112 => 57,  109 => 55,  99 => 53,  95 => 52,  78 => 36,  68 => 34,  64 => 33,  61 => 31,  51 => 29,  47 => 28,  19 => 1,);
    }
}
/* <div class="col-md-6 float-left criteria-group-right">*/
/* 	<input type="hidden" name="option_right" checked  value="1" class="group-right">*/
/* 	<div class="row item-date">*/
/* 		<div class="col-md-12 float-left">*/
/* 			<div class="row ">*/
/* 				<div class="float-left criteria-date-radio ">*/
/* 					<label>*/
/* 						<input type="radio" name="option_group_date" checked value="1"> Date*/
/* 					</label>*/
/* 				</div>*/
/* 				<div class="float-left text-left criteria-date-radio-label">*/
/* 					<div class="block-fillter-start">*/
/* 						<input autocomplete="off" type="text" class="input-sm criteria-date " name="option_date_start" id="option_date_start" value="2020-08-25">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 float-left">*/
/* 			<div class="row ">*/
/* 				<div class=" float-left pt-1 criteria-date-radio">*/
/* 					<label> <input type="radio" name="option_group_date" value="2"> Week*/
/* 					</label>*/
/* 				</div>*/
/* 				<div class=" float-left text-right pt-1 criteria-date-radio-label">*/
/* 					<div class="criteria-week text-left"  >*/
/* 						<div class="  block-fillter-start ">*/
/* 						<select name="option_week_year_start" id="option_week_year_start" class="">*/
/* 							{% for year in range(("now"|date("Y")),("now"|date("Y"))-5) %}*/
/* 								<option value="{{ year }}">{{ year }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 						<select name="option_week_start" id="option_week_start" class="ml-1">*/
/* 							{% for key, week in week_format %}*/
/* 								<option value="{{ key }}">{{ week }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 float-left">*/
/* 			<div class="row ">*/
/* 				<div class=" float-left pt-1 criteria-date-radio">*/
/* 					<label> <input type="radio" name="option_group_date" value="3"> Month*/
/* 					</label>*/
/* 				</div>*/
/* 				<div class=" float-left text-left pt-1 criteria-date-radio-label">*/
/* 					<div class="  criteria-week text-left "  >*/
/* 						<div class="block-fillter-start">*/
/* 							<select name="option_month_year_start" id="option_month_year_start" class="">*/
/* 								{% for year in range(("now"|date("Y")),("now"|date("Y"))-5) %}*/
/* 									<option value="{{ year }}">{{ year }}</option>*/
/* 								{% endfor %}*/
/* 							</select>*/
/* 							<select name="option_month_start" id="option_month_start" class="ml-1">*/
/* 								{% for key, month in range( 12, 1) %}*/
/* 									<option value="{{ month }}">{{ (("now"|date("Y"))~'-'~ month ~'-1')|date("F") }}</option>*/
/* 								{% endfor %}*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 float-left">*/
/* 			<div class="row ">*/
/* 				<div class=" float-left pt-1 criteria-date-radio ">*/
/* 					<label> <input type="radio" name="option_group_date" value="4"> Quarter*/
/* 					</label>*/
/* 				</div>*/
/* 				<div class=" float-left text-left pt-1 criteria-date-radio-label">*/
/* 					<div class=" input-group criteria-week text-left"  >*/
/* 						<div class="block-fillter-start">*/
/* 							<select name="option_quarter_year_start" id="option_quarter_year_start" class="">*/
/* 								{% for year in range(("now"|date("Y")),("now"|date("Y"))-5) %}*/
/* 									<option value="{{ year }}">{{ year }}</option>*/
/* 								{% endfor %}*/
/* 							</select>*/
/* 							<select name="option_quarter_start" id="option_quarter_start" class="ml-1">*/
/* 								{% for key, quarter in range( 4, 1) %}*/
/* 									<option value="{{ quarter }}">Quarter&nbsp;{{ quarter }}</option>*/
/* 								{% endfor %}*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 float-left">*/
/* 			<div class="row ">*/
/* 				<div class=" float-left pt-1 criteria-date-radio">*/
/* 					<label> <input type="radio" name="option_group_date" value="5"> Year*/
/* 					</label>*/
/* 				</div>*/
/* 				<div class=" float-left text-left pt-1 criteria-date-radio-label">*/
/* 					<div class=" input-group criteria-week text-left"  >*/
/* 						<div class="block-fillter-start">*/
/* 							<select name="option_year_start" id="option_year_start" class="">*/
/* 								{% for year in range(("now"|date("Y")),("now"|date("Y"))-5) %}*/
/* 									<option value="{{ year }}">{{ year }}</option>*/
/* 								{% endfor %}*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 float-left">*/
/* 			<hr>*/
/* 			<div class="row">*/
/* 				<div class="col-md-2 float-left pt-1 criteria-label">*/
/* 					<label> <input type="checkbox" name="option_time" value="1"> Time*/
/* 					</label>*/
/* 				</div>*/
/* 				<div class="col-md-10 float-left text-right pt-1">*/
/* 					<div class=" input-group criteria-time text-right"  >*/
/* 						<input type="text" name="option_time_start" value="" placeholder="Start: 00:00" class="input-sm form-control">*/
/* 						<input type="text" name="option_time_end" value="" placeholder="End: 23:59" class="ml-1 input-sm form-control">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 float-left">*/
/* 			<div class="row mt-2">*/
/* 				<div class="col-md-2 float-left pt-1 criteria-label">*/
/* 					<label><input type="checkbox" name="option_recurrence" id="option_recurrence"> Day*/
/* 					</label>*/
/* 				</div>*/
/* 				<div class="col-md-10 float-left text-right pt-1">*/
/* 					<div class="  input-group criteria-recurrence text-right ">*/
/* 						<label class=""> <input type="checkbox" name="option_day[]" value="2" class="recurrence ">&nbsp;Monday</label>*/
/* 						<label class=""> <input type="checkbox" name="option_day[]" value="3" class="recurrence ">&nbsp;Tuesday</label>*/
/* 						<label class=""> <input type="checkbox" name="option_day[]" value="4" class="recurrence ">&nbsp;Wednesday</label>*/
/* 						<label class=""> <input type="checkbox" name="option_day[]" value="5" class="recurrence ">&nbsp;Thursday</label>*/
/* 						<label class=""> <input type="checkbox" name="option_day[]" value="6" class="recurrence ">&nbsp;Friday</label>*/
/* 						<label class=""> <input type="checkbox" name="option_day[]" value="7" class="recurrence ">&nbsp;Saturday</label>*/
/* 						<label class=""> <input type="checkbox" name="option_day[]" value="1" class="recurrence ">&nbsp;Sunday</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12 float-left">*/
/* 			<div class="row mt-2 ">*/
/* 				<div class="col-md-12 float-left text-right pt-1">*/
/* 					<div class=" input-group criteria-staff text-right">*/
/* 						<label class=""> <input type="checkbox" name="option_entrance" value="1" >&nbsp;Entrance</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
