<?php

/* CommentsBundle:Post:show.html.twig */
class __TwigTemplate_cca05c68217f0862fceccddb367c59e61123fa0ea845bf08bc0ea31ab512973c extends Twig_Template
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
        $__internal_17b5de4ec9a9556ab701ac87d197244352b6338eaf7d2edc80fd46159a260193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b5de4ec9a9556ab701ac87d197244352b6338eaf7d2edc80fd46159a260193->enter($__internal_17b5de4ec9a9556ab701ac87d197244352b6338eaf7d2edc80fd46159a260193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommentsBundle:Post:show.html.twig"));

        // line 1
        echo "stworzono komentarz ";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "

<div>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">wroc</a>
</div>

";
        
        $__internal_17b5de4ec9a9556ab701ac87d197244352b6338eaf7d2edc80fd46159a260193->leave($__internal_17b5de4ec9a9556ab701ac87d197244352b6338eaf7d2edc80fd46159a260193_prof);

    }

    public function getTemplateName()
    {
        return "CommentsBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("stworzono komentarz {{ id }}

<div>
    <a href=\"{{ path('homepage') }}\">wroc</a>
</div>

", "CommentsBundle:Post:show.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/show.html.twig");
    }
}
