<?php

/* UserBundle:userInfo:new.html.twig */
class __TwigTemplate_bc0b1a0842495a24e30c4457033820416155bef8e5ba51b4fd47fe687540bc7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:userInfo:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1720f62d2b46eff489c02d6069c2dc5887931ff579f89098c3f2960976a133dd = $this->env->getExtension("native_profiler");
        $__internal_1720f62d2b46eff489c02d6069c2dc5887931ff579f89098c3f2960976a133dd->enter($__internal_1720f62d2b46eff489c02d6069c2dc5887931ff579f89098c3f2960976a133dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:userInfo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1720f62d2b46eff489c02d6069c2dc5887931ff579f89098c3f2960976a133dd->leave($__internal_1720f62d2b46eff489c02d6069c2dc5887931ff579f89098c3f2960976a133dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_084e37e27a9b0f6a8c0c6f97f121cbbe6487d67ac6312ee5fc976b805cf136cd = $this->env->getExtension("native_profiler");
        $__internal_084e37e27a9b0f6a8c0c6f97f121cbbe6487d67ac6312ee5fc976b805cf136cd->enter($__internal_084e37e27a9b0f6a8c0c6f97f121cbbe6487d67ac6312ee5fc976b805cf136cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>userInfo creation</h1>
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "
    ";
        // line 6
        $context["userid"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array());
        // line 7
        echo "     <div>";
        echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : $this->getContext($context, "userid")), "html", null, true);
        echo " este es el user id</div>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("userinfo");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_084e37e27a9b0f6a8c0c6f97f121cbbe6487d67ac6312ee5fc976b805cf136cd->leave($__internal_084e37e27a9b0f6a8c0c6f97f121cbbe6487d67ac6312ee5fc976b805cf136cd_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:userInfo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  55 => 9,  49 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
