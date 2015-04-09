 <!DOCTYPE html>
<html>

  <head>
    <title>Material Design for Bootstrap</title>

    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Twitter Bootstrap -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design for Bootstrap -->
    <link href="{{ URL::asset('assets/bootstrap/css/roboto.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bootstrap/css/material-fullpalette.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bootstrap/css/ripples.min.css') }}" rel="stylesheet">

    <!-- Dropdown.js -->
    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

  <!-- Page style -->
    <style>
      * {
        box-sizing: border-box;
      }
      .header-panel {
        background-color: #009587;
        height: 144px;
        position: relative;
        z-index: 3;
      }
      .header-panel div {
        position: relative;
        height: 100%;
      }
      .header-panel h1 {
        color: #FFF;
        font-size: 20px;
        font-weight: 400;
        position: absolute;
        bottom: 10px;
        padding-left: 35px;
      }

      .menu {
        overflow: auto;
        padding: 0;
      }
      .menu, .menu * {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .menu ul {
        padding: 0;
        margin: 7px 0;
      }
      .menu ul li {
        list-style: none;
        padding: 20px 0 20px 50px;
        font-size: 15px;
        font-weight: normal;
        cursor: pointer;
      }
      .menu ul li.active {
        background-color: #dedede;
        position: relative;
      }
      .menu ul li a {
        color: rgb(51, 51, 51);
        text-decoration: none;
      }

      .pages {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 4;
        padding: 0;
        overflow: auto;
      }
      .pages > div {
        padding: 0 5px;
        padding-top: 64px;
      }

      .pages .header {
        color: rgb(82, 101, 162);
        font-size: 24px;
        font-weight: normal;
        margin-top: 5px;
        margin-bottom: 60px;
        letter-spacing: 1.20000004768372px;
      }

      .page {
        transform: translateY(1080px);
        transition: transform 0 linear;
        display: none;
        opacity: 0;
        font-size: 16px;
      }

      .page.active {
        transform: translateY(0px);
        transition: all 0.3s ease-out;
        display: block;
        opacity: 1;
      }

      #opensource {
        color: rgba(0, 0, 0, 0.62);
        position: fixed;
        margin-top: 50px;
        margin-left: 50px;
        z-index: 100;
      }

      #source-modal h4 {
        color: black;
      }
      .font-th{
        font-family: "Sukhumvit Set","Helvetica Neue","Helvetica","Arial","Verdana","sans-serif";
      }
      .e-head{
        color: #00BCD4;
        text-align: center;
        margin-top: 64px; 
      }
      .line-text{
          font-size: 18px;
          color: #696969;
          border-top: 1px solid #e3e3e3;
          clear: both;
          height: 61px;
          position: relative;
          top: 30px;
          margin: 0px 70px 0px 70px;
      }
      .line-text>span {
        display: inline-block;
        background-color: #FFF;
        padding: 0 9px;
        position: relative;
        top: -13px;
      }
    </style>


    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

  </head>
  <body >

    <div class="container-fluid main">
      <div class="row">
        <div class="col-xs-3"></div>
        <div class="col-xs-6">
            <div class="well page active e-head">
              <h1 class="header">สวัสดีนิสิต </h1>
              <div class="row">
                <div class="col-xs-3"></div>
                <div class="col-xs-3">
                    <a href="javascript:void(0)" class="btn btn-info">Facebook<div class="ripple-wrapper"></div></a>
                </div>
                <div class="col-xs-3">
                     <a href="javascript:void(0)" class="btn btn-danger">Google<div class="ripple-wrapper"></div></a>
                </div>
                <div class="col-xs-3"></div>
              </div>
              
             
              <div class="line-text"><span>หรือ</span></div>
              <div class="form-horizontal">
              <div class="form-group">
                                        <div class="col-lg-5 control-label" style=" font-size: 22px;color: #696969;">รหัสนิสิต</div>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control input-lg" style="text-align: center;" placeholder="เลข 8 หลัก">
                                        </div>
                                        <div class="col-lg-2"> <button class="btn btn-fab btn-raised btn-primary"><i class="mdi-navigation-check"></i><div class="ripple-wrapper"></div></button></div>
                                    </div>
            </div>
             
            </div>
        </div>
        <div class="col-xs-3"></div>

      </div>
    </div>
  </body>
</html>
