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
    <title>BIZCOMM | Terms and Privacy</title>
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
            sections.push("#dest3");
            sections.push("#dest4");
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

            words.push("[Quick]");
            words.push("[Creative]");
            words.push("[Innovative]");
            words.push("[Elevative]");
            words.push("[Effective]");
            words.push("[Reliable]");
            words.push("[Sophisticated]");
            words.push("[Systematic]");
            words.push("[Productive]");
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

        <div id="terms-home" class="card" href="#dest1">

            <div id="terms-switchy" class="BIZCOMM">

                <p>Our business is </p>

                <span id="output">Kevin is a Wizard</span>

            </div>

        </div>

        <div id="divider-one" class="divider">
            <h1>At BIZCOMM, we're adhere to our rules and morals.</h1>
        </div>

        <div id="about-terms" class="card" href="#dest2">

            <div id="terms-header">

                <h2>OUR TERMS & CONDITIONS AND PRIVACY</h2>

                <h3>At BIZCOMM, we adhere to all standards set by the industry.</h3>

            </div>

        </div>

        <div id="divider-two" class="divider">
            <h1>TERMS AND CONDITIONS</h1>
        </div>

        <div id="tnc" class="card" href="#dest3">

            <div class="info">

                <div class="actual-info">

                    <p><iframe class="info-iframe" src="assets/T&C.html" frameborder="0"></iframe></p>

                </div>

            </div>



        </div>

        <div id="divider-three" class="divider">

            <h1>Privacy</h1>

        </div>

        <div id="privacy" class="card text-wall" href="#dest4">

            <div class="info">

                <div class="actual-info">

                    <p><iframe class="info-iframe" src="assets/Privacy.html" frameborder="0"></iframe></p>

                </div>

            </div>

        </div>

        <?php echo file_get_contents("assets/Footer.html"); ?>

    </div>

</body>

</html>