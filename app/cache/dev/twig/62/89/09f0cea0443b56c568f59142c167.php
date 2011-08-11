<?php

/* SdzBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_628909f0cea0443b56c568f59142c167 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("SdzBlogBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Liste des articles - ";
        echo $this->renderParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, 'article'), "html");
        echo "</p>
    
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
