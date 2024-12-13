<?php
    // date
    echo date("l");
    echo ("<br>");
    echo date(" d");
    echo ("<br>");
    echo date(" M");
    echo ("<br>");
    echo date(" Y");
    echo ("<br>");
    echo date(" l, d M Y");
    echo("<br>");

    // time();
    echo date(" d M Y ", time()+172800);
    echo ("<br>");
    echo date("l", time()-60*60*24*100);

    // mktime
    echo ("<br>"); 
    echo mktime(0,0,0,8,25,1985);
    echo ("<br>");
    echo date ("l", mktime(0,0,0,8,25,1985));
    echo ("<br>");

    // strtotime
    echo strtotime("25 aug 1985");
    echo ("<br>");
    echo date("l", strtotime("25 aug 1985"));
?>