<?php

/* CHRPlatformBundle::layout.html.twig */
class __TwigTemplate_7e72590373d6edef93b3a539cb680bd3f1f878e058897d6f24d57d9318027428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee1507d195918770684e7e092d04caaade656464203fbc5b2f3fcfb750c6172a = $this->env->getExtension("native_profiler");
        $__internal_ee1507d195918770684e7e092d04caaade656464203fbc5b2f3fcfb750c6172a->enter($__internal_ee1507d195918770684e7e092d04caaade656464203fbc5b2f3fcfb750c6172a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CHRPlatformBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
\t<!-- Latest compiled and minified CSS -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

\t<!-- Optional theme -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

\t<!-- Latest compiled and minified JavaScript -->
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
\t<link \trel=\"stylesheet\" \t\thref \t=\t\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/AskEm/custom/css/style.css"), "html", null, true);
        echo "\">
</head>

<body>

\t<div class=\"jumbotron\">
\t\t<div class=\"container\">
\t\t\t<h1>Bienvenue sur Ask'Em</h1>
\t\t\t<p>Le projet dont vous êtes l'acteur.</p>
\t\t\t<p><a class=\"btn btn-info btn-lg\" href=\"#\" role=\"button\">En savoir plus</a></p>
\t\t</div>
\t</div>

\t<nav class=\"navbar navbar-default\">
\t\t<div class=\"container-fluid\">
\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Ask'Em</a>
\t\t\t</div>

\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t<li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><span class=\"fa fa-area-chart fa-lg\"> Liste des sondages</span></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("sondage_new");
        echo "\"><span class=\"fa fa-plus fa-lg\"> Ajout d'un sondage</span></a></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("user_connexion");
        echo "\"><span class=\"fa fa-user fa-lg\"> Connexion</span></a></li>
\t\t\t\t</ul>
\t\t\t</div><!-- /.navbar-collapse -->
\t\t</div><!-- /.container-fluid -->
\t</nav>
\t";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
</body>

</html>";
        
        $__internal_ee1507d195918770684e7e092d04caaade656464203fbc5b2f3fcfb750c6172a->leave($__internal_ee1507d195918770684e7e092d04caaade656464203fbc5b2f3fcfb750c6172a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ded742cbf0fd6990f6dcc617eaccdc9a5454c067867f4b074f2124ed57173c5a = $this->env->getExtension("native_profiler");
        $__internal_ded742cbf0fd6990f6dcc617eaccdc9a5454c067867f4b074f2124ed57173c5a->enter($__internal_ded742cbf0fd6990f6dcc617eaccdc9a5454c067867f4b074f2124ed57173c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ask'Em";
        
        $__internal_ded742cbf0fd6990f6dcc617eaccdc9a5454c067867f4b074f2124ed57173c5a->leave($__internal_ded742cbf0fd6990f6dcc617eaccdc9a5454c067867f4b074f2124ed57173c5a_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ce36d41e13aa47187befcd49b10ae36cd0c4d8fe1151689c44b32e09dc53941 = $this->env->getExtension("native_profiler");
        $__internal_2ce36d41e13aa47187befcd49b10ae36cd0c4d8fe1151689c44b32e09dc53941->enter($__internal_2ce36d41e13aa47187befcd49b10ae36cd0c4d8fe1151689c44b32e09dc53941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "
\t";
        
        $__internal_2ce36d41e13aa47187befcd49b10ae36cd0c4d8fe1151689c44b32e09dc53941->leave($__internal_2ce36d41e13aa47187befcd49b10ae36cd0c4d8fe1151689c44b32e09dc53941_prof);

    }

    public function getTemplateName()
    {
        return "CHRPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 56,  119 => 55,  107 => 6,  97 => 58,  95 => 55,  87 => 50,  81 => 47,  77 => 46,  45 => 17,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html lang="fr">*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<title>{% block title %}Ask'Em{% endblock %}</title>*/
/* 	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>*/
/* 	<!-- Latest compiled and minified CSS -->*/
/* 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">*/
/* 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* 	<!-- Optional theme -->*/
/* 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/* 	<!-- Latest compiled and minified JavaScript -->*/
/* 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* 	<link 	rel="stylesheet" 		href 	=	"{{ asset('bundles/AskEm/custom/css/style.css') }}">*/
/* </head>*/
/* */
/* <body>*/
/* */
/* 	<div class="jumbotron">*/
/* 		<div class="container">*/
/* 			<h1>Bienvenue sur Ask'Em</h1>*/
/* 			<p>Le projet dont vous êtes l'acteur.</p>*/
/* 			<p><a class="btn btn-info btn-lg" href="#" role="button">En savoir plus</a></p>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<nav class="navbar navbar-default">*/
/* 		<div class="container-fluid">*/
/* 			<!-- Brand and toggle get grouped for better mobile display -->*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/* 					<span class="sr-only">Toggle navigation</span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/* 				<a class="navbar-brand" href="#">Ask'Em</a>*/
/* 			</div>*/
/* */
/* 			<!-- Collect the nav links, forms, and other content for toggling -->*/
/* 			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 				<ul class="nav navbar-nav">*/
/* 					<li><a href="{{ path('index') }}"><span class="fa fa-area-chart fa-lg"> Liste des sondages</span></a></li>*/
/* 					<li><a href="{{ path('sondage_new') }}"><span class="fa fa-plus fa-lg"> Ajout d'un sondage</span></a></li>*/
/* 				</ul>*/
/* 				<ul class="nav navbar-nav navbar-right">*/
/* 					<li><a href="{{ path('user_connexion') }}"><span class="fa fa-user fa-lg"> Connexion</span></a></li>*/
/* 				</ul>*/
/* 			</div><!-- /.navbar-collapse -->*/
/* 		</div><!-- /.container-fluid -->*/
/* 	</nav>*/
/* 	{% block body %}*/
/* */
/* 	{% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
