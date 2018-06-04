<?php

/* notes/home.html.twig */
class __TwigTemplate_2359429197af86872c36bea8d49cc9835f50fca6110655f68ee91c569805b7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notes/home.html.twig", 1);
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
        $__internal_8621266cfd3e150d3aa7ca6d2ee9a78c0d40996b902088e365fbbf2aca7b1f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8621266cfd3e150d3aa7ca6d2ee9a78c0d40996b902088e365fbbf2aca7b1f03->enter($__internal_8621266cfd3e150d3aa7ca6d2ee9a78c0d40996b902088e365fbbf2aca7b1f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notes/home.html.twig"));

        $__internal_60c50aee1dddbd4882c017a37e38433958986387e1633b1c0589b0442da1ab41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c50aee1dddbd4882c017a37e38433958986387e1633b1c0589b0442da1ab41->enter($__internal_60c50aee1dddbd4882c017a37e38433958986387e1633b1c0589b0442da1ab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notes/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8621266cfd3e150d3aa7ca6d2ee9a78c0d40996b902088e365fbbf2aca7b1f03->leave($__internal_8621266cfd3e150d3aa7ca6d2ee9a78c0d40996b902088e365fbbf2aca7b1f03_prof);

        
        $__internal_60c50aee1dddbd4882c017a37e38433958986387e1633b1c0589b0442da1ab41->leave($__internal_60c50aee1dddbd4882c017a37e38433958986387e1633b1c0589b0442da1ab41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97d962538a37626368eba583bf550b3877718e7032279efddf8d719ced4a0a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d962538a37626368eba583bf550b3877718e7032279efddf8d719ced4a0a14->enter($__internal_97d962538a37626368eba583bf550b3877718e7032279efddf8d719ced4a0a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fad41ed214f27f6549cd1378f220267f15dfb55b69db6486375a344ecf890fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad41ed214f27f6549cd1378f220267f15dfb55b69db6486375a344ecf890fd3->enter($__internal_fad41ed214f27f6549cd1378f220267f15dfb55b69db6486375a344ecf890fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "error"), "method") == "Multiple")) {
            // line 5
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <strong>Unable to Create Note:</strong> Multiple patients were found. We do not deal with this conflict well. Please change one of the patient names.
        </div>
    ";
        }
        // line 9
        echo "    ";
        if ((($context["backnotes"] ?? $this->getContext($context, "backnotes")) != array())) {
            // line 10
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <strong>Warning!</strong> You have kicked-back notes. Please correct these issues before submitting a new
            note.
        </div>
        <section id=\"backnotes\">
            <h1>Kicked-Back Notes</h1>
            <table id=\"DraftNotes\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    ";
            // line 20
            echo "                    <th>Individual</th>
                    <th>Creation Date</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["backnotes"] ?? $this->getContext($context, "backnotes")));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 27
                echo "                    <tr>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "lastName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute($context["note"], "createdAt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["note"], "createdAt", array()), twig_date_converter($this->env, "0"))) : (twig_date_converter($this->env, "0"))), "F j, Y h:m A"), "html", null, true);
                echo "</td>
                        <td><a href=\"create/";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "uuid", array()), "html", null, true);
                echo "\">
                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"buttons\">Edit</button>
                            </a></td>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </tbody>
            </table>
        </section>
    ";
        }
        // line 40
        echo "    ";
        if ((($context["draftnotes"] ?? $this->getContext($context, "draftnotes")) != array())) {
            // line 41
            echo "        <section id=\"draftnotes\">
            <h1>Draft Notes</h1>
            <table id=\"DraftNotes\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    ";
            // line 47
            echo "                    <th>Individual</th>
                    <th>Last Modification Date</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["draftnotes"] ?? $this->getContext($context, "draftnotes")));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 54
                echo "                    <tr>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "lastName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute($context["note"], "modifiedAt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["note"], "modifiedAt", array()), twig_date_converter($this->env, "0"))) : (twig_date_converter($this->env, "0"))), "F j, Y h:m A"), "html", null, true);
                echo "</td>
                        <td><a href=\"create/";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "uuid", array()), "html", null, true);
                echo "\">
                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"buttons\">Edit</button>
                            </a></td>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </tbody>
            </table>
        </section>
    ";
        }
        // line 67
        echo "    <section id=\"UserSelectIndividual\">
        <h2>Create Note</h2>
        <!-- Look up user to create note -->
        <h5>Type in Individual's Name</h5>
        <form class=\"container form\" action=\"findindividual/\" type=\"POST\">
            <div class=\"row\">
                <div class=\"form-group col-sm-8\">
                    <label for=\"name\" class=\"col-form-label\">Individual Name</label>
                    <input id=\"name\" name=\"name\" class=\"form-control\" style=\"border-radius: 15px\" placeholder=\"Fill in individual's name\" required>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <button type=\"submit\" class=\"btn btn-info btn-block\" id=\"buttons\">Find individual</button>
                </div>
        </form>
    </section>


        </form>
    </section>

    <div class=\"col-sm-8\" style=\"margin-top: 20px;\">
        <a href=\"render/\"><button type=\"submit\" class=\"btn btn-info btn-block\" id=\"buttons\">Print your notes</button></a>
    </div>

";
        
        $__internal_fad41ed214f27f6549cd1378f220267f15dfb55b69db6486375a344ecf890fd3->leave($__internal_fad41ed214f27f6549cd1378f220267f15dfb55b69db6486375a344ecf890fd3_prof);

        
        $__internal_97d962538a37626368eba583bf550b3877718e7032279efddf8d719ced4a0a14->leave($__internal_97d962538a37626368eba583bf550b3877718e7032279efddf8d719ced4a0a14_prof);

    }

    public function getTemplateName()
    {
        return "notes/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 67,  162 => 63,  150 => 57,  146 => 56,  140 => 55,  137 => 54,  133 => 53,  125 => 47,  118 => 41,  115 => 40,  109 => 36,  97 => 30,  93 => 29,  87 => 28,  84 => 27,  80 => 26,  72 => 20,  61 => 10,  58 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% if app.request.query.get(\"error\") == \"Multiple\" %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <strong>Unable to Create Note:</strong> Multiple patients were found. We do not deal with this conflict well. Please change one of the patient names.
        </div>
    {% endif %}
    {% if backnotes != [] %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <strong>Warning!</strong> You have kicked-back notes. Please correct these issues before submitting a new
            note.
        </div>
        <section id=\"backnotes\">
            <h1>Kicked-Back Notes</h1>
            <table id=\"DraftNotes\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    {#<th>ID</th>#}
                    <th>Individual</th>
                    <th>Creation Date</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                {% for note in backnotes %}
                    <tr>
                        <td>{{ note.individual.firstName }} {{ note.individual.lastName }}</td>
                        <td>{{ note.createdAt|default(date('0'))|date('F j, Y h:m A') }}</td>
                        <td><a href=\"create/{{ note.individual.uuid }}\">
                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"buttons\">Edit</button>
                            </a></td>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </section>
    {% endif %}
    {% if draftnotes != [] %}
        <section id=\"draftnotes\">
            <h1>Draft Notes</h1>
            <table id=\"DraftNotes\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    {#<th>ID</th>#}
                    <th>Individual</th>
                    <th>Last Modification Date</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                {% for note in draftnotes %}
                    <tr>
                        <td>{{ note.individual.firstName }} {{ note.individual.lastName }}</td>
                        <td>{{ note.modifiedAt|default(date('0'))|date('F j, Y h:m A') }}</td>
                        <td><a href=\"create/{{ note.individual.uuid }}\">
                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"buttons\">Edit</button>
                            </a></td>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </section>
    {% endif %}
    <section id=\"UserSelectIndividual\">
        <h2>Create Note</h2>
        <!-- Look up user to create note -->
        <h5>Type in Individual's Name</h5>
        <form class=\"container form\" action=\"findindividual/\" type=\"POST\">
            <div class=\"row\">
                <div class=\"form-group col-sm-8\">
                    <label for=\"name\" class=\"col-form-label\">Individual Name</label>
                    <input id=\"name\" name=\"name\" class=\"form-control\" style=\"border-radius: 15px\" placeholder=\"Fill in individual's name\" required>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <button type=\"submit\" class=\"btn btn-info btn-block\" id=\"buttons\">Find individual</button>
                </div>
        </form>
    </section>


        </form>
    </section>

    <div class=\"col-sm-8\" style=\"margin-top: 20px;\">
        <a href=\"render/\"><button type=\"submit\" class=\"btn btn-info btn-block\" id=\"buttons\">Print your notes</button></a>
    </div>

{% endblock %}", "notes/home.html.twig", "/Users/Ciro/Documents/GitHub/DeRiche-Agency-master-2/app/Resources/views/notes/home.html.twig");
    }
}
