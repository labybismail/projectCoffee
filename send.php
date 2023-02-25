<?PHP
if(isset($_POST['send'])){
    $sender = $_POST['email'];
    require 'coffeinfos/mail.php';

    $subject = "reserve for ".$_POST['nbr'].' people by '.$_POST['name'];
    $message = $_POST['message'];
    $headers = 'From:' . $sender;
    if (mail($recipient, $subject, $message, $headers))
    {
        echo '<script>alert("reservation sent")</script>';
        echo '<script>window.location.href="reservation.php"</script>';
        
    }
    else
    {
        echo "Error: Message not accepted";
        echo '<script>window.location.href="reservation.php"</script>';

        
    }
}
?>