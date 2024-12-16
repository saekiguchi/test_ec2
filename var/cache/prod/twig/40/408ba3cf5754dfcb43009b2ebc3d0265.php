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

/* Block/footer_parts.twig */
class __TwigTemplate_7040a8e3044c197b0a2cadd1843eb1f8 extends Template
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
        echo "<div class=\"footer__inner\">
    <div class=\"row\">
        <div class=\"footer__contact\">
            <h2 class=\"en\">Contact</h2>
            <p>saekiguchi@example.com</p>
            <p>123-456-7890</p>
        </div>
        <div class=\"footer__nav\">
            <nav>
                <ul>
                    <li>
                        <a href=\"\">ABOUT</a>
                    </li>
                    <li>
                        <a href=\"\">NEWS</a>
                    </li>
                    <li>
                        <a href=\"\">ACCESS</a>
                    </li>
                    <li>
                        <a href=\"\">INSTAGRAM</a>
                    </li>
                    <li>
                        <a href=\"\">ONLINE STORE</a>
                        <ul>
                            <li>
                                <a href=\"\">PLATE</a>
                            </li>
                            <li>
                                <a href=\"\">SILVERWARE</a>
                            </li>
                            <li>
                                <a href=\"\">CUP/MUG</a>
                            </li>
                            <li>
                                <a href=\"\">SPICE BOTTLE</a>
                            </li>
                            <li>
                                <a href=\"\">CANISTER</a>
                            </li>
                            <li>
                                <a href=\"\">OTHER</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class=\"footer__note\">
    <div class=\"row\">
        <ul>
            <li>
                <a href=\"\">特定商取引法に基づく表示</a>
            </li>
            <li>
                <a href=\"\">プライバシーポリシー</a>
            </li>
        </ul>
        <span>Copyright © saekiguchi all rights reseved</span>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Block/footer_parts.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/footer_parts.twig", "/home/xs376496/comprime-dev01.com/public_html/test_ec/app/template/default/Block/footer_parts.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
