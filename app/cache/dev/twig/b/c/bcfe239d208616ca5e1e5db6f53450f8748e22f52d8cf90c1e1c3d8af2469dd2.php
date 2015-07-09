<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bcfe239d208616ca5e1e5db6f53450f8748e22f52d8cf90c1e1c3d8af2469dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_499fc5bb2aac470766756d8c6218850478f1a1086c0095dcfb2a48564c9d205e = $this->env->getExtension("native_profiler");
        $__internal_499fc5bb2aac470766756d8c6218850478f1a1086c0095dcfb2a48564c9d205e->enter($__internal_499fc5bb2aac470766756d8c6218850478f1a1086c0095dcfb2a48564c9d205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499fc5bb2aac470766756d8c6218850478f1a1086c0095dcfb2a48564c9d205e->leave($__internal_499fc5bb2aac470766756d8c6218850478f1a1086c0095dcfb2a48564c9d205e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95816527e115d8d7610b82eb93375d3dc109b5d85c4111d3919c998525260234 = $this->env->getExtension("native_profiler");
        $__internal_95816527e115d8d7610b82eb93375d3dc109b5d85c4111d3919c998525260234->enter($__internal_95816527e115d8d7610b82eb93375d3dc109b5d85c4111d3919c998525260234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_95816527e115d8d7610b82eb93375d3dc109b5d85c4111d3919c998525260234->leave($__internal_95816527e115d8d7610b82eb93375d3dc109b5d85c4111d3919c998525260234_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_458f810441d3b2a55425c7ce45f88d134abd4e826569291cff9136ff48b3695c = $this->env->getExtension("native_profiler");
        $__internal_458f810441d3b2a55425c7ce45f88d134abd4e826569291cff9136ff48b3695c->enter($__internal_458f810441d3b2a55425c7ce45f88d134abd4e826569291cff9136ff48b3695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_458f810441d3b2a55425c7ce45f88d134abd4e826569291cff9136ff48b3695c->leave($__internal_458f810441d3b2a55425c7ce45f88d134abd4e826569291cff9136ff48b3695c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_96894c137315f0fdbf0bed4601f4cb308592fec154e354af341597b1b7c4c9fc = $this->env->getExtension("native_profiler");
        $__internal_96894c137315f0fdbf0bed4601f4cb308592fec154e354af341597b1b7c4c9fc->enter($__internal_96894c137315f0fdbf0bed4601f4cb308592fec154e354af341597b1b7c4c9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_96894c137315f0fdbf0bed4601f4cb308592fec154e354af341597b1b7c4c9fc->leave($__internal_96894c137315f0fdbf0bed4601f4cb308592fec154e354af341597b1b7c4c9fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
