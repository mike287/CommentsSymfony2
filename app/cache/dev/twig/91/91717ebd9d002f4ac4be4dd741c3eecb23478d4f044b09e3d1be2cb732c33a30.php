<?php

/* CommentsBundle:Post:showAll.html.twig */
class __TwigTemplate_4083da1b5aa044bbe365c547f83ba215838f74b8b797845347b6cbb4caed726e extends Twig_Template
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
        $__internal_76170dfd8d99520bbc4ea98dcdd158c7b8c2078ec980e874a8db004fcd500401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76170dfd8d99520bbc4ea98dcdd158c7b8c2078ec980e874a8db004fcd500401->enter($__internal_76170dfd8d99520bbc4ea98dcdd158c7b8c2078ec980e874a8db004fcd500401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommentsBundle:Post:showAll.html.twig"));

        // line 1
        echo "<div>
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">wroc</a>
</div>

<table border=\"1\">
    <td bgcolor=\"#faebd7\">id</td>
    <td bgcolor=\"#faebd7\">nick</td>
    <td bgcolor=\"#faebd7\" style=\"width: 250px\">koment</td>
    <td bgcolor=\"#faebd7\">usun</td>
    <td bgcolor=\"#faebd7\">edytuj</td>

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? $this->getContext($context, "rows")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "nick", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "comment", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleter", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\">delete</a></td>
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edytor", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\">edit</a></td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>

";
        
        $__internal_76170dfd8d99520bbc4ea98dcdd158c7b8c2078ec980e874a8db004fcd500401->leave($__internal_76170dfd8d99520bbc4ea98dcdd158c7b8c2078ec980e874a8db004fcd500401_prof);

    }

    public function getTemplateName()
    {
        return "CommentsBundle:Post:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  42 => 13,  38 => 12,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <a href=\"{{ path('homepage') }}\">wroc</a>
</div>

<table border=\"1\">
    <td bgcolor=\"#faebd7\">id</td>
    <td bgcolor=\"#faebd7\">nick</td>
    <td bgcolor=\"#faebd7\" style=\"width: 250px\">koment</td>
    <td bgcolor=\"#faebd7\">usun</td>
    <td bgcolor=\"#faebd7\">edytuj</td>

    {% for entry in rows %}
        <tr>
            <td>{{ entry.id }}</td>
            <td>{{ entry.nick }}</td>
            <td>{{ entry.comment }}</td>
            <td><a href=\"{{ path('deleter', {'id': entry.id})}}\">delete</a></td>
            <td><a href=\"{{ path('edytor', {'id': entry.id})}}\">edit</a></td>
        </tr>

    {% endfor %}
</table>

", "CommentsBundle:Post:showAll.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/showAll.html.twig");
    }
}
