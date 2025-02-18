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

/* film/update.html.twig */
class __TwigTemplate_27bb964d30f8b454896482ebb1d52299 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "film/update.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modification d'un film";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-8\">
                <div class=\"card shadow-lg\">
                <div class=\"mt-4 text-center\">
                    <form method=\"POST\" action=\"/films/update?verif=false\">
                        <label for=\"id\" class=\"form-label\"> Quel film voulez-vous modifier ?</label>
                        <input type=\"text\" id=\"id\" name=\"id\" class=\"form-control\" placeholder=\"Identifiant du film\" required>
                        <button type=\"submit\" class=\"btn btn-lg btn-danger\">
                            <i class=\"bi bi-trash-fill\"></i> Modifier le film
                        </button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/update.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Modification d'un film{% endblock %}

{% block content %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-8\">
                <div class=\"card shadow-lg\">
                <div class=\"mt-4 text-center\">
                    <form method=\"POST\" action=\"/films/update?verif=false\">
                        <label for=\"id\" class=\"form-label\"> Quel film voulez-vous modifier ?</label>
                        <input type=\"text\" id=\"id\" name=\"id\" class=\"form-control\" placeholder=\"Identifiant du film\" required>
                        <button type=\"submit\" class=\"btn btn-lg btn-danger\">
                            <i class=\"bi bi-trash-fill\"></i> Modifier le film
                        </button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "film/update.html.twig", "/var/www/filmoteca/src/views/film/update.html.twig");
    }
}
