<?php

$user_need = 5;
for($nme = 0;$nme<=10;$nme++){
    echo $nme;
    echo "<br>";
    if($nme == 5){
        break;
    }
};

for($rows = 1;$rows <= 3;$rows++){
    echo "Row $rows:";
    for($seat = 1;$seat <= 3;$seat++){
        echo $seat;
    }
    echo "<br/>";
}

for($outer = 1;$outer <= 4;$outer++){
    for($inner = 1;$inner <= $outer;$inner++){
        echo $inner;
    }
    echo "<br/>";
}

for($table = 1;$table <= 4;$table++){
    for($table_entries = 1;$table_entries <= 10;$table_entries++){
        echo  "$table * $table_entries =".$table*$table_entries."<br/>";
    }
    echo "<br/>";
}

?>