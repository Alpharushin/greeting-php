<?php

function greeting($userName , $dayOfweek ) {
  switch ($dayOfweek) {
    case '1': case '2': case '3': case '4': case '5':
        echo "<strong>Приветствую $userName! Суровые будни за окном</strong>";
        break;

    case '6': case '7':
        echo "<strong>Приветствую $userName! Выходные но ты не расслабляйся</strong>";
        break;

    default:
        echo "<strong>Приветствую $userName! Ну дела , нужно проверить всё ещё раз</strong>";
        break;
  }
}

echo "<i>Если будни то будет так</i> <br>";
greeting("Аязыч",2);
echo "<br> <br>";

echo "<i>Если выходные то так</i> <br>";
greeting("Аязыч",7);
echo "<br> <br>";

echo "<i>Если что то не то, то выйдет это сообщение</i> <br>";
greeting("Аязыч",100);
echo "<br> <br>";

?>
