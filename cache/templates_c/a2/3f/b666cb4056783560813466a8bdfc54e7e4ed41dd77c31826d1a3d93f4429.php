<?php

/* ./common/footer.tpl */
class __TwigTemplate_a23fb666cb4056783560813466a8bdfc54e7e4ed41dd77c31826d1a3d93f4429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"footer-container\">







    <footer class=\"details\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <img alt=\"logo\" class=\"logo\" src=\"../css/img/logo-dark.png\">
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>

                <div class=\"col-sm-4\">
                    <h1>Contact</h1>
                    <p>
                        hello@pivot.net<br>
                        +61 3827 9284<br>
                        <br>
                        Suite 2A Humbolt Plaza<br>
                        300 Collins St<br>
                        Melbourne 3000
                    </p>
                </div>

                <div class=\"col-sm-4\">
                    <h1>Social Profiles</h1>
                    <ul class=\"social-icons\">
                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_twitter\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_facebook\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_instagram\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_dribbble\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_tumblr\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_pinterest\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <span class=\"sub\">© Copright 2014 <a href=\"#\">Medium Rare</a> - All Rights Reserved</span>
                </div>
            </div>

        </div>
    </footer>
</div>
<script>
    \$('#myForm').submit(function (e) {
        var url = \"\";

        \$.ajax({
            type: \"POST\",
            url: \"\",
            data: \$('#myForm').serialize(),
            success: function (data) {
                alert(data);
            }
        })
    };
    e.preventDefault();
</script>
";
    }

    public function getTemplateName()
    {
        return "./common/footer.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
