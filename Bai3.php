
<form method="POST">
    Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>"/><br/><br/>
    Email: <input type="text" name="email" value="<?php if(isset ($_POST['email'])){echo $_POST['email'];} ?>"/><br/><br/>
    Website: <input type="text" name="website" value="<?php if(isset ($_POST['website'])){echo $_POST['website'];} ?>"/><br/><br/>
    Comment: <input type="text" name="comment" value="<?php if(isset ($_POST['comment'])){echo $_POST['comment'];} ?>"/><br/><br/>
    Gender: <input type="radio" name="gender" value=""/>Female
            <input type="radio" name="gender" value=""/>Male
            <input type="submit"/>
</form>



