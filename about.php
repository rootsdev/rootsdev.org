<?php 

include('includes/header.php'); 

$developers = array(
  'david-tanner',
  'justin-york'
);

?>
<div class="container">
    <h1>About Us</h1>
    
    <div class="span3 subnav-wrap">
        <ul class="nav nav-tabs nav-stacked subnav" data-spy="affix" data-offset-top="0">
            <?php
              foreach($developers as $name) {
                echo '<li><a href="#', $name, '">', ucwords(str_replace('-',' ',$name)), '</a></li>';
              }
            ?>
        </ul>
    </div>
    
    <div class="span9">
        <!-- begin developer includes -->
        <?php foreach($developers as $name) { ?>
            <div id="<?php echo $name; ?>">
                <h3><?php echo ucwords(str_replace('-',' ',$name)); ?></h3>
                <div class="well bio">  
                    <table class="table">
                        <tbody>
                            <?php include('developers/'.$name.'.php');?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php } ?>
        <!-- begin developer includes -->
    </div>
    
</div>

<?php include('includes/footer.php'); ?>