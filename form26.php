<html>
    <head>
        <style>
            .d1{
                
                background-color: gold;
                height: 500px;
                width: 80%;
                align-items:center ;
                
            }

        </style>

    </head>
    <body>
        
        <div class="d1">

        <center><h1 >Signin Form</h1></center><br><br>
        <form action="submit1.php" method="POST">
        <table align="center">
            <tr>
                <td>Username :</td>
                <td>
                    <input type="text" name="Username" >
                </td>
            </tr>

            <tr>
                <td>Password :</td>
                <td>
                    <input type="password" name="Password">
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input type="email" name="Email">
                </td>
            </tr>
            <tr>
                <td>Roll number :</td>
                <td>
                    <input type="text" name="rno">

                </td>
            </tr>
            <tr>
                <td>Message :</td>
                <td>
                    <input type="text" name="Message">
                </td>
            </tr>
            <tr>
               
                <td>
                    <input type="submit" value="submit">
                </td>
            </tr>

        </table>
        </form>
        </div>
    </body>
</html>