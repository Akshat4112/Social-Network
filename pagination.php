<?php
$query="select *from posts";
$result= mysqli_query($con,$query);
//count total recodrs
$total_posts= mysqli_num_rows($result);
//Using ceil function to seprate ceil records
$total_pages= ceil($total_posts/$per_page);
//going to first page
//some styling
//this echo for some styling
echo "<br><br>";
for($i=1;$i<=$total_pages;$i++){
    echo "<a href='home.php?page=$i'>$i</a>".' ';
}
//going to last page
echo "<a href='home.php?page=$total_pages'>Last Page</a>";