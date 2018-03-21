<?php
    $info=array(
        'user'=>array(
            array(1,'zhangsan',19,male),
            array(2,'lisi',20,male),
            array(3,'wangwu',25,female),
        ),
        'score'=>array(
                    array(1,100,99,10),
                    array(2,45,78,90),
                    array(3,45,90,87),
        ),
        'user'=>array(
                    array(1,110,'aa@bb.com'),
                    array(2,220,'ff@ee.com'),
                    array(1,330,'uu@rr.com'),
        ),
    );
    foreach($info as $k=>$v){
        echo "<table width=500 aline='center' border=1>"
        echo "<captain><h3>$k</h3></captain>"

    }
?>
