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

/* index.html.twig */
class __TwigTemplate_162efb14281dbcf756b6c0a2dc0290c3325965f12ab569c5fed5e31381d11e1f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/index.css\">
    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" href=\"favicon.ico\"/>
</head>
<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/Article/ListAll\">BlogBooks</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
            aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
        <!--<div class=\"row\">-->

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Article/ListAll\">Liste des articles</a>
            </li>
            ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 31)) {
            // line 32
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Article/Add\">Ajout d'un article</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Categorie\">Liste des categories</a>
                </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/Categorie/Add\">Ajout d'une categorie</a>
                    </li>


                            <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                                <a class=\"nav-link\" href=\"/Article/Validation\">Valider un article</a>
                            <li/>
                            <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                                <a class=\"nav-link\" href=\"/User/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\">Editer le profil</a>
                            <li/>

            ";
        }
        // line 51
        echo "
        </ul>

        <form class=\"form-inline\" method=\"post\" action=\"/Article/Cherche\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\">
            <input type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
        </form>

    </div>

</nav>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 64)) {
            // line 65
            echo "        <a class=\"navbar-brand\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 65), "prenom", [], "any", false, false, false, 65), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 67
            echo "        <a class=\"navbar-brand\" href=\"#\">Visiteur</a>
    ";
        }
        // line 69
        echo "    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">

                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

                    ";
        // line 83
        if ( !twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 83)) {
            // line 84
            echo "                        <a class=\"dropdown-item\" href=\"/inscription\">Inscription</a>
                        <a class=\"dropdown-item\" href=\"/login\">Connexion</a>
                    ";
        }
        // line 87
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 87)) {
            // line 88
            echo "                        <a class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 88), "role", [], "any", false, false, false, 88), "html", null, true);
            echo "</a>
                        <a class=\"dropdown-item\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 89), "email", [], "any", false, false, false, 89), "html", null, true);
            echo "</a>
                        <a class=\"dropdown-item\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 90), "nom", [], "any", false, false, false, 90), "html", null, true);
            echo "</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                    ";
        }
        // line 93
        echo "                    <div class=\"dropdown-divider\"></div>
                </div>
            </li>
            ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", true, true, false, 96)) {
            // line 97
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Api/Article/Last\">Affiche les 5 derniers articles</a>
                </li>
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 100), "roles", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 101
                echo "
            ";
                // line 102
                if (0 === twig_compare($context["role"], "administrateur")) {
                    // line 103
                    echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/Utilisateur\">Valider un utilisateur</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/ListUtilisateur\">Liste des utilisateurs</a>
                    </li>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "            ";
        }
        // line 112
        echo "            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">
                    Filtre Categorie
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 119
            echo "                        <a class=\"dropdown-item\" name=\"FiltreCategorie\" href=\"/Article/FiltreCategorie/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Id", [], "any", false, false, false, 119), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Nom", [], "any", false, false, false, 119), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                </div>
            </li>
        </ul>
    </div>
</nav>
";
        // line 126
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
";
        // line 133
        $this->displayBlock('javascript', $context, $blocks);
        // line 134
        echo "</body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "BlogBooks";
    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 126
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 133
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 133,  272 => 126,  266 => 12,  259 => 5,  252 => 134,  250 => 133,  242 => 127,  240 => 126,  233 => 121,  222 => 119,  218 => 118,  210 => 112,  207 => 111,  194 => 103,  192 => 102,  189 => 101,  185 => 100,  180 => 97,  178 => 96,  173 => 93,  167 => 90,  163 => 89,  158 => 88,  155 => 87,  150 => 84,  148 => 83,  132 => 69,  128 => 67,  122 => 65,  120 => 64,  105 => 51,  98 => 47,  81 => 32,  79 => 31,  59 => 13,  57 => 12,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}BlogBooks{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/index.css\">
    {% block css %}{% endblock %}
    <link rel=\"icon\" href=\"favicon.ico\"/>
</head>
<body>

<nav class=\"navbar sticky-top nav-pills navbar-expand-lg navbar-dark bg-dark\">

    <a class=\"navbar-brand\" href=\"/Article/ListAll\">BlogBooks</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\"
            aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
        <!--<div class=\"row\">-->

        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Article/ListAll\">Liste des articles</a>
            </li>
            {% if session.login is defined %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Article/Add\">Ajout d'un article</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Categorie\">Liste des categories</a>
                </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/Categorie/Add\">Ajout d'une categorie</a>
                    </li>


                            <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                                <a class=\"nav-link\" href=\"/Article/Validation\">Valider un article</a>
                            <li/>
                            <li class=\"nav-item mr-auto mt-2 mt-lg-0\">
                                <a class=\"nav-link\" href=\"/User/{{ session.login.id }}\">Editer le profil</a>
                            <li/>

            {% endif %}

        </ul>

        <form class=\"form-inline\" method=\"post\" action=\"/Article/Cherche\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" name=\"search\">
            <input type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\" value=\"Rechercher\" name=\"searchSubmit\">
        </form>

    </div>

</nav>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    {% if session.login is defined %}
        <a class=\"navbar-brand\" href=\"#\">{{ session.login.prenom }}</a>
    {% else %}
        <a class=\"navbar-brand\" href=\"#\">Visiteur</a>
    {% endif %}
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">

                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

                    {% if not session.login is defined %}
                        <a class=\"dropdown-item\" href=\"/inscription\">Inscription</a>
                        <a class=\"dropdown-item\" href=\"/login\">Connexion</a>
                    {% endif %}
                    {% if session.login is defined %}
                        <a class=\"dropdown-item\">{{session.login.role}}</a>
                        <a class=\"dropdown-item\">{{session.login.email}}</a>
                        <a class=\"dropdown-item\">{{session.login.nom}}</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                    {% endif %}
                    <div class=\"dropdown-divider\"></div>
                </div>
            </li>
            {% if session.login is defined %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Api/Article/Last\">Affiche les 5 derniers articles</a>
                </li>
            {% for role in session.login.roles %}

            {% if role == 'administrateur' %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/Utilisateur\">Valider un utilisateur</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/ListUtilisateur\">Liste des utilisateurs</a>
                    </li>
{% endif %}
{% endfor %}
            {% endif %}
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">
                    Filtre Categorie
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    {% for Categorie in listCat %}
                        <a class=\"dropdown-item\" name=\"FiltreCategorie\" href=\"/Article/FiltreCategorie/{{ Categorie.Id }}\">{{ Categorie.Nom }}</a>
                    {% endfor %}
                </div>
            </li>
        </ul>
    </div>
</nav>
{% block body %}{% endblock %}
<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
{% block javascript %}{% endblock %}
</body>
</html>

", "index.html.twig", "C:\\TP\\templates\\index.html.twig");
    }
}
