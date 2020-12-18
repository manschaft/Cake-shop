<?php 
echo '
<header class="main-header">
    <nav class="nav main-nav">

        <input type="checkbox" id="check">
        
        <label for="check" class="checkbtn">
            <i class="fas fa-bars animate__animated animate__backInDown"></i>
        </label>

        <h1 class="business-name"><a href="index.html" class="animate__animated animate__backInDown">Malako</a></h1>

        <ul>
            <li><a href="index.php" class="<?php if($page == 'index'){echo 'active';}?>" href="index.php">HOME</a></li>
            <li><a href="index.php" class="<?php if($page == 'products'){echo 'active';}?>" href="products.php">PRODUCTS</a></li>
            <li><a href="index.php" class="<?php if($page == 'makeyourcake'){echo 'active';}?>" href="makeyourcake.php">MAKE YOUR CAKE</a></li>
            <li><a href="index.php" class="<?php if($page == 'about'){echo 'active';}?>" href="about.php">ABOUT</a></li>
            <li><a href="index.php" class="<?php if($page == 'contact'){echo 'active';}?>" href="contact.php">CONTACT US</a></li>
        </ul>
    </nav>
</header>
'
?>