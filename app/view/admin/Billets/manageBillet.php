<?php
if (!$isTypeNull) {
    ?>
    <div class="border rounded p-2 mr-1 col-5">
        <?php require 'tabsListBillets.php'; ?>
    </div>
    <?php
}
?>

<?php
if (!$isIdNull) {
    ?>
    <div class="border fixed rounded p-2 col-5">
        <?php require 'actionOnBillet.php'; ?>
    </div>
    <?php
}
?>

