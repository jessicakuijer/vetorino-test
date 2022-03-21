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

/* public/index.html */
class __TwigTemplate_c7077f0d29cd883ebd6492adae5380d0e234ebdcd208fb076b8a22e6f06f6d6e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "public/base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["title"] = "Homepage";
        // line 3
        $this->parent = $this->loadTemplate("public/base.html", "public/index.html", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
\t<div class=\"page-header\">
\t\t<h1>Homepage</h1>
\t</div>

\t<!-- <form class=\"form-inline\" method=\"get\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["app_url"] ?? null), "html", null, true);
        echo "/hoverkraft/search\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" class=\"form-control\" name=\"*has\" placeholder=\"Search\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Search</button>
\t</form> -->

\t<!-- <hr> -->

\t<p>Blocks</p>

";
        // line 22
        if ((twig_length_filter($this->env, ($context["blocks"] ?? null)) > 0)) {
            // line 23
            echo "\t<div class=\"row\">
";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["homepage"]) {
                // line 25
                echo "\t\t<div class=\"col-sm-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"";
                // line 27
                echo twig_escape_filter($this->env, ($context["app_path"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["homepage"], "picture", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["homepage"], "title", []), "html", null, true);
                echo "\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h3>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["homepage"], "title", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["homepage"], "description", []), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<p><a href=\"\" class=\"btn btn-primary\" role=\"button\">Check this link</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
                // line 37
                if ((($this->getAttribute($context["loop"], "index", []) % 3) == 0)) {
                    // line 38
                    echo "\t</div>
\t<div class=\"row\">
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homepage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t</div>
";
        } else {
            // line 44
            echo "\t<hr>
\t<p class=\"text-muted text-center\">Sorry, no blocks...</p>
";
        }
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "public/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 47,  137 => 44,  133 => 42,  116 => 38,  114 => 37,  105 => 31,  100 => 29,  92 => 27,  88 => 25,  71 => 24,  68 => 23,  66 => 22,  52 => 11,  45 => 6,  42 => 5,  37 => 3,  35 => 1,  29 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "public/index.html", "/Users/jkuijer/Documents/vetorino-test/templates/public/index.html");
    }
}
