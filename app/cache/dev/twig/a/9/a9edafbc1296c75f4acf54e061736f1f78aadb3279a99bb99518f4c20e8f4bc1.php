<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a9edafbc1296c75f4acf54e061736f1f78aadb3279a99bb99518f4c20e8f4bc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c8499e3031651bdff0ed993ff24b1736db9abfdb6102ccdba918161764738d0 = $this->env->getExtension("native_profiler");
        $__internal_4c8499e3031651bdff0ed993ff24b1736db9abfdb6102ccdba918161764738d0->enter($__internal_4c8499e3031651bdff0ed993ff24b1736db9abfdb6102ccdba918161764738d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c8499e3031651bdff0ed993ff24b1736db9abfdb6102ccdba918161764738d0->leave($__internal_4c8499e3031651bdff0ed993ff24b1736db9abfdb6102ccdba918161764738d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1cdf0e0c0d6fa91f7d6d24f1a26523acf4a54c37c8b317689d9d1d21d75f9d46 = $this->env->getExtension("native_profiler");
        $__internal_1cdf0e0c0d6fa91f7d6d24f1a26523acf4a54c37c8b317689d9d1d21d75f9d46->enter($__internal_1cdf0e0c0d6fa91f7d6d24f1a26523acf4a54c37c8b317689d9d1d21d75f9d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1cdf0e0c0d6fa91f7d6d24f1a26523acf4a54c37c8b317689d9d1d21d75f9d46->leave($__internal_1cdf0e0c0d6fa91f7d6d24f1a26523acf4a54c37c8b317689d9d1d21d75f9d46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
