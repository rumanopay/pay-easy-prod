<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12b04ec8bc6a71988a24735686b69e6571fd894bc77170e68d6a0d2f54b076ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_53e71792715a2b9d7253e411a798d05fbb541f26c527c4313b8300bf17391997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e71792715a2b9d7253e411a798d05fbb541f26c527c4313b8300bf17391997->enter($__internal_53e71792715a2b9d7253e411a798d05fbb541f26c527c4313b8300bf17391997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_58b298e2ebb76bb0fb2d444312b5f4ad96e761421c6ab0e689ebffa4bebfd3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b298e2ebb76bb0fb2d444312b5f4ad96e761421c6ab0e689ebffa4bebfd3e9->enter($__internal_58b298e2ebb76bb0fb2d444312b5f4ad96e761421c6ab0e689ebffa4bebfd3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e71792715a2b9d7253e411a798d05fbb541f26c527c4313b8300bf17391997->leave($__internal_53e71792715a2b9d7253e411a798d05fbb541f26c527c4313b8300bf17391997_prof);

        
        $__internal_58b298e2ebb76bb0fb2d444312b5f4ad96e761421c6ab0e689ebffa4bebfd3e9->leave($__internal_58b298e2ebb76bb0fb2d444312b5f4ad96e761421c6ab0e689ebffa4bebfd3e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0eacadcdaab8cc0c0a063f8d54a68d0ccf4408f98596e00572885fd9620b4d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eacadcdaab8cc0c0a063f8d54a68d0ccf4408f98596e00572885fd9620b4d7d->enter($__internal_0eacadcdaab8cc0c0a063f8d54a68d0ccf4408f98596e00572885fd9620b4d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_969da283c43e934f4c1def1dff533a6e7e447bd429980de296e16d98c786984f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969da283c43e934f4c1def1dff533a6e7e447bd429980de296e16d98c786984f->enter($__internal_969da283c43e934f4c1def1dff533a6e7e447bd429980de296e16d98c786984f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_969da283c43e934f4c1def1dff533a6e7e447bd429980de296e16d98c786984f->leave($__internal_969da283c43e934f4c1def1dff533a6e7e447bd429980de296e16d98c786984f_prof);

        
        $__internal_0eacadcdaab8cc0c0a063f8d54a68d0ccf4408f98596e00572885fd9620b4d7d->leave($__internal_0eacadcdaab8cc0c0a063f8d54a68d0ccf4408f98596e00572885fd9620b4d7d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_690f9ffc73420042ced47ed9f6af00aefc10c76ef82961fbd1946a58cdfc5dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690f9ffc73420042ced47ed9f6af00aefc10c76ef82961fbd1946a58cdfc5dc3->enter($__internal_690f9ffc73420042ced47ed9f6af00aefc10c76ef82961fbd1946a58cdfc5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d61dab3d0c95248166d3f1f26af7b4ef5a84a234565ae885d1f7f9a775f4dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d61dab3d0c95248166d3f1f26af7b4ef5a84a234565ae885d1f7f9a775f4dd6->enter($__internal_9d61dab3d0c95248166d3f1f26af7b4ef5a84a234565ae885d1f7f9a775f4dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9d61dab3d0c95248166d3f1f26af7b4ef5a84a234565ae885d1f7f9a775f4dd6->leave($__internal_9d61dab3d0c95248166d3f1f26af7b4ef5a84a234565ae885d1f7f9a775f4dd6_prof);

        
        $__internal_690f9ffc73420042ced47ed9f6af00aefc10c76ef82961fbd1946a58cdfc5dc3->leave($__internal_690f9ffc73420042ced47ed9f6af00aefc10c76ef82961fbd1946a58cdfc5dc3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b85a2a2f98825c2cb61aa3b0a41d3d18d4a23a3d32f31e53998c82a18df8db45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85a2a2f98825c2cb61aa3b0a41d3d18d4a23a3d32f31e53998c82a18df8db45->enter($__internal_b85a2a2f98825c2cb61aa3b0a41d3d18d4a23a3d32f31e53998c82a18df8db45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d77b931ed4440e985550a12928b25019e687d27a1d408e33458c0e5eeb82598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d77b931ed4440e985550a12928b25019e687d27a1d408e33458c0e5eeb82598->enter($__internal_9d77b931ed4440e985550a12928b25019e687d27a1d408e33458c0e5eeb82598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9d77b931ed4440e985550a12928b25019e687d27a1d408e33458c0e5eeb82598->leave($__internal_9d77b931ed4440e985550a12928b25019e687d27a1d408e33458c0e5eeb82598_prof);

        
        $__internal_b85a2a2f98825c2cb61aa3b0a41d3d18d4a23a3d32f31e53998c82a18df8db45->leave($__internal_b85a2a2f98825c2cb61aa3b0a41d3d18d4a23a3d32f31e53998c82a18df8db45_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/rumanoba/private/repos/sym/pay-easy/pay-easy-prod/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
