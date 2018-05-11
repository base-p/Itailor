<style>

.form {
    width: 30%;
    max-height: auto;
    margin: 0px auto;
    padding: 5px 5px 5px 5px;
    border: 2px solid black;
    background: white;
    border-radius: 0px 0px 10px 10px;
    line-height: 350px;
}
.input-group {
    margin: 2px 2px 2px 2px;
    height: 50px;
}


.input-group label {
    display: block;
    text-align: left;
    margin:8% 3% 3% 3% ;
    height: 20px;
}

.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 0px;
    font-size: 6px;
    border-radius: 0px;
    border: 1px solid gray;
    margin:8% 3% 3% 3% ;
}

.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
    .header {
        height: 50px;
        width: 100%;
        margin:0% 3% 3% 3% ;
    }

</style>


<div class="content">
    <div class="header">
            <h2>Create Account</h2>
        </div>
        <div class="form">
        <form method="post" action="add.ctp">
            <div class="input-group">
                <label>Surname</label>
                <input type="text" name="surname">
            </div>
            <div class="input-group">
                <label>Othernames</label>
                <input type="text" name="othernames">
            </div>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Home address</label>
                <input type="text" name="address">
            </div>
            <div class="input-group">
                <label>Mobile Phone Number</label>
                <input type="text" name="mobile">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="text" name="password">
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                <input type="text" name="confirmpassword">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Create Account</button>
            </div>
            <p>
                Already a registered ? <a href="login.php">Sign in</a>
            </p>
        </form>
</div>
</div>