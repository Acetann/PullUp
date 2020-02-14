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

/* Contact/mail.html.twig */
class __TwigTemplate_5e14c45f97122a4c1711016bab3910d11e6f0990ed1150376ac560fe214bbabf extends Template
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
        echo "<html>
<head></head>
<body>
<p>
    ";
        // line 5
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Contact/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head></head>
<body>
<p>
    {{ message }}
</p>
</body>
</html>", "Contact/mail.html.twig", "C:\\TP\\templates\\Contact\\mail.html.twig");
    }
}
