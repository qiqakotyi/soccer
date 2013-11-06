

<!DOCTYPE">

<html>

<title>Qiqa</title>

<body>
<h1>Welcome to Test page</h1>


<p>Congratulations! Yout trying atleast .</p>

<?php echo NJSON::encode(Fixtures::model()->with('fixtures','fixtiures.home')->findAll());?>
</body>
</html>