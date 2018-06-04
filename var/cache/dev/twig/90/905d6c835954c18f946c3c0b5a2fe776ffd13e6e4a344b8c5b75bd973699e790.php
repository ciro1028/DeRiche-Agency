<?php

/* @App/base.html.twig */
class __TwigTemplate_0e0d109b5cccc97b364b3f35751391e34944379ef2d7b6d3e18f881c55ef3d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eac1429bbea4a3a6f558e6a74803da456e0413966151b34d5bbda2fef7f7d017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac1429bbea4a3a6f558e6a74803da456e0413966151b34d5bbda2fef7f7d017->enter($__internal_eac1429bbea4a3a6f558e6a74803da456e0413966151b34d5bbda2fef7f7d017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        $__internal_35494fd7afd4367b1a087e0d502870a698699bfac7f3ce918aa9ceb32cf12574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35494fd7afd4367b1a087e0d502870a698699bfac7f3ce918aa9ceb32cf12574->enter($__internal_35494fd7afd4367b1a087e0d502870a698699bfac7f3ce918aa9ceb32cf12574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<style>
    .nav-pills > li {
        margin: 3px 0px;
    }
    .nav-pills > li > a.active{
        border-radius:15px;
        border-style: solid !important;
        border-width: 0px;
        border-color: #2c15bf !important;
        /* color: DarkCyan !important; */
        color: white !important;
        /* background-color: DarkCyan !important; */
        background-color: #2c15bf !important;
        opacity: 0.8 !important;
    }
    .nav-link-color {
        color: #2c15bf !important;
    }
    .link:hover {
        color: white !important;
        border-style: solid !important;
        border-width: 0px !important;
        border-color: #2c15bf !important;
        border-radius:15px !important;
        background-color: #2c15bf !important;
        opacity: 0.4 !important;
    }
</style>
    ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/bootstrap-4.0.0-beta/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "theme"), "method")) {
            // line 38
            echo "        ";
            if ((is_string($__internal_0e5adf0d8df560b665eefb03a2e2285ad5ffe0b3b1489b1a329cece074c8e497 = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "theme"), "method")) && is_string($__internal_02b3daaedc9730af70a28c0cb6a5e379921e4f1154f7882a47f374bae62a150c = "default") && ('' === $__internal_02b3daaedc9730af70a28c0cb6a5e379921e4f1154f7882a47f374bae62a150c || 0 === strpos($__internal_0e5adf0d8df560b665eefb03a2e2285ad5ffe0b3b1489b1a329cece074c8e497, $__internal_02b3daaedc9730af70a28c0cb6a5e379921e4f1154f7882a47f374bae62a150c)))) {
                // line 39
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style-blue-theme.css"), "html", null, true);
                echo "\">
        ";
            } else {
                // line 41
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("style-" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "theme"), "method")) . ".css")), "html", null, true);
                echo "\">
        ";
            }
            // line 43
            echo "    ";
        } else {
            // line 44
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style-blue-theme.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 46
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

    <link rel=\"preload\" as=\"script\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/jquery/js.cookie.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"preload\" as=\"script\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/popper.js"), "html", null, true);
        echo "\">
    <link rel=\"preload\" as=\"script\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/bootstrap-4.0.0-beta/js/bootstrap.min.js"), "html", null, true);
        echo "\">
    <link rel=\"preload\" as=\"script\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/tether.min.js"), "html", null, true);
        echo "\">
    <link rel=\"preload\" as=\"script\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/underscore/underscore-min.js"), "html", null, true);
        echo "\">
</head>
<body>

<div class=\"container-fluid\" id=\"wrapper\">
    <header>
        <h1 id=\"logo\" class=\"logo\">DeRiche Agency</h1>
    </header>
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-3\">
            <ul class=\"nav flex-column nav-pills\">
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link-color link\" href=\"/\">Home</a>
                </li>

                ";
        // line 68
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_WRITER")) {
            // line 69
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note");
            echo "\">Create Note or Print</a>
                    </li>
                ";
        }
        // line 73
        echo "
                ";
        // line 74
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_REVIEWER")) {
            // line 75
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reviewer");
            echo "\">Review Notes</a>
                    </li>
                ";
        }
        // line 79
        echo "
                ";
        // line 80
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 81
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\">Admin Dashboard</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("audit");
            echo "\">Auditing Tools</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("individuals");
            echo "\">Individuals</a>
                    </li>
                ";
        }
        // line 91
        echo "
                ";
        // line 93
        echo "                ";
        // line 94
        echo "                ";
        // line 95
        echo "                ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 96
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Log Out</a>
                    </li>
                ";
        } else {
            // line 100
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"";
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Login Form");
            echo "\">Log In</a>
                    </li>
                ";
        }
        // line 104
        echo "            </ul>
        </div>
        <div class=\"col-xs-12 col-md-9\">
            ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "        </div>
    </div>

    <!-- Modals -->
    <div class=\"modal fade\" id=\"confirmModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confirmation Dialog</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <br/>
                    <div class=\"alert alert-warning\" role=\"alert\">
                        ";
        // line 125
        echo "                        <span class=\"warning-message\">
                            Are you sure you wish to do that?
                        </span>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-warning confirm\">Confirm</a>
                </div>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/bootstrap-4.0.0-beta/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/underscore/underscore-min.js"), "html", null, true);
        echo "\"></script>

    <script>
        // Used for navigation menu.
        \$(function () {
            if ((location.pathname.split(\"/\")[1]) === \"\") {
                \$(\"a.nav-link:contains('Home')\").addClass('active');
            } else {
                var activenav = \$('ul.nav a[href^=\"/' + location.pathname.split(\"/\")[1] + '\"]');
                activenav.addClass('active');
                // If we're on a form page then we set the \"Create Form\" element to active as well.
                if (activenav.parent().attr('id') == \"formsdropdown\")
                    \$(\"#createform\").addClass('active');
            }
        });
    </script>
    <script><!--Modal-->
        //When clicked
        \$('.confirm-link').on('click', function (e) {
            //e.preventDefault();

            //Pass data to shown handler
            var link = \$(this).data('link');
            var confirmTitle = \$(this).data('confirm-title');
            var confirmMessage = \$(this).data('confirm-message');
            var bootstrapColor = \$(this).data('bootstrap-color');

            var modal = \$('#confirmModal');

            modal.find('.modal-title').html(confirmTitle);
            modal.find('.warning-message').html(confirmMessage);
            modal.find('.confirm').attr('class', 'btn confirm  btn-' + bootstrapColor).html(confirmTitle);
            modal.find('.alert.alert-warning').attr('class', 'alert alert-' + bootstrapColor);

            modal.data({
                'type': 'link',
                'link': link
            }).modal('show');
        });

        \$('#confirmModal .confirm').click(function () {
            var type = \$('#confirmModal').data('type');

            switch (type) {
                // handle redirect here
                case 'link': {
                    var link = \$('#confirmModal').data('link');
                    location.href = link;
                    \$('#confirmModal').modal('hide');
                }
                case 'delete': {

                }
            }
        });

    </script>
    ";
        // line 198
        $this->displayBlock('javascripts', $context, $blocks);
        // line 199
        echo "    <footer>
        Copyright &copy; 2017
        <span class=\"badge badge-danger\">Syed A.</span>
        <span class=\"badge badge-warning\">Ciro Amaral</span>
        <span class=\"badge badge-danger\">Samuel Seidel</span>
        <span class=\"badge badge-warning\">Ryan Garner</span>
        <span class=\"badge badge-warning\">Greg S.</span>

        <br/>

        Development Support: <a href=\"mailto:samuel@samistine.com\">samuel@samistine.com</a>
        <a href=\"tel:678-576-7222\">678-576-7222</a><br/>
        <a href=\"https://www.youtube.com/playlist?list=PLBu3cncVJ8THV69ApJscHmhCorQJpyUC1\" target=\"_blank\">Help -
            YouTube Playlist</a>
    </footer>
</div>
";
        // line 216
        echo "    ";
        // line 217
        echo "    ";
        // line 218
        echo "        ";
        // line 219
        echo "        ";
        // line 220
        echo "    ";
        // line 222
        echo "<script type=\"text/javascript\">
    \$(function () {
        \$(\".color-pick\").click(function () {
            var colorName = \$(this).attr('id');
            Cookies.remove('theme');
            Cookies.set(\"theme\", colorName);
            location.reload();
        });
    });
</script>
</body>
</html>";
        
        $__internal_eac1429bbea4a3a6f558e6a74803da456e0413966151b34d5bbda2fef7f7d017->leave($__internal_eac1429bbea4a3a6f558e6a74803da456e0413966151b34d5bbda2fef7f7d017_prof);

        
        $__internal_35494fd7afd4367b1a087e0d502870a698699bfac7f3ce918aa9ceb32cf12574->leave($__internal_35494fd7afd4367b1a087e0d502870a698699bfac7f3ce918aa9ceb32cf12574_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b9cc4ad2e22f40af4145892310ea70978639e092f5a63e9c8052aac02cfedd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b9cc4ad2e22f40af4145892310ea70978639e092f5a63e9c8052aac02cfedd4->enter($__internal_4b9cc4ad2e22f40af4145892310ea70978639e092f5a63e9c8052aac02cfedd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ba51d859ce53d99756e429069c551a1622781309258da6d2c187dee8a6560d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba51d859ce53d99756e429069c551a1622781309258da6d2c187dee8a6560d3->enter($__internal_6ba51d859ce53d99756e429069c551a1622781309258da6d2c187dee8a6560d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home | Dashboard";
        
        $__internal_6ba51d859ce53d99756e429069c551a1622781309258da6d2c187dee8a6560d3->leave($__internal_6ba51d859ce53d99756e429069c551a1622781309258da6d2c187dee8a6560d3_prof);

        
        $__internal_4b9cc4ad2e22f40af4145892310ea70978639e092f5a63e9c8052aac02cfedd4->leave($__internal_4b9cc4ad2e22f40af4145892310ea70978639e092f5a63e9c8052aac02cfedd4_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_189245059662cc45e6b3ee7f5bdfd0477a9b0721c033f1883bdf6309d14b4b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189245059662cc45e6b3ee7f5bdfd0477a9b0721c033f1883bdf6309d14b4b72->enter($__internal_189245059662cc45e6b3ee7f5bdfd0477a9b0721c033f1883bdf6309d14b4b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0df209ae142381f0d55a841be32a07121d3f49d21e7d082096e0dbdc8cf91272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df209ae142381f0d55a841be32a07121d3f49d21e7d082096e0dbdc8cf91272->enter($__internal_0df209ae142381f0d55a841be32a07121d3f49d21e7d082096e0dbdc8cf91272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0df209ae142381f0d55a841be32a07121d3f49d21e7d082096e0dbdc8cf91272->leave($__internal_0df209ae142381f0d55a841be32a07121d3f49d21e7d082096e0dbdc8cf91272_prof);

        
        $__internal_189245059662cc45e6b3ee7f5bdfd0477a9b0721c033f1883bdf6309d14b4b72->leave($__internal_189245059662cc45e6b3ee7f5bdfd0477a9b0721c033f1883bdf6309d14b4b72_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad54938c4f5cc3e09e2ce9de92e9e8385b2350b201c9b191d23be8166eea3712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad54938c4f5cc3e09e2ce9de92e9e8385b2350b201c9b191d23be8166eea3712->enter($__internal_ad54938c4f5cc3e09e2ce9de92e9e8385b2350b201c9b191d23be8166eea3712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d05264579e758160130d57cf3ad6c2cf8cf97667d95b16cd55aa4a6d2df378e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d05264579e758160130d57cf3ad6c2cf8cf97667d95b16cd55aa4a6d2df378e->enter($__internal_6d05264579e758160130d57cf3ad6c2cf8cf97667d95b16cd55aa4a6d2df378e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d05264579e758160130d57cf3ad6c2cf8cf97667d95b16cd55aa4a6d2df378e->leave($__internal_6d05264579e758160130d57cf3ad6c2cf8cf97667d95b16cd55aa4a6d2df378e_prof);

        
        $__internal_ad54938c4f5cc3e09e2ce9de92e9e8385b2350b201c9b191d23be8166eea3712->leave($__internal_ad54938c4f5cc3e09e2ce9de92e9e8385b2350b201c9b191d23be8166eea3712_prof);

    }

    // line 198
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_068348bd1ac7c9b735ecd10a2bbc15b4002690e1679024157dd29cda6b61ee93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068348bd1ac7c9b735ecd10a2bbc15b4002690e1679024157dd29cda6b61ee93->enter($__internal_068348bd1ac7c9b735ecd10a2bbc15b4002690e1679024157dd29cda6b61ee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b144f4d7b7fc7925072a4ba6213e43ea6d5bf9b0f68bde467a5b0ef4d906dc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b144f4d7b7fc7925072a4ba6213e43ea6d5bf9b0f68bde467a5b0ef4d906dc6f->enter($__internal_b144f4d7b7fc7925072a4ba6213e43ea6d5bf9b0f68bde467a5b0ef4d906dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b144f4d7b7fc7925072a4ba6213e43ea6d5bf9b0f68bde467a5b0ef4d906dc6f->leave($__internal_b144f4d7b7fc7925072a4ba6213e43ea6d5bf9b0f68bde467a5b0ef4d906dc6f_prof);

        
        $__internal_068348bd1ac7c9b735ecd10a2bbc15b4002690e1679024157dd29cda6b61ee93->leave($__internal_068348bd1ac7c9b735ecd10a2bbc15b4002690e1679024157dd29cda6b61ee93_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 198,  426 => 107,  409 => 34,  391 => 5,  370 => 222,  368 => 220,  366 => 219,  364 => 218,  362 => 217,  360 => 216,  342 => 199,  340 => 198,  280 => 141,  276 => 140,  272 => 139,  268 => 138,  264 => 137,  250 => 125,  232 => 108,  230 => 107,  225 => 104,  219 => 101,  216 => 100,  210 => 97,  207 => 96,  204 => 95,  202 => 94,  200 => 93,  197 => 91,  191 => 88,  185 => 85,  179 => 82,  176 => 81,  174 => 80,  171 => 79,  165 => 76,  162 => 75,  160 => 74,  157 => 73,  151 => 70,  148 => 69,  146 => 68,  128 => 53,  124 => 52,  120 => 51,  116 => 50,  112 => 49,  108 => 48,  102 => 46,  96 => 44,  93 => 43,  87 => 41,  81 => 39,  78 => 38,  76 => 37,  72 => 36,  69 => 35,  67 => 34,  35 => 5,  29 => 1,);
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
    <title>{% block title %}Home | Dashboard{% endblock %}</title>
<style>
    .nav-pills > li {
        margin: 3px 0px;
    }
    .nav-pills > li > a.active{
        border-radius:15px;
        border-style: solid !important;
        border-width: 0px;
        border-color: #2c15bf !important;
        /* color: DarkCyan !important; */
        color: white !important;
        /* background-color: DarkCyan !important; */
        background-color: #2c15bf !important;
        opacity: 0.8 !important;
    }
    .nav-link-color {
        color: #2c15bf !important;
    }
    .link:hover {
        color: white !important;
        border-style: solid !important;
        border-width: 0px !important;
        border-color: #2c15bf !important;
        border-radius:15px !important;
        background-color: #2c15bf !important;
        opacity: 0.4 !important;
    }
</style>
    {% block stylesheets %}{% endblock %}

    <link rel=\"stylesheet\" href=\"{{ asset('static/bootstrap-4.0.0-beta/css/bootstrap.min.css') }}\">
    {% if app.request.cookies.has('theme') %}
        {% if app.request.cookies.get('theme') starts with 'default' %}
            <link rel=\"stylesheet\" href=\"{{ asset('style-blue-theme.css') }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('style-' ~ app.request.cookies.get('theme') ~ '.css') }}\">
        {% endif %}
    {% else %}
        <link rel=\"stylesheet\" href=\"{{ asset('style-blue-theme.css') }}\">
    {% endif %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>

    <link rel=\"preload\" as=\"script\" href=\"{{ asset('static/jquery/jquery-3.2.1.min.js') }}\">
    <script src=\"{{ asset('static/jquery/js.cookie.min.js')}}\"></script>
    <link rel=\"preload\" as=\"script\" href=\"{{ asset('static/popper.js') }}\">
    <link rel=\"preload\" as=\"script\" href=\"{{ asset('static/bootstrap-4.0.0-beta/js/bootstrap.min.js') }}\">
    <link rel=\"preload\" as=\"script\" href=\"{{ asset('static/tether.min.js') }}\">
    <link rel=\"preload\" as=\"script\" href=\"{{ asset('static/underscore/underscore-min.js') }}\">
</head>
<body>

<div class=\"container-fluid\" id=\"wrapper\">
    <header>
        <h1 id=\"logo\" class=\"logo\">DeRiche Agency</h1>
    </header>
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-3\">
            <ul class=\"nav flex-column nav-pills\">
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link-color link\" href=\"/\">Home</a>
                </li>

                {% if is_granted('ROLE_WRITER') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"{{ path('note') }}\">Create Note or Print</a>
                    </li>
                {% endif %}

                {% if is_granted('ROLE_REVIEWER') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"{{ path('reviewer') }}\">Review Notes</a>
                    </li>
                {% endif %}

                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"{{ path('admin') }}\">Admin Dashboard</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"{{ path('audit') }}\">Auditing Tools</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"{{ path('individuals') }}\">Individuals</a>
                    </li>
                {% endif %}

                {#<li class=\"nav-item\">#}
                {#<a class=\"nav-link\" href=\"/formretrieval\">Retrieve Form</a>#}
                {#</li>#}
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"{{ path('logout') }}\">Log Out</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-color link\" href=\"{{ path('Login Form') }}\">Log In</a>
                    </li>
                {% endif %}
            </ul>
        </div>
        <div class=\"col-xs-12 col-md-9\">
            {% block body %}{% endblock %}
        </div>
    </div>

    <!-- Modals -->
    <div class=\"modal fade\" id=\"confirmModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confirmation Dialog</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <br/>
                    <div class=\"alert alert-warning\" role=\"alert\">
                        {#<strong>Confirmation: </strong>#}
                        <span class=\"warning-message\">
                            Are you sure you wish to do that?
                        </span>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-warning confirm\">Confirm</a>
                </div>
            </div>
        </div>
    </div>

    <script src=\"{{ asset('static/jquery/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('static/popper.js') }}\"></script>
    <script src=\"{{ asset('static/bootstrap-4.0.0-beta/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('static/tether.min.js') }}\"></script>
    <script src=\"{{ asset('static/underscore/underscore-min.js') }}\"></script>

    <script>
        // Used for navigation menu.
        \$(function () {
            if ((location.pathname.split(\"/\")[1]) === \"\") {
                \$(\"a.nav-link:contains('Home')\").addClass('active');
            } else {
                var activenav = \$('ul.nav a[href^=\"/' + location.pathname.split(\"/\")[1] + '\"]');
                activenav.addClass('active');
                // If we're on a form page then we set the \"Create Form\" element to active as well.
                if (activenav.parent().attr('id') == \"formsdropdown\")
                    \$(\"#createform\").addClass('active');
            }
        });
    </script>
    <script><!--Modal-->
        //When clicked
        \$('.confirm-link').on('click', function (e) {
            //e.preventDefault();

            //Pass data to shown handler
            var link = \$(this).data('link');
            var confirmTitle = \$(this).data('confirm-title');
            var confirmMessage = \$(this).data('confirm-message');
            var bootstrapColor = \$(this).data('bootstrap-color');

            var modal = \$('#confirmModal');

            modal.find('.modal-title').html(confirmTitle);
            modal.find('.warning-message').html(confirmMessage);
            modal.find('.confirm').attr('class', 'btn confirm  btn-' + bootstrapColor).html(confirmTitle);
            modal.find('.alert.alert-warning').attr('class', 'alert alert-' + bootstrapColor);

            modal.data({
                'type': 'link',
                'link': link
            }).modal('show');
        });

        \$('#confirmModal .confirm').click(function () {
            var type = \$('#confirmModal').data('type');

            switch (type) {
                // handle redirect here
                case 'link': {
                    var link = \$('#confirmModal').data('link');
                    location.href = link;
                    \$('#confirmModal').modal('hide');
                }
                case 'delete': {

                }
            }
        });

    </script>
    {% block javascripts %}{% endblock %}
    <footer>
        Copyright &copy; 2017
        <span class=\"badge badge-danger\">Syed A.</span>
        <span class=\"badge badge-warning\">Ciro Amaral</span>
        <span class=\"badge badge-danger\">Samuel Seidel</span>
        <span class=\"badge badge-warning\">Ryan Garner</span>
        <span class=\"badge badge-warning\">Greg S.</span>

        <br/>

        Development Support: <a href=\"mailto:samuel@samistine.com\">samuel@samistine.com</a>
        <a href=\"tel:678-576-7222\">678-576-7222</a><br/>
        <a href=\"https://www.youtube.com/playlist?list=PLBu3cncVJ8THV69ApJscHmhCorQJpyUC1\" target=\"_blank\">Help -
            YouTube Playlist</a>
    </footer>
</div>
{#<div class=\"row\">#}
    {#<div class=\"col-md-2\" style=\"margin-left: 27px;\"></div>#}
    {#<div style=\"width: 3.3%; background-color:#FFFFFF;\">#}
        {#<span class=\"color-pick\" id=\"default-theme\"></span>#}
        {#<span class=\"color-pick\" id=\"blue-theme\"></span>#}
    {#</div>#}
{#</div>#}
<script type=\"text/javascript\">
    \$(function () {
        \$(\".color-pick\").click(function () {
            var colorName = \$(this).attr('id');
            Cookies.remove('theme');
            Cookies.set(\"theme\", colorName);
            location.reload();
        });
    });
</script>
</body>
</html>", "@App/base.html.twig", "/Users/Ciro/Documents/GitHub/DeRiche-Agency-master-2/app/Resources/views/base.html.twig");
    }
}
