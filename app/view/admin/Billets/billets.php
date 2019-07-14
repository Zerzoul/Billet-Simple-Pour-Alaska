<div class="container-fluid px-2">
    <h3>List of billet</h3>
    <form action="" method="POST">
        <div class="row">
            <label for="typeCheck">Type : </label>
        <select name="type" class="form-control col-3" id="typeCheck">
            <option value="news">News</option>
            <option value="episode">Episode</option>
        </select>
        </div>
    </form>
        <?php var_dump($_POST['type'])?>

        <div class="row mt-3">

            <div class="border rounded p-2 mr-1 col-5">
               <?php require 'tabsListBillets.php'; ?>
            </div>

            <?php
                if($isIdNull){
            ?>
            <div class="border fixed rounded p-2 col-5" >
                <?php require 'actionOnBillet.php'; ?>
            </div>
            <?php
                }
             ?>
        </div>
</div>