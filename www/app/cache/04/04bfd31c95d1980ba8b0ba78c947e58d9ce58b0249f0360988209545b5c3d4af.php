<?php

/* filter/group.twig */
class __TwigTemplate_812d3f72574f1a50dd7dbbe4a3da335a7c67d5997fa418958cc9931aa8fea1d0 extends Twig_Template
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
        echo "<div class=\"row pt-2 item-group hide\">
\t<div class=\" input-group criteria-search ml-3 pb-3\">
\t\t<input type=\"text\" name=\"option_search_group\" id=\"criteria_search_group\" value=\"\" placeholder=\"Group Name\" class=\"input-sm form-control\">
\t</div>";
        // line 41
        echo "\t
\t<ul class=\"col-md-12 float-left pb-1 block-group\">";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs_groups"]) ? $context["branchs_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 44
            echo "\t\t
\t\t\t<li class=\"item-branch-group item-branch-group-";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" data-value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\" float-left pb-1\">
\t\t\t\t\t\t<input class=\"check-group\" type=\"checkbox\" name=\"group_";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" id=\"group-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" class=\"group\"> &nbsp;";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group"], "name", array())), "html", null, true);
            echo "
\t\t\t\t\t</div>";
            // line 50
            if ( !twig_test_empty($this->getAttribute($context["group"], "group_branch", array()))) {
                // line 51
                $context["macros"] = $this;
                // line 52
                echo $context["macros"]->getrender_group($this->getAttribute($context["group"], "group_branch", array()), 1);
            }
            // line 54
            echo "\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t</ul>
</div>";
    }

    // line 6
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
            // line 7
            $context["macros"] = $this;
            // line 8
            echo "\t\t
\t\t<ul>";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 11
                echo "\t\t\t<li class=\"row col-md-12 item-branch-group item-branch-group-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "id", array()), "html", null, true);
                echo " item-child-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "id", array()), "html", null, true);
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\" float-left ml-4 pt-1 block-group\">
\t\t\t\t\t\t<input class=\"check-group\" type=\"checkbox\" name=\"level[]\" value=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "id", array()), "html", null, true);
                echo "\"> &nbsp;";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["level"], "name", array())), "html", null, true);
                echo "
\t\t\t\t\t</div>";
                // line 16
                if ( !twig_test_empty($this->getAttribute($context["level"], "branch_id", array()))) {
                    // line 17
                    echo "\t\t\t\t\t\t<ul class=\"row col-md-12 item-branch-group item-branch-group-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "branch_id", array()), "html", null, true);
                    echo " item-child-";
                    echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "branch_id", array()), "html", null, true);
                    echo "\" data-value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "branch_name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\" float-left ml-4 pt-1 block-group\">
\t\t\t\t\t\t\t\t<input class=\"check-group\" type=\"checkbox\" name=\"level[]\" value=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "branch_id", array()), "html", null, true);
                    echo "\"> &nbsp;";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["level"], "branch_name", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</div>";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["level"], "group_camera", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["group_camera"]) {
                        // line 23
                        if ( !twig_test_empty($this->getAttribute($context["group_camera"], "id", array()))) {
                            // line 24
                            echo "\t\t\t\t\t\t\t\t<li class=\"row col-md-12  group-item-branchgroup item-group-";
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
\t\t\t\t\t\t\t\t\t<div class=\" float-left ml-4 pt-1 block-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"check-camera-group\" type=\"checkbox\" name=\"option_group_camera[]\" value=\"";
                            // line 26
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group_camera"], "id", array()), "html", null, true);
                            echo "\"  > &nbsp;";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group_camera"], "name", array())), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_camera'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "\t\t\t\t\t\t</ul>";
                }
                // line 34
                if ( !twig_test_empty($this->getAttribute($context["level"], "group_branch", array()))) {
                    // line 35
                    echo $context["macros"]->getrender_group($this->getAttribute($context["level"], "group_branch", array()), ((isset($context["i"]) ? $context["i"] : null) + 1));
                }
                // line 37
                echo "\t\t    </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t</ul>";
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
        return "filter/group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 39,  171 => 37,  168 => 35,  166 => 34,  163 => 31,  151 => 26,  137 => 24,  135 => 23,  131 => 22,  125 => 19,  113 => 17,  111 => 16,  105 => 13,  93 => 11,  89 => 10,  86 => 8,  84 => 7,  71 => 6,  66 => 57,  60 => 54,  57 => 52,  55 => 51,  53 => 50,  43 => 47,  34 => 45,  31 => 44,  27 => 43,  24 => 41,  19 => 1,);
    }
}
/* <div class="row pt-2 item-group hide">*/
/* 	<div class=" input-group criteria-search ml-3 pb-3">*/
/* 		<input type="text" name="option_search_group" id="criteria_search_group" value="" placeholder="Group Name" class="input-sm form-control">*/
/* 	</div>*/
/* 	*/
/* 	{% macro render_group(data, i) %}*/
/* 		{% import _self as macros %}*/
/* 		*/
/* 		<ul>*/
/* 		{% for level in data %}*/
/* 			<li class="row col-md-12 item-branch-group item-branch-group-{{ level.id }} item-child-{{ i }}" data-id="{{ level.id }}" data-value="{{ level.name }}">*/
/* 					<div class=" float-left ml-4 pt-1 block-group">*/
/* 						<input class="check-group" type="checkbox" name="level[]" value="{{ level.id }}"> &nbsp; {{ level.name|capitalize }}*/
/* 					</div>*/
/* 			*/
/* 					{% if level.branch_id is not empty %}*/
/* 						<ul class="row col-md-12 item-branch-group item-branch-group-{{ level.branch_id }} item-child-{{ i+1 }}" data-id="{{ level.branch_id }}" data-value="{{ level.branch_name }}">*/
/* 							<div class=" float-left ml-4 pt-1 block-group">*/
/* 								<input class="check-group" type="checkbox" name="level[]" value="{{ level.branch_id }}"> &nbsp; {{ level.branch_name|capitalize }}*/
/* 							</div>*/
/* 						*/
/* 						{% for group_camera in level.group_camera %}*/
/* 							{% if group_camera.id is not empty %}*/
/* 								<li class="row col-md-12  group-item-branchgroup item-group-{{ group_camera.id }} item-child-{{ i+2 }} parent-{{ branch.id }}" data-id="{{ group_camera.id }}" data-value="{{ group_camera.name }}">*/
/* 									<div class=" float-left ml-4 pt-1 block-group">*/
/* 										<input class="check-camera-group" type="checkbox" name="option_group_camera[]" value="{{ group_camera.id }}"  > &nbsp; {{ group_camera.name|capitalize }}*/
/* 									</div>*/
/* 								</li>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 						</ul>*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if level.group_branch is not empty %}*/
/* 					    {{ macros.render_group(level.group_branch, i+1) }}*/
/* 				    {% endif %}*/
/* 		    </li>*/
/* 		{% endfor %}*/
/* 		</ul>*/
/* 	{% endmacro %}*/
/* 	*/
/* 	<ul class="col-md-12 float-left pb-1 block-group">*/
/* 	{% for group in branchs_groups %}*/
/* 		*/
/* 			<li class="item-branch-group item-branch-group-{{ group.id }}" data-id="{{ group.id }}" data-value="{{ group.name }}">*/
/* 					<div class=" float-left pb-1">*/
/* 						<input class="check-group" type="checkbox" name="group_{{ group.id }}" id="group-{{ group.id }}" value="{{ group.id }}" class="group"> &nbsp; {{ group.name|capitalize }}*/
/* 					</div>*/
/* 			*/
/* 					{% if group.group_branch is not empty %}*/
/* 						{% import _self as macros %}*/
/* 						{{ macros.render_group(group.group_branch, 1) }}*/
/* 					{% endif %}*/
/* 			</li>*/
/* 		*/
/* 	{% endfor %}*/
/* 	</ul>*/
/* </div>*/
