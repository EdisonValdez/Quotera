<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c0fedc2b28475e56e74d551ae560c4bd90fad74ab684769c8b5701bf346c272a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9407c36905aa95b2dcbbe4007a4249520df6bb6f55f48b7bdb246b6d9efce731 = $this->env->getExtension("native_profiler");
        $__internal_9407c36905aa95b2dcbbe4007a4249520df6bb6f55f48b7bdb246b6d9efce731->enter($__internal_9407c36905aa95b2dcbbe4007a4249520df6bb6f55f48b7bdb246b6d9efce731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9407c36905aa95b2dcbbe4007a4249520df6bb6f55f48b7bdb246b6d9efce731->leave($__internal_9407c36905aa95b2dcbbe4007a4249520df6bb6f55f48b7bdb246b6d9efce731_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_62228a2c22a98b48a52a94865023573fa9c00c03ea2884e28eadaf8971cce7ea = $this->env->getExtension("native_profiler");
        $__internal_62228a2c22a98b48a52a94865023573fa9c00c03ea2884e28eadaf8971cce7ea->enter($__internal_62228a2c22a98b48a52a94865023573fa9c00c03ea2884e28eadaf8971cce7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <div>
            ";
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 10
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 12
        echo "        </div>

        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        <div>
            ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "        </div>
";
        
        $__internal_62228a2c22a98b48a52a94865023573fa9c00c03ea2884e28eadaf8971cce7ea->leave($__internal_62228a2c22a98b48a52a94865023573fa9c00c03ea2884e28eadaf8971cce7ea_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da10e05cfaba260546018ef588641b4dcca012aabddba2c2ad3de88fd4aa5958 = $this->env->getExtension("native_profiler");
        $__internal_da10e05cfaba260546018ef588641b4dcca012aabddba2c2ad3de88fd4aa5958->enter($__internal_da10e05cfaba260546018ef588641b4dcca012aabddba2c2ad3de88fd4aa5958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 24
        echo "            ";
        
        $__internal_da10e05cfaba260546018ef588641b4dcca012aabddba2c2ad3de88fd4aa5958->leave($__internal_da10e05cfaba260546018ef588641b4dcca012aabddba2c2ad3de88fd4aa5958_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 24,  116 => 23,  108 => 25,  106 => 23,  102 => 21,  96 => 20,  87 => 17,  82 => 16,  77 => 15,  73 => 14,  69 => 12,  61 => 10,  55 => 7,  51 => 6,  46 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
