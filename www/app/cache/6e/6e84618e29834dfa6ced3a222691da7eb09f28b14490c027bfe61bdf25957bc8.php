<?php

/* filter/date.twig */
class __TwigTemplate_07dbcabff65ae3e2bf4b9c272f17cf15925411e1da963786db9e29033e321914 extends Twig_Template
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
        echo "<div class=\"row pt-2 item-date\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\"  float-left pt-1 criteria-date-radio \">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\"  checked value=\"1\"> Date
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"  float-left text-left criteria-date-radio-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-start\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input autocomplete=\"off\" type=\"text\" class=\"input-sm criteria-date option-date-start \"  name=\"option_date_start\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"> -->
\t\t\t\t\t\t\t\t\t\t\t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm criteria-date option-date-start \"  name=\"option_date_start\" value=\"2020-08-25\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm criteria-date  option-date-end\" name=\"option_date_end\" value=\"2020-08-25\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"  block-fillter-start \">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_year_start\" id=\"option_week_year_start\" class=\"\">";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 31
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_start\" id=\"option_week_start\" class=\"ml-1\">";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["week_format"]) ? $context["week_format"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 36
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["week"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"  block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"  block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_year_end\" id=\"option_week_year_end\" class=\"\">";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 44
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_end\" id=\"option_week_end\" class=\"ml-1\">";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["week_format"]) ? $context["week_format"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 49
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["week"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_year_start\" id=\"option_month_year_start\" class=\"\">";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 68
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_start\" id=\"option_month_start\" class=\"ml-1\">";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(12, 1));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 73
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_year_end\" id=\"option_month_year_end\" class=\"\">";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 81
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_end\" id=\"option_month_end\" class=\"ml-1\">";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(12, 1));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 86
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\" id=\"option_group_quarter\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio \">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\"  value=\"4\"> Quarter
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left text-left pt-1 criteria-date-radio-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" input-group criteria-week text-left\"  >
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_year_start\" id=\"option_quarter_year_start\" class=\"\">";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 105
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_start\" id=\"option_quarter_start\" class=\"ml-1\">";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(4, 1));
        foreach ($context['_seq'] as $context["key"] => $context["quarter"]) {
            // line 110
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "\">Quarter&nbsp;";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['quarter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_year_end\" id=\"option_quarter_year_end\" class=\"\">";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 118
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_end\" id=\"option_quarter_end\" class=\"ml-1\">";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(4, 1));
        foreach ($context['_seq'] as $context["key"] => $context["quarter"]) {
            // line 123
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "\">Quarter&nbsp;";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['quarter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\" id=\"option_group_year\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio\">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\"  value=\"5\"> Year
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left text-left pt-1 criteria-date-radio-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" input-group criteria-week text-left\"  >
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_year_start\" id=\"option_year_start\" class=\"\">";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 142
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_year_end\" id=\"option_year_end\" class=\"\">";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 150
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 float-left pt-1 criteria-label\">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"checkbox\" name=\"option_time\" value=\"1\"> Time
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 float-left text-right pt-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" input-group criteria-time text-right\"  >
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_time_start\" value=\"\" placeholder=\"Start: 00:00\" class=\"input-sm form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_time_end\" value=\"\" placeholder=\"End: 23:59\" class=\"ml-1 input-sm form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 float-left pt-1 criteria-label\">
\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"option_recurrence\" id=\"option_recurrence\"> Day
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 float-left text-right pt-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"  input-group criteria-recurrence text-right \">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"2\" class=\"recurrence \">&nbsp;Monday</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"3\" class=\"recurrence \">&nbsp;Tuesday</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"4\" class=\"recurrence \">&nbsp;Wednesday</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"5\" class=\"recurrence \">&nbsp;Thursday</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"6\" class=\"recurrence \">&nbsp;Friday</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"7\" class=\"recurrence \">&nbsp;Saturday</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_day[]\" value=\"1\" class=\"recurrence \">&nbsp;Sunday</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row mt-2 \">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left text-right pt-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" input-group criteria-staff text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_entrance\" value=\"1\" >&nbsp;Entrance</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "filter/date.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 152,  331 => 150,  327 => 149,  321 => 144,  311 => 142,  307 => 141,  290 => 125,  280 => 123,  276 => 122,  273 => 120,  263 => 118,  259 => 117,  253 => 112,  243 => 110,  239 => 109,  236 => 107,  226 => 105,  222 => 104,  205 => 88,  195 => 86,  191 => 85,  188 => 83,  178 => 81,  174 => 80,  168 => 75,  158 => 73,  154 => 72,  151 => 70,  141 => 68,  137 => 67,  120 => 51,  110 => 49,  106 => 48,  103 => 46,  93 => 44,  89 => 43,  83 => 38,  73 => 36,  69 => 35,  66 => 33,  56 => 31,  52 => 30,  30 => 10,  19 => 1,);
    }
}
/* <div class="row pt-2 item-date">*/
/* 								<div class="col-md-12 float-left">*/
/* 									<div class="row ">*/
/* 										<div class="  float-left pt-1 criteria-date-radio ">*/
/* 											<label> <input type="radio" name="option_group_date"  checked value="1"> Date*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="  float-left text-left criteria-date-radio-label">*/
/* 											<div class="block-fillter-start">*/
/* 												<!-- <input autocomplete="off" type="text" class="input-sm criteria-date option-date-start "  name="option_date_start" value="{{ 'now'|date('Y-m-d') }}"> -->*/
/* 												<input autocomplete="off" type="text" class="input-sm criteria-date option-date-start "  name="option_date_start" value="2020-08-25">*/
/* 											</div>*/
/* 											<div class="block-fillter-dash">-</div>*/
/* 											<div class="block-fillter-end">*/
/* 												<input autocomplete="off" type="text" class="input-sm criteria-date  option-date-end" name="option_date_end" value="2020-08-25">*/
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
/* 												<div class="  block-fillter-start ">*/
/*     												<select name="option_week_year_start" id="option_week_year_start" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_week_start" id="option_week_start" class="ml-1">*/
/*     													{% for key, week in week_format %}*/
/*     														<option value="{{ key }}">{{ week }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												<div class="  block-fillter-dash">-</div>*/
/* 												<div class="  block-fillter-end">*/
/*     												<select name="option_week_year_end" id="option_week_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_week_end" id="option_week_end" class="ml-1">*/
/*     													{% for key, week in week_format %}*/
/*     														<option value="{{ key }}">{{ week }}</option>*/
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
/* 												<div class="block-fillter-start">*/
/*     												<select name="option_month_year_start" id="option_month_year_start" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_month_start" id="option_month_start" class="ml-1">*/
/*     													{% for key, month in range( 12, 1) %}*/
/*     														<option value="{{ month }}">{{ (("now"|date("Y"))~'-'~ month ~'-1')|date("F") }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												<div class="block-fillter-dash">-</div>*/
/* 												<div class="block-fillter-end">*/
/*     												<select name="option_month_year_end" id="option_month_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_month_end" id="option_month_end" class="ml-1">*/
/*     													{% for key, month in range( 12, 1) %}*/
/*     														<option value="{{ month }}">{{ (("now"|date("Y"))~'-'~ month ~'-1')|date("F") }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-12 float-left" id="option_group_quarter">*/
/* 									<div class="row ">*/
/* 										<div class=" float-left pt-1 criteria-date-radio ">*/
/* 											<label> <input type="radio" name="option_group_date"  value="4"> Quarter*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class=" float-left text-left pt-1 criteria-date-radio-label">*/
/* 											<div class=" input-group criteria-week text-left"  >*/
/* 												<div class="block-fillter-start">*/
/*     												<select name="option_quarter_year_start" id="option_quarter_year_start" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_quarter_start" id="option_quarter_start" class="ml-1">*/
/*     													{% for key, quarter in range( 4, 1) %}*/
/*     														<option value="{{ quarter }}">Quarter&nbsp;{{ quarter }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												<div class="block-fillter-dash">-</div>*/
/* 												<div class="block-fillter-end">*/
/*     												<select name="option_quarter_year_end" id="option_quarter_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_quarter_end" id="option_quarter_end" class="ml-1">*/
/*     													{% for key, quarter in range( 4, 1) %}*/
/*     														<option value="{{ quarter }}">Quarter&nbsp;{{ quarter }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-12 float-left" id="option_group_year">*/
/* 									<div class="row ">*/
/* 										<div class=" float-left pt-1 criteria-date-radio">*/
/* 											<label> <input type="radio" name="option_group_date"  value="5"> Year*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class=" float-left text-left pt-1 criteria-date-radio-label">*/
/* 											<div class=" input-group criteria-week text-left"  >*/
/* 												<div class="block-fillter-start">*/
/*     												<select name="option_year_start" id="option_year_start" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												<div class="block-fillter-dash">-</div>*/
/* 												<div class="block-fillter-end">*/
/*     												<select name="option_year_end" id="option_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*     														<option value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-12 float-left">*/
/* 									<hr>*/
/* 									<div class="row">*/
/* 										<div class="col-md-2 float-left pt-1 criteria-label">*/
/* 											<label> <input type="checkbox" name="option_time" value="1"> Time*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col-md-10 float-left text-right pt-1">*/
/* 											<div class=" input-group criteria-time text-right"  >*/
/* 												<input type="text" name="option_time_start" value="" placeholder="Start: 00:00" class="input-sm form-control">*/
/* 												<input type="text" name="option_time_end" value="" placeholder="End: 23:59" class="ml-1 input-sm form-control">*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-12 float-left">*/
/* 									<div class="row mt-2">*/
/* 										<div class="col-md-2 float-left pt-1 criteria-label">*/
/* 											<label><input type="checkbox" name="option_recurrence" id="option_recurrence"> Day*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col-md-10 float-left text-right pt-1">*/
/* 											<div class="  input-group criteria-recurrence text-right ">*/
/* 												<label class=""> <input type="checkbox" name="option_day[]" value="2" class="recurrence ">&nbsp;Monday</label>*/
/* 												<label class=""> <input type="checkbox" name="option_day[]" value="3" class="recurrence ">&nbsp;Tuesday</label>*/
/* 												<label class=""> <input type="checkbox" name="option_day[]" value="4" class="recurrence ">&nbsp;Wednesday</label>*/
/* 												<label class=""> <input type="checkbox" name="option_day[]" value="5" class="recurrence ">&nbsp;Thursday</label>*/
/* 												<label class=""> <input type="checkbox" name="option_day[]" value="6" class="recurrence ">&nbsp;Friday</label>*/
/* 												<label class=""> <input type="checkbox" name="option_day[]" value="7" class="recurrence ">&nbsp;Saturday</label>*/
/* 												<label class=""> <input type="checkbox" name="option_day[]" value="1" class="recurrence ">&nbsp;Sunday</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-12 float-left">*/
/* 									<div class="row mt-2 ">*/
/* 										<div class="col-md-12 float-left text-right pt-1">*/
/* 											<div class=" input-group criteria-staff text-right">*/
/* 												<label class=""> <input type="checkbox" name="option_entrance" value="1" >&nbsp;Entrance</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
