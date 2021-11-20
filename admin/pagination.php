<div class ="pagination"id="pagination" style="text-align: center;">
<?php
$param = "";
if($search){
    $param = "ten=" .$search."&";
}
if ($current_page > 2) {
    $first_page = 1;
    ?>
    <a class="btn btn-outline-success" href="?<?=$param?>per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a>
    <?php
}
if ($current_page > 1) {
    $prev_page = $current_page - 1;
    ?>
    <a class="btn btn-outline-success" href="?<?=$param?>per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>"><</a>
<?php }
?>
<?php for ($num = 1; $num <= $totalRecords; $num++) { ?>
    <?php if ($num != $current_page) { ?>
        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
            <a class="btn btn-outline-success" href="?<?=$param?>per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
        <?php } ?>
    <?php } else { ?>
        <a class="btn btn-success"><?= $num ?></a>
    <?php } ?>
<?php } ?>
<?php
if ($current_page < $totalRecords - 1) {
    $next_page = $current_page + 1;
    ?>
    <a class="btn btn-outline-success page-item" href="?<?=$param?>per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">></a>
<?php
}
if ($current_page < $totalRecords - 2) {
    $end_page = $totalRecords;
    ?>
    <a class="btn btn-outline-success page-item"  href="?<?=$param?>per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>
    <?php
}
?>
</div>