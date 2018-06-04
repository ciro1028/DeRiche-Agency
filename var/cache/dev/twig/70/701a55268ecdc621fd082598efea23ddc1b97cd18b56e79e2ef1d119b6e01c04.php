<?php

/* admin/audit.html.twig */
class __TwigTemplate_b3f69f4e69de2a10c026aba54f244ec929778616e96684ca098a07ef17d96271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "admin/audit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_343295dcd643ee06f2ee16655e4a9fdcfab542c1963c68905cbc824dfb8c22e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343295dcd643ee06f2ee16655e4a9fdcfab542c1963c68905cbc824dfb8c22e9->enter($__internal_343295dcd643ee06f2ee16655e4a9fdcfab542c1963c68905cbc824dfb8c22e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/audit.html.twig"));

        $__internal_0fb5b4996c355266ce14a8ca300c9d8b2047545d640f9c1e9441e7a569332598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb5b4996c355266ce14a8ca300c9d8b2047545d640f9c1e9441e7a569332598->enter($__internal_0fb5b4996c355266ce14a8ca300c9d8b2047545d640f9c1e9441e7a569332598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/audit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343295dcd643ee06f2ee16655e4a9fdcfab542c1963c68905cbc824dfb8c22e9->leave($__internal_343295dcd643ee06f2ee16655e4a9fdcfab542c1963c68905cbc824dfb8c22e9_prof);

        
        $__internal_0fb5b4996c355266ce14a8ca300c9d8b2047545d640f9c1e9441e7a569332598->leave($__internal_0fb5b4996c355266ce14a8ca300c9d8b2047545d640f9c1e9441e7a569332598_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a3b4071bbfcf38bb4c797c6002cb48aefc2348d4036323bd74229f15fe6180e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3b4071bbfcf38bb4c797c6002cb48aefc2348d4036323bd74229f15fe6180e->enter($__internal_6a3b4071bbfcf38bb4c797c6002cb48aefc2348d4036323bd74229f15fe6180e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cc93022c3e7ee779d9103c617c51eac8875e693b51b41d467edde00a800a7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc93022c3e7ee779d9103c617c51eac8875e693b51b41d467edde00a800a7a9->enter($__internal_1cc93022c3e7ee779d9103c617c51eac8875e693b51b41d467edde00a800a7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Audit Dashboard</h2>
    <p>This page will be used by the admin to generate audits.</p>
    <form action=\"individual\" type=\"POST\">
        <div class=\"form-group col-sm-8\">
            <label for=\"name\" class=\"col-form-label\">Generate an audit based on the individual:</label>
            <input id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"John Oliver\" required=\"\"
                   style=\"margin-bottom:5px; border-radius: 15px;\">
            <button type=\"submit\" class=\"btn btn-info btn-block\" id=\"buttons\">Get Notes</button>
        </div>
    </form>
    <form action=\"dates\" type=\"POST\">
        <div class=\"form-group col-sm-8\">
            <label for=\"name\" class=\"col-form-label\">Generate an audit based on date range:</label>
            <div class=\"input-daterange input-group\" id=\"datepicker\" style=\"margin-bottom:5px;\">
                <input type=\"text\" class=\"input-sm form-control\" name=\"start\" style=\"border-radius: 15px;\"/>
                <span class=\"input-group-addon\" style=\"border-radius: 15px;\">to</span>
                <input type=\"text\" class=\"input-sm form-control\" name=\"end\" style=\"border-radius: 15px;\"/>
            </div>
            <button type=\"submit\" class=\"btn btn-info btn-block\" id=\"buttons\">Get Notes</button>
            <p>Warning: This only shows submitted notes.</p>
        </div>
    </form>
    <div class=\"row\" style=\"margin-top:20px;\">
        <div class=\"col-md-8\"></div>
        <div class=\"col-md-4\">
            <a href=\"db-backup\" download target=\"_blank\"><button type=\"backupdb\" class=\"btn btn-primary btn-block btn-warning\" id=\"buttons\">Backup Database</button></a>
        </div>
    </div>
    ";
        // line 32
        if (array_key_exists("notes", $context)) {
            // line 33
            echo "        <div>
            <hr>
            ";
            // line 35
            if (array_key_exists("individual", $context)) {
                // line 36
                echo "                <h2>Individual: ";
                echo twig_escape_filter($this->env, ($context["individual"] ?? $this->getContext($context, "individual")), "html", null, true);
                echo "</h2>
            ";
            }
            // line 38
            echo "            <table id=\"AllNotes\" class=\"table table-hover table-condensed\" cellspacing=\"0\">
                <thead>
                <tr>
                    <th>Staff</th>
                    <th>Individual</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Download</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                if (($this->getAttribute($context["note"], "state", array()) != twig_constant("DRAFT", $context["note"]))) {
                    // line 50
                    echo "                    <tr>
                        <td>";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "staff", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "staff", array()), "lastName", array()), "html", null, true);
                    echo "</td>
                        <td> ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "individual", array()), "lastName", array()), "html", null, true);
                    echo "</td>
                        ";
                    // line 53
                    $context["statusarray"] = array(10 => "Draft", 20 => "Awaiting Approval", 30 => "Pending Correction", 40 => "In Database");
                    // line 54
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["statusarray"] ?? $this->getContext($context, "statusarray")), $this->getAttribute($context["note"], "state", array()), array(), "array"), "html", null, true);
                    echo "</td>
                        ";
                    // line 55
                    if (((($this->getAttribute($context["note"], "state", array()) == 10) || ($this->getAttribute($context["note"], "state", array()) == 20)) || ($this->getAttribute($context["note"], "state", array()) == 30))) {
                        // line 56
                        echo "                            <td>Not in Database</td>
                        ";
                    } else {
                        // line 58
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute($context["note"], "submittedAt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["note"], "submittedAt", array()), twig_date_converter($this->env, "0"))) : (twig_date_converter($this->env, "0"))), "F j, Y"), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 60
                    echo "                        <td><a href=\"../../../reviewer/export/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "uuid", array()), "html", null, true);
                    echo "\" download target=\"_blank\">
                                <button type=\"button\" class=\"btn btn-outline-success btn-sm\" id=\"buttons\">Download</button>
                            </a></td>
                        </td>
                    </tr>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </tbody>
            </table>
        </div>
    ";
        }
        
        $__internal_1cc93022c3e7ee779d9103c617c51eac8875e693b51b41d467edde00a800a7a9->leave($__internal_1cc93022c3e7ee779d9103c617c51eac8875e693b51b41d467edde00a800a7a9_prof);

        
        $__internal_6a3b4071bbfcf38bb4c797c6002cb48aefc2348d4036323bd74229f15fe6180e->leave($__internal_6a3b4071bbfcf38bb4c797c6002cb48aefc2348d4036323bd74229f15fe6180e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8b1e45aeeb00a5edcc8f9ed066877aa2cfee2456a5aab6ee19154dce7946bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b1e45aeeb00a5edcc8f9ed066877aa2cfee2456a5aab6ee19154dce7946bcf->enter($__internal_d8b1e45aeeb00a5edcc8f9ed066877aa2cfee2456a5aab6ee19154dce7946bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5cb49598498ac786016104a58bdd0fcdb5b5dc8e13be0fc705fdeaf8914039c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cb49598498ac786016104a58bdd0fcdb5b5dc8e13be0fc705fdeaf8914039c->enter($__internal_c5cb49598498ac786016104a58bdd0fcdb5b5dc8e13be0fc705fdeaf8914039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    <!-- Include Required Prerequisites -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js\"></script>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css\"/>
    <script type=\"text/javascript\">
        \$(function () {
            \$('.input-daterange input').datepicker({
                autoclose: true,
                todayHighlight: true,
                endDate: '0',
            });
        });
    </script>
";
        
        $__internal_c5cb49598498ac786016104a58bdd0fcdb5b5dc8e13be0fc705fdeaf8914039c->leave($__internal_c5cb49598498ac786016104a58bdd0fcdb5b5dc8e13be0fc705fdeaf8914039c_prof);

        
        $__internal_d8b1e45aeeb00a5edcc8f9ed066877aa2cfee2456a5aab6ee19154dce7946bcf->leave($__internal_d8b1e45aeeb00a5edcc8f9ed066877aa2cfee2456a5aab6ee19154dce7946bcf_prof);

    }

    public function getTemplateName()
    {
        return "admin/audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 72,  174 => 71,  160 => 66,  146 => 60,  140 => 58,  136 => 56,  134 => 55,  129 => 54,  127 => 53,  121 => 52,  115 => 51,  112 => 50,  107 => 49,  94 => 38,  88 => 36,  86 => 35,  82 => 33,  80 => 32,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@App/base.html.twig' %}

{% block body %}
    <h2>Audit Dashboard</h2>
    <p>This page will be used by the admin to generate audits.</p>
    <form action=\"individual\" type=\"POST\">
        <div class=\"form-group col-sm-8\">
            <label for=\"name\" class=\"col-form-label\">Generate an audit based on the individual:</label>
            <input id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"John Oliver\" required=\"\"
                   style=\"margin-bottom:5px; border-radius: 15px;\">
            <button type=\"submit\" class=\"btn btn-info btn-block\" id=\"buttons\">Get Notes</button>
        </div>
    </form>
    <form action=\"dates\" type=\"POST\">
        <div class=\"form-group col-sm-8\">
            <label for=\"name\" class=\"col-form-label\">Generate an audit based on date range:</label>
            <div class=\"input-daterange input-group\" id=\"datepicker\" style=\"margin-bottom:5px;\">
                <input type=\"text\" class=\"input-sm form-control\" name=\"start\" style=\"border-radius: 15px;\"/>
                <span class=\"input-group-addon\" style=\"border-radius: 15px;\">to</span>
                <input type=\"text\" class=\"input-sm form-control\" name=\"end\" style=\"border-radius: 15px;\"/>
            </div>
            <button type=\"submit\" class=\"btn btn-info btn-block\" id=\"buttons\">Get Notes</button>
            <p>Warning: This only shows submitted notes.</p>
        </div>
    </form>
    <div class=\"row\" style=\"margin-top:20px;\">
        <div class=\"col-md-8\"></div>
        <div class=\"col-md-4\">
            <a href=\"db-backup\" download target=\"_blank\"><button type=\"backupdb\" class=\"btn btn-primary btn-block btn-warning\" id=\"buttons\">Backup Database</button></a>
        </div>
    </div>
    {% if notes is defined %}
        <div>
            <hr>
            {% if individual is defined %}
                <h2>Individual: {{ individual }}</h2>
            {% endif %}
            <table id=\"AllNotes\" class=\"table table-hover table-condensed\" cellspacing=\"0\">
                <thead>
                <tr>
                    <th>Staff</th>
                    <th>Individual</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Download</th>
                </tr>
                </thead>
                <tbody>
                {% for note in notes if note.state != constant('DRAFT', note) %}
                    <tr>
                        <td>{{ note.staff.firstName }} {{ note.staff.lastName }}</td>
                        <td> {{ note.individual.firstName }} {{ note.individual.lastName }}</td>
                        {% set statusarray = { 10: 'Draft', 20: 'Awaiting Approval', 30: 'Pending Correction', 40: 'In Database' } %}
                        <td>{{ statusarray[note.state] }}</td>
                        {% if note.state == 10 or note.state == 20 or note.state == 30 %}
                            <td>Not in Database</td>
                        {% else %}
                            <td>{{ note.submittedAt|default(date('0'))|date('F j, Y') }}</td>
                        {% endif %}
                        <td><a href=\"../../../reviewer/export/{{ note.uuid }}\" download target=\"_blank\">
                                <button type=\"button\" class=\"btn btn-outline-success btn-sm\" id=\"buttons\">Download</button>
                            </a></td>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
{% endblock %}
{% block javascripts %}
    <!-- Include Required Prerequisites -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js\"></script>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css\"/>
    <script type=\"text/javascript\">
        \$(function () {
            \$('.input-daterange input').datepicker({
                autoclose: true,
                todayHighlight: true,
                endDate: '0',
            });
        });
    </script>
{% endblock %}", "admin/audit.html.twig", "/Users/Ciro/Documents/GitHub/DeRiche-Agency-master-2/app/Resources/views/admin/audit.html.twig");
    }
}
