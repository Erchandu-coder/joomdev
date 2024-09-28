<footer class="app-footer">
    <div class="container text-center py-3">
        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Developed by <span class="sr-only">love</span><i class="fas fa-heart"
                style="color: #fb866a;"></i> Chandrakant</small>

    </div>
</footer>
<!--//app-footer-->
</div>
<!--//app-wrapper-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#generate-button').click(function() {
        var length = 12; // Desired length of the password
        var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$!";
        var password = "";

        // Loop to generate a random password of the desired length
        for (var i = 0; i < length; i++) {
            password += charset.charAt(Math.floor(Math.random() * charset.length));
        }

        // Set the generated password in the input box
        $('#password').val(password);
    });
    $('#save-button').on('click', function(e) {
        e.preventDefault();
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var password = $('#password').val();

        if (first_name == "" || last_name == "" || email == "" || phone == "" || password == "") {
            $('#error').html('All field is required').slideDown();
            $('#success').slideUp();
        } else {
            $.ajax({
                url: "Insert.php",
                type: "Post",
                data: {
                    first_name_: first_name,
                    last_name_: last_name,
                    email_: email,
                    phone_: phone,
                    password_: password,
                },
                success: function(data) {
                    if (data == 1) //get response from controller
                    {
                        //reset form after submit
                        $('#insert-form').trigger('reset');
                        $('#success').html("Record Inserted").slideDown();
                        $('#error').slideUp();
                        $('#registerForm')[0].reset();
                    } else {

                        $('#error').html("Record Can't insert").slideDown();
                        $('#success').slideUp();
                    }
                }
            })
        }
    })
    $('#create-button').on('click', function(e) {
        e.preventDefault();
        var user_id = $('#user_id').val();
        var start_time = $('#start_time').val();
        var stop_time = $('#stop_time').val();
        var note = $('#note').val();
        var description = $('#description').val();
        if (start_time == "" || stop_time == "" || note == "" || description == "") {
            $('#error').html('All field is required').slideDown();
            $('#success').slideUp();
        } else {
            $.ajax({
                url: "insert-task.php",
                type: "Post",
                data: {
                    user_id_: user_id,
                    start_time_: start_time,
                    stop_time_: stop_time,
                    note_: note,
                    description_: description,
                },
                success: function(data) {
                    if (data == 1) //get response from controller
                    {
                        //reset form after submit
                        $('#insert-form').trigger('reset');
                        $('#success').html("Record Inserted").slideDown();
                        $('#error').slideUp();
                        $('#registerForm')[0].reset();
                    } else {

                        $('#error').html("Record Can't insert").slideDown();
                        $('#success').slideUp();
                    }
                }
            })
        }
    })
});
new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['csv', 'excel']
        }
    }
});
</script>
<script src="assets/js/app.js"></script>
</body>
</html>