<?php
$pageTitle = 'Full Page';
if(isset($_GET['app']) || isset($_GET['status'])){
	if($_GET['app'] == 'login'){
		$pageTitle = 'Login';
	}elseif($_GET['app'] == 'balance'){
	    $pageTitle = 'Balance';
	}elseif($_GET['app'] == 'withdraw'){
	    $pageTitle = 'Withdraw';
	}elseif($_GET['app'] == 'contact'){
	    $pageTitle = 'Contact';
	}elseif($_GET['app'] == 'signup'){
		$pageTitle = 'Signup';
	}elseif($_GET['status'] == 'thanks'){
		$pageTitle = 'Thank you!';
	}
}

  include('inc/header.php'); 

  ?>


<div class="container">
	<?php echo "<h2>$pageTitle</h2>" ?>

    <?php
    
    if($pageTitle == 'Signup'){
       include('inc/signup.php');
    }

    if($pageTitle == 'Thank you!'){
       echo '<p>Thanks for signing up for Musibank. Check your email to verify your account</p>';
    }


    ?>











</div>

<?php include('inc/footer.php'); ?>