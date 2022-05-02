<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenants</title>
</head>
<style>
     .Tenants {
            min-height: 100vh;
            background: url(../images/home-bg.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .Tenants form {
            margin-top: 1rem;
            background: #fff;
            border-radius: .5rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
            border: .1rem solid rgba(0, 0, 0, .2);
            width: 50rem;
            padding: 2rem;
        }

        .Tenants form h3 {
            text-align: center;
            color: #333;
            font-size: 3rem;
        }

        .Tenants form .buttons-container {
            display: flex;
            gap: 1.5rem;
        }

        .Tenants form .buttons-container .btn {
            flex: 1;
        }

        .Tenants form .inputBox {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;

            margin-top: 2rem;
        }

        .Tenants form .inputBox input,
        .Tenants form .inputBox select {
            flex: 1 1 10rem;
            border: .1rem solid #333;
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            font-size: 1rem;
            padding: 1rem;
            text-transform: none;
        }



        .Tenants form .btn {
            width: 100%;
            margin-top: 2rem;
            text-align: center;
            /* display: flex; */
        }
        .btn {
            margin-top: 17px; 
            display: inline-block; 
            display: right;
            padding: .0 1.3rem;
            border-radius: .5rem;
            font-size: 1.5rem;
            color: white;
            background: blue;
            cursor: pointer;
            text-align: right;
            size: larger; 
        }

        .btn:hover {
            background: rgb(110, 110, 231);
            /* color: rgb(224, 125, 12); */
            color: black;
        }

</style>
<body>
    <section class="Tenants" id="Tenants">

        <form action="">

            <h3>PG/RENT</h3>


            <div class="inputBox">
                <input type="search" name="" placeholder="state" id="">
                <input type="search" name="" placeholder="city" id="">
                <br>
                <select name="" id="">
                    <option value="" disabled hidden selected>tenants preference</option>
                    <option value="Students">Students</option>
                    <option value="worker">worker</option>
                    <option value="Others">Others</option>

                </select><br>
                <select name="" id="" class="mi">
                    <option value="" disabled hidden selected>minimum price</option>
                    <option value="$5000">$5000</option>
                    <option value="$10000">$10000</option>
                    <option value="$15000">$15000</option>
                    <option value="$20000">$20000</option>
                    <option value="$25000">$25000</option>
                </select>

                <br>
                <select name="" id="" class="mi">
                    <option value="" disabled hidden selected>maximum price</option>
                    <option value="$30000">$30000</option>
                    <option value="$35000">$35000</option>
                    <option value="$40000">$40000</option>
                    <option value="$45000">$45000</option>
                    <option value="$50000">$50000</option>
                </select>
                <br>


            </div>
            <h4>Gender</h4>
            <input type="checkbox" name="male" id="male" value="male" class="checkbox">
            <label for="male">Male</label>
            <input type="checkbox" name="female" id="female" value="female" class="checkbox">
            <label for="female">Female</label>
            <input type="checkbox" name="other" id="other" value="other" class="checkbox">
            <label for="other">Other</label>
            <h4>Ocoupacy</h4>
            <input type="checkbox" name="single" id="single" value="single" class="checkbox">
            <label for="single">single</label>
            <input type="checkbox" name="double" id="double" value="double" class="checkbox">
            <label for="double">double</label>
            <input type="checkbox" name="other" id="other" value="other" class="checkbox">
            <label for="other">Other</label>
            <br>

            <input type="submit" value="search" class="btn">

        </form>

    </section>

    
</body>
</html>