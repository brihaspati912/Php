<?php
//include()=>copies the context of file(php/html/text)
//and includes it in your php file
//section can be made reusable
// change only needed in one place
//this is an index file with folder containing header and fotter file

include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This is home page</h1>
</body>

</html>
<?php
include("footer.html");
?>