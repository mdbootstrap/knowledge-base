<?php

include('includes/config.php');
include('includes/database.php');
include('includes/functions.php');
secure();

include('includes/header.php');

if (isset($_POST['title'])) {

    if ($stm = $connect->prepare('UPDATE posts set  title = ?, content = ? , date = ?  WHERE id = ?')) {
        $stm->bind_param('sssi', $_POST['title'], $_POST['content'], $_POST['date'], $_GET['id']);
        $stm->execute();




        $stm->close();

        set_message("A post  " . $_GET['id'] . " has beed updated");
        header('Location: posts.php');
        die();

    } else {
        echo 'Could not prepare post update statement statement!';
    }





}


if (isset($_GET['id'])) {

    if ($stm = $connect->prepare('SELECT * from posts WHERE id = ?')) {
        $stm->bind_param('i', $_GET['id']);
        $stm->execute();

        $result = $stm->get_result();
        $post = $result->fetch_assoc();

        if ($post) {


            ?>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h1 class="display-1">Edit post</h1>

                        <form method="post">
                            <!-- Title input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="title" name="title" class="form-control"
                                    value="<?php echo $post['title'] ?>" />
                                <label class="form-label" for="title">Title</label>
                            </div>


                            <!-- Content input -->
                            <div class="form-outline mb-4">
                                <textarea name="content" id="content"><?php echo $post['content'] ?></textarea>
                            </div>

                            <!-- Date select -->
                            <div class="form-outline mb-4">
                                <input type="date" id="date" name="date" class="form-control" value="<?php echo $post['date'] ?>" />
                                <label class="form-label" for="date">Date</label>


                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Edit post</button>
                        </form>



                    </div>

                </div>
            </div>


            <script src="js/tinymce/tinymce.min.js"></script>
            <script>
                tinymce.init({
                    selector: '#content'
                });
            </script>


            <?php
        }
        $stm->close();


    } else {
        echo 'Could not prepare statement!';
    }

} else {
    echo "No user selected";
    die();
}

include('includes/footer.php');
?>