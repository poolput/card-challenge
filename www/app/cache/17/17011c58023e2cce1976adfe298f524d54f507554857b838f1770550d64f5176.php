<?php

/* filter/location.twig */
class __TwigTemplate_e1b1f7a44993b58f01757cd8a0b14be149a31ee6481a8d6e6304a000d121d66d extends Twig_Template
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
        echo "<div class=\"row pt-2 item-location\">
    <div class=\" input-group criteria-search ml-3 pb-3\">
    \t<input type=\"text\" name=\"option_search_location\" id=\"criteria_search_location\" value=\"\" placeholder=\"Location Name\" class=\"input-sm form-control\">
    </div>
    <div class=\"row item-all\">
    \t<div class=\"col-md-12 float-left pb-1  \">
    \t\t<input checked type=\"checkbox\" name=\"option_location_all\" id=\"option_location_branch\" value=\"1\" > &nbsp;All Branch
    \t</div>
    </div>
    <ul>
    \t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 12
            echo "    \t\t<li class=\"row item-province item-province-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo " \"  >
    \t\t\t<input checked type=\"checkbox\" name=\"option_province[]\" data-parent=\"\" id=\"province-";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" class=\"province\"> &nbsp; ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["province"], "name", array())), "html", null, true);
            echo "
    \t\t\t<div class=\"col-sm-1 text-right collapse-icon\">
    \t\t\t\t<a data-toggle=\"collapse\" 
    \t\t\t\t\tdata-target=\"#parent-";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" 
    \t\t\t\t\taria-expanded=\"true\"><p class=\"collapse-icon-plus\">+</p><p class=\"collapse-icon-minus\">-</p></a>
    \t\t\t</div>
    \t\t\t<ul class=\"collapse show\"
    \t\t\t data-id=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" 
    \t\t\t data-value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "name", array()), "html", null, true);
            echo "\" 
    \t\t\t id=\"parent-";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\">
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["province"], "branch", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
                // line 24
                echo "    \t\t\t\t\t<li class=\"row item-branch item-branch-";
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
    \t\t\t\t\t\t<input checked type=\"checkbox\" id=\"branch-";
                // line 25
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
                echo "\"> &nbsp; ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["branch"], "name", array())), "html", null, true);
                echo "
    \t\t\t\t\t\t<div class=\"col-sm-1 text-right collapse-icon\">
    \t\t\t\t\t\t\t<a data-toggle=\"collapse\" 
    \t\t\t\t\t\t\t\tdata-target=\"#collapse-";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" 
    \t\t\t\t\t\t\t\taria-expanded=\"true\">
    \t\t\t\t\t\t\t\t<p class=\"collapse-icon-plus\">+</p>
    \t\t\t\t\t\t\t\t<p class=\"collapse-icon-minus\">-</p>
    \t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<ul
    \t\t\t\t\t\tclass=\"collapse show\" 
    \t\t\t\t\t\tid=\"collapse-";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\">
    \t\t\t\t\t\t\t";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["branch"], "group", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 38
                    echo "    \t\t\t\t\t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($context["group"], "id", array()))) {
                        // line 39
                        echo "    \t\t\t\t\t\t\t\t\t<li class=\"row location-item-group item-group-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                        echo " item-child-2\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                        echo "\" data-value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                        echo "\" data-parent=\"parent-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                        echo "\">
    \t\t\t\t\t\t\t\t\t\t<input checked type=\"checkbox\" name=\"option_camera_group[]\" data-parent=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                        echo "\"  value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                        echo "\" data-branch-id=\"branch-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                        echo "\" class=\"camera branch-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                        echo "\"> &nbsp; ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group"], "name", array())), "html", null, true);
                        echo "
    \t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t";
                    }
                    // line 43
                    echo "    \t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "    \t\t\t\t\t\t</ul>
    \t\t\t\t\t</li>
    \t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    \t\t\t</ul>
    \t\t</li>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    \t</ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "filter/location.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 50,  165 => 47,  157 => 44,  151 => 43,  137 => 40,  126 => 39,  123 => 38,  119 => 37,  115 => 36,  104 => 28,  86 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  50 => 16,  40 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <div class="row pt-2 item-location">*/
/*     <div class=" input-group criteria-search ml-3 pb-3">*/
/*     	<input type="text" name="option_search_location" id="criteria_search_location" value="" placeholder="Location Name" class="input-sm form-control">*/
/*     </div>*/
/*     <div class="row item-all">*/
/*     	<div class="col-md-12 float-left pb-1  ">*/
/*     		<input checked type="checkbox" name="option_location_all" id="option_location_branch" value="1" > &nbsp;All Branch*/
/*     	</div>*/
/*     </div>*/
/*     <ul>*/
/*     	{% for province in branchs %}*/
/*     		<li class="row item-province item-province-{{ province.id }} "  >*/
/*     			<input checked type="checkbox" name="option_province[]" data-parent="" id="province-{{ province.id }}" value="{{ province.id }}" class="province"> &nbsp; {{ province.name|capitalize }}*/
/*     			<div class="col-sm-1 text-right collapse-icon">*/
/*     				<a data-toggle="collapse" */
/*     					data-target="#parent-{{ province.id }}" */
/*     					aria-expanded="true"><p class="collapse-icon-plus">+</p><p class="collapse-icon-minus">-</p></a>*/
/*     			</div>*/
/*     			<ul class="collapse show"*/
/*     			 data-id="{{ province.id }}" */
/*     			 data-value="{{ province.name }}" */
/*     			 id="parent-{{ province.id }}">*/
/*                     {% for branch in province.branch %}*/
/*     					<li class="row item-branch item-branch-{{ branch.id }} " data-id="{{ branch.id }}" data-value="{{ branch.name }}" id="parent-{{ branch.id }}" data-parent="parent-{{ province.id }}">*/
/*     						<input checked type="checkbox" id="branch-{{ branch.id }}" data-parent="{{ province.id }}" value="{{ branch.id }}" data-province-id="province-{{ province.id }}" name="option_branch[]" value="{{ branch.id }}" class="branch province-{{ province.id }}"> &nbsp; {{ branch.name|capitalize }}*/
/*     						<div class="col-sm-1 text-right collapse-icon">*/
/*     							<a data-toggle="collapse" */
/*     								data-target="#collapse-{{ branch.id }}" */
/*     								aria-expanded="true">*/
/*     								<p class="collapse-icon-plus">+</p>*/
/*     								<p class="collapse-icon-minus">-</p>*/
/*     							</a>*/
/*     						</div>*/
/*     						<ul*/
/*     						class="collapse show" */
/*     						id="collapse-{{ branch.id }}">*/
/*     							{% for group in branch.group %}*/
/*     								{% if group.id is not empty %}*/
/*     									<li class="row location-item-group item-group-{{ group.id }} item-child-2" data-id="{{ group.id }}" data-value="{{ group.name }}" data-parent="parent-{{ branch.id }}">*/
/*     										<input checked type="checkbox" name="option_camera_group[]" data-parent="{{ branch.id }}"  value="{{ group.id }}" data-branch-id="branch-{{ branch.id }}" class="camera branch-{{ branch.id }}"> &nbsp; {{ group.name|capitalize }}*/
/*     									</li>*/
/*     								{% endif %}*/
/*     							{% endfor %}*/
/*     						</ul>*/
/*     					</li>*/
/*     			    {% endfor %}*/
/*     			</ul>*/
/*     		</li>*/
/*     	{% endfor %}*/
/*     	</ul>*/
/*     </div>*/
