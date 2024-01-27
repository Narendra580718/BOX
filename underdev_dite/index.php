<?php session_start(); ?>


<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$name = null;
if (!empty($_SESSION['name'])) {
    $name = $_SESSION['name'];
}
?>

<body class="bodyz">

    <header class="z1_container">
        <div class="logo">
            <img src="logo.png">
        </div>
        <div class="z2_container">
            <div class="one"><a href="index.php">Home</a></div>
            <div class="two"><a href="about.html">About Us</a></div>
            <div class="three"><a href="contact.html">Contact Us</a></div>
            
            <?php if ($name == null) {
                echo '<div class="five"> <a href="login.html">Log In</a></div>';
            }else{
                echo'<div class="five"> <a href="logout.php">Logout</a></div>';
            }
             ?>
            
        </div>
    </header>


    <div class="f1">
        <div class="f1z-sub">
            <div class="f2">Modern House</div>
            <div class="f3">3002 Foster Ave,Brooklyn,NY 11210,USA</div>
        </div>
        <div class="f2z-sub">
            <div class="f4">$450,000</div>
            <div class="f5 text-right">$2,800/sq ft</div>
        </div>
    </div>


    <div class="mainbody-container">
        <div class="body-div">
            <div class="bodysub-div"><img src="mm.png" class="mm-div"></div>
        </div>
        <div class="avt-div">
            <div class="avt-container">
                <div class="avtsub-div">
                    <img src="avt.png" class="avtpfp-div">
                </div>
                <div class="avtsub2-div">
                    <div class="nm-div">Kayley Hall</div>
                    <div class="pfp-div"><span class="org-txt2">View Profile</span></div>
                </div>
            </div>
            <div class="dt-div">Name</div><br>
            <div class="dt-div">Phone</div><br>
            <div class="dt-div">Email</div><br>
            <div class="dt2-div">Hello, I'm interested in...</div><br>
            <div class="learn-div">Learn</div><br>
        </div>
    </div>


    <div class="mmsub-div">
        <div class="m1"><img src="rec1.png" class="m2"></div>
        <div class="m3"><img src="rec2.png" class="m2"></div>
        <div class="m3"><img src="rec3.png" class="m2"></div>
        <div class="m3"><img src="rec4.png" class="m2"></div>
        <div class="m3"><img src="rec5.png" class="m2"></div>
        <div class="m3"><img src="rec6.png" class="m2"></div>
        <div class="m3"><img src="rec7.png" class="m2"></div>
    </div>


    <div class="det-container">
        <div class="up-container">
            Details
        </div>
        <div class="lws-div">
            <div class="lsg-div">
                <div class="ss1-div">
                    <img src="bd2.png" class="sub1-div">
                </div>
                <div class="ss2-div">
                    <img src="sh2.png" class="sub1-div">
                </div>
                <div class="ss3-div">
                    <img src="gd2.png" class="sub1-div">
                </div>
                <div class="ss4-div">
                    <img src="grg.png" class="sub3-div">
                </div>
                <div class="ss5-div">
                    <img src="Cal.png" class="sub4-div">
                </div>
            </div>
        </div>


        <div class="desmain-div">
            <div class="dssub-div">
                Description
            </div>
            <div class="pr-div">
                <p>
                    At vero eos et iusto odio dignissimos ducimus, qui haec putat, ut ipsi auctori huius disciplinae
                    placet: constituam, quid sit numeranda nec me ab illo inventore veritatis et expedita distinctio nam
                    libero tempore, cum memoriter, tum etiam ac ratione.
                </p><br>
                <p>
                    Si sine metu degendae praesidia firmissima filium morte multavit si sine causa? quae fuerit causa,
                    mox videro; interea hoc tenebo, si ob rem voluptas assumenda est, quid sit extremum et inter
                    mediocrem animadversionem atque natum sit, a natura incorrupte.<br>
                </p><br>
                <p>
                    Omne animal, simul atque in sanguinem suum tam inportuno tamque crudeli; sin, ut earum motus et
                    accusamus et argumentandum et dolore suo sanciret militaris imperii disciplinam exercitumque in
                    liberos atque haec ratio late patet in quo pertineant non possim.<br>
                </p><br>
            </div>
        </div>


        <div class="fe-container">
            <div class="feup-container">
                Features
            </div>
            <div class="felw-container">
                <div class="flwsub-div1">
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div">Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                </div>


                <div class="flwsub-div2">
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                </div>


                <div class="flwsub-div3">
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                    <div class="fesub-div">
                        <img src="tick.png" class="t-div"> Air Conditioning
                    </div>
                </div>

            </div>
        </div>


        <div class="tg-div">
            <div class="gr-container"></div>
            <div class="ls-div">
                Similar Listings
            </div>
        </div>


        <div class="lst-div">
            <div class="slst1-div">
                <img src="sq1.png" class="sq">
                <div class="subst-div">
                    Malto House
                </div>
            </div>
            <div class="slst2-div">
                <img src="sq2.png" class="sq">
                <div class="subst-div">
                    Malto House
                </div>
            </div>
            <div class="slst3-div">
                <img src="sq3.png" class="sq">
                <div class="subst-div">
                    Malto House
                </div>
            </div>
        </div>


        <div class="ds-div">
            <div class="lg-div">
                <div class="bd-div">
                    <img src="bd2.png" class="sub-div">
                </div>
                <div class="sh-div">
                    <img src="sh2.png" class="sub-div">
                </div>
                <div class="lv-div">
                    <img src="gd2.png" class="sub-div">
                </div>
            </div>
            <div class="lg-div">
                <div class="bd-div">
                    <img src="bd2.png" class="sub-div">
                </div>
                <div class="sh-div">
                    <img src="sh2.png" class="sub-div">
                </div>
                <div class="lv-div">
                    <img src="gd2.png" class="sub-div">
                </div>
            </div>
            <div class="lg-div">
                <div class="bd-div">
                    <img src="bd2.png" class="sub-div">
                </div>
                <div class="sh-div">
                    <img src="sh2.png" class="sub-div">
                </div>
                <div class="lv-div">
                    <img src="gd2.png" class="sub-div">
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="tag-line">
                <div class="qq-1">
                    <p class="foot-txt">Make your dreams a <span class="org-txt">reality</span></p>
                </div>
                <div class="five-2">Work With Us</div>
            </div>
        </div>


        <div class="footer-2">
            <div class="logo-2">
                <img src="logo.png">
            </div>
            <div class="icons">
                <div class="fb"><img src="fb.png" class="fb1"></div>
                <div class="twit"><img src="twit.png" class="twit1"></div>
                <div class="ins"><img src="ins.png" class="ins1"></div>
            </div>
        </div>


        <div class="footer-3">
            <div class="main-clhead1">
                <div class="col-1">
                    <h3 class="same-head">Column Heading</h2>
                        <h4>Link Goes here</h4>
                        <h4>Link Goes here</h4>
                        <h4>Link Goes here</h4>
                        <h4>Link Goes here</h4>
                </div>
            </div>
            <div class="main-clhead2">
                <div class="col-2">
                    <h3 class="same-head">Column Heading</h2>
                        <h4>Link Goes here</h4>
                        <h4>Link Goes here</h4>
                        <h4>Link Goes here</h4>
                        <h4>Link Goes here</h4>
                </div>
            </div>
            <div class="main-clhead3">
                <div class="col-3">
                    <h3 class="same-head">Column Heading</h2>
                        <h4>Link Goes here</h4>
                        <h4>Link Goes here</h4>
                        <h4>Link Goes here</h4>
                        <h4>Link Goes here</h4>
                </div>
            </div>
        </div>
</body>

</html>