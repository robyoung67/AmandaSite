<h1><?php print ("Welcome"); ?></h1>
<?php

$title=urlencode("The Nook - Test");
$url=urlencode("http://yankee-kitchen-ninja.com/igniter/");
$summary=urlencode("Learn how to create a custom Facebook 'Share' button for your website!");
$image1=urlencode("http://yankee-kitchen-ninja.com/images/blogbtn.jpg");

foreach ($keys as $key){
    if ($key['message_key'] == 'welcome') {
        echo $key['message_text'];
    }
}
?>
<div class="top" id="top"> <img style="width: 543px; height: 200px;" src="/images/bottom.jpg" alt=""></div>

<br>
<table
    style="text-align: left; width: 60%; height: 205px; margin-left: auto; margin-right: auto;"
    border="0" cellpadding="1" cellspacing="1">
    <tbody>
    <tr>
        <td
            style="vertical-align: middle; height: 100%; width: 33%; text-align: center;"><img
                style="width: 200px; height: 196px;" alt="we" src="/images/forumbtn.jpg"></td>
        <td
            style="vertical-align: middle; height: 100%; width: 33%; text-align: center;"><img
                style="width: 200px; height: 196px;" alt="we" src="/images/shopbtn.jpg"></td>
        <td
            style="vertical-align: middle; height: 100%; width: 33%; text-align: center;"><img
                style="width: 200px; height: 196px;" alt="we" src="/images/blogbtn.jpg"></td>
    </tr>
    </tbody>
</table>
<br>

<table style="text-align: center; width: 49px; height: 50px;" border="0"
       cellpadding="2" cellspacing="2">
    <tbody>
    <tr>
        <td style="text-align: center; vertical-align: middle;"><img
                style="width: 45px; height: 47px;" alt="fb"
                src="/images/facebookBtn.jpg"><br>
        </td>
    </tr>
    <tr>
        <td><img style="text-align: center; width: 49px; height: 50px;" alt="tt"
                 src="/images/twitterBtn.jpg"><br>
        </td>
    </tr>
    <tr>
        <td><img style="text-align: center; width: 49px; height: 54px;" alt="gb"
                 src="/images/googlebtn.jpg"><br>
        </td>
    </tr>
    <tr>
        <td><img style="width: 48px; height: 49px;" alt="ut"
                 src="/images/utubebtn.jpg"><br>
        </td>
    </tr>
    </tbody>
</table>