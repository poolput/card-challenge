<?php

/* pages/dashboard.html */
class __TwigTemplate_2ba6552689dd9423a1e8b39bc6ca9ec7b1a5d3190d9fe36a99929209a270dfc1 extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/dashboard.html", 1);
        $this->blocks = array(
            'head' => array(
                $this,
                'block_head'
            ),
            'content' => array(
                $this,
                'block_content'
            ),
            'footer' => array(
                $this,
                'block_footer'
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<!-- Main-body start -->
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<!-- Page-header start -->
\t\t\t\t<div class=\"page-header mt-2\">
\t\t\t\t\t<div class=\"row align-items-end\">
  
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- statustic with progressbar  start -->
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card statustic-progress-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Open Ticket</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-success\"> 35% <i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"m-l-10 feather icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\">35</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress m-t-15\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-green\" style=\"width: 35%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card statustic-progress-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Open Ticket</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label bg-c-lite-green\"> 35% <i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"m-l-10 feather icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\">28</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress m-t-15\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-lite-green\" style=\"width: 28%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card statustic-progress-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Open Ticket</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-danger\"> 35% <i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"m-l-10 feather icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\">87</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress m-t-15\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-pink\" style=\"width: 87%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card statustic-progress-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Open Ticket</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning\"> 35% <i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"m-l-10 feather icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\">32</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress m-t-15\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-yellow\" style=\"width: 32%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- statustic with progressbar  end -->

\t\t\t\t\t\t<!-- customar project  start -->
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-book f-30 text-c-lite-green\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Tickets Answered</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">379</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-feather f-30 text-c-green\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Projects Launched</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">205</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-users f-30 text-c-pink\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Happy Customers</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">5984</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-battery-charging f-30 text-c-blue\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Unique Innovation</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">325</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- customar project  end -->

\t\t\t\t\t\t<!-- user start -->
\t\t\t\t\t\t<div class=\"col-xl-6 col-md-12\">
\t\t\t\t\t\t\t<div class=\"card user-card-full\">
\t\t\t\t\t\t\t\t<div class=\"row m-l-0 m-r-0\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 bg-c-lite-green user-profile\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-block text-center text-white\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-b-25\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-4.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-radius\" alt=\"User-Profile-Image\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"f-w-600\">Jeny William</h6>
\t\t\t\t\t\t\t\t\t\t\t<p>Web Designer</p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-edit m-t-10 f-16\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-b-20 p-b-5 b-b-default f-w-600\">Information</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-10 f-w-600\">Email</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted f-w-400\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../../../cdn-cgi/l/email-protection.htm\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"__cf_email__\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-cfemail=\"1e747b70675e79737f7772307d7173\">[email&#160;protected]</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-10 f-w-600\">Phone</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted f-w-400\">0023-333-526136</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-b-20 m-t-40 p-b-5 b-b-default f-w-600\">Projects</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-10 f-w-600\">Recent</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted f-w-400\">Guruable Admin</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-10 f-w-600\">Most Viewed</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted f-w-400\">Able Pro Admin</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-link list-unstyled m-t-40 m-b-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-placement=\"bottom\" title=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-original-title=\"facebook\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"feather icon-facebook facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-placement=\"bottom\" title=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-original-title=\"twitter\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"feather icon-twitter twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-placement=\"bottom\" title=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-original-title=\"instagram\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"feather icon-instagram instagram\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-6 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<!-- order-visitor start -->
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center text-white bg-c-green\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-b-0\">Total Subscription</h6>
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t-10 m-b-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-arrow-up m-r-15\"></i>7652
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">48% From Last 24 Hours</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center text-white bg-c-pink\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-b-0\">Order Status</h6>
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t-10 m-b-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-arrow-up m-r-15\"></i>6325
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">36% From Last 6 Months</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center text-white bg-c-lite-green\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-b-0\">Unique Visitors</h6>
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t-10 m-b-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-arrow-down m-r-15\"></i>652
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">36% From Last 6 Months</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center text-white bg-c-yellow\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-b-0\">Monthly Earnings</h6>
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"m-t-10 m-b-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-arrow-up m-r-15\"></i>5963
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">36% From Last 6 Months</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- order-visitor end -->
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"d-inline-block text-c-green m-r-10\">897</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-chevrons-down m-r-10 text-c-pink\"></i>10%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted m-b-0\">Total Users</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"d-inline-block text-c-pink m-r-10\">8456</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-chevrons-up m-r-10 text-c-green\"></i>87%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted m-b-0\">Total Views</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- user end -->

\t\t\t\t\t\t<!-- subscribe start -->
\t\t\t\t\t\t<div class=\"col-md-12 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block text-center\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-mail text-c-lite-green d-block f-40\"></i>
\t\t\t\t\t\t\t\t\t<h4 class=\"m-t-20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-c-lite-green\">8.62k</span> Subscribers
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-20\">Your main list is growing</p>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm btn-round\">Manage
\t\t\t\t\t\t\t\t\t\tList</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block text-center\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-twitter text-c-green d-block f-40\"></i>
\t\t\t\t\t\t\t\t\t<h4 class=\"m-t-20\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-c-blgreenue\">+40</span> Followers
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-20\">Your main list is growing</p>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm btn-round\">Check
\t\t\t\t\t\t\t\t\t\tthem out</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block text-center\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-briefcase text-c-pink d-block f-40\"></i>
\t\t\t\t\t\t\t\t\t<h4 class=\"m-t-20\">Business Plan</h4>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-20\">This is your current active plan</p>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm btn-round\">Upgrade
\t\t\t\t\t\t\t\t\t\tto VIP</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- subscribe end -->

\t\t\t\t\t\t<!-- statustic start -->
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card statustic-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Articles</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block text-center\">
\t\t\t\t\t\t\t\t\t<span class=\"d-block text-c-blue f-36\">56</span>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">Total</p>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-blue\" style=\"width: 56%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer bg-c-blue\">
\t\t\t\t\t\t\t\t\t<h6 class=\"text-white m-b-0\">Draft: 22</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card statustic-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Categories</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block text-center\">
\t\t\t\t\t\t\t\t\t<span class=\"d-block text-c-green f-36\">14</span>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">Total</p>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-green\" style=\"width: 14%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer bg-c-green\">
\t\t\t\t\t\t\t\t\t<h6 class=\"text-white m-b-0\">Used: 14</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card statustic-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Tickets</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block text-center\">
\t\t\t\t\t\t\t\t\t<span class=\"d-block text-c-pink f-36\">85</span>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">Total</p>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-pink\" style=\"width: 85%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer bg-c-pink\">
\t\t\t\t\t\t\t\t\t<h6 class=\"text-white m-b-0\">Closed Today: 85</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card statustic-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Forums</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block text-center\">
\t\t\t\t\t\t\t\t\t<span class=\"d-block text-c-yellow f-36\">42</span>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">Total</p>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-yellow\" style=\"width: 42%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer bg-c-yellow\">
\t\t\t\t\t\t\t\t\t<h6 class=\"text-white m-b-0\">Unanswered: 42</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- statustic end -->

\t\t\t\t\t\t<!-- widget-statstic start -->
\t\t\t\t\t\t<div class=\"col-md-12 col-xl-4\">
\t\t\t\t\t\t\t<div class=\"card widget-statstic-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header-left\">
\t\t\t\t\t\t\t\t\t\t<h5>Statistics</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"p-t-10 m-b-0 text-c-yellow\">Compared to last
\t\t\t\t\t\t\t\t\t\t\tweek</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-sliders st-icon bg-c-yellow\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"d-inline-block\">5,456</h3>
\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-arrow-up f-30 text-c-green\"></i> <span
\t\t\t\t\t\t\t\t\t\t\tclass=\"f-right bg-c-yellow\">23%</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t\t\t\t\t<div class=\"card widget-statstic-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header-left\">
\t\t\t\t\t\t\t\t\t\t<h5>Unique Visitor</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"p-t-10 m-b-0 text-c-pink\">55% From last 28 hours</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-users st-icon bg-c-pink txt-lite-color\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"d-inline-block\">3,874</h3>
\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-arrow-down text-c-pink f-30 \"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t\t\t\t\t<div class=\"card widget-statstic-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header-left\">
\t\t\t\t\t\t\t\t\t\t<h5>New Orders</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"p-t-10 m-b-0 text-c-blue\">54% From last month</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-shopping-cart st-icon bg-c-blue\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"d-inline-block\">5,456</h3>
\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-arrow-up text-c-green f-30 \"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- widget-statstic end -->
\t\t\t\t\t\t<!-- user-radial-card  start -->
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block user-radial-card\">
\t\t\t\t\t\t\t\t\t<div data-label=\"50%\"
\t\t\t\t\t\t\t\t\t\tclass=\"radial-bar radial-bar-90 radial-bar-lg radial-bar-danger\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 485
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-2.jpg\"
\t\t\t\t\t\t\t\t\t\t\talt=\"User-Image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"f-36 text-c-pink\">3,6</span>
\t\t\t\t\t\t\t\t\t<p>From 6 GB</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block user-radial-card\">
\t\t\t\t\t\t\t\t\t<div data-label=\"50%\"
\t\t\t\t\t\t\t\t\t\tclass=\"radial-bar radial-bar-40 radial-bar-lg radial-bar-success\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 498
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-2.jpg\"
\t\t\t\t\t\t\t\t\t\t\talt=\"User-Image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"f-36 text-c-green\">85%</span>
\t\t\t\t\t\t\t\t\t<p>From 6 GB</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block user-radial-card\">
\t\t\t\t\t\t\t\t\t<div data-label=\"50%\"
\t\t\t\t\t\t\t\t\t\tclass=\"radial-bar radial-bar-60 radial-bar-lg radial-bar-primary\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 511
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-2.jpg\"
\t\t\t\t\t\t\t\t\t\t\talt=\"User-Image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"f-36 text-c-lite-green\">73%</span>
\t\t\t\t\t\t\t\t\t<p>From 6 GB</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block user-radial-card\">
\t\t\t\t\t\t\t\t\t<div data-label=\"50%\"
\t\t\t\t\t\t\t\t\t\tclass=\"radial-bar radial-bar-35 radial-bar-lg radial-bar-warning\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 524
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-2.jpg\"
\t\t\t\t\t\t\t\t\t\t\talt=\"User-Image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"f-36 text-c-yellow\">6</span>
\t\t\t\t\t\t\t\t\t<p>From 6 GB</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- user-radial-card  end -->


\t\t\t\t\t\t<!-- social download  start -->
\t\t\t\t\t\t<div class=\"col-xl-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card social-card bg-simple-c-blue\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-mail f-34 text-c-blue social-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-b-0\">Mail</h6>
\t\t\t\t\t\t\t\t\t\t\t<p>231.2w downloads</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">Lorem Ipsum is simply dummy text of the
\t\t\t\t\t\t\t\t\t\t\t\tprinting</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"download-icon\"><i
\t\t\t\t\t\t\t\t\tclass=\"feather icon-arrow-down\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card social-card bg-simple-c-pink\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-twitter f-34 text-c-pink social-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-b-0\">Twitter</h6>
\t\t\t\t\t\t\t\t\t\t\t<p>231.2w downloads</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">Lorem Ipsum is simply dummy text of the
\t\t\t\t\t\t\t\t\t\t\t\tprinting</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"download-icon\"><i
\t\t\t\t\t\t\t\t\tclass=\"feather icon-arrow-down\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-md-12\">
\t\t\t\t\t\t\t<div class=\"card social-card bg-simple-c-green\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"feather icon-instagram f-34 text-c-green social-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-b-0\">Instagram</h6>
\t\t\t\t\t\t\t\t\t\t\t<p>231.2w downloads</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">Lorem Ipsum is simply dummy text of the
\t\t\t\t\t\t\t\t\t\t\t\tprinting</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"download-icon\"><i
\t\t\t\t\t\t\t\t\tclass=\"feather icon-arrow-down\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- social download  end -->

\t\t\t\t\t\t<!-- visitors  start -->
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"card bg-c-pink text-white widget-visitor-card\">
\t\t\t\t\t\t\t\t<div class=\"card-block-small text-center\">
\t\t\t\t\t\t\t\t\t<h2>1,658</h2>
\t\t\t\t\t\t\t\t\t<h6>Daily user</h6>
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-user\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"card bg-c-blue text-white widget-visitor-card\">
\t\t\t\t\t\t\t\t<div class=\"card-block-small text-center\">
\t\t\t\t\t\t\t\t\t<h2>5,678</h2>
\t\t\t\t\t\t\t\t\t<h6>Daily visitor</h6>
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-file-text\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"card bg-c-yellow text-white widget-visitor-card\">
\t\t\t\t\t\t\t\t<div class=\"card-block-small text-center\">
\t\t\t\t\t\t\t\t\t<h2>5,678</h2>
\t\t\t\t\t\t\t\t\t<h6>Last month visitor</h6>
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-award\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- visitors  end -->

\t\t\t\t\t\t<!-- project  start -->
\t\t\t\t\t\t<div class=\"col-md-12 col-xl-6 \">
\t\t\t\t\t\t\t<div class=\"card app-design\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary f-right\">Completed</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"f-w-400 text-muted\">App design and development</h6>
\t\t\t\t\t\t\t\t\t<p class=\"text-c-blue f-w-400\">Android</p>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Lorem Ipsum is simply dummy text of
\t\t\t\t\t\t\t\t\t\tthe printing and typesetting industry. Lorem Ipsum has been
\t\t\t\t\t\t\t\t\t\tthe industry's.</p>
\t\t\t\t\t\t\t\t\t<div class=\"design-description d-inline-block m-r-40\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"f-w-400\">678</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Question</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"design-description d-inline-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"f-w-400\">1,452</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Comments</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"team-box p-b-20\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline-block m-r-20 f-w-400\">Team</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-section d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#! \"><img
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 648
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-2.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" title=\"Josephin Doe\" alt=\" \"></a> <a
\t\t\t\t\t\t\t\t\t\t\t\thref=\"#! \"><img
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 651
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-3.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" title=\"Lary Doe\" alt=\" \"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"m-l-5 \"></a> <a href=\"#! \"><img
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 654
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-4.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" title=\"Alia\" alt=\" \" class=\"m-l-5 \"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#! \"><img
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 657
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-2.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" title=\"Suzen\" alt=\" \" class=\"m-l-5 \"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress-box\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline-block m-r-20 f-w-400\">Progress</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-blue\" style=\"width: 78%\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>78%</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 col-xl-6 \">
\t\t\t\t\t\t\t<div class=\"card app-design\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success f-right\">Pending</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"f-w-400 text-muted\">Landing page design</h6>
\t\t\t\t\t\t\t\t\t<p class=\"text-c-green f-w-400\">Webdesign</p>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Lorem Ipsum is simply dummy text of
\t\t\t\t\t\t\t\t\t\tthe printing and typesetting industry. Lorem Ipsum has been
\t\t\t\t\t\t\t\t\t\tthe industry's.</p>
\t\t\t\t\t\t\t\t\t<div class=\"design-description d-inline-block m-r-40\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"f-w-400\">271</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Question</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"design-description d-inline-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"f-w-400\">816</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Comments</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"team-box p-b-20\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline-block m-r-20 f-w-400\">Team</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-section d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-section d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#! \"><img
\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 694
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-3.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" title=\"Lary Doe\" alt=\" \"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"m-l-5 \"></a> <a href=\"#! \"><img
\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 697
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-4.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" title=\"Alia\" alt=\" \" class=\"m-l-5 \"></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#! \"><img
\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 700
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-5.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" title=\"Josephin Doe\" alt=\" \"></a> <a
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#! \"><img
\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 703
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-7.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" title=\"Suzen\" alt=\" \" class=\"m-l-5 \"></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress-box\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline-block m-r-20 f-w-400\">Progress</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-green\" style=\"width: 78%\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>78%</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- project  end -->

\t\t\t\t\t\t<!-- statustic-card  start -->
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t<div class=\"card widget-card-1\">
\t\t\t\t\t\t\t\t<div class=\"card-block-small\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-pie-chart bg-c-blue card1-icon\"></i> <span
\t\t\t\t\t\t\t\t\t\tclass=\"text-c-blue f-w-600\">Use Space</span>
\t\t\t\t\t\t\t\t\t<h4>49/50GB</h4>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<span class=\"f-left m-t-10 text-muted\"> <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-c-blue f-16 feather icon-alert-triangle m-r-10\"></i>Get
\t\t\t\t\t\t\t\t\t\t\tmore space
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t<div class=\"card widget-card-1\">
\t\t\t\t\t\t\t\t<div class=\"card-block-small\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-home bg-c-pink card1-icon\"></i> <span
\t\t\t\t\t\t\t\t\t\tclass=\"text-c-pink f-w-600\">Revenue</span>
\t\t\t\t\t\t\t\t\t<h4>\$23,589</h4>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<span class=\"f-left m-t-10 text-muted\"> <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-c-pink f-16 feather icon-calendar m-r-10\"></i>Last
\t\t\t\t\t\t\t\t\t\t\t24 hours
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t<div class=\"card widget-card-1\">
\t\t\t\t\t\t\t\t<div class=\"card-block-small\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-alert-triangle bg-c-green card1-icon\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"text-c-green f-w-600\">Fixed Issue</span>
\t\t\t\t\t\t\t\t\t<h4>45</h4>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<span class=\"f-left m-t-10 text-muted\"> <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-c-green f-16 feather icon-tag m-r-10\"></i>Tracked
\t\t\t\t\t\t\t\t\t\t\tat microsoft
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t<div class=\"card widget-card-1\">
\t\t\t\t\t\t\t\t<div class=\"card-block-small\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-twitter bg-c-yellow card1-icon\"></i> <span
\t\t\t\t\t\t\t\t\t\tclass=\"text-c-yellow f-w-600\">Followers</span>
\t\t\t\t\t\t\t\t\t<h4>+562</h4>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<span class=\"f-left m-t-10 text-muted\"> <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-c-yellow f-16 feather icon-watch m-r-10\"></i>Just
\t\t\t\t\t\t\t\t\t\t\tupdate
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- statustic-card  end -->

\t\t\t\t\t\t<!-- user card  start -->
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t<div class=\"card user-widget-card bg-c-blue\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-user bg-simple-c-blue card1-icon\"></i>
\t\t\t\t\t\t\t\t\t<h4>652</h4>
\t\t\t\t\t\t\t\t\t<p>Latest User</p>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"more-info\">More Info</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t<div class=\"card user-widget-card bg-c-pink\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-home bg-simple-c-pink card1-icon\"></i>
\t\t\t\t\t\t\t\t\t<h4>652</h4>
\t\t\t\t\t\t\t\t\t<p>Latest User</p>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"more-info\">More Info</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t<div class=\"card user-widget-card bg-c-green\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<i
\t\t\t\t\t\t\t\t\t\tclass=\"feather icon-alert-triangle bg-simple-c-green card1-icon\"></i>
\t\t\t\t\t\t\t\t\t<h4>652</h4>
\t\t\t\t\t\t\t\t\t<p>Latest User</p>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"more-info\">More Info</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-3\">
\t\t\t\t\t\t\t<div class=\"card user-widget-card bg-c-yellow\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<i class=\"feather icon-twitter bg-simple-c-yellow card1-icon\"></i>
\t\t\t\t\t\t\t\t\t<h4>652</h4>
\t\t\t\t\t\t\t\t\t<p>Latest User</p>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"more-info\">More Info</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- user card  end -->

\t\t\t\t\t\t<!-- order  start -->
\t\t\t\t\t\t<div class=\"col-md-12 col-xl-4\">
\t\t\t\t\t\t\t<div class=\"card bg-c-yellow order-card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<h6>Revenue</h6>
\t\t\t\t\t\t\t\t\t<h2>\$42,562</h2>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">
\t\t\t\t\t\t\t\t\t\t\$5,032 <i class=\"feather icon-arrow-up m-l-10\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<i class=\"card-icon feather icon-filter\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t\t\t\t\t<div class=\"card bg-c-blue order-card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<h6>Orders Received</h6>
\t\t\t\t\t\t\t\t\t<h2>486</h2>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">
\t\t\t\t\t\t\t\t\t\t\$5,032 <i class=\"feather icon-arrow-up m-l-10 m-r-10\"></i>\$1,055
\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-arrow-down\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<i class=\"card-icon feather icon-users\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t\t\t\t\t<div class=\"card bg-c-green order-card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<h6>Total Sales</h6>
\t\t\t\t\t\t\t\t\t<h2>1641</h2>
\t\t\t\t\t\t\t\t\t<p class=\"m-b-0\">
\t\t\t\t\t\t\t\t\t\t\$5,032 <i class=\"feather icon-arrow-down m-l-10 m-r-10\"></i>\$1,055
\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<i class=\"card-icon feather icon-radio\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- order  end -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Page-body end -->


\t\t\t</div>
\t\t\t<div id=\"styleSelector\"></div>
\t\t</div>
\t</div>
</div>";
    }

    // line 880
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "pages/dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(
            955 => 880,
            776 => 703,
            770 => 700,
            764 => 697,
            758 => 694,
            718 => 657,
            712 => 654,
            706 => 651,
            700 => 648,
            573 => 524,
            557 => 511,
            541 => 498,
            525 => 485,
            215 => 178,
            38 => 3,
            35 => 2,
            11 => 1
        );
    }
}
/* {% extends "layout/index.html" %} {% block head %} {{ parent() }} {%*/
/* endblock %} {% block content %}*/
/* */
/* <div class="pcoded-content">*/
/* 	<div class="pcoded-inner-content">*/
/* 		<!-- Main-body start -->*/
/* 		<div class="main-body">*/
/* 			<div class="page-wrapper">*/
/* 				<!-- Page-header start -->*/
/* 				<div class="page-header mt-2">*/
/* 					<div class="row align-items-end">*/
/*   */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-body">*/
/* 					<div class="row">*/
/* 						<!-- statustic with progressbar  start -->*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card statustic-progress-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Open Ticket</h5>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col">*/
/* 											<label class="label label-success"> 35% <i*/
/* 												class="m-l-10 feather icon-arrow-up"></i>*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col text-right">*/
/* 											<h5 class="">35</h5>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress m-t-15">*/
/* 										<div class="progress-bar bg-c-green" style="width: 35%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card statustic-progress-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Open Ticket</h5>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col">*/
/* 											<label class="label bg-c-lite-green"> 35% <i*/
/* 												class="m-l-10 feather icon-arrow-up"></i>*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col text-right">*/
/* 											<h5 class="">28</h5>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress m-t-15">*/
/* 										<div class="progress-bar bg-c-lite-green" style="width: 28%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card statustic-progress-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Open Ticket</h5>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col">*/
/* 											<label class="label label-danger"> 35% <i*/
/* 												class="m-l-10 feather icon-arrow-up"></i>*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col text-right">*/
/* 											<h5 class="">87</h5>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress m-t-15">*/
/* 										<div class="progress-bar bg-c-pink" style="width: 87%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card statustic-progress-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Open Ticket</h5>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col">*/
/* 											<label class="label label-warning"> 35% <i*/
/* 												class="m-l-10 feather icon-arrow-up"></i>*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col text-right">*/
/* 											<h5 class="">32</h5>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress m-t-15">*/
/* 										<div class="progress-bar bg-c-yellow" style="width: 32%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- statustic with progressbar  end -->*/
/* */
/* 						<!-- customar project  start -->*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-book f-30 text-c-lite-green"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Tickets Answered</h6>*/
/* 											<h2 class="m-b-0">379</h2>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-feather f-30 text-c-green"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Projects Launched</h6>*/
/* 											<h2 class="m-b-0">205</h2>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-users f-30 text-c-pink"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Happy Customers</h6>*/
/* 											<h2 class="m-b-0">5984</h2>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-battery-charging f-30 text-c-blue"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Unique Innovation</h6>*/
/* 											<h2 class="m-b-0">325</h2>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- customar project  end -->*/
/* */
/* 						<!-- user start -->*/
/* 						<div class="col-xl-6 col-md-12">*/
/* 							<div class="card user-card-full">*/
/* 								<div class="row m-l-0 m-r-0">*/
/* 									<div class="col-sm-4 bg-c-lite-green user-profile">*/
/* 										<div class="card-block text-center text-white">*/
/* 											<div class="m-b-25">*/
/* 												<img src="{{ base_url }}/theme/assets/images/avatar-4.jpg"*/
/* 													class="img-radius" alt="User-Profile-Image">*/
/* 											</div>*/
/* 											<h6 class="f-w-600">Jeny William</h6>*/
/* 											<p>Web Designer</p>*/
/* 											<i class="feather icon-edit m-t-10 f-16"></i>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-sm-8">*/
/* 										<div class="card-block">*/
/* 											<h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>*/
/* 											<div class="row">*/
/* 												<div class="col-sm-6">*/
/* 													<p class="m-b-10 f-w-600">Email</p>*/
/* 													<h6 class="text-muted f-w-400">*/
/* 														<a href="../../../cdn-cgi/l/email-protection.htm"*/
/* 															class="__cf_email__"*/
/* 															data-cfemail="1e747b70675e79737f7772307d7173">[email&#160;protected]</a>*/
/* 													</h6>*/
/* 												</div>*/
/* 												<div class="col-sm-6">*/
/* 													<p class="m-b-10 f-w-600">Phone</p>*/
/* 													<h6 class="text-muted f-w-400">0023-333-526136</h6>*/
/* 												</div>*/
/* 											</div>*/
/* 											<h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>*/
/* 											<div class="row">*/
/* 												<div class="col-sm-6">*/
/* 													<p class="m-b-10 f-w-600">Recent</p>*/
/* 													<h6 class="text-muted f-w-400">Guruable Admin</h6>*/
/* 												</div>*/
/* 												<div class="col-sm-6">*/
/* 													<p class="m-b-10 f-w-600">Most Viewed</p>*/
/* 													<h6 class="text-muted f-w-400">Able Pro Admin</h6>*/
/* 												</div>*/
/* 											</div>*/
/* 											<ul class="social-link list-unstyled m-t-40 m-b-10">*/
/* 												<li><a href="#!" data-toggle="tooltip"*/
/* 													data-placement="bottom" title=""*/
/* 													data-original-title="facebook"><i*/
/* 														class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>*/
/* 												<li><a href="#!" data-toggle="tooltip"*/
/* 													data-placement="bottom" title=""*/
/* 													data-original-title="twitter"><i*/
/* 														class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>*/
/* 												<li><a href="#!" data-toggle="tooltip"*/
/* 													data-placement="bottom" title=""*/
/* 													data-original-title="instagram"><i*/
/* 														class="feather icon-instagram instagram"*/
/* 														aria-hidden="true"></i></a></li>*/
/* 											</ul>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-6 col-md-12">*/
/* 							<div class="row">*/
/* 								<!-- order-visitor start -->*/
/* 								<div class="col-md-6">*/
/* 									<div class="card text-center text-white bg-c-green">*/
/* 										<div class="card-block">*/
/* 											<h6 class="m-b-0">Total Subscription</h6>*/
/* 											<h4 class="m-t-10 m-b-10">*/
/* 												<i class="feather icon-arrow-up m-r-15"></i>7652*/
/* 											</h4>*/
/* 											<p class="m-b-0">48% From Last 24 Hours</p>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-6">*/
/* 									<div class="card text-center text-white bg-c-pink">*/
/* 										<div class="card-block">*/
/* 											<h6 class="m-b-0">Order Status</h6>*/
/* 											<h4 class="m-t-10 m-b-10">*/
/* 												<i class="feather icon-arrow-up m-r-15"></i>6325*/
/* 											</h4>*/
/* 											<p class="m-b-0">36% From Last 6 Months</p>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-6">*/
/* 									<div class="card text-center text-white bg-c-lite-green">*/
/* 										<div class="card-block">*/
/* 											<h6 class="m-b-0">Unique Visitors</h6>*/
/* 											<h4 class="m-t-10 m-b-10">*/
/* 												<i class="feather icon-arrow-down m-r-15"></i>652*/
/* 											</h4>*/
/* 											<p class="m-b-0">36% From Last 6 Months</p>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-6">*/
/* 									<div class="card text-center text-white bg-c-yellow">*/
/* 										<div class="card-block">*/
/* 											<h6 class="m-b-0">Monthly Earnings</h6>*/
/* 											<h4 class="m-t-10 m-b-10">*/
/* 												<i class="feather icon-arrow-up m-r-15"></i>5963*/
/* 											</h4>*/
/* 											<p class="m-b-0">36% From Last 6 Months</p>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<!-- order-visitor end -->*/
/* 								<div class="col-md-12">*/
/* 									<div class="card">*/
/* 										<div class="card-block">*/
/* 											<div class="row">*/
/* */
/* 												<div class="col-sm-6">*/
/* 													<h2 class="d-inline-block text-c-green m-r-10">897</h2>*/
/* 													<div class="d-inline-block">*/
/* 														<p class="m-b-0">*/
/* 															<i class="feather icon-chevrons-down m-r-10 text-c-pink"></i>10%*/
/* 														</p>*/
/* 														<p class="text-muted m-b-0">Total Users</p>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="col-sm-6">*/
/* 													<h2 class="d-inline-block text-c-pink m-r-10">8456</h2>*/
/* 													<div class="d-inline-block">*/
/* 														<p class="m-b-0">*/
/* 															<i class="feather icon-chevrons-up m-r-10 text-c-green"></i>87%*/
/* 														</p>*/
/* 														<p class="text-muted m-b-0">Total Views</p>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- user end -->*/
/* */
/* 						<!-- subscribe start -->*/
/* 						<div class="col-md-12 col-lg-4">*/
/* 							<div class="card">*/
/* 								<div class="card-block text-center">*/
/* 									<i class="feather icon-mail text-c-lite-green d-block f-40"></i>*/
/* 									<h4 class="m-t-20">*/
/* 										<span class="text-c-lite-green">8.62k</span> Subscribers*/
/* 									</h4>*/
/* 									<p class="m-b-20">Your main list is growing</p>*/
/* 									<button class="btn btn-primary btn-sm btn-round">Manage*/
/* 										List</button>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-lg-4">*/
/* 							<div class="card">*/
/* 								<div class="card-block text-center">*/
/* 									<i class="feather icon-twitter text-c-green d-block f-40"></i>*/
/* 									<h4 class="m-t-20">*/
/* 										<span class="text-c-blgreenue">+40</span> Followers*/
/* 									</h4>*/
/* 									<p class="m-b-20">Your main list is growing</p>*/
/* 									<button class="btn btn-success btn-sm btn-round">Check*/
/* 										them out</button>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-lg-4">*/
/* 							<div class="card">*/
/* 								<div class="card-block text-center">*/
/* 									<i class="feather icon-briefcase text-c-pink d-block f-40"></i>*/
/* 									<h4 class="m-t-20">Business Plan</h4>*/
/* 									<p class="m-b-20">This is your current active plan</p>*/
/* 									<button class="btn btn-danger btn-sm btn-round">Upgrade*/
/* 										to VIP</button>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- subscribe end -->*/
/* */
/* 						<!-- statustic start -->*/
/* 						<div class="col-md-6 col-lg-3">*/
/* 							<div class="card statustic-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Articles</h5>*/
/* 								</div>*/
/* 								<div class="card-block text-center">*/
/* 									<span class="d-block text-c-blue f-36">56</span>*/
/* 									<p class="m-b-0">Total</p>*/
/* 									<div class="progress">*/
/* 										<div class="progress-bar bg-c-blue" style="width: 56%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-footer bg-c-blue">*/
/* 									<h6 class="text-white m-b-0">Draft: 22</h6>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-lg-3">*/
/* 							<div class="card statustic-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Categories</h5>*/
/* 								</div>*/
/* 								<div class="card-block text-center">*/
/* 									<span class="d-block text-c-green f-36">14</span>*/
/* 									<p class="m-b-0">Total</p>*/
/* 									<div class="progress">*/
/* 										<div class="progress-bar bg-c-green" style="width: 14%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-footer bg-c-green">*/
/* 									<h6 class="text-white m-b-0">Used: 14</h6>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-lg-3">*/
/* 							<div class="card statustic-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Tickets</h5>*/
/* 								</div>*/
/* 								<div class="card-block text-center">*/
/* 									<span class="d-block text-c-pink f-36">85</span>*/
/* 									<p class="m-b-0">Total</p>*/
/* 									<div class="progress">*/
/* 										<div class="progress-bar bg-c-pink" style="width: 85%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-footer bg-c-pink">*/
/* 									<h6 class="text-white m-b-0">Closed Today: 85</h6>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-lg-3">*/
/* 							<div class="card statustic-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Forums</h5>*/
/* 								</div>*/
/* 								<div class="card-block text-center">*/
/* 									<span class="d-block text-c-yellow f-36">42</span>*/
/* 									<p class="m-b-0">Total</p>*/
/* 									<div class="progress">*/
/* 										<div class="progress-bar bg-c-yellow" style="width: 42%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-footer bg-c-yellow">*/
/* 									<h6 class="text-white m-b-0">Unanswered: 42</h6>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- statustic end -->*/
/* */
/* 						<!-- widget-statstic start -->*/
/* 						<div class="col-md-12 col-xl-4">*/
/* 							<div class="card widget-statstic-card">*/
/* 								<div class="card-header">*/
/* 									<div class="card-header-left">*/
/* 										<h5>Statistics</h5>*/
/* 										<p class="p-t-10 m-b-0 text-c-yellow">Compared to last*/
/* 											week</p>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<i class="feather icon-sliders st-icon bg-c-yellow"></i>*/
/* 									<div class="text-left">*/
/* 										<h3 class="d-inline-block">5,456</h3>*/
/* 										<i class="feather icon-arrow-up f-30 text-c-green"></i> <span*/
/* 											class="f-right bg-c-yellow">23%</span>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-4">*/
/* 							<div class="card widget-statstic-card">*/
/* 								<div class="card-header">*/
/* 									<div class="card-header-left">*/
/* 										<h5>Unique Visitor</h5>*/
/* 										<p class="p-t-10 m-b-0 text-c-pink">55% From last 28 hours</p>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<i class="feather icon-users st-icon bg-c-pink txt-lite-color"></i>*/
/* 									<div class="text-left">*/
/* 										<h3 class="d-inline-block">3,874</h3>*/
/* 										<i class="feather icon-arrow-down text-c-pink f-30 "></i>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-4">*/
/* 							<div class="card widget-statstic-card">*/
/* 								<div class="card-header">*/
/* 									<div class="card-header-left">*/
/* 										<h5>New Orders</h5>*/
/* 										<p class="p-t-10 m-b-0 text-c-blue">54% From last month</p>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<i class="feather icon-shopping-cart st-icon bg-c-blue"></i>*/
/* 									<div class="text-left">*/
/* 										<h3 class="d-inline-block">5,456</h3>*/
/* 										<i class="feather icon-arrow-up text-c-green f-30 "></i>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- widget-statstic end -->*/
/* 						<!-- user-radial-card  start -->*/
/* 						<div class="col-md-6 col-lg-3">*/
/* 							<div class="card">*/
/* 								<div class="card-block user-radial-card">*/
/* 									<div data-label="50%"*/
/* 										class="radial-bar radial-bar-90 radial-bar-lg radial-bar-danger">*/
/* 										<img src="{{ base_url }}/theme/assets/images/avatar-2.jpg"*/
/* 											alt="User-Image">*/
/* 									</div>*/
/* 									<span class="f-36 text-c-pink">3,6</span>*/
/* 									<p>From 6 GB</p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-lg-3">*/
/* 							<div class="card">*/
/* 								<div class="card-block user-radial-card">*/
/* 									<div data-label="50%"*/
/* 										class="radial-bar radial-bar-40 radial-bar-lg radial-bar-success">*/
/* 										<img src="{{ base_url }}/theme/assets/images/avatar-2.jpg"*/
/* 											alt="User-Image">*/
/* 									</div>*/
/* 									<span class="f-36 text-c-green">85%</span>*/
/* 									<p>From 6 GB</p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-lg-3">*/
/* 							<div class="card">*/
/* 								<div class="card-block user-radial-card">*/
/* 									<div data-label="50%"*/
/* 										class="radial-bar radial-bar-60 radial-bar-lg radial-bar-primary">*/
/* 										<img src="{{ base_url }}/theme/assets/images/avatar-2.jpg"*/
/* 											alt="User-Image">*/
/* 									</div>*/
/* 									<span class="f-36 text-c-lite-green">73%</span>*/
/* 									<p>From 6 GB</p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-lg-3">*/
/* 							<div class="card">*/
/* 								<div class="card-block user-radial-card">*/
/* 									<div data-label="50%"*/
/* 										class="radial-bar radial-bar-35 radial-bar-lg radial-bar-warning">*/
/* 										<img src="{{ base_url }}/theme/assets/images/avatar-2.jpg"*/
/* 											alt="User-Image">*/
/* 									</div>*/
/* 									<span class="f-36 text-c-yellow">6</span>*/
/* 									<p>From 6 GB</p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- user-radial-card  end -->*/
/* */
/* */
/* 						<!-- social download  start -->*/
/* 						<div class="col-xl-4 col-md-6">*/
/* 							<div class="card social-card bg-simple-c-blue">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-mail f-34 text-c-blue social-icon"></i>*/
/* 										</div>*/
/* 										<div class="col">*/
/* 											<h6 class="m-b-0">Mail</h6>*/
/* 											<p>231.2w downloads</p>*/
/* 											<p class="m-b-0">Lorem Ipsum is simply dummy text of the*/
/* 												printing</p>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<a href="#!" class="download-icon"><i*/
/* 									class="feather icon-arrow-down"></i></a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-4 col-md-6">*/
/* 							<div class="card social-card bg-simple-c-pink">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-twitter f-34 text-c-pink social-icon"></i>*/
/* 										</div>*/
/* 										<div class="col">*/
/* 											<h6 class="m-b-0">Twitter</h6>*/
/* 											<p>231.2w downloads</p>*/
/* 											<p class="m-b-0">Lorem Ipsum is simply dummy text of the*/
/* 												printing</p>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<a href="#!" class="download-icon"><i*/
/* 									class="feather icon-arrow-down"></i></a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-4 col-md-12">*/
/* 							<div class="card social-card bg-simple-c-green">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col-auto">*/
/* 											<i*/
/* 												class="feather icon-instagram f-34 text-c-green social-icon"></i>*/
/* 										</div>*/
/* 										<div class="col">*/
/* 											<h6 class="m-b-0">Instagram</h6>*/
/* 											<p>231.2w downloads</p>*/
/* 											<p class="m-b-0">Lorem Ipsum is simply dummy text of the*/
/* 												printing</p>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<a href="#!" class="download-icon"><i*/
/* 									class="feather icon-arrow-down"></i></a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- social download  end -->*/
/* */
/* 						<!-- visitors  start -->*/
/* 						<div class="col-sm-4">*/
/* 							<div class="card bg-c-pink text-white widget-visitor-card">*/
/* 								<div class="card-block-small text-center">*/
/* 									<h2>1,658</h2>*/
/* 									<h6>Daily user</h6>*/
/* 									<i class="feather icon-user"></i>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-4">*/
/* 							<div class="card bg-c-blue text-white widget-visitor-card">*/
/* 								<div class="card-block-small text-center">*/
/* 									<h2>5,678</h2>*/
/* 									<h6>Daily visitor</h6>*/
/* 									<i class="feather icon-file-text"></i>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-4">*/
/* 							<div class="card bg-c-yellow text-white widget-visitor-card">*/
/* 								<div class="card-block-small text-center">*/
/* 									<h2>5,678</h2>*/
/* 									<h6>Last month visitor</h6>*/
/* 									<i class="feather icon-award"></i>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- visitors  end -->*/
/* */
/* 						<!-- project  start -->*/
/* 						<div class="col-md-12 col-xl-6 ">*/
/* 							<div class="card app-design">*/
/* 								<div class="card-block">*/
/* 									<button class="btn btn-primary f-right">Completed</button>*/
/* 									<h6 class="f-w-400 text-muted">App design and development</h6>*/
/* 									<p class="text-c-blue f-w-400">Android</p>*/
/* 									<p class="text-muted">Lorem Ipsum is simply dummy text of*/
/* 										the printing and typesetting industry. Lorem Ipsum has been*/
/* 										the industry's.</p>*/
/* 									<div class="design-description d-inline-block m-r-40">*/
/* 										<h3 class="f-w-400">678</h3>*/
/* 										<p class="text-muted">Question</p>*/
/* 									</div>*/
/* 									<div class="design-description d-inline-block">*/
/* 										<h3 class="f-w-400">1,452</h3>*/
/* 										<p class="text-muted">Comments</p>*/
/* 									</div>*/
/* 									<div class="team-box p-b-20">*/
/* 										<p class="d-inline-block m-r-20 f-w-400">Team</p>*/
/* 										<div class="team-section d-inline-block">*/
/* 											<a href="#! "><img*/
/* 												src="{{ base_url }}/theme/assets/images/avatar-2.jpg"*/
/* 												data-toggle="tooltip" title="Josephin Doe" alt=" "></a> <a*/
/* 												href="#! "><img*/
/* 												src="{{ base_url }}/theme/assets/images/avatar-3.jpg"*/
/* 												data-toggle="tooltip" title="Lary Doe" alt=" "*/
/* 												class="m-l-5 "></a> <a href="#! "><img*/
/* 												src="{{ base_url }}/theme/assets/images/avatar-4.jpg"*/
/* 												data-toggle="tooltip" title="Alia" alt=" " class="m-l-5 "></a>*/
/* 											<a href="#! "><img*/
/* 												src="{{ base_url }}/theme/assets/images/avatar-2.jpg"*/
/* 												data-toggle="tooltip" title="Suzen" alt=" " class="m-l-5 "></a>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress-box">*/
/* 										<p class="d-inline-block m-r-20 f-w-400">Progress</p>*/
/* 										<div class="progress d-inline-block">*/
/* 											<div class="progress-bar bg-c-blue" style="width: 78%">*/
/* 												<label>78%</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-12 col-xl-6 ">*/
/* 							<div class="card app-design">*/
/* 								<div class="card-block">*/
/* 									<button class="btn btn-success f-right">Pending</button>*/
/* 									<h6 class="f-w-400 text-muted">Landing page design</h6>*/
/* 									<p class="text-c-green f-w-400">Webdesign</p>*/
/* 									<p class="text-muted">Lorem Ipsum is simply dummy text of*/
/* 										the printing and typesetting industry. Lorem Ipsum has been*/
/* 										the industry's.</p>*/
/* 									<div class="design-description d-inline-block m-r-40">*/
/* 										<h3 class="f-w-400">271</h3>*/
/* 										<p class="text-muted">Question</p>*/
/* 									</div>*/
/* 									<div class="design-description d-inline-block">*/
/* 										<h3 class="f-w-400">816</h3>*/
/* 										<p class="text-muted">Comments</p>*/
/* 									</div>*/
/* 									<div class="team-box p-b-20">*/
/* 										<p class="d-inline-block m-r-20 f-w-400">Team</p>*/
/* 										<div class="team-section d-inline-block">*/
/* 											<div class="team-section d-inline-block">*/
/* 												<a href="#! "><img*/
/* 													src="{{ base_url }}/theme/assets/images/avatar-3.jpg"*/
/* 													data-toggle="tooltip" title="Lary Doe" alt=" "*/
/* 													class="m-l-5 "></a> <a href="#! "><img*/
/* 													src="{{ base_url }}/theme/assets/images/avatar-4.jpg"*/
/* 													data-toggle="tooltip" title="Alia" alt=" " class="m-l-5 "></a>*/
/* 												<a href="#! "><img*/
/* 													src="{{ base_url }}/theme/assets/images/avatar-5.jpg"*/
/* 													data-toggle="tooltip" title="Josephin Doe" alt=" "></a> <a*/
/* 													href="#! "><img*/
/* 													src="{{ base_url }}/theme/assets/images/avatar-7.jpg"*/
/* 													data-toggle="tooltip" title="Suzen" alt=" " class="m-l-5 "></a>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress-box">*/
/* 										<p class="d-inline-block m-r-20 f-w-400">Progress</p>*/
/* 										<div class="progress d-inline-block">*/
/* 											<div class="progress-bar bg-c-green" style="width: 78%">*/
/* 												<label>78%</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- project  end -->*/
/* */
/* 						<!-- statustic-card  start -->*/
/* 						<div class="col-md-6 col-xl-3">*/
/* 							<div class="card widget-card-1">*/
/* 								<div class="card-block-small">*/
/* 									<i class="feather icon-pie-chart bg-c-blue card1-icon"></i> <span*/
/* 										class="text-c-blue f-w-600">Use Space</span>*/
/* 									<h4>49/50GB</h4>*/
/* 									<div>*/
/* 										<span class="f-left m-t-10 text-muted"> <i*/
/* 											class="text-c-blue f-16 feather icon-alert-triangle m-r-10"></i>Get*/
/* 											more space*/
/* 										</span>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-3">*/
/* 							<div class="card widget-card-1">*/
/* 								<div class="card-block-small">*/
/* 									<i class="feather icon-home bg-c-pink card1-icon"></i> <span*/
/* 										class="text-c-pink f-w-600">Revenue</span>*/
/* 									<h4>$23,589</h4>*/
/* 									<div>*/
/* 										<span class="f-left m-t-10 text-muted"> <i*/
/* 											class="text-c-pink f-16 feather icon-calendar m-r-10"></i>Last*/
/* 											24 hours*/
/* 										</span>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-3">*/
/* 							<div class="card widget-card-1">*/
/* 								<div class="card-block-small">*/
/* 									<i class="feather icon-alert-triangle bg-c-green card1-icon"></i>*/
/* 									<span class="text-c-green f-w-600">Fixed Issue</span>*/
/* 									<h4>45</h4>*/
/* 									<div>*/
/* 										<span class="f-left m-t-10 text-muted"> <i*/
/* 											class="text-c-green f-16 feather icon-tag m-r-10"></i>Tracked*/
/* 											at microsoft*/
/* 										</span>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-3">*/
/* 							<div class="card widget-card-1">*/
/* 								<div class="card-block-small">*/
/* 									<i class="feather icon-twitter bg-c-yellow card1-icon"></i> <span*/
/* 										class="text-c-yellow f-w-600">Followers</span>*/
/* 									<h4>+562</h4>*/
/* 									<div>*/
/* 										<span class="f-left m-t-10 text-muted"> <i*/
/* 											class="text-c-yellow f-16 feather icon-watch m-r-10"></i>Just*/
/* 											update*/
/* 										</span>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- statustic-card  end -->*/
/* */
/* 						<!-- user card  start -->*/
/* 						<div class="col-md-6 col-xl-3">*/
/* 							<div class="card user-widget-card bg-c-blue">*/
/* 								<div class="card-block">*/
/* 									<i class="feather icon-user bg-simple-c-blue card1-icon"></i>*/
/* 									<h4>652</h4>*/
/* 									<p>Latest User</p>*/
/* 									<a href="#!" class="more-info">More Info</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-3">*/
/* 							<div class="card user-widget-card bg-c-pink">*/
/* 								<div class="card-block">*/
/* 									<i class="feather icon-home bg-simple-c-pink card1-icon"></i>*/
/* 									<h4>652</h4>*/
/* 									<p>Latest User</p>*/
/* 									<a href="#!" class="more-info">More Info</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-3">*/
/* 							<div class="card user-widget-card bg-c-green">*/
/* 								<div class="card-block">*/
/* 									<i*/
/* 										class="feather icon-alert-triangle bg-simple-c-green card1-icon"></i>*/
/* 									<h4>652</h4>*/
/* 									<p>Latest User</p>*/
/* 									<a href="#!" class="more-info">More Info</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-3">*/
/* 							<div class="card user-widget-card bg-c-yellow">*/
/* 								<div class="card-block">*/
/* 									<i class="feather icon-twitter bg-simple-c-yellow card1-icon"></i>*/
/* 									<h4>652</h4>*/
/* 									<p>Latest User</p>*/
/* 									<a href="#!" class="more-info">More Info</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- user card  end -->*/
/* */
/* 						<!-- order  start -->*/
/* 						<div class="col-md-12 col-xl-4">*/
/* 							<div class="card bg-c-yellow order-card">*/
/* 								<div class="card-block">*/
/* 									<h6>Revenue</h6>*/
/* 									<h2>$42,562</h2>*/
/* 									<p class="m-b-0">*/
/* 										$5,032 <i class="feather icon-arrow-up m-l-10"></i>*/
/* 									</p>*/
/* 									<i class="card-icon feather icon-filter"></i>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-4">*/
/* 							<div class="card bg-c-blue order-card">*/
/* 								<div class="card-block">*/
/* 									<h6>Orders Received</h6>*/
/* 									<h2>486</h2>*/
/* 									<p class="m-b-0">*/
/* 										$5,032 <i class="feather icon-arrow-up m-l-10 m-r-10"></i>$1,055*/
/* 										<i class="feather icon-arrow-down"></i>*/
/* 									</p>*/
/* 									<i class="card-icon feather icon-users"></i>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-xl-4">*/
/* 							<div class="card bg-c-green order-card">*/
/* 								<div class="card-block">*/
/* 									<h6>Total Sales</h6>*/
/* 									<h2>1641</h2>*/
/* 									<p class="m-b-0">*/
/* 										$5,032 <i class="feather icon-arrow-down m-l-10 m-r-10"></i>$1,055*/
/* 										<i class="feather icon-arrow-up"></i>*/
/* 									</p>*/
/* 									<i class="card-icon feather icon-radio"></i>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- order  end -->*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- Page-body end -->*/
/* */
/* */
/* 			</div>*/
/* 			<div id="styleSelector"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %} {% block footer %} {{ parent() }} {% endblock %}*/
/* */
