<?php
    session_start();
    if(isset($_POST['btnYes'])){
        unset($_SESSION['k']);
        unset($_SESSION['CURR_PAGE'] );
        unset($_SESSION['username'] );
        header("Location: ../");
    }
    if(isset($_POST['btnNo'])){
        header("Location: ./");
    }

?>
<?php require_once("header.php")?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once("nav.php")?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><i class="fa fa-confirm"></i> Signout Confirmation</h1>
                </div>
                <p>Do you want to sign out?</p>
                <form method="post">
                    <button type="submit" name="btnYes" class="btn btn-dark"> Yes</button>
                    <button type="submit" name="btnNo"class="btn btn-dark"> No</button>
                </form>
            </main>
        </div>
    </div>
<?php require_once("footer.php")?>
