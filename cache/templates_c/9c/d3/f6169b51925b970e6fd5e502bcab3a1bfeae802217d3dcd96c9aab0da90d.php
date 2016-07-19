<?php

/* mail/mailTemplate.tpl */
class __TwigTemplate_9cd3f6169b51925b970e6fd5e502bcab3a1bfeae802217d3dcd96c9aab0da90d extends Twig_Template
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
        echo "<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
</head>
<body style=\"margin:0; padding:0;\" bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">

<?php
\$to = \"damian1599@abv.bg\";
\$subject = \"HTML email\";

\$message = \"
<html><head><title></title></head>
<body>
<p>This email contains HTML Tags!</p>
<table>
    <tr>
        <th>First name</th>
        <th>Last name</th>
    </tr>
    <tr>
        <td>Damyan</td>
        <td>Pazvanski</td>
    </tr>
</table>
</body>
<html>\";
\$header = \"From: damyan.pazvanski@gmail.com\";

mail(\"damian1599@abv.bg\",\"subject\",\"message\",\"From: damyan.pazvanski@gmail.com\");
echo\"Sended!!\";
?>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "mail/mailTemplate.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
