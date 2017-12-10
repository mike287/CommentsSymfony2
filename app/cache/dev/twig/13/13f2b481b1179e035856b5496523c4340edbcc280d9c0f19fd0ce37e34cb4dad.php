<?php

/* CommentsBundle:Post:create.html.twig */
class __TwigTemplate_bbe7adad969e417fa8bb48901d946c9286c1a13e971089f00c09351dc76b1aed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fcd1242da952490d72a886f050cba4422d156da489df33f04d2b53cc68c1687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcd1242da952490d72a886f050cba4422d156da489df33f04d2b53cc68c1687->enter($__internal_7fcd1242da952490d72a886f050cba4422d156da489df33f04d2b53cc68c1687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommentsBundle:Post:create.html.twig"));

        // line 1
        echo "

";
        // line 4
        echo "    ";
        // line 6
        echo "
id.";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mike"] ?? $this->getContext($context, "mike")), "id", array()), "html", null, true);
        echo "<br>
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mike"] ?? $this->getContext($context, "mike")), "nick", array()), "html", null, true);
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mike"] ?? $this->getContext($context, "mike")), "comment", array()), "html", null, true);
        echo "




";
        
        $__internal_7fcd1242da952490d72a886f050cba4422d156da489df33f04d2b53cc68c1687->leave($__internal_7fcd1242da952490d72a886f050cba4422d156da489df33f04d2b53cc68c1687_prof);

    }

    public function getTemplateName()
    {
        return "CommentsBundle:Post:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  35 => 8,  31 => 7,  28 => 6,  26 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{#{% for mike in mike %}#}
    {#{{ mike.id }}#}
{#{% endfor %}#}

id.{{ mike.id }}<br>
{{ mike.nick }}
{{ mike.comment }}




", "CommentsBundle:Post:create.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/create.html.twig");
    }
}
