<?php

/* home.html.twig */
class __TwigTemplate_96bbc24c992ddbf1cffaa3a5e895e8c30d75f36e0219421df0cd7335558b6fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d8f686ca3f6341db930beb9163c81e52a2d3f43575056bb9c051b8564c46634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8f686ca3f6341db930beb9163c81e52a2d3f43575056bb9c051b8564c46634->enter($__internal_8d8f686ca3f6341db930beb9163c81e52a2d3f43575056bb9c051b8564c46634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6ecb9e6d45d2f9f7f8d5ccfe050a9d84dd9e338545e1e858afa2d03e81383b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecb9e6d45d2f9f7f8d5ccfe050a9d84dd9e338545e1e858afa2d03e81383b15->enter($__internal_6ecb9e6d45d2f9f7f8d5ccfe050a9d84dd9e338545e1e858afa2d03e81383b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d8f686ca3f6341db930beb9163c81e52a2d3f43575056bb9c051b8564c46634->leave($__internal_8d8f686ca3f6341db930beb9163c81e52a2d3f43575056bb9c051b8564c46634_prof);

        
        $__internal_6ecb9e6d45d2f9f7f8d5ccfe050a9d84dd9e338545e1e858afa2d03e81383b15->leave($__internal_6ecb9e6d45d2f9f7f8d5ccfe050a9d84dd9e338545e1e858afa2d03e81383b15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e01a1a9216a1c8a17f96f711fbb33045e07c0c37b655b00bcb55ce72695b00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e01a1a9216a1c8a17f96f711fbb33045e07c0c37b655b00bcb55ce72695b00e->enter($__internal_1e01a1a9216a1c8a17f96f711fbb33045e07c0c37b655b00bcb55ce72695b00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9439f75761478009a9aaed2c12e21cd03c33700a041629eecee88b919527313a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9439f75761478009a9aaed2c12e21cd03c33700a041629eecee88b919527313a->enter($__internal_9439f75761478009a9aaed2c12e21cd03c33700a041629eecee88b919527313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "        <h2>Welcome, <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
            echo "</b></h2>
        <hr/>
    ";
        }
        // line 8
        echo "

    <p>Thank you for logging in, use the sidebar for what you need!</p>

    
";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_WRITER")) {
            // line 14
            echo "                    <h1>Writer</h1>
                ";
        }
        // line 16
        echo "
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_REVIEWER")) {
            // line 18
            echo "                    <h1>Reviewer</h1>
                ";
        }
        // line 20
        echo "
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                    <h1>Admin</h1>
                ";
        }
        // line 24
        echo "                
";
        
        $__internal_9439f75761478009a9aaed2c12e21cd03c33700a041629eecee88b919527313a->leave($__internal_9439f75761478009a9aaed2c12e21cd03c33700a041629eecee88b919527313a_prof);

        
        $__internal_1e01a1a9216a1c8a17f96f711fbb33045e07c0c37b655b00bcb55ce72695b00e->leave($__internal_1e01a1a9216a1c8a17f96f711fbb33045e07c0c37b655b00bcb55ce72695b00e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  86 => 22,  84 => 21,  81 => 20,  77 => 18,  75 => 17,  72 => 16,  68 => 14,  66 => 13,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <h2>Welcome, <b>{{ app.user.firstName }}</b></h2>
        <hr/>
    {% endif %}


    <p>Thank you for logging in, use the sidebar for what you need!</p>

    
{% if is_granted('ROLE_WRITER') %}
                    <h1>Writer</h1>
                {% endif %}

                {% if is_granted('ROLE_REVIEWER') %}
                    <h1>Reviewer</h1>
                {% endif %}

                {% if is_granted('ROLE_ADMIN') %}
                    <h1>Admin</h1>
                {% endif %}
                
{% endblock %}

", "home.html.twig", "/Users/Ciro/Documents/GitHub/DeRiche-Agency-master-2/app/Resources/views/home.html.twig");
    }
}
