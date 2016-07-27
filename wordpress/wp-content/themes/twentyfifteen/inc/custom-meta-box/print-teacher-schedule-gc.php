<br/>
<?php
$_Teacher = array();

function arrayStudent($arr,$data){
    return array_merge($arr,array($data));
}

function arrayTime($arr,$data){
    if(!array_key_exists($data,$arr)){
        $arr = array_merge($arr,array($data=>array()));
        return $arr;
    }
    return $arr;
}

function arrayTeacher($arr,$data){
    if(!array_key_exists($data,$arr)){
        $arr = array_merge($arr,array($data=>array()));
        return $arr;
    }
    return $arr;
}

foreach($new_data_print_teacher as $_stud_GC){
    foreach($_stud_GC['sched'] as $_time => $data){
        if(strpos($data[1],"GC")){
            $tmp_key = $data[0] ."_" . $data[1] . "_" . $data[2];
            $_Teacher = arrayTeacher($_Teacher,$tmp_key);
            if(array_key_exists($tmp_key,$_Teacher)){
                $_Teacher[$tmp_key] = arrayTime($_Teacher[$tmp_key],$_time);
                if(array_key_exists($_time,$_Teacher[$tmp_key])){
                    $tmp_data = array(
                        "name"=> $_stud_GC['name'],
                        "status"=> $_stud_GC['status'],
                        "trans" => $data[3]
                    );
                    $_Teacher[$tmp_key][$_time] = arrayStudent($_Teacher[$tmp_key][$_time],$tmp_data);
                }
            }
        }
    }
}

?>
<h1 style="text-align:center">Teacher's Weekly Schedule <?php echo strtoupper($post->post_title); ?> </h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>8:00-8:50</th>
            <th>class</th>
            <th>9:00-9:50</th>
            <th>class</th>
            <th>10:00 - 10:50</th>
            <th>class</th>
            <th>11:00 - 11:50</th>
            <th>class</th>
            <th>1:30 - 2:20</th>
            <th>class</th>
            <th>2:30 - 3:20</th>
            <th>class</th>
            <th>3:30 - 4:20</th>
            <th>class</th>
            <th>4:30 - 5:20</th>
            <th>class</th>
            <th>5:30 - 6:20</th>
            <th>class</th>
        </tr>
    </thead>
    <tbody>
        <?php
            ksort($_Teacher);
            foreach($_Teacher as $key => $val) {?>
            <tr>
                <td><?php foreach(explode('_',$key) as $data){
                        echo $data."<br>";
                    }?></td>
                <td colspan="2"><?php
                        if(isset($val['time2'])){
                            foreach($val['time2'] as $stud){
                                $colorgc = get_status_color($stud['status'], $stud['trans']);

                                echo '<span class="'.$colorgc.'">'.$stud['name'].";</span> ";
                            }
                        }
                    ?></td>
                <td colspan="2"><?php
                    if(isset($val['time3'])){
                        foreach($val['time3'] as $stud){
                            $colorgc = get_status_color($stud['status'], $stud['trans']);

                            echo '<span class="'.$colorgc.'">'.$stud['name'].";</span> ";
                        }
                    }
                    ?></td>
                <td colspan="2"><?php
                    if(isset($val['time4'])){
                        foreach($val['time4'] as $stud){
                            $colorgc = get_status_color($stud['status'], $stud['trans']);

                            echo '<span class="'.$colorgc.'">'.$stud['name'].";</span> ";
                        }
                    }
                    ?></td>
                <td colspan="2"><?php
                    if(isset($val['time5'])){
                        foreach($val['time5'] as $stud){
                            $colorgc = get_status_color($stud['status'], $stud['trans']);

                            echo '<span class="'.$colorgc.'">'.$stud['name'].";</span> ";
                        }
                    }
                    ?></td>
                <td colspan="2"><?php
                    if(isset($val['time6'])){
                        foreach($val['time6'] as $stud){
                            $colorgc = get_status_color($stud['status'], $stud['trans']);

                            echo '<span class="'.$colorgc.'">'.$stud['name'].";</span> ";
                        }
                    }
                    ?></td>
                <td colspan="2"><?php
                    if(isset($val['time7'])){
                        foreach($val['time7'] as $stud){
                            $colorgc = get_status_color($stud['status'], $stud['trans']);

                            echo '<span class="'.$colorgc.'">'.$stud['name'].";</span> ";
                        }
                    }
                    ?></td>
                <td colspan="2"><?php
                    if(isset($val['time8'])){
                        foreach($val['time8'] as $stud){
                            $colorgc = get_status_color($stud['status'], $stud['trans']);

                            echo '<span class="'.$colorgc.'">'.$stud['name'].";</span> ";
                        }
                    }
                    ?></td>
                <td colspan="2"><?php
                    if(isset($val['time9'])){
                        foreach($val['time9'] as $stud){
                            $colorgc = get_status_color($stud['status'], $stud['trans']);

                            echo '<span class="'.$colorgc.'">'.$stud['name'].";</span> ";
                        }
                    }
                    ?></td>
                <td colspan="2"><?php
                    if(isset($val['time10'])){
                        foreach($val['time10'] as $stud){
                            $colorgc = get_status_color($stud['status'], $stud['trans']);

                            echo '<span class="'.$colorgc.'">'.$stud['name'].";</span> ";
                        }
                    }
                    ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>