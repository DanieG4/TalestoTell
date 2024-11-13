<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php echo '
    <form action="welcome.php" method="POST">
        <div>
            <label for="name">
                Name
            </label> 
            <input type="text" name="name"> 
        </div>
    
        <div>
            <label for="email">
                E-mail
            </label> 
            <input type="text" name="email"> 
        </div>
    
        <input type="submit">
    </form>
'; ?>



</body>
</html> 