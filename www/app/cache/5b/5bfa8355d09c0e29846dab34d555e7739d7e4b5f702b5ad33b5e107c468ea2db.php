<?php

/* layout/top.html */
class __TwigTemplate_5cd4632eb8d65ca3c0ea1cd687b76b0a8f8d4d406fafbb642585aadb45ca8a92 extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top' => array(
                $this,
                'block_top'
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('top', $context, $blocks);
        // line 82
        echo "            ";
    }

    // line 1
    public function block_top($context, array $blocks = array())
    {
        // line 2
        echo "  <div class=\"theme-loader\">
        <div class=\"ball-scale\">
            <div class='contain'>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"pcoded\" class=\"pcoded\">
        <div class=\"pcoded-overlay-box\"></div>
        <div class=\"pcoded-container navbar-wrapper\">
        
            <nav class=\"navbar header-navbar pcoded-header\">
                <div class=\"navbar-wrapper\">
                    <div class=\"navbar-logo\"  style=\"background-color: #fff;\">
                        <a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#!\"> <i class=\"feather icon-menu\" style=\"color: #000;\"></i></a> 
                        <a href=\"./\"> <img class=\"img-fluid\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/img/logo.png\" alt=\"Thailand Boxing Associations\"  style=\"height:45px;\" /></a> 
                        <a class=\"mobile-options\"> <i class=\"feather icon-more-horizontal\"></i></a>
                    </div>
                    <div class=\"navbar-container container-fluid\">
    
                        <ul class=\"nav-right\">
                            
                            <li class=\"user-profile header-notification\">
                                <div class=\"dropdown-primary dropdown\">
                                    <div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <img
                                            src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-4.jpg\"
                                            class=\"img-radius\" alt=\"User-Profile-Image\"> <span>Administrator</span>
                                        <i class=\"feather icon-chevron-down\"></i>
                                    </div>
                                    <ul
                                        class=\"show-notification profile-notification dropdown-menu\"
                                        data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
                                        <li><a href=\"#!\"> <i class=\"feather icon-settings\"></i>
                                                Settings
                                        </a></li>
                                        <li><a href=\"user-profile.html\"> <i class=\"feather icon-user\"></i>
                                                Profile
                                        </a></li>
                                        <li><a href=\"auth-normal-sign-in.html\"> <i
                                                class=\"feather icon-log-out\"></i> Logout
                                        </a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>";
    }

    public function getTemplateName()
    {
        return "layout/top.html";
    }

    public function getDebugInfo()
    {
        return array(
            90 => 58,
            76 => 47,
            29 => 2,
            26 => 1,
            22 => 82,
            20 => 1
        );
    }
}
/* {% block top %}*/
/*   <div class="theme-loader">*/
/*         <div class="ball-scale">*/
/*             <div class='contain'>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="pcoded" class="pcoded">*/
/*         <div class="pcoded-overlay-box"></div>*/
/*         <div class="pcoded-container navbar-wrapper">*/
/*         */
/*             <nav class="navbar header-navbar pcoded-header">*/
/*                 <div class="navbar-wrapper">*/
/*                     <div class="navbar-logo"  style="background-color: #fff;">*/
/*                         <a class="mobile-menu" id="mobile-collapse" href="#!"> <i class="feather icon-menu" style="color: #000;"></i></a> */
/*                         <a href="./"> <img class="img-fluid" src="{{ base_url }}/theme/assets/img/logo.png" alt="Thailand Boxing Associations"  style="height:45px;" /></a> */
/*                         <a class="mobile-options"> <i class="feather icon-more-horizontal"></i></a>*/
/*                     </div>*/
/*                     <div class="navbar-container container-fluid">*/
/*     */
/*                         <ul class="nav-right">*/
/*                             */
/*                             <li class="user-profile header-notification">*/
/*                                 <div class="dropdown-primary dropdown">*/
/*                                     <div class="dropdown-toggle" data-toggle="dropdown">*/
/*                                         <img*/
/*                                             src="{{ base_url }}/theme/assets/images/avatar-4.jpg"*/
/*                                             class="img-radius" alt="User-Profile-Image"> <span>Administrator</span>*/
/*                                         <i class="feather icon-chevron-down"></i>*/
/*                                     </div>*/
/*                                     <ul*/
/*                                         class="show-notification profile-notification dropdown-menu"*/
/*                                         data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">*/
/*                                         <li><a href="#!"> <i class="feather icon-settings"></i>*/
/*                                                 Settings*/
/*                                         </a></li>*/
/*                                         <li><a href="user-profile.html"> <i class="feather icon-user"></i>*/
/*                                                 Profile*/
/*                                         </a></li>*/
/*                                         <li><a href="auth-normal-sign-in.html"> <i*/
/*                                                 class="feather icon-log-out"></i> Logout*/
/*                                         </a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*     {% endblock %}*/
/*             */
