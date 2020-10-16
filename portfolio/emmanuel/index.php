<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Founder and CEO of Gigabyte Developers">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png">
    <title>Nwokoma Emmanuel's Portfolio</title>
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="google-site-verification" content="RjAgqUgYfT94lQ7oGZqqRI87NeSdR_6fecSUipiGBmg" />
    <meta name="msvalidate.01" content="F39E6D2A441B34A5BCA816D83B967BDF" />
    <meta property="og:image:secure_url" content="https://gitlab.com/enwokoma/personal/-/raw/master/personal_thumbnail.png" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Gigabyte Developers Incorporated">
    <meta property="og:title" content="Nwokoma Emmanuel's Portfolio" />
    <meta property="og:description" content="Founder and CEO of Gigabyte Developers" />
    <meta property="og:image" itemprop="image" content="https://gitlab.com/enwokoma/personal/-/raw/master/personal_thumbnail.png" />
    <meta property="og:image:url" itemprop="image" content="https://gitlab.com/enwokoma/personal/-/raw/master/personal_thumbnail.png" />
    <meta property="og:image:type" content="image/png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Founder and CEO of Gigabyte Developers">
    <meta name="author" content="Nwokoma Emmanuel">
    <!--<meta name="theme-color" content="#3F51B5">-->
    <meta name="theme-color" content="#028fcc">

    <base target="_blank">

    <link rel="stylesheet" href="https://cdn.bootcss.com/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/material-design-lite/1.3.0/material.indigo-pink.min.css">
    <script src="https://cdn.bootcss.com/material-design-lite/1.3.0/material.min.js"></script>

    <?php include_once("../../includes/overall/googleanalyticstracking.php") ?>
    <script>
        var oldOnLoad = window.onload;
        window.onload = function() {
            oldOnLoad && oldOnLoad();
            var anchors = document.querySelectorAll('a');
            for (var i = 0; i < anchors.length; ++i) {
                var anchor = anchors[i];
                anchor.onclick = function() {
                    window.ga && window.ga('send', 'event', 'Link', 'Click link', this.href, { transport: 'beacon' });
                }
            }
        }
    </script>

    <link rel="stylesheet" href="index.css">
</head>

<body>
<div>

    <header class="mdl-color--indigo-700 mdl-color-text--white mdl-shadow--4dp">
        <section class="title mdl-color--indigo-500">
            <h1 class="mdl-typography--display-1"><strong>Nwokoma Emmanuel</strong></h1>
            <p class="mdl-typography--body-1">Software (Android &amp; Web) Developer</p>
        </section>
        <section class="about">
            <i class="mdi mdi-account mdi-24px"></i>
            <div>
                <h2 class="mdl-typography--title">About</h2>
                <p>Experienced Software Developer with a demonstrated history of working in the Industry, designing and developing software for both individual and business solutions.
                    <br>Higly skilled in core backend and frontend techologies used in Software Development.
                    <br>I am also a strong entrepreneurship professional with a Bachelor’s Degree from Nnamdi Azikiwe University and a solid background in project management and customer relations.
                    <br><em class="mdl-typography--menu mdl-typography--menu-color-contrast menuText">Currently, I am aiming to build a legacy with Technology alongside developing numerous software solutions.</em>
                </p>
            </div>
        </section>
        <section class="contact">
            <i class="mdi mdi-phone mdi-24px"></i>
            <div>
                <h2 class="mdl-typography--title">Contact</h2>
                <ul>
                    <li>
                        <i class="mdi mdi-phone mdi-18px"></i>
                        <a href="tel:+2348158576171">+234 (0) 815 857 6171</a>
                    </li>
                    <li>
                        <i class="mdi mdi-whatsapp mdi-18px"></i>
                        <a href="https://wa.me/2348158576171?text=Hello,%20Emmanuel%20Nwokoma!">+234 (0) 815 857 6171</a>
                    </li>
                    <li>
                        <i class="mdi mdi-email mdi-18px"></i>
                        <a href="mailto:nwokomaemmanuel@gmail.com">nwokomaemmanuel@gmail.com</a>
                    </li>
                    <li>
                        <i class="mdi mdi-email mdi-18px"></i>
                        <a href="mailto:nwokomaemmanuel@octofi.com.ng">nwokomaemmanuel@octofi.com.ng</a>
                    </li>
                    <li>
                        <i class="mdi mdi-email mdi-18px"></i>
                        <a href="mailto:emmanuel@gigabytedevelopersinc.com">nwokoma@gigabytedevelopersinc.com</a>
                    </li>
                    <li>
                        <i class="mdi mdi-github-circle mdi-18px"></i>
                        <a href="https://github.com/enwokoma">github.com/enwokoma</a>
                    </li>
                    <li>
                        <i class="mdi mdi-facebook mdi-18px"></i>
                        <a href="https://facebook.com/austin.nwokoma.9">Emmanuel Austin Nwokoma</a>
                    </li>
                    <li>
                        <i class="mdi mdi-twitter mdi-18px"></i>
                        <a href="https://twitter.com/enwokoma">@enwokoma</a>
                    </li>
                    <li>
                        <i class="mdi mdi-linkedin mdi-18px"></i>
                        <a href="https://linkedin.com/in/emmanuelnwokoma">emmanuelnwokoma</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="skills">
            <i class="mdi mdi-chart-bar mdi-24px"></i>
            <div>
                <h2 class="mdl-typography--title">Skills</h2>
                <ul>
                    <li>
                        <p class="mdl-typography--menu menuText">Programming Languages</p>
                        <p class="mdl-typography--body-1">Java, Kotlin, JavaScript, Golang, Python, Bash, VB.NET, PHP</p>
                    </li>
                    <li>
                        <p class="mdl-typography--menu menuText menuText">Development Skills</p>
                        <p class="mdl-typography--body-1">Android Development, Web Development, Flutter, Yii, Woocomerce, Magento, Abantecart, Prestashop, Opencart, Wordpress, JSON, jQuery, OpenGL, Node.js</p>
                    </li>
                    <li>
                        <p class="mdl-typography--menu menuText">Tools</p>
                        <p class="mdl-typography--body-1">XML, Floobits, JSON, Emacs, Git, Android Studio, WebStorm, CLion, PyCharm, PHPStorm, Sublime Text, Atom, Powershell, Goland, IntelliJ IDEA, Visual Studio</p>
                    </li>
                    <li>
                        <p class="mdl-typography--menu menuText">System Maintenance</p>
                        <p class="mdl-typography--body-1">Windows, Linux, Microsoft SQL Server, Unix, MySQL, JBoss, Ingres, PostgreSQL, Apache Tomcat, Nginx</p>
                    </li>
                    <li>
                        <p class="mdl-typography--menu menuText">Other Skills &amp; Industry Knowledge</p>
                        <p class="mdl-typography--body-1">HTML Scripting, Cryptography, Encryption, SQL Injection, Database Management, Multithreading, Data Analysis, Firewalls, Search Engine Optimization (SEO), Leadership, Entrepreneurship, Biotechnology</p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="skills">
            <i class="mdi mdi-chart-bar mdi-24px"></i>
            <div>
                <h2 class="mdl-typography--title">Digital Certifications</h2>
                <ul>
                    <li>
                        <p class="mdi mdl-typography--menu menuText">Digital Marketing, Google</p>
                        <p class="mdl-typography--body-1">Certificate issued by Google (June, 2019)
                            <br>Cert ID: <strong>EL4W2LAV6</strong>
                        </p>
                    </li>
                    <li>
                        <p class="mdi mdl-typography--menu menuText">Analytics, Google</p>
                        <p class="mdl-typography--body-1">Certificate issued by Google Skillshop (May, 2020)
                            <br>Completion ID:
                            <a href="https://skillshop.exceedlms.com/student/award/49895602" class="certID">49895602</a>
                        </p>
                    </li>
                    <li>
                        <p class="mdi mdl-typography--menu menuText">Ads Search, Google</p>
                        <p class="mdl-typography--body-1">Certificate issued by Google Skillshop (May, 2020)
                            <br>Completion ID:
                            <a href="https://skillshop.exceedlms.com/student/award/49891218" class="certID">49891218</a>
                        </p>
                    </li>
                    <li>
                        <p class="mdi mdl-typography--menu menuText">Display and Video 360, Google</p>
                        <p class="mdl-typography--body-1">Certificate issued by Google Skillshop (May, 2020)
                            <br>Completion ID:
                            <a href="https://skillshop.exceedlms.com/student/award/49909629" class="certID">49909629</a>
                        </p>
                    </li>
                    <li>
                        <p class="mdi mdl-typography--menu menuText">Search Ads 360, Google</p>
                        <p class="mdl-typography--body-1">Certificate issued by Google Skillshop (May, 2020)
                            <br>Completion ID:
                            <a href="https://skillshop.exceedlms.com/student/award/49908705" class="certID">49908705</a>
                        </p>
                    </li>
                    <li>
                        <p class="mdi mdl-typography--menu menuText">Campaign Manager, Google</p>
                        <p class="mdl-typography--body-1">Certificate issued by Google Skillshop (May, 2020)
                            <br>Completion ID:
                            <a href="https://skillshop.exceedlms.com/student/award/49897032" class="certID">49897032</a>
                        </p>
                    </li>
                    <li>
                        <p class="mdi mdl-typography--menu menuText">Creative Certification, Google</p>
                        <p class="mdl-typography--body-1">Certificate issued by Google Skillshop (May, 2020)
                            <br>Completion ID:
                            <a href="https://skillshop.exceedlms.com/student/award/49897053" class="certID">49897053</a>
                        </p>
                    </li>
                </ul>
            </div>
        </section>
    </header>
    <main class="mdl-color--blue-grey-50">
        <!-- Education -->
        <section class="mdl-color--white mdl-shadow--2dp">
            <h2 class="mdl-typography--display-1">Education</h2>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">Nnamdi Azikiwe University, Awka</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast">Bachelor of Science (B.Sc.), Botany</p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    <strong>Dec 2014 – Jul 2018</strong> - Awka, Anambra State. Nigeria
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <!--                <li>Overall GPA: 3.71/4</li>-->
                    <!--                <li>Concentration on Visual Computing and Computer Graphics</li>-->
                </ul>
            </section>
        </section>
        <!-- end Education -->

        <!-- Experience -->
        <section class="mdl-color--white mdl-shadow--2dp">
            <h2 class="mdl-typography--display-1">Experience</h2>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">Gigabyte Developers</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast">Founder and CEO</p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    <strong>Dec 2015 – Present</strong> - Umuahia, Abia State. Nigeria
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Managing the development team</li>
                    <li>Providing statistical and performance feedback illustrated in charts</li>
                    <li>Coaching and administering performance reviews for proper skill improvement</li>
                    <li>Over 65 happy clients in a period of 4 years</li>
                    <li>More than 50,000 people make use of our software solutions directly or indirectly</li>
                    <li>Worked directly with the team and developed several mobile applications on <a href="https://play.google.com/store/apps/dev?id=4617962611760843834">Play Store</a> with over 50k online and 100k offline users</li>
                </ul>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">Octofi</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast">Chief Information Officer &amp; Information Technology Director</p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    <strong>Oct 2019 – Present</strong> - Awka, Anambra State. Nigeria
                </p>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">Shopping Samrat Online Pvt.Ltd.</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast">Lead Software Developer</p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    <strong>Feb 2016 – July 2019</strong> - Delhi, India
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Developing of the website using OOP PHP</li>
                    <li>Adapting and adjusting graphic packages from other regions</li>
                    <li>Worked closely with the writer producers and editors</li>
                    <li>Strong creative and conceptual vision and excellence in Typography</li>
                </ul>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">Ojalawa</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast">Chief Technical Officer</p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    <strong>Aug 2016 – Present</strong> - Lagos, Nigeria
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Complete development of the website using Magento</li>
                    <li>Ongoing development of a mobile application for Android</li>
                    <li>Developing project concepts and maintaining optimal workflow</li>
                    <li>Carrying out quality assurance tests to discover errors and optimize usability</li>
                </ul>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">National Root Crops Research Institute, Umudike</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast">Research Intern, Bioresources</p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    <strong>Mar 2016 – Oct 2017</strong> - Umudike, Abia State. Nigeria
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Worked on several research projects</li>
                    <li>Cooperated with colleagues to develop a thesis on the utility of bioresources in modern-day biotechnology</li>
                </ul>
            </section>
        </section>
        <!-- end Experience -->

        <!-- Projects -->
        <section class="mdl-color--white mdl-shadow--2dp">
            <h2 class="mdl-typography--display-1">Projects</h2>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">CometOTP - OTP Authenticator app for Android</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast"><a href="https://play.google.com/store/apps/details?id=com.gigabytedevelopersinc.app.CometOTP">https://play.google.com/store/apps/details?id=com.gigabytedevelopersinc.app.CometOTP</a></p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    Nov 2017 – Present
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Designed and developed the app which implements Time-based One-time Passwords (TOTP) algorithm like specified in RFC 6238</li>
                    <li>Added compatibility which implements HMAC-based One-time Password (HOTP) algorithm like specified in RFC 4226</li>
                    <li>Developed the support for end-to-end encryption technology used for encrypting one-time passwords generated</li>
                    <li>Used by over 5,000 people with over 1,000 daily active users</li>
                </ul>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">FireFiles</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast"><a href="https://play.google.com/store/apps/details?id=com.gigabytedevelopersinc.app.explorer">https://play.google.com/store/apps/details?id=com.gigabytedevelopersinc.app.explorer</a></p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    Feb 2018 – Present
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Designed based on Material Design Guidelines, featuring beautiful and consistent design, meaningful transitions, night mode, and tablet multi-pane support</li>
                    <li>Implemented support for Android TV</li>
                    <li>Developed support for Google Wear OS</li>
                    <li>Designed and developed support for Chromecast devices like Google Home</li>
                </ul>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">SonsHub Mobile</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast"><a href="https://play.google.com/store/apps/details?id=com.gigabytedevelopersinc.apps.sonshub">https://play.google.com/store/apps/details?id=com.gigabytedevelopersinc.apps.sonshub</a></p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    Jan 2019 – Present
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Designed and developed the app which implements media streaming</li>
                    <li>Implemented support for downloading content in the app</li>
                    <li>AndroidX support with backward compatibility</li>
                    <li>Utilized Firebase and Google Cloud Messaging (GCM) for instant push notifications</li>
                </ul>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">ISmileBecauseYouSmile</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast"><a href="https://ismilebecauseyousmile.org">https://ismilebecauseyousmile.org</a></p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    Aug 2020 – Present
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Designed and developed the website for the organization (NGO)</li>
                    <li>Implemented both online and offline donation support to receive donations</li>
                </ul>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">Obago Media</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast"><a href="https://obagomedia.com">https://obagomedia.com</a></p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    Oct 2020 – Present
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Designed and developed the website for the organization</li>
                </ul>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">Some Other Projects (Android)</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <a href="https://play.google.com/store/apps/dev?id=4617962611760843834">https://play.google.com/store/apps/dev?id=4617962611760843834</a>
                </p>
            </section>
            <section>
                <h3 class="mdl-typography--title mdl-typography--title mdl-color-text--indigo-500">Other Open-Source Projects</h3>
                <p class="mdl-typography--subhead mdl-typography--subhead-color-contrast"><a href="https://github.com/enwokoma">https://github.com/enwokoma</a></p>
                <p class="mdl-typography--body-1 mdl-typography--body-1-color-contrast">
                    Jan 2017 – Present
                </p>
                <ul class="mdl-typography--subhead mdl-typography--subhead-color-contrast">
                    <li>Developed and Open-sourced <a href="https://github.com/enwokoma">other projects and libraries</a></li>
                    <!--                <li>Maintaining <a href="https://aur.archlinux.org/packages/?SeB=m&K=dreamingincode">12 packages</a> for Arch Linux including the Android SDK package with over 1400 votes</li>-->
                </ul>
            </section>
        </section>
        <!-- end Projects -->
    </main>
</div>
<a href="myResume.pdf" title="Download PDF" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
    <i class="mdi mdi-download mdi-24px"></i>
</a>
<footer>
</footer>
</body>
</html>
