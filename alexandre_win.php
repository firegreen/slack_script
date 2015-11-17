$user_agent = "aleqsandre_win/1.0 (steeve.v91@gmail.com)";

if($_POST['token'] != 'DpOnUdtLyqry3hf6OXlMgEKv'){ 
    $msg = "The token for the slash command doesn't match. Check your script.";
    die($msg);
    echo $msg;
}

echo "https://github.com/firegreen/slack_script/blob/master/slack_script/alex_win.gif?raw=true";