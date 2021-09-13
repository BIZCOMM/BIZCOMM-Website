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
            <div class="BIZCOMM">

                <p>Our knowledge is </p>
                <b>
                    <div class="innerBIZCOMM">
                        [Quick]<br />
                        [Creative]<br />
                        [Innovative]<br />
                        [Elevative]<br />
                        [Effective]<br />
                        [Reliable]<br />
                        [Sophisticated]<br />
                        [Systematic]<br />
                        [Productive]<br />
                        [Practical]
                    </div>
                </b>
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
                    <iframe src="https://www.youtube.com/embed/jGvD5acFLaM"></iframe>
                </div>

            </div>

        </div>

        <?php echo file_get_contents("assets/Footer.html"); ?>

    </div>

</body>

</html>