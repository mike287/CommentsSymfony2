<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_aea4ad27aa317733bd4d728d107df81138897f78ef956562e2e564f2a3e589f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff42c602d3e72936421e8fd9a10e5e9ba3805c4572de5fa5a6fff43e6260f69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff42c602d3e72936421e8fd9a10e5e9ba3805c4572de5fa5a6fff43e6260f69c->enter($__internal_ff42c602d3e72936421e8fd9a10e5e9ba3805c4572de5fa5a6fff43e6260f69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff42c602d3e72936421e8fd9a10e5e9ba3805c4572de5fa5a6fff43e6260f69c->leave($__internal_ff42c602d3e72936421e8fd9a10e5e9ba3805c4572de5fa5a6fff43e6260f69c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f885c19ab3710fa5b3bdacf448247af136ae5043353e534ff91f7bb6cf11691b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f885c19ab3710fa5b3bdacf448247af136ae5043353e534ff91f7bb6cf11691b->enter($__internal_f885c19ab3710fa5b3bdacf448247af136ae5043353e534ff91f7bb6cf11691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f885c19ab3710fa5b3bdacf448247af136ae5043353e534ff91f7bb6cf11691b->leave($__internal_f885c19ab3710fa5b3bdacf448247af136ae5043353e534ff91f7bb6cf11691b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1def189462beaf37d6cbf1d241195d517c3396d709ce25981ebc17aeea16f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1def189462beaf37d6cbf1d241195d517c3396d709ce25981ebc17aeea16f66->enter($__internal_f1def189462beaf37d6cbf1d241195d517c3396d709ce25981ebc17aeea16f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1def189462beaf37d6cbf1d241195d517c3396d709ce25981ebc17aeea16f66->leave($__internal_f1def189462beaf37d6cbf1d241195d517c3396d709ce25981ebc17aeea16f66_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fec298218c3c6755d624e1d76ccc9e52435312e043aed67b43d0500baee5df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fec298218c3c6755d624e1d76ccc9e52435312e043aed67b43d0500baee5df2->enter($__internal_9fec298218c3c6755d624e1d76ccc9e52435312e043aed67b43d0500baee5df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9fec298218c3c6755d624e1d76ccc9e52435312e043aed67b43d0500baee5df2->leave($__internal_9fec298218c3c6755d624e1d76ccc9e52435312e043aed67b43d0500baee5df2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
