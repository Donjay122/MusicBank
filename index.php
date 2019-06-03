<?php 
$pageTitle = 'MusicBANK';
$active = null;
$productFeatures = array(

     'Open a free crypto account in minutes',
     'Withdraw your balance instantly to fiat',
     'Pay municipal bills',
     'Order a card instantly'

);








if(isset($_GET['app'])){
  if($_GET['app'] == 'signup'){
     $pageTitle = 'Signup';
  }
}
include('inc/header.php');

?>

                <!--END OF PHP INCLUDE. NOTE: opening div container is included-->
      <div class="container">
					<header>
						<div class="main-header">
							<h1><?php echo $pageTitle; ?></h1>
							<p>Media Crypto Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
							<a href="category.php?app=signup" class="button <?php if($pageTitle == 'Signup') echo 'orange'; ?>">Signup</a>
						</div>

            <div class="head-list">
              <ul>

                <?php
                  foreach ($productFeatures as $value) {
                    echo "<i class='fas fa-check-circle tomato'>&nbsp;&nbsp;&nbsp;</i><li>$value</li><br>";
                    echo "<br>";
                  }
                ?>

              </ul>
            </div>
					</header>
			</div><!--container-->
		
				<div id="sandbox"></div><!--sandbox-->
				
		</div><!--wrapper-->	
			<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "INDEX:SPX"
    },
    {
      "title": "Shanghai Composite",
      "proName": "INDEX:XLY0"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITFINEX:BTCUSD"
    },
    {
      "title": "ETH/USD",
      "proName": "BITFINEX:ETHUSD"
    }
  ],
  "theme": "light",
  "isTransparent": true,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
<?php include('inc/footer.php'); ?>