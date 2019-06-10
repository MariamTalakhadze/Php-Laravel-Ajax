<?php
    $data= [
        [1,2,3,4,5,6,7,8],
        [9,10,11,12,13,14,15,16],
        [17,18,19,20,21,22,23,24],
        [17,18,19,20,21,22,23,24],
        [17,18,19,20,21,22,23,24],
        [17,18,19,20,21,22,23,24]
    ];
    $arr=[];
     $size=sizeOf($data);
      for($r=0; $r<ceil(($size/2)); $r++){
        $ar=[];
        $changedar=[];
            for($i=$r; $i<($size); $i++){
                $sizetwo= sizeOf($data[$i]);
                $count= $size*$sizetwo;
                for($k=$r; $k<($sizetwo-$r); $k++){
                  if($i==$r){
                  $topush=$data[$i][$k];
                  array_push($arr,$topush);
                }
                else if($i<($size-($r+1))){
                  $topush=$data[$i][$sizetwo-($k+1)];
                  array_push($arr,$topush);
                  $topush2=$data[$i][$r];
                  array_push($ar, $topush2);
                  break;
                }
                else if($i==$size-($r+1)){
                    $topush= $data[$i][$sizetwo-($k+1)];
                    array_push($arr,$topush);
                }
              }
            }
            for($l=0; $l<sizeOf($ar); $l++){
              array_push($arr, $ar[(sizeOf($ar)-($l+1))]);
            }

      }
      print_r($arr);







?>
