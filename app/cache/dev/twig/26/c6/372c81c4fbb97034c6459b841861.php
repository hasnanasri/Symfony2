<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_26c6372c81c4fbb97034c6459b841861 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
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
        echo "Blog - ";
        echo $this->renderParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Blog</h1>
    
    ";
        // line 9
        $this->displayBlock('sdzblog_body', $context, $blocks);
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
