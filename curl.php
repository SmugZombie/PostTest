<?php
// Simple POST Test via PHP cURL.
// by regli via smugzombie.com
session_start();

if(!isset($_POST['url'])){
        echo "<center><h3>cURL Login Test</h3></center>
                <form method='POST' action='?'><table>
                        <tr><td>URL: </td><td><input type='text' name='url' value='http://'/></td><td>URL To Authenticate - All GET requests should be included in URL</td></tr>
                        <tr><td>Username Field Name: </td><td><input type='text' name='opt1field'/></td><td>Generally 'username' or 'user'</td></tr>
                        <tr><td>Username: </td><td><input type='text' name='opt1data'/></td><td>Your username</td></tr>
                        <tr><td>Password Field: </td><td><input type='text' name='opt2field'/></td><td>Generally 'password' or 'pass'</td></tr>
                        <tr><td>Password:</td><td><input type='password' name='opt2data'/></td><td>Your password</td></tr>
                        <tr><td colspan='3' style='text-align: center;'>These are generally 'hidden' form elements that need to be specified.</td></tr>
                        <tr><td>Field 3 Field Name:</td><td><input type='text' name='opt3field'/></td><td></td></tr>
                        <tr><td>Field 3 Data:</td><td><input type='text' name='opt3data'/></td><td><button type='button' onclick='base64(6)'>b64</button></td></tr>
                        <tr><td>Field 4 Field Name:</td><td><input type='text' name='opt4field'/></td><td></td></tr>
                        <tr><td>Field 4 Data:</td><td><input type='text' name='opt4data'/></td><td></td></tr>
                        <tr><td>Field 5 Field Name:</td><td><input type='text' name='opt5field'/></td><td></td></tr>
                        <tr><td>Field 5 Data:</td><td><input type='text' name='opt5data'/></td><td></td></tr>
                        <tr><td>Field 6 Field Name:</td><td><input type='text' name='opt6field'/></td><td></td></tr>
                        <tr><td>Field 6 Data:</td><td><input type='text' name='opt6data'/></td><td></td></tr>
                        <tr><td>Redirect To:</td><td><input type='text' value='http://' name='opt7data'/></td><td>URL to use Authentication (Optional)</td></tr>
                        <tr><td></td><td><button>Login</button></td></tr>
                </table></form>
                <br><button onclick='prefill(\"mt\")'>Test MT</button> <button onclick='prefill(\"gdgateway\")'>Test GD</button> <button onclick='prefill(\"alienvault\")'>Test AV</button> <button onclick='prefill(\"otrs\")'>OTRS</button> <button onclick='clearForm()'>Clear</button>

                <script>
                function prefill(tool){
                        if(tool == 'mt'){
                                document.getElementsByTagName('input')[0].value = 'http://multitool.xyz/?login=true';
                                document.getElementsByTagName('input')[1].value = 'username';
                                document.getElementsByTagName('input')[2].value = '';
                                document.getElementsByTagName('input')[3].value = 'password';
                                document.getElementsByTagName('input')[4].value = '';
                        }
                        else if(tool == 'gdgateway'){
                                document.getElementsByTagName('input')[0].value = 'https://sso.godaddy.com/login?app=gateway&realm=idp';
                                document.getElementsByTagName('input')[1].value = 'name';
                                document.getElementsByTagName('input')[2].value = '';
                                document.getElementsByTagName('input')[3].value = 'password';
                                document.getElementsByTagName('input')[4].value = '';
                                document.getElementsByTagName('input')[5].value = 'app';
                                document.getElementsByTagName('input')[6].value = 'gateway';
                                document.getElementsByTagName('input')[7].value = 'realm';
                                document.getElementsByTagName('input')[8].value = 'idp';
                                document.getElementsByTagName('input')[13].value = 'https://mya.godaddy.com';
                        }
                        else if(tool == 'alienvault'){
                                document.getElementsByTagName('input')[0].value = 'https://demo.alienvault.com/ossim/session/login.php';
                                document.getElementsByTagName('input')[1].value = 'user';
                                document.getElementsByTagName('input')[2].value = 'guest';
                                document.getElementsByTagName('input')[3].value = 'passu';
                                document.getElementsByTagName('input')[4].value = 'alienvault';
                                document.getElementsByTagName('input')[5].value = 'pass';
                                document.getElementsByTagName('input')[6].value = btoa('alienvault');
                                document.getElementsByTagName('input')[7].value = '';
                                document.getElementsByTagName('input')[8].value = '';
                                document.getElementsByTagName('input')[13].value = 'https://demo.alienvault.com/ossim/';
                        }
                        else if(tool == 'otrs'){
                                document.getElementsByTagName('input')[0].value = 'https://support.tvrms.com/otrs/index.pl';
                                document.getElementsByTagName('input')[1].value = 'User';
                                document.getElementsByTagName('input')[2].value = '';
                                document.getElementsByTagName('input')[3].value = 'Password';
                                document.getElementsByTagName('input')[4].value = '';
                                document.getElementsByTagName('input')[5].value = 'Action';
                                document.getElementsByTagName('input')[6].value = 'Login';
                                document.getElementsByTagName('input')[7].value = 'Lang';
                                document.getElementsByTagName('input')[8].value = 'en';
                                document.getElementsByTagName('input')[9].value = 'TimeOffSet';
                                document.getElementsByTagName('input')[10].value = '420';

                                document.getElementsByTagName('input')[13].value = 'https://support.tvrms.com/otrs/index.pl?Action=AgentTicketQueue;SortBy=Age;OrderBy=Down';
                        }

                }
                function base64(id){
                        myInput = document.getElementsByTagName('input')[id].value;
                        document.getElementsByTagName('input')[id].value = btoa(myInput);
                }
                function clearForm(){
                        inputs = document.getElementsByTagName('input');
                        for (i=0; i < inputs.length; i++) {
                                document.getElementsByTagName('input')[i].value = '';
                        }
                }
                </script>
                ";

        return;
}

$file_path = 'cookies.txt';
$username = "myuser";
$password = "myPassword";

$url = $_POST['url'];

$opt1field = $_POST['opt1field'];
$opt1data = $_POST['opt1data'];
$opt2field = $_POST['opt2field'];
$opt2data = $_POST['opt2data'];
$opt3field = $_POST['opt3field'];
$opt3data = $_POST['opt3data'];
$opt4field = $_POST['opt4field'];
$opt4data = $_POST['opt4data'];
$opt5field = $_POST['opt5field'];
$opt5data = $_POST['opt5data'];
$opt6field = $_POST['opt6field'];
$opt6data = $_POST['opt6data'];
$opt7data = $_POST['opt7data'];

if($opt7data != "" && $opt7data != "http://"){
        $redirect = true;
}


$fields = array(
        $opt1field => urlencode($opt1data),
        $opt2field => urlencode($opt2data),
        $opt3field => urlencode($opt3data),
        $opt4field => urlencode($opt4data),
        $opt5field => urlencode($opt5data),
        $opt6field => urlencode($opt6data)
);
foreach($fields as $key=>$value){
                $fields_string .= $key.'='.$value.'&';
        }
$fields_string = rtrim($fields_string, '&');
$useragent = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36";

$ch = curl_init();
//$url = "https://demo.alienvault.com/ossim/session/login.php";
//$url = "http://multitool.xyz?login=true";
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
//curl_setopt($ch,CURLOPT_COOKIEFILE, $file_path);
curl_setopt($ch,CURLOPT_COOKIEJAR, $file_path);
//curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($ch,CURLOPT_HEADER, 0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); //Ignore SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //Ignore SSL
//curl_setopt($ch,CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION, false);
$downloaded_page = htmlentities(curl_exec($ch));
curl_close($ch);

if($redirect == true){
$url = $opt7data;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch,CURLOPT_COOKIEFILE, $file_path);
//curl_setopt($ch,CURLOPT_COOKIEJAR, $file_path);
curl_setopt($ch,CURLOPT_HEADER, 0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_USERAGENT, $useragent); //Specify Useragent
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); //Ignore SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //Ignore SSL
curl_setopt($ch,CURLOPT_FOLLOWLOCATION, false);
$downloaded_page = htmlentities(curl_exec($ch));

//echo $s;
curl_close($ch);
}

//echo $downloaded_page;
echo "URL Loaded: <input type='text' name='url' value='$url' style='width: 100%;' readonly disabled><hr><textarea style='height: 300px; width: 100%'>";
echo $downloaded_page;
echo "</textarea><textarea style='height: 300px; width: 100%'>";
include('cookies.txt');
echo "</textarea>";

?>
