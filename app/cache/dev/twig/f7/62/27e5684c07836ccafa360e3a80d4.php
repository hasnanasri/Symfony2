<?php

/* SdzBlogBundle:Blog:liste.html.twig */
class __TwigTemplate_f76227e5684c07836ccafa360e3a80d4 extends Twig_Template
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
    <h2>Liste des articles</h2>
    
    <ul>
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'articles'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['article']) {
            // line 11
            echo "            <li>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("slug" => $this->getAttribute($this->getContext($context, 'article'), "slug", array(), "array", false))), "html");
            echo "\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'article'), "titre", array(), "array", false), "html");
            echo "
                </a>
                par ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'article'), "auteur", array(), "array", false), "html");
            echo ",
                le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'article'), "date", array(), "array", false), "d/m/Y"), "html");
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "            <li>Pas (encore !) d'articles</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "    </ul>
    
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
