<?php

/* CommentsBundle:Post:createComment.html.twig */
class __TwigTemplate_d2d53ba06face0cad1ac19a68c05119dd1263fb030ad8218bfc1f0e108f97c8b extends Twig_Template
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
        $__internal_ed86fba37066ca37b41e5450a9fa35c36d6544ec3205c0040d9c42a271b0c0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed86fba37066ca37b41e5450a9fa35c36d6544ec3205c0040d9c42a271b0c0ee->enter($__internal_ed86fba37066ca37b41e5450a9fa35c36d6544ec3205c0040d9c42a271b0c0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommentsBundle:Post:createComment.html.twig"));

        // line 1
        if (array_key_exists("id", $context)) {
            // line 2
            echo "stworzono komentarz o id ";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "
";
        }
        // line 4
        echo "

<form method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo "\">
   <div><input type=\"text\" name=\"nick\" placeholder=\"nick\" required></div>
    <div><textarea name=\"comment\" placeholder=\"comment\" required></textarea></div>
        <input type=\"submit\">
</form>

<a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAll");
        echo "\">pokaz wszystkich</a>
<div><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("findNick_");
        echo "\">znajdz</a></div>

";
        // line 15
        if (array_key_exists("nick", $context)) {
            // line 16
            echo "    ";
            echo twig_escape_filter($this->env, ($context["nick"] ?? $this->getContext($context, "nick")), "html", null, true);
            echo "
";
        }
        // line 18
        echo "


";
        
        $__internal_ed86fba37066ca37b41e5450a9fa35c36d6544ec3205c0040d9c42a271b0c0ee->leave($__internal_ed86fba37066ca37b41e5450a9fa35c36d6544ec3205c0040d9c42a271b0c0ee_prof);

    }

    public function getTemplateName()
    {
        return "CommentsBundle:Post:createComment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  54 => 16,  52 => 15,  47 => 13,  43 => 12,  34 => 6,  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if id is defined %}
stworzono komentarz o id {{ id }}
{% endif %}


<form method=\"post\" action=\"{{ path(\"create\") }}\">
   <div><input type=\"text\" name=\"nick\" placeholder=\"nick\" required></div>
    <div><textarea name=\"comment\" placeholder=\"comment\" required></textarea></div>
        <input type=\"submit\">
</form>

<a href=\"{{ path('showAll') }}\">pokaz wszystkich</a>
<div><a href=\"{{ path('findNick_') }}\">znajdz</a></div>

{% if nick is defined %}
    {{ nick }}
{% endif %}



", "CommentsBundle:Post:createComment.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/createComment.html.twig");
    }
}
