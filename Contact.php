<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<style>
    /* Contact Section */
#contact{
    /* position: relative; */
  }
  #contact::before{
    content: "";
    position: absolute;
    position: relative;
    width: 100%;
    height: 100%;
    z-index: -1;
    
  
  }
  #contact-box{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 34px;
  }
  #contact-box input, 
  #contact-box textarea{
    width: 100%;
    padding: 0.5rem;
    border-radius: 9px;
    font-size: 1.1rem;
 
  } 
  
  #contact-box form{
    width: 40%;
  }
  
  #contact-box label{
   font-size: 1.3rem;
   font-family: 'Bree Serif', serif;
  
  }

  .h-primary{
    font-family: 'Bree Serif', serif;
    font-size: 3.8rem;
    padding: 12px;
  }
  .center{
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
    <section id="contact">
        
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="btnsubmit">
                    <button class="btn">SUBMIT</button>
                </div>
            </form>
        </div>
    </section>
    
</body>
</html>