<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
          
          .main_div {
            width: 100%;
            height: 100vh;
            position: relative;
          }
          
          .box {
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
          }
          
          .box h1 {
            margin-bottom: 25px;
            color: rgb(50, 187, 250);
            text-align: center;
            text-transform: capitalize;
          }
          
          .box .input-box {
            position: relative;
          }
          
          .box .input-box input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            letter-spacing: 1px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
          }
          
          .box .input-box label {
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            transition: 0.5s;
          }
          
          .box input[type="submit"] {
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #03a9f4;
            padding: 9px 18px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
          }
          
          .box .input-box input:focus~label, .box .input-box input:valid~label {
            top: -20px;
            left: 0;
            font-size: 12px;
            color: #03a9f4;
          }

    </style>
  </head>
  <body>
    <div class="main_div">
      <div class="box">
        <h1>Login Form</h1>
        <form action="log.php" method="POST">
          <div class="input-box">
            <input type="text" name="user" id="name" autocomplete="off" required/>
            <label for="Username">Username</label>
          </div>
          <div class="input-box">
            <input type="password" name="pass" id="pass" autocomplete="off" required/>
            <label for="Password">Password</label>
          </div>
          <input type="submit" value="Login" />
        </form>
      </div>
    </div>
  </body>
</html>