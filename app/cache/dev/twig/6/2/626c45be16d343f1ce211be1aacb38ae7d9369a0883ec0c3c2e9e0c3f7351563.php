<?php

/* UserBundle:userInfo:index.html.twig */
class __TwigTemplate_626c45be16d343f1ce211be1aacb38ae7d9369a0883ec0c3c2e9e0c3f7351563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:userInfo:index.html.twig", 1);
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
        $__internal_b483858fb1e5ac557e02dce8578f3a3016a7c9102eeb22c9e6f0f1bbcf8e0224 = $this->env->getExtension("native_profiler");
        $__internal_b483858fb1e5ac557e02dce8578f3a3016a7c9102eeb22c9e6f0f1bbcf8e0224->enter($__internal_b483858fb1e5ac557e02dce8578f3a3016a7c9102eeb22c9e6f0f1bbcf8e0224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:userInfo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b483858fb1e5ac557e02dce8578f3a3016a7c9102eeb22c9e6f0f1bbcf8e0224->leave($__internal_b483858fb1e5ac557e02dce8578f3a3016a7c9102eeb22c9e6f0f1bbcf8e0224_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9e368ee73c1d7d6f0eb8d205d845c76d86a0ce0f7cc1fb997b057d2074f4ffa = $this->env->getExtension("native_profiler");
        $__internal_b9e368ee73c1d7d6f0eb8d205d845c76d86a0ce0f7cc1fb997b057d2074f4ffa->enter($__internal_b9e368ee73c1d7d6f0eb8d205d845c76d86a0ce0f7cc1fb997b057d2074f4ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>userInfo list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Companyname</th>
                <th>Companydescription</th>
                <th>Products</th>
                <th>Category</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Cp</th>
                <th>Country</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userinfo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "companyName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "companyDescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "products", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "country", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "city", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userinfo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userinfo_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("userinfo_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_b9e368ee73c1d7d6f0eb8d205d845c76d86a0ce0f7cc1fb997b057d2074f4ffa->leave($__internal_b9e368ee73c1d7d6f0eb8d205d845c76d86a0ce0f7cc1fb997b057d2074f4ffa_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:userInfo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 54,  136 => 49,  124 => 43,  118 => 40,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
