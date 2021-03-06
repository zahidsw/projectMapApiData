<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a9796900075a733a3330cc3884e5f5091bd49e825349455a426273052be6c2a0 extends Twig_Template
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
        $__internal_ebf020431e4587e13eb3e6f4139c4e7124915199a22fb854b591d9bb9f1557c7 = $this->env->getExtension("native_profiler");
        $__internal_ebf020431e4587e13eb3e6f4139c4e7124915199a22fb854b591d9bb9f1557c7->enter($__internal_ebf020431e4587e13eb3e6f4139c4e7124915199a22fb854b591d9bb9f1557c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf020431e4587e13eb3e6f4139c4e7124915199a22fb854b591d9bb9f1557c7->leave($__internal_ebf020431e4587e13eb3e6f4139c4e7124915199a22fb854b591d9bb9f1557c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b12b541aa965e860c11324b5e7564d4d7372c4d208e6f199fe0be5685b215d12 = $this->env->getExtension("native_profiler");
        $__internal_b12b541aa965e860c11324b5e7564d4d7372c4d208e6f199fe0be5685b215d12->enter($__internal_b12b541aa965e860c11324b5e7564d4d7372c4d208e6f199fe0be5685b215d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b12b541aa965e860c11324b5e7564d4d7372c4d208e6f199fe0be5685b215d12->leave($__internal_b12b541aa965e860c11324b5e7564d4d7372c4d208e6f199fe0be5685b215d12_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a4edf14f4121285cf835c526783ce1e2eedc6e6ba292184e409c432341e87e3 = $this->env->getExtension("native_profiler");
        $__internal_7a4edf14f4121285cf835c526783ce1e2eedc6e6ba292184e409c432341e87e3->enter($__internal_7a4edf14f4121285cf835c526783ce1e2eedc6e6ba292184e409c432341e87e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a4edf14f4121285cf835c526783ce1e2eedc6e6ba292184e409c432341e87e3->leave($__internal_7a4edf14f4121285cf835c526783ce1e2eedc6e6ba292184e409c432341e87e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_00dd69231682524c51968778f405d54311ff010c64c8244eb1644357ab19a7ac = $this->env->getExtension("native_profiler");
        $__internal_00dd69231682524c51968778f405d54311ff010c64c8244eb1644357ab19a7ac->enter($__internal_00dd69231682524c51968778f405d54311ff010c64c8244eb1644357ab19a7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_00dd69231682524c51968778f405d54311ff010c64c8244eb1644357ab19a7ac->leave($__internal_00dd69231682524c51968778f405d54311ff010c64c8244eb1644357ab19a7ac_prof);

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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
