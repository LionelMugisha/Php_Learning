<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <!-- different way to pass a variable throught the address bar by using one line or multiple lines -->
        
        <!-- By using multiple line-->
        <h1>
            <?php 
                $name = $_GET['name']; 
                echo "Hello $name";
            ?>  
        </h1>

        <!-- By using one single line-->
        <h1>
            <?php echo "Hello " . $_GET['name']; ?>
        </h1>

    </header>

</body>
</html>