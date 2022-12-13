<!--Password Module-->

<div id="access-denied" style="display:none;">
    <h1>Access is denied</h1>
</div>

<?php $the_password = get_field('password'); ?>

<script>
    document.getElementById('page-content').style.display = "none";

    function checkPassword() {
        var required_password = "<?php print($the_password); ?>";
        var stored_password = localStorage.getItem('init_pw');
        if (required_password === stored_password) {
            document.getElementById('access-denied').style.display = "none";
            document.getElementById('page-content').style.display = "block";
        } else {
            document.getElementById('access-denied').style.display = "block";
            document.getElementById('page-content').style.display = "none";
        }
    }
    checkPassword();
</script>
<!--Password Module End-->