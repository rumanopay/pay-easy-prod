<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_55e3b6cbb876b13cb43e05fe7756ad5d5d5beb037e43e66f345f23b2251dba1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af30da0cccf68eee079e783e9f4074e1b72ea4bab7329aa86a94e8bc3d095b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af30da0cccf68eee079e783e9f4074e1b72ea4bab7329aa86a94e8bc3d095b36->enter($__internal_af30da0cccf68eee079e783e9f4074e1b72ea4bab7329aa86a94e8bc3d095b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_be83bb1c1a73f37ea6af61bb129667be627c9737eab52a4f03a6c1663ffa0a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be83bb1c1a73f37ea6af61bb129667be627c9737eab52a4f03a6c1663ffa0a4d->enter($__internal_be83bb1c1a73f37ea6af61bb129667be627c9737eab52a4f03a6c1663ffa0a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af30da0cccf68eee079e783e9f4074e1b72ea4bab7329aa86a94e8bc3d095b36->leave($__internal_af30da0cccf68eee079e783e9f4074e1b72ea4bab7329aa86a94e8bc3d095b36_prof);

        
        $__internal_be83bb1c1a73f37ea6af61bb129667be627c9737eab52a4f03a6c1663ffa0a4d->leave($__internal_be83bb1c1a73f37ea6af61bb129667be627c9737eab52a4f03a6c1663ffa0a4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abd802d26b5cc3bf87a47ed212948c42f500784509acd642200072302fcdf6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd802d26b5cc3bf87a47ed212948c42f500784509acd642200072302fcdf6fb->enter($__internal_abd802d26b5cc3bf87a47ed212948c42f500784509acd642200072302fcdf6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c4dd6845bda98bef096dddbe00fbfab5fc7af248f681ed34f4b7575ff9eb40d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dd6845bda98bef096dddbe00fbfab5fc7af248f681ed34f4b7575ff9eb40d2->enter($__internal_c4dd6845bda98bef096dddbe00fbfab5fc7af248f681ed34f4b7575ff9eb40d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c4dd6845bda98bef096dddbe00fbfab5fc7af248f681ed34f4b7575ff9eb40d2->leave($__internal_c4dd6845bda98bef096dddbe00fbfab5fc7af248f681ed34f4b7575ff9eb40d2_prof);

        
        $__internal_abd802d26b5cc3bf87a47ed212948c42f500784509acd642200072302fcdf6fb->leave($__internal_abd802d26b5cc3bf87a47ed212948c42f500784509acd642200072302fcdf6fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/rumanoba/private/repos/sym/pay-easy/pay-easy-prod/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
