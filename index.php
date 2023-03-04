<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <title>Ahonon gobi abyssinie parfait</title>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>

<script>
    // google script  to trnaslate the page according to the language of the browser
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');

    }
</script>

<body>
    <div id="window" class="window">
        <div class="icon-computer text-center" id="icon-computer" ondblclick="opencom()">
            <img src="https://mohamedelghandour.github.io/windows-10/img/thumb_14339670430This_PC.png" class="img-responsive">
            <p>This PC</p>

        </div>


        <div style="z-index: 99;"  class="main">
           <!-- the last i did  ondblclick="opencom0()" -->
            <div class="left">
                <div ondblclick="opennote()"  class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder1"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i>
                    <p>My cv</p>
                </div>
                <div ondblclick="openimg()" class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder2"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i>
                    <p>My Projects</p>
                </div>

            </div>

            <div class="left">

                <div ondblclick="openvid()" class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder4"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i>
                    <p>Works Experience</p>
                </div>
                <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder5"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i>
                    <p>My Research</p>
                </div>
            </div>
        </div>




        <section onclick="openabout()" class="option-box">
            <div style="display: none;" class="color-box">
                <h4>All about me and my Portfolio</h4>
                <!--<video class="center-block" width="360" height="" controls>
                        <source src="img/myExplain_2.mp4" type="video/mp4">
                        <source src="img/myExplain_2.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                </video>-->
                <div style="position:relative;height:0;padding-bottom:56.25%;width: 400px; d-none">
                    <img style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" src="http://intelligencia-si.com/assets/img/team/pp.jpeg" alt="">
                    <!-- <iframe src="https://www.youtubes.com/embed/VUPtvK28fhY?ecver=22" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allowfullscreen></iframe> -->
                </div>
                <a class="btn btn-primary center-block text-center" onclick="openabout()">About Me</a>
            </div>
            <i class="fa fa-gear fa-3x gear-check"></i>
        </section>
        <div class="overlay-computer" id="overlay-computer">
            <div class="fluid-container">
                <div class="first-row-win" id="first-row-win">
                    <div class="left">
                        <i class="fa fa-hdd-o"></i>
                        <i class="fa fa-file-o"></i>
                        <i class="fa fa-folder"></i>
                        <span>Front End</span>
                    </div>
                    <div class="right">
                        <i class="fa fa-window-minimize" onclick="closeopencom()"></i>
                        <i class="fa fa-window-restore" onclick="returncom()" id="returncam" style="display:none;"></i>
                        <i class="fa fa-window-maximize" onclick="upercom()" id="upercam"></i>
                        <i class="fa fa-times" onclick="closecom()"></i>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="second-row-win">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a class="home-a" href="#home" aria-controls="home" role="tab" data-toggle="tab">File</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Home</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Share</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">View</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-envelope-open fa-2x"></i>
                                    <p>Mail</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-file-code-o  fa-2x"></i>
                                    <p>Code</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-sticky-note-o fa-2x"></i>
                                    <p>Note</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-user-circle fa-2x"></i>
                                    <p>User</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-battery-4  fa-2x"></i>
                                    <p>battery</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-book fa-2x"></i>
                                    <p>Book</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-car fa-2x"></i>
                                    <p>Car</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-camera-retro  fa-2x"></i>
                                    <p>cam</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-building fa-2x"></i>
                                    <p>build</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-cubes fa-2x"></i>
                                    <p>cubes</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-coffee fa-2x"></i>
                                    <p>coffee</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <i class="fa fa-film fa-2x"></i>
                                    <p>film</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="third-row-win">
                    <div class="col-xs-2">
                        <i class="fa fa-long-arrow-left"></i>
                        <i class="fa fa-long-arrow-right"></i>
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-arrow-up"></i>
                    </div>
                    <div class="col-xs-7">
                        <div class="path-input">
                            <span class="path-icon-input">This pc</span>
                            <span class="path-icon-input">Gobi (E:)</span>
                            <span class="path-icon-input">programming</span>
                            <span class="path-icon-input">Front End</span>
                        </div>
                        <i class="fa fa-hdd-o path-icon"></i>
                        <i class="fa fa-repeat path-icon-1"></i>
                        <i class="path-icon-2">|</i>
                    </div>
                    <div class="col-xs-3">
                        <input class="search-input" type="text" placeholder="Search">
                        <i class="fa fa-search path-icon-1"></i>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="fourd-row-win">
                    <div class="col-xs-3" style="border-right: 1px solid #808080;">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="fa fa-star">Quick access</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p><span class="fa fa-desktop">Desktop</span></p>
                                        <p><span class="fa fa-download">Downloads</span></p>
                                        <p><span class="fa fa-file-text">documents</span></p>
                                        <p><span class="fa fa-picture-o ">Picture</span></p>
                                        <p><span class="fa fa-folder ">Folder</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="fa fa-folder-open">Creative Cloud</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p><span class="fa fa-desktop">Desktop</span></p>
                                        <p><span class="fa fa-download">Downloads</span></p>
                                        <p><span class="fa fa-file-text">documents</span></p>
                                        <p><span class="fa fa-picture-o ">Picture</span></p>
                                        <p><span class="fa fa-folder ">Folder</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="fa fa-desktop">This PC</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p><span class="fa fa-desktop">Desktop</span></p>
                                        <p><span class="fa fa-download">Downloads</span></p>
                                        <p><span class="fa fa-file-text">documents</span></p>
                                        <p><span class="fa fa-picture-o ">Picture</span></p>
                                        <p><span class="fa fa-folder ">Folder</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-9 ">
                        <div class="row main-folders">
                            <div class="col-xs-2 folders text-center" ondblclick="openimg()">
                                <p class="contain"><img src="windows_10.jpg" class="img-responsive  center-block" alt=""></p>
                                <span>My Projects</span>
                            </div>
                            <div class="col-xs-2 folders text-center" ondblclick="openvid()">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/myposter.PNG" class="img-responsive  center-block" alt=""></p>
                                <span>Work Background</span>
                            </div>
                            <div class="col-xs-2 folders text-center" ondblclick="opennote()">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_sticky-note_299111.png" class="img-responsive  center-block" alt=""></p>
                                <span>My cv</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="col-xs-2 folders text-center">
                                <p class="contain"><img src="https://mohamedelghandour.github.io/windows-10/img/if_folder-blue_285658.svg" class="img-responsive  center-block" style="height: 64px;" alt=""></p>
                                <span>Folder</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="fived-row-win"></div>
            </div>
            <div class="resizer"></div>
        </div>
        <div class="clearfix"></div>
        <div class="image-overlay" id="image-overlay">
            <div class="fluid-container">
                <div class="first-row-img">
                    <span class="center-text head-over">My Image</span>
                    <div class="right">
                        <i class="fa fa-times" onclick="closeimg()"></i>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div style="background-image: url('window_11.jpg') no-repeat;" class="second-row-img">
                    <div class="container">
                        <section>
                            <h2>Projects</h2>
                            <ul>
                                <li>
                                    <h3>Name: Job platform</h3>
                                    <p>Description: Created a web and mobile app using Laravel, NodeJS, and Docker to connect students in Benin with scholarships and internships. As a full-stack developer, I built and implemented features including user authentication, search functionality, and external API integration. App has helped over 2000 students find educational opportunities.</p>
                                    <p>Technologies used: Laravel, NodeJS, Docker</p>
                                    <p>URL: <a href="https://jobs.uac.bj/">https://jobs.uac.bj/</a></p>
                                </li>
                                <li>
                                    <h3>Name: Crowdfunding</h3>
                                    <p>Description: Created a PHP-based web app that enables francophone African users to create and share fundraising campaigns, including user authentication, donation tracking, and social sharing features. I’m glad to have helped over 100 people in these countries find funding for their needs through the app.</p>
                                    <p>Technologies used: PHP</p>
                                    <p>Role: Lead Developer</p>
                                </li>
                                <li>
                                    <h3>Name: E-health</h3>
                                    <p>Description: Developed a web-based telemedicine software for CHU France using Laravel and JavaScript. The software has been used by over 5000 patients through the <a href="https://cloud-respidom.com">https://cloud-respidom.com</a> platform.</p>
                                    <p>Technologies used: Laravel, JavaScript</p>
                                    <p>Role: Full-stack Developer</p>
                                </li>
                                <li>
                                    <h3>Name: Search engine and social network</h3>
                                    <p>Description: Developed a web crawler-based search engine and social network using PHP and MySQL. I built and implemented features including user authentication, search functionality, and social sharing features.</p>
                                    <p>Technologies used: PHP, MySQL</p>
                                    <p>Role: Full-stack Developer</p>
                                </li>

                                <li>
                                    <h3>Name: ElioStrategy</h3>
                                    <p>Description: ElioStrategy is a web-based search engine and social network that provides users with a comprehensive view of the metal markets and their main factors. The platform employs a web crawler to gather data on minor metals, and provides detailed analyses on their supply chain, including mining projects, refining, metallurgy, substitution processes, R&D work, and recycling channels. As a full-stack developer, you built and implemented features such as user authentication, search functionality, and social sharing using PHP and MySQL. The platform also allows users to create profiles and connect with others with similar interests in the metal markets. Overall, ElioStrategy is a valuable tool for anyone interested in following and understanding the evolution of minor metal prices and their supply chain.</p>
                                    <p>Technologies used: PHP, MySQL</p>
                                    <p>Role: Full-stack Developer</p>
                                </li>
                            </ul>
                        </section>

                    </div>
                    <img src="" class="center-block img-responsive" style="height:80vh" alt="">
                </div>
            </div>
        </div>

        <div class="video-overlay" id="video-overlay">
            <div class="fluid-container">
                <div class="first-row-vid">

                    <div class="right">
                        <i class="fa fa-times" onclick="closevid()"></i>
                    </div>
                    <div class="container">
                        <section>
                            <h2>Works Background</h2>
                            <table>
                                <tr>
                                    <th>Year</th>
                                    <th>Position, Company Name and Achievement</th>
                                </tr>
                                <tr>
                                    <td>2022-Present</td>
                                    <td>
                                        <ul>
                                            <li>CTO and Lead Developer at INTELLIGENCIA SI (since 2022)</li>
                                            <li>Designed web and mobile platforms for online learning, e-commerce, and product showcasing.</li>
                                            <li>Directed IT projects, including the design and implementation of <a href="https://eliostrategy.com">https://eliostrategy.com</a>, <a href="https://cvscan.uk/fr/">https://cvscan.uk/fr/</a>, and <a href="https://aplahoue-tourisme.com">https://aplahoue-tourisme.com</a>.</li>
                                            <li>Configured remote servers to store, manage, and process data.</li>
                                            <li>Developed an automatic detection system for stolen electrical objects using communicating chips and artificial intelligence software.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021-2022</td>
                                    <td>
                                        <ul>
                                            <li>Application Developer at MASTERCARD FOUNDATION (2021-2022)</li>
                                            <li>Secured a one-year internship at MASTERCARD FOUNDATION after winning a web and mobile application development competition for the dissemination of professional opportunities for students in Benin.</li>
                                            <li>Designed and developed a web and mobile platform for the dissemination of professional opportunities at the University of Abomey-Calavi, which can be found at <a href="https://jobs.uac.bj">https://jobs.uac.bj</a>.</li>
                                            <li>Conducted unit and functional testing of the system developed for student registrations at uac.bj.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2020-Today</td>
                                    <td>
                                        <ul>
                                            <li>Full-stack Web and Mobile Developer at LEMES TECHNOLOGY, Telecommuting</li>
                                            <li>Designed web and mobile platforms for e-learning, e-commerce, and product showcasing.</li>
                                            <li>Developed management software for desktop imaging and image processing using C-Sharp.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2019-Present</td>
                                    <td>
                                        <ul>
                                            <li>Freelance Web Developer, ComeUp (2019 - Present)</li>
                                            <li>Started freelancing as a web developer during my first year of studies in computer science, driven by my passion for web development.</li>
                                            <li>Designed and developed websites and web applications for various clients, including small businesses and startups.</li>
                                            <li>Collaborated with clients to gather requirements, design user interfaces, and develop custom features.</li>
                                            <li>Managed multiple projects simultaneously and met project deadlines.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>

                        </section>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="second-row-vid">
                    <!--<video class="center-block" width="" height="" controls>
                            <source src="img/myExplain_2.mp4" type="video/mp4">
                            <source src="img/myExplain_2.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                    </video>
                    <div style="position:relative;height:0;padding-bottom:56.25%;"><iframe src="https://www.youtube.com/embed/VUPtvK28fhY?ecver=2" style="position:absolute;width: 50%;height: 50vh;left: 25%;" width="640" height="360" frameborder="0" allowfullscreen></iframe></div>
                -->

                </div>
            </div>
        </div>

        <div style="z-index: 100;" class="note-overlay" id="note-overlay">
            <div class="fluid-container">
                <div class="first-row-note">
                    <span class="center-text head-over">CV</span>
                    <div class="right">
                        <i class="fa fa-times" onclick="closenote()"></i>
                    </div>
                    <div class="container">
                        <!--Professional Background-->
                        <!-- Personal Information -->
                        <h2>Personal Information</h2>
                        <table>
                            <tr>
                                <th>Name</th>
                                <td>Ahonon Gobi Parfait</td>
                            </tr>
                            <tr>
                                <th>Address/Country</th>
                                <td>Cotonou, Bénin. BP 226, Lokossa, Benin</td>
                            </tr>
                            <tr>
                                <th>Tel</th>
                                <td>+229 54030381</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><a href="mailto:abyssiniea@email.com">abyssiniea@email.com</a></td>
                            </tr>
                        </table>
                        <!-- Education -->
                        <h2>Education</h2>
                        <table>
                            <tr>
                                <th>Year</th>
                                <th>Degree or Certificate</th>
                            </tr>
                            <tr>
                                <td>2022</td>
                                <td>Online data Science Mathematics Certifcate, Great Learning</td>
                            </tr>
                            <tr>
                                <td>2018-2021</td>
                                <td>Bachelor, computer science(Semester 1-4 Common Core) - Software engineering(semester 5 and 6), IFRI UAC <a href="https://flipbookpdf.net/web/site/fa90dd09e7e13703b5ddfb55865e0d44227624ee202212.pdf.html">click to see Relevant Courses</a></td>
                            </tr>
                            <tr>
                                <td>2017-2018</td>
                                <td>Physical and Chemical Sciences, Faculty of Science and Technology, UAC</td>
                            </tr>
                            <tr>
                                <td>2009-2016</td>
                                <td>General Education College, Maths and Physics, CEG AZOVE</td>
                            </tr>
                        </table>
                        <!-- Works background -->
                        <h2>Works background</h2>
                        <table>
                            <tr>
                                <th>Year</th>
                                <th>Position, Company Name and Achievement</th>
                            </tr>
                            <tr>
                                <td>2022-Present</td>
                                <td>
                                    <ul>
                                        <li>CTO and Lead Developer at INTELLIGENCIA SI (since 2022)</li>
                                        <li>Designed web and mobile platforms for online learning, e-commerce, and product showcasing.</li>
                                        <li>Directed IT projects, including the design and implementation of <a href="https://eliostrategy.com">https://eliostrategy.com</a>, <a href="https://cvscan.uk/fr/">https://cvscan.uk/fr/</a>, and <a href="https://aplahoue-tourisme.com">https://aplahoue-tourisme.com</a>.</li>
                                        <li>Configured remote servers to store, manage, and process data.</li>
                                        <li>Developed an automatic detection system for stolen electrical objects using communicating chips and artificial intelligence software.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>2021-2022</td>
                                <td>
                                    <ul>
                                        <li>Application Developer at MASTERCARD FOUNDATION (2021-2022)</li>
                                        <li>Secured a one-year internship at MASTERCARD FOUNDATION after winning a web and mobile application development competition for the dissemination of professional opportunities for students in Benin.</li>
                                        <li>Designed and developed a web and mobile platform for the dissemination of professional opportunities at the University of Abomey-Calavi, which can be found at <a href="https://jobs.uac.bj">https://jobs.uac.bj</a>.</li>
                                        <li>Conducted unit and functional testing of the system developed for student registrations at uac.bj.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>2020-Today</td>
                                <td>
                                    <ul>
                                        <li>Full-stack Web and Mobile Developer at LEMES TECHNOLOGY, Telecommuting</li>
                                        <li>Designed web and mobile platforms for e-learning, e-commerce, and product showcasing.</li>
                                        <li>Developed management software for desktop imaging and image processing using C-Sharp.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>2019-Present</td>
                                <td>
                                    <ul>
                                        <li>Freelance Web Developer, ComeUp (2019 - Present)</li>
                                        <li>Started freelancing as a web developer during my first year of studies in computer science, driven by my passion for web development.</li>
                                        <li>Designed and developed websites and web applications for various clients, including small businesses and startups.</li>
                                        <li>Collaborated with clients to gather requirements, design user interfaces, and develop custom features.</li>
                                        <li>Managed multiple projects simultaneously and met project deadlines.</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        <section>
                            <h2>Projects</h2>
                            <ul>
                                <li>
                                    <h3>Name: Job platform</h3>
                                    <p>Description: Created a web and mobile app using Laravel, NodeJS, and Docker to connect students in Benin with scholarships and internships. As a full-stack developer, I built and implemented features including user authentication, search functionality, and external API integration. App has helped over 2000 students find educational opportunities.</p>
                                    <p>Technologies used: Laravel, NodeJS, Docker</p>
                                    <p>URL: <a href="https://jobs.uac.bj/">https://jobs.uac.bj/</a></p>
                                </li>
                                <li>
                                    <h3>Name: Crowdfunding</h3>
                                    <p>Description: Created a PHP-based web app that enables francophone African users to create and share fundraising campaigns, including user authentication, donation tracking, and social sharing features. I’m glad to have helped over 100 people in these countries find funding for their needs through the app.</p>
                                    <p>Technologies used: PHP</p>
                                    <p>Role: Lead Developer</p>
                                </li>
                                <li>
                                    <h3>Name: E-health</h3>
                                    <p>Description: Developed a web-based telemedicine software for CHU France using Laravel and JavaScript. The software has been used by over 5000 patients through the <a href="https://cloud-respidom.com">https://cloud-respidom.com</a> platform.</p>
                                    <p>Technologies used: Laravel, JavaScript</p>
                                    <p>Role: Full-stack Developer</p>
                                </li>
                                <li>
                                    <h3>Name: Search engine and social network</h3>
                                    <p>Description: Developed a web crawler-based search engine and social network using PHP and MySQL. I built and implemented features including user authentication, search functionality, and social sharing features.</p>
                                    <p>Technologies used: PHP, MySQL</p>
                                    <p>Role: Full-stack Developer</p>
                                </li>

                                <li>
                                    <h3>Name: ElioStrategy</h3>
                                    <p>Description: ElioStrategy is a web-based search engine and social network that provides users with a comprehensive view of the metal markets and their main factors. The platform employs a web crawler to gather data on minor metals, and provides detailed analyses on their supply chain, including mining projects, refining, metallurgy, substitution processes, R&D work, and recycling channels. As a full-stack developer, you built and implemented features such as user authentication, search functionality, and social sharing using PHP and MySQL. The platform also allows users to create profiles and connect with others with similar interests in the metal markets. Overall, ElioStrategy is a valuable tool for anyone interested in following and understanding the evolution of minor metal prices and their supply chain.</p>
                                    <p>Technologies used: PHP, MySQL</p>
                                    <p>Role: Full-stack Developer</p>
                                </li>
                            </ul>
                        </section>

                        <div>
  <strong>Skills</strong>
  <div style="max-height: 300px; overflow-y: scroll;">
    <table>
      <thead>
        <tr>
          <th>Programming Languages</th>
          <th>Framework</th>
          <th>Tools and Platforms</th>
          <th>Soft skills</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>PHP, Python, C++, JavaScript, SQL, Bash, JAVA, XML</td>
          <td>Laravel, Reactjs, NodeJS, Qt, Flutter</td>
          <td>Version Control: Git; Databases: PostgreSQL, MySQL, SQLite, Oracle, SQL Server; Cloud: AWS; Operating Systems: Linux, Windows; CMS: Wordpress, Moodle; Other: Docker, LaTeX, Arduino, Ethical Hacking</td>
          <td>Teamwork, problem-solving, time management, event management, public speaking, multitasking, organization, teaching (mathematics, hacking, and Linux commands)</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div>
  <h3>Languages &amp; Volunteer Experience</h3>
  <table>
    <tr>
      <th>Languages and Hobbies</th>
      <td>French (Native), English (Good), Esperanto (Excellent), Adja (Native), Fon (Good) - Dancing, Sports, Attending Clubs, Learning Languages.</td>
    </tr>
    <tr>
      <th>Esperanto, May 2020 - Present</th>
      <td>Ensure the dissemination of Esperanto in all African countries. Netherlands, Rotterdam</td>
    </tr>
  </table>
</div>

<div>
  <strong>Honors and Awards</strong>
  <ul>
    <li>Multiple academic excellence awards and medals in Maths and Physics Olympiad competitions from 6th to 1st grade.</li>
    <li>Winner of the web and mobile application development competition for the dissemination of professional opportunities for students in Benin, sponsored by Mastercard Foundation - January 2021.</li>
    <li>Recipient of the XVI PREMIS GRAU MIRO award for the best publisher of literature (poetry) in Esperanto/Spanish in Spain - 2020.</li>
  </ul>
</div>

<div style="height: 100px;">

</div>
</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="second-row-note">
                    
                </div>
            </div>
        </div>


        <div class="about-overlay" id="about-overlay">

            <div style="" class="fluid-container">
                <div class="first-row-img">
                    <span class="center-text head-over">Info about me (Welcome to my buiding window 10 Portfolio)</span>
                    <div class="right">
                        <i class="fa fa-times" onclick="closeabout()"></i>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="second-row-abo">
                    <div>
                        <span></span>
                        <img src="http://intelligencia-si.com/assets/img/team/pp.jpeg" class="img-responsive" alt="">
                        <p>
                        <h1>Hello!</h1>
                        <p>My name is Ahonon Gobi Parfait, and I'm a passionate and dedicated full-stack web and mobile developer based in Cotonou, Benin. With over three years of experience in software engineering and application development, I have honed my skills in designing and implementing web and mobile platforms for online learning, e-commerce, and product showcasing.</p>
                        <p>Currently, I work as the CTO and lead developer at INTELLIGENCIA SI, where I direct IT projects and design and implement web and mobile platforms. I am proud to have contributed to the development of platforms such as eliostrategy.com, cvscan.uk/fr/, and aplahoue-tourisme.com. In addition, I have experience configuring remote servers to store, manage, and process data and have developed an automatic detection system for stolen electrical objects using communicating chips and artificial intelligence software.</p>
                        <p>Prior to my current position, I worked as a full-stack web and mobile developer at LEMES TECHNOLOGY, where I designed web and mobile platforms for e-learning, e-commerce, and product showcasing. During my time there, I also developed management software for desktop imaging and image processing using C-Sharp.</p>
                        <p>I hold a Bachelor's degree in Computer Science with a specialization in Software Engineering from IFRI UAC and a certification in Online Data Science Mathematics from Great Learning. I am also skilled in programming languages such as Java, Python, and C-Sharp and have experience with web technologies such as HTML, CSS, JavaScript, and React.</p>
                        <p>In my free time, I enjoy exploring new technologies, contributing to open-source projects, and sharing my knowledge through online communities and forums. I am always looking for new challenges and opportunities to grow my skills and make a positive impact in the tech industry.</p>
                        <a href="mailto:contact@gobi-abyssinie.tech">👉 Send me message</a>
                        <a ondblclick="openimg()">👉 Checkout some of my work</a>



                        </p>
                    </div>
                </div>

            </div>
        </div>
       

        <div class="start-window-fade hidden-start" id="start-window-fade"></div>
        <div class="start-window hidden-start" id="start-window">
            <div class="fluid-container" id="container-start">
                <div class="row">
                    <div class="col-xs-1 first-column">
                        <div class="icon-bottom" id="power" onclick="powerOff()">
                            <i class="fa fa-power-off fa-1x"></i>
                        </div>
                        <div class="icon-bottom">
                            <i class="fa fa-cog fa-1x"></i>
                        </div>
                        <div class="icon-bottom">
                            <i class="fa fa-folder-open-o fa-1x"></i>
                        </div>
                        <div class="icon-bottom">
                            <i class="fa fa-user fa-1x"></i>
                        </div>
                        <div class="icon-bottom open-icon-list">
                            <i class="fa fa-bars fa-1x"></i>
                        </div>
                    </div>
                    <div class="col-xs-3 second-column">
                        <div class="wrap-scroll">
                            <div class="head-med">
                                <small>What I'am Used</small>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/HTML_Logo.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Html, Html 5</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/8b61de4c84033266e15317a6eb9fda2d-css3.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Css, Css 3</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/Javascript-shield.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Pure JavaScript</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/bootstrap-4.svg" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Bootstrap</small>
                                </div>
                            </div>
                            <div class="head-med mouse-prient">
                                <small>Expand <i class="fa fa-chevron-down fa-1x"></i></small>
                            </div>
                            <div class="head-med">
                                <small>Tools used</small>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/winicon.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Windows 10</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/Firefox.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Firefox</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/chrome1600.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">chrome</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/favicon.ico" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Visual Studio Code</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/Photoshop_CC_icon.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Photoshop cc 2017</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/illustrator.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">illustrator cc 2017</small>
                                </div>
                            </div>
                            <div class="media">

                                <div class="media-left">
                                    <a href="https://github.com/ahonongobi">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/github-desktop-icon.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">github</small>
                                </div>

                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/codepen1600.png" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Codepen</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://mohamedelghandour.github.io/windows-10/img/photo.jpg" width="35" height="35" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="media-heading">Upwork</small>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="col-xs-4 third-column">
                        <div class="head-box">
                            <small>Life at a glance</small>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 col-xs-push-4 box">
                                <div class="box-style">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-envelope fa-2x"></i>
                                    </div>
                                    <div>
                                        Mail
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-xs-pull-8 box">
                                <div class="box-style text-center">
                                    <div class="mycontainer">
                                        <div id="day">day</div>
                                        <div id="number-day">number</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-8 box">
                                <div class="box-style">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-internet-explorer fa-2x"></i>
                                    </div>
                                    <div>
                                        Microsoft Edge
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-picture-o fa-2x"></i>
                                    </div>
                                    <div>
                                        Picture
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-sun-o fa-2x"></i>
                                    </div>
                                    <div>
                                        Weather
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-laptop fa-2x"></i>
                                    </div>
                                    <div>
                                        User
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style" style="background:url('http://intelligencia-si.com/assets/img/team/pp.jpeg');background-size: cover;    background-repeat: no-repeat;
                                background-position: 39%;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div>
                                        twitter <i class="fa fa-twitter" style="float: right;line-height: 21px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-shopping-bag  fa-2x"></i>
                                    </div>
                                    <div>
                                        store
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-skype  fa-2x"></i>
                                    </div>
                                    <div>
                                        skype
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style text-center" style="background:url('https://mohamedelghandour.github.io/windows-10/img/king-care.jpg');background-size: cover;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div style="font-size: 10px;">
                                        Candy Crush
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="head-box">
                            <small>Play And Explore</small>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 box">
                                <div class="box-style" style="background:url('https://mohamedelghandour.github.io/windows-10/img/logo.PNG');background-size: cover;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div style="font-size: 10px;">
                                        Xbox
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-music fa-2x"></i>
                                    </div>
                                    <div style="font-size: 10px;">
                                        Music
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-film fa-2x"></i>
                                    </div>
                                    <div style="font-size: 10px;">
                                        Film
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style" style="background:url('https://mohamedelghandour.github.io/windows-10/img/microsoft-solitaire-collection-02-535x535.png');background-size: cover;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div style="font-size: 10px;">

                                    </div>
                                </div>
                            </div>
                            <a href="/" class="col-xs-4 box">
                                <div class="box-style" style="background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAk1BMVEXiV0z///+1NinhSz7UTULXUEThTUDhUUb2z83iVUryu7jxs6/rkozhT0Pqj4n0xMG0MiTgRTfogHnjXVLupKDgSTu2JxTnenL99fTlaWDzwr/yurfofnf77Ov45uW2Kxr33Nq2Igy1HgDFQjb219XsmpTpiYLmcGfkZVvuop3mc2vYVku2MSG1Khm7Oy70y8jfQDF6goqfAAAGhklEQVR4nO3d6ZqiOBQGYJBuMCqWqIxbads9qFU1i33/Vze4EEIWJEAV5zjn+9kPQl4OBWHpxHH12W3Gq5nTSdhfW0OjasXR/muyiP2AdQN0nG9/7z5ZuHyNgq50V+GkTaJGuHU69aXCXptEVbj1Ojs8ubBNoiJcOl0DL8Le5EdbREV4DLsGXoXtVVEWJlHXvruwN/mnHaIsXHR8lsmFbVVREm4BlDATtvS3KAk3ftc8Jxe2U0VJOAZwkObCVqooCVedXyocUdgGURLOgAlbIEpCBk3Ym/zRkAhe2LiK8IVNq4hA2LCKGITNqohC2KiPikOYVnH/5MIGByoWYXqg1qwiGmFv8rMeEY+wbhURCWtWEZOw3hkVlbBWFXEJ61QRmbBGFbEJ7YnohNYHKj6hbRURCi2riFFoV0WUQqsq4hT2Jr+SJxdaHKhYhSmxYhXRCitXEa+wahURCyuebjAL04tGBSJqYaUq4hZWqSJyYYUqYhc+PqOiFz4k4hc+Ij6BMCX2kQm/Wwp7vbLTDUShYy0sq+JzCNOLhpEIUvinPbFnrCJIoe2p5hpTFUEKnX/rEA1VhCm0P5uaqwhTWOsv0VBFoMJ6x2nv5xmPsCZRc6CCFdY9UJUqwhU632uV8ZdMBCxMjTXqOJGJoIWXfLfNtxiZ0DrMeXohIyH2kJCE8ENCEsIPCUkIPyQkIfyQkITwQ0ISwg8JSQg/JCQh/JCQhPBDQhJq1hiEfpYw1I96KiySLmNYSFnysrD92GOtC4PwMMwzH60iT24Vi6ZDcZn3aRB5oW5LLDoOi1nEXQvDoyunf4wLa2EzddTcZXJg6iiijKkDmAy8boVspjQpzX4lDt0XGYYFXr/JRk/31dbU8kBtWRgO9a0/5AdXoFY5yyAotJ69aXeE5UCHLQs9zYdk1ww50bQTLlmexNFS9fsisTxM2xYaPz4+ZLveH5iFrnsU2h+MdUucoQr5EIzlQnHMW73QdrDKrxPuo0pC98QFWmHf9nLxWcL+YnrJu/A/Vz+YJNz3L0l2y8Iml/yMyoW7l/M9L6Our4dcuI6DS8Ior8Pak4THyLsk9k9DEcmveFw4+O3d43fep+HCl6yZ3igvjiQcBVkbwt9zYaNvTBLaXiC+VuhEvF9ya7kqvP5wmm80+y0WYcjLc+uN6IWOP1W2ikUYvGYrO5QJnXjtFhdEI2SrbGXzsEwotKTvoRIGC16aUqHQ41vGqIT53+Gx9CgVu6G3AZqxCPNz6arkXHppis83e+uZIRF6h2xdy1s7jULhxvH2FwtbuI7ufRp+wc9uCszCmHfxBn5BOPDYPYCEyXh0idgvvU+zYBbmp5rbzshrGMxuCWvMl9LlvYUs9PkVsV8U5unbl/HrhCfl/lCp4WOhuwdzb6HkXb3HV4T8x2ejMLsHgyfc8H1fcqbh15V18UwjZm47780XCef5XCclVwuJoRW+gxQm4vNSc5+Gd+/kK74Y6xk3Pl+4PC8Kz7zN/dIN/43UaxNi+6Tt84T79/klh+NMfm9hvLcI+Va3Us8731sbH8zVYh2F16ivlUxCL39SfO+lqX0azx74BT3visLwI9/qQroD5kJrHiChv8o3urufeGH3vK2ETOygZ/eRzyAc35+Xxs5BfE/IO2b4hcnLJee99D6RX/HwC/XhL6meVTgU3qU+pXAoTNYHU3h+2Ch/45pTeLXEH74NAAn5K2zzTU4wck1J3goU/izZ+n6isJaWv8XIGlUyJV1cfF/Is3+NpR95u4crq9Cklr+n8W8PD8cle529aab52Q1X6rTKwa0nN2o02Wvr30T5p815uCptE/Ne5+I3UfPxKoi130QFzrC/OTWbzfYTvmvz9V9wiQnCQgLjZlhY53aiuAr6NrHrBjYOCUkIPyQkIfyQkITwQ0ISwg8JSQg/JCQh/JCQhPBDQhLCDwlJCD8kJCH8kJCE8ENCEsIPCUkIPyQkIfyQkITwQ0ISwg8JSQg/JCQh/JCQhPBDQhLCDwlJCD8kJCH8/O+Fjf6vP4zIE1JIQuvR0eCFrUqFR2WcA3SRx0SThJsmo4rAiDyWiiTcRo9XATzypC+SMBs6DW+E0Rj1wgR7EaPkgdCdNhtZpOuEUxmkCJcO5gsGc5ThfhShu206fEqHYb46t5QqdHcM64Eaaub80gnd5VQd4AhBgmiqG5FKJ0zPqB+RXzLBHbywwI8+5LNomTA9VAfj06zrdlfO7DQeaA7Qa/4DpSWhgC09M5AAAAAASUVORK5CYII=');background-size: cover;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div style="font-size: 10px; color:#fff">
                                        My CV
                                    </div>
                                </div>
                            </a>
                            <div class="col-xs-4 box">
                                <div class="box-style" style="background:url('https://mohamedelghandour.github.io/windows-10/img/shortcut-icon-180-393c2144.png');background-size: cover;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div style="font-size: 10px;">

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-8 col-xs-push-4 box">
                                <div class="box-style" style="background:url('https://mohamedelghandour.github.io/windows-10/img/bank.jpg');background-size: 130%;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div>
                                        News
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-xs-pull-8 box">
                                <div class="box-style" style="background:url('https://mohamedelghandour.github.io/windows-10/img/maxresdefault_live.jpg');background-size: cover;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div>
                                        Money
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style" style="background:url('https://mohamedelghandour.github.io/windows-10/img/unnamed.png');background-size: cover;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div style="font-size: 10px;">

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style" style="background:url('https://mohamedelghandour.github.io/windows-10/img/onenote-amazon-app-store-100361701-large.jpg');background-size: cover;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div style="font-size:12px;">
                                        OneNote
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 box">
                                <div class="box-style" style="background:url('https://mohamedelghandour.github.io/windows-10/img/office2016logo.png');background-size: cover;background-position: center;">
                                    <div class="icon-bottom text-center" style="margin: 20px;">
                                        <i class="fa fa-twitter fa-2x" style="color: rgba(0,0,0,0);"></i>
                                    </div>
                                    <div style="font-size:10px;">
                                        Office
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="nav navbar-inverse navbar-fixed-bottom footer text-center">
            <div class="fluid-container">
                <div class="row">
                    <div class="left">
                        <div class="col-xs-1-me">
                            <div class="icon-bottom strat-win" id="strat-win">
                                <i class="fa fa-windows fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-xs-1-me">
                            <div class="icon-bottom">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                        </div>
                        <a href="mailto:abyssiniea@gmail.com" class="col-xs-1-me">
                            <div class="icon-bottom">
                                <i style="color: #fff;" class="fa fa-envelope fa-2x"></i>
                            </div>
                        </a>
                        <div class="col-xs-1-me" id="a1">
                            <div class="icon-bottom">
                                <i class="fa fa-folder fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-xs-1-me" id="a0">
                            <div class="icon-bottom">
                                <i class="fa fa-folder fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-xs-1-me" id="a2">
                            <div class="icon-bottom">
                                <i class="fa fa-picture-o fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-xs-1-me" id="a3">
                            <div class="icon-bottom">
                                <i class="fa fa-film fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-xs-1-me" id="a4">
                            <div class="icon-bottom">
                                <i class="fa fa-file-text-o fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-xs-1-me" id="a5">
                            <div class="icon-bottom">
                                <i class="fa fa-id-card fa-2x"></i>
                            </div>
                        </div>
                        <span class=".clearfix"></span>
                    </div>
                    <div class="right">
                        <div class="col-xs-1-me" id="close-all">
                        </div>
                        <div class="col-xs-1-me">
                            <div class="icon-bottom">
                                <i class="fa fa-bell fa-2x"></i>
                            </div>
                        </div>
                        <div class="date col-xs-1-me">
                            <span id="time">00:00</span>
                            <span id="history">00/00/0000</span>
                        </div>
                        <div class="col-xs-1-me">
                            <div class="icon-bottom">
                                <i class="fa fa-volume-up  fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-xs-1-me">
                            <div class="icon-bottom">
                                <i class="fa fa-chevron-up fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="drop.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/draggabilly/2.1.1/draggabilly.pkgd.min.js"></script>
    <script src="https://dl.dropboxusercontent.com/s/dfkz6u1vr966ub5/jquery.top-droppable.js"></script>
    <script src="app.js"></script>
    <script src="mesure.js"></script>

    <script>
        // hide color-box on document ready
        $(document).ready(function() {
            $('.color-box').hide();
        });
    </script>
    <script>
        // if document ready, after 12 seconds, openabout()
        $(document).ready(function() {
            setTimeout(function() {
                openabout();
            }, 12000);
        });
        // create function openabout()
        var aboutOverlay = document.getElementById('about-overlay');

        function openabout() {
            aboutOverlay.style.transform = "scale(1)";
            document.getElementById('a5').style.display = "block";
        }
    </script>

    <script>
        // Wait for the page to load
        window.addEventListener('load', () => {
            // Get the document element
            const elem = document.documentElement;

            // Request fullscreen
            if (elem.requestFullscreen) {
                elem.requestFullscreen().catch(() => {
                    // If requesting fullscreen fails, try again with a user gesture
                    document.addEventListener('click', () => {
                        elem.requestFullscreen();
                    }, {
                        once: true
                    });
                });
            } else if (elem.webkitRequestFullscreen) {
                /* Safari */
                elem.webkitRequestFullscreen().catch(() => {
                    // If requesting fullscreen fails, try again with a user gesture
                    document.addEventListener('click', () => {
                        elem.webkitRequestFullscreen();
                    }, {
                        once: true
                    });
                });
            } else if (elem.msRequestFullscreen) {
                /* IE11 */
                elem.msRequestFullscreen().catch(() => {
                    // If requesting fullscreen fails, try again with a user gesture
                    document.addEventListener('click', () => {
                        elem.msRequestFullscreen();
                    }, {
                        once: true
                    });
                });
            }
        });
    </script>
</body>

</html>