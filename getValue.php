<main>
    <?php

    // When the form is submitted
    if (isset($_POST["submitButton"])){

        //Do something with the data from the form - you don't have to print it out. 
        //This is all done on the server. 
        //Connect to DATABASE, send an EMAIL, VALIDATE the form, etc.

        print("<pre>");
        print_r($_POST);  // for all GET variables
        print("</pre>")

        ?>
        <!-- This HTML will be visible to the user after the form has been submitted. -->
        <h1>The form has been submitted successfully!</h1>
        <?php



    }else{  //If the form has not been submitted
        ?>

        <form method = "post" >
            First name:<br>
            <input type="text" name="firstname" value="Mickey">
            <br>
            Last name:<br>
            <input type="text" name="lastname" value="Mouse">
            <br><br>
            <input type="submit" id = "submitButton" name = "submitButton" value="Submit">
        </form>


        <?php
    } //End else
    ?>

</main>