<?php

<?php
if(fsockopen("real258.herokuapp.com",80))
{
print "I can see port 80";
}
else
{
print "I cannot see port 80";
}
?>
