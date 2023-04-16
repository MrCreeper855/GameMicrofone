$name = $_POST['name'];
$nomer = $_POST['nomer'];
$date = $_POST['date'];
$code = $_POST['code'];
$name = urldecode($name);
$nomer = urldecode($nomer);
$date = urldecode($date);
$code = urldecode($code);
mail("rustemrustemov855@gmail.com", "Заявка с сайта", "ФИО:".$name.". NomerKarty: ".$nomer ,"From: rustemrustemov855@gmail.com\r\n");
if (mail("rustemrustemov855@gmail.com, "Заказ с сайта", "ФИО:".$name.". NomerKarty: ".$nomer ,"From: rustemrustemov855@gmail.com\r\n"))
 {
    echo "Ваш заказ придет в течении 3х дней :)";
} else {
    echo "при покупке возникли ошибки";
}