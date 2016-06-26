<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_012d8d00d60d4778d35ad744665e162bca64d7c460d172f5272458f00bb36c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f09e1153633b2e489850bc0cd394346a6bbba124ca704f9bba6ef5f7385959a1 = $this->env->getExtension("native_profiler");
        $__internal_f09e1153633b2e489850bc0cd394346a6bbba124ca704f9bba6ef5f7385959a1->enter($__internal_f09e1153633b2e489850bc0cd394346a6bbba124ca704f9bba6ef5f7385959a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f09e1153633b2e489850bc0cd394346a6bbba124ca704f9bba6ef5f7385959a1->leave($__internal_f09e1153633b2e489850bc0cd394346a6bbba124ca704f9bba6ef5f7385959a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4dc6ac383c62afc4d6eb7619b2ab8cfb10f139838b0d098f009b2bd60f5108f = $this->env->getExtension("native_profiler");
        $__internal_e4dc6ac383c62afc4d6eb7619b2ab8cfb10f139838b0d098f009b2bd60f5108f->enter($__internal_e4dc6ac383c62afc4d6eb7619b2ab8cfb10f139838b0d098f009b2bd60f5108f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4dc6ac383c62afc4d6eb7619b2ab8cfb10f139838b0d098f009b2bd60f5108f->leave($__internal_e4dc6ac383c62afc4d6eb7619b2ab8cfb10f139838b0d098f009b2bd60f5108f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3b3f50f7d9c51a151eae0a4147ec64f21ae4836ea6602a07ca0ac4ffb7bd618 = $this->env->getExtension("native_profiler");
        $__internal_c3b3f50f7d9c51a151eae0a4147ec64f21ae4836ea6602a07ca0ac4ffb7bd618->enter($__internal_c3b3f50f7d9c51a151eae0a4147ec64f21ae4836ea6602a07ca0ac4ffb7bd618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3b3f50f7d9c51a151eae0a4147ec64f21ae4836ea6602a07ca0ac4ffb7bd618->leave($__internal_c3b3f50f7d9c51a151eae0a4147ec64f21ae4836ea6602a07ca0ac4ffb7bd618_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f33056df262e38f466b8c7df79e93498f45f55c9162b4215ab9903965ee87a4a = $this->env->getExtension("native_profiler");
        $__internal_f33056df262e38f466b8c7df79e93498f45f55c9162b4215ab9903965ee87a4a->enter($__internal_f33056df262e38f466b8c7df79e93498f45f55c9162b4215ab9903965ee87a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f33056df262e38f466b8c7df79e93498f45f55c9162b4215ab9903965ee87a4a->leave($__internal_f33056df262e38f466b8c7df79e93498f45f55c9162b4215ab9903965ee87a4a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
