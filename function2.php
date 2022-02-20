<h2>basic</h2>
<?php
  function basic(){
    print("Lorem ipsum dolor sit1<br>");
    print("Lorem ipsum dolor sit2<br>");
  }

  basic();
 ?>
 <h2>parameter &amp; argument</h2>
 <?php
 function sum($left, $right){
   print($left+$right);
   print("<br>");
 }
 sum(2,4);
 sum(4,6);
  ?>
<h2>return</h2>
<?php
function sum2($left, $right){
  return $left+$right;
}
print(sum2(2,4));
file_put_contents('result.txt', sum2(2,4));
 ?>
