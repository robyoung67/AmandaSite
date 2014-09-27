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
            style="vertical-align: middle; height: 100%; width: 33%; text-align: center;"><a href="http://yankee-kitchen-ninja.com/phpbb"><img
                style="width: 200px; height: 196px;" alt="we" src="/images/forumbtn.jpg"></a></td>
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
