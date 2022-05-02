<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="stylesheet" href="styleme.css">
</head>
<body>
    <section>
        <h2 class="title">FAQs</h2>
        <div class="faq">
        <div class="question">
            <h3>How to Register?</h3>

            <svg width="15" height="11" viewBox="0 0 42 25">
            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
            </svg>

        </div>
        <div class="answer">
            <p>
               you can register on realestate.com through a simple Registration process.click on "join us " button available on our website and you can easily register.  
            </p>
        </div>
        </div>




        <div class="faq">
            <div class="question">
                <h3>Is registration compulsory to search properties at realestate.com website?</h3>
    
                <svg width="15" height="11" viewBox="0 0 42 25">
                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
    
            </div>
            <div class="answer">
                <p>
                    No, you can use search option to find properties, without registering .
                </p>
            </div>
            </div>

            
            <div class="faq">
                <div class="question">
                    <h3>How to add my property for sale or rent on realestate.com?</h3>
        
                    <svg width="15" height="11" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
        
                </div>
                <div class="answer">
                    <p>
                        Please click "Post Your Property" link on home page and enter your member details,property type,property location,property details, land mark, property images with amenities specification of your property. Your property listing becomes visible to users of Realestate.com after validation of data. Validation of listing is usually completed within 24 hours. After verification your property information will reach the potential buyers and will be display in our relevant city page. 
                    </p>
                </div>
                </div>
        



    </section>
    <!-- <script src="app.js"></script> -->
    <script>
        const faqs = document.querySelectorAll(".faq");

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");

    });
});
    </script>
</body>
</html>