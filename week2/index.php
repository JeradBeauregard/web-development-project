<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    <script>
        document.write('HI IM JAVASCRIPT ');
    </script>
    <?php

    echo 'hey heyyy I am an echoooo';
    print ' guess what I am printed';
    echo ' Hello world!';
    echo ' gary'; 

    ?>

<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <?php

    echo '<h1>PHP and Creating Output</h1>';

   echo' <p>The PHP echo command can be used to create output.</p>';

   echo ' <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>';
    
 echo '   <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul> ';
    
 echo '   <h2>More HTML to Convert</h2> ';

   echo ' <p>PHP says "Hello World!"</p> ';

 echo ' <p>Can you display a sentence with \'\'\' and """?</p> ';

 echo '   <img src="https://images.nightcafe.studio/jobs/UgI6tTxhPiHUmEl5OIQn/UgI6tTxhPiHUmEl5OIQn--3--c04y8_4x.jpg?tr=w-1600,c-at_max" width = "200px">  ';

 $firstName = 'Jerad';
 $lastName = 'Beauregard';

 echo "Hello, " . $firstName . " " . $lastName;

 $person['first'] = 'Jerad';
 $person['last'] = 'Beauregard';
 $person['email'] = 'jeradbeauregard@gmail.com';
 $person['web'] = 'https://www.instagram.com/jeradbeauregard/';

 $person2 = array('jerad','beauregard','jeradbeauregard');

 echo ' Hello,  '. $person['first'] . $person2[1];
 
 echo '<br>';

 echo '<a href=' . $person['web'] . '>my website</a>';
 
 echo '<br>';

 echo '<a href="mailto:' . $person['email'] . '">send me an email</a>';



    ?>


  </body>
</html>
    
</body>
</html>