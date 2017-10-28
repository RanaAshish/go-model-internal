<?php

    $lang = (\Request::segment(1));
?>

<aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">
                                Addison
                            </h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="users.html" title="user">
                                        <i class="fa fa-fw ti-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html" title="lock">
                                        <i class="fa fa-fw ti-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html" title="settings">
                                        <i class="fa fa-fw ti-settings"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html" title="Login">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-fw fa-globe"></i>
                            <span class="mm-text ">Social</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('model-profile',['lang'=>$lang])}}">
                           
                             <i class="fa fa-fw fa-user"></i>
                            <span class="mm-text ">Mein Konto</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('model-prize',['lang'=>$lang])}}">
                            <i class="fa fa-file-o"></i>
                            <span class="mm-text ">Mein Model Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-fw fa-picture-o"></i>
                            <span class="mm-text ">Meine schönsten Fotos</span>
                        </a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-fw fa-heart"></i>
                            <span class="mm-text ">Jobs in der Auswahlliste</span>
                        </a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-fw fa-suitcase"></i>
                            <span class="mm-text ">Jobs Bewerbungen</span>
                        </a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-fw fa-bell-o"></i>
                            <span class="mm-text ">Job Alarme</span>
                        </a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-fw fa-calendar-o"></i>
                            <span class="mm-text ">Portfolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-fw fa-key"></i>
                            <span class="mm-text ">Passwort ändern</span>
                        </a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-fw ti-shift-right"></i>
                            <span class="mm-text ">Abmelden</span>
                        </a>
                    </li>

                 
                   
                    
                   
                    
                   
                   
                 
                
                    
                   
                    
                   
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>