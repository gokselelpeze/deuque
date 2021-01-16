<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
?>
    <div class="jumbotron text-center">
        <textarea class="mt-2" name="title" id="title" cols="80" rows="1" placeholder="Untitled Form"></textarea>
        <div class="container mt-5">
            <form action="">
                <label for="question">Question 1:</label><br>
                <textarea class="mt-2" name="answer1" id="answer1" cols="80" rows="1" placeholder="bla bla bla"></textarea><br>
                <input class="m-3" type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div>


    </div>

<?php include dirname(__DIR__, 1) . '/sections/footer.php';?>