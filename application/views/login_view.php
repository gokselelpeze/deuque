<?php include 'header.php';?>
        <h1>Login</h1>

        <?php

        echo form_open('login/login_action');

        echo validation_errors();

        echo "<p>Username: ";
        echo form_input('username', $this->input->post('username'));
        echo "</p>";

        echo "<p>Password: ";
        echo form_password('password');
        echo "</p>";

        echo "</p>";
        echo form_submit('login_submit', 'Login');
        echo "</p>";

        echo form_close();

        ?>

        <a href='<?php echo base_url()."login/signin"; ?>'>Sign In</a>
<?php include 'footer.php';?>