<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* fragments/navigation.html.twig */
class __TwigTemplate_44dcddc9548815ed603189088bac8d8e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<div class=\"filmoteca-logo\">
\t\t\t\t<img src='/image/R.png' alt='image' width=\"40\" height=\"40\">
\t\t\t\t<div class=\"logo-text\">Filmoteca</div>
\t\t\t</div>
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/list\">
\t\t\t\t\t\t<i class=\"fas fa-list\"></i>
\t\t\t\t\t\tListe des films
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/create\">
\t\t\t\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t\t\t\t\tAjouter un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/read\">
\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\tLire un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/update\">
\t\t\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t\t\tModifier un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/delete\">
\t\t\t\t\t\t<i class=\"fas fa-minus-circle\"></i>
\t\t\t\t\t\tSupprimer un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">
\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\tContact
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "fragments/navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<div class=\"filmoteca-logo\">
\t\t\t\t<img src='/image/R.png' alt='image' width=\"40\" height=\"40\">
\t\t\t\t<div class=\"logo-text\">Filmoteca</div>
\t\t\t</div>
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/list\">
\t\t\t\t\t\t<i class=\"fas fa-list\"></i>
\t\t\t\t\t\tListe des films
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/create\">
\t\t\t\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t\t\t\t\tAjouter un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/read\">
\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\tLire un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/update\">
\t\t\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t\t\tModifier un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/films/delete\">
\t\t\t\t\t\t<i class=\"fas fa-minus-circle\"></i>
\t\t\t\t\t\tSupprimer un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">
\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\tContact
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>", "fragments/navigation.html.twig", "/var/www/filmoteca/src/views/fragments/navigation.html.twig");
    }
}
