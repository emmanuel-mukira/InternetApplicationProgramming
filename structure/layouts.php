<?php
class layouts{
    public function heading(){
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php
         // Generate a cache buster using the current timestamp
         $cacheBuster = time();
         ?>
     <link rel="stylesheet" href="css/style.css?v=<?php echo $cacheBuster; ?>">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css?v=<?php echo $cacheBuster; ?>">

   </head>
     <body>
     <?php
    }

    public function footer(){
     ?>
     <div class="footer">
        Copyright &copy;ICS <?php print date("Y");?>
     </div>
     </body>
     </html>
     <?php
     }
     public function card(){
      ?>
      <div class="card" style="width: 18rem;">
      <img src="" class="card-img-top" alt="...">
      <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      </div>
      <?php
     }
     
}
