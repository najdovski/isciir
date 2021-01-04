  <?php
  include 'zaednicki/head.php';
  include 'zaednicki/menu.php';
  ?>
  
  <!--================ Banner Area =================-->
        <section class="banner_area" >
            <div class="container">
                <div class="banner_text_inner">
                    <h4 class="senka">Conference Registration</h4>
                </div>
            </div>
        </section>
<!--================End of Banner Area =================-->

        <!--================Form =================-->
        <section class="creative_feature_area" style="margin-top:-10px; margin-bottom:-20px">
            <div class="container">
              <div class="registration">
<form action="insert.php" method="POST" accept-charset="utf-8">
<fieldset>
<legend>Registration Form for ISCIIR 2019</legend>
<input type="text" name="name" placeholder="Your Name *" required>
<input type="email" name="email" placeholder="Your Email *" required>
<input type="text" name="phone" placeholder="Your Phone Number">
</select>      
<input type="submit" value="Register" name="apply"/>
</form>
</div>  


 </div>
</section>


        <!--================End of Important Dates  Area =================-->


<?php
include 'zaednicki/footer.php';
?>
<script>
window.onload = function() {
document.getElementById("registration").className= "active";
};
</script>