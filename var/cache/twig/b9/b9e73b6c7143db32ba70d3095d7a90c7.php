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

/* film/films.html.twig */
class __TwigTemplate_e3ba0ce2dc2a333715c3aca044077eb5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "film/films.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Liste des films";
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
        yield "    <h2 class=\"mb-4\">
        <i class=\"fas fa-list\" aria-hidden=\"true\"></i> Liste des films
    </h2>

    ";
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty(($context["films"] ?? null))) {
            // line 11
            yield "        <p class=\"alert alert-warning\">Aucun film disponible pour le moment.</p>
    ";
        } else {
            // line 13
            yield "        <table class=\"table table-bordered table-hover table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Année</th>
                    <th>Type</th>
                    <th>Réalisateur</th>
                    <th>Synopsis</th>
                    <th>Ajouté le</th>
                    <th>Modifié le</th>
                    <th> Supprimé le </th>
                    <th> Actions </th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["films"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                // line 31
                yield "                    <tr>
                        <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
                        <td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 33), "html", null, true);
                yield "</td>
                        <td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "year", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                        <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "type", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                        <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "director", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                        <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "synopsis", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                        <td>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["film"], "createdAt", [], "any", false, false, false, 38), "format", ["d/m/Y H:i"], "method", false, false, false, 38), "html", null, true);
                yield "</td>
                        <td>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["film"], "updatedAt", [], "any", false, false, false, 39), "format", ["d/m/Y H:i"], "method", false, false, false, 39), "html", null, true);
                yield "</td>
                        <td>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["film"], "deletedAt", [], "any", false, false, false, 40), "format", ["d/m/Y H:i"], "method", false, false, false, 40), "html", null, true);
                yield "</td>
                        <td> 
                        <form action=\"/films/update?id=";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 42), "html", null, true);
                yield "&verif=false\" method=\"POST\" class=\"bg-light p-4 rounded shadow\">
                            <button type=\"Submit\" class=\"btn btn-outline-success\">Modifier</button>
                        </form>
                        <form action=\"/films/delete?verif=false&id=";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\" method=\"POST\" class=\"bg-light p-4 rounded shadow\">
                            <button type=\"Submit\" class=\"btn btn-outline-danger\" >Supprimer</button>
                        </form>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['film'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "            </tbody>
        </table>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/films.html.twig";
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
        return array (  163 => 51,  151 => 45,  145 => 42,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  105 => 31,  101 => 30,  82 => 13,  78 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des films{% endblock %}

{% block content %}
    <h2 class=\"mb-4\">
        <i class=\"fas fa-list\" aria-hidden=\"true\"></i> Liste des films
    </h2>

    {% if films is empty %}
        <p class=\"alert alert-warning\">Aucun film disponible pour le moment.</p>
    {% else %}
        <table class=\"table table-bordered table-hover table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Année</th>
                    <th>Type</th>
                    <th>Réalisateur</th>
                    <th>Synopsis</th>
                    <th>Ajouté le</th>
                    <th>Modifié le</th>
                    <th> Supprimé le </th>
                    <th> Actions </th>
                </tr>
            </thead>

            <tbody>
                {% for film in films %}
                    <tr>
                        <td>{{ film.id }}</td>
                        <td>{{ film.title }}</td>
                        <td>{{ film.year }}</td>
                        <td>{{ film.type }}</td>
                        <td>{{ film.director }}</td>
                        <td>{{ film.synopsis }}</td>
                        <td>{{ film.createdAt.format('d/m/Y H:i') }}</td>
                        <td>{{ film.updatedAt.format('d/m/Y H:i') }}</td>
                        <td>{{ film.deletedAt.format('d/m/Y H:i') }}</td>
                        <td> 
                        <form action=\"/films/update?id={{ film.id }}&verif=false\" method=\"POST\" class=\"bg-light p-4 rounded shadow\">
                            <button type=\"Submit\" class=\"btn btn-outline-success\">Modifier</button>
                        </form>
                        <form action=\"/films/delete?verif=false&id={{ film.id }}\" method=\"POST\" class=\"bg-light p-4 rounded shadow\">
                            <button type=\"Submit\" class=\"btn btn-outline-danger\" >Supprimer</button>
                        </form>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}", "film/films.html.twig", "/var/www/filmoteca/src/views/film/films.html.twig");
    }
}
