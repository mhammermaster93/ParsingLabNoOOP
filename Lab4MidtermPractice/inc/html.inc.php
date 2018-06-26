<?php
function htmlheader()
{ ?>
    <!DOCTYPE HTML>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>test</title>
    </head>
    <body>
    <nav>
        <div class="nav-wrapper teal lighten-1">
            <a href="#" class="brand-logo" id="move">Melanie Lab 4</a>
        </div>
    </nav>
    <p class="container add-pad">
        This is an example of parsing data from a csv file into a table format using the materialize framework. No object orientation was used.
    </p>
    <form method="post" action="" class="container center-align">
        <button class="btn waves-effect waves-light add-margin" type="submit" name="action" href="view-source:http://localhost/PHP/Lab4MidtermPractice/controller.php#">See Source code
        </button>
    </form>
<?php }

function dispData($info)
{ ?>
    <table class="container striped centered responsive-table highlight z-depth-4">
        <tr>
            <thead>
             <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>IP</th>
            </thead>
        </tr>
        <?php
            foreach($info as $item) 
            {
                echo '<tr>'.
                '<td>'.$item[0].'</td>'.
                '<td>'.$item[1].'</td>'.
                '<td>'.$item[2].'</td>'.
                '<td>'.$item[3].'</td>'.
                '<td>'.$item[4].'</td>'.
                '<td>'.$item[5].'</td>';
            } 
        ?>
    </table>
<?php }
function htmlFooter()
{ 
    echo
    '</body>'.
    '</html>';
 } 
?>