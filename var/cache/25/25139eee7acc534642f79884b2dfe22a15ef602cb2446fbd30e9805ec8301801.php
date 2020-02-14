<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* User/login2.html.twig */
class __TwigTemplate_e35c302d7684c74728598f48875d3a6cec6fda184f2230761cb2919448fb6af4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">




<head>

    <meta charset=\"UTF-8\">

    <title> Connexion</title>

    <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/styleconnexion.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>

</head>





<body id=\"connexion\">

<br>
<br>
<br>
<div class=\"grid\">
    <center><a href=\"/\" ><img src=\"/assets/images/logo.svg\"></a></center>
    <br>
    </div>
<div class=\"content\">
    <div class=\"container\">
        <p>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errconnexion", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
        <div class=\"menu\">
            <a href=\"login\" class=\"btn-connexion\">
                <h2>Administrateur</h2>
            </a>

        </div>

        <div class=\"connexion\">

            <form class=\"contact-form\" name=\"connexion\" method=\"post\"  action=\"/Admin\">

                <label>Email</label>

                <input name=\"email\" placeholder=\"\" type=\"text\">


                <label>Mot de passe</label>

                <input name=\"password\" placeholder=\"\" type=\"password\">

                <br>
                <br>
                <br>
                <br>
                <!-- Captcha -->

                    <input class=\"submit\" value=\"login\" type=\"submit\">
                </form>
                </body>
                <!-- -->

            </form>

            <hr>


        </div>



    </div>


</body>




</html>";
    }

    public function getTemplateName()
    {
        return "User/login2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"fr\">




<head>

    <meta charset=\"UTF-8\">

    <title> Connexion</title>

    <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/styleconnexion.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>

</head>





<body id=\"connexion\">

<br>
<br>
<br>
<div class=\"grid\">
    <center><a href=\"/\" ><img src=\"/assets/images/logo.svg\"></a></center>
    <br>
    </div>
<div class=\"content\">
    <div class=\"container\">
        <p>{{ session.errconnexion }}</p>
        <div class=\"menu\">
            <a href=\"login\" class=\"btn-connexion\">
                <h2>Administrateur</h2>
            </a>

        </div>

        <div class=\"connexion\">

            <form class=\"contact-form\" name=\"connexion\" method=\"post\"  action=\"/Admin\">

                <label>Email</label>

                <input name=\"email\" placeholder=\"\" type=\"text\">


                <label>Mot de passe</label>

                <input name=\"password\" placeholder=\"\" type=\"password\">

                <br>
                <br>
                <br>
                <br>
                <!-- Captcha -->

                    <input class=\"submit\" value=\"login\" type=\"submit\">
                </form>
                </body>
                <!-- -->

            </form>

            <hr>


        </div>



    </div>


</body>




</html>", "User/login2.html.twig", "C:\\TP\\templates\\User\\login2.html.twig");
    }
}
