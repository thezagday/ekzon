<?php
if (mail("roman.zagday@gmail.com","test subject", "test body"))
echo "The message was sent to the mail function, please check your mailbox";
else
echo "The mail function does not work";
?>