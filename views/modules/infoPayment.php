
<h2>Confirmar compra <img src="https://iziweb001.s3.amazonaws.com/webresources/img/logo.png" alt="Logo de Izipay"></h2>
      <div class="content-checkout">
        <div class='cart'>
          <div class='Product'>
              <h4><?=$_SESSION["product"]?></h4><img src="<?=$_POST['image']?>" alt="<?=$_POST['image']?>">
              <p><span>S/</span><?=$_POST['amount']?></p>
          </div>
        </div>
        <div class='checkout'>
            <h3>Datos del cliente</h3>
            <form action="<?= PaymentController::getUrlPayment() ?>" method="post">
                <div class='control-group'>
                    <input type="text" value="<?=$_POST["firstName"] ?>" disabled>
                </div>
                <div class='control-group'>
                    <input type="text" value="<?=$_POST["lastName"] ?>" disabled>
                </div>
                <div class='control-group'>
                    <input type='email' value="<?=$_POST["email"] ?>" disabled>
                </div>
                <?php
                    foreach(PaymentController::initPayment() as $name => $value){
                        echo "<input type='hidden' name='$name' value='$value' />";
                    }
                ?>
                <button  type="submit" name="pagar">Confirmar</button>
            </form>
        </div>
      </div>