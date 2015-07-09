<?php

/* UserBundle:userInfo:edit.html.twig */
class __TwigTemplate_f3576fc6814f4c065f1944fa7054c4ee9f5b618b3a13bc89dfff0cbce15c1ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:userInfo:edit.html.twig", 1);
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
        $__internal_ec8e5307af92b2e8e497b58c3064057f6e0b812698612e9ff6ce00a600be1a3c = $this->env->getExtension("native_profiler");
        $__internal_ec8e5307af92b2e8e497b58c3064057f6e0b812698612e9ff6ce00a600be1a3c->enter($__internal_ec8e5307af92b2e8e497b58c3064057f6e0b812698612e9ff6ce00a600be1a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:userInfo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec8e5307af92b2e8e497b58c3064057f6e0b812698612e9ff6ce00a600be1a3c->leave($__internal_ec8e5307af92b2e8e497b58c3064057f6e0b812698612e9ff6ce00a600be1a3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2cb86d0a6c1602de60b006e226191886ceaa3082187cb01a80803ca22e29c82 = $this->env->getExtension("native_profiler");
        $__internal_a2cb86d0a6c1602de60b006e226191886ceaa3082187cb01a80803ca22e29c82->enter($__internal_a2cb86d0a6c1602de60b006e226191886ceaa3082187cb01a80803ca22e29c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>userInfo edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("userinfo");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_a2cb86d0a6c1602de60b006e226191886ceaa3082187cb01a80803ca22e29c82->leave($__internal_a2cb86d0a6c1602de60b006e226191886ceaa3082187cb01a80803ca22e29c82_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:userInfo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
