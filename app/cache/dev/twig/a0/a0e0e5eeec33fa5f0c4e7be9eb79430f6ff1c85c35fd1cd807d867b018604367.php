<?php

/* CommentsBundle:Default:index.html.twig */
class __TwigTemplate_8ca4d822ac9b9107a75e1a8daf9ce44707c6ef16c06c767f9edb9720768e4e59 extends Twig_Template
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
        $__internal_0d6e77dade3b14f17ff6136a997c5ee06b7e0157c74c02ea84a9da7ef61c9c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6e77dade3b14f17ff6136a997c5ee06b7e0157c74c02ea84a9da7ef61c9c47->enter($__internal_0d6e77dade3b14f17ff6136a997c5ee06b7e0157c74c02ea84a9da7ef61c9c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommentsBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_0d6e77dade3b14f17ff6136a997c5ee06b7e0157c74c02ea84a9da7ef61c9c47->leave($__internal_0d6e77dade3b14f17ff6136a997c5ee06b7e0157c74c02ea84a9da7ef61c9c47_prof);

    }

    public function getTemplateName()
    {
        return "CommentsBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "CommentsBundle:Default:index.html.twig", "/home/mike/Workspace/NoweRozdanie/symfony/symfony_comments/src/CommentsBundle/Resources/views/Default/index.html.twig");
    }
}
