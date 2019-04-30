<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <center><h1>Admin Area!</h1></center>
        <br />
        <section style="">
            <div class="">
                <div class="row">
                    <div class="board">
                        <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <div class="liner"></div>
                                <li class="active">
                                    <a href="#home" data-toggle="tab" title="Resume">
                                        <span class="round-tabs one">
                                            <i class="glyphicon glyphicon-send"></i>
                                        </span> 
                                    </a></li>

                                <li><a href="#profile" data-toggle="tab" title="Cover Letter">
                                        <span class="round-tabs two">
                                            <i class="glyphicon glyphicon-file"></i>
                                        </span> 
                                    </a>
                                </li>
                                <li><a href="#messages" data-toggle="tab" title="CV">
                                        <span class="round-tabs three">
                                            <i class="glyphicon glyphicon-book"></i>
                                        </span> </a>
                                </li>

                                <li><a href="#settings" data-toggle="tab" title="Portfolio">
                                        <span class="round-tabs four">
                                            <i class="glyphicon glyphicon-picture"></i>
                                        </span> 
                                    </a></li>

                                <li><a href="#doner" data-toggle="tab" title="Contacted Me">
                                        <span class="round-tabs five">
                                            <i class="glyphicon glyphicon-phone-alt"></i>
                                        </span> </a>
                                </li>

                            </ul></div>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">

                                <h3 class="head text-center">Start Sending Resume<sup>™</sup> <span style="color:#f48260;">♥</span></h3>
                                <p class="narrow text-center">
                                    Now! You can start sending your resume to companies with vacancies in a simple way including attachment CV, Cover letter and your data.  
                                </p>

                                <p class="text-center">
                                    <a href="/backend/web/send-resume/create" class="btn btn-success btn-outline-rounded green"> start sending out resume <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h3 class="head text-center">Create or Update Cover Letter<sup>™</sup> Profile</h3>
                                <p class="narrow text-center">
                                    This is where you can update or create your cover letter which will be sent with your Resume
                                </p>

                                <p class="text-center">
                                    <a href="/backend/web/cover-letter" class="btn btn-success btn-outline-rounded green"> CRUD Cover Letter <span style="margin-left:10px;" class="glyphicon glyphicon-file"></span></a>
                                </p>

                            </div>
                            <div class="tab-pane fade" id="messages">
                                <h3 class="head text-center">Update Or Add CV</h3>

                                <p class="text-center">
                                    <a href="/backend/web/cv" class="btn btn-success btn-outline-rounded green"> GO to CV System <span style="margin-left:10px;" class="glyphicon glyphicon-book"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="settings">
                                <h3 class="head text-center">Create , Edit Portfolio</h3>

                                <p class="text-center">
                                    <a href="/backend/web/portfolio" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-picture"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="doner">
                                <div class="text-center">
                                    <i class="img-intro icon-checkmark-circle"></i>
                                </div>
                                <h3 class="head text-center">Check out who contacted you! <span style="color:#f48260;">♥</span> AJ</h3>
                                <p class="text-center">
                                    <a href="/backend/web/contact" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-phone-alt"></span></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>


</div>
