<?php

/* component/criteria.twig */
class __TwigTemplate_e6cba39dcbb6e62c5df9e6a6f6501de7cd62e401466a043f297d2f12392c2e96 extends Twig_Template
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

<div class=\"search-body\">
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
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row pt-2 item-location\">
\t\t\t\t\t\t\t\t<div class=\" input-group criteria-search ml-3 pb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_search_location\" id=\"criteria_search_location\" value=\"\" placeholder=\"Location Name\" class=\"input-sm form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row item-all\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1  \">
\t\t\t\t\t\t\t\t\t\t<input checked type=\"checkbox\" name=\"option_location_all\" id=\"option_location_branch\" value=\"1\" > &nbsp;All Branch
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul>";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 55
            echo "    \t\t\t\t\t\t\t\t\t<li class=\"row item-province item-province-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo " \"  >
    \t\t\t\t\t\t\t\t\t\t<input checked type=\"checkbox\" name=\"option_province[]\" data-parent=\"\" id=\"province-";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" class=\"province\"> &nbsp;";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["province"], "name", array())), "html", null, true);
            echo "
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1 text-right collapse-icon\">
        \t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" 
            \t\t\t\t\t\t\t\t\t\tdata-target=\"#parent-";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" 
            \t\t\t\t\t\t\t\t\t\taria-expanded=\"true\"><p class=\"collapse-icon-plus\">+</p><p class=\"collapse-icon-minus\">-</p></a>
        \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t<ul class=\"collapse show\"
    \t\t\t\t\t\t\t\t\t\t data-id=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" 
        \t\t\t\t\t\t\t\t\t data-value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "name", array()), "html", null, true);
            echo "\" 
        \t\t\t\t\t\t\t\t\t id=\"parent-";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\">";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["province"], "branch", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
                // line 67
                echo "        \t\t\t\t\t\t\t\t\t\t\t<li class=\"row item-branch item-branch-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo " \" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "name", array()), "html", null, true);
                echo "\" id=\"parent-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" data-parent=\"parent-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
                echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input checked type=\"checkbox\" id=\"branch-";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" data-parent=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" data-province-id=\"province-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
                echo "\" name=\"option_branch[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" class=\"branch province-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
                echo "\"> &nbsp;";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["branch"], "name", array())), "html", null, true);
                echo "
            \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1 text-right collapse-icon\">
                    \t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" 
                        \t\t\t\t\t\t\t\t\t\tdata-target=\"#collapse-";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" 
                        \t\t\t\t\t\t\t\t\t\taria-expanded=\"true\">
                        \t\t\t\t\t\t\t\t\t\t<p class=\"collapse-icon-plus\">+</p>
                        \t\t\t\t\t\t\t\t\t\t<p class=\"collapse-icon-minus\">-</p>
                        \t\t\t\t\t\t\t\t\t</a>
                    \t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t\t\t\t<ul
            \t\t\t\t\t\t\t\t\t\t\tclass=\"collapse show\" 
                        \t\t\t\t\t\t\t\tid=\"collapse-";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\">";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["branch"], "group", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 81
                    if ( !twig_test_empty($this->getAttribute($context["group"], "id", array()))) {
                        // line 82
                        echo "                    \t\t\t\t\t\t\t\t\t\t\t\t<li class=\"row location-item-group item-group-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                        echo " item-child-2\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                        echo "\" data-value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                        echo "\" data-parent=\"parent-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                        echo "\">
                    \t\t\t\t\t\t\t\t\t\t\t\t\t<input checked type=\"checkbox\" name=\"option_camera_group[]\" data-parent=\"";
                        // line 83
                        echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                        echo "\"  value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                        echo "\" data-branch-id=\"branch-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                        echo "\" class=\"camera branch-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                        echo "\"> &nbsp;";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group"], "name", array())), "html", null, true);
                        echo "
                    \t\t\t\t\t\t\t\t\t\t\t\t</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "            \t\t\t\t\t\t\t\t\t\t\t</ul>
        \t\t\t\t\t\t\t\t\t\t\t</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    \t\t\t\t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row pt-2 item-group hide\">
\t\t\t\t\t\t\t\t<div class=\" input-group criteria-search ml-3 pb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_search_group\" id=\"criteria_search_group\" value=\"\" placeholder=\"Group Name\" class=\"input-sm form-control\">
\t\t\t\t\t\t\t\t</div>";
        // line 135
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"col-md-12 float-left pb-1 block-group\">";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs_groups"]) ? $context["branchs_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li class=\"item-branch-group item-branch-group-";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" data-value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\" float-left pb-1\">
    \t\t\t\t\t\t\t\t\t\t\t\t<input class=\"check-group\" type=\"checkbox\" name=\"group_";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" id=\"group-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" class=\"group\"> &nbsp;";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group"], "name", array())), "html", null, true);
            echo "
    \t\t\t\t\t\t\t\t\t\t\t</div>";
            // line 144
            if ( !twig_test_empty($this->getAttribute($context["group"], "group_branch", array()))) {
                // line 145
                $context["macros"] = $this;
                // line 146
                echo $context["macros"]->getrender_group($this->getAttribute($context["group"], "group_branch", array()), 1);
            }
            // line 148
            echo "\t\t\t\t\t\t\t\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 float-left criteria-group-right\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 float-left\">
\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_right\" checked  value=\"1\" class=\"group-right\">&nbsp; Date
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 float-left\">
\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_right\" value=\"2\" class=\"group-right\">&nbsp; Event
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row pt-2 item-date\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\"  float-left pt-1 criteria-date-radio \">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\"  checked value=\"1\"> Date
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"  float-left text-left criteria-date-radio-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-start\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input autocomplete=\"off\" type=\"text\" class=\"input-sm criteria-date option-date-start \"  name=\"option_date_start\" value=\"";
        // line 175
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
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 196
            echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "        \t\t\t\t\t\t\t\t\t\t\t\t</select>
        \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_start\" id=\"option_week_start\" class=\"ml-1\">";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["week_format"]) ? $context["week_format"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 201
            echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["week"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "        \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"  block-fillter-dash\">-</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"  block-fillter-end\">
        \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_year_end\" id=\"option_week_year_end\" class=\"\">";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 209
            echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "        \t\t\t\t\t\t\t\t\t\t\t\t</select>
        \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_week_end\" id=\"option_week_end\" class=\"ml-1\">";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["week_format"]) ? $context["week_format"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 214
            echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["week"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "        \t\t\t\t\t\t\t\t\t\t\t\t</select>
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
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 233
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_start\" id=\"option_month_start\" class=\"ml-1\">";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(12, 1));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 238
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_year_end\" id=\"option_month_year_end\" class=\"\">";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 246
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_month_end\" id=\"option_month_end\" class=\"ml-1\">";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(12, 1));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 251
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") . "-") . $context["month"]) . "-1"), "F"), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio \">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\" value=\"4\"> Quarter
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left text-left pt-1 criteria-date-radio-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" input-group criteria-week text-left\"  >
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_year_start\" id=\"option_quarter_year_start\" class=\"\">";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 270
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_start\" id=\"option_quarter_start\" class=\"ml-1\">";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(4, 1));
        foreach ($context['_seq'] as $context["key"] => $context["quarter"]) {
            // line 275
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "\">Quarter&nbsp;";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['quarter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_year_end\" id=\"option_quarter_year_end\" class=\"\">";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 283
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_quarter_end\" id=\"option_quarter_end\" class=\"ml-1\">";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(4, 1));
        foreach ($context['_seq'] as $context["key"] => $context["quarter"]) {
            // line 288
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "\">Quarter&nbsp;";
            echo twig_escape_filter($this->env, $context["quarter"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['quarter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left\">
\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left pt-1 criteria-date-radio\">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"radio\" name=\"option_group_date\" value=\"5\"> Year
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\" float-left text-left pt-1 criteria-date-radio-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" input-group criteria-week text-left\"  >
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_year_start\" id=\"option_year_start\" class=\"\">";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 307
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-dash\">-</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"block-fillter-end\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option_year_end\" id=\"option_year_end\" class=\"\">";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 315
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
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
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row pt-2 mb-5 item-event hide\">
\t\t\t\t\t\t\t\t<div class=\" col-md-2 float-left pt-1 criteria-select\">
\t\t\t\t\t\t\t\t\t<select name=\"option_event_year\" id=\"event_year\">";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (twig_date_format_filter($this->env, "now", "Y") - 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 371
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
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
\t\t\t\t\t\t\t\t</div>";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 386
            echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1 block-event item-event-child\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row item-block-event item-event-";
            // line 387
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" data-value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option_event[]\" id=\"event_";
            // line 389
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" class=\"event\"> &nbsp;";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["event"], "name", array())), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
    }

    // line 100
    public function getrender_group($__data__ = null, $__i__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "i" => $__i__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 101
            $context["macros"] = $this;
            // line 102
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul>";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"row col-md-12 item-branch-group item-branch-group-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "id", array()), "html", null, true);
                echo " item-child-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "id", array()), "html", null, true);
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\" float-left ml-4 pt-1 block-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<input class=\"check-group\" type=\"checkbox\" name=\"level[]\" value=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "id", array()), "html", null, true);
                echo "\"> &nbsp;";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["level"], "name", array())), "html", null, true);
                echo "
    \t\t\t\t\t\t\t\t\t\t\t</div>";
                // line 110
                if ( !twig_test_empty($this->getAttribute($context["level"], "branch_id", array()))) {
                    // line 111
                    echo "        \t\t\t\t\t\t\t\t\t\t\t<ul class=\"row col-md-12 item-branch-group item-branch-group-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "branch_id", array()), "html", null, true);
                    echo " item-child-";
                    echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "branch_id", array()), "html", null, true);
                    echo "\" data-value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "branch_name", array()), "html", null, true);
                    echo "\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\" float-left ml-4 pt-1 block-group\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"check-group\" type=\"checkbox\" name=\"level[]\" value=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "branch_id", array()), "html", null, true);
                    echo "\"> &nbsp;";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["level"], "branch_name", array())), "html", null, true);
                    echo "
        \t\t\t\t\t\t\t\t\t\t\t\t</div>";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["level"], "group_camera", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["group_camera"]) {
                        // line 117
                        if ( !twig_test_empty($this->getAttribute($context["group_camera"], "id", array()))) {
                            // line 118
                            echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"row col-md-12  group-item-branchgroup item-group-";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group_camera"], "id", array()), "html", null, true);
                            echo " item-child-";
                            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 2), "html", null, true);
                            echo " parent-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "id", array()), "html", null, true);
                            echo "\" data-id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group_camera"], "id", array()), "html", null, true);
                            echo "\" data-value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group_camera"], "name", array()), "html", null, true);
                            echo "\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" float-left ml-4 pt-1 block-group\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"check-camera-group\" type=\"checkbox\" name=\"option_group_camera[]\" value=\"";
                            // line 120
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group_camera"], "id", array()), "html", null, true);
                            echo "\"  > &nbsp;";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group_camera"], "name", array())), "html", null, true);
                            echo "
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t\t</li>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_camera'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "        \t\t\t\t\t\t\t\t\t\t\t</ul>";
                }
                // line 128
                if ( !twig_test_empty($this->getAttribute($context["level"], "group_branch", array()))) {
                    // line 129
                    echo $context["macros"]->getrender_group($this->getAttribute($context["level"], "group_branch", array()), ((isset($context["i"]) ? $context["i"] : null) + 1));
                }
                // line 131
                echo "\t\t\t\t\t\t\t\t\t    </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "\t\t\t\t\t\t\t\t\t</ul>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "component/criteria.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  831 => 133,  825 => 131,  822 => 129,  820 => 128,  817 => 125,  805 => 120,  791 => 118,  789 => 117,  785 => 116,  779 => 113,  767 => 111,  765 => 110,  759 => 107,  747 => 105,  743 => 104,  740 => 102,  738 => 101,  725 => 100,  712 => 394,  698 => 389,  689 => 387,  686 => 386,  682 => 385,  669 => 373,  659 => 371,  655 => 370,  601 => 317,  591 => 315,  587 => 314,  581 => 309,  571 => 307,  567 => 306,  550 => 290,  540 => 288,  536 => 287,  533 => 285,  523 => 283,  519 => 282,  513 => 277,  503 => 275,  499 => 274,  496 => 272,  486 => 270,  482 => 269,  465 => 253,  455 => 251,  451 => 250,  448 => 248,  438 => 246,  434 => 245,  428 => 240,  418 => 238,  414 => 237,  411 => 235,  401 => 233,  397 => 232,  380 => 216,  370 => 214,  366 => 213,  363 => 211,  353 => 209,  349 => 208,  343 => 203,  333 => 201,  329 => 200,  326 => 198,  316 => 196,  312 => 195,  290 => 175,  264 => 151,  258 => 148,  255 => 146,  253 => 145,  251 => 144,  241 => 141,  232 => 139,  229 => 138,  225 => 137,  222 => 135,  215 => 93,  208 => 90,  201 => 87,  184 => 83,  173 => 82,  171 => 81,  167 => 80,  164 => 79,  153 => 71,  135 => 68,  122 => 67,  118 => 66,  115 => 65,  111 => 64,  107 => 63,  100 => 59,  90 => 56,  85 => 55,  81 => 54,  40 => 15,  35 => 13,  25 => 6,  19 => 1,);
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
/* 							<div class="row pt-2 item-location">*/
/* 								<div class=" input-group criteria-search ml-3 pb-3">*/
/* 									<input type="text" name="option_search_location" id="criteria_search_location" value="" placeholder="Location Name" class="input-sm form-control">*/
/* 								</div>*/
/* 								<div class="row item-all">*/
/* 									<div class="col-md-12 float-left pb-1  ">*/
/* 										<input checked type="checkbox" name="option_location_all" id="option_location_branch" value="1" > &nbsp;All Branch*/
/* 									</div>*/
/* 								</div>*/
/* 								<ul>*/
/*     								{% for province in branchs %}*/
/*     									<li class="row item-province item-province-{{ province.id }} "  >*/
/*     										<input checked type="checkbox" name="option_province[]" data-parent="" id="province-{{ province.id }}" value="{{ province.id }}" class="province"> &nbsp; {{ province.name|capitalize }}*/
/*     										<div class="col-sm-1 text-right collapse-icon">*/
/*         										<a data-toggle="collapse" */
/*             										data-target="#parent-{{ province.id }}" */
/*             										aria-expanded="true"><p class="collapse-icon-plus">+</p><p class="collapse-icon-minus">-</p></a>*/
/*         									</div>*/
/*     										<ul class="collapse show"*/
/*     										 data-id="{{ province.id }}" */
/*         									 data-value="{{ province.name }}" */
/*         									 id="parent-{{ province.id }}">*/
/*     					                        {% for branch in province.branch %}*/
/*         											<li class="row item-branch item-branch-{{ branch.id }} " data-id="{{ branch.id }}" data-value="{{ branch.name }}" id="parent-{{ branch.id }}" data-parent="parent-{{ province.id }}">*/
/*     													<input checked type="checkbox" id="branch-{{ branch.id }}" data-parent="{{ province.id }}" value="{{ branch.id }}" data-province-id="province-{{ province.id }}" name="option_branch[]" value="{{ branch.id }}" class="branch province-{{ province.id }}"> &nbsp; {{ branch.name|capitalize }}*/
/*             											<div class="col-sm-1 text-right collapse-icon">*/
/*                     										<a data-toggle="collapse" */
/*                         										data-target="#collapse-{{ branch.id }}" */
/*                         										aria-expanded="true">*/
/*                         										<p class="collapse-icon-plus">+</p>*/
/*                         										<p class="collapse-icon-minus">-</p>*/
/*                         									</a>*/
/*                     									</div>*/
/*             											<ul*/
/*             											class="collapse show" */
/*                         								id="collapse-{{ branch.id }}">*/
/*                 											{% for group in branch.group %}*/
/*                     											{% if group.id is not empty %}*/
/*                     												<li class="row location-item-group item-group-{{ group.id }} item-child-2" data-id="{{ group.id }}" data-value="{{ group.name }}" data-parent="parent-{{ branch.id }}">*/
/*                     													<input checked type="checkbox" name="option_camera_group[]" data-parent="{{ branch.id }}"  value="{{ group.id }}" data-branch-id="branch-{{ branch.id }}" class="camera branch-{{ branch.id }}"> &nbsp; {{ group.name|capitalize }}*/
/*                     												</li>*/
/*                     											{% endif %}*/
/*                 											{% endfor %}*/
/*             											</ul>*/
/*         											</li>*/
/*     										    {% endfor %}*/
/*     										</ul>*/
/*     									</li>*/
/*     								{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
/* 							<div class="row pt-2 item-group hide">*/
/* 								<div class=" input-group criteria-search ml-3 pb-3">*/
/* 									<input type="text" name="option_search_group" id="criteria_search_group" value="" placeholder="Group Name" class="input-sm form-control">*/
/* 								</div>*/
/* 								*/
/* 								{% macro render_group(data, i) %}*/
/* 									{% import _self as macros %}*/
/* 									*/
/* 									<ul>*/
/* 									{% for level in data %}*/
/* 										<li class="row col-md-12 item-branch-group item-branch-group-{{ level.id }} item-child-{{ i }}" data-id="{{ level.id }}" data-value="{{ level.name }}">*/
/*     											<div class=" float-left ml-4 pt-1 block-group">*/
/*     												<input class="check-group" type="checkbox" name="level[]" value="{{ level.id }}"> &nbsp; {{ level.name|capitalize }}*/
/*     											</div>*/
/* 										*/
/*         										{% if level.branch_id is not empty %}*/
/*         											<ul class="row col-md-12 item-branch-group item-branch-group-{{ level.branch_id }} item-child-{{ i+1 }}" data-id="{{ level.branch_id }}" data-value="{{ level.branch_name }}">*/
/*         												<div class=" float-left ml-4 pt-1 block-group">*/
/*         													<input class="check-group" type="checkbox" name="level[]" value="{{ level.branch_id }}"> &nbsp; {{ level.branch_name|capitalize }}*/
/*         												</div>*/
/*         											*/
/*         											{% for group_camera in level.group_camera %}*/
/*         												{% if group_camera.id is not empty %}*/
/*         													<li class="row col-md-12  group-item-branchgroup item-group-{{ group_camera.id }} item-child-{{ i+2 }} parent-{{ branch.id }}" data-id="{{ group_camera.id }}" data-value="{{ group_camera.name }}">*/
/*         														<div class=" float-left ml-4 pt-1 block-group">*/
/*         															<input class="check-camera-group" type="checkbox" name="option_group_camera[]" value="{{ group_camera.id }}"  > &nbsp; {{ group_camera.name|capitalize }}*/
/*         														</div>*/
/*         													</li>*/
/*         												{% endif %}*/
/*         											{% endfor %}*/
/*         											</ul>*/
/*         										{% endif %}*/
/*         										*/
/*         										{% if level.group_branch is not empty %}*/
/*         										    {{ macros.render_group(level.group_branch, i+1) }}*/
/*         									    {% endif %}*/
/* 									    </li>*/
/* 									{% endfor %}*/
/* 									</ul>*/
/* 								{% endmacro %}*/
/* 								*/
/* 								<ul class="col-md-12 float-left pb-1 block-group">*/
/* 								{% for group in branchs_groups %}*/
/* 									*/
/* 										<li class="item-branch-group item-branch-group-{{ group.id }}" data-id="{{ group.id }}" data-value="{{ group.name }}">*/
/*     											<div class=" float-left pb-1">*/
/*     												<input class="check-group" type="checkbox" name="group_{{ group.id }}" id="group-{{ group.id }}" value="{{ group.id }}" class="group"> &nbsp; {{ group.name|capitalize }}*/
/*     											</div>*/
/* 										*/
/*         										{% if group.group_branch is not empty %}*/
/*         											{% import _self as macros %}*/
/*         											{{ macros.render_group(group.group_branch, 1) }}*/
/*         										{% endif %}*/
/* 										</li>*/
/* 									*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 float-left criteria-group-right">*/
/* 							<div class="row">*/
/* 								<div class="col-md-6 float-left">*/
/* 									<label> <input type="radio" name="option_right" checked  value="1" class="group-right">&nbsp; Date*/
/* 									</label>*/
/* 								</div>*/
/* 								<div class="col-md-6 float-left">*/
/* 									<label> <input type="radio" name="option_right" value="2" class="group-right">&nbsp; Event*/
/* 									</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 							<div class="row pt-2 item-date">*/
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
/*     												<div class="  block-fillter-start ">*/
/*         												<select name="option_week_year_start" id="option_week_year_start" class="">*/
/*         													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*         														<option value="{{ year }}">{{ year }}</option>*/
/*         													{% endfor %}*/
/*         												</select>*/
/*         												<select name="option_week_start" id="option_week_start" class="ml-1">*/
/*         													{% for key, week in week_format %}*/
/*         														<option value="{{ key }}">{{ week }}</option>*/
/*         													{% endfor %}*/
/*         												</select>*/
/*     												</div>*/
/*     												<div class="  block-fillter-dash">-</div>*/
/*     												<div class="  block-fillter-end">*/
/*         												<select name="option_week_year_end" id="option_week_year_end" class="">*/
/*         													{% for year in range(("now"|date("Y")),("now"|date("Y"))-10) %}*/
/*         														<option value="{{ year }}">{{ year }}</option>*/
/*         													{% endfor %}*/
/*         												</select>*/
/*         												<select name="option_week_end" id="option_week_end" class="ml-1">*/
/*         													{% for key, week in week_format %}*/
/*         														<option value="{{ key }}">{{ week }}</option>*/
/*         													{% endfor %}*/
/*         												</select>*/
/*     												</div>*/
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
/* 								<div class="col-md-12 float-left">*/
/* 									<div class="row ">*/
/* 										<div class=" float-left pt-1 criteria-date-radio ">*/
/* 											<label> <input type="radio" name="option_group_date" value="4"> Quarter*/
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
/* 								<div class="col-md-12 float-left">*/
/* 									<div class="row ">*/
/* 										<div class=" float-left pt-1 criteria-date-radio">*/
/* 											<label> <input type="radio" name="option_group_date" value="5"> Year*/
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
/* 							</div>*/
/* 							<div class="row pt-2 mb-5 item-event hide">*/
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
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
