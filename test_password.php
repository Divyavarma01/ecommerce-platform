<?php

$hash = '$2y$10$abcdefghijk1234567890LMNOPQRSTUVWXyz1234567...';

if(password_verify("admin123",$hash))
{
    echo "Password Correct";
}
else
{
    echo "Password Wrong";
}

?>