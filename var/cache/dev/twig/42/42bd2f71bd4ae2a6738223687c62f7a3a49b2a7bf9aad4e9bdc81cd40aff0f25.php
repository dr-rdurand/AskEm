<?php

/* CHRPlatformBundle:Default:sondage.html.twig */
class __TwigTemplate_03ec79c85fc90457932dbb923a43ce644fd87b58340c851341ff40e21f73265b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CHRPlatformBundle::layout.html.twig", "CHRPlatformBundle:Default:sondage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CHRPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_604bf0937c3c81acf5a3bece6d1f5bce1aec74044befb877d8b564f6e913597a = $this->env->getExtension("native_profiler");
        $__internal_604bf0937c3c81acf5a3bece6d1f5bce1aec74044befb877d8b564f6e913597a->enter($__internal_604bf0937c3c81acf5a3bece6d1f5bce1aec74044befb877d8b564f6e913597a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CHRPlatformBundle:Default:sondage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_604bf0937c3c81acf5a3bece6d1f5bce1aec74044befb877d8b564f6e913597a->leave($__internal_604bf0937c3c81acf5a3bece6d1f5bce1aec74044befb877d8b564f6e913597a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65b098995afb4d5ff383bf12b784b26bd77f397b02c8835ba134468a6800a31e = $this->env->getExtension("native_profiler");
        $__internal_65b098995afb4d5ff383bf12b784b26bd77f397b02c8835ba134468a6800a31e->enter($__internal_65b098995afb4d5ff383bf12b784b26bd77f397b02c8835ba134468a6800a31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des sondages — ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_65b098995afb4d5ff383bf12b784b26bd77f397b02c8835ba134468a6800a31e->leave($__internal_65b098995afb4d5ff383bf12b784b26bd77f397b02c8835ba134468a6800a31e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_edaff778e975ad740b3cd385a8d8505ed2a6083656ea94526098934048d38fd5 = $this->env->getExtension("native_profiler");
        $__internal_edaff778e975ad740b3cd385a8d8505ed2a6083656ea94526098934048d38fd5->enter($__internal_edaff778e975ad740b3cd385a8d8505ed2a6083656ea94526098934048d38fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t\t<div class=\"container\">
\t\t\t<h1 class=\"text-center\">Liste des sondages</h1>
\t\t\t<div class=\"text-center\">
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t";
        
        $__internal_edaff778e975ad740b3cd385a8d8505ed2a6083656ea94526098934048d38fd5->leave($__internal_edaff778e975ad740b3cd385a8d8505ed2a6083656ea94526098934048d38fd5_prof);

    }

    public function getTemplateName()
    {
        return "CHRPlatformBundle:Default:sondage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CHRPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}Liste des sondages — {{ parent() }}{% endblock %}*/
/* */
/* 	{% block body %}*/
/* */
/* 		<div class="container">*/
/* 			<h1 class="text-center">Liste des sondages</h1>*/
/* 			<div class="text-center">*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	{% endblock %}*/
