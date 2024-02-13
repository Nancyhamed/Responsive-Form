<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/respn-form.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>F O R M</h1>
        <P>If Having Any Questions Drop Us a Message</P>
        <form action="result.php" method="post">
            <div class="row">
                <div class="column">
                    <label for="name"  required>Name</label>
                    <input type="text" id="name" placeholder="Enter Your Name" name="name">
                </div>
                <div class="column">
                    <label for="email"  required>Email</label>
                    <input type="email" id="email" placeholder="Enter Your Email" name="email">
                </div>
            </div>
                <div class="row"> 
                <div class="column">
                    <label for="address"  required>Address</label>
                    <input type="text" id="subject" placeholder="Your Address Here" name="address">
                </div>
                <div class="column">
                    <label for="contact"  required>Contact Number</label>
                    <input type="number" id="contact" placeholder="Your Phone Number Here" name="contact">
                </div>
            </div>
            <div class="row"> 
                <button class="btn" name="btnn">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>