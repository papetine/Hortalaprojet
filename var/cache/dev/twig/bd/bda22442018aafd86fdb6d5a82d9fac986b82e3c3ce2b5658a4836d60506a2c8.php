<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_a46f4dcafd0600c870d42bc5e0e1867f0e89c949ea054eaab8f37b056af8ceee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ec58eb5331ed048da55ced8f8419172758d8ee9505cba24403a9d07ebf3b63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec58eb5331ed048da55ced8f8419172758d8ee9505cba24403a9d07ebf3b63d->enter($__internal_2ec58eb5331ed048da55ced8f8419172758d8ee9505cba24403a9d07ebf3b63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f0413fbe7ea88c341ea42c7ec885fc5f1ab0be8c2e73f940108b5407e4571196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0413fbe7ea88c341ea42c7ec885fc5f1ab0be8c2e73f940108b5407e4571196->enter($__internal_f0413fbe7ea88c341ea42c7ec885fc5f1ab0be8c2e73f940108b5407e4571196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec58eb5331ed048da55ced8f8419172758d8ee9505cba24403a9d07ebf3b63d->leave($__internal_2ec58eb5331ed048da55ced8f8419172758d8ee9505cba24403a9d07ebf3b63d_prof);

        
        $__internal_f0413fbe7ea88c341ea42c7ec885fc5f1ab0be8c2e73f940108b5407e4571196->leave($__internal_f0413fbe7ea88c341ea42c7ec885fc5f1ab0be8c2e73f940108b5407e4571196_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9f6567219feb54c9600efb0a3927a886c377431d653fda9c50d08fc6ebd26d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6567219feb54c9600efb0a3927a886c377431d653fda9c50d08fc6ebd26d7a->enter($__internal_9f6567219feb54c9600efb0a3927a886c377431d653fda9c50d08fc6ebd26d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ab0bdf950e9cbb426cc989570bbc5eb55c5884cd2ff181f989f1c833c411745e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0bdf950e9cbb426cc989570bbc5eb55c5884cd2ff181f989f1c833c411745e->enter($__internal_ab0bdf950e9cbb426cc989570bbc5eb55c5884cd2ff181f989f1c833c411745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ab0bdf950e9cbb426cc989570bbc5eb55c5884cd2ff181f989f1c833c411745e->leave($__internal_ab0bdf950e9cbb426cc989570bbc5eb55c5884cd2ff181f989f1c833c411745e_prof);

        
        $__internal_9f6567219feb54c9600efb0a3927a886c377431d653fda9c50d08fc6ebd26d7a->leave($__internal_9f6567219feb54c9600efb0a3927a886c377431d653fda9c50d08fc6ebd26d7a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82671e146bc0ca25857ba9fb9de1377aa72dd67910a0f32a5b4579580682413b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82671e146bc0ca25857ba9fb9de1377aa72dd67910a0f32a5b4579580682413b->enter($__internal_82671e146bc0ca25857ba9fb9de1377aa72dd67910a0f32a5b4579580682413b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dcb0593b8dab422951a3951fa66e1e7ae54edb74b10644d5634677815b17f174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb0593b8dab422951a3951fa66e1e7ae54edb74b10644d5634677815b17f174->enter($__internal_dcb0593b8dab422951a3951fa66e1e7ae54edb74b10644d5634677815b17f174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dcb0593b8dab422951a3951fa66e1e7ae54edb74b10644d5634677815b17f174->leave($__internal_dcb0593b8dab422951a3951fa66e1e7ae54edb74b10644d5634677815b17f174_prof);

        
        $__internal_82671e146bc0ca25857ba9fb9de1377aa72dd67910a0f32a5b4579580682413b->leave($__internal_82671e146bc0ca25857ba9fb9de1377aa72dd67910a0f32a5b4579580682413b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
