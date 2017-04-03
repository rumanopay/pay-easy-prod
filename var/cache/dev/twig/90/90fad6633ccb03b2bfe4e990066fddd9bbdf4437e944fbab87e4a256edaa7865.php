<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6391db6bfdb9714a0fe0223079631665326829c6050b18da037c02fcb6c28824 extends Twig_Template
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
        $__internal_1d57378cc27099164aa91483edbb8e340558c7a29cf520d082f26a03b65a37c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d57378cc27099164aa91483edbb8e340558c7a29cf520d082f26a03b65a37c7->enter($__internal_1d57378cc27099164aa91483edbb8e340558c7a29cf520d082f26a03b65a37c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_39500877642b6ed3d296698fb266878f97063ceaece99c0d68cfc2681aa13197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39500877642b6ed3d296698fb266878f97063ceaece99c0d68cfc2681aa13197->enter($__internal_39500877642b6ed3d296698fb266878f97063ceaece99c0d68cfc2681aa13197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d57378cc27099164aa91483edbb8e340558c7a29cf520d082f26a03b65a37c7->leave($__internal_1d57378cc27099164aa91483edbb8e340558c7a29cf520d082f26a03b65a37c7_prof);

        
        $__internal_39500877642b6ed3d296698fb266878f97063ceaece99c0d68cfc2681aa13197->leave($__internal_39500877642b6ed3d296698fb266878f97063ceaece99c0d68cfc2681aa13197_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39fc2cb748a36d8c9d5f60ed9120ab4d8d8d21f4d1eb3f41a1b9a11c041eb7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fc2cb748a36d8c9d5f60ed9120ab4d8d8d21f4d1eb3f41a1b9a11c041eb7bb->enter($__internal_39fc2cb748a36d8c9d5f60ed9120ab4d8d8d21f4d1eb3f41a1b9a11c041eb7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_387ada5c536445b63b777295c008d508616da6aa34fa4d160a76149268bede32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387ada5c536445b63b777295c008d508616da6aa34fa4d160a76149268bede32->enter($__internal_387ada5c536445b63b777295c008d508616da6aa34fa4d160a76149268bede32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_387ada5c536445b63b777295c008d508616da6aa34fa4d160a76149268bede32->leave($__internal_387ada5c536445b63b777295c008d508616da6aa34fa4d160a76149268bede32_prof);

        
        $__internal_39fc2cb748a36d8c9d5f60ed9120ab4d8d8d21f4d1eb3f41a1b9a11c041eb7bb->leave($__internal_39fc2cb748a36d8c9d5f60ed9120ab4d8d8d21f4d1eb3f41a1b9a11c041eb7bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e3730517eb48a40fd9969f674744ef5f5e66c7971f6df36d62da6c7cfaee312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3730517eb48a40fd9969f674744ef5f5e66c7971f6df36d62da6c7cfaee312->enter($__internal_5e3730517eb48a40fd9969f674744ef5f5e66c7971f6df36d62da6c7cfaee312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e5c43ff10b370936b71c87e98b371fc5718f2598f92f66207dbcdf624cdd4951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c43ff10b370936b71c87e98b371fc5718f2598f92f66207dbcdf624cdd4951->enter($__internal_e5c43ff10b370936b71c87e98b371fc5718f2598f92f66207dbcdf624cdd4951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5c43ff10b370936b71c87e98b371fc5718f2598f92f66207dbcdf624cdd4951->leave($__internal_e5c43ff10b370936b71c87e98b371fc5718f2598f92f66207dbcdf624cdd4951_prof);

        
        $__internal_5e3730517eb48a40fd9969f674744ef5f5e66c7971f6df36d62da6c7cfaee312->leave($__internal_5e3730517eb48a40fd9969f674744ef5f5e66c7971f6df36d62da6c7cfaee312_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_523174f4ec895e1a19966909561d2bebb8b5ad363a99dc95bf5216de888912b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523174f4ec895e1a19966909561d2bebb8b5ad363a99dc95bf5216de888912b1->enter($__internal_523174f4ec895e1a19966909561d2bebb8b5ad363a99dc95bf5216de888912b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8b1952fc018de4a3f1d00d9ce0a627a908286b75814bc459ccc377330ef6873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b1952fc018de4a3f1d00d9ce0a627a908286b75814bc459ccc377330ef6873->enter($__internal_d8b1952fc018de4a3f1d00d9ce0a627a908286b75814bc459ccc377330ef6873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8b1952fc018de4a3f1d00d9ce0a627a908286b75814bc459ccc377330ef6873->leave($__internal_d8b1952fc018de4a3f1d00d9ce0a627a908286b75814bc459ccc377330ef6873_prof);

        
        $__internal_523174f4ec895e1a19966909561d2bebb8b5ad363a99dc95bf5216de888912b1->leave($__internal_523174f4ec895e1a19966909561d2bebb8b5ad363a99dc95bf5216de888912b1_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/rumanoba/private/repos/sym/pay-easy/pay-easy-prod/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
