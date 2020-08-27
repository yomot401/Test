<html>
    <head>
        <title>Array</title>
    </head>

    <body>
        
        <?php
        $con = @mysqli_connect('localhost','root','','address') or die ("ไม่สามารถเชื่อฐานข้อมูลได้");
        mysqli_query($con, 'set names utf8');
        $result = mysqli_query($con, "select * from array1"); //เลือกทุกcolum และ rows ในตาราง array1
        if(mysqli_num_rows($result) > 0)
        {
            ?>
      
        <b>Array1</b>
        <table border="1">
            <tr>
                <th>Code</th>
                <th>Name</th>
            </tr>
            
        <?php
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            echo "<tr>";
            echo " <td> " . $row['code'] . "</td>";
            echo " <td> " . $row['name'] . "</td>";
            echo "</tr>";
        }
        ?>
     </table>
     <?php
    }else{
        echo "ไม่พบข้อมูล";
    }

    mysqli_free_result($result);
    mysqli_close($con);
    ?>
     
 <br>
 <?php
        $con = @mysqli_connect('localhost','root','','address') or die ("ไม่สามารถเชื่อฐานข้อมูลได้");
        mysqli_query($con, 'set names utf8');
        $result = mysqli_query($con, "select * from array2"); //เลือกทุกcolum และ rows ในตาราง array2
        if(mysqli_num_rows($result) > 0)
        {
            ?>
        <b>Array2</b>
        <table border="1">
            <tr>
                <th>Code</th>
                <th>City</th>
            </tr>
            <?php
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) //ดึงข้อมูลมาโดยการใช้ลูป
        {
            echo "<tr>";
            echo " <td> " . $row['code'] . "</td>";
            echo " <td> " . $row['city'] . "</td>";
            echo "</tr>";
        }
        ?>
     </table>
        <?php
    }else{
        echo "ไม่พบข้อมูล";
    }

    mysqli_free_result($result);
    mysqli_close($con);
    ?>
        <br>
        <hr>
        <br>
        <?php
        $con = @mysqli_connect('localhost','root','','address') or die ("ไม่สามารถเชื่อฐานข้อมูลได้");
        mysqli_query($con, 'set names utf8');
        $result = mysqli_query($con, "select * from array1 join array2 on array1.code = array2.code"); //เลือกทุกcolum และ rows โดยการjoin ตาราง โดยที่เปรียบrows code
        if(mysqli_num_rows($result) > 0)
        {
            ?>
    <b>Output</b>
    
        <table border="1">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>City</th>
            </tr>
            <?php
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            echo "<tr>";
            echo " <td> " . $row['code'] . "</td>";
            echo " <td> " . $row['name'] . "</td>";
            echo " <td> " . $row['city'] . "</td>";
            echo "</tr>";
        }
        ?>
     </table>
        <?php
    }else{
        echo "ไม่พบข้อมูล";
    }

    mysqli_free_result($result);
    mysqli_close($con);
    ?>
    </body>
</html>