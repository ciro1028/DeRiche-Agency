<?php

/* reviewer/notes.html.twig */
class __TwigTemplate_b85cd1ef9567e45141f7f8be35890d93a3772061a1d4847ebc0ca876b8b78837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reviewer/notes.html.twig", 1);
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
        $__internal_8c83938a87141f0690b7d75f4bcdcb254b4dd076eb906d1a08f2c83eaf8b771d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c83938a87141f0690b7d75f4bcdcb254b4dd076eb906d1a08f2c83eaf8b771d->enter($__internal_8c83938a87141f0690b7d75f4bcdcb254b4dd076eb906d1a08f2c83eaf8b771d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reviewer/notes.html.twig"));

        $__internal_ef861a6b4547d0fac56a7413fdb247fcd8aea23acc602bf85b6a79de9709618d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef861a6b4547d0fac56a7413fdb247fcd8aea23acc602bf85b6a79de9709618d->enter($__internal_ef861a6b4547d0fac56a7413fdb247fcd8aea23acc602bf85b6a79de9709618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reviewer/notes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c83938a87141f0690b7d75f4bcdcb254b4dd076eb906d1a08f2c83eaf8b771d->leave($__internal_8c83938a87141f0690b7d75f4bcdcb254b4dd076eb906d1a08f2c83eaf8b771d_prof);

        
        $__internal_ef861a6b4547d0fac56a7413fdb247fcd8aea23acc602bf85b6a79de9709618d->leave($__internal_ef861a6b4547d0fac56a7413fdb247fcd8aea23acc602bf85b6a79de9709618d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6412b971e784cd93f6299dd14337b1d868414087db9e9eb5ae32ebfbe7ae11bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6412b971e784cd93f6299dd14337b1d868414087db9e9eb5ae32ebfbe7ae11bd->enter($__internal_6412b971e784cd93f6299dd14337b1d868414087db9e9eb5ae32ebfbe7ae11bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44edb070c9527dfc24dfd1dc46ee5aaca3f1f6c2d1e92ad91b58c83ace166881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44edb070c9527dfc24dfd1dc46ee5aaca3f1f6c2d1e92ad91b58c83ace166881->enter($__internal_44edb070c9527dfc24dfd1dc46ee5aaca3f1f6c2d1e92ad91b58c83ace166881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section id=\"ReviewerNotes\">
        <h2 class=\"text-primary\">Notes Awaiting Approval</h2>
        <hr/>
        <!-- Show pending notes grouped by individual -->
        <section>
            <table id=\"ReviewerNotes\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    ";
        // line 13
        echo "                    <th>Individual</th>
                    <th>Staff</th>
                    <th>Date Modified</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            if (($this->getAttribute($context["note"], "state", array()) == twig_constant("AWAITING_APPROVAL", $context["note"]))) {
                // line 21
                echo "                    <tr>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "lastName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "staff", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "staff", array()), "lastName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute($context["note"], "modifiedAt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["note"], "modifiedAt", array()), twig_date_converter($this->env, "0"))) : (twig_date_converter($this->env, "0"))), "F j, Y h:i A"), "html", null, true);
                echo "</td>
                        <td><a href=\"review/";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "uuid", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"buttons\">Manage</button></a></td>
                        </td>
                    </tr>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </tbody>
            </table>

            <h2 class=\"text-primary\">Approved/Submitted Notes</h2>
            <hr/>
            <table id=\"ReviewerNotesCompleted\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    ";
        // line 38
        echo "                    <th>Individual</th>
                    <th>Staff</th>
                    <th>Date Approved</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            if (($this->getAttribute($context["note"], "state", array()) == twig_constant("ACCEPTED", $context["note"]))) {
                // line 46
                echo "                    <tr>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "lastName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "staff", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "staff", array()), "lastName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute($context["note"], "submittedAt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["note"], "submittedAt", array()), twig_date_converter($this->env, "0"))) : (twig_date_converter($this->env, "0"))), "F j, Y h:i A"), "html", null, true);
                echo "</td>
                        <td><a href=\"review/";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "uuid", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-primary\">View</button></a></td>
                        </td>
                    </tr>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>

            <h2 class=\"text-primary\">Notes pending correction</h2>
            <hr/>
            <table id=\"ReviewerNotesCompleted\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    ";
        // line 63
        echo "                    <th>Individual</th>
                    <th>Staff</th>
                    <th>Date Sent Back</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            if (($this->getAttribute($context["note"], "state", array()) == twig_constant("KICKED_BACK", $context["note"]))) {
                // line 71
                echo "                    <tr>
                        <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "lastName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "staff", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "staff", array()), "lastName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute($context["note"], "modifiedAt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["note"], "modifiedAt", array()), twig_date_converter($this->env, "0"))) : (twig_date_converter($this->env, "0"))), "F j, Y h:i A"), "html", null, true);
                echo "</td>
                        <td><a href=\"review/";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "uuid", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-primary\">View</button></a></td>
                        </td>
                    </tr>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </tbody>
            </table>
        </section>
    </section>
";
        
        $__internal_44edb070c9527dfc24dfd1dc46ee5aaca3f1f6c2d1e92ad91b58c83ace166881->leave($__internal_44edb070c9527dfc24dfd1dc46ee5aaca3f1f6c2d1e92ad91b58c83ace166881_prof);

        
        $__internal_6412b971e784cd93f6299dd14337b1d868414087db9e9eb5ae32ebfbe7ae11bd->leave($__internal_6412b971e784cd93f6299dd14337b1d868414087db9e9eb5ae32ebfbe7ae11bd_prof);

    }

    public function getTemplateName()
    {
        return "reviewer/notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 79,  200 => 75,  196 => 74,  190 => 73,  184 => 72,  181 => 71,  176 => 70,  167 => 63,  157 => 54,  146 => 50,  142 => 49,  136 => 48,  130 => 47,  127 => 46,  122 => 45,  113 => 38,  103 => 29,  92 => 25,  88 => 24,  82 => 23,  76 => 22,  73 => 21,  68 => 20,  59 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
    <section id=\"ReviewerNotes\">
        <h2 class=\"text-primary\">Notes Awaiting Approval</h2>
        <hr/>
        <!-- Show pending notes grouped by individual -->
        <section>
            <table id=\"ReviewerNotes\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    {#<th>ID</th>#}
                    <th>Individual</th>
                    <th>Staff</th>
                    <th>Date Modified</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                {% for note in notes if note.state == constant('AWAITING_APPROVAL', note) %}
                    <tr>
                        <td>{{ note.individual.firstName }} {{ note.individual.lastName }}</td>
                        <td>{{ note.staff.firstName }} {{ note.staff.lastName }}</td>
                        <td>{{ note.modifiedAt|default(date('0'))|date('F j, Y h:i A') }}</td>
                        <td><a href=\"review/{{ note.uuid }}\"><button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"buttons\">Manage</button></a></td>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            <h2 class=\"text-primary\">Approved/Submitted Notes</h2>
            <hr/>
            <table id=\"ReviewerNotesCompleted\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    {#<th>ID</th>#}
                    <th>Individual</th>
                    <th>Staff</th>
                    <th>Date Approved</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                {% for note in notes if note.state == constant('ACCEPTED', note) %}
                    <tr>
                        <td>{{ note.individual.firstName }} {{ note.individual.lastName }}</td>
                        <td>{{ note.staff.firstName }} {{ note.staff.lastName }}</td>
                        <td>{{ note.submittedAt|default(date('0'))|date('F j, Y h:i A') }}</td>
                        <td><a href=\"review/{{ note.uuid }}\"><button type=\"button\" class=\"btn btn-primary\">View</button></a></td>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            <h2 class=\"text-primary\">Notes pending correction</h2>
            <hr/>
            <table id=\"ReviewerNotesCompleted\" class=\"table table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    {#<th>ID</th>#}
                    <th>Individual</th>
                    <th>Staff</th>
                    <th>Date Sent Back</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                {% for note in notes if note.state == constant('KICKED_BACK', note) %}
                    <tr>
                        <td>{{ note.individual.firstName }} {{ note.individual.lastName }}</td>
                        <td>{{ note.staff.firstName }} {{ note.staff.lastName }}</td>
                        <td>{{ note.modifiedAt|default(date('0'))|date('F j, Y h:i A') }}</td>
                        <td><a href=\"review/{{ note.uuid }}\"><button type=\"button\" class=\"btn btn-primary\">View</button></a></td>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </section>
    </section>
{% endblock %}", "reviewer/notes.html.twig", "/Users/Ciro/Documents/GitHub/DeRiche-Agency-master-2/app/Resources/views/reviewer/notes.html.twig");
    }
}
