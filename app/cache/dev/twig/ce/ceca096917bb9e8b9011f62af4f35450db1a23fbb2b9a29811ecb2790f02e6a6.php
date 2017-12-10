<?php

/* ::base.html.twig */
class __TwigTemplate_650fc2521941148e246f56314acdf31b28c3ec82ac561b545427f19714aa0025 extends Twig_Template
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
        $__internal_5a741dae57e8ceed9f59d70a27dbaa336bc351e44a233034d093f6e6dcb25d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a741dae57e8ceed9f59d70a27dbaa336bc351e44a233034d093f6e6dcb25d80->enter($__internal_5a741dae57e8ceed9f59d70a27dbaa336bc351e44a233034d093f6e6dcb25d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5a741dae57e8ceed9f59d70a27dbaa336bc351e44a233034d093f6e6dcb25d80->leave($__internal_5a741dae57e8ceed9f59d70a27dbaa336bc351e44a233034d093f6e6dcb25d80_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff652f1c82b40af5d750f64a87666c1e2829cab1baa413ded175e536911fe639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff652f1c82b40af5d750f64a87666c1e2829cab1baa413ded175e536911fe639->enter($__internal_ff652f1c82b40af5d750f64a87666c1e2829cab1baa413ded175e536911fe639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ff652f1c82b40af5d750f64a87666c1e2829cab1baa413ded175e536911fe639->leave($__internal_ff652f1c82b40af5d750f64a87666c1e2829cab1baa413ded175e536911fe639_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_136c9e3be3a9133bdcc833109bfd588ede1950a14a19cf68b62407fbf0a78bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136c9e3be3a9133bdcc833109bfd588ede1950a14a19cf68b62407fbf0a78bd9->enter($__internal_136c9e3be3a9133bdcc833109bfd588ede1950a14a19cf68b62407fbf0a78bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_136c9e3be3a9133bdcc833109bfd588ede1950a14a19cf68b62407fbf0a78bd9->leave($__internal_136c9e3be3a9133bdcc833109bfd588ede1950a14a19cf68b62407fbf0a78bd9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec483a47da7ee45e4ae537db98c277e2021692c7d7d7005cc57d45f625538b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec483a47da7ee45e4ae537db98c277e2021692c7d7d7005cc57d45f625538b8c->enter($__internal_ec483a47da7ee45e4ae537db98c277e2021692c7d7d7005cc57d45f625538b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec483a47da7ee45e4ae537db98c277e2021692c7d7d7005cc57d45f625538b8c->leave($__internal_ec483a47da7ee45e4ae537db98c277e2021692c7d7d7005cc57d45f625538b8c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95c147a0fc216dae9326b37c69939d0cb19c1d4198051a9f9ec1f35124660004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c147a0fc216dae9326b37c69939d0cb19c1d4198051a9f9ec1f35124660004->enter($__internal_95c147a0fc216dae9326b37c69939d0cb19c1d4198051a9f9ec1f35124660004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_95c147a0fc216dae9326b37c69939d0cb19c1d4198051a9f9ec1f35124660004->leave($__internal_95c147a0fc216dae9326b37c69939d0cb19c1d4198051a9f9ec1f35124660004_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
", "::base.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/app/Resources/views/base.html.twig");
    }
}
