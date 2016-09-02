<?php
echo "hi";
public class connection
{
	$_host="localhost";
	$_dbuser="akshay";
	$_dbpass="abcd";
	$_database="form";
	public $_conn;

	public function connect()
	{	
		echo "connection success";
		$conn=mysql_connect($this->_host,$this->_dbuser,$this->_dbpass);
		if(!$conn)
		{
			die("cannot connect");
		}
		else
		{
			$this->_conn=$conn;
			echo "connection est";
		}			
		return $this->_conn;
	}

	public function search($param)
	{
		mysql_select_db($this->_database);
		$sql="select * from input where Email='$param'";
		$result=mysql_query($sql);
		$num=mysql_numrows($result);
		//echo "$num";
		mysql_close($this->_conn);
		$i=0;
		while ($i < $num) 
		{
			$field1=mysql_result($result,$i,"Name");
			echo "$field1 <br>";
			$i++;
		}

	}
}
?>
