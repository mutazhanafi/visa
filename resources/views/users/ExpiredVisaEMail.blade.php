@component('mail::message')
<center>
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
<tr>
<td align="center" valign="top" id="bodyCell">
<!-- BEGIN TEMPLATE // -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" valign="top" id="templatePreheader">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
<tr>
<td align="center" valign="top" width="600" style="width:600px;">
<![endif]-->
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
<tr>
<td valign="top" class="preheaderContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
<tbody class="mcnImageBlockOuter">
<tr>
<td valign="top" style="padding:9px" class="mcnImageBlockInner">
<table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
<tbody><tr>
<td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">


<img align="center" alt="" src="https://mcusercontent.com/5cbded5cc093c36829bcf99f4/images/f9eed654-1c98-404e-b754-c049f9e18e33.jpg" width="564" style="max-width: 4168px; padding-bottom: 0px; vertical-align: bottom; display: inline !important; border-radius: 0%;" class="mcnImage">


</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>
</table></td>
</tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
<tr>
<td align="center" valign="top" id="templateHeader">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
<tr>
<td align="center" valign="top" width="600" style="width:600px;">
<![endif]-->
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
<tr>
<td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnBoxedTextBlock" style="min-width:100%;">
<!--[if gte mso 9]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
<![endif]-->
<tbody class="mcnBoxedTextBlockOuter">
<tr>
<td valign="top" class="mcnBoxedTextBlockInner">

<!--[if gte mso 9]>
<td align="center" valign="top" ">
<![endif]-->
<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnBoxedTextContentContainer">
<tbody><tr>

<td style="padding-top:9px; padding-left:18px; padding-bottom:9px; padding-right:18px;">

<table border="0" cellspacing="0" class="mcnTextContentContainer" width="100%" style="min-width: 100% !important;background-color: #FAF9E8;">
<tbody><tr>
<td valign="top" class="mcnTextContent" style="padding: 18px;color: #E9907A;font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;font-size: 14px;font-style: normal;font-weight: normal;text-align: center;">
<h1 class="mc-toc-title" style="text-align: center;"><span style="font-size:20px"><span style="color:#545454"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">Merhaba!</span></span></span></h1>
&nbsp;

<h3 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">your visa has been expired</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->invoice_number }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->invoice_name }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->invoice_Date }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->product }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->Due_date }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->section_id }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->Amount_collection }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->Discount }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->Value_VAT }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->Rate_VAT }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->Total }}</span></span></span></h3>
<h5 class="null" style="text-align: center;"><span style="color:#545454"><span style="font-size:16px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif">{{ $visaDetails->Status  }}</span></span></span></h3>

<h3 class="null" style="text-align: center;">&nbsp;</h3>
&nbsp;

<div style="text-align: center;"><br>
<span style="color:#545454">your visa has been expired<br>
Sevgiler, Petner</span></div>

</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<!--[if gte mso 9]>
</td>
<![endif]-->

<!--[if gte mso 9]>
</tr>
</table>
<![endif]-->
</td>
</tr>
</tbody>
</table></td>
</tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
<tr>
<td align="center" valign="top" id="templateBody">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
<tr>
<td align="center" valign="top" width="600" style="width:600px;">
<![endif]-->
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
<tr>
<td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
<tbody class="mcnButtonBlockOuter">
<tr>
<td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
<table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 4px;background-color: #E9907A;">
<tbody>
<tr>
<td align="center" valign="middle" class="mcnButtonContent" style="font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; padding: 18px;">
<a class="mcnButton " title="E-posta Adresini Doğrulayın"  target="_blank" style="font-weight: normal;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FAF9E8;">E-posta Adresini Doğrulayın</a>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
<tbody class="mcnDividerBlockOuter">
<tr>
<td class="mcnDividerBlockInner" style="min-width: 100%; padding: 6px 18px 18px;">
<table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #FAF9E8;">
<tbody><tr>
<td>
<span></span>
</td>
</tr>
</tbody></table>
<!--
<td class="mcnDividerBlockInner" style="padding: 18px;">
<hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
</td>
</tr>
</tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
<tbody class="mcnTextBlockOuter">
<tr>
<td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
<!--[if mso]>
<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
<tr>
<![endif]-->

<!--[if mso]>
<td valign="top" width="600" style="width:600px;">
<![endif]-->
<table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
<tbody><tr>

<td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

<div style="text-align: center;"><span style="font-size:12px"><span style="font-family:source sans pro,helvetica neue,helvetica,arial,sans-serif"><span style="color:#545454">Linki açmakta sorun yaşıyorsanız, aşağıdaki URL'yi kopyalayıp tarayıcınıza yapıştırınız.</span><br>
<!-- <span style="color:#0000FF">{{ $visaDetails }}</span></span></span></div> -->

</td>
</tr>
</tbody></table>
<!--[if mso]>
</td>
<![endif]-->

<!--[if mso]>
</tr>
</table>
<![endif]-->
</td>
</tr>
</tbody>
</table></td>
</tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
<tr>
<td align="center" valign="top" id="templateFooter">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
<tr>
<td align="center" valign="top" width="600" style="width:600px;">
<![endif]-->
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
<tr>
<td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
<tbody class="mcnFollowBlockOuter">
<tr>
<td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
<tbody><tr>
<td align="center" style="padding-left:9px;padding-right:9px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;background-color: #FAF9E8;" class="mcnFollowContent">
<tbody><tr>
<td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td align="center" valign="top">
<!--[if mso]>
<table align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<![endif]-->

<!--[if mso]>
<td align="center" valign="top">
<![endif]-->


<table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
<tbody><tr>
<td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
<tbody><tr>
<td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
<table align="left" border="0" cellpadding="0" cellspacing="0" width="">
<tbody><tr>

<td align="center" valign="middle" width="24" class="mcnFollowIconContent">
<a href="http://www.twitter.com/AppPetner" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/color-twitter-48.png" alt="Twitter" style="display:block;" height="24" width="24" class=""></a>
</td>


</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

<!--[if mso]>
</td>
<![endif]-->

<!--[if mso]>
<td align="center" valign="top">
<![endif]-->


<table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
<tbody><tr>
<td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
<tbody><tr>
<td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
<table align="left" border="0" cellpadding="0" cellspacing="0" width="">
<tbody><tr>

<td align="center" valign="middle" width="24" class="mcnFollowIconContent">
<a href="http://instagram.com/petner.app" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/color-instagram-48.png" alt="Instagram" style="display:block;" height="24" width="24" class=""></a>
</td>


</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

<!--[if mso]>
</td>
<![endif]-->

<!--[if mso]>
</tr>
</table>
<![endif]-->
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
</tr>
</tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
<tbody class="mcnTextBlockOuter">
<tr>
<td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
<!--[if mso]>
<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
<tr>
<![endif]-->

<!--[if mso]>
<td valign="top" width="600" style="width:600px;">
<![endif]-->
<table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
<tbody><tr>

<td valign="top" class="mcnTextContent" style="padding: 0px 18px 9px;color: #E9907A;font-size: 10px;font-style: normal;font-weight: bold;line-height: 100%;text-align: center;">

<strong><span style="color:#545454"><span style="font-size:14px">petner.net</span></span></strong>
</td>
</tr>
</tbody></table>
<!--[if mso]>
</td>
<![endif]-->

<!--[if mso]>
</tr>
</table>
<![endif]-->
</td>
</tr>
</tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
<tbody class="mcnTextBlockOuter">
<tr>
<td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
<!--[if mso]>
<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
<tr>
<![endif]-->

<!--[if mso]>
<td valign="top" width="600" style="width:600px;">
<![endif]-->
<table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
<tbody><tr>

<td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

<em>Copyright © 2020 <a href="http://mgssoftware.net" target="_blank">Mgs Software</a> All rights reserved.</em>
</td>
</tr>
</tbody></table>
<!--[if mso]>
</td>
<![endif]-->

<!--[if mso]>
</tr>
</table>
<![endif]-->
</td>
</tr>
</tbody>
</table></td>
</tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
</table>
<!-- // END TEMPLATE -->
</td>
</tr>
</table>
</center>
@endcomponent