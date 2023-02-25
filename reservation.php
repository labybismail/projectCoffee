<!DOCTYPE html>
<html lang="en">
<head>
    <title>reservation</title>
    <?php require 'headerLinks.php'; ?>
</head>
<body>
    <?php require 'parts/header.php'; ?>
   <section class="book " id="book">
        <h1 class="heading">booking <span>reserve a table</span></h1>

        <form action="send.php" method="POST">
            <input type="text" placeholder="Name" name='name' class="box">
            <input type="email" placeholder="Email" name="email" class="box">
            <input type="text" placeholder="Number of person" name="nbr" class="box">
            <textarea  placeholder="Message" class="box" name="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="reserver" name="send" class="btn">
        </form>
    </section>
</body>
</html>