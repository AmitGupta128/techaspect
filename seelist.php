<?php
if(isset($_POST['c2']))
{
    $conn=mysql_connect("localhost","root","root");
    if($conn==null)
    {
        echo "Unable to connect to server";
        exit(0);
    }
    mysql_select_db("techaspect");
    $q="select * from techasp";
    $res1=mysql_query($q);
    while($arr=mysql_fetch_array($res1))
    {
        echo $arr[0]."\n";
        if(arr[0]==null)
        {
            header("location:errorpage.php");
        }
    }
    echo "<script>setTimeout(\"location.href = 'http://localhost/test/Techaspect/selectplan.php';\",5000);</script>";
}
?>