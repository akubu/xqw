<?php
$xml=simplexml_load_file("new.xml");
echo "<h2>".$xml->getName()."</h2>"."<hr />" ;
print_r($xml);

foreach($xml->children() as $book)
{
//echo $book->getName() ." :" . $book. "<br>";
echo $book->author."<br />";
echo $book->year."<hr />";

}
?>
