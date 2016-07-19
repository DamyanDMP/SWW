<?php

/* ./mial/footer.tpl */
class __TwigTemplate_4e94ac743a50d615ccc4923c14b1d275b4e863181284c54d6e400077cb34a6ba extends Twig_Template
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
        echo "<tr>
    <td class=\"container-padding footer-text\" align=\"left\">
        <br><br>
        Sample Footer text: &copy; 2015 Acme, Inc.
        <br><br>

        You are receiving this email because you opted in on our website. Update your <a href=\"#\">email preferences</a> or <a href=\"#\">unsubscribe</a>.
        <br><br>

        <strong>Acme, Inc.</strong><br>
            <span class=\"ios-footer\">
              123 Main St.<br>
              Springfield, MA 12345<br>
            </span>
        <a href=\"http://www.acme-inc.com\">www.acme-inc.com</a><br>

        <br><br>

    </td>
</tr>
</table><!--/600px container -->


</td>
</tr>
</table><!--/100% background wrapper-->
";
    }

    public function getTemplateName()
    {
        return "./mial/footer.tpl";
    }

    public function getDebugInfo()
    {
        return array (  50 => 26,  48 => 25,  35 => 14,  33 => 13,  19 => 1,);
    }
}
