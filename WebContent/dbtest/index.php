<!-- Author: Dan Barrese, May 14, 2014 -->
<html>
    <head>
        <title>MySQL Database Test</title>
    </head>
<body>
<h1>PHP and MySQL database connection tests</h1>
<p><?php echo "Hello from PHP!" ?></p>
<p>
<?php
$username = "dantest";
$password = "dantest";
$hostname = "localhost";
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
    or die("BAD! Unable to connect to MySQL");
echo "GOOD! Connected to MySQL.<br>";

//select a database to work with
$selected = mysql_select_db("dantest",$dbhandle)
    or die("Could not select dantest");
echo "GOOD! Connected to database.<br>";

//execute the SQL query and return records
$result = mysql_query("select * from People");

//fetch tha data from the database
echo "Here are the query results:<br>";
while ($row = mysql_fetch_array($result)) {
    echo "Name: ".$row{'name'}."<br>";
}

//close the connection
mysql_close($dbhandle);
?></p>
</body>
</html>
