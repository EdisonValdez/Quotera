<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_030b9d60bed7541ca5c53bf2a71a481057b21f886cb01dd029a4b494a114b34c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70317de5d157e11c388a82e8decdd4db666834650b5d9f701ce23712f448bf7b = $this->env->getExtension("native_profiler");
        $__internal_70317de5d157e11c388a82e8decdd4db666834650b5d9f701ce23712f448bf7b->enter($__internal_70317de5d157e11c388a82e8decdd4db666834650b5d9f701ce23712f448bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_70317de5d157e11c388a82e8decdd4db666834650b5d9f701ce23712f448bf7b->leave($__internal_70317de5d157e11c388a82e8decdd4db666834650b5d9f701ce23712f448bf7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  33 => 3,  29 => 2,  22 => 1,);
    }
}
