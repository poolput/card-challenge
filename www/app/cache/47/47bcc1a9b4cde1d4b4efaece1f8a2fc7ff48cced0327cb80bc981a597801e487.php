<?php

/* filter/date.twig */
class __TwigTemplate_2b4295ea6f67c2e6031ebe812f6e06bdcd8292f371a66965c46bad4aa625d3cf extends Twig_Template
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
\t\t\t\t\t\t\t\t\t\t\t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm criteria-date option-date-start \"  name=\"option_date_start\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<input autocomplete=\"off\" type=\"text\" class=\"input-sm criteria-date  option-date-end\" name=\"option_date_end\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
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
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_year_start\" id=\"option_week_year_start\" class=\"\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, "now", "Y") - 10), twig_date_format_filter($this->env, "now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 31
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            if ((twig_date_format_filter($this->env, "now", "Y") == $context["year"])) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_start\" id=\"option_week_start\" class=\"ml-1\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["week_format"]) ? $context["week_format"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 36
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if ((twig_date_format_filter($this->env, "now", "W") == $context["key"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["week"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"  block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"  block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_year_end\" id=\"option_week_year_end\" class=\"\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, "now", "Y") - 10), twig_date_format_filter($this->env, "now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 44
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            if ((twig_date_format_filter($this->env, "now", "Y") == $context["year"])) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_end\" id=\"option_week_end\" class=\"ml-1\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["week_format"]) ? $context["week_format"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 49
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if ((twig_date_format_filter($this->env, "now", "W") == $context["key"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["week"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
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
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_year_start\" id=\"option_month_year_start\" class=\"\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, "now", "Y") - 10), twig_date_format_filter($this->env, "now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 68
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            if ((twig_date_format_filter($this->env, "now", "Y") == $context["year"])) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_start\" id=\"option_month_start\" class=\"ml-1\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 73
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\" ";
            if ((twig_date_format_filter($this->env, "now", "m") == $context["month"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_year_end\" id=\"option_month_year_end\" class=\"\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, "now", "Y") - 10), twig_date_format_filter($this->env, "now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 81
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            if ((twig_date_format_filter($this->env, "now", "Y") == $context["year"])) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_end\" id=\"option_month_end\" class=\"ml-1\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 86
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\" ";
            if ((twig_date_format_filter($this->env, "now", "m") == $context["month"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
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
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_year_start\" id=\"option_quarter_year_start\" class=\"\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, "now", "Y") - 10), twig_date_format_filter($this->env, "now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 105
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            if ((twig_date_format_filter($this->env, "now", "Y") == $context["year"])) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_start\" id=\"option_quarter_start\" class=\"ml-1\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["key"] => $context["quarter"]) {
            // line 110
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "\" ";
            if (((isset($context["current_quarter"]) ? $context["current_quarter"] : null) == $context["quarter"])) {
                echo " selected ";
            }
            echo ">Quarter&nbsp;";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['quarter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_year_end\" id=\"option_quarter_year_end\" class=\"\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, "now", "Y") - 10), twig_date_format_filter($this->env, "now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 118
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            if ((twig_date_format_filter($this->env, "now", "Y") == $context["year"])) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_end\" id=\"option_quarter_end\" class=\"ml-1\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["key"] => $context["quarter"]) {
            // line 123
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "\" ";
            if (((isset($context["current_quarter"]) ? $context["current_quarter"] : null) == $context["quarter"])) {
                echo " selected ";
            }
            echo ">Quarter&nbsp;";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
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
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_year_start\" id=\"option_year_start\" class=\"\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, "now", "Y") - 10), twig_date_format_filter($this->env, "now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 142
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            if ((twig_date_format_filter($this->env, "now", "Y") == $context["year"])) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_year_end\" id=\"option_year_end\" class=\"\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, "now", "Y") - 10), twig_date_format_filter($this->env, "now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 150
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            if ((twig_date_format_filter($this->env, "now", "Y") == $context["year"])) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
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
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_time_start\"  autocomplete=\"off\" placeholder=\"00:00\" value=\"00:00\" class=\"input-sm form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_time_end\"  autocomplete=\"off\" placeholder=\"";
        // line 168
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i"), "html", null, true);
        echo "\" class=\"ml-1 input-sm form-control\">
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
\t\t\t\t\t\t\t\t<!-- <div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row mt-2 \">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left text-right pt-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" input-group criteria-staff text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\"> <input type=\"checkbox\" name=\"option_entrance\" value=\"1\" >&nbsp;Entrance</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> -->
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
        return array (  449 => 168,  431 => 152,  416 => 150,  412 => 149,  405 => 144,  390 => 142,  386 => 141,  368 => 125,  353 => 123,  349 => 122,  345 => 120,  330 => 118,  326 => 117,  319 => 112,  304 => 110,  300 => 109,  296 => 107,  281 => 105,  277 => 104,  259 => 88,  244 => 86,  240 => 85,  236 => 83,  221 => 81,  217 => 80,  210 => 75,  195 => 73,  191 => 72,  187 => 70,  172 => 68,  168 => 67,  150 => 51,  135 => 49,  131 => 48,  127 => 46,  112 => 44,  108 => 43,  101 => 38,  86 => 36,  82 => 35,  78 => 33,  63 => 31,  59 => 30,  41 => 15,  34 => 11,  30 => 10,  19 => 1,);
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
/* 												<input autocomplete="off" type="text" class="input-sm criteria-date option-date-start "  name="option_date_start" value="{{ 'now'|date('Y-m-d') }}">*/
/* 											</div>*/
/* 											<div class="block-fillter-dash">-</div>*/
/* 											<div class="block-fillter-end">*/
/* 												<input autocomplete="off" type="text" class="input-sm criteria-date  option-date-end" name="option_date_end" value="{{ 'now'|date('Y-m-d') }}">*/
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
/*     													{% for year in range(("now"|date("Y"))-10, ("now"|date("Y"))) %}*/
/*     														<option {% if ("now"|date("Y")) == year %} selected {% endif %} value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_week_start" id="option_week_start" class="ml-1">*/
/*     													{% for key, week in week_format %}*/
/*     														<option value="{{ key }}" {% if ("now"|date("W")) == key %} selected {% endif %}>{{ week }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												<div class="  block-fillter-dash">-</div>*/
/* 												<div class="  block-fillter-end">*/
/*     												<select name="option_week_year_end" id="option_week_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y"))-10, ("now"|date("Y"))) %}*/
/*     														<option {% if ("now"|date("Y")) == year %} selected {% endif %} value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_week_end" id="option_week_end" class="ml-1">*/
/*     													{% for key, week in week_format %}*/
/*     														<option value="{{ key }}" {% if ("now"|date("W")) == key %} selected {% endif %}>{{ week }}</option>*/
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
/*     													{% for year in range(("now"|date("Y"))-10, ("now"|date("Y"))) %}*/
/*     														<option {% if ("now"|date("Y")) == year %} selected {% endif %} value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_month_start" id="option_month_start" class="ml-1">*/
/*     													{% for key, month in range( 1, 12) %}*/
/*     														<option value="{{ month }}" {% if ("now"|date("m")) == month %} selected {% endif %}>{{ (("now"|date("Y"))~'-'~ month ~'-1')|date("F") }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												<div class="block-fillter-dash">-</div>*/
/* 												<div class="block-fillter-end">*/
/*     												<select name="option_month_year_end" id="option_month_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y"))-10, ("now"|date("Y"))) %}*/
/*     														<option {% if ("now"|date("Y")) == year %} selected {% endif %} value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_month_end" id="option_month_end" class="ml-1">*/
/*     													{% for key, month in range( 1, 12) %}*/
/*     														<option value="{{ month }}" {% if ("now"|date("m")) == month %} selected {% endif %}>{{ (("now"|date("Y"))~'-'~ month ~'-1')|date("F") }}</option>*/
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
/*     													{% for year in range(("now"|date("Y"))-10, ("now"|date("Y"))) %}*/
/*     														<option {% if ("now"|date("Y")) == year %} selected {% endif %} value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_quarter_start" id="option_quarter_start" class="ml-1">*/
/*     													{% for key, quarter in range( 1, 4) %}*/
/*     														<option value="{{ quarter }}" {% if (current_quarter == quarter) %} selected {% endif %}>Quarter&nbsp;{{ quarter }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												<div class="block-fillter-dash">-</div>*/
/* 												<div class="block-fillter-end">*/
/*     												<select name="option_quarter_year_end" id="option_quarter_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y"))-10, ("now"|date("Y"))) %}*/
/*     														<option {% if ("now"|date("Y")) == year %} selected {% endif %} value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/*     												<select name="option_quarter_end" id="option_quarter_end" class="ml-1">*/
/*     													{% for key, quarter in range( 1, 4) %}*/
/*     														<option value="{{ quarter }}" {% if (current_quarter == quarter) %} selected {% endif %}>Quarter&nbsp;{{ quarter }}</option>*/
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
/*     													{% for year in range(("now"|date("Y"))-10, ("now"|date("Y"))) %}*/
/*     														<option {% if ("now"|date("Y")) == year %} selected {% endif %} value="{{ year }}">{{ year }}</option>*/
/*     													{% endfor %}*/
/*     												</select>*/
/* 												</div>*/
/* 												<div class="block-fillter-dash">-</div>*/
/* 												<div class="block-fillter-end">*/
/*     												<select name="option_year_end" id="option_year_end" class="">*/
/*     													{% for year in range(("now"|date("Y"))-10, ("now"|date("Y"))) %}*/
/*     														<option {% if ("now"|date("Y")) == year %} selected {% endif %} value="{{ year }}">{{ year }}</option>*/
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
/* 												<input type="text" name="option_time_start"  autocomplete="off" placeholder="00:00" value="00:00" class="input-sm form-control">*/
/* 												<input type="text" name="option_time_end"  autocomplete="off" placeholder="{{ 'now'|date('H:i') }}" value="{{ 'now'|date('H:i') }}" class="ml-1 input-sm form-control">*/
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
/* 								<!-- <div class="col-md-12 float-left">*/
/* 									<div class="row mt-2 ">*/
/* 										<div class="col-md-12 float-left text-right pt-1">*/
/* 											<div class=" input-group criteria-staff text-right">*/
/* 												<label class=""> <input type="checkbox" name="option_entrance" value="1" >&nbsp;Entrance</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div> -->*/
/* 								*/
/* 							</div>*/
