<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>contact form response</title>
    <style type="text/css">
        #container {
            width: 800px;
            border: 1px solid black;
            padding: 10px;
            margin: 10px auto;
        }

        .colorRed {
            color: #F00;
        }

    </style>
</head>

<body>
    <div>
        <img src="content/images/koala_banner_new(3).jpg" alt="Koala Bear National Information Center Banner" style="width: 100%">
    </div>
    <h1>Contact Us</h1>
    <nav>
        <ul class="ul">
            <li class="li"><a href="index.html">Home</a></li>
            <li class="li"><a href="about.html">About</a></li>
            <li class="li"><a href="fast_facts.html">Fast Facts</a></li>
            <!--
        <li class="li">Gallery</li>
        <li class="li">Adopt</li>
-->
            <li class="li"><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
    <div id="container">
        <h1>WDV101 Intro HTML and CSS</h1>
        <h2> Form Response Porcessor</h2>

        <p>This process will process the 'name = value' pairs for all the elements of your contact form. It will format and respond by sending an html page containing a table with the information you entered in the form.
        </p>

        <p>Instructions:</p>
        <ol>
            <li>To call this page use <strong>form_response_basic.php</strong> in the action attribute of your form.</li>
            <li>Make sure you choose method=&quot;post&quot;.</li>
            <li>Ensure a link to this form from your homework page</li>
            <li>Upload the updates homework page, the form.html page AND the php processor file to your host server. NOTE: the html form page AND the processor PHP page must be in the same location!</li>
        </ol>

    </div>
    <!--close div container-->

    <p>RESULT WILL DISPLAY BELOW THIS LINE</p>
    <hr>
    <p>&nbsp;</p>

    <?php

echo "<p class='colorRed'>This page was created by PHP on the server and sent back to your browser. </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	}
	echo "</table>";
	echo "<p>&nbsp;</p>";

?>

</body>

</html>
