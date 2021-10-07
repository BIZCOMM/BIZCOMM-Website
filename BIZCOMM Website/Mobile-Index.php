<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <title>BIZCOMM | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="assets/style-mobile.css">
    <link rel="icon" href="assets/images/BIZCOMM Logo Black&White.png">
    <script src="assets/index.js"></script>
    <script src="assets/jquery-3.6.0.min.js"></script>
    <script>
        $(function () {
            // var sections = [],
            //     index = 0;

            // sections.push("BIZCOMM");
            // sections.push("about-us");
            // sections.push("our-partners");
            // sections.push("our-services");
            // sections.push("meet-team");
            // sections.push("contact-us");
            // sections.push("footer");

            // var sectNum = 0;

            // $("#down-scroll-button").click(function() {
            //     if (sectNum < sections.length) {
            //         sectNum += 1;
            //         $('html, body').stop().animate({
            //             scrollTop: $("#" + sections[sectNum]).offset().top
            //         }, 1500);
            //     }
            // });

            // $("#up-scroll-button").click(function() {
            //     if (sectNum > 0) {
            //         sectNum -= 1;
            //         $('html, body').stop().animate({
            //             scrollTop: $("#" + sections[sectNum]).offset().top
            //         }, 1500);
            //     }
            // });

            //     $("nav").hide();

            //     var hidden = true;

            //     $("div#nav-menu#nav-menu-item").click(function(e) {
            //         if (e.target.tagName == 'div#nav-menu#nav-menu-item') {
            //             console.log("coom");
            //             if (hidden) {
            //                 $("nav").slideDown(300);
            //                 hidden = false;
            //             }
            //             if (!hidden) {
            //                 $("nav").slideUp(300);
            //                 hidden = true;
            //             }
            //         }
            //     })
            // })
            $(document).ready(function () {

                $(".cross").hide();
                $(".nav-links").hide();
                $(".hamburger").click(function () {
                    $(".nav-links").slideToggle("slow", function () {
                        $(".hamburger").hide();
                        $(".cross").show();
                    });
                });

                $(".cross").click(function () {
                    $(".nav-links").slideToggle("slow", function () {
                        $(".cross").hide();
                        $(".hamburger").show();
                    });
                });

            });

            var words = [],
                index = 0;

            var wordIdx = 0;

            words.push("[Innovative]");
            words.push("[Quick]");
            words.push("[Productive]");
            words.push("[Creative]");
            words.push("[Elevative]");
            words.push("[Effective]");
            words.push("[Reliable]");
            words.push("[Sophisticated]");
            words.push("[Systematic]");
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

    <?php echo file_get_contents("assets/Mobile-Header.html"); ?>

    <!--<div id="scroll-buttons">

        <button id="up-scroll-button" class="scroll-button">↑</button>

        <button id="down-scroll-button" class="scroll-button">↓</button>

    </div>-->

    <div id="content">

        <div id="BIZCOMM" class="card">

            <div class="BIZCOMM">

                <p>Our technical solutions are </p>

                <span id="output">Kevin is a Wizard</span>

            </div>

        </div>

        <div id="about-us" class="card">

            <div id="about-header">

                <h2>ABOUT US</h2>

                <h3>BIZCOMM offers our clients full technical support without any fuss. You will work with people who
                    care for your business' growth.</h3>

            </div>

            <div id="about-info">

                <div id="about-one" class="about-text">

                    <h4>Perfectly Tailored Technical Solution</h4>

                    <p>Whether your concerns are with mobile, complex network setups or cloud services, our team will be
                        able to provide perfectly tailored solutions to your ICT or service issues. As technology
                        continues to evolve constantly, we can assist
                        in facilitating the migrations of your existing services to new technogies, so we can ensure
                        your business experiences low downtimes. </p>

                </div>

                <div id="about-two" class="about-text">

                    <h4>Accurate and Efficient</h4>

                    <p>Our purpose is to provide a exceptional and reliable experience for customers in dealign with IT
                        and Communications needs. Our team memebers have years of industry experience to ensure that
                        customer’s ICT service issues or business
                        requirements, to engage the right resources and solutions to address any issues or business
                        requirements in a timely manner.</p>

                </div>
            </div>

        </div>

        <div id="divider-one" class="divider">
            <h1>Technology is best when it brings people together.</h1>
        </div>

        <div id="our-partners" class="card">

            <div id="partners-header">

                <h2>OUR PARTNERS</h2>

                <h3>At BIZCOMM, we work with our partners to achieve innovative and reliable technical solutions to
                    solve your problems.
                </h3>

            </div>

            <div id="logo-row-one">

                <div id="telstra-logo" class="partner-logo box">
                    <a class="logo-link" href="https:/telstra.com" target="_blank">
                        <img src="assets/images/Telstra.png" alt="Telstra" style="max-width: 14vw;max-height: 9vw;">
                    </a>
                    <div class="logo-overlay">
                    </div>

                </div>

                <div id="dicker-data-logo" class="partner-logo box">
                    <a class="logo-link" href="https://www.dickerdata.com.au/" target="_blank">
                        <img src="assets/images/Dicker Data.png" alt="Dicker Data"
                            style="max-width: 14vw;max-height: 9vw;">
                    </a>
                    <div class="logo-overlay"></div>

                </div>

                <div id="cisco-logo" class="partner-logo box">
                    <a class="logo-link" href="https://www.cisco.com/c/en_au/index.html" target="_blank">
                        <img src="assets/images/Cisco.png" alt="Dicker Data" style="max-width: 14vw;max-height: 9vw;">
                    </a>
                    <div class="logo-overlay"></div>

                </div>

                <div id="microsoft-logo" class="partner-logo box">
                    <a class="logo-link" href="https://www.cisco.com/c/en_au/index.html" target="_blank">
                        <img src="assets/images/Microsoft.png" alt="Dicker Data"
                            style="max-width: 14vw;max-height: 9vw;">
                    </a>
                    <div class="logo-overlay"></div>

                </div>

            </div>

            <div id="logo-row-two">

                <div id="poly-logo" class="partner-logo box">
                    <a class="logo-link" href="https://www.poly.com/au/en" target="_blank">
                        <img src="assets/images/Poly.png" alt="Dicker Data" style="max-width: 14vw;max-height: 9vw;">
                    </a>
                    <div class="logo-overlay"></div>

                </div>

                <div id="hp-logo" class="partner-logo box">
                    <a class="logo-link" href="https://www.hp.com/au-en/home.html" target="_blank">
                        <img src="assets/images/HP.png" alt="Dicker Data" style="max-width: 14vw;max-height: 9vw;">
                    </a>
                    <div class="logo-overlay"></div>

                </div>

                <div id="dubber-logo" class="partner-logo box">
                    <a class="logo-link" href="https://www.dubber.net/" target="_blank">
                        <img src="assets/images/Dubber.png" alt="Dicker Data" style="max-width: 14vw;max-height: 9vw;">
                    </a>
                    <div class="logo-overlay"></div>

                </div>

            </div>

        </div>

        <div id="divider-two" class="divider">

            <h1>We service over 300+ customers around Australia.</h1>

        </div>

        <div id="our-services" class="card">

            <div id="service-header">

                <h2>OUR SERVICES</h2>

                <h3>Our team at BIZCOMM provides a wide variety of services that ensure all of our technical solutions
                    are effective and complete.</h3>

            </div>

            <div id="services-container">

                <div id="mobile-service" class="service-box box">
                    <div id="mobile-inner" class="service-inner">
                        <div id="Mobile-Front" class="service-front">
                            <img src="assets/images/Mobile.png" alt="Mobile Services" style="width: 20vw;height: 20vw;">
                        </div>
                        <div id="Mobile-Text" class="service-text">
                            <img src="assets/images/Mobile Text.png" alt="Mobile Services"
                                style="max-width: 15vw; max-height: 12vw;">
                            <h5>At Bizcomm our Mobile Services include:</h5>
                            <ul>
                                <li>New Mobile Connections</li>
                                <li>Ordering New Mobile Devices</li>
                                <li>SIM Replacements</li>
                                <li>Change of Ownerships</li>
                                <li>Porting to Telstra from other mobile carriers</li>
                                <li>Troubleshooting mobile faults</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div id="net-tele-service" class="service-box box">
                    <div id="N&T-inner" class="service-inner">
                        <div id="N&T-Front" class="service-front">
                            <img src="assets/images/Network&Telephony.png" alt="Network & Telephony"
                                style="max-width: 20vw; max-height: 20vw;">
                        </div>
                        <div id="N&T-Text" class="service-text">
                            <img id="net-inner-title" src="assets/images/Network&Telephony Text.png"
                                Alt="Network & Telephony" style="max-width: 13vw; max-height: 10vw;">
                            <h5>At Bizcomm our Network & Telephony Services include:</h5>
                            <ul>
                                <li>NBN Migrations</li>
                                <li>Complex Network Setups</li>
                                <li>Wi-Fi (Wireless LAN) setups</li>
                                <li>Telephony Setups</li>
                                <li>Migration of PSTN or ISDN services to IP Telephony</li>
                                <li>Network Security</li>
                                <li>Desktop Support</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="cloud-service" class="service-box box">
                    <div id="Cloud Inner" class="service-inner">
                        <div id="Cloud-Front" class="service-front">
                            <img src="assets/images/Cloud.png" alt="Cloud Services"
                                style="max-width: 20vw; max-height: 20vw;">
                        </div>
                        <div id="Cloud-Text" class="service-text">
                            <img src="assets/images/Cloud Text.png" Alt="Cloud Services"
                                style="max-width: 15vw; max-height: 12vw;">
                            <h5>At Bizcomm our Cloud Services include:</h5>
                            <ul type="circle">
                                <li>Migration to Microsoft 365 Hosted Services</li>
                                <li>Co-Location with Equinix</li>
                                <li>Microsoft 365 Sharepoint and OneDrive</li>
                                <li>Microsoft Office Applications</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div id="divider-three" class="divider">

            <h1>At BIZCOMM, our achievements are made as a team.</h1>

            <!-- <div id="rev1" class="review">

                <img>

                <h3>BIZCOMM is poggers, 10/10</h3>

                <h4>Company Name</h4>

            </div>

            <div id="rev2" class="review">

                <img>

                <h3>BIZCOMM is poggers, 10/10</h3>

                <h4>Company Name</h4>

            </div> -->

        </div>

        <div id="meet-team" class="card">

            <div id="team-header">

                <h2>MEET THE TEAM</h2>

                <h3>Our team at BIZCOMM provides a wide variety of services that ensure all of our technical solutions
                    are effective and complete.</h3>

            </div>

            <div id="team-container">
                <div id="Thanh" class="people">

                    <div id="Thanh-inner" class="people-inner">
                        <div id="Thanh-photo" class="people-photo">
                            <img src="assets/images/Thanh.jpg" alt="Thanh" style="width: 15vw;height: 10vw;">
                        </div>
                        <div id="thanh-info" class="people-info">

                            <h5>Thanh Ton</h5>
                            <h5>Senior Solutions Consultant</h5>
                            <h5>+61298283708</h5>

                        </div>
                    </div>
                </div>

                <div id="Kevin" class="people">

                    <div id="Kevin-inner" class="people-inner">
                        <div id="Kevin-photo" class="people-photo">
                            <img src="assets/images/Kevin.jpg" alt="Kevin" style="width: 15vw;height: 10vw;">
                        </div>
                        <div id="Kevin-info" class="people-info">

                            <h5>Kevin Lau</h5>
                            <h5>Senior Network Engineer</h5>
                            <h5>+61298283701</h5>

                        </div>
                    </div>

                </div>

                <div id="Brendan" class="people">

                    <div id="Brendan-inner" class="people-inner">
                        <div id="Brendan-photo" class="people-photo">
                            <img src="assets/images/Brendan.jpg" alt="Brendan" style="width: 15vw;height: 10vw;">
                        </div>
                        <div id="Brendan-info" class="people-info">

                            <h5>Brendan Nguyen</h5>
                            <h5>Support Technician</h5>
                            <h5>+61298283700</h5>

                        </div>
                    </div>

                </div>

                <div id="Jack" class="people">

                    <div id="Jack-inner" class="people-inner">
                        <div id="Jack-photo" class="people-photo">
                            <img src="assets/images/Jack.jpg" alt="Jack" style="width: 15vw;height: 10vw;">
                        </div>
                        <div id="Jack-info" class="people-info">

                            <h5>Jack Tollefsen</h5>
                            <h5>Telstra Solutions Consultant</h5>
                            <h5>+61298283700</h5>

                        </div>
                    </div>

                </div>

                <div id="Grace" class="people">

                    <div id="Grace-inner" class="people-inner">
                        <div id="Grace-photo" class="people-photo">
                            <img src="assets/images/Grace.jpg" alt="Grace" style="width: 15vw;height: 10vw;">
                        </div>
                        <div id="Grace-info" class="people-info">

                            <h5>Grace Liu</h5>
                            <h5>Telstra Solutions Consultant</h5>
                            <h5>+61298283700</h5>

                        </div>
                    </div>

                </div>

                <div id="Victor" class="people">

                    <div id="Victor-inner" class="people-inner">
                        <div id="Victor-photo" class="people-photo">
                            <img src="assets/images/Victor.jpg" alt="Victor" style="width: 15vw;height: 10vw;">
                        </div>
                        <div id="Victor-info" class="people-info">

                            <h5>Victor Quocson</h5>
                            <h5>Telstra Solutions Consultant</h5>
                            <h5>+61298283700</h5>

                        </div>
                    </div>

                </div>


            </div>

        </div>

        <div id="map" class="divider">

            <iframe width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen
                src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJM-_PhkKXEmsRc7w90ulBaHs&key=AIzaSyAHwQJTlDnaONNe4h_vX6RwINAaj3XROV8"></iframe>

        </div>

        <div id="contact-us" class="card">

            <h2>CONTACT US</h2>

            <h3>Got a question or enquiry? Contact us using the following details.</h3>

            <div id="details-container">

                <div id="phone-abn">

                    <h4>CALL BIZCOMM</h4>

                    <a href="tel:(02)(98283700)">02 9828 3700</a>

                    <h4>OUR ABN</h4>

                    <h5>54620611467</h5>

                </div>

                <div id="email-linkedin">

                    <h4>EMAIL BIZCOMM</h4>

                    <a href="mailto: team@bizcomm.com.au">team@bizcomm.com.au</a>

                    <h4>CHECK OUT OUR LINKEDIN</h4>

                    <a href="https://linkedin.com/company/bizcomm-au" target="_blank"
                        rel="noopener noreferrer">linkedin.com/company/bizcomm-au</a>

                </div>

                <div id="address-hours">

                    <h4>VISIT OR MAIL US</h4>

                    <h5>First Floor, Unit 3 1002 Canley Vale Rd Wetherill Park NSW 2164</h5>

                    <h4>OUR WORKING HOURS</h4>

                    <h5>8am - 6pm AEST MON-FRI</h5>

                </div>

            </div>

        </div>

        <?php echo file_get_contents("assets/Mobile-Footer.html"); ?>

    </div>

</body>

</html>