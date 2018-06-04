<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e74db8c3b2dc4a4e430e3cfea44f970f530f22af8af9866b72c000fd0064e0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6445870b20c9e53a815959dd37cda5e88b136b5ec1455aec1dfd32216754f7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6445870b20c9e53a815959dd37cda5e88b136b5ec1455aec1dfd32216754f7a1->enter($__internal_6445870b20c9e53a815959dd37cda5e88b136b5ec1455aec1dfd32216754f7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8c074634711e7fd11305b5f110a27948083062473086c86833380d8d46933c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c074634711e7fd11305b5f110a27948083062473086c86833380d8d46933c98->enter($__internal_8c074634711e7fd11305b5f110a27948083062473086c86833380d8d46933c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6445870b20c9e53a815959dd37cda5e88b136b5ec1455aec1dfd32216754f7a1->leave($__internal_6445870b20c9e53a815959dd37cda5e88b136b5ec1455aec1dfd32216754f7a1_prof);

        
        $__internal_8c074634711e7fd11305b5f110a27948083062473086c86833380d8d46933c98->leave($__internal_8c074634711e7fd11305b5f110a27948083062473086c86833380d8d46933c98_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_795dbf6ae18c5045222abe9b0050f7743e4aa8666a3ba4701b11c7a05cad93d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795dbf6ae18c5045222abe9b0050f7743e4aa8666a3ba4701b11c7a05cad93d1->enter($__internal_795dbf6ae18c5045222abe9b0050f7743e4aa8666a3ba4701b11c7a05cad93d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_127b1580c872f9f631e8ff412ccf704e65c08ef71f40c00262ccdb17e1d49a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127b1580c872f9f631e8ff412ccf704e65c08ef71f40c00262ccdb17e1d49a7f->enter($__internal_127b1580c872f9f631e8ff412ccf704e65c08ef71f40c00262ccdb17e1d49a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_127b1580c872f9f631e8ff412ccf704e65c08ef71f40c00262ccdb17e1d49a7f->leave($__internal_127b1580c872f9f631e8ff412ccf704e65c08ef71f40c00262ccdb17e1d49a7f_prof);

        
        $__internal_795dbf6ae18c5045222abe9b0050f7743e4aa8666a3ba4701b11c7a05cad93d1->leave($__internal_795dbf6ae18c5045222abe9b0050f7743e4aa8666a3ba4701b11c7a05cad93d1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d141b0a37d06d60df67588dd0a6f603ed6261eab61a4bf5a4f2e7c30fa07744f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d141b0a37d06d60df67588dd0a6f603ed6261eab61a4bf5a4f2e7c30fa07744f->enter($__internal_d141b0a37d06d60df67588dd0a6f603ed6261eab61a4bf5a4f2e7c30fa07744f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_70d00a4de989a8f8c3fed6d31d5372d035bcecbb84f420179e687b14f5ea34bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d00a4de989a8f8c3fed6d31d5372d035bcecbb84f420179e687b14f5ea34bf->enter($__internal_70d00a4de989a8f8c3fed6d31d5372d035bcecbb84f420179e687b14f5ea34bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_70d00a4de989a8f8c3fed6d31d5372d035bcecbb84f420179e687b14f5ea34bf->leave($__internal_70d00a4de989a8f8c3fed6d31d5372d035bcecbb84f420179e687b14f5ea34bf_prof);

        
        $__internal_d141b0a37d06d60df67588dd0a6f603ed6261eab61a4bf5a4f2e7c30fa07744f->leave($__internal_d141b0a37d06d60df67588dd0a6f603ed6261eab61a4bf5a4f2e7c30fa07744f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba01cda97647bdd1995169ab7f6a60231985e479a5669883bd561ca4c7287241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba01cda97647bdd1995169ab7f6a60231985e479a5669883bd561ca4c7287241->enter($__internal_ba01cda97647bdd1995169ab7f6a60231985e479a5669883bd561ca4c7287241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5e0f7307c91a1b5befa6154dbaad1ef62a3c2cdb3696e705e482df2bb2c5587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e0f7307c91a1b5befa6154dbaad1ef62a3c2cdb3696e705e482df2bb2c5587->enter($__internal_a5e0f7307c91a1b5befa6154dbaad1ef62a3c2cdb3696e705e482df2bb2c5587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a5e0f7307c91a1b5befa6154dbaad1ef62a3c2cdb3696e705e482df2bb2c5587->leave($__internal_a5e0f7307c91a1b5befa6154dbaad1ef62a3c2cdb3696e705e482df2bb2c5587_prof);

        
        $__internal_ba01cda97647bdd1995169ab7f6a60231985e479a5669883bd561ca4c7287241->leave($__internal_ba01cda97647bdd1995169ab7f6a60231985e479a5669883bd561ca4c7287241_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/Ciro/Documents/GitHub/DeRiche-Agency-master-2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
