<html><head><title>It works!</title></head>
<body>
Your site is ready to go!<br />Host: <?php echo $_SERVER['HTTP_HOST']; ?>
<?php
echo "HERE";
print_r(mail("tommy@sitehost.co.nz","LAMBDA TEST","Hello"));
?>
</body></html>
