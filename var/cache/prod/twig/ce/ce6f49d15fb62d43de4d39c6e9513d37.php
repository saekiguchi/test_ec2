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

/* Block/index_slider.twig */
class __TwigTemplate_a375803d76fc8e78ab78c4f859df4bbc extends Template
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
        echo "<div class=\"index__mv\">
        <div class=\"main_visual\">
            <div class=\"item slick-slide\">
                <picture>
                    <source media=\"(max-width: 768px)\" srcset=\"/test_ec/html/user_data/assets/img/index/mv-01_sp.png\">
                    <img src=\"/test_ec/html/user_data/assets/img/index/mv-01_pc.png\" alt=\"\">
                </picture>
            </div>
            <div class=\"item slick-slide\">
                <picture>
                    <source media=\"(max-width: 768px)\" srcset=\"/test_ec/html/user_data/assets/img/index/mv-02_sp.png\">
                    <img src=\"/test_ec/html/user_data/assets/img/index/mv-02_pc.png\" alt=\"\">
                </picture>
            </div>
            <div class=\"item slick-slide\">
                <picture>
                    <source media=\"(max-width: 768px)\" srcset=\"/test_ec/html/user_data/assets/img/index/mv-03_sp.png\">
                    <img src=\"/test_ec/html/user_data/assets/img/index/mv-03_pc.png\" alt=\"\">
                </picture>
            </div>
        </div>
    </div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Block/index_slider.twig";
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
        return new Source("", "Block/index_slider.twig", "/home/xs376496/comprime-dev01.com/public_html/test_ec/app/template/default/Block/index_slider.twig");
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
