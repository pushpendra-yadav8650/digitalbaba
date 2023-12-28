
<?php 
        
        $conn=new mysqli('localhost','root',"",'digitalbaba');
        $sql2= "delete form  customer  where id=$id";
        $sql2="select *from customer";
        echo " <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>email</th>
            <th>feedback</th>
            <th>Edit</th>
            <th>Delete</th>
         

        </tr>
    
             ";
       $result= $conn->query($sql2) ;  

       
         while($row=$result->fetch_assoc())
         {
            
                       
            echo "<tr>";
            echo "<td>".$row['id'];
            echo"</td>";
            echo "<td>".$row['cname'];
            echo"</td>";
            echo "<td>".$row['cphone'];
            echo"</td>";
            echo "<td>".$row['cemail'];
            echo"</td>";
            echo "<td>".$row['cfeedback'];
            echo"</td>";
            echo "<td>";
            echo "<button>";
            echo "<a href='formedit.php?rn=$row[cname]&fn=$row[cemail]'> Edit</a>";
            echo "</button>";
            echo "</td>";
            echo "<td>";
            echo "<button>";
            //echo "<a href='datashow.php?del={$row1['id']}'> Delete</a>";
            echo "</button>";
            echo "</td>";
            

         }
        //  echo"</tr>";
        //     echo"</table>";
           //$sql3="DELETE FROM `st` WHERE id=59";
           //$conn->query($sql3);
    ?>
   
