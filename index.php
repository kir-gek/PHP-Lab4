<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_2.css">
    <title>Вывод таблиц Пульфт</title>
</head>
<body>
    <header>
        <img src="./Mospolytech_logo.jpg" alt="Mospolytech">
    </header>

    <main>
        <div>
            <?php
             $x=1;    
             function getTR( $data ) // объявление функции
                {
                $arr = explode( '*', $data ); // разбиваем строку в массив
                $ret = '<tr>'; // начинаем тег строки таблицы
                for($i=0; $i<count($arr); $i++) // цикл по всем ячейкам таблицы
                    $ret .= '<td>'.$arr[$i].'</td>'; // добавляем ячейкам тег
                return $ret.'</tr>'; // возвращаем строку таблицы
                } 
                
             function outTable($structure) // объявление функции
                {
                $strings = explode( '#', $structure ); // разбиваем структуру на строки
                $datas=''; // итоговый HTML-код строк
                for($i=0; $i<count($strings); $i++ ) // цикл для всех строк
                    $datas .= getTR( $strings[$i] ); // добавляем код строки в итоговый
                if( $datas ) // если код строк определен
                    echo '<table class="tab">'.$datas.'</table>'; // выводим таблицу
                                   
                else 
                    echo '<p>В таблице нет строк </p>'; // выводим предупреждение
                }
                $structure=array( 'C1*C2*C3#C4*C5*C6', 'C7*C8*C9#C10*C11*C12', 'C13*C14*C15#C16*C17*C18', '', 'C19*C20*C21#C22*C23*C24' ); // массив со структурами таблиц

                    for($i=0; $i<count($structure); $i++) // для всех элементов массива
                        {echo '<h2>Таблица№'.$x.'</h2>';
                        $x=$x+1;
                        outTable($structure[$i]); 
                        }// выводим соответствующую структуре таблицу
            ?>      
        </div>
    </main>

    <footer>
    </footer>
</body>
</html>