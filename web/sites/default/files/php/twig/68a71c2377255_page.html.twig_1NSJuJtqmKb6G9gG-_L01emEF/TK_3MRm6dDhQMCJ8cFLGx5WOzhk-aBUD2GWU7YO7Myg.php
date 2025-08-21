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

/* themes/contrib/education_bee/templates/layout/page.html.twig */
class __TwigTemplate_2d2634b45a4a7c1a4851b5c694bf2dc9 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<header id=\"header\" class=\"fixed-top\">
  <div class=\"container d-flex align-items-center\">

    <div class=\"logo me-auto\">
      ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 5), "html", null, true);
        yield "
    </div>
    <div id=\"navbar\" class=\"navbar\">
      ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 8), "html", null, true);
        yield "
      <i class=\"bi bi-list mobile-nav-toggle\"></i>
    </div>

  </div>
</header>
";
        // line 14
        if (($context["is_front"] ?? null)) {
            // line 15
            yield "<section id=\"hero\" class=\"d-flex align-items-center\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <h1>";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_title"] ?? null), "html", null, true);
            yield "</h1>
        <h2>";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_description"] ?? null), "html", null, true);
            yield "</h2>
      </div>
      <div class=\"col-lg-6 order-1 order-lg-2 hero-img\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
        <img src=\"";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_bg_img"] ?? null), "html", null, true);
            yield "\" class=\"img-fluid animated\" alt=\"\">
      </div>
    </div>
  </div>
</section>
";
        }
        // line 30
        yield "<main id=\"main\" class=\"container\">
";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 31), "html", null, true);
        yield "
</main>
<footer id=\"footer\">
  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">

        <div class=\"col-lg-3 col-md-6 footer-contact\">
          ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 39), "html", null, true);
        yield "
          ";
        // line 40
        if (($context["show_information_icon"] ?? null)) {
            // line 41
            yield "            <div class=\"contact-info\">
              <span>";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["address"] ?? null), "html", null, true);
            yield "</span><br>
              <strong>Phone: </strong>";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["contact"] ?? null), "html", null, true);
            yield "<br>
              <strong>Email: </strong>";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["mail_id"] ?? null), "html", null, true);
            yield "<br>
            </div>
            &#160;
          ";
        }
        // line 48
        yield "        </div>

        <div class=\"col-lg-3 col-md-6 footer-links\">
          ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 51), "html", null, true);
        yield "
        </div>

        <div class=\"col-lg-3 col-md-6 footer-links\">
          ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 55), "html", null, true);
        yield "
        </div>

        <div class=\"col-lg-3 col-md-6 footer-links\">
          ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 59), "html", null, true);
        yield "
          ";
        // line 60
        if (($context["show_social_icon"] ?? null)) {
            // line 61
            yield "            <div class=\"social-links mt-3\">
              <h2>Our Social Networks</h2>
              <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
              ";
            // line 64
            if (($context["twitter_url"] ?? null)) {
                yield " <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true);
                yield "\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>";
            }
            // line 65
            yield "              ";
            if (($context["facebook_url"] ?? null)) {
                yield " <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true);
                yield "\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>";
            }
            // line 66
            yield "              ";
            if (($context["instagram_url"] ?? null)) {
                yield " <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["instagram_url"] ?? null), "html", null, true);
                yield "\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>";
            }
            // line 67
            yield "              ";
            if (($context["youtube_url"] ?? null)) {
                yield " <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["youtube_url"] ?? null), "html", null, true);
                yield "\" class=\"google-plus\"><i class=\"bx bxl-youtube\"></i></a>";
            }
            // line 68
            yield "              ";
            if (($context["linkedin_url"] ?? null)) {
                yield " <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true);
                yield "\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>";
            }
            // line 69
            yield "            </div>
          ";
        }
        // line 71
        yield "        </div>
      </div>
    </div>
  </div>

  <div class=\"container footer-bottom clearfix\">
    <div class=\"copyright\">
      ";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_copyright"] ?? null), "html", null, true);
        yield "
    </div>
  </div>
</footer>

<div id=\"preloader\"></div>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front", "banner_title", "banner_description", "banner_bg_img", "show_information_icon", "address", "contact", "mail_id", "show_social_icon", "twitter_url", "facebook_url", "instagram_url", "youtube_url", "linkedin_url", "footer_copyright"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/education_bee/templates/layout/page.html.twig";
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
        return array (  208 => 78,  199 => 71,  195 => 69,  188 => 68,  181 => 67,  174 => 66,  167 => 65,  161 => 64,  156 => 61,  154 => 60,  150 => 59,  143 => 55,  136 => 51,  131 => 48,  124 => 44,  120 => 43,  116 => 42,  113 => 41,  111 => 40,  107 => 39,  96 => 31,  93 => 30,  84 => 24,  78 => 21,  74 => 20,  67 => 15,  65 => 14,  56 => 8,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header id=\"header\" class=\"fixed-top\">
  <div class=\"container d-flex align-items-center\">

    <div class=\"logo me-auto\">
      {{page.site_branding}}
    </div>
    <div id=\"navbar\" class=\"navbar\">
      {{page.nav_main}}
      <i class=\"bi bi-list mobile-nav-toggle\"></i>
    </div>

  </div>
</header>
{% if is_front %}
<section id=\"hero\" class=\"d-flex align-items-center\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <h1>{{banner_title}}</h1>
        <h2>{{banner_description}}</h2>
      </div>
      <div class=\"col-lg-6 order-1 order-lg-2 hero-img\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
        <img src=\"{{banner_bg_img}}\" class=\"img-fluid animated\" alt=\"\">
      </div>
    </div>
  </div>
</section>
{% endif %}
<main id=\"main\" class=\"container\">
{{page.content}}
</main>
<footer id=\"footer\">
  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">

        <div class=\"col-lg-3 col-md-6 footer-contact\">
          {{page.footer1}}
          {% if show_information_icon %}
            <div class=\"contact-info\">
              <span>{{address}}</span><br>
              <strong>Phone: </strong>{{contact}}<br>
              <strong>Email: </strong>{{mail_id}}<br>
            </div>
            &#160;
          {% endif %}
        </div>

        <div class=\"col-lg-3 col-md-6 footer-links\">
          {{page.footer2}}
        </div>

        <div class=\"col-lg-3 col-md-6 footer-links\">
          {{page.footer3}}
        </div>

        <div class=\"col-lg-3 col-md-6 footer-links\">
          {{page.footer4}}
          {% if show_social_icon %}
            <div class=\"social-links mt-3\">
              <h2>Our Social Networks</h2>
              <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
              {% if twitter_url %} <a href=\"{{twitter_url}}\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>{% endif %}
              {% if facebook_url %} <a href=\"{{facebook_url}}\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>{% endif %}
              {% if instagram_url %} <a href=\"{{instagram_url}}\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>{% endif %}
              {% if youtube_url %} <a href=\"{{youtube_url}}\" class=\"google-plus\"><i class=\"bx bxl-youtube\"></i></a>{% endif %}
              {% if linkedin_url %} <a href=\"{{linkedin_url}}\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>{% endif %}
            </div>
          {% endif %}
        </div>
      </div>
    </div>
  </div>

  <div class=\"container footer-bottom clearfix\">
    <div class=\"copyright\">
      {{footer_copyright}}
    </div>
  </div>
</footer>

<div id=\"preloader\"></div>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>", "themes/contrib/education_bee/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/education_bee/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
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
