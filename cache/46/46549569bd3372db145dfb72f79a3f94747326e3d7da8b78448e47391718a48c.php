<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* public/base.html */
class __TwigTemplate_98748af0847979b7af96c85fa862e7f6138a909349bb5c0cfccfe9e91cdfeb14 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>

";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "
</head>
<body>

\t<div class=\"container\">

";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "
\t</div>

</body>
</html>";
    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        // line 10
        echo "\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "public/base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  68 => 10,  65 => 9,  57 => 21,  55 => 18,  47 => 12,  45 => 9,  40 => 7,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "public/base.html", "/Users/jkuijer/Documents/vetorino-test/templates/public/base.html");
    }
}
