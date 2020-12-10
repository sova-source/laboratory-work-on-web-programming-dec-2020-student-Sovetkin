<?php 

class GetPositionsToOrgchart {

public static function showOrghart($id){
	
$dbconn = Db::getConnection();
function getChilds($dbconn, $id) {
   $stmt = $dbconn->prepare("SELECT `id`, `dolgnost` FROM `sraspisanie` WHERE `code`=?");
   $stmt->execute(array($id));
   return $stmt;
}

$stmt = getChilds($dbconn, $id);

if($id == 0) {
   // Initial load: Get the first children too
   $row = $stmt->fetch(PDO::FETCH_ASSOC);

   $stmt2 = getChilds($dbconn, $row['id']);
   $i_j = 0;
   $childs = array();
   while($childrow = $stmt2->fetch(PDO::FETCH_ASSOC)) {
      $stmt3 = getChilds($dbconn, $childrow['id']);
      $hasChildRow = $stmt3->rowCount();
      if($hasChildRow > 0) {
         $hasChild = true;
      } else {         
         $hasChild = false;
      }
      
      $childs[$i_j] = array("id" => $childrow['id'], "dolgnost" => $childrow['dolgnost'], "hasChild" => $hasChild);
      $i_j++;
   }

   echo json_encode(array("id" => $row['id'], "dolgnost" => $row['dolgnost'], "children" => $childs));
} else {
   // Just check if there are children
   $i_i = 0;
   $childs = array();
   
   while($childrow = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $stmt3 = getChilds($dbconn, $childrow['id']);
      $hasChildRow = $stmt3->rowCount();
      if($hasChildRow > 0) {
         $hasChild = true;
      } else {
         $hasChild = false;
      }
      
      $childs[$i_i] = array("id" => $childrow['id'], "dolgnost" => $childrow['dolgnost'], "hasChild" => $hasChild);
      $i_i++;     
   }
   
   echo json_encode(array("result" => $childs));
}
}
}
?>