$user_agent = "aleqsandre_win/1.0 (steeve.v91@gmail.com)";

if($_POST['token'] != 'Pb7dEzfINbSANMfJaT1yx5sP'){ 
    $msg = "The token for the slash command doesn't match. Check your script.";
    die($msg);
    echo $msg;
}