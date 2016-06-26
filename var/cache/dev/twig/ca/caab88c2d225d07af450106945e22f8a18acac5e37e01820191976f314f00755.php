<?php

/* CHRPlatformBundle:Default:connexion.html.twig */
class __TwigTemplate_b1f720389ca5dab394aa7a946d5869f9e0f452e170357454ae787df5ba2965f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CHRPlatformBundle::layout.html.twig", "CHRPlatformBundle:Default:connexion.html.twig", 1);
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
        $__internal_4d0aa4ffa74896f31a84fe7d40cc717a112a76f3d9b49717cb06e3b9a2932348 = $this->env->getExtension("native_profiler");
        $__internal_4d0aa4ffa74896f31a84fe7d40cc717a112a76f3d9b49717cb06e3b9a2932348->enter($__internal_4d0aa4ffa74896f31a84fe7d40cc717a112a76f3d9b49717cb06e3b9a2932348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CHRPlatformBundle:Default:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d0aa4ffa74896f31a84fe7d40cc717a112a76f3d9b49717cb06e3b9a2932348->leave($__internal_4d0aa4ffa74896f31a84fe7d40cc717a112a76f3d9b49717cb06e3b9a2932348_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8751c4f05444d1c9380697b68048a27fb0e3eab2475c9d36df24f11c4819eeb = $this->env->getExtension("native_profiler");
        $__internal_b8751c4f05444d1c9380697b68048a27fb0e3eab2475c9d36df24f11c4819eeb->enter($__internal_b8751c4f05444d1c9380697b68048a27fb0e3eab2475c9d36df24f11c4819eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion — ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_b8751c4f05444d1c9380697b68048a27fb0e3eab2475c9d36df24f11c4819eeb->leave($__internal_b8751c4f05444d1c9380697b68048a27fb0e3eab2475c9d36df24f11c4819eeb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_086bc1e5f1211df12356a921a5f0715b5529809c8c39dc4909e0f0819b4a015a = $this->env->getExtension("native_profiler");
        $__internal_086bc1e5f1211df12356a921a5f0715b5529809c8c39dc4909e0f0819b4a015a->enter($__internal_086bc1e5f1211df12356a921a5f0715b5529809c8c39dc4909e0f0819b4a015a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t\t<div class=\"container\">
\t\t\t<h1 class=\"text-center\">Connexion / Inscription</h1>
\t\t</div>

\t";
        
        $__internal_086bc1e5f1211df12356a921a5f0715b5529809c8c39dc4909e0f0819b4a015a->leave($__internal_086bc1e5f1211df12356a921a5f0715b5529809c8c39dc4909e0f0819b4a015a_prof);

    }

    public function getTemplateName()
    {
        return "CHRPlatformBundle:Default:connexion.html.twig";
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
/* {% block title %}Connexion — {{ parent() }}{% endblock %}*/
/* */
/* 	{% block body %}*/
/* */
/* 		<div class="container">*/
/* 			<h1 class="text-center">Connexion / Inscription</h1>*/
/* 		</div>*/
/* */
/* 	{% endblock %}*/
