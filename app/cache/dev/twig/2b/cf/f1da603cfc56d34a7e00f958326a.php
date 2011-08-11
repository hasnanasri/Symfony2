<?php

/* ::layout.html.twig */
class __TwigTemplate_2bcff1da603cfc56d34a7e00f958326a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "193fa33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_193fa33") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/am.min.css");
            // line 8
            echo "        
            <link rel=\"stylesheet\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, 'asset_url'), "html");
            echo "\" type=\"text/css\" media=\"screen\" />
    
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    </head>

    <body>
        <div id=\"en_tete\">
            <h1>Ma Première Application Symfony2</h1>
        </div>

        <div id=\"menu\">
            <div class=\"element_menu\">
                <h3>Le blog</h3>
                <ul>
                    <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog"), "html");
        echo "\">Accueil du blog</a></li>
                    <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_ajouter"), "html");
        echo "\">Ajouter un article</a></li>
                </ul>
            </div>
        </div>

        <div id=\"corps\">
        
            ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "            
        </div>
        
        <div id=\"pied_de_page\">
            <p>MonSuperBlog propulsé par Symfony2</p>
        </div>
        </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Sdz";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
