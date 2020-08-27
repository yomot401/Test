<html>
    <head>
        <title>
            Calculate
        </title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>


<body>
    ผู้ใช้กรอกได้ 1 ช่อง
    <br>
    <from action="" method="post">
    <table width="20%" border="1">
        <tr>
            <td style="text-align:center">
                <b>100</b>
            </td>
            <td style="text-align:center">
                <b>7</b>
            </td>
            <td style="text-align:center">
                <b>107</b>
            </td>
            <td style="text-align:center">
                <b>3</b>
            </td>
            <td style="text-align:center">
                <b>104</b>
            </td>

        </tr>
        <tr>
        <td>
                <input type="text" name="firstCol" value="">
            </td>
            <td>
                <input type="text" name="secondCol" value="">
            </td>
            <td>
                <input type="text" name="thirdCol" value="">
            </td>
            <td>
                <input type="text" name="fourthCol" value="">
            </td>
            <td>
                <input type="text" name="fifthCol" value="">
            </td>
        </tr>

        </table>
        <br>
        <button type="submit">GO</button>

        <a href="" >Clear</a>
        <br>
        <p></p>

    </table>
</from>

    <script>
        $(document).ready(function(){
            $("button:submit").click(function(){ //ฟังก์ชั่นปุ่มกด
                var value = $("input[name=firstCol]").val(); //ประกาศตัวแปรโดยระบุชื่อ
                var value2 = $("input[name=secondCol]").val();
                var value3 = $("input[name=thirdCol]").val();
                var value4 = $("input[name=fourthCol]").val();
                var value5 = $("input[name=fifthCol]").val();

                var num2 = 100; //ประกาศตัวแปร พร้อมค่า
                var num3 = 7;
                var num4 = 107;
                var num5 = 3;
                var num6 = 104;

             if(value !=""){
                total = value / num2;

                result1 = total * num3;
                result2 = total * num4;
                result3 = total * num5;
                result4 = total * num6;

                $("input[name=secondCol]").val(result1);
                $("input[name=thirdCol]").val(result2);
                $("input[name=fourthCol]").val(result3);
                $("input[name=fifthCol]").val(result4);
             }else if(value2 !=""){
                total = value2 / num3;

                result1 = total * num2;
                result2 = total * num4;
                result3 = total * num5;
                result4 = total * num6;

                $("input[name=firstCol]").val(result1);
                $("input[name=thirdCol]").val(result2);
                $("input[name=fourthCol]").val(result3);
                $("input[name=fifthCol]").val(result4);
             }else if(value3 !=""){
                total = value3 / num4;

                result1 = total * num2;
                result2 = total * num3;
                result3 = total * num5;
                result4 = total * num6;

                $("input[name=firstCol]").val(result1);
                $("input[name=secondCol]").val(result2);
                $("input[name=fourthCol]").val(result3);
                $("input[name=fifthCol]").val(result4);
             }else if(value4 !=""){
                total = value4 / num5;

                result1 = total * num2;
                result2 = total * num3;
                result3 = total * num4;
                result4 = total * num6;

                $("input[name=firstCol]").val(result1);
                $("input[name=secondCol]").val(result2);
                $("input[name=thirdCol]").val(result3);
                $("input[name=fifthCol]").val(result4);
             }else if(value5 !=""){
                total = value5 / num6;

                result1 = total * num2;
                result2 = total * num3;
                result3 = total * num4;
                result4 = total * num5;

                $("input[name=firstCol]").val(result1);
                $("input[name=secondCol]").val(result2);
                $("input[name=thirdCol]").val(result3);
                $("input[name=fourthCol]").val(result4);
             }else{
                $(" p ").text("No value");
             }
            });
        });
        
        

    </script>
</body>
</html>