
<div class="admin-login sign-in" id="signin">
    <form method="post" action="createcookie.php">
    <table>
        <tr>
            <div class="form-group">
                <td><label class="col-sm-2 control-label">User</label></td>
                <td><input class="form-control" name="user" type="text"></td>
            </div>
        </tr>
        <tr>
            <div class="form-group">
                <td><label class="col-sm-2 control-label">Password</label></td>
                <td><input class="form-control" name="pass" type="password"></td>
            </div>
        </tr>
        <tr>
            <td colspan="2"><button name="log" type="submit" class="log-in">log in</button></td>
        </tr>
    </table>
    </form>
    <div id="close" style="cursor: pointer" onclick="document.getElementById('signin').setAttribute('style','visibility:hidden');">X</div>
</div>