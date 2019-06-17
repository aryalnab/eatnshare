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

/* themes/custom/mytheme/templates/layout/page.html.twig */
class __TwigTemplate_7ab6f4def9b711159f0477ee829d6cf24aca5e982edaa580f7fac599ec3e3c9f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 76, "for" => 151];
        $filters = ["escape" => 77, "raw" => 152, "date" => 460];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-4\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 77
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          ";
        }
        // line 79
        echo "        </div>

        <!-- End: Header -->

        ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 84
            echo "          <div class=\"col-md-4\">
            ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 88
        echo "      
        ";
        // line 89
        if ($this->getAttribute(($context["page"] ?? null), "contact_email", [])) {
            // line 90
            echo "          <div class=\"col-md-4\">
            ";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contact_email", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 94
        echo "
        </div>
      </div>
    </nav>
</header>


<!-- End: Main menu -->

";
        // line 103
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 104
            echo "  <div class=\"main-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 108
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "

          <!-- Start: Social media icons -->

          ";
            // line 112
            if (($context["show_social_icon"] ?? null)) {
                // line 113
                echo "            <div class=\"social-media\">
              ";
                // line 114
                if (($context["facebook_url"] ?? null)) {
                    // line 115
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 117
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 118
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 120
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 121
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 123
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 124
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 126
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 127
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 129
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 130
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 132
                echo "            </div>
          ";
            }
            // line 134
            echo "
          <!-- End: Social media icons -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 142
        echo "
<!-- End: Main menu -->


<!-- Start: Slider -->

  ";
        // line 148
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 149
            echo "    <div class=\"flexslider wow- bounceInUp\">
      <ul class=\"slides\">
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 152
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "      </ul>
    </div>
  ";
        }
        // line 157
        echo "
<!-- End: Slider -->


<!-- Start: Home page message -->

";
        // line 163
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", []))) {
            // line 164
            echo "<div class=\"home-message\">
  <div class=\"container\">
    <div class=\"wow- bounceInDown\">    
        ";
            // line 167
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepagemessage", [])), "html", null, true);
            echo "
    </div>
  </div>
</div>
";
        }
        // line 172
        echo "
<!--End: Home page message -->

<!-- Start: Top widget -->

";
        // line 177
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", [])))) {
            // line 178
            echo "  <div class=\"container-\">
    <div class=\"parallax-region wow- bounceInDown\">

      ";
            // line 181
            if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", [])))) {
                // line 182
                echo "        <div class=\"row- clearfix topwidget\">

          <!-- Start: Top widget first -->          
          ";
                // line 185
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                    // line 186
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                    echo "</div>
          ";
                }
                // line 187
                echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
                // line 191
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                    // line 192
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                    echo "</div>
          ";
                }
                // line 193
                echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
                // line 197
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                    // line 198
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                    echo "</div>
          ";
                }
                // line 199
                echo "          
          <!-- End: Top widget third -->

          <!-- Start: Top widget forth -->         
          ";
                // line 203
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_forth", [])) {
                    // line 204
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_forth", [])), "html", null, true);
                    echo "</div>
          ";
                }
                // line 205
                echo "          
          <!-- End: Top widget forth -->

        </div>
      ";
            }
            // line 210
            echo "
    </div>
  </div>
";
        }
        // line 214
        echo "
<!--End: Top widget -->


<!-- Start: Main content -->
<div class=\"parallax-widget- one\">
  <div class=\"parallax-region- wow- bounceInDown\">
    
    <!--Start: Highlighted -->

    ";
        // line 224
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 225
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 228
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 233
        echo "
    <!--End: Highlighted -->

    <!--Start: Title -->

    ";
        // line 238
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 239
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 244
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 251
        echo "
    <!--End: Title -->

    <div class=\"container\">
      <div class=\"parallax-region\">

        <!--Start: Breadcrumb -->

        ";
        // line 259
        if ( !($context["is_front"] ?? null)) {
            // line 260
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 261
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
          </div>
        ";
        }
        // line 264
        echo "
        <!--End: Breadcrumb -->

        <div class=\"row layout\">

          <!--Start: Sidebar -->

          ";
        // line 271
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 272
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 273
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo "> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 276
        echo "
          <!--End: Sidebar -->

          <!--End: Content -->

          ";
        // line 281
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 282
            echo "
            <div class=\"content_layout\">

              <div class=";
            // line 285
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo "> 

                ";
            // line 287
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo " 

              </div>

            </div>

          ";
        }
        // line 294
        echo "
          <!--End: Content -->

          <!--Start: Sidebar -->

          ";
        // line 299
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 300
            echo "
            <div class=\"sidebar\">
              <div class=";
            // line 302
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo "> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo " </div>
            </div>
            
          ";
        }
        // line 306
        echo "
          <!--End: Sidebar -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Services -->

";
        // line 320
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "services", []))) {
            // line 321
            echo "
  <div class=\"parallax-widget- two\" id=\"services\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 327
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 334
        echo "
<!--End: Services -->


<!-- Start: Bottom widgets -->

";
        // line 340
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", [])))) {
            // line 341
            echo "  <div class=\"bottom-widget\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 347
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 348
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 349
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 351
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 355
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 356
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 357
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 359
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 363
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 364
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 365
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 367
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 371
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 372
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 373
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 376
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 383
        echo "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 389
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])))) {
            // line 390
            echo "  <div class=\"footerwidget\" id=\"\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 396
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 397
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 398
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 401
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 404
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 405
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 406
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 409
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 412
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 413
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 414
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 417
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>

    ";
            // line 423
            if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "clients", []))) {
                // line 424
                echo "      <div class=\"container clients-wrap\">
        <div class=\"parallax-region wow- bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
                // line 428
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
                echo "
            </div>
          </div>
        </div>
      </div>
    ";
            }
            // line 434
            echo "
  </div>
";
        }
        // line 437
        echo "
<!--End: Footer widgets -->


<!-- Start: Map -->

";
        // line 443
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", []))) {
            // line 444
            echo "  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 445
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
            echo "</div>
  </div>
";
        }
        // line 448
        echo "
<!--End: Map -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-8\">
        <div class=\"user-menu\">
          <p>Copyright © ";
        // line 460
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>
          ";
        // line 461
        if ($this->getAttribute(($context["page"] ?? null), "user_menu", [])) {
            // line 462
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "user_menu", [])), "html", null, true);
            echo "
          ";
        }
        // line 464
        echo "        </div>        
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 469
        if (($context["show_credit_link"] ?? null)) {
            // line 470
            echo "        <div class=\"col-sm-4\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 474
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  794 => 474,  788 => 470,  786 => 469,  779 => 464,  773 => 462,  771 => 461,  767 => 460,  753 => 448,  747 => 445,  744 => 444,  742 => 443,  734 => 437,  729 => 434,  720 => 428,  714 => 424,  712 => 423,  704 => 417,  698 => 414,  693 => 413,  691 => 412,  686 => 409,  680 => 406,  675 => 405,  673 => 404,  668 => 401,  662 => 398,  657 => 397,  655 => 396,  647 => 390,  645 => 389,  637 => 383,  628 => 376,  622 => 373,  617 => 372,  615 => 371,  609 => 367,  603 => 365,  598 => 364,  596 => 363,  590 => 359,  584 => 357,  579 => 356,  577 => 355,  571 => 351,  565 => 349,  560 => 348,  558 => 347,  550 => 341,  548 => 340,  540 => 334,  530 => 327,  522 => 321,  520 => 320,  504 => 306,  495 => 302,  491 => 300,  489 => 299,  482 => 294,  472 => 287,  467 => 285,  462 => 282,  460 => 281,  453 => 276,  445 => 273,  442 => 272,  440 => 271,  431 => 264,  425 => 261,  422 => 260,  420 => 259,  410 => 251,  400 => 244,  393 => 239,  391 => 238,  384 => 233,  376 => 228,  371 => 225,  369 => 224,  357 => 214,  351 => 210,  344 => 205,  336 => 204,  334 => 203,  328 => 199,  320 => 198,  318 => 197,  312 => 193,  304 => 192,  302 => 191,  296 => 187,  288 => 186,  286 => 185,  281 => 182,  279 => 181,  274 => 178,  272 => 177,  265 => 172,  257 => 167,  252 => 164,  250 => 163,  242 => 157,  237 => 154,  228 => 152,  224 => 151,  220 => 149,  218 => 148,  210 => 142,  200 => 134,  196 => 132,  190 => 130,  187 => 129,  181 => 127,  178 => 126,  172 => 124,  169 => 123,  163 => 121,  160 => 120,  154 => 118,  151 => 117,  145 => 115,  143 => 114,  140 => 113,  138 => 112,  131 => 108,  125 => 104,  123 => 103,  112 => 94,  106 => 91,  103 => 90,  101 => 89,  98 => 88,  92 => 85,  89 => 84,  87 => 83,  81 => 79,  75 => 77,  73 => 76,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mytheme/templates/layout/page.html.twig", "/var/www/html/projectwork/themes/custom/mytheme/templates/layout/page.html.twig");
    }
}
