<?php

$d = dir(getcwd());

echo "Handle: " . $d->handle . "<br>";
echo "Path: " . $d->path . "<br>";

while (($file = $d->read()) !== false){ 
  echo "filename: " . $file . "<br>"; 
} 
$d->close(); 

echo "dsdasd<br>";


if ($handle = opendir('/home/u323117235/public_html/test/Eksperymenty')) {
    echo "Directory handle: $handle\n";
    echo "Entries:<br>";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry<br>";
		echo "<a href='Eksperymenty/".$entry."'>$entry</a>";
    }

    /* This is the WRONG way to loop over the directory. */
    while ($entry = readdir($handle)) {
        echo "$entry<p>asd</p>";
    }

    closedir($handle);
}
?>