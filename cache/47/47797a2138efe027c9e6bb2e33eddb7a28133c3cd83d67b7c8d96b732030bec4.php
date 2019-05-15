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

/* api.html */
class __TwigTemplate_bd010ea2ba3caa0770864181af9fbec1b3bee426042659b4ceb16d3bd88bc4fd extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Api</title>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <style>
      h1, h2, h3, h4, h5, h6 {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
          <h1>";
        // line 17
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
          <p>
            ";
        // line 19
        echo twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "api.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  53 => 17,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "api.html", "/var/www/html/riego/server/tpl/api.html");
    }
}
