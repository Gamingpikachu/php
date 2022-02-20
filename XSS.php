<h1>Cross site scripting</h1>
<?php
echo htmlspecialchars('<script>alert("babo");</script>');
 ?>
