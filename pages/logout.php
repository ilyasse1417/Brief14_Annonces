<?php
not_auth_redirect();
session_destroy(); //destroy the session
header("location:/page/home"); //to redirect back to "home page" after logging out
exit();
