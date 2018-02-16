<?php
require_once('../Classes/Session.php');
function captcha()
{
    //Указываем путь к папке, где у нас лежит шрифт
    $width = 200;               //Ширина капчи
    $height = 60;               //Высота
    $font_size = 16;            //Размер шрифта
    $let_amount = 6;            //Количество символов в нашей капче
    $fon_let_amount = 100;      //Количество знаков, составляющих фон
    $font = dirname(__FILE__) . '/fonts/a_ConceptoTitulNrWv.ttf';   //Непосредственно путь к шрифту
 
    /* Набираем алфавит, из которого будем генерировать случайным
     * образом текст на нашей картинке. При этом исключаем похожие
     * символы. Например 1 и I
     */
    $letters = array("a","b","c","d","e","f","g","h","i","j","k","m","n","p","q","r","s","t","u","v","w","x","y","z",2,4,5,6,7,8,9);
    //Цветовая гамма из которой генерируется цвет буквы
    $colors = array("90","110","130","150","170");  
 
    $src = imagecreatetruecolor($width,$height); //Создаем холст
    $fon = imagecolorallocate($src,255,255,255); //Генерируем белый цвет. 
    imagefill($src,0,0,$fon);            //Заполняем им холст. Чтобы не прозрачным был.
 
    for($i=0; $i < $fon_let_amount; $i++)  //Генерируем фон
    {
        /* Определяем цвет буквы случайным образом.
         * Первым параметром идет холст. Потом цвет в формате RGB. Затем прозрачность,
         * чтобы фон не "забивал" основные буквы.
         */
        $color = imagecolorallocatealpha($src,rand(0,255),rand(0,255),rand(0,255),100); 
        //Выбираем случайным образом букву
        $letter = $letters[rand(0,sizeof($letters)-1)]; 
        //Делаем буквы чуточку разными по размеру
        $size = rand($font_size-2,$font_size+2); 
        /* Ну здесь происходит заливка непосредственно выбранной ранее буквы, выбранным цветом.
         */                                           
        imagettftext($src,$size,rand(0,45),
                     rand($width*0.1,$width-$width*0.1),
                     rand($height*0.2,$height),$color,$font,$letter);
    }
 
    // Аналогичным образом генерируем основные буквы капчи
    for($i=0;$i < $let_amount;$i++)
    {
        //Генерируем цвет по нашей "гамме".
        $color = imagecolorallocatealpha($src,$colors[rand(0,sizeof($colors)-1)],
                                              $colors[rand(0,sizeof($colors)-1)],
                                              $colors[rand(0,sizeof($colors)-1)],rand(20,40)); 
        $letter = $letters[rand(0,sizeof($letters)-1)];
        //Здесь уже покрупнее делаем
        $size = rand($font_size*2-2,$font_size*2+2);
        //А это сдвиг буквы. Пытаемся сделать его случайным
        $x = ($i+1)*$font_size*1.5 + rand(1,5);
        //Здесь генерируем сдвиг по вертикали. 
        $y = (($height*2)/3) + rand(0,5);                            
        /* Сохраняем каждую букву в массив. Потом соединим в строку.
         */
        $cod[] = $letter;
        //Печатаем букву, как и в прошлый раз с фоном.
        imagettftext($src,$size,rand(-20,20),$x,$y,$color,$font,$letter);
    }
 
    $cod = implode("",$cod); //Делаем из массива строку...
    /*Записываем набор символов в сессию. */
    
    Session::start();
    Session::set('captcha', $cod);
    header ("Content-type: image/gif"); //Отправляем заголовок браузеру. 
    return imagegif($src); //И выводим саму картинку.
}

captcha();

