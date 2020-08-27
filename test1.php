<html>
    <head>
        <title>
        Pyramids
        </title>
</head>

<body>
    <label>Number of Star:</label>
    <input type="text" id="input">
    <button onclick="myFunction()">Go</button>

    <p id="show"></p>

    <script>
      function myFunction(){
           rows = document.getElementById("input").value; //ประกาศตัวแปร rows โดยรับค่าจากอินพุต


            if(rows %2 == 0){ 
                for(var i=1; i<=rows; i++){
                    for(var j=1; j<=i; j++){
                        document.write(" * ");
                   }
                    document.write("<br>");
                }
            }else{ 
                for(var i=1; i<=rows; i++){
                    for(var j=i; j<=rows; j++){
                        document.write(" * ");
                    }
                        document.write("<br/>");

            }
        }

      }
  </script>

</body>
</html>