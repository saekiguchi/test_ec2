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

/* Block/index_category.twig */
class __TwigTemplate_a919126267b4d47cf17685e2aa587670 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__eccube__gblobal = $this->env->getGlobals();
        $__eccube__eventDispatcher = $__eccube__gblobal['event_dispatcher'];
        $__eccube__source = $this->env->getLoader()->getSourceContext($this->getTemplateName())->getCode();
        $__eccube__event = new \Eccube\Event\TemplateEvent($this->getTemplateName(), $__eccube__source, $context);
        $__eccube__eventDispatcher->dispatch($__eccube__event, $this->getTemplateName());
        $context = $__eccube__event->getParameters();
        if ($__eccube__event->getSource() !== $__eccube__source) {
            $__eccube__newTemplate = $this->env->createTemplate($__eccube__event->getSource());
            $__eccube__newTemplate->display($__eccube__event->getParameters());
            return;
        }

        // line 1
        $context["Categories"] = twig_get_attribute($this->env, $this->source, $this->env->getFunction('repository')->getCallable()("Eccube\\Entity\\Category"), "getList", [], "method", false, false, true, 1);
        // line 2
        echo "
";
        // line 18
        echo "
";
        // line 20
        $macros["__internal_parse_1"] = $this->macros["__internal_parse_1"] = $this;
        // line 21
        echo "
<div class=\"index__category\">
    <div class=\"row\">
        <h2 class=\"en\">Category</h2>
        <ul>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 27
            echo "                <li>
                    ";
            // line 28
            echo twig_call_macro($macros["__internal_parse_1"], "macro_tree", [$context["Category"]], 28, $context, $this->getSourceContext());
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
    </div>
</div>";
    }

    // line 3
    public function macro_tree($__Category__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            echo "    ";
            $macros["__internal_parse_0"] = $this;
            // line 5
            echo "    <a class=\"en\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
    </a>
    ";
            // line 8
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, true, 8)) > 0)) {
                // line 9
                echo "        <ul>
            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, true, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 11
                    echo "                <li>
                    ";
                    // line 12
                    echo twig_call_macro($macros["__internal_parse_0"], "macro_tree", [$context["ChildCategory"]], 12, $context, $this->getSourceContext());
                    echo "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </ul>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Block/index_category.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  139 => 15,  130 => 12,  127 => 11,  123 => 10,  120 => 9,  118 => 8,  113 => 6,  106 => 5,  103 => 4,  90 => 3,  84 => 31,  75 => 28,  72 => 27,  68 => 26,  61 => 21,  59 => 20,  56 => 18,  53 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/index_category.twig", "/home/xs376496/comprime-dev01.com/public_html/test_ec/app/template/default/Block/index_category.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "from" => 20, "for" => 26, "macro" => 3, "if" => 8);
        static $filters = array("escape" => 5, "length" => 8);
        static $functions = array("repository" => 1, "url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'from', 'for', 'macro', 'if'],
                ['escape', 'length'],
                ['repository', 'url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
