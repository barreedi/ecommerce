<?php

//echo password_hash("admin", PASSWORD_DEFAULT);

//echo "<br>";

if(password_verify('admin', '$2y$12$hKaYkmysAUxuw4gYLdTL3eyB7eVzwt4.mK4gGCQUYMD0X/YNzINrG')){
    echo "senha correta";
}else {
    echo "senha incorreta";
}