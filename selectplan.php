<?php
if(isset($_POST['checkb']))
{
    $itemchosen=$_POST['Fields'];
    $conn=mysql_connect("localhost","root","root");
    if($conn==null)
    {
        echo "Not able to connect to database";
        exit(0);
    }
    mysql_select_db("techaspect");
    if($itemchosen=="mrent")
    {
        $q="Select pnam from techasp where '$itemchosen'==mrent";
        $res=mysql_query($q);
        while($row=mysql_fetch_array($res))
        {
            echo $row."\n";
        }
    }
    if($itemchosen=="fnet")
    {
        $q="Select pnam from techasp where '$itemchosen'==fnet";
        $res=mysql_query($q);
        while($row=mysql_fetch_array($res))
        {
            echo $row."\n";
        }
    }
    if($itemchosen=="fcall")
    {
        $q="Select pnam from techasp where '$itemchosen'==fcall";
        $res=mysql_query($q);
        while($row=mysql_fetch_array($res))
        {
            echo $row."\n";
        }
    }
    if($itemchosen=="fsmss")
    {
        $q="Select pnam from techasp where '$itemchosen'==fsmss";
        $res=mysql_query($q);
        while($row=mysql_fetch_array($res))
        {
            echo $row."\n";
        }
    }
    mysql_close();
}
?>


<html>
    <body>
        <form method="post">
        <center>
            <table>
                <tr>
                    <td> Enter the value on whose basis you want the plan name</td>
                    <td><select name="Fields">
                        <option value="mrent">Monthly Rental</option>
                        <option value="fnet">Freen Internet</option>
                        <option value="fcall">Free Call</option>
                        <option value="fsmss">Free SMS</option>
                        </select>
                    </td>
                    <td>
                        <input type="button" name="checkb" value="Click here">
                    </td>
                </tr>
            </table>
        </center>
        </form>
    </body>
</html>