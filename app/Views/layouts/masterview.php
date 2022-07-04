<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterView</title>
</head>
<body>
  <header>

    <h1>this is header section from master</h1>
  </header>


<section>
    <h1>this is middile section from master</h1>

    <?=$this->renderSection('middile section')?>
</section>



  <footer>
    <h1>this is footer section from master</h1>
  </footer>
</body>
</html>