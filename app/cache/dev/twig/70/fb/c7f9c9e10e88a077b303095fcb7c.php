<?php

/* SdzBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_70fbc7f9c9e10e88a077b303095fcb7c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
    
    ";
        // line 3
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
    
    <input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
