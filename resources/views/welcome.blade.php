@extends('layouts.app')

@section('content')
<div class="container-fluid pb-5">
    <div class="row">
        <div class="col-lg-5 col-sm-1 "></div>
        <div id="first-mini" class="col-lg-2 col-sm-2 mini-first-section" data-selector="#first"></div>
        <div class="col-lg-5 col-sm-1 "></div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-1 "></div>
        <div id="second-mini" class="col-3 mini-second-section" data-selector="#second"></div>
        <div class="col-lg-4 col-sm-1 "></div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-1"></div>
        <div id="third-mini" class="col-4 mini-third-section text-center" data-selector="#third">
            <p>Web</p>
        </div>
        <div class="col-lg-3 col-sm-1 "></div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-1"></div>
        <div id="fourth-mini" class="col-4 mini-fourth-section text-center" data-selector="#third">
            <p>Web</p>
        </div>
        <div class="col-lg-3 col-sm-1 "></div>
    </div>
</div>
<div id="first" class="container-fluid first-section" style="display: none;">
    <div class="pl-5">
        <div class="row">
            <div class="col-12 text-center">
                <div id="nav-icon1" class="closeme" data-selector="#first">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 p-5 text-center">
                <img src="https://media.licdn.com/dms/image/C5603AQGdPMPwyjk74Q/profile-displayphoto-shrink_200_200/0?e=1577923200&v=beta&t=eusXPfA3MZhCyrc4NzA_VK2a0Qx2TpkDa4wmx5rhqVo" alt="" class="rounded-circle headshot"> <br>
                    <h3 class="pb-3"> Nick Giegerich</h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 d-flex py-5 pl-5 align-items-center justify-content-center flex-column">
                <a href="" target="_blank"><img src="/social-logos/PDF-Logo/pdf-logo.png" alt="" class="icon" style=""></a> <br>
                    <p> Snag my Resumé</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 d-flex py-5 align-items-center justify-content-center flex-column">
                <a href="https://github.com/nickgiegerich" target="_blank"><img src="/social-logos/github/GitHub-Mark-120px-plus.png" alt="" class="icon"></a>
                    <p> Check out my code </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 d-flex py-5 align-items-center justify-content-center flex-column">
                <a href="https://www.linkedin.com/in/nick-giegerich-62b369168/" target="_blank"><img src="/social-logos/LinkedIn-Logos/LI-Logo-Black.png" alt="" class="icon" style=""></a>
                    <p> Professional proof </p>
            </div>
        </div>
    </div>
</div>
<div id="second" class="container-fluid second-section" style="display: none;">
    <div class="row">
        <div class="col-12 text-center">
            <div id="nav-icon2" class="closeme" data-selector="#second">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-12 d-flex justify-content-center">
            <h1>Experience</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="/card-images/data.jpg" class="card-img-top exp-image" alt="..." style="border-radius: 30% 70% 70% 30% / 40% 60% 40% 60%;">
                    <div class="card-body">
                        <p class="card-text">built a database system for a mining operation in Lebel-sur-quevillon Canada.</p><br>
                            <p>Tech used: </p>
                                <img src="/social-logos/html.png" width="45px" alt=""/>
                                <img src="/social-logos/js.png" width="45px" alt=""/>
                                <img src="/social-logos/php.png" width="45px" alt=""/>
                                <img src="/social-logos/sql-serv.png" width="45px" alt=""/>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="/card-images/taiwan.jpg" class="card-img-top exp-image headshot" alt="..." style="border-radius: 70% 30% 30% 70% / 60% 40% 60% 40%;">
                    <div class="card-body">
                        <p class="card-text">worked at the industrial technology research institue in taiwan as part of an intership for boise state university</p><br>
                            <p>Tech used: </p>
                                <img src="/social-logos/matlab.png" width="45px" alt=""/>
                                <img src="/social-logos/python.svg" width="100px" alt=""/>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="card-images/web-dev.jpg" class="card-img-top headshot" alt="..." style="border-radius: 30% 70% 70% 30% / 40% 60% 40% 60%;">
                    <div class="card-body">
                        <p class="card-text">working as a freelance web developer to build small businesses personal websites or data tools</p><br>
                            <p>Tech used: </p>
                                <img src="/social-logos/html.png" width="45px" alt=""/>
                                <img src="/social-logos/js.png" width="45px" alt=""/>
                                <img src="/social-logos/jquery.png" width="45px" alt=""/>
                                <img src="/social-logos/php.png" width="45px" alt=""/>
                                <img src="/social-logos/mysql.png" width="45px" alt=""/>
                    </div>
            </div>
        </div>
    </div>
</div>
<div id="third" class="container-fluid third-section" style="display: none;">
<div class="row">
        <div class="col-12 text-center">
            <div id="nav-icon3" class="closeme" data-selector="#third">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 pt-5 d-flex justify-content-center">
            <h1>Websites</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="/card-images/data.jpg" class="card-img-top exp-image" alt="..." style="border-radius: 30% 70% 70% 30% / 40% 60% 40% 60%;">
                    <div class="card-body">
                        <p class="card-text">built a database system for a mining operation in Lebel-sur-quevillon Canada.</p><br>
                            <p>Tech used: </p>
                                <img src="/social-logos/html.png" width="45px" alt=""/>
                                <img src="/social-logos/js.png" width="45px" alt=""/>
                                <img src="/social-logos/php.png" width="45px" alt=""/>
                                <img src="/social-logos/sql-serv.png" width="45px" alt=""/>
                    </div>
            </div>
        </div>
        <div class="col-lg-4">
        
        </div>
        <div class="col-lg-4">
        
        </div>
    </div>
</div>
@endsection
