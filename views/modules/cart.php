<?php
if(isset($_POST["product"])){
    $_SESSION["product"] = $_POST['product'];
?>
    <!-- echo " -->
    <div class='content-checkout'>
        <div class='cart'>
            <div class='Product'>
                <h4><?=$_POST['product']?></h4><img src="<?=$_POST["image"]?>" alt="<?=$_POST["image"]?>">
                <p><span>S/</span><?=$_POST["amount"]?></p>
            </div>
        </div>
        <div class='checkout'>
            <h3>Datos del cliente</h3>
            <form id='form-control' method='post'> 
                <input type='hidden' value="<?=$_POST["amount"]?>" />
                <input type='hidden' value="<?=$_POST["image"]?>" />
                <div class='control-group'>
                    <label for='firstname'>First Name</label>
                    <input type='text' id='firstname' placeholder=' ' name='firstname' autocomplete='off' required='' value=''>
                </div>
                <div class='control-group'>
                    <label for='lastname'>Last Name</label>
                    <input type='text' id='lastname' placeholder=' ' name='lastname' autocomplete='off' required='' value=''>
                </div>
                <div class='control-group'>
                    <label for='email'>Email</label>
                    <input type='emai' id='email'  placeholder=' ' name='email' autocomplete='off' required='' value=''>
                </div>
                <button>Registrar</button>
            </form>
        </div>
    </div>
    <script src="views/js/cart.js"></script>
<?php
}
?>