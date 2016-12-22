<?php
    $host = "http://jisuqqluck.market.alicloudapi.com";
    $path = "/qqluck/query";
    $method = "GET";
    $appcode = "your appcode";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "qq=2222";
    $bodys = "";
    $url = $host . $path . "?" . $querys;

    $curl = curl_init();//初始化一个新的会话，返回一个cURL句柄，供curl_setopt(), curl_exec()和curl_close() 函数使用。

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);//使用一个自定义的请求信息来代替"GET"或"HEAD"作为HTTP请求。这对于执行"DELETE" 或者其他更隐蔽的HTTP请求。有效值如"GET"，"POST"，"CONNECT"等等。也就是说，不要在这里输入整个HTTP请求。例如输入"GET /index.html //HTTP/1.0\r\n\r\n"是不正确的。

    curl_setopt($curl, CURLOPT_URL, $url);//需要获取的URL地址，也可以在curl_init()函数中设置。
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);//启用时会将头文件的信息作为数据流输出。
    curl_setopt($curl, CURLOPT_FAILONERROR, false);//显示HTTP状态码，默认行为是忽略编号小于等于400的HTTP信息。
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);//将curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
    curl_setopt($curl, CURLOPT_HEADER, true);// 启用时会将头文件的信息作为数据流输出。
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//禁用后cURL将终止从服务端进行验证。使用CURLOPT_CAINFO选项设置证书使用CURLOPT_CAPATH选项设置证书目录 如果CURLOPT_SSL_VERIFYPEER(默认值为2)被启用，CURLOPT_SSL_VERIFYHOST需要被设置成TRUE否则设置为FALSE。
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);//1 检查服务器SSL证书中是否存在一个公用名(common name)。译者注：公用名(Common Name)一般来讲就是填写你将要申请SSL证书的域名 (domain)或子域名(sub domain)。2 检查公用名是否存在，并且是否与提供的主机名匹配
    }

    // var_dump(curl_exec($curl));
    print_r(curl_exec($curl));
?>
