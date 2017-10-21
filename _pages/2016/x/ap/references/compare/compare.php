<!DOCTYPE html>

<html>
    <head>
        <meta property="og:description" content="CS50 is Harvard University's introduction to the intellectual enterprises of computer science and the art of programming. Anyone may take CS50, even if not a student at Harvard. This chart compares options."/>
        <meta property="og:image" content="http://media.www.harvard.edu/user13/harvard_shield.png"/>
        <meta property="og:site_name" content="CS50"/>
        <meta property="og:title" content="CS50 Options"/>
        <script>
            <?= file_get_contents("jquery-1.11.2.min.js") ?>
        </script>
        <script>
            <?= file_get_contents("bootstrap.min.js") ?>
        </script>
        <script>

            // adapted from http://stackoverflow.com/a/8948587
            $(function() {
                var isVisible = false;
                var hideAllPopovers = function() {
                   $('td span, th span').each(function() {
                        $(this).popover('hide');
                    });  
                };
                $('td span, th span').popover({
                    animation: false,
                    container: 'body',
                    html: true,
                    placement: 'auto',
                    trigger: 'manual'
                }).on('click', function(e) {
                    if (isVisible) {
                        hideAllPopovers();
                    }
                    $(this).popover('show');
                    $('.popover').off('click').on('click', function(e) {
                        e.stopPropagation(); // prevent event for bubbling up => will not get caught with document.onclick
                    });
                    isVisible = true;
                    e.stopPropagation();
                });

                $(document).on('click', function(e) {
                    hideAllPopovers();
                    isVisible = false;
                });
            });

        </script>
        <style>
            <?= file_get_contents("bootstrap.min.css") ?>
        </style>
        <style>

            /* links */
            a {
                color: #00f;
                text-decoration: underline;
            }
            a:hover {
                color: #00f;
            }

            /* popovers */
            span {
                color: #00f;
                cursor: help;
                text-decoration: underline;
            }

            /* cells */
            td {
                font-weight: normal;
                text-align: center;
                vertical-align: middle !important;
            }

            /* leftmost column */
            td:first-child {
                font-weight: bold;
                text-align: left;
                white-space: nowrap;
            }

            /* table headings */
            th {
                background-color: #a3182d !important; /* http://harvardx.harvard.edu/files/styles/os_files_small/public/harvardx/files/harvardx_rgb_nb3.png?itok=WrVkeAm1 */
                color: #fff !important;
                font-weight: bold;
                text-align: center;
                vertical-align: middle !important;
            }

            th span {
                color: #fff;
            }

            table {
                border-bottom: 0 !important;
            }

            tr:nth-last-child(2) td, tr:last-child td {
                background-color: inherit !important;
                border: 0 !important;
            }

        </style>
        <title>CS50 Chart</title>
    </head>
    <body>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th rowspan="2"></th>
                    <th rowspan="2">OpenCourseWare</th>
                    <th colspan="2">edX</th>
                    <th colspan="2">Harvard University</th>
                </tr>
                <tr>
                    <th>Honor Code Certificate</th>
                    <th>Verified Certificate</th>
                    <th>CS50 Certificate</th>
                    <th>Course Credit</th>
                </tr>
                <tr>
                    <td><span data-content="Students may access CS50's handouts, source code, videos, and more.">Access to Content</span></td>
                    <td>via <a href="http://cs50.tv/">cs50.tv</a>, <a href="https://itunes.apple.com/us/course/this-is-cs50-2014./id953585749">iTunes U</a>, <a href="https://www.roku.com/channels/#!details/16270/cs50">Roku</a>, or <a href="http://www.youtube.com/cs50">YouTube</a></td>
                    <td>via <a href="http://cs50.edx.org/">cs50.edx.org</a></td>
                    <td>via <a href="http://cs50.edx.org/">cs50.edx.org</a></td>
                    <td>via <a href="https://cs50.harvard.edu/">cs50.harvard.edu</a></td>
                    <td>via <a href="https://cs50.harvard.edu/">cs50.harvard.edu</a></td>
                </tr>
                <tr>
                    <td><span data-content="Students may use the &lt;a href='https://manual.cs50.net/appliance/2015/'&gt;CS50 Appliance&lt;/a&gt; (for working on problem sets), CS50 Check (for checking their programs' correctness), and more.">Access to Tools</span></td>
                    <td>&#x2714;</td>
                    <td>&#x2714;</td>
                    <td>&#x2714;</td>
                    <td>&#x2714;</td>
                    <td>&#x2714;</td>
                </tr>
                <tr>
                    <td><span data-content="Students may participate in CS50's (unmoderated) community forums at &lt;a href='https://cs50.stackexchange.com/'&gt;cs50.stackexchange.com&lt;/a&gt;, &lt;a href='http://reddit.com/r/cs50'&gt;reddit.com/r/cs50&lt;/a&gt;, and &lt;a href='https://www.facebook.com/groups/cs50'&gt;facebook.com/groups/cs50&lt;/a&gt;.">Community Forums</span></td>
                    <td>&#x2714;</td>
                    <td>&#x2714;</td>
                    <td>&#x2714;</td>
                    <td>&#x2714;</td>
                    <td>&#x2714;</td>
                </tr>
                <tr>
                    <td>Requirements</td>
                    <td>&nbsp;</td>
                    <td>9 problem sets, 1 final project</span></td>
                    <td>9 problem sets, 1 final project</span></td>
                    <td>9 problem sets, 1 final project</span></td>
                    <td>9 problem sets, 2 quizzes, 1 final project</span></td>
                </tr>
                <tr>
                    <td>Assessment</td>
                    <td>&nbsp;</td>
                    <td><span data-content="Students' problem sets are evaluated by CS50's servers.">auto-graded</span></td>
                    <td><span data-content="Students' problem sets are evaluated by CS50's servers.">auto-graded</span></td>
                    <td><span data-content="Students' problem sets are evaluated by CS50's servers.">auto-graded</span></td>
                    <td><span data-content="Students receive personalized feedback, with all problem sets and both quizzes evaluated by (human!) TFs (teaching fellows).">TF-graded</span></td>
                </tr>
                <tr>
                    <td>Schedule</td>
                    <td>&nbsp;</td>
                    <td><span data-content="Students may start course anytime between 1 January 2015 and 31 December 2015, so long as 9 problem sets and 1 final project are submitted by 31 December 2015.">self-paced</span></td>
                    <td><span data-content="Students may start course anytime between 1 January 2015 and 31 December 2015, so long as 9 problem sets and 1 final project are submitted by 31 December 2015.">self-paced</span></td>
                    <td><span data-content="Students may start course anytime between 26 January 2015 and 30 September 2015, so long as 9 problem sets and 1 final project are submitted by 31 December 2015.">self-paced</span></td>
                    <td><span data-content="Course starts on 26 January 2015 and ends by 16 May 2015, with weekly deadlines.">structured schedule</span></td>
                </tr>
                <tr>
                    <td><span data-content="Weekly opportunities to ask questions, meet classmates, review material, and walk through problem sets with CS50's TFs (teaching fellows).">Office Hours with TFs</span></td>
                    <td>&nbsp;</td>
                    <td><span data-content="At least 9 times between 26 January 2015 and 16 May 2015, CS50's TFs will host office hours (opportunities to ask questions, meet classmates, review material, and walk through problem sets) in &lt;a href='https://www.google.com/maps/place/Cambridge,+MA'&gt;Cambridge&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Chennai,+Tamil+Nadu,+India'&gt;Chennai&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Houston,+TX'&gt;Houston&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Masterton,+New+Zealand'&gt;Masterton&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Rome,+Italy'&gt;Rome&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Seattle,+WA'&gt;Seattle&lt;/a&gt;, and/or &lt;a href='https://www.google.com/maps/place/St+Louis,+MO'&gt;St. Louis&lt;/a&gt;, subject to students' interest. Email David at &lt;a href='mailto:malan@harvard.edu'&gt;malan@harvard.edu&lt;/a&gt; to propose other cities!">in select cities</span></td>
                    <td><span data-content="At least 9 times between 26 January 2015 and 16 May 2015, CS50's TFs will host office hours (opportunities to ask questions, meet classmates, review material, and walk through problem sets) in &lt;a href='https://www.google.com/maps/place/Cambridge,+MA'&gt;Cambridge&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Chennai,+Tamil+Nadu,+India'&gt;Chennai&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Houston,+TX'&gt;Houston&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Masterton,+New+Zealand'&gt;Masterton&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Rome,+Italy'&gt;Rome&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Seattle,+WA'&gt;Seattle&lt;/a&gt;, and/or &lt;a href='https://www.google.com/maps/place/St+Louis,+MO'&gt;St. Louis&lt;/a&gt;, subject to students' interest. Email David at &lt;a href='mailto:malan@harvard.edu'&gt;malan@harvard.edu&lt;/a&gt; to propose other cities!">in select cities</span></td>
                    <td><span data-content="At least 9 times between 26 January 2015 and 16 May 2015, CS50's TFs will host office hours (opportunities to ask questions, meet classmates, review material, and walk through problem sets) in &lt;a href='https://www.google.com/maps/place/Cambridge,+MA'&gt;Cambridge&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Chennai,+Tamil+Nadu,+India'&gt;Chennai&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Houston,+TX'&gt;Houston&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Masterton,+New+Zealand'&gt;Masterton&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Rome,+Italy'&gt;Rome&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Seattle,+WA'&gt;Seattle&lt;/a&gt;, and/or &lt;a href='https://www.google.com/maps/place/St+Louis,+MO'&gt;St. Louis&lt;/a&gt;, subject to students' interest. Email David at &lt;a href='mailto:malan@harvard.edu'&gt;malan@harvard.edu&lt;/a&gt; to propose other cities!">in select cities</span>, online</td>
                    <td><span data-content="At least 9 times between 26 January 2015 and 16 May 2015, CS50's TFs will host office hours (opportunities to ask questions, meet classmates, review material, and walk through problem sets) in &lt;a href='https://www.google.com/maps/place/Cambridge,+MA'&gt;Cambridge&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Chennai,+Tamil+Nadu,+India'&gt;Chennai&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Houston,+TX'&gt;Houston&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Masterton,+New+Zealand'&gt;Masterton&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Rome,+Italy'&gt;Rome&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Seattle,+WA'&gt;Seattle&lt;/a&gt;, and/or &lt;a href='https://www.google.com/maps/place/St+Louis,+MO'&gt;St. Louis&lt;/a&gt;, subject to students' interest. Email David at &lt;a href='mailto:malan@harvard.edu'&gt;malan@harvard.edu&lt;/a&gt; to propose other cities!">in select cities</span>, online</td>
                </tr>
                <tr>
                    <td><span data-content="An epic late-nighter during which students may dive into a problem set or final project alongside classmates and staff (and food and photos and fun).">CS50 Hackathon</span></td>
                    <td>&nbsp;</td>
                    <td><span data-content="Sometime between January 2015 and December 2015, David and other members of CS50's staff will travel, subject to students' interest, to &lt;a href='https://www.google.com/maps/place/Cambridge,+MA'&gt;Cambridge&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Chennai,+Tamil+Nadu,+India'&gt;Chennai&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Houston,+TX'&gt;Houston&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Masterton,+New+Zealand'&gt;Masterton&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Rome,+Italy'&gt;Rome&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Seattle,+WA'&gt;Seattle&lt;/a&gt;, and/or &lt;a href='https://www.google.com/maps/place/St+Louis,+MO'&gt;St. Louis&lt;/a&gt; to hold a CS50 Hackathon. Email David at &lt;a href='mailto:malan@harvard.edu'&gt;malan@harvard.edu&lt;/a&gt; to propose other cities!">in select cities</span></td>
                    <td><span data-content="Sometime between January 2015 and December 2015, David and other members of CS50's staff will travel, subject to students' interest, to &lt;a href='https://www.google.com/maps/place/Cambridge,+MA'&gt;Cambridge&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Chennai,+Tamil+Nadu,+India'&gt;Chennai&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Houston,+TX'&gt;Houston&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Masterton,+New+Zealand'&gt;Masterton&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Rome,+Italy'&gt;Rome&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Seattle,+WA'&gt;Seattle&lt;/a&gt;, and/or &lt;a href='https://www.google.com/maps/place/St+Louis,+MO'&gt;St. Louis&lt;/a&gt; to hold a CS50 Hackathon. Email David at &lt;a href='mailto:malan@harvard.edu'&gt;malan@harvard.edu&lt;/a&gt; to propose other cities!">in select cities</span></td>
                    <td><span data-content="Sometime between January 2015 and December 2015, David and other members of CS50's staff will travel, subject to students' interest, to &lt;a href='https://www.google.com/maps/place/Cambridge,+MA'&gt;Cambridge&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Chennai,+Tamil+Nadu,+India'&gt;Chennai&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Houston,+TX'&gt;Houston&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Masterton,+New+Zealand'&gt;Masterton&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Rome,+Italy'&gt;Rome&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Seattle,+WA'&gt;Seattle&lt;/a&gt;, and/or &lt;a href='https://www.google.com/maps/place/St+Louis,+MO'&gt;St. Louis&lt;/a&gt; to hold a CS50 Hackathon. Email David at &lt;a href='mailto:malan@harvard.edu'&gt;malan@harvard.edu&lt;/a&gt; to propose other cities!">in select cities</span></td>
                    <td><span data-content="Sometime between January 2015 and December 2015, David and other members of CS50's staff will travel, subject to students' interest, to &lt;a href='https://www.google.com/maps/place/Cambridge,+MA'&gt;Cambridge&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Chennai,+Tamil+Nadu,+India'&gt;Chennai&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Houston,+TX'&gt;Houston&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Masterton,+New+Zealand'&gt;Masterton&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Rome,+Italy'&gt;Rome&lt;/a&gt;, &lt;a href='https://www.google.com/maps/place/Seattle,+WA'&gt;Seattle&lt;/a&gt;, and/or &lt;a href='https://www.google.com/maps/place/St+Louis,+MO'&gt;St. Louis&lt;/a&gt; to hold a CS50 Hackathon. Email David at &lt;a href='mailto:malan@harvard.edu'&gt;malan@harvard.edu&lt;/a&gt; to propose other cities!">in select cities</span></td>
                </tr>
                <tr>
                    <td><span data-content="An epic display of final projects via which students may showcase their work.">CS50 Fair</span></td>
                    <td>&nbsp;</td>
                    <td>online</td>
                    <td>online</td>
                    <td>online</td>
                    <td>on campus, online</td>
                </tr>
                <tr>
                    <td><span data-content="One-on-one help via screen-sharing and videoconferencing from Harvard undergraduates.">Tutoring</span></td>
                    <td>&nbsp;</td>
                    <td><a href="http://cs50.hsa.net/">via HSA</a></td>
                    <td><a href="http://cs50.hsa.net/">via HSA</a></td>
                    <td><a href="http://cs50.hsa.net/">via HSA</a></td>
                    <td><a href="http://cs50.hsa.net/">via HSA</a></td>
                </tr>
                <tr>
                    <td><span data-content="Students can ask questions of CS50's TFs (teaching fellows) via CS50 Discuss, CS50's own app for interactive discussions.">TF-Moderated Forums</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&#x2714;</td>
                    <td>&#x2714;</td>
                </tr>
                <tr>
                    <td><span data-content="Weekly lectures delivered by David in Sanders Theatre.">Live Lectures</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>on campus, online<br/><small>fall semester only</small></td>
                    <td>on campus, online<br/><small>fall semester only</small></td>
                </tr>
                <tr>
                    <td><span data-content="Weekly sections (i.e., review sessions) led by CS50's TFs (teaching fellows).">Live Sections</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>on campus, online</td>
                    <td>on campus, online</td>
                </tr>
                <tr>
                    <td><span data-content="Students are assigned a TF (teaching fellow) as their primary point person for support.">Dedicated TF</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&#x2714;</td>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td>free</td>
                    <td>free</td>
                    <td>$90+</td>
                    <td>$1000</td>
                    <td>$2200</td>
                </tr>
                <tr>
                    <td>Earn</td>
                    <td>&nbsp;</td>
                    <td><span data-content="Students who earn satisfactory scores on 9 problem sets and 1 final project by 31 December 2015 will receive a downloadable, printable &lt;a href='https://www.edx.org/about/student-faq#certificates'&gt;Honor Code Certificate&lt;/a&gt; from edX that resembles &lt;a href='https://www.edx.org/sites/default/files/honor_code_cert.png'&gt;this sample&lt;/a&gt;.">Honor Code Certificate</span></td>
                    <td><span data-content="Students who earn satisfactory scores on 9 problem sets and 1 final project by 31 December 2015 will receive a downloadable, printable &lt;a href='https://www.edx.org/verified-certificate'&gt;Verified Certificate&lt;/a&gt; from edX that resembles &lt;a href='https://www.edx.org/sites/default/files/theme/example-certificate-verified.png'&gt;this sample&lt;/a&gt;.">Verified Certificate</span></td>
                    <td><span data-content="Students who earn satisfactory scores on 9 problem sets and 1 final project by 31 December 2015 will receive a downloadable, printable &lt;a href='https://cs50.harvard.edu/certificate'&gt;CS50 Certificate&lt;/a&gt; from &lt;a href='http://www.dce.harvard.edu/'&gt;Harvard Division of Continuing Education&lt;/a&gt;, signed by David and the school's dean, that resembles &lt;a href='CS50-Certificate-Sample.pdf'&gt;this sample&lt;/a&gt;.">CS50 Certificate</span></td>
                    <td>
                        <span data-content="Students who register for undergraduate or graduate credit and earn satisfactory scores on 9 problem sets, 2 quizzes, and 1 final project by 16 May 2015 will receive (transferrable) course credit from &lt;a href='http://www.extension.harvard.edu/'&gt;Harvard Extension School&lt;/a&gt;.">course credit</span>,
                        <span data-content="Students who register for undergraduate or graduate credit will be assigned a final letter grade from &lt;a href='http://www.extension.harvard.edu/'&gt;Harvard Extension School&lt;/a&gt;.">letter grade</span>,
                        <span data-content="CS50 (aka CSCI E-50) will be included on all &lt;a href='http://www.extension.harvard.edu/'&gt;Harvard Extension School&lt;/a&gt; transcripts, which students can request at no charge.">transcript</a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="https://www.edx.org/course/introduction-computer-science-harvardx-cs50x">register</a> by 31 December 2015</td>
                    <td><a href="https://www.edx.org/course/introduction-computer-science-harvardx-cs50x">register</a> by 31 December 2015</td>
                    <td><a href="https://cs50.harvard.edu/certificate">register</a> by 30 September 2015</td>
                    <td><a href="http://www.extension.harvard.edu/courses/intensive-introduction-computer-science">register</a> by 30 August 2015</td>
                </tr>
                <?php /*
                <tr>
                    <td></td>
                    <td></td>
                    <td>likely offered again</td>
                    <td>likely offered again</td>
                    <td>not likely offered again</td>
                    <td>definitely offered again</td>
                </tr>
                */ ?>
            </table>
        </div>
    </body>
</html>
