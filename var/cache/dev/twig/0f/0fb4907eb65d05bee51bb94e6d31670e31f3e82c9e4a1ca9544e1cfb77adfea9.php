<?php

/* admin/admin.html.twig */
class __TwigTemplate_1300b41d216b4e6d5bdd5c84a4a8bbf0d5193a8047505042124752ed4cc8edb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "admin/admin.html.twig", 1);
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
        $__internal_c45715de682ad50e3d623c3395d033aafb2c220eb1acad2452762159feb91f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45715de682ad50e3d623c3395d033aafb2c220eb1acad2452762159feb91f34->enter($__internal_c45715de682ad50e3d623c3395d033aafb2c220eb1acad2452762159feb91f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_ecbf323fe5dec503434cc427d6b66dd2d7ffcc8dfbe0732c7d38c3444fa477d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbf323fe5dec503434cc427d6b66dd2d7ffcc8dfbe0732c7d38c3444fa477d7->enter($__internal_ecbf323fe5dec503434cc427d6b66dd2d7ffcc8dfbe0732c7d38c3444fa477d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45715de682ad50e3d623c3395d033aafb2c220eb1acad2452762159feb91f34->leave($__internal_c45715de682ad50e3d623c3395d033aafb2c220eb1acad2452762159feb91f34_prof);

        
        $__internal_ecbf323fe5dec503434cc427d6b66dd2d7ffcc8dfbe0732c7d38c3444fa477d7->leave($__internal_ecbf323fe5dec503434cc427d6b66dd2d7ffcc8dfbe0732c7d38c3444fa477d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba8dcd00caafd30e129e77fccd53cd5d441a972dc6f6e49968f5c276d8e1235f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8dcd00caafd30e129e77fccd53cd5d441a972dc6f6e49968f5c276d8e1235f->enter($__internal_ba8dcd00caafd30e129e77fccd53cd5d441a972dc6f6e49968f5c276d8e1235f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3272931704a98e5580c0674aa1a46eccdc319dcf9d7e55ed0f644186c6ddb6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3272931704a98e5580c0674aa1a46eccdc319dcf9d7e55ed0f644186c6ddb6e7->enter($__internal_3272931704a98e5580c0674aa1a46eccdc319dcf9d7e55ed0f644186c6ddb6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Admin Dashboard</h2>
    <p>This page will be used by the admin to create users and change privileges.</p>

    <!-- Nav tabs -->
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#view\" role=\"tab\">View</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#create\" role=\"tab\">Create</a>
        </li>
    </ul>

    <br/>

    <!-- Tab panes -->
    <div class=\"tab-content\">

        <div class=\"tab-pane active\" id=\"view\" role=\"tabpanel\">
            <table id=\"admins\" class=\"table table-bordered table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    ";
        // line 27
        echo "                    <th>Username</th>
                    <th>Name</th>
                    <th>Primary Role</th>
                    <th>Secondary Role</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "                    <tr>
                        ";
            // line 38
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "getroles", array(), "method"), 0, array(), "array"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 42
            if ($this->getAttribute($this->getAttribute($context["user"], "getroles", array(), "method", false, true), 2, array(), "array", true, true)) {
                // line 43
                echo "                                <input type=\"hidden\" value=\"\" name=\"secondrole\">
                                <select id=\"editrole";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "\" name=\"editrole\">
                                    <option value=\"NONE\" selected=\"selected\">None</option>
                                    <option value=\"ROLE_WRITER\"";
                // line 46
                if (($this->getAttribute($this->getAttribute($context["user"], "getroles", array()), 2, array(), "array") == "ROLE_WRITER")) {
                    echo " selected=\"selected\"";
                }
                echo ">Writer</option>
                                    <option value=\"ROLE_REVIEWER\"";
                // line 47
                if (($this->getAttribute($this->getAttribute($context["user"], "getroles", array()), 2, array(), "array") == "ROLE_REVIEWER")) {
                    echo " selected=\"selected\"";
                }
                echo ">Reviewer</option>
                                    <option value=\"ROLE_ADMIN\"";
                // line 48
                if (($this->getAttribute($this->getAttribute($context["user"], "getroles", array()), 2, array(), "array") == "ROLE_ADMIN")) {
                    echo " selected=\"selected\"";
                }
                echo ">Administrator</option>
                                </select>
                            ";
            } else {
                // line 51
                echo "                                <select id=\"editrole";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "\" name=\"editrole\">
                                    <option value=\"NONE\" selected=\"selected\">None</option>
                                    <option value=\"ROLE_WRITER\">Writer</option>
                                    <option value=\"ROLE_REVIEWER\">Reviewer</option>
                                    <option value=\"ROLE_ADMIN\">Administrator</option>
                                </select>
                            ";
            }
            // line 58
            echo "                            <button class=\"saverole, btn btn-outline-success btn-sm\" id=\"buttons\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\" style=\"min-width: 30%\">Update</button>
                        </td>
                        <td>
                            <!-- Example split danger button -->
                            <div class=\"btn-group\">
                                ";
            // line 64
            echo "                                <button type=\"button\" id=\"buttons\" class=\"btn btn-outline-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Manage
                                </button>
                                <div class=\"dropdown-menu\">
                                    <h6 class=\"dropdown-header\">Change</h6>
                                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#changeModal\" data-id=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\" id=\"changepwdbutton\">Change Password</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <h6 class=\"dropdown-header\">Danger Zone</h6>
                                    ";
            // line 73
            echo "                                       ";
            // line 74
            echo "                                       ";
            // line 75
            echo "                                       ";
            // line 76
            echo "                                       ";
            // line 77
            echo "                                    <a class=\"dropdown-item confirm-link text-danger\"
                                       data-confirm-title=\"Delete User\"
                                       data-confirm-message=\"Are you sure you wish to <b>delete</b> ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"
                                       data-bootstrap-color=\"danger\"
                                       data-link=\"/admin/delete/";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                </tbody>
            </table>
        </div>
        <!-- Change Password Modal -->
        <div class=\"modal fade\" id=\"changeModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <form id=\"changepassword\" method=\"POST\">
                            <h4>Set a password, make it strong.</h4>
                            <div class=\"form-group col-md-8\">
                                <label for=\"name\" class=\"col-form-label\">Password:</label>
                                <input id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Make it strong!\" required>
                                <button type=\"submit\" class=\"btn btn-primary btn-block\" style=\"margin-top:10px;\">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin Add User Form -->
        <div class=\"tab-pane fade\" id=\"create\" role=\"tabpanel\">
            <p>Below is the form for creating users. Can only be accessed by the Administrator Role.</p>
            ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "container form")));
        echo "

            <div class=\"row\">
                <div class=\"form-group col-sm-6\">
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"form-group col-sm-6\">
                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group col\">
                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group col-sm-6\">
                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"form-group col-sm-6\">
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group col-sm-12\">
                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", array()), 'label', array("attr" => array("class" => "col-form-label")));
        echo "
                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", array()), 'errors');
        echo "
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>


            <button class=\"btn btn-success\" id=\"buttons\" type=\"submit\" style=\"min-width: 15%\">Register</button>
            ";
        // line 158
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            <!-- End Add Individual Form -->
        </div>
    </div>
";
        
        $__internal_3272931704a98e5580c0674aa1a46eccdc319dcf9d7e55ed0f644186c6ddb6e7->leave($__internal_3272931704a98e5580c0674aa1a46eccdc319dcf9d7e55ed0f644186c6ddb6e7_prof);

        
        $__internal_ba8dcd00caafd30e129e77fccd53cd5d441a972dc6f6e49968f5c276d8e1235f->leave($__internal_ba8dcd00caafd30e129e77fccd53cd5d441a972dc6f6e49968f5c276d8e1235f_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_397ea93248c8ccaecbcab23985e71409e5cef9884843c5931219d6c8606513c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397ea93248c8ccaecbcab23985e71409e5cef9884843c5931219d6c8606513c5->enter($__internal_397ea93248c8ccaecbcab23985e71409e5cef9884843c5931219d6c8606513c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef13614a36cb96605be94a5548c848103fcf9fb35e3352314eeff002b74d7194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef13614a36cb96605be94a5548c848103fcf9fb35e3352314eeff002b74d7194->enter($__internal_ef13614a36cb96605be94a5548c848103fcf9fb35e3352314eeff002b74d7194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css\">
    <script src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
    <script src=\"//cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#individuals').DataTable();
            \$('[data-toggle=\"tooltip\"]').tooltip()
        });
    </script>

    <script>
        // Javascript to enable link to tab
        var url = document.location.toString();
        if (url.match('#') && !url.match('#view')) {
            \$('.tab-pane.active').removeClass('active');
            \$('.nav-tabs a[href=\"#' + url.split('#')[1] + '\"]').tab('show');
        }

        // Change hash for page-reload
        \$('.nav-tabs a').on('shown.bs.tab', function (e) {
            window.location.hash = e.target.hash;
        })

        // Handle role editing.
        \$(\".saverole\").click(function () {
            role = \$('select[id^=\"editrole' + this.value + '\"]').val();
            \$(location).attr('href', 'secondaryrole/' + this.value + '?role=' + role);
        });

        // Handle change password.
        \$(document).on(\"click\", \"#changepwdbutton\", function () {
            var adminId = \$(this).data('id');
            \$('#changepassword').attr('action', 'password/' + adminId);
        });
    </script>
";
        
        $__internal_ef13614a36cb96605be94a5548c848103fcf9fb35e3352314eeff002b74d7194->leave($__internal_ef13614a36cb96605be94a5548c848103fcf9fb35e3352314eeff002b74d7194_prof);

        
        $__internal_397ea93248c8ccaecbcab23985e71409e5cef9884843c5931219d6c8606513c5->leave($__internal_397ea93248c8ccaecbcab23985e71409e5cef9884843c5931219d6c8606513c5_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 166,  344 => 165,  329 => 158,  320 => 152,  316 => 151,  312 => 150,  303 => 144,  299 => 143,  295 => 142,  288 => 138,  284 => 137,  280 => 136,  271 => 130,  267 => 129,  263 => 128,  254 => 122,  250 => 121,  246 => 120,  239 => 116,  235 => 115,  231 => 114,  224 => 110,  199 => 87,  187 => 81,  182 => 79,  178 => 77,  176 => 76,  174 => 75,  172 => 74,  170 => 73,  164 => 69,  157 => 64,  148 => 58,  137 => 51,  129 => 48,  123 => 47,  117 => 46,  112 => 44,  109 => 43,  107 => 42,  102 => 40,  96 => 39,  91 => 38,  88 => 36,  84 => 35,  74 => 27,  50 => 4,  41 => 3,  11 => 1,);
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
    <h2>Admin Dashboard</h2>
    <p>This page will be used by the admin to create users and change privileges.</p>

    <!-- Nav tabs -->
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#view\" role=\"tab\">View</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#create\" role=\"tab\">Create</a>
        </li>
    </ul>

    <br/>

    <!-- Tab panes -->
    <div class=\"tab-content\">

        <div class=\"tab-pane active\" id=\"view\" role=\"tabpanel\">
            <table id=\"admins\" class=\"table table-bordered table-hover\" cellspacing=\"0\">
                <thead>
                <tr>
                    {#<th>ID</th>#}
                    <th>Username</th>
                    <th>Name</th>
                    <th>Primary Role</th>
                    <th>Secondary Role</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        {#<td>{{ individual.id }}</td>#}
                        <td>{{ user.username }}</td>
                        <td>{{ user.firstName }} {{ user.lastName }}</td>
                        <td>{{ user.getroles()[0] }}</td>
                        <td>
                            {% if user.getroles()[2] is defined %}
                                <input type=\"hidden\" value=\"\" name=\"secondrole\">
                                <select id=\"editrole{{ user.username }}\" name=\"editrole\">
                                    <option value=\"NONE\" selected=\"selected\">None</option>
                                    <option value=\"ROLE_WRITER\"{%if user.getroles[2]==\"ROLE_WRITER\"%} selected=\"selected\"{%endif%}>Writer</option>
                                    <option value=\"ROLE_REVIEWER\"{%if user.getroles[2]==\"ROLE_REVIEWER\"%} selected=\"selected\"{%endif%}>Reviewer</option>
                                    <option value=\"ROLE_ADMIN\"{%if user.getroles[2]==\"ROLE_ADMIN\"%} selected=\"selected\"{%endif%}>Administrator</option>
                                </select>
                            {% else %}
                                <select id=\"editrole{{ user.username }}\" name=\"editrole\">
                                    <option value=\"NONE\" selected=\"selected\">None</option>
                                    <option value=\"ROLE_WRITER\">Writer</option>
                                    <option value=\"ROLE_REVIEWER\">Reviewer</option>
                                    <option value=\"ROLE_ADMIN\">Administrator</option>
                                </select>
                            {% endif %}
                            <button class=\"saverole, btn btn-outline-success btn-sm\" id=\"buttons\" value=\"{{ user.username }}\" style=\"min-width: 30%\">Update</button>
                        </td>
                        <td>
                            <!-- Example split danger button -->
                            <div class=\"btn-group\">
                                {#<a role=\"button\" class=\"btn btn-primary\" href=\"user/{{ user.username }}\">View</a>#}
                                <button type=\"button\" id=\"buttons\" class=\"btn btn-outline-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Manage
                                </button>
                                <div class=\"dropdown-menu\">
                                    <h6 class=\"dropdown-header\">Change</h6>
                                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#changeModal\" data-id=\"{{ user.username }}\" id=\"changepwdbutton\">Change Password</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <h6 class=\"dropdown-header\">Danger Zone</h6>
                                    {#<a class=\"dropdown-item confirm-link text-warning\"#}
                                       {#data-confirm-title=\"Archive User\"#}
                                       {#data-confirm-message=\"Are you sure you wish to <b>archive</b> {{ user.username }}\"#}
                                       {#data-bootstrap-color=\"warning\"#}
                                       {#data-link=\"/admin/archive/{{ user.username }}\">Archive</a>#}
                                    <a class=\"dropdown-item confirm-link text-danger\"
                                       data-confirm-title=\"Delete User\"
                                       data-confirm-message=\"Are you sure you wish to <b>delete</b> {{ user.username }}\"
                                       data-bootstrap-color=\"danger\"
                                       data-link=\"/admin/delete/{{ user.username }}\">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <!-- Change Password Modal -->
        <div class=\"modal fade\" id=\"changeModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <form id=\"changepassword\" method=\"POST\">
                            <h4>Set a password, make it strong.</h4>
                            <div class=\"form-group col-md-8\">
                                <label for=\"name\" class=\"col-form-label\">Password:</label>
                                <input id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Make it strong!\" required>
                                <button type=\"submit\" class=\"btn btn-primary btn-block\" style=\"margin-top:10px;\">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin Add User Form -->
        <div class=\"tab-pane fade\" id=\"create\" role=\"tabpanel\">
            <p>Below is the form for creating users. Can only be accessed by the Administrator Role.</p>
            {{ form_start(form, { 'attr': {'class': 'container form'} }) }}

            <div class=\"row\">
                <div class=\"form-group col-sm-6\">
                    {{ form_label(form.firstName, null, { 'attr': {'class': 'col-form-label'} }) }}
                    {{ form_errors(form.firstName) }}
                    {{ form_widget(form.firstName, { 'attr': {'class': 'form-control'} }) }}
                </div>

                <div class=\"form-group col-sm-6\">
                    {{ form_label(form.lastName, null, { 'attr': {'class': 'col-form-label'} }) }}
                    {{ form_errors(form.lastName) }}
                    {{ form_widget(form.lastName, { 'attr': {'class': 'form-control'} }) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group col\">
                    {{ form_label(form.username, null, { 'attr': {'class': 'col-form-label'} }) }}
                    {{ form_errors(form.username) }}
                    {{ form_widget(form.username, { 'attr': {'class': 'form-control'} }) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group col-sm-6\">
                    {{ form_label(form.plainPassword.first, null, { 'attr': {'class': 'col-form-label'} }) }}
                    {{ form_errors(form.plainPassword.first) }}
                    {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}
                </div>

                <div class=\"form-group col-sm-6\">
                    {{ form_label(form.plainPassword.second, null, { 'attr': {'class': 'col-form-label'} }) }}
                    {{ form_errors(form.plainPassword.second) }}
                    {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group col-sm-12\">
                    {{ form_label(form.roles, null, { 'attr': {'class': 'col-form-label'} }) }}
                    {{ form_errors(form.roles) }}
                    {{ form_widget(form.roles, { 'attr': {'class': 'form-control'} }) }}
                </div>
            </div>


            <button class=\"btn btn-success\" id=\"buttons\" type=\"submit\" style=\"min-width: 15%\">Register</button>
            {{ form_end(form) }}
            <!-- End Add Individual Form -->
        </div>
    </div>
{% endblock %}


{% block javascripts %}
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css\">
    <script src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
    <script src=\"//cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#individuals').DataTable();
            \$('[data-toggle=\"tooltip\"]').tooltip()
        });
    </script>

    <script>
        // Javascript to enable link to tab
        var url = document.location.toString();
        if (url.match('#') && !url.match('#view')) {
            \$('.tab-pane.active').removeClass('active');
            \$('.nav-tabs a[href=\"#' + url.split('#')[1] + '\"]').tab('show');
        }

        // Change hash for page-reload
        \$('.nav-tabs a').on('shown.bs.tab', function (e) {
            window.location.hash = e.target.hash;
        })

        // Handle role editing.
        \$(\".saverole\").click(function () {
            role = \$('select[id^=\"editrole' + this.value + '\"]').val();
            \$(location).attr('href', 'secondaryrole/' + this.value + '?role=' + role);
        });

        // Handle change password.
        \$(document).on(\"click\", \"#changepwdbutton\", function () {
            var adminId = \$(this).data('id');
            \$('#changepassword').attr('action', 'password/' + adminId);
        });
    </script>
{% endblock %}", "admin/admin.html.twig", "/Users/Ciro/Documents/GitHub/DeRiche-Agency-master-2/app/Resources/views/admin/admin.html.twig");
    }
}
