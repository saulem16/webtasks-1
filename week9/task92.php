<a href="task92.php?category=sport">Sport news</a> | <a href="task92.php?category=politics">Politic news</a><br/><br/>
<a href="task92.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task92.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$category = ["sport"];
$format=null;
   if (isset($_GET['category']) && isset($_GET['format'])){
      $category = $_GET['category'];
      print json_encode($news[$category]);
   }
   else if(isset($_GET['category'])){
      $category = $_GET['category'];
      foreach ($news[$category] as $item){
         print "<h4>$item</h4>";
         print "<div style = 'border-bottom:3px solid black;'></div>";
      }
   }
?>