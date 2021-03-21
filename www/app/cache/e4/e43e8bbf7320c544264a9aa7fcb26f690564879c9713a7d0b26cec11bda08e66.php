<?php

/* layout/menu.html */
class __TwigTemplate_5c29be0d5973cf4f2c55eab746c491057db10e9b99b07a7ef85ac7b2f60189e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<nav class=\"navbar header-navbar pcoded-header\">
\t<div class=\"navbar-wrapper\">

\t\t<div class=\"navbar-logo\">
\t\t\t<a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#!\"> <i class=\"feather icon-menu\"></i>
\t\t\t</a> <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\" style=\"width: 55%; padding-left: 10px;\"> <img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/logo-iwpc-white.png\" alt=\"Theme-Logo\">
\t\t\t</a> <a class=\"mobile-options\"> <i class=\"feather icon-more-horizontal\"></i>
\t\t\t</a>
\t\t</div>
\t\t
\t\t<div class=\"navbar-top-bar float-left\">
 
\t\t\t<ul class=\"nav-right   text-right\">

\t\t\t\t<li class=\"user-profile header-notification\">
\t\t\t\t\t<div class=\"dropdown-primary dropdown\">
\t\t\t\t\t\t<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span style=\"cursor: pointer;\">Administrator2</span> <i class=\"feather icon-chevron-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"show-notification profile-notification dropdown-menu right-mini-menu\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
\t\t\t\t\t\t\t<li class=\"pl-2\">
\t\t\t\t\t\t\t<a href=\"#!\"> <i class=\"feather icon-settings\"></i> Settings</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"pl-2\"><a href=\"user-profile.htm\"> <i class=\"feather icon-user\"></i> Profile
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li class=\"pl-2\"><a href=\"email-inbox.htm\"> <i class=\"feather icon-mail\"></i> My Messages
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li class=\"pl-2\"><a href=\"auth-lock-screen.htm\"> <i class=\"feather icon-lock\"></i> Change Password
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t<li class=\"pl-2\"><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/logout\"> <i class=\"feather icon-log-out\"></i> Logout
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
<div id=\"sidebar\" class=\"users p-chat-user showChat\">
\t<div class=\"had-container\">
\t\t<div class=\"card card_main p-fixed users-main\">
\t\t\t<div class=\"user-box\">
\t\t\t\t<div class=\"chat-inner-header\">
\t\t\t\t\t<div class=\"back_chatBox\">
\t\t\t\t\t\t<div class=\"right-icon-control\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control  search-text\" placeholder=\"Search Friend\" id=\"search-friends\">
\t\t\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t\t\t\t<i class=\"icofont icofont-search\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"main-friend-list\">
\t\t\t\t\t<div class=\"media userlist-box\" data-id=\"1\" data-status=\"online\" data-username=\"Josephin Doe\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Josephin Doe\">
\t\t\t\t\t\t<a class=\"media-left\" href=\"#!\"> <img class=\"media-object img-radius img-radius\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-3.jpg\" alt=\"Generic placeholder image \">
\t\t\t\t\t\t\t<div class=\"live-status bg-success\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"f-13 chat-header\">Josephin Doe</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"media userlist-box\" data-id=\"2\" data-status=\"online\" data-username=\"Lary Doe\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Lary Doe\">
\t\t\t\t\t\t<a class=\"media-left\" href=\"#!\"> <img class=\"media-object img-radius\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
\t\t\t\t\t\t\t<div class=\"live-status bg-success\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"f-13 chat-header\">Lary Doe</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"media userlist-box\" data-id=\"3\" data-status=\"online\" data-username=\"Alice\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Alice\">
\t\t\t\t\t\t<a class=\"media-left\" href=\"#!\"> <img class=\"media-object img-radius\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
\t\t\t\t\t\t\t<div class=\"live-status bg-success\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"f-13 chat-header\">Alice</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"media userlist-box\" data-id=\"4\" data-status=\"online\" data-username=\"Alia\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Alia\">
\t\t\t\t\t\t<a class=\"media-left\" href=\"#!\"> <img class=\"media-object img-radius\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-3.jpg\" alt=\"Generic placeholder image\">
\t\t\t\t\t\t\t<div class=\"live-status bg-success\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"f-13 chat-header\">Alia</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"media userlist-box\" data-id=\"5\" data-status=\"online\" data-username=\"Suzen\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Suzen\">
\t\t\t\t\t\t<a class=\"media-left\" href=\"#!\"> <img class=\"media-object img-radius\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
\t\t\t\t\t\t\t<div class=\"live-status bg-success\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"f-13 chat-header\">Suzen</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"showChat_inner\">
\t<div class=\"media chat-inner-header\">
\t\t<a class=\"back_chatBox\"> <i class=\"feather icon-chevron-left\"></i> Josephin Doe
\t\t</a>
\t</div>
\t<div class=\"media chat-messages\">
\t\t<a class=\"media-left photo-table\" href=\"#!\"> <img class=\"media-object img-radius img-radius m-t-5\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-3.jpg\" alt=\"Generic placeholder image\">
\t\t</a>
\t\t<div class=\"media-body chat-menu-content\">
\t\t\t<div class=\"\">
\t\t\t\t<p class=\"chat-cont\">I'm just looking around. Will you tell me something about yourself?</p>
\t\t\t\t<p class=\"chat-time\">8:20 a.m.</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"media chat-messages\">
\t\t<div class=\"media-body chat-menu-reply\">
\t\t\t<div class=\"\">
\t\t\t\t<p class=\"chat-cont\">I'm just looking around. Will you tell me something about yourself?</p>
\t\t\t\t<p class=\"chat-time\">8:20 a.m.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"media-right photo-table\">
\t\t\t<a href=\"#!\"> <img class=\"media-object img-radius img-radius m-t-5\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"chat-reply-box p-b-20\">
\t\t<div class=\"right-icon-control\">
\t\t\t<input type=\"text\" class=\"form-control search-text\" placeholder=\"Share Your Thoughts\">
\t\t\t<div class=\"form-icon\">
\t\t\t\t<i class=\"feather icon-navigation\"></i>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"pcoded-wrapper\">

\t<nav class=\"pcoded-navbar\">
\t\t<div class=\"pcoded-inner-navbar main-menu\">
\t\t\t<div class=\"pcoded-navigatio-lavel  \">&nbsp;</div>
\t\t\t<div class=\"pcoded-navigatio-lavel  \">&nbsp;</div>
\t\t\t\t
\t\t\t\t";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["main_menu"]) {
            // line 145
            echo "\t\t\t\t
\t\t\t\t\t";
            // line 146
            $context["is_main_href"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute($context["main_menu"], "name", array()));
            // line 147
            echo "\t\t\t\t\t";
            if ( !twig_test_empty($this->getAttribute($context["main_menu"], "sub", array()))) {
                // line 148
                echo "\t\t\t\t\t\t";
                $context["is_main_href"] = "javascript:void(0)";
                // line 149
                echo "\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"pcoded-navigatio-lavel font-weight-bold \">
\t\t\t\t\t\t<a href=\"";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["is_main_href"]) ? $context["is_main_href"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t<span class=\"pcoded-micon\"><i class=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["main_menu"], "icon", array()), "html", null, true);
            echo "\"></i></span>
\t\t\t\t\t\t<span class=\"pcoded-mtext\">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["main_menu"], "alias", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t";
            // line 158
            if ( !twig_test_empty($this->getAttribute($context["main_menu"], "sub", array()))) {
                // line 159
                echo "\t\t\t\t\t\t<ul class=\"pcoded-item pcoded-left-item custom-menu\">
\t\t\t\t\t\t\t";
                // line 160
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["main_menu"], "sub", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_menu"]) {
                    // line 161
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 162
                    $context["is_caret"] = "no_caret";
                    // line 163
                    echo "\t\t\t\t\t\t\t\t";
                    $context["is_href"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute($context["sub_menu"], "name", array()));
                    // line 164
                    echo "\t\t\t\t\t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($context["sub_menu"], "sub", array()))) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["is_caret"] = "caret";
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["is_href"] = "javascript:void(0)";
                        // line 167
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 168
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 169
                    $context["is_active"] = "";
                    // line 170
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["sub_menu"], "name", array()) == $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "group", array()))) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["is_active"] = " pcoded-trigger";
                        // line 172
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 173
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"pcoded-hasmenu ";
                    // line 174
                    echo twig_escape_filter($this->env, (isset($context["is_active"]) ? $context["is_active"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 175
                    echo twig_escape_filter($this->env, (isset($context["is_href"]) ? $context["is_href"] : null), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, (isset($context["is_caret"]) ? $context["is_caret"] : null), "html", null, true);
                    echo "\"> 
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-micon\"><i class=\"";
                    // line 176
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub_menu"], "icon", array()), "html", null, true);
                    echo "\"></i></span> 
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">";
                    // line 177
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub_menu"], "alias", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    // line 179
                    if ( !twig_test_empty($this->getAttribute($context["sub_menu"], "sub", array()))) {
                        // line 180
                        echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"pcoded-submenu\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 181
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_menu"], "sub", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub_sub_menu"]) {
                            // line 182
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 183
                            $context["is_sub_active"] = "";
                            // line 184
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["sub_sub_menu"], "name", array()) == $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "main", array()))) {
                                // line 185
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["is_sub_active"] = " active";
                                // line 186
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 187
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"";
                            // line 188
                            echo twig_escape_filter($this->env, (isset($context["is_sub_active"]) ? $context["is_sub_active"] : null), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 189
                            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub_sub_menu"], "name", array()), "html", null, true);
                            echo "\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-micon\"><i class=\"";
                            // line 190
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub_menu"], "icon", array()), "html", null, true);
                            echo "\"></i></span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">";
                            // line 191
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub_sub_menu"], "alias", array()), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_sub_menu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 197
                    echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 199
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 201
            echo " \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "\t\t</div>
\t</nav>


";
    }

    public function getTemplateName()
    {
        return "layout/menu.html";
    }

    public function getDebugInfo()
    {
        return array (  372 => 202,  366 => 201,  362 => 199,  355 => 197,  351 => 195,  341 => 191,  337 => 190,  331 => 189,  327 => 188,  324 => 187,  321 => 186,  318 => 185,  315 => 184,  313 => 183,  310 => 182,  306 => 181,  303 => 180,  301 => 179,  296 => 177,  292 => 176,  286 => 175,  282 => 174,  279 => 173,  276 => 172,  273 => 171,  270 => 170,  268 => 169,  265 => 168,  262 => 167,  259 => 166,  256 => 165,  253 => 164,  250 => 163,  248 => 162,  245 => 161,  241 => 160,  238 => 159,  236 => 158,  229 => 154,  225 => 153,  221 => 152,  217 => 150,  214 => 149,  211 => 148,  208 => 147,  206 => 146,  203 => 145,  199 => 144,  175 => 123,  155 => 106,  134 => 88,  123 => 80,  112 => 72,  101 => 64,  90 => 56,  62 => 31,  33 => 7,  26 => 2,  20 => 1,);
    }
}
/* {% block head %}*/
/* <nav class="navbar header-navbar pcoded-header">*/
/* 	<div class="navbar-wrapper">*/
/* */
/* 		<div class="navbar-logo">*/
/* 			<a class="mobile-menu" id="mobile-collapse" href="#!"> <i class="feather icon-menu"></i>*/
/* 			</a> <a href="{{ base_url }}" style="width: 55%; padding-left: 10px;"> <img class="img-fluid" src="{{ base_url }}/theme/assets/images/logo-iwpc-white.png" alt="Theme-Logo">*/
/* 			</a> <a class="mobile-options"> <i class="feather icon-more-horizontal"></i>*/
/* 			</a>*/
/* 		</div>*/
/* 		*/
/* 		<div class="navbar-top-bar float-left">*/
/*  */
/* 			<ul class="nav-right   text-right">*/
/* */
/* 				<li class="user-profile header-notification">*/
/* 					<div class="dropdown-primary dropdown">*/
/* 						<div class="dropdown-toggle" data-toggle="dropdown">*/
/* 							<span style="cursor: pointer;">Administrator2</span> <i class="feather icon-chevron-down"></i>*/
/* 						</div>*/
/* 						<ul class="show-notification profile-notification dropdown-menu right-mini-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">*/
/* 							<li class="pl-2">*/
/* 							<a href="#!"> <i class="feather icon-settings"></i> Settings</a>*/
/* 							</li>*/
/* 							<li class="pl-2"><a href="user-profile.htm"> <i class="feather icon-user"></i> Profile*/
/* 							</a></li>*/
/* 							<li class="pl-2"><a href="email-inbox.htm"> <i class="feather icon-mail"></i> My Messages*/
/* 							</a></li>*/
/* 							<li class="pl-2"><a href="auth-lock-screen.htm"> <i class="feather icon-lock"></i> Change Password*/
/* 							</a></li>*/
/* 							<li class="pl-2"><a href="{{ base_url }}/logout"> <i class="feather icon-log-out"></i> Logout*/
/* 							</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </nav>*/
/* <div id="sidebar" class="users p-chat-user showChat">*/
/* 	<div class="had-container">*/
/* 		<div class="card card_main p-fixed users-main">*/
/* 			<div class="user-box">*/
/* 				<div class="chat-inner-header">*/
/* 					<div class="back_chatBox">*/
/* 						<div class="right-icon-control">*/
/* 							<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">*/
/* 							<div class="form-icon">*/
/* 								<i class="icofont icofont-search"></i>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="main-friend-list">*/
/* 					<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">*/
/* 						<a class="media-left" href="#!"> <img class="media-object img-radius img-radius" src="{{ base_url }}/theme/assets/images/avatar-3.jpg" alt="Generic placeholder image ">*/
/* 							<div class="live-status bg-success"></div>*/
/* 						</a>*/
/* 						<div class="media-body">*/
/* 							<div class="f-13 chat-header">Josephin Doe</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">*/
/* 						<a class="media-left" href="#!"> <img class="media-object img-radius" src="{{ base_url }}/theme/assets/images/avatar-2.jpg" alt="Generic placeholder image">*/
/* 							<div class="live-status bg-success"></div>*/
/* 						</a>*/
/* 						<div class="media-body">*/
/* 							<div class="f-13 chat-header">Lary Doe</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">*/
/* 						<a class="media-left" href="#!"> <img class="media-object img-radius" src="{{ base_url }}/theme/assets/images/avatar-4.jpg" alt="Generic placeholder image">*/
/* 							<div class="live-status bg-success"></div>*/
/* 						</a>*/
/* 						<div class="media-body">*/
/* 							<div class="f-13 chat-header">Alice</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">*/
/* 						<a class="media-left" href="#!"> <img class="media-object img-radius" src="{{ base_url }}/theme/assets/images/avatar-3.jpg" alt="Generic placeholder image">*/
/* 							<div class="live-status bg-success"></div>*/
/* 						</a>*/
/* 						<div class="media-body">*/
/* 							<div class="f-13 chat-header">Alia</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">*/
/* 						<a class="media-left" href="#!"> <img class="media-object img-radius" src="{{ base_url }}/theme/assets/images/avatar-2.jpg" alt="Generic placeholder image">*/
/* 							<div class="live-status bg-success"></div>*/
/* 						</a>*/
/* 						<div class="media-body">*/
/* 							<div class="f-13 chat-header">Suzen</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="showChat_inner">*/
/* 	<div class="media chat-inner-header">*/
/* 		<a class="back_chatBox"> <i class="feather icon-chevron-left"></i> Josephin Doe*/
/* 		</a>*/
/* 	</div>*/
/* 	<div class="media chat-messages">*/
/* 		<a class="media-left photo-table" href="#!"> <img class="media-object img-radius img-radius m-t-5" src="{{ base_url }}/theme/assets/images/avatar-3.jpg" alt="Generic placeholder image">*/
/* 		</a>*/
/* 		<div class="media-body chat-menu-content">*/
/* 			<div class="">*/
/* 				<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>*/
/* 				<p class="chat-time">8:20 a.m.</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="media chat-messages">*/
/* 		<div class="media-body chat-menu-reply">*/
/* 			<div class="">*/
/* 				<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>*/
/* 				<p class="chat-time">8:20 a.m.</p>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="media-right photo-table">*/
/* 			<a href="#!"> <img class="media-object img-radius img-radius m-t-5" src="{{ base_url }}/theme/assets/images/avatar-4.jpg" alt="Generic placeholder image">*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="chat-reply-box p-b-20">*/
/* 		<div class="right-icon-control">*/
/* 			<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">*/
/* 			<div class="form-icon">*/
/* 				<i class="feather icon-navigation"></i>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="pcoded-wrapper">*/
/* */
/* 	<nav class="pcoded-navbar">*/
/* 		<div class="pcoded-inner-navbar main-menu">*/
/* 			<div class="pcoded-navigatio-lavel  ">&nbsp;</div>*/
/* 			<div class="pcoded-navigatio-lavel  ">&nbsp;</div>*/
/* 				*/
/* 				{% for main_menu in menu %}*/
/* 				*/
/* 					{% set is_main_href = base_url ~'/'~ main_menu.name %}*/
/* 					{% if main_menu.sub is not empty %}*/
/* 						{% set is_main_href = 'javascript:void(0)' %}*/
/* 					{% endif %}*/
/* 					*/
/* 					<div class="pcoded-navigatio-lavel font-weight-bold ">*/
/* 						<a href="{{ is_main_href }}">*/
/* 						<span class="pcoded-micon"><i class="{{ main_menu.icon }}"></i></span>*/
/* 						<span class="pcoded-mtext">{{ main_menu.alias }}</span>*/
/* 						</a>*/
/* 					</div>*/
/* */
/* 					{% if main_menu.sub is not empty %}*/
/* 						<ul class="pcoded-item pcoded-left-item custom-menu">*/
/* 							{% for sub_menu in main_menu.sub %}*/
/* 							*/
/* 								{% set is_caret = 'no_caret' %}*/
/* 								{% set is_href = base_url~'/'~sub_menu.name %}*/
/* 								{% if sub_menu.sub is not empty %}*/
/* 									{% set is_caret = 'caret' %}*/
/* 									{% set is_href = 'javascript:void(0)' %}*/
/* 								{% endif %}*/
/* 								*/
/* 								{% set is_active = '' %}*/
/* 								{% if sub_menu.name == segment.group %}*/
/* 									{% set is_active = ' pcoded-trigger' %}*/
/* 								{% endif %}*/
/* 								*/
/* 								<li class="pcoded-hasmenu {{ is_active }}">*/
/* 									<a href="{{ is_href }}" class="{{ is_caret }}"> */
/* 										<span class="pcoded-micon"><i class="{{ sub_menu.icon }}"></i></span> */
/* 										<span class="pcoded-mtext">{{ sub_menu.alias }}</span>*/
/* 									</a>*/
/* 									{% if sub_menu.sub is not empty %}*/
/* 										<ul class="pcoded-submenu">*/
/* 											{% for sub_sub_menu in sub_menu.sub %}*/
/* 												*/
/* 												{% set is_sub_active = '' %}*/
/* 												{% if sub_sub_menu.name == segment.main %}*/
/* 													{% set is_sub_active = ' active' %}*/
/* 												{% endif %}*/
/* 												*/
/* 												<li class="{{ is_sub_active }}">*/
/* 													<a href="{{ base_url }}/{{ sub_sub_menu.name }}"> */
/* 														<span class="pcoded-micon"><i class="{{ sub_menu.icon }}"></i></span> */
/* 														<span class="pcoded-mtext">{{ sub_sub_menu.alias }}</span>*/
/* 													</a>*/
/* 												</li>*/
/* 											{% endfor %}*/
/* 										</ul>*/
/* 									{% endif %}*/
/* 								</li>*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 					{% endif %}*/
/*  				{% endfor %}*/
/* 		</div>*/
/* 	</nav>*/
/* */
/* */
/* {% endblock %}*/
