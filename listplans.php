<?php

if(isset($_POST['c3']))
{
    header("location:selectplan.php");
}

?>
<html>
    <body>
        
            <table>
                <tr>
                    <form action="seelist.php" method="post">
                    <center>
                        <td>
                            Click here to view all the plans
                        </td>
                        <td>
                            <input type="button" name="c2" value="Click here">
                        </td>
                    </center>
                    </form>
                </tr>
                <tr>
                    <form method="post">
                    <td>
                        Click here to go select a particular plan
                    </td>
                        <td> <input type="button" name="c3" value="Click to select">
                        </td>
                    </form>
                </tr>
                    
        </table>
    </body>
</html>