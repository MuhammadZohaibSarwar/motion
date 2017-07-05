/* Element level classes */
body
{
color: Black;
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
background-color: White;
margin: 8px;
}
td, th
{
color: Black;
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
}
img
{
border-width: 0px;
vertical-align: middle;
}
a
{
color: #000099;
text-decoration: none;
}
a:active
{
color: #FF6600;
text-decoration: none;
}
a:visited
{
color: #000099;
text-decoration: none;
}
a:hover
{
color: #FF6600;
}
input[type=text], input[type=password], input[type=file], select
{
background-color: White;
color: Black;
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
vertical-align: middle;
}
textarea
{
background-color: White;
color: Black;
font-size: 12px;
font-family: Lucida Console, Andale Mono, Courier New, Courier;
}
input[type=submit]
{
border: 1px dotted #808080;
background-color: #EEEEEE;
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
vertical-align: middle;
}
input
{
vertical-align: middle;
}
/* new styles */
#phorum-index
{
width: 100%;
border: 1px solid #808080;
border-bottom-width: 0px;
text-align: left;
}
#phorum-index th
{
border-bottom: 1px solid #808080;
background-color: #EEEEEE;
padding: 3px 0 3px 0;
}
#phorum-index td
{
font-family: "Bitstream Vera Sans", "Trebuchet MS", Verdana, Arial, sans-serif;
background-color: White;
padding: 3px 0 3px 0;
border-bottom: 1px solid #808080;
}
#phorum-index th.forum-name
{
font-family: "Bitstream Vera Sans", "Trebuchet MS", Verdana, Arial, sans-serif;
font-size: 16px;
padding: 3px 0 3px 3px;
}
#phorum-index th.forum-name a
{
color: Black;
}
#phorum-index th.forum-threads
{
width: 120px;
text-align: center;
vertical-align: middle;
}
#phorum-index th.forum-posts
{
width: 120px;
text-align: center;
vertical-align: middle;
}
#phorum-index th.forum-last-post
{
padding: 3px 15px 3px 3px;
vertical-align: middle;
}
#phorum-index td.forum-name
{
font-family: "Bitstream Vera Sans", "Trebuchet MS", Verdana, Arial, sans-serif;
font-size: 13px;
font-weight: bold;
padding: 5px 0 5px 15px;
}
#phorum-index td.forum-name p
{
font-size: 13px;
font-weight: normal;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
margin: 0 15px 0 0;
}
#phorum-index td.forum-name small
{
font-weight: normal;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
}
#phorum-index td.forum-threads
{
width: 120px;
text-align: center;
}
#phorum-index td.forum-posts
{
width: 120px;
text-align: center;
}
#phorum-index td.forum-last-post
{
width: 120px;
padding: 0 15px 0 0;
}
#phorum-menu-table
{
width: 100%;
border-width: 0px;
}
#phorum-menu
{
padding: 5px 3px 0 0;
vertical-align: top;
width: 200px;
}
#phorum-content
{
padding: 5px 0 0 2px;
vertical-align: top;
}
div.phorum-menu
{
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
background-color: White;
border: 1px solid #808080;
padding: 3px;
}
div.phorum-menu ul
{
font-weight: bold;
list-style: none;
padding: 0;
margin: 0 0 10px 0;
}
div.phorum-menu li
{
font-weight: bold;
font-family: Lucida Sans Unicode, Lucida Grande, Arial;
font-size: 12px;
padding: 0 0 0 15px;
margin-top:3px;
background-image: url('templates/classic/images/square_bullet.png');
background-repeat: no-repeat;
background-position: 1px 2px;
}
div.phorum-menu a
{
font-weight: normal;
color: #000000;
}
div.phorum-menu a:hover
{
color: #FF6600;
}
div.phorum-menu a.phorum-current-page
{
font-weight: bold;
}
#phorum-post-form ul
{
padding: 0 0 0 20px;
margin: 3px 0px 8px 0px;
font-size: 11px;
}
#phorum-post-form li
{
margin-bottom: 3px;
}
#phorum-attachment-list td
{
font-size: 11px;
}
/* Standard classes for use in any page */
/* PhorumDesignDiv - a div for keeping the forum-size size */
.PDDiv
{
width: 100%;
text-align: left;
}
/* new class for layouting the submit-buttons in IE too */
.PhorumSubmit {
border: 1px dotted #808080;
color: Black;
background-color: #EEEEEE;
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
vertical-align: middle;
}
.PhorumTitleText
{
float: right;
}
.PhorumStdBlock
{
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
background-color: White;
border: 1px solid #808080;
/* width: 100%; */
padding: 3px;
text-align: left;
}
.PhorumStdBlockHeader
{
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
background-color: #EEEEEE;
/* width: 100%; */
border-left: 1px solid #808080;
border-right: 1px solid #808080;
border-top: 1px solid #808080;
padding: 3px;
text-align: left;
}
.PhorumHeaderText
{
font-weight: bold;
}
.PhorumNavBlock
{
font-size: 12px;
font-family: Lucida Sans Unicode, Lucida Grande, Arial;
border: 1px solid #808080;
margin-top: 1px;
margin-bottom: 1px;
/* width: 100%; */
background-color: #EEEEEE;
padding: 2px 3px 2px 3px;
}
.PhorumNavHeading
{
font-weight: bold;
}
A.PhorumNavLink
{
color: #000000;
text-decoration: none;
font-weight: normal;
font-family: Lucida Sans Unicode, Lucida Grande, Arial;
font-size: 12px;
border-style: solid;
border-color: #EEEEEE;
border-width: 1px;
padding: 0px 4px 0px 4px;
}
.PhorumSelectedFolder
{
color: #000000;
text-decoration: none;
font-weight: normal;
font-family: Lucida Sans Unicode, Lucida Grande, Arial;
font-size: 12px;
border-style: solid;
border-color: #EEEEEE;
border-width: 1px;
padding: 0px 4px 0px 4px;
}
A.PhorumNavLink:hover
{
background-color: #FFFFFF;
font-weight: normal;
font-family: Lucida Sans Unicode, Lucida Grande, Arial;
font-size: 12px;
border-style: solid;
border-color: #808080;
border-width: 1px;
color: #FF6600;
}
.PhorumFloatingText
{
padding: 10px;
}
.PhorumHeadingLeft
{
padding-left: 3px;
font-weight: bold;
}
.PhorumUserError
{
padding: 10px;
text-align: center;
color: Red;
font-size: 16px;
font-family: "Bitstream Vera Sans", "Trebuchet MS", Verdana, Arial, sans-serif;
font-weight: bold;
}
.PhorumOkMsg
{
padding: 10px;
text-align: center;
color: DarkGreen;
font-size: 16px;
font-family: "Bitstream Vera Sans", "Trebuchet MS", Verdana, Arial, sans-serif;
font-weight: bold;
}
.PhorumNewFlag
{
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
font-size: 10px;
font-weight: bold;
color: #CC0000;
}
.PhorumNotificationArea
{
float: right;
border-style: dotted;
border-color: #808080;
border-width: 1px;
}
/* PSUEDO Table classes */
/* In addition to these, each file that uses them will have a */
/* column with a style property to set its right margin */
.PhorumColumnFloatXSmall
{
float: right;
width: 75px;
}
.PhorumColumnFloatSmall
{
float: right;
width: 100px;
}
.PhorumColumnFloatMedium
{
float: right;
width: 150px;
}
.PhorumColumnFloatLarge
{
float: right;
width: 200px;
}
.PhorumColumnFloatXLarge
{
float: right;
width: 400px;
}
.PhorumRowBlock
{
background-color: White;
border-bottom: 1px solid #F2F2F2;
padding: 5px 0px 0px 0px;
}
.PhorumRowBlockAlt
{
background-color: #EEEEEE;
border-bottom: 1px solid #F2F2F2;
padding: 5px 0px 0px 0px;
}
/************/
/* All that is left of the tables */
.PhorumStdTable
{
border-style: solid;
border-color: #808080;
border-width: 1px;
width: 100%;
}
.PhorumTableHeader
{
background-color: #EEEEEE;
border-bottom-style: solid;
border-bottom-color: #808080;
border-bottom-width: 1px;
color: #000000;
font-size: 12px;
font-family: Lucida Sans Unicode, Lucida Grande, Arial;
font-weight: bold;
padding: 3px;
}
.PhorumTableRow
{
background-color: White;
border-bottom-style: solid;
border-bottom-color: #F2F2F2;
border-bottom-width: 1px;
color: Black;
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
height: 35px;
padding: 3px;
vertical-align: middle;
}
.PhorumTableRowAlt
{
background-color: #EEEEEE;
border-bottom-style: solid;
border-bottom-color: #F2F2F2;
border-bottom-width: 1px;
color: #000000;
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
height: 35px;
padding: 3px;
vertical-align: middle;
}
table.PhorumFormTable td
{
height: 26px;
}
/**********************/
/* Read Page specifics */
.PhorumReadMessageBlock
{
margin-bottom: 5px;
}
.PhorumReadBodySubject
{
color: Black;
font-size: 16px;
font-family: "Bitstream Vera Sans", "Trebuchet MS", Verdana, Arial, sans-serif;
font-weight: bold;
padding-left: 3px;
}
.PhorumReadBodyHead
{
padding-left: 5px;
}
.PhorumReadBodyText
{
font-size: 12px;
font-family: "Bitstream Vera Sans", "Lucida Sans Unicode", "Lucida Grande", Arial;
padding: 5px;
}
.PhorumReadNavBlock
{
font-size: 12px;
font-family: Lucida Sans Unicode, Lucida Grande, Arial;
border-left: 1px solid #808080;
border-right: 1px solid #808080;
border-bottom: 1px solid #808080;
/* width: 100%; */
background-color: #EEEEEE;
padding: 2px 3px 2px 3px;
}
/********************/
/* List page specifics */
.PhorumListSubText
{
color: #707070;
font-size: 10px;
font-family: "Bitstream Vera Sans", Arial, sans-serif;
}
.PhorumListPageLink
{
color: #707070;
font-size: 10px;
font-family: "Bitstream Vera Sans", Arial, sans-serif;
}
.PhorumListSubjPrefix
{
font-weight: bold;
}
/********************/
/* Posting editor specifics */
.PhorumListModLink, .PhorumListModLink a
{
color: #707070;
font-size: 10px;
font-family: "Bitstream Vera Sans", Arial, sans-serif;
}
.PhorumAttachmentRow {
border-bottom: 1px solid #EEEEEE;
padding: 3px 0px 3px 0px;
}
/********************/
/* PM specifics */
.phorum-recipientblock
{
border: 1px solid black;
position:relative;
float:left;
padding: 1px 1px 1px 5px;
margin: 0px 5px 5px 0px;
font-size: 11px;
background-color: White;
border: 1px solid #808080;
white-space: nowrap;
}
.phorum-pmuserselection
{
padding-bottom: 5px;
}
.phorum-gaugetable {
border-collapse: collapse;
}
.phorum-gauge {
border: 1px solid #808080;
background-color: #EEEEEE;
}
.phorum-gaugeprefix {
border: none;
background-color: white;
padding-right: 10px;
}
/********************/
/* Override classes - Must stay at the end */
.PhorumNarrowBlock
{
width: 600px;
}
.PhorumSmallFont
{
font-size: 11px;
}
.PhorumLargeFont
{
color: Black;
font-size: 16px;
font-family: "Bitstream Vera Sans", "Trebuchet MS", Verdana, Arial, sans-serif;
font-weight: bold;
}
.PhorumFooterPlug
{
margin-top: 10px;
font-size: 10px;
font-family: "Bitstream Vera Sans", Arial, sans-serif;
}
/* BBCode styles */
blockquote.bbcode
{
font-size: 11px;
margin: 0 0 0 10px;
}
blockquote.bbcode>div
{
margin: 0;
padding: 5px;
border: 1px solid #808080;
overflow: hidden;
}
blockquote.bbcode strong
{
font-style: italic;
margin: 0 0 3px 0;
}
/* Added by module "smileys", file "mods/smileys/smileys.css" */
.mod_smileys_img {
vertical-align: middle;
margin: 0px 3px 0px 3px;
border: none;
}
/* Added by module "spamhurdles", template "spamhurdles::css" */
#spamhurdles_captcha {
font-size: small;
padding: 10px 0px 10px 0px;
}
#spamhurdles_captcha_title {
font-weight: bold;
}
#spamhurdles_captcha_explain {
width: 85%;
}
#spamhurdles_spoken_captcha {
padding-left: 15px;
background: url(http://forum.wampserver.com/mods/spamhurdles/templates/wamp_en/audio.gif) no-repeat;
padding-bottom: 10px;
font-size: small;
}
#spamhurdles_captcha_image {
margin: 8px 0px 8px 0px;
}
#spamhurdles_captcha_image .captcha_image {
border: 1px solid #333;
}
#spamhurdles_captcha_asciiart {
font-family: "courier new", courier, monospace;
line-height: 4px;
font-size: 6px;
font-weight: bold;
color: black;
}
/* Added by module "bbcode", file "mods/bbcode/colorpicker/js_color_picker_v2.css" */
#dhtmlgoodies_colorPicker{
position:absolute;
width:250px;
padding-bottom:1px;
background-color:#FFF;
border:1px solid #777;

width: 252px; /* IE 5.x */
width/* */:/**/250px; /* Other browsers */
width: /**/250px; 

z-index: 1000;
}

#dhtmlgoodies_colorPicker .colorPicker_topRow{
padding-bottom:1px;
border-bottom:3px double #777;
background-color:#E2EBED;
padding-left:2px;

width: 250px; /* IE 5.x */
width/* */:/**/248px; /* Other browsers */
width: /**/248px; 

height: 20px; /* IE 5.x */
height/* */:/**/16px; /* Other browsers */
height: /**/16px; 

}

#dhtmlgoodies_colorPicker .colorPicker_statusBar{
height:13px;
padding-bottom:2px;
width:248px;
border-top:3px double #777; 
background-color:#E2EBED;
padding-left:2px;
clear:both;

width: 250px; /* IE 5.x */
width/* */:/**/248px; /* Other browsers */
width: /**/248px; 

height: 18px; /* IE 5.x */
height/* */:/**/13px; /* Other browsers */
height: /**/13px; 

}

#dhtmlgoodies_colorPicker .colorSquare{
margin-left:1px;
margin-bottom:1px;
float:left;
border:1px solid #000;
cursor:pointer;

width: 12px; /* IE 5.x */
width/* */:/**/10px; /* Other browsers */
width: /**/10px; 

height: 12px; /* IE 5.x */
height/* */:/**/10px; /* Other browsers */
height: /**/10px; 

}

.colorPickerTab_inactive,.colorPickerTab_active{

height:17px;
padding-left:4px;
cursor:pointer; 


}
/* path fixed for Phorum */
.colorPickerTab_inactive span{
background-image:url(mods/bbcode/colorpicker/images/tab_left_inactive.gif);
}

/* path fixed for Phorum */
.colorPickerTab_active span{
background-image:url(mods/bbcode/colorpicker/images/tab_left_active.gif);

}
.colorPickerTab_inactive span, .colorPickerTab_active span{
line-height:16px;
font-weight:bold;
font-family:arial;
font-size:11px;
padding-top:1px;
vertical-align:middle;
background-position:top left;
background-repeat: no-repeat; 
float:left;
padding-left:6px;
-moz-user-select:none;
} 
.colorPickerTab_inactive img,.colorPickerTab_active img{
float:left;
}
.colorPickerCloseButton{
width:11px;
height:11px;
text-align:center;
line-height:10px;
border:1px solid #777;
position:absolute;
right:1px;
font-size:12px;
font-weight:bold;
top:1px;
padding:1px;
cursor:pointer; 

width: 15px; /* IE 5.x */
width/* */:/**/11px; /* Other browsers */
width: /**/11px;

height: 15px; /* IE 5.x */
height/* */:/**/11px; /* Other browsers */
height: /**/11px;


}
#colorPicker_statusBarTxt{
font-size:11px;
font-family:arial;
vertical-align:top;
line-height:13px;

}

/* disabled for Phorum
form{
padding-left:5px;
}
*/

.form_widget_amount_slider{
border-top:1px solid #9d9c99;
border-left:1px solid #9d9c99;
border-bottom:1px solid #eee;
border-right:1px solid #eee;
background-color:#f0ede0;
position:absolute;
bottom:0px;

width: 5px; /* IE 5.x */
width/* */:/**/3px; /* Other browsers */
width: /**/3px;

height: 5px; /* IE 5.x */
height/* */:/**/3px; /* Other browsers */
height: /**/3px;

}
.colorSliderLabel{
width:15px;
height:20px;
float:left;
font-size:11px;
font-weight:bold;
}
.colorSlider{
width:175px;
height:20px;
float:left;
}
.colorInput{
width:45px;
height:20px;
float:left;
} 
.colorPreviewDiv{
width:186px;
margin-right:2px;
margin-top:1px;
border:1px solid #CCC;
height:20px;
float:left;
cursor:pointer;

width: 188px; /* IE 5.x */
width/* */:/**/186px; /* Other browsers */
width: /**/186px;

height: 22px; /* IE 5.x */
height/* */:/**/20px; /* Other browsers */
height: /**/20px;


}
.colorCodeDiv{
width:50px;
height:20px;
float:left;
}