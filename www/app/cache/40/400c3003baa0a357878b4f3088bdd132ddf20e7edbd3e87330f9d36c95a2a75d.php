<?php

/* filter/criteria_floorplan.twig */
class __TwigTemplate_d0f28a16759a48592b115ee110ee7ba566dc2ec8a69c5bb3acab40ceb7875681 extends Twig_Template
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
        echo "<style type=\"text/css\">
\t#btn-date-header-block{
\t\tpadding-left: 30px;
\t}

\t.criteria-branch_select{
\t\tmargin-top: -14px;
    \tpadding-left: 30px;
\t}

\t.criteria-working_time{
    \tpadding-left: 30px;
\t}

\t.criteria-seach{
    \tmargin-top: -14px;
    \tpadding-right: 30px;
\t}
\t.seacrh-header{
\t\tpadding: 6px;
\t}

\t.popup-list-wrapper {
\t    max-width: 374px !important;
\t}

\t.popup-list-wrapper .content {
\t    min-height: 238px;
\t}

\t.block-fillter-end {
\t     max-width: unset; 
\t}

\t#option_week_end{
\t    max-width: 174px !important;
\t}

\t#option_month_end{
\t    max-width: 174px !important;
\t}

\t.criteria-date-radio {
\t    flex: 0 0 25%;
\t    max-width: 25%;
\t    padding-left: 15px;
\t}

\t.criteria-date-radio-label {
\t    flex: 0 0 75%;
\t    max-width: 75%;
\t}

</style>
<div class=\"row seacrh-header\" id=\"criteria\">
\t\t<h5 class=\"pl-4 page-title\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
        echo "</h5>
\t<div class=\"col\">
\t</div>
\t<div class=\"col-md-3 criteria-branch_select\">
\t\t<select class=\"form-control\" id=\"branch_id\" name=\"branch_id\">
\t\t\t<option selected value=\"\">-- Select Branch --</option>";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 63
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t</select>
\t</div>
\t
\t<div class=\"col-md-3 criteria-branch_select\">
\t\t<select class=\"form-control\" id=\"map_id\" name=\"map_id\">
\t\t\t<option selected value=\"\">-- Select Floorplan --</option>
\t\t</select>
\t</div>

    <!-- <div class=\"col-md-3 criteria-working_time\"> -->
\t\t<!-- <input type=\"checkbox\" name=\"working_time\" id=\"working_time\" value=\"1\" class=\"branch\"> &nbsp; 
\t\t<label for=\"working_time\"> Time : <span id=\"working_time_txt\">10:00-22:00</span> </label> -->
\t<!-- </div> -->

\t<div class=\"col criteria-seach text-right\">

\t\t<button class=\"popup-list-open btn btn-outline-secondary  waves-effect waves-light \" type=\"button\" id=\"search-more\">
\t\t\tMore <span class=\"triangle_down\"></span>
\t\t</button>
\t\t<button class=\"btn btn-secondary\" id=\"search\" disabled>Load Data</button>
\t</div>
</div>

<div class=\"search-body\">
\t<div class=\"popup-list-open\"  >
\t\t<div class=\"popup-list-wrapper\">
\t\t\t<form action=\"#\" method=\"post\" class=\"j-forms\" id=\"criteria-form\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option_left\" value=\"1\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option_right\" value=\"1\">
\t\t\t\t\t\t\t<div class=\"row pt-2 item-date\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio \">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\"  checked value=\"1\"> Date
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"  float-left text-left criteria-date-radio-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-start hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm criteria-date option-date-start\"  name=\"option_date_start\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria_date"]) ? $context["criteria_date"] : null), "start", array()), "html", null, true);
        echo "\" readonly>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm criteria-date  option-date-end\" name=\"option_date_end\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria_date"]) ? $context["criteria_date"] : null), "end", array()), "html", null, true);
        echo "\" readonly>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio\">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\" value=\"2\"> Week
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left text-right pt-1 criteria-date-radio-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"criteria-week text-left\"  >
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"  block-fillter-start hidden\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_year_start\" id=\"option_week_year_start\" class=\"\">";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 127
            if (($context["year"] == $this->getAttribute((isset($context["criteria_week"]) ? $context["criteria_week"] : null), "start_week_year", array()))) {
                // line 128
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</option>";
            } else {
                // line 130
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_start\" id=\"option_week_start\" class=\"ml-1\">";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["week_format"]) ? $context["week_format"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 136
            if (($context["key"] == $this->getAttribute((isset($context["criteria_week"]) ? $context["criteria_week"] : null), "start_week", array()))) {
                // line 137
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["week"], "html", null, true);
                echo "</option>";
            } else {
                // line 139
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["week"], "html", null, true);
                echo "</option>";
            }
            // line 141
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t}";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"  block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_year_end\" id=\"option_week_year_end\" class=\"\">";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 149
            if (($context["year"] == $this->getAttribute((isset($context["criteria_week"]) ? $context["criteria_week"] : null), "end_week_year", array()))) {
                // line 150
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</option>";
            } else {
                // line 152
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_end\" id=\"option_week_end\" class=\"ml-1\">";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["week_format"]) ? $context["week_format"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 158
            if (($context["key"] == $this->getAttribute((isset($context["criteria_week"]) ? $context["criteria_week"] : null), "end_week", array()))) {
                // line 159
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["week"], "html", null, true);
                echo "</option>";
            } else {
                // line 161
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["week"], "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio\">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\" value=\"3\"> Month
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left text-left pt-1 criteria-date-radio-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"  criteria-week text-left \"  >
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-start hidden\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_year_start\" id=\"option_month_year_start\" class=\"\">";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 181
            if (($context["year"] == $this->getAttribute((isset($context["criteria_month"]) ? $context["criteria_month"] : null), "start_month_year", array()))) {
                // line 182
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</option>";
            } else {
                // line 184
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_start\" id=\"option_month_start\" class=\"ml-1\">";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(12, 1));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 190
            if (($context["month"] == $this->getAttribute((isset($context["criteria_month"]) ? $context["criteria_month"] : null), "start_month", array()))) {
                // line 191
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $context["month"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
                echo "</option>";
            } else {
                // line 193
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["month"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_year_end\" id=\"option_month_year_end\" class=\"\">";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 202
            if (($context["year"] == $this->getAttribute((isset($context["criteria_month"]) ? $context["criteria_month"] : null), "end_month_year", array()))) {
                // line 203
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</option>";
            } else {
                // line 205
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_end\" id=\"option_month_end\" class=\"ml-1\">";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(12, 1));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 211
            if (($context["month"] == $this->getAttribute((isset($context["criteria_month"]) ? $context["criteria_month"] : null), "end_month", array()))) {
                // line 212
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $context["month"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
                echo "</option>";
            } else {
                // line 214
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["month"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 float-left pt-1 criteria-label\">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"checkbox\" name=\"option_time\" value=\"1\"> Time
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9 float-left text-right pt-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" input-group criteria-time text-right\"  >
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_time_start\" value=\"\" placeholder=\"Start: 00:00\" class=\"input-sm form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_time_end\" value=\"\" placeholder=\"End: 23:59\" class=\"ml-1 input-sm form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"option_branch\" name=\"option_branch[]\" value=\"\">
\t\t\t\t\t\t\t\t<div id=\"hidden_cam_group\"></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "filter/criteria_floorplan.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 217,  390 => 214,  383 => 212,  381 => 211,  377 => 210,  374 => 208,  363 => 205,  356 => 203,  354 => 202,  350 => 201,  344 => 196,  333 => 193,  326 => 191,  324 => 190,  320 => 189,  317 => 187,  306 => 184,  299 => 182,  297 => 181,  293 => 180,  276 => 164,  265 => 161,  258 => 159,  256 => 158,  252 => 157,  249 => 155,  238 => 152,  231 => 150,  229 => 149,  225 => 148,  219 => 143,  213 => 141,  206 => 139,  199 => 137,  197 => 136,  193 => 135,  190 => 133,  179 => 130,  172 => 128,  170 => 127,  166 => 126,  149 => 111,  142 => 107,  98 => 65,  88 => 63,  84 => 62,  76 => 56,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#btn-date-header-block{*/
/* 		padding-left: 30px;*/
/* 	}*/
/* */
/* 	.criteria-branch_select{*/
/* 		margin-top: -14px;*/
/*     	padding-left: 30px;*/
/* 	}*/
/* */
/* 	.criteria-working_time{*/
/*     	padding-left: 30px;*/
/* 	}*/
/* */
/* 	.criteria-seach{*/
/*     	margin-top: -14px;*/
/*     	padding-right: 30px;*/
/* 	}*/
/* 	.seacrh-header{*/
/* 		padding: 6px;*/
/* 	}*/
/* */
/* 	.popup-list-wrapper {*/
/* 	    max-width: 374px !important;*/
/* 	}*/
/* */
/* 	.popup-list-wrapper .content {*/
/* 	    min-height: 238px;*/
/* 	}*/
/* */
/* 	.block-fillter-end {*/
/* 	     max-width: unset; */
/* 	}*/
/* */
/* 	#option_week_end{*/
/* 	    max-width: 174px !important;*/
/* 	}*/
/* */
/* 	#option_month_end{*/
/* 	    max-width: 174px !important;*/
/* 	}*/
/* */
/* 	.criteria-date-radio {*/
/* 	    flex: 0 0 25%;*/
/* 	    max-width: 25%;*/
/* 	    padding-left: 15px;*/
/* 	}*/
/* */
/* 	.criteria-date-radio-label {*/
/* 	    flex: 0 0 75%;*/
/* 	    max-width: 75%;*/
/* 	}*/
/* */
/* </style>*/
/* <div class="row seacrh-header" id="criteria">*/
/* 		<h5 class="pl-4 page-title">{{ page_title }}</h5>*/
/* 	<div class="col">*/
/* 	</div>*/
/* 	<div class="col-md-3 criteria-branch_select">*/
/* 		<select class="form-control" id="branch_id" name="branch_id">*/
/* 			<option selected value="">-- Select Branch --</option>*/
/* 			{% for branch in branchs %}*/
/* 				<option value="{{ branch.branch_id }}">{{ branch.branch_name }}</option>*/
/* 			{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* 	*/
/* 	<div class="col-md-3 criteria-branch_select">*/
/* 		<select class="form-control" id="map_id" name="map_id">*/
/* 			<option selected value="">-- Select Floorplan --</option>*/
/* 		</select>*/
/* 	</div>*/
/* */
/*     <!-- <div class="col-md-3 criteria-working_time"> -->*/
/* 		<!-- <input type="checkbox" name="working_time" id="working_time" value="1" class="branch"> &nbsp; */
/* 		<label for="working_time"> Time : <span id="working_time_txt">10:00-22:00</span> </label> -->*/
/* 	<!-- </div> -->*/
/* */
/* 	<div class="col criteria-seach text-right">*/
/* */
/* 		<button class="popup-list-open btn btn-outline-secondary  waves-effect waves-light " type="button" id="search-more">*/
/* 			More <span class="triangle_down"></span>*/
/* 		</button>*/
/* 		<button class="btn btn-secondary" id="search" disabled>Load Data</button>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="search-body">*/
/* 	<div class="popup-list-open"  >*/
/* 		<div class="popup-list-wrapper">*/
/* 			<form action="#" method="post" class="j-forms" id="criteria-form">*/
/* 				<div class="content">*/
/* 					<div class="row">*/
/* 						*/
/* 						<div class="col-md-12 float-left">*/
/* 							<input type="hidden" name="option_left" value="1">*/
/* 							<input type="hidden" name="option_right" value="1">*/
/* 							<div class="row pt-2 item-date">*/
/* 								<div class="col-md-12 float-left">*/
/* 									<div class="row ">*/
/* 										<div class=" float-left pt-1 criteria-date-radio ">*/
/* 											<label> <input type="radio" name="option_group_date"  checked value="1"> Date*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="  float-left text-left criteria-date-radio-label">*/
/* 											<div class="block-fillter-start hidden">*/
/* 												<input autocomplete="off" type="text" class="input-sm criteria-date option-date-start"  name="option_date_start" value="{{ criteria_date.start }}" readonly>*/
/* 											</div>*/
/* 											*/
/* 											<div class="block-fillter-end">*/
/* 												<input autocomplete="off" type="text" class="input-sm criteria-date  option-date-end" name="option_date_end" value="{{ criteria_date.end }}" readonly>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-12 float-left">*/
/* 									<div class="row ">*/
/* 										<div class=" float-left pt-1 criteria-date-radio">*/
/* 											<label> <input type="radio" name="option_group_date" value="2"> Week*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class=" float-left text-right pt-1 criteria-date-radio-label">*/
/* 											<div class="criteria-week text-left"  >*/
/* 												<div class="  block-fillter-start hidden">*/
/*     												<select name="option_week_year_start" id="option_week_year_start" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														{% if year == criteria_week.start_week_year %}*/
/*     														<option selected value="{{ year }}">{{ year }}</option>*/
/*     														{% else %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     														{% endif %}*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_week_start" id="option_week_start" class="ml-1">*/
/*     													{% for key, week in week_format %}*/
/*     														{% if key == criteria_week.start_week %}*/
/*     														<option selected value="{{ key }}">{{ week }}</option>*/
/*     														{% else %}*/
/*     														<option value="{{ key }}">{{ week }}</option>*/
/*     														{% endif %}*/
/*     													}*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												*/
/* 												<div class="  block-fillter-end">*/
/*     												<select name="option_week_year_end" id="option_week_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														{% if year == criteria_week.end_week_year %}*/
/*     														<option selected value="{{ year }}">{{ year }}</option>*/
/*     														{% else %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     														{% endif %}*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_week_end" id="option_week_end" class="ml-1">*/
/*     													{% for key, week in week_format %}*/
/*     														{% if key == criteria_week.end_week %}*/
/*     														<option selected value="{{ key }}">{{ week }}</option>*/
/*     														{% else %}*/
/*     														<option value="{{ key }}">{{ week }}</option>*/
/*     														{% endif %}*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-12 float-left">*/
/* 									<div class="row ">*/
/* 										<div class=" float-left pt-1 criteria-date-radio">*/
/* 											<label> <input type="radio" name="option_group_date" value="3"> Month*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class=" float-left text-left pt-1 criteria-date-radio-label">*/
/* 											<div class="  criteria-week text-left "  >*/
/* 												<div class="block-fillter-start hidden">*/
/*     												<select name="option_month_year_start" id="option_month_year_start" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														{% if year == criteria_month.start_month_year %}*/
/*     														<option selected value="{{ year }}">{{ year }}</option>*/
/*     														{% else %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     														{% endif %}*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_month_start" id="option_month_start" class="ml-1">*/
/*     													{% for key, month in range( 12, 1) %}*/
/*     														{% if month == criteria_month.start_month %}*/
/*     														<option selected value="{{ month }}">{{ (("now"|date("Y"))~'-'~ month ~'-1')|date("F") }}</option>*/
/*     														{% else %}*/
/*     														<option value="{{ month }}">{{ (("now"|date("Y"))~'-'~ month ~'-1')|date("F") }}</option>*/
/*     														{% endif %}*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												*/
/* 												<div class="block-fillter-end">*/
/*     												<select name="option_month_year_end" id="option_month_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														{% if year == criteria_month.end_month_year %}*/
/*     														<option selected value="{{ year }}">{{ year }}</option>*/
/*     														{% else %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     														{% endif %}*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_month_end" id="option_month_end" class="ml-1">*/
/*     													{% for key, month in range( 12, 1) %}*/
/*     														{% if month == criteria_month.end_month %}*/
/*     														<option selected value="{{ month }}">{{ (("now"|date("Y"))~'-'~ month ~'-1')|date("F") }}</option>*/
/*     														{% else %}*/
/*     														<option value="{{ month }}">{{ (("now"|date("Y"))~'-'~ month ~'-1')|date("F") }}</option>*/
/*     														{% endif %}*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<div class="col-md-12 float-left">*/
/* 									<hr>*/
/* 									<div class="row">*/
/* 										<div class="col-md-3 float-left pt-1 criteria-label">*/
/* 											<label> <input type="checkbox" name="option_time" value="1"> Time*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col-md-9 float-left text-right pt-1">*/
/* 											<div class=" input-group criteria-time text-right"  >*/
/* 												<input type="text" name="option_time_start" value="" placeholder="Start: 00:00" class="input-sm form-control">*/
/* 												<input type="text" name="option_time_end" value="" placeholder="End: 23:59" class="ml-1 input-sm form-control">*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<input type="hidden" id="option_branch" name="option_branch[]" value="">*/
/* 								<div id="hidden_cam_group"></div>*/
/* 								*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* */
