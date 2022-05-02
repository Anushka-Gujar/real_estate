<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyers</title>
</head>
<style>
      .Buyers {
            min-height: 100vh;
            background: url(../images/home-bg.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .Buyers form {
            margin-top: 1rem;
            background: #fff;
            border-radius: .5rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
            border: .1rem solid rgba(0, 0, 0, .2);
            width: 60rem;
            padding: 2rem;
        }

        .Buyers form h3 {
            text-align: center;
            color: #333;
            font-size: 3rem;
        }

        .Buyers form .buttons-container {
            display: flex;
            gap: 1.5rem;
        }

        .Buyers form .buttons-container .btn {
            flex: 1;
        }

        .Buyers form .inputBox {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .Buyers form .inputBox input,
        .Buyers form .inputBox select {
            flex: 1 1 10rem;
            border: .1rem solid #333;
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            font-size: 1rem;
            padding: 1rem;
            text-transform: none;
        }

        .Buyers form .btn {
            width: 100%;
            margin-top: 2rem;
            text-align: center;
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
    <section class="Buyers" id="Buyers">

        <form action="">

            <h3>What kind of property are you lookin for?</h3>


            <div class="inputBox">
                <input type="search" name="" placeholder="state" id="">
                <input type="search" name="" placeholder="city" id="">

                <select name="" id="">
                    <option value="" disabled hidden selected>minimum price</option>
                    <option value="$5000">$5000</option>
                    <option value="$10000">$10000</option>
                    <option value="$15000">$15000</option>
                    <option value="$20000">$20000</option>
                    <option value="$25000">$25000</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>maximum price</option>
                    <option value="$30000">$30000</option>
                    <option value="$35000">$35000</option>
                    <option value="$40000">$40000</option>
                    <option value="$45000">$45000</option>
                    <option value="$50000">$50000</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>Covered Area</option>
                    <option value="5qft">5qft</option>
                    <option value="4qft">4qft</option>
                    <option value="3qft">3qft</option>
                    <option value="2qft">2qft</option>
                    <option value="1qft">1qft</option>

                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>property type</option>
                    <option value="flat">flat</option>
                    <option value="house">house</option>
                    <option value="shop">shop</option>
                    <option value="warehouse">warehouse</option>
                    <option value="land">land</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>BHK</option>
                    <option value="1 BHK">1 BHK</option>
                    <option value="2 BHK">2 BHK</option>
                    <option value="3 BHK">3 BHK</option>
                    <option value="4 BHK">4 BHK</option>
                    <option value="5 BHK">5 BHK</option>
                </select>

                <select name="" id="">
                    <option value="" disabled hidden selected>bedrooms</option>
                    <option value="1 bedroom">1 bedroom</option>
                    <option value="2 bedroom">2 bedroom</option>
                    <option value="3 bedroom">3 bedroom</option>
                    <option value="4 bedroom">4 bedroom</option>
                    <option value="5 bedroom">5 bedroom</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>bathrooms</option>
                    <option value="1 bathroom">1 bathroom</option>
                    <option value="2 bathroom">2 bathroom</option>
                    <option value="3 bathroom">3 bedroom</option>
                    <option value="4 bathroom">4 bathroom</option>
                    <option value="5 bathroom">5 bathroom</option>
                </select>
            </div>

            <input type="submit" value="search property" class="btn">

        </form>

    </section>
</body>
</html>