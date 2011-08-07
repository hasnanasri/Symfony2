<?php

/* SdzBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_628909f0cea0443b56c568f59142c167 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec le site du Zéro !</title>
    </head>
    <body>
        <h1>Lecture d'un article</h1>
        
        <p>
            Ici nous pourrons lire l'article ayant comme slug : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, 'slug'), "html");
        echo "<br />
            Cet article pourrait avoir comme tag \" ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, 'tag'), "html");
        echo " \"<br />
            Mais pour l'instant nous ne savons pas encore le faire, cela viendra !
        </p>
    </body>
</html>";
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
