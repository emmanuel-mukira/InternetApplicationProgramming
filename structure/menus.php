<?php

class menus{
    public function main_menu(){
?>   
   
    <div class="topnav">
        <a href="./">Home</a>
        <a href="about.php">About</a>
        <a href="">Our Projects</a>
        <a href="">Our Portfolio</a>
        <a href="">Blog</a>
        <a href="">Contact Us</a>
    
    
<?php
    }
    public function main_right_side_menu(){
        ?>
        <div class="topnav-right">
         <a href="">Sign In</a>
         <a href="signup.php">Sign Up</a>
        </div>
    </div>
        <?php
    }
}