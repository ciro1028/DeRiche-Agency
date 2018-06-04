<?php

/* login.html.twig */
class __TwigTemplate_825aef0adb14d17d9ca444be33688339aadc2c70594803538cdb317e099455d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da5d9eeb8ba5f721e320167eaa451634049a47adf0e1837db0f6737539d32805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5d9eeb8ba5f721e320167eaa451634049a47adf0e1837db0f6737539d32805->enter($__internal_da5d9eeb8ba5f721e320167eaa451634049a47adf0e1837db0f6737539d32805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_b2b445f8ede28e739f3b8d7f3b8cb981f61b8d0271ec7ec8ed3f0a0a267ac118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b445f8ede28e739f3b8d7f3b8cb981f61b8d0271ec7ec8ed3f0a0a267ac118->enter($__internal_b2b445f8ede28e739f3b8d7f3b8cb981f61b8d0271ec7ec8ed3f0a0a267ac118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>Login | DeRiche</title>
    <style>
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
            border-radius: 20px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type=\"email\"] {
            margin-bottom: -1px;
            /*border-bottom-right-radius: 0;*/
            /*border-bottom-left-radius: 0;*/
        }
        .form-signin input[type=\"password\"] {
            margin-bottom: 20px;
            /*border-top-left-radius: 0;*/
            /*border-top-right-radius: 0;*/
            border-radius: 20px;
        }
        .login-box {
            margin: auto;
            width: 22%;
            background: white;
            /*height: 275px;*/
            border-radius: 15px;
            box-shadow: 0 1px 0 rgba(12, 13, 14, 0.1), 0 1px 3px rgba(12, 13, 14, 0.1), 0 4px 20px rgba(12, 13, 14, 0.035), 0 1px 1px rgba(12, 13, 14, 0.025);
        }
    </style>
        <link rel=\"stylesheet\"
          href=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\"
          integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style-blue-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>

<div>";
        // line 56
        echo "    <header>
        <h1 id=\"logo\" class=\"logo\" style=\"color: whitesmoke\">DeRiche Agency</h1>
    </header>

    <div class=\"login-box\">
        <form action=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Login Form");
        echo "\" method=\"post\" id=\"login\" class=\"form-signin\">
            <header><h5 class=\"form-signin-heading text-center\">Member Login</h5></header>
            <hr/>

            ";
        // line 65
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 66
            echo "
                ";
            // line 68
            echo "                    ";
            // line 69
            echo "                        ";
            // line 70
            echo "                    ";
            // line 71
            echo "                ";
            // line 72
            echo "                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                </div>

            ";
        }
        // line 80
        echo "
            <label for=\"username\" class=\"sr-only\">Username</label>
            <input class=\"form-control\" name=\"_username\" type=\"text\"
                   id=\"username\" placeholder=\"Username\" required autofocus><br>

            <label for=\"password\" class=\"sr-only\">Password</label>
            <input class=\"form-control\" name=\"_password\" type=\"password\"
                   id=\"password\" placeholder=\"Password\" required>

            <button class=\"btn btn-lg btn-success btn-block form-control\" type=\"submit\">Sign in</button>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"_target_path\" value=\"/\"/>
        </form>
    </div> <!-- /container -->

    <br/>
    <br/>

    <footer style=\"color: white\">
        Copyright &copy; 2017
        <span class=\"badge badge-danger\">Syed A.</span>
        <span class=\"badge badge-warning\">Ciro Amaral</span>
        <span class=\"badge badge-danger\">Samuel Seidel</span>
        <span class=\"badge badge-warning\">Ryan Garner</span>
        <span class=\"badge badge-warning\">Greg S.</span>


        <br/>

        Licensed for Education use.

        <a href=\"mailto:samuel@samistine.com\">samuel@samistine.com</a>
    </footer>
</div>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"
        integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"
        integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
        crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/tether.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>


";
        
        $__internal_da5d9eeb8ba5f721e320167eaa451634049a47adf0e1837db0f6737539d32805->leave($__internal_da5d9eeb8ba5f721e320167eaa451634049a47adf0e1837db0f6737539d32805_prof);

        
        $__internal_b2b445f8ede28e739f3b8d7f3b8cb981f61b8d0271ec7ec8ed3f0a0a267ac118->leave($__internal_b2b445f8ede28e739f3b8d7f3b8cb981f61b8d0271ec7ec8ed3f0a0a267ac118_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 124,  140 => 91,  127 => 80,  120 => 76,  114 => 72,  112 => 71,  110 => 70,  108 => 69,  106 => 68,  103 => 66,  101 => 65,  94 => 61,  87 => 56,  80 => 51,  76 => 50,  25 => 1,);
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
    <meta charset=\"UTF-8\"/>
    <title>Login | DeRiche</title>
    <style>
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
            border-radius: 20px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type=\"email\"] {
            margin-bottom: -1px;
            /*border-bottom-right-radius: 0;*/
            /*border-bottom-left-radius: 0;*/
        }
        .form-signin input[type=\"password\"] {
            margin-bottom: 20px;
            /*border-top-left-radius: 0;*/
            /*border-top-right-radius: 0;*/
            border-radius: 20px;
        }
        .login-box {
            margin: auto;
            width: 22%;
            background: white;
            /*height: 275px;*/
            border-radius: 15px;
            box-shadow: 0 1px 0 rgba(12, 13, 14, 0.1), 0 1px 3px rgba(12, 13, 14, 0.1), 0 4px 20px rgba(12, 13, 14, 0.035), 0 1px 1px rgba(12, 13, 14, 0.025);
        }
    </style>
        <link rel=\"stylesheet\"
          href=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\"
          integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link href=\"{{ asset('style-blue-theme.css') }}\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>

<div>{#<div class=\"container-fluid\" id=\"wrapper\">#}
    <header>
        <h1 id=\"logo\" class=\"logo\" style=\"color: whitesmoke\">DeRiche Agency</h1>
    </header>

    <div class=\"login-box\">
        <form action=\"{{ path('Login Form') }}\" method=\"post\" id=\"login\" class=\"form-signin\">
            <header><h5 class=\"form-signin-heading text-center\">Member Login</h5></header>
            <hr/>

            {% if error %}

                {#<style>#}
                    {#.login-box{#}
                        {#height: 340px;#}
                    {#}#}
                {#</style>#}
                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>

            {% endif %}

            <label for=\"username\" class=\"sr-only\">Username</label>
            <input class=\"form-control\" name=\"_username\" type=\"text\"
                   id=\"username\" placeholder=\"Username\" required autofocus><br>

            <label for=\"password\" class=\"sr-only\">Password</label>
            <input class=\"form-control\" name=\"_password\" type=\"password\"
                   id=\"password\" placeholder=\"Password\" required>

            <button class=\"btn btn-lg btn-success btn-block form-control\" type=\"submit\">Sign in</button>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <input type=\"hidden\" name=\"_target_path\" value=\"/\"/>
        </form>
    </div> <!-- /container -->

    <br/>
    <br/>

    <footer style=\"color: white\">
        Copyright &copy; 2017
        <span class=\"badge badge-danger\">Syed A.</span>
        <span class=\"badge badge-warning\">Ciro Amaral</span>
        <span class=\"badge badge-danger\">Samuel Seidel</span>
        <span class=\"badge badge-warning\">Ryan Garner</span>
        <span class=\"badge badge-warning\">Greg S.</span>


        <br/>

        Licensed for Education use.

        <a href=\"mailto:samuel@samistine.com\">samuel@samistine.com</a>
    </footer>
</div>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"
        integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"
        integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
        crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('static/tether.min.js') }}\"></script>
</body>
</html>


{#https://getbootstrap.com/docs/4.0/examples/signin/#}", "login.html.twig", "/Users/Ciro/Documents/GitHub/DeRiche-Agency-master-2/app/Resources/views/login.html.twig");
    }
}
