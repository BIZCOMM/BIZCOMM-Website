<!-- 
    Notes:

    https://www.careers.telstra.com/home
    We offer full-time and trainee positions

    If you're passionate about tech,

    apply with cv and expression of interest

    we look for people who are into technology, and latest stuffs

 -->


 <!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <title>BIZCOMM | Careers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <link rel="icon" href="assets/images/BIZCOMM Logo Black&White.png">
    <script src="assets/index.js"></script>
    <script src="assets/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            var sections = [],
                index = 0;

            sections.push("#dest1");
            sections.push("#dest2");
            sections.push("#dest7");

            var sectNum = 0;

            $("#down-scroll-button").click(function() {
                if (sectNum < sections.length) {
                    sectNum += 1;
                    $('html, body').stop().animate({
                        scrollTop: $("#" + sections[sectNum]).offset().top
                    }, 1500);
                }
            });

            $("#up-scroll-button").click(function() {
                if (sectNum > 0) {
                    sectNum -= 1;
                    $('html, body').stop().animate({
                        scrollTop: $("#" + sections[sectNum]).offset().top
                    }, 1500);
                }
            });

            var words = [],
                index = 0;

            var wordIdx = 0;

            words.push("[Agile]");
            words.push("[Creative]");
            words.push("[Innovative]");
            words.push("[Passionate]");
            words.push("[Efficient]");
            words.push("[Reliable]");
            words.push("[Quick]");
            words.push("[Productive]");
            words.push("[Fun]");
            words.push("[Practical]");

            function loop() {
                if (wordIdx >= words.length) {
                    wordIdx = 0;
                }
                if (wordIdx < words.length) {
                    $("span#output").html(words[wordIdx]);
                    wordIdx += 1;
                    $("span#output").slideDown(300).delay(1500).slideUp(300, loop);
                }

            }

            loop();
        })
    </script>

</head>

<body>

    <?php echo file_get_contents("assets/Header.html"); ?>

    <div id="scroll-buttons">

        <button id="up-scroll-button" class="scroll-button">↑</button>

        <button id="down-scroll-button" class="scroll-button">↓</button>

    </div>

    <div id="content">

        <div id="careers-home" class="card" href="#dest1">

            <div class="bg"></div>
            <div class="bg bg2"></div>
            <div class="bg bg3"></div>

            <div class="BIZCOMM">

                <p>Our team is </p>
                
                <span id="output">Kevin is a Wizard</span>

            </div>

        </div>

        <div id="divider-one" class="divider">
            <h1>At BIZCOMM, we're passionate about technology.</h1>
        </div>

        <div id="about-team" class="card" href="#dest3">

            <div id="about-header">

                <h2>CAREER OPPORTUNITIES</h2>

                <h3>Are you passionate about technology and interested in joining the team? Send us an email with an expression of interest to apply now!</h3>

                <a id="careers-mail" href="mailto: careers@bizcomm.com.au">careers@bizcomm.com.au</a>

            </div>

        </div>

        <?php echo file_get_contents("assets/Footer.html"); ?>

    </div>

</body>

</html>