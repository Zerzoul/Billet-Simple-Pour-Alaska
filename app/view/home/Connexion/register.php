<div id="register">
    <div class="about_content">
        <h2>Inscription</h2>
        <div class="auth_form">
            <form action="registercheck" method="post">
                <div class="register_content">
                    <?= $nameLabel ?>
                    <?= $name ?>
                    <div class="error_content">
                        <?php
                        if (!is_null($error_name)) {
                            echo $error_name;
                        }
                        ?>
                    </div>
                </div>


                <div class="register_content">
                    <?= $mailLabel ?>
                    <?= $mail ?>
                    <div class="error_content">
                        <?php
                        if (!is_null($error_mail)) {
                            echo $error_mail;
                        }
                        ?>
                    </div>
                </div>


                <div class="register_content">
                    <?= $passLabel ?>
                    <?= $pass ?>
                    <div class="error_content">
                        <?php
                        if (!is_null($error_pass)) {
                            echo $error_pass;
                        }
                        ?>
                    </div>
                </div>

                <div class="register_content">
                    <?= $passConfirmLabel ?>
                    <?= $passConfirm ?>
                    <div class="error_content">
                        <?php
                        if (!is_null($error_confirm)) {
                            echo $error_confirm;
                        }
                        ?>
                    </div>
                </div>


                <div class="form_flex">
                    <?= $submit ?>
                </div>
            </form>
        </div>

    </div>
</div>