<?php
if(isset($_POST['c1']))
{
    $one=$_POST['pname'];
    $two=$_POST['mrental'];
    $three=$_POST['fnet'];
    $four=$_POST['fcalls'];
    $five=$_POST['fsms'];
    $six=$_POST['ccharges'];
    $seven=$_POST['smscharges'];
    $eight=$_POST['dcharges'];
    $nine=$_POST['rcharges'];
    $conn=mysql_connect("localhost","root","root");
    if($conn==null)
    {
        echo "Server not connected";
        exit(0);
    }
    mysql_select_db("techaspect");
    $q="insert into techasp(pnam,mrent,fnet,fcall,fsmss,ccharge,smscharge,dcharge,rcharge) values('$one','$two','$three','$four','$five','$six','$seven','$eight','$nine')";
    $res1=mysql_query($q);
    echo "Uploaded";
    header("location:listplans.php");
    
}
?>

<html>
    <body>
        <form method="post">
        <table>
            <tr>
                <td>
                    Plan Name
                </td>
                <td>
                    <input type="text" name="pname" placeholder="Enter text" required>
                </td>
            </tr>
            <tr>
                <td>
                    Monthly Rental
                </td>
                <td>
                    <input type="number" name="mrental" placeholder="Enter number" required>
                </td>
            </tr>
            <tr>
                <td>
                    Free Internet
                </td>
                <td>
                    <input type="text" name="fnet" placeholder="Enter text" required>
                </td>
            </tr>
            <tr>
                <td>
                    Free Calls
                </td>
                <td>
                    <input type="number" name="fcalls" value="Enter here" placeholder="Enter number" required>
                </td>
            </tr>
            <tr>
                <td>
                    Free SMS
                </td>
                <td>
                    <input type="number" name="fsms" value="Enter here" placeholder="Enter number" required>
                </td>
            </tr>
            <tr>
                <td>
                    Call charges
                </td>
                <td>
                    <input type="number" name="ccharges" value="Enter here" placeholder="Enter number" required>
                </td>
            </tr>
            <tr>
                <td>
                    SMS Charges
                </td>
                <td>
                    <input type="number" name="smscharges" value="Enter here" placeholder="Enter number" required>
                </td>
            </tr>
            <tr>
                <td>
                    Data charges
                </td>
                <td>
                    <input type="number" name="dcharges" value="Enter here" placeholder="Enter number" required>
                </td>
            </tr>
            <tr>
                <td>
                    Roaming charges
                </td>
                <td>
                    <input type="number" name="rcharges" value="Enter here" placeholder="Enter number" required>
                </td>
            </tr>
        </table>
            <table>
                <tr>
                    <td>
                        <input type="button" name="c1" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>