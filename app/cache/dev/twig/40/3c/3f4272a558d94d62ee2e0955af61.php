<?php

/* SdzBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_403c3f4272a558d94d62ee2e0955af61 extends Twig_Template
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
        echo "Modifier un article - ";
        echo $this->renderParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 6
        echo "    
    <h2>Ajouter un article</h2>
    
    ";
        // line 9
        $this->env->loadTemplate("SdzBlogBundle:Blog:formulaire.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, 'form'))));
        // line 10
        echo "    
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
