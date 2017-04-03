<?php

/* base.html.twig */
class __TwigTemplate_648fd41373025cc66bc3f4fbb839522c1c16e7719b0b5c0056ff45af6f1a0cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_560f947ef697c77f5fbc69a7b069b1e101be1c28b66562f0426acc054b8cf578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560f947ef697c77f5fbc69a7b069b1e101be1c28b66562f0426acc054b8cf578->enter($__internal_560f947ef697c77f5fbc69a7b069b1e101be1c28b66562f0426acc054b8cf578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_161d70a83cd809eab85eee4f17b42111e15efea8a5b2a4ef09fe014088cd9fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161d70a83cd809eab85eee4f17b42111e15efea8a5b2a4ef09fe014088cd9fa2->enter($__internal_161d70a83cd809eab85eee4f17b42111e15efea8a5b2a4ef09fe014088cd9fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_560f947ef697c77f5fbc69a7b069b1e101be1c28b66562f0426acc054b8cf578->leave($__internal_560f947ef697c77f5fbc69a7b069b1e101be1c28b66562f0426acc054b8cf578_prof);

        
        $__internal_161d70a83cd809eab85eee4f17b42111e15efea8a5b2a4ef09fe014088cd9fa2->leave($__internal_161d70a83cd809eab85eee4f17b42111e15efea8a5b2a4ef09fe014088cd9fa2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b48067d04917a01a79a539b68d3d4700083cc2e697b825c8a4962a8f495942d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b48067d04917a01a79a539b68d3d4700083cc2e697b825c8a4962a8f495942d->enter($__internal_8b48067d04917a01a79a539b68d3d4700083cc2e697b825c8a4962a8f495942d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_557c438a79f72316793d05aa0119064438e49796c78d67ce9b07f96e0385344d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557c438a79f72316793d05aa0119064438e49796c78d67ce9b07f96e0385344d->enter($__internal_557c438a79f72316793d05aa0119064438e49796c78d67ce9b07f96e0385344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_557c438a79f72316793d05aa0119064438e49796c78d67ce9b07f96e0385344d->leave($__internal_557c438a79f72316793d05aa0119064438e49796c78d67ce9b07f96e0385344d_prof);

        
        $__internal_8b48067d04917a01a79a539b68d3d4700083cc2e697b825c8a4962a8f495942d->leave($__internal_8b48067d04917a01a79a539b68d3d4700083cc2e697b825c8a4962a8f495942d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abd66b038deb83ac2e0dc580c79e4dd9e0df6caf50e4ce12f098959e46d091c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd66b038deb83ac2e0dc580c79e4dd9e0df6caf50e4ce12f098959e46d091c0->enter($__internal_abd66b038deb83ac2e0dc580c79e4dd9e0df6caf50e4ce12f098959e46d091c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0caac44b5ae2b0b5e8b9da9647cec3e80119f5a60263efa8303e0864bc232be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0caac44b5ae2b0b5e8b9da9647cec3e80119f5a60263efa8303e0864bc232be8->enter($__internal_0caac44b5ae2b0b5e8b9da9647cec3e80119f5a60263efa8303e0864bc232be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0caac44b5ae2b0b5e8b9da9647cec3e80119f5a60263efa8303e0864bc232be8->leave($__internal_0caac44b5ae2b0b5e8b9da9647cec3e80119f5a60263efa8303e0864bc232be8_prof);

        
        $__internal_abd66b038deb83ac2e0dc580c79e4dd9e0df6caf50e4ce12f098959e46d091c0->leave($__internal_abd66b038deb83ac2e0dc580c79e4dd9e0df6caf50e4ce12f098959e46d091c0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_59e6421d1261676b45b8ae0b9131cba2782b5d0ea6c88d949cd8ffd6e2fce2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e6421d1261676b45b8ae0b9131cba2782b5d0ea6c88d949cd8ffd6e2fce2e4->enter($__internal_59e6421d1261676b45b8ae0b9131cba2782b5d0ea6c88d949cd8ffd6e2fce2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db603e240196ea41d69a707f43a51ef3139789dc5b303ff4a121f20149b13cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db603e240196ea41d69a707f43a51ef3139789dc5b303ff4a121f20149b13cf0->enter($__internal_db603e240196ea41d69a707f43a51ef3139789dc5b303ff4a121f20149b13cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db603e240196ea41d69a707f43a51ef3139789dc5b303ff4a121f20149b13cf0->leave($__internal_db603e240196ea41d69a707f43a51ef3139789dc5b303ff4a121f20149b13cf0_prof);

        
        $__internal_59e6421d1261676b45b8ae0b9131cba2782b5d0ea6c88d949cd8ffd6e2fce2e4->leave($__internal_59e6421d1261676b45b8ae0b9131cba2782b5d0ea6c88d949cd8ffd6e2fce2e4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79f26ab2a2140ec9b26ba9f0d1d37bb1c5684b723c9d5143989e068ca5b5621e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f26ab2a2140ec9b26ba9f0d1d37bb1c5684b723c9d5143989e068ca5b5621e->enter($__internal_79f26ab2a2140ec9b26ba9f0d1d37bb1c5684b723c9d5143989e068ca5b5621e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef67696b7c6aab769cd901321ff01833f740bc4bd3dcbf4102f79199070b19e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef67696b7c6aab769cd901321ff01833f740bc4bd3dcbf4102f79199070b19e9->enter($__internal_ef67696b7c6aab769cd901321ff01833f740bc4bd3dcbf4102f79199070b19e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef67696b7c6aab769cd901321ff01833f740bc4bd3dcbf4102f79199070b19e9->leave($__internal_ef67696b7c6aab769cd901321ff01833f740bc4bd3dcbf4102f79199070b19e9_prof);

        
        $__internal_79f26ab2a2140ec9b26ba9f0d1d37bb1c5684b723c9d5143989e068ca5b5621e->leave($__internal_79f26ab2a2140ec9b26ba9f0d1d37bb1c5684b723c9d5143989e068ca5b5621e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/rumanoba/private/repos/sym/pay-easy/pay-easy-prod/app/Resources/views/base.html.twig");
    }
}
