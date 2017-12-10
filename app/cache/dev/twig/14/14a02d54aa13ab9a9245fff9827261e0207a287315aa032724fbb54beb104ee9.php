<?php

/* /home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/edytorAction.html.twig */
class __TwigTemplate_f7884709da2e9c775748b55fa2042def7c19935807de8b942fb2e9cc84dc0681 extends Twig_Template
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
        $__internal_737d0fe887eb59bc729006991d545c9e4686672dd4c4c79eb7292b0883a1483d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737d0fe887eb59bc729006991d545c9e4686672dd4c4c79eb7292b0883a1483d->enter($__internal_737d0fe887eb59bc729006991d545c9e4686672dd4c4c79eb7292b0883a1483d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/edytorAction.html.twig"));

        // line 1
        echo "<div>
    EDYTUJESZ WPIS O ID = ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rows"] ?? $this->getContext($context, "rows")), "id", array()), "html", null, true);
        echo "
</div>
<div>
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editorPusher", array("id" => $this->getAttribute(($context["rows"] ?? $this->getContext($context, "rows")), "id", array()))), "html", null, true);
        echo ") }}\" method=\"post\">
        <div> <input type=\"text\" name=\"editNick\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rows"] ?? $this->getContext($context, "rows")), "nick", array()), "html", null, true);
        echo "\" required></div>
        <div><textarea name=\"editComment\" placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rows"] ?? $this->getContext($context, "rows")), "comment", array()), "html", null, true);
        echo "\" style=\"width: 220px; height: 75px\" required></textarea></div>
        <input type=\"submit\" value=\"submit\">
    </form>
</div>

<table border=\"1\">
    <tr>
        <td bgcolor=\"#faebd7\" height=\"25\">id</td>
        <td bgcolor=\"#faebd7\">nick</td>
        <td bgcolor=\"#faebd7\" width=\"500\">komentarz</td>
    <tr>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rows"] ?? $this->getContext($context, "rows")), "id", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rows"] ?? $this->getContext($context, "rows")), "nick", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rows"] ?? $this->getContext($context, "rows")), "comment", array()), "html", null, true);
        echo "</td>
    </tr>

</table>";
        
        $__internal_737d0fe887eb59bc729006991d545c9e4686672dd4c4c79eb7292b0883a1483d->leave($__internal_737d0fe887eb59bc729006991d545c9e4686672dd4c4c79eb7292b0883a1483d_prof);

    }

    public function getTemplateName()
    {
        return "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/edytorAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  57 => 19,  53 => 18,  39 => 7,  35 => 6,  31 => 5,  25 => 2,  22 => 1,);
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
    EDYTUJESZ WPIS O ID = {{ rows.id }}
</div>
<div>
    <form action=\"{{ path('editorPusher', {'id': rows.id})}}) }}\" method=\"post\">
        <div> <input type=\"text\" name=\"editNick\" placeholder=\"{{ rows.nick }}\" required></div>
        <div><textarea name=\"editComment\" placeholder=\"{{ rows.comment }}\" style=\"width: 220px; height: 75px\" required></textarea></div>
        <input type=\"submit\" value=\"submit\">
    </form>
</div>

<table border=\"1\">
    <tr>
        <td bgcolor=\"#faebd7\" height=\"25\">id</td>
        <td bgcolor=\"#faebd7\">nick</td>
        <td bgcolor=\"#faebd7\" width=\"500\">komentarz</td>
    <tr>
        <td>{{ rows.id }}</td>
        <td>{{ rows.nick }}</td>
        <td>{{ rows.comment }}</td>
    </tr>

</table>", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/edytorAction.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/edytorAction.html.twig");
    }
}
