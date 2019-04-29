<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript">
        onload = function () {
            document.getElementById("lastModified").innerHTML = "Last Updated: " + document.lastModified.split(" ")[0];
        }
    </script>

    <title>Contact Us</title>

</head>

<body>

    <h1>Contact Us</h1>

    <nav>

        <a href="home.html">Home</a>
        <a href="types_of_corporate_crime.html">Types of Corporate Crime</a>
        <a href="examples_of_corporate_crime.html">Examples of Corporate Crime</a>
        <a href="reporting_corporate_crime.html">Reporting Corporate Crime</a>
        <a href="contact.html">Contact Us</a>

    </nav>

    <p>Questions? Comments? Concerns? Let us know!</p>

    <div class="container">

        <form action="contactform.php" method="POST">

            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Your name..">

            <br><br>

            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Your email..">

            <br><br>

            <label for="message">Message:</label>
            <br>
            <textarea name="message" placeholder="Tell us something.." style="height:195px"></textarea>
            <img src="../images/mail.jpg" alt="related photo" hspace="20" title="mail" />

            <br><br>

            <button type="submit" name="submit">Submit</button>

        </form>

    </div>

    <footer>
        <br><span id="lastModified"></span>
        <br>
        <p>&copy; 2019 (Our website name....).com<p>
    </footer>

</body>

</html>