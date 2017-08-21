<?php



function onePace($condition,$id=1){
	    $res = allPublic($condition);
      $content = $res['result'];
      $other = $res['other'];
      if(!empty($other)) 
          $content['other']=allPublic($other);

      return $content;
}



function allBlue($condition)
{

    $res = allPublic($condition);
    
    $content = $res['result'];

    $other = $res['other'];

        if (!empty($other)) {
                $cn = "\$result";
                $mod ="$cn = M();";
                $mysql = array("select","save","update","delete","fetchsql","add","startTrans");
              
                $start = "startTrans";

              if(in_array($start,array_keys($other))){
                 $mod .= "$cn ->$start();";
              }
              // var_dump($other);
              unset($other['startTrans']);


              foreach ($other as $key => $value) { $mod .= "\$result";
                   foreach ($value as $k => $v) {
               
                        if($k=="other"){
                               $other = $v;
                        } else {
                           in_array($k, $mysql)? $mod.=";\$content[] =".$cn."->$k(\$resulte)": $mod.="->$k(\$value[\"$k\"])";
                        } 
                    
                    }    
                    $mod .= ";";
                    eval($mod);
                    $mod = "";
            }



            if (!in_array(0,$content)) {
              $result->commit();
              goto turn;
            }else{
              $result->rollback();
              goto turn;
            }

           
        }
           goto turn;
      
      turn:
       return $content;
}

function allPublic($condition){

    $cn = "\$result";
    $mod ="$cn = M();";

     $mysql = array("select","save","update","delete","fetchsql","add","startTrans","find");
     $mod .= "$cn";
 
     foreach ($condition as $key => $value) {
          if($key=="other"){
                 $other = $value;
          } else {
             in_array($key, $mysql)? $mod.=";\$content =".$cn."->$key();": $mod.="->$key(\$condition[\"$key\"])";
          }
      }
    
      eval($mod);
  
     
     if (count($condition)==1) {
       $content=1;
     }

      return [
               'result' => $content,
               'other'  => $other,
             ];
}
