<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bfe59c7ec0714ec670886d7c22acc614ac18154c4e457a20328fbe00f304eaf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecf373921df0bc85a341c99287b2bc1de3d2f5c1826b138ab6a3c0a65fe1ffb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf373921df0bc85a341c99287b2bc1de3d2f5c1826b138ab6a3c0a65fe1ffb0->enter($__internal_ecf373921df0bc85a341c99287b2bc1de3d2f5c1826b138ab6a3c0a65fe1ffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_854b7d343ea2c981794f5b5fd5e417b45a3069090f28e778830772cebd92f3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854b7d343ea2c981794f5b5fd5e417b45a3069090f28e778830772cebd92f3d7->enter($__internal_854b7d343ea2c981794f5b5fd5e417b45a3069090f28e778830772cebd92f3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf373921df0bc85a341c99287b2bc1de3d2f5c1826b138ab6a3c0a65fe1ffb0->leave($__internal_ecf373921df0bc85a341c99287b2bc1de3d2f5c1826b138ab6a3c0a65fe1ffb0_prof);

        
        $__internal_854b7d343ea2c981794f5b5fd5e417b45a3069090f28e778830772cebd92f3d7->leave($__internal_854b7d343ea2c981794f5b5fd5e417b45a3069090f28e778830772cebd92f3d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c2c1c74609eecbedcc7937003865a7c2def634b207f19ce58d710afb6d8f7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2c1c74609eecbedcc7937003865a7c2def634b207f19ce58d710afb6d8f7e9->enter($__internal_3c2c1c74609eecbedcc7937003865a7c2def634b207f19ce58d710afb6d8f7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db41746f618c75ce0a418e7162edab023e6f9f73e2e996a909bbfa04b6fc870d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db41746f618c75ce0a418e7162edab023e6f9f73e2e996a909bbfa04b6fc870d->enter($__internal_db41746f618c75ce0a418e7162edab023e6f9f73e2e996a909bbfa04b6fc870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_db41746f618c75ce0a418e7162edab023e6f9f73e2e996a909bbfa04b6fc870d->leave($__internal_db41746f618c75ce0a418e7162edab023e6f9f73e2e996a909bbfa04b6fc870d_prof);

        
        $__internal_3c2c1c74609eecbedcc7937003865a7c2def634b207f19ce58d710afb6d8f7e9->leave($__internal_3c2c1c74609eecbedcc7937003865a7c2def634b207f19ce58d710afb6d8f7e9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea7c69eb032593cfc415dfc7387cb41e8fb38a9c13b334787a09aa1f3201083d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7c69eb032593cfc415dfc7387cb41e8fb38a9c13b334787a09aa1f3201083d->enter($__internal_ea7c69eb032593cfc415dfc7387cb41e8fb38a9c13b334787a09aa1f3201083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9232098bc39143cbf867d4799590f8d6be5ac97cf1bb635cab50b5595e37e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9232098bc39143cbf867d4799590f8d6be5ac97cf1bb635cab50b5595e37e8d->enter($__internal_b9232098bc39143cbf867d4799590f8d6be5ac97cf1bb635cab50b5595e37e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9232098bc39143cbf867d4799590f8d6be5ac97cf1bb635cab50b5595e37e8d->leave($__internal_b9232098bc39143cbf867d4799590f8d6be5ac97cf1bb635cab50b5595e37e8d_prof);

        
        $__internal_ea7c69eb032593cfc415dfc7387cb41e8fb38a9c13b334787a09aa1f3201083d->leave($__internal_ea7c69eb032593cfc415dfc7387cb41e8fb38a9c13b334787a09aa1f3201083d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_38056ff0027dc6269beddd2a6ef883aeeded79d22ce75d9a996e9b933ba853af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38056ff0027dc6269beddd2a6ef883aeeded79d22ce75d9a996e9b933ba853af->enter($__internal_38056ff0027dc6269beddd2a6ef883aeeded79d22ce75d9a996e9b933ba853af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b59228b4e11aa4f138656a231eac6d8c1ebfa77376373ff11b05a996a4ab14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b59228b4e11aa4f138656a231eac6d8c1ebfa77376373ff11b05a996a4ab14f->enter($__internal_0b59228b4e11aa4f138656a231eac6d8c1ebfa77376373ff11b05a996a4ab14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0b59228b4e11aa4f138656a231eac6d8c1ebfa77376373ff11b05a996a4ab14f->leave($__internal_0b59228b4e11aa4f138656a231eac6d8c1ebfa77376373ff11b05a996a4ab14f_prof);

        
        $__internal_38056ff0027dc6269beddd2a6ef883aeeded79d22ce75d9a996e9b933ba853af->leave($__internal_38056ff0027dc6269beddd2a6ef883aeeded79d22ce75d9a996e9b933ba853af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Ciro/Documents/GitHub/DeRiche-Agency-master-2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
