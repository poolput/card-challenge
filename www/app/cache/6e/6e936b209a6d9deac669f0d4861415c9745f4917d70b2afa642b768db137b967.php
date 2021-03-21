<?php

/* pages/company/branchgroup/modal.twig */
class __TwigTemplate_30e2ec898c458733ac4309fa04d9c5335882c87aa03db78321dc7cec0d0927e8 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"add-branch-modal\" data-id=\"\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\" modal-dialog branch-Modal\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">Choose Branch for \"<span class=\"group-name-selected\"></span>\"</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body camera-group-modal\">
\t\t\t\t\t<div class=\"row pt-2 item-location\">
\t\t\t\t\t\t\t\t<div class=\" input-group criteria-search ml-3 pb-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_search_location\" id=\"criteria_search_location\" value=\"\" placeholder=\"Location Name\" class=\"input-sm form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row item-all\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1  \">
\t\t\t\t\t\t\t\t\t\t<input checked type=\"checkbox\" name=\"option_location_all\" id=\"option_location_branch\" value=\"1\" > &nbsp;All Branch
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul>";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 22
            echo "    \t\t\t\t\t\t\t\t\t<li class=\"row item-province item-province-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo " \"  >
    \t\t\t\t\t\t\t\t\t\t<input checked type=\"checkbox\" name=\"option_province[]\" data-parent=\"\" id=\"province-";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" class=\"province\"> &nbsp;";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["province"], "name", array())), "html", null, true);
            echo "
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1 text-right collapse-icon\">
        \t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" 
            \t\t\t\t\t\t\t\t\t\tdata-target=\"#parent-";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" 
            \t\t\t\t\t\t\t\t\t\taria-expanded=\"true\"><p class=\"collapse-icon-plus\">+</p><p class=\"collapse-icon-minus\">-</p></a>
        \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t<ul class=\"collapse show\"
    \t\t\t\t\t\t\t\t\t\t data-id=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" 
        \t\t\t\t\t\t\t\t\t data-value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "name", array()), "html", null, true);
            echo "\" 
        \t\t\t\t\t\t\t\t\t id=\"parent-";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\">";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["province"], "branch", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
                // line 34
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
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" data-parent=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "name", array()), "html", null, true);
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
                // line 38
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
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\">";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["branch"], "group", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 48
                    if ( !twig_test_empty($this->getAttribute($context["group"], "id", array()))) {
                        // line 49
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
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                        echo "\" data-value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                        echo "\" value=\"";
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
                // line 54
                echo "            \t\t\t\t\t\t\t\t\t\t\t</ul>
        \t\t\t\t\t\t\t\t\t\t\t</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    \t\t\t\t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary  \" data-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary save-branch \">Save</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "pages/company/branchgroup/modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 60,  171 => 57,  164 => 54,  145 => 50,  134 => 49,  132 => 48,  128 => 47,  125 => 46,  114 => 38,  94 => 35,  81 => 34,  77 => 33,  74 => 32,  70 => 31,  66 => 30,  59 => 26,  49 => 23,  44 => 22,  40 => 21,  19 => 1,);
    }
}
/* <div class="modal fade" id="add-branch-modal" data-id="" tabindex="-1" role="dialog">*/
/* 	<div class=" modal-dialog branch-Modal" role="document">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<h4 class="modal-title">Choose Branch for "<span class="group-name-selected"></span>"</h4>*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/* 					<span aria-hidden="true">&times;</span>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="modal-body camera-group-modal">*/
/* 					<div class="row pt-2 item-location">*/
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
/*     													<input checked type="checkbox" id="branch-{{ branch.id }}" data-parent="{{ province.id }}" value="{{ branch.id }}" data-value="{{ branch.name }}" data-province-id="province-{{ province.id }}" name="option_branch[]" value="{{ branch.id }}" class="branch province-{{ province.id }}"> &nbsp; {{ branch.name|capitalize }}*/
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
/*                     													<input checked type="checkbox" name="option_camera_group[]" data-parent="{{ branch.id }}" data-value="{{ group.name }}" value="{{ group.id }}" data-branch-id="branch-{{ branch.id }}" class="camera branch-{{ branch.id }}"> &nbsp; {{ group.name|capitalize }}*/
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
/* 				*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-outline-secondary  " data-dismiss="modal">Close</button>*/
/* 				<button type="button" class="btn btn-secondary save-branch ">Save</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
