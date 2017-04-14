<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta name="Generator" content="CmsEasy 5_6_0_20170105_UTF8"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="renderer" content="webkit">
    <!-- 解决国内双核浏览器优先试用webkit的问题 -->
    <title>WeiCMS 快速建站系统</title>
    <!-- Bootstrap -->
    <link href="{{asset('resources/assets/weihome/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/weihome/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/weihome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/weihome/css/animate.min.css')}}"  rel="stylesheet">
    <script src="{{asset('resources/assets/weihome/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('resources/assets/weihome/js/jquery.SuperSlide.2.1.1.js')}}" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <script src="{{asset('resources/assets/weihome/js/wow.min.js')}}"></script>
    <script>
        if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
            new WOW().init();
        }
    </script>


    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="/cdn.bootcss.com/respond./demo/business-template/V387/template/CmsEasy_V_387/skin/js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@yield('content')

</body>

</html>