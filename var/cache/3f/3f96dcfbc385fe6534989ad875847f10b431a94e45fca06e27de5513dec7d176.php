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

/* User/accueil.html.twig */
class __TwigTemplate_fa3fd8b2da10cdf90d700ed94226e0a6d4ce512f869feae7384e436708df43ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
    <meta charset=\"UTF-8\">

    <meta name=\"viewport\" content=\"width:device-width, initial-scale=1.0\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/styles.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/responsive.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>


    <script src=\"https://use.typekit.net/bdw7xbl.js\"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
";
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "
    <section class=\"banner clearfix\">
        <div class=\"overlay\"></div>

        <header class=\"top_header clearfix\">
            <nav>

                <a href=\"/inscription\" class=\"popup\">Connexion/Inscription</a>

                <ul>
                    <li class=\"active\">
                        <a href=\"#\">
                            <img src=\"/assets/images/fr.png\" alt=\"English\" title=\"English\"> <span>FR</span>
                        </a>
                    </li>
                    <li><a href=\"#\">Portugese</a></li>
                    <li><a href=\"#\">French</a></li>
                    <li><a href=\"#\">Spanish</a></li>
                </ul>
            </nav>
        </header>

        <div class=\"intro clearfix\">
            <div class=\"wrapper\">
                <h1>
                    <br>
                    <img src=\"/assets/images/logo.svg\" alt=\"Pullup Social\" title=\"Pullup Social\">
                </h1>
                <p>Give me an Objective !</p>

                <div class=\"download_mobile_apps_buttons\">
                    <a href=\"#\" class=\"button\">
                        <img src=\"/assets/images/appstore.png\" alt=\"Download iOS Application\" title=\"Download iOS Application\">
                    </a>
                    <a href=\"#\" class=\"button\">
                        <img src=\"/assets/images/playstore.png\" alt=\"Download Android Application\" title=\"Download Android Application\">
                    </a>
                </div>
            </div>
        </div>


    </section>
    <!-- END Banner -->

    <!-- Footer -->
    <footer class=\"footer clearfix\">
        <div class=\"footer_column\">
            <h3>Download</h3>
            <ul>
                <li><a href=\"#\">Téléchargement pour iOS</a></li>
                <li><a href=\"#\">Téléchargement pour Android</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Communité</h3>
            <ul>
                <li><a href=\"#\">Blog</a></li>
                <li><a href=\"#\">Technologie</a></li>
                <li><a href=\"#\">Support</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Compagnie</h3>
            <ul>
                <li><a href=\"#\">Equipe</a></li>
                <li><a href=\"/Contact\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Partners</h3>
            <ul>
                <li><a href=\"#\">Cesi Alternance</a></li>
                <li><a href=\"#\">Rencontre1Bof.com</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Legal</h3>
            <ul>
                <li><a href=\"/Admin\">Admin</a></li>
                <li><a href=\"/condition\">Conditions générales</a></li>
            </ul>
        </div>
    </footer>
    <!-- END Footer -->

    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery.min.js\"></script>

    <!-- Magnific Popup -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js\"></script>

    <!-- Lity -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.js\"></script>

    <!-- Scripts --><script src=\"../../../Users/paulf/Desktop/Nouveau%20dossier/assets/js/main.js\"></script>
    ";
        // line 133
        $this->displayBlock('javascript', $context, $blocks);
        // line 134
        echo "

";
    }

    // line 133
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "User/accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 133,  195 => 134,  193 => 133,  95 => 37,  91 => 36,  56 => 3,  52 => 2,  48 => 36,  45 => 35,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}

    <meta charset=\"UTF-8\">

    <meta name=\"viewport\" content=\"width:device-width, initial-scale=1.0\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/styles.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/responsive.css\">
    <link rel=\"icon\" href=\"/uploads/images/favicon.ico\"/>


    <script src=\"https://use.typekit.net/bdw7xbl.js\"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
{% endblock %}

{% block body %}

    <section class=\"banner clearfix\">
        <div class=\"overlay\"></div>

        <header class=\"top_header clearfix\">
            <nav>

                <a href=\"/inscription\" class=\"popup\">Connexion/Inscription</a>

                <ul>
                    <li class=\"active\">
                        <a href=\"#\">
                            <img src=\"/assets/images/fr.png\" alt=\"English\" title=\"English\"> <span>FR</span>
                        </a>
                    </li>
                    <li><a href=\"#\">Portugese</a></li>
                    <li><a href=\"#\">French</a></li>
                    <li><a href=\"#\">Spanish</a></li>
                </ul>
            </nav>
        </header>

        <div class=\"intro clearfix\">
            <div class=\"wrapper\">
                <h1>
                    <br>
                    <img src=\"/assets/images/logo.svg\" alt=\"Pullup Social\" title=\"Pullup Social\">
                </h1>
                <p>Give me an Objective !</p>

                <div class=\"download_mobile_apps_buttons\">
                    <a href=\"#\" class=\"button\">
                        <img src=\"/assets/images/appstore.png\" alt=\"Download iOS Application\" title=\"Download iOS Application\">
                    </a>
                    <a href=\"#\" class=\"button\">
                        <img src=\"/assets/images/playstore.png\" alt=\"Download Android Application\" title=\"Download Android Application\">
                    </a>
                </div>
            </div>
        </div>


    </section>
    <!-- END Banner -->

    <!-- Footer -->
    <footer class=\"footer clearfix\">
        <div class=\"footer_column\">
            <h3>Download</h3>
            <ul>
                <li><a href=\"#\">Téléchargement pour iOS</a></li>
                <li><a href=\"#\">Téléchargement pour Android</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Communité</h3>
            <ul>
                <li><a href=\"#\">Blog</a></li>
                <li><a href=\"#\">Technologie</a></li>
                <li><a href=\"#\">Support</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Compagnie</h3>
            <ul>
                <li><a href=\"#\">Equipe</a></li>
                <li><a href=\"/Contact\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Partners</h3>
            <ul>
                <li><a href=\"#\">Cesi Alternance</a></li>
                <li><a href=\"#\">Rencontre1Bof.com</a></li>
            </ul>
        </div>
        <div class=\"footer_column\">
            <h3>Legal</h3>
            <ul>
                <li><a href=\"/Admin\">Admin</a></li>
                <li><a href=\"/condition\">Conditions générales</a></li>
            </ul>
        </div>
    </footer>
    <!-- END Footer -->

    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery.min.js\"></script>

    <!-- Magnific Popup -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js\"></script>

    <!-- Lity -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lity/2.1.1/lity.min.js\"></script>

    <!-- Scripts --><script src=\"../../../Users/paulf/Desktop/Nouveau%20dossier/assets/js/main.js\"></script>
    {% block javascript %} {% endblock %}


{% endblock %}", "User/accueil.html.twig", "/home/mamie-a-jour/www/TP/templates/User/accueil.html.twig");
    }
}
