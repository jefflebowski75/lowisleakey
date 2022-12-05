<!--Password Module-->

<div id="access-denied" style="display:none;">
    <h1>Access is denied</h1>
</div>

<?php $the_password = get_field('password');?>

<form>
    <input id="password" type="text" placeholder="password"/>
    <div id="button">Go</div>
</form>

<script>
    document.getElementById('page-content').style.display = "none";
document.getElementById("button").onclick = function() {checkPassword()};

function checkPassword() {
    var entered_password = document.getElementById('password').value;
    var stored_password = "<?php Print($the_password); ?>";
    
    if (entered_password === stored_password) {
        document.getElementById('access-denied').style.display = "none";
        document.getElementById('page-content').style.display = "block";
    } else {
        document.getElementById('access-denied').style.display = "block";
        document.getElementById('page-content').style.display = "none";
    }
}   
</script>
<!--Password Module End-->