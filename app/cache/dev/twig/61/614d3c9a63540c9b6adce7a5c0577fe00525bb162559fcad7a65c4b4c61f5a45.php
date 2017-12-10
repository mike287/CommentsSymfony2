<?php

/* /home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/findNick.html.twig */
class __TwigTemplate_60ab8ac8eb9d5cf78869610602db434a0e4a579bd8d388659f5970aecfd2aa4b extends Twig_Template
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
        $__internal_1f107408add8baf814fa01752efa47c2f5fce8df3bd21f6dd976ee35ea66c3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f107408add8baf814fa01752efa47c2f5fce8df3bd21f6dd976ee35ea66c3f8->enter($__internal_1f107408add8baf814fa01752efa47c2f5fce8df3bd21f6dd976ee35ea66c3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/findNick.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sender");
        echo "\">
    <input type=\"text\" name=\"findNick\">
    <input type=\"submit\">
</form>";
        
        $__internal_1f107408add8baf814fa01752efa47c2f5fce8df3bd21f6dd976ee35ea66c3f8->leave($__internal_1f107408add8baf814fa01752efa47c2f5fce8df3bd21f6dd976ee35ea66c3f8_prof);

    }

    public function getTemplateName()
    {
        return "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/findNick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"post\" action=\"{{ path('sender')}}\">
    <input type=\"text\" name=\"findNick\">
    <input type=\"submit\">
</form>", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/findNick.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Post/findNick.html.twig");
    }
}
