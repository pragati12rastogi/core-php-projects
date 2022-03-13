<?php require_once('header.php') ?>
<?php 

    $get_click = $conn->query('Select * from click_counts where id=1')->fetch_assoc();

?>
<div class="container p-5">
    <table class="table table-bordered table-responsive ">
        <thead>
            <tr>
                <th>Book My Show</th>
                <th>IDAMOSS</th>
                <th>Madvides</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $get_click['book_my_show']; ?></th>
                <th><?php echo $get_click['idamoss']; ?></th>
                <th><?php echo $get_click['madvides']; ?></th>
            </tr>
        </tbody>
    </table>
</div>
<?php require_once('footer.php') ?>