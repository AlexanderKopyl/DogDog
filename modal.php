<?php

$name = $_POST["name"];
$email = $_POST["email"];
$adress = $_POST["adress"];
$tel = $_POST["tel"];
$mailheaders = "Content-type: text/html; charset=UTF-8 \r\n";
$mailheaders .= "From: fire.co.ua <no-reply@fire.co.ua>";
$mailheaders .= "Reply-To: fire.co.ua";
$adminEmail = "anast.nosal@gmail.com";
$messeng = "
<td class=\"esd-structure es-p20\" align=\"left\">
    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
        <tbody>
            <tr>
                <td width=\"560\" class=\"esd-container-frame\" align=\"center\" valign=\"top\">
                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                        <tbody>
                            <tr>
                                <td align=\"left\" class=\"esd-block-text es-p15b\">
                                    <h2>Приветствуем в обучающем шаблоне Stripo!</h2>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" class=\"esd-block-text\">
                                    <p>Благодаря этому шаблону, мыпостараемся продемонстрировать Вам легкость работы в&nbsp;нашем редакторе писем. Следуя подсказкам, Вы&nbsp;научитесь быстро и&nbsp;удобно создавать, изменять, перемещать и&nbsp;удалять различные блоки, структуры и&nbsp;полосы письма. Поехали! ;)</p>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"center\" class=\"esd-block-social\">
                                    <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-table-not-adapt es-social\">
                                        <tbody>
                                            <tr>
                                                <td align=\"center\" valign=\"top\" class=\"es-p10r\">
                                                    <a target=\"_blank\" href=\"\"> <img src=\"https://demo.stripo.email/assets/img/social-icons/circle-colored/twitter-circle-colored.png\" alt=\"Tw\" title=\"Twitter\" width=\"32\"> </a>
                                                </td>
                                                <td align=\"center\" valign=\"top\" class=\"es-p10r\">
                                                    <a target=\"_blank\" href=\"\"> <img src=\"https://demo.stripo.email/assets/img/social-icons/circle-colored/facebook-circle-colored.png\" alt=\"Fb\" title=\"Facebook\" width=\"32\"> </a>
                                                </td>
                                                <td align=\"center\" valign=\"top\" class=\"es-p10r\">
                                                    <a target=\"_blank\" href=\"\"> <img src=\"https://demo.stripo.email/assets/img/social-icons/circle-colored/youtube-circle-colored.png\" alt=\"Yt\" title=\"Youtube\" width=\"32\"> </a>
                                                </td>
                                                <td align=\"center\" valign=\"top\">
                                                    <a target=\"_blank\" href=\"\"> <img src=\"https://demo.stripo.email/assets/img/social-icons/circle-colored/vk-circle-colored.png\" alt=\"VK\" title=\"Vkontakte\" width=\"32\"> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"center\" class=\"esd-block-image\">
                                    <a target=\"_blank\"> <img class=\"adapt-img esdev-empty-img\" src=\"https://demo.stripo.email/assets/img/default-img.png\" alt=\"\" width=\"100%\" height=\"100\" style=\"display: none;\"> </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</td>

";
$text = "<p>Ваше имя :". $_POST['name']. "</p><p> Ваш Телефон: ".$_POST['tel']. " </p><p>Ваш Email: ".$_POST['email']. "</p><p>Ваш Adress:" .$_POST['adress']."</p><br><p>Вы зарегистрировались на обратный звонк , через время вас наберут</p>";
$textForAdmin = "<p>Имя Пользователя :". $_POST['name']. "</p><p>Телефон пользователя: ".$_POST['tel']. " </p><p>Email пользователя: ".$_POST['email']. "</p><p>Adress пользователя:" .$_POST['adress']."</p><br><p>Свяжитесь с клиентом для выяснения нюансов</p>";
mail($email,"Form Test site",$messeng,$mailheaders);
//mail($adminEmail,"Form Test site",$textForAdmin,$mailheaders);
header('Location:index.php');
exit;
?>