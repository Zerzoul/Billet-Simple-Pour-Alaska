<h1>Connexion goes here</h1>

<div>
    <form action="">
    <?php

        $form = new \Factory\Form(array(
            'username' => 'Louise'
        ));
        echo $form->input('username');
        echo $form->input('username');
        echo $form->submit();
    ?>
    </form>
</div>