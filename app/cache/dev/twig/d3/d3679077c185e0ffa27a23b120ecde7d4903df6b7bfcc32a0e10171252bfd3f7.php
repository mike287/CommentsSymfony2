<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8553a7c0a5d3e2c6035253b2efb715b3e99df9a8706f876d94e22c2d32ddc5e0 extends Twig_Template
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
        $__internal_30b8acdeef33fbf550bb0dd6760557f8f39941e5a774505765bd38a4dbfeb511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b8acdeef33fbf550bb0dd6760557f8f39941e5a774505765bd38a4dbfeb511->enter($__internal_30b8acdeef33fbf550bb0dd6760557f8f39941e5a774505765bd38a4dbfeb511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b8acdeef33fbf550bb0dd6760557f8f39941e5a774505765bd38a4dbfeb511->leave($__internal_30b8acdeef33fbf550bb0dd6760557f8f39941e5a774505765bd38a4dbfeb511_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0e8409881c87ee4a77cb20b4169b01801cd272f8b7b451d94e3256994a3ec09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e8409881c87ee4a77cb20b4169b01801cd272f8b7b451d94e3256994a3ec09->enter($__internal_a0e8409881c87ee4a77cb20b4169b01801cd272f8b7b451d94e3256994a3ec09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a0e8409881c87ee4a77cb20b4169b01801cd272f8b7b451d94e3256994a3ec09->leave($__internal_a0e8409881c87ee4a77cb20b4169b01801cd272f8b7b451d94e3256994a3ec09_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c34eb8cd7911bb56dda077b7f524ed0970528f6c64b5a7048aa6eca1aedc5235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34eb8cd7911bb56dda077b7f524ed0970528f6c64b5a7048aa6eca1aedc5235->enter($__internal_c34eb8cd7911bb56dda077b7f524ed0970528f6c64b5a7048aa6eca1aedc5235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c34eb8cd7911bb56dda077b7f524ed0970528f6c64b5a7048aa6eca1aedc5235->leave($__internal_c34eb8cd7911bb56dda077b7f524ed0970528f6c64b5a7048aa6eca1aedc5235_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc027478db9c8b71db9b702414f8262d79c20e7edacda7f72ba9e92c84a081fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc027478db9c8b71db9b702414f8262d79c20e7edacda7f72ba9e92c84a081fd->enter($__internal_fc027478db9c8b71db9b702414f8262d79c20e7edacda7f72ba9e92c84a081fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc027478db9c8b71db9b702414f8262d79c20e7edacda7f72ba9e92c84a081fd->leave($__internal_fc027478db9c8b71db9b702414f8262d79c20e7edacda7f72ba9e92c84a081fd_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
