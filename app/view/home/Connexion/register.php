<div id="register">
    <div class="about_content">
        <h2>Inscription</h2>
        <div class="auth_form">
            <form action="registercheck" method="post">
                <div class="form_content">
                    <?= $nameLabel ?>
                    <?= $name ?>
                    <?php
                    if(!is_null($error_name)){
                        echo $error_name;
                    }
                    ?>
                </div>
                <div class="form_content">
                    <?= $mailLabel ?>
                    <?= $mail ?>
                    <?php
                    if(!is_null($error_mail)){
                        echo $error_mail;
                    }
                    ?>
                </div>
                <div class="form_content">
                    <?= $passLabel ?>
                    <?= $pass ?>
                    <?php
                    if(!is_null($error_pass)){
                        echo $error_pass;
                    }
                    ?>
                </div>
                <div class="form_content">
                    <?= $passConfirmLabel ?>
                    <?= $passConfirm ?>
                    <?php
                    if(!is_null($error_confirm)){
                        echo $error_confirm;
                    }
                    ?>
                </div>
                <div  class="form_flex">
                    <?= $submit ?>
                </div>
            </form>
        </div>

    </div>
</div>