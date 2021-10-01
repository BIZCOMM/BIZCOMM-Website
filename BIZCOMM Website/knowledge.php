<!-- 
    Sites to remember:
    https://www.telstra.com.au/business-enterprise/support/tipt 


-->

<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <title>BIZCOMM | Knowledge Base</title>
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

        <div id="knowledge-home" class="card" href="#dest1">

            <div id="knowledge-switchy" class="BIZCOMM">

                <p>Our team is </p>

                <span id="output">Kevin is a Wizard</span>

            </div>

        </div>

        <div id="divider-one" class="divider">
            <h1>Technology is best when it brings people together.</h1>
        </div>

        <div id="our-knowledge" class="card" href="#dest2">

            <div id="knowledge-header">

                <h2>Knowledge Videos</h2>


            </div>


            <div id="video-row">

                <div class="knowledge-video box">
                    <iframe src="https://www.youtube.com/embed/eBByRs1GsuA"></iframe>
                </div>

                <div class="knowledge-video box">
                    <iframe src="https://www.youtube.com/embed/x-jtwmPhlls"></iframe>
                </div>

                <div class="knowledge-video box">
                    <iframe src="https://www.youtube.com/watch?v=k9fvIFKrfzg"></iframe>
                </div>

            </div>

        </div>

        <?php echo file_get_contents("assets/Footer.html"); ?>

    </div>

</body>

</html>