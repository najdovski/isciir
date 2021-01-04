<!DOCTYPE HTML>

<?php
 if (is_writable(session_save_path())) {
    echo 'Session path "'.session_save_path().'" is not writable for PHP!'; 
}

    session_start();
if (!is_writable(session_save_path())) {
    echo 'Session path "'.session_save_path().'" is not writable for PHP!'; 
}
    // Дефинирање корисник и лозинка
    $korisnik = "admin";
    $lozinka = "admin";

    $error = "<h4>Please log in, in order to see the registered members of the conference</h4>";

    // Проверка дали е точно логиран
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "You are logged in";
        header('Location: registered.php');
    } 
        
    // Проверка на точни информации за корисник и лозинка
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $korisnik && $_POST['password'] == $lozinka) {
            $_SESSION['loggedIn'] = true;
            header('Location: registered.php');
        } else {
            $_SESSION['loggedIn'] = false;
            $error = "Invalid login credentials!";
        }
    }

	 include 'zaednicki/head.php';
  include 'zaednicki/menu.php';
  ?>
<style>
.button {
  display:inline;
  border-radius: 8px;
  background-color: #029114;
  border: none;
  color: white;
  padding: 12px 20px;
  text-align: center;
  font-size: 16px;
  margin: 10px 5px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}
</style>
<html>
<title>Log in page</title>
  <!--================ Banner Area =================-->
        <section class="banner_area" >
            <div class="container">
                <div class="banner_text_inner">
                    <h4 class="senka">Log in</h4>
                </div>
            </div>
        </section>
<!--================End of Banner Area =================-->
<div class="container"style="text-align:center; margin:50px 0px">       
	   <form method="post" action="login.php">
            <label for="username"><span style="font-size:20px">Username:</span></label><br/>
            <input type="text" name="username" id="username"><br/>
            <label for="password"><span style="font-size:20px">Password:</span></label><br/>
            <input type="password" name="password" id="password"><br/>
            <input type="submit" name="export" class="button" value="Login"/>
        </form>
</div>
<?php
include 'zaednicki/footer.php';
?>