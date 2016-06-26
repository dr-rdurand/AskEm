<?php

/* CHRPlatformBundle:Default:form.html.twig */
class __TwigTemplate_720d1e8ededd12b2fbb637190db61cda36bfe66127678edb53a5a412e917bc25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CHRPlatformBundle::layout.html.twig", "CHRPlatformBundle:Default:form.html.twig", 1);
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
        $__internal_1a4eabd1b0817c2e2d9b05ae7438a12f5f181b251809e554903ee08d4415b7e7 = $this->env->getExtension("native_profiler");
        $__internal_1a4eabd1b0817c2e2d9b05ae7438a12f5f181b251809e554903ee08d4415b7e7->enter($__internal_1a4eabd1b0817c2e2d9b05ae7438a12f5f181b251809e554903ee08d4415b7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CHRPlatformBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a4eabd1b0817c2e2d9b05ae7438a12f5f181b251809e554903ee08d4415b7e7->leave($__internal_1a4eabd1b0817c2e2d9b05ae7438a12f5f181b251809e554903ee08d4415b7e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_307a06dbafcff88c7f29b0d7d24a7171d4accf4272b2f0d4552906b40e41f59f = $this->env->getExtension("native_profiler");
        $__internal_307a06dbafcff88c7f29b0d7d24a7171d4accf4272b2f0d4552906b40e41f59f->enter($__internal_307a06dbafcff88c7f29b0d7d24a7171d4accf4272b2f0d4552906b40e41f59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Création Sondage — ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_307a06dbafcff88c7f29b0d7d24a7171d4accf4272b2f0d4552906b40e41f59f->leave($__internal_307a06dbafcff88c7f29b0d7d24a7171d4accf4272b2f0d4552906b40e41f59f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d24ee8890823490c5559fe7f450e7f44cb37c253b0f658d007cccf54875f91e = $this->env->getExtension("native_profiler");
        $__internal_4d24ee8890823490c5559fe7f450e7f44cb37c253b0f658d007cccf54875f91e->enter($__internal_4d24ee8890823490c5559fe7f450e7f44cb37c253b0f658d007cccf54875f91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t\t<div class=\"container\">
\t\t\t<h1 class=\"text-center\">Formulaire de création de sondage</h1>
\t\t</div>

\t";
        
        $__internal_4d24ee8890823490c5559fe7f450e7f44cb37c253b0f658d007cccf54875f91e->leave($__internal_4d24ee8890823490c5559fe7f450e7f44cb37c253b0f658d007cccf54875f91e_prof);

    }

    public function getTemplateName()
    {
        return "CHRPlatformBundle:Default:form.html.twig";
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
/* {% block title %}Création Sondage — {{ parent() }}{% endblock %}*/
/* */
/* 	{% block body %}*/
/* */
/* 		<div class="container">*/
/* 			<h1 class="text-center">Formulaire de création de sondage</h1>*/
/* 		</div>*/
/* */
/* 	{% endblock %}*/
