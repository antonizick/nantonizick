<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cyphertek Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link href="simpler.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="chrometheme/chromestyle.css" />
<script type="text/javascript" src="chromejs/chrome.js"></script>

<script language="JavaScript1.1">

var slidespeed=3000
//specify images
var slideimages=new Array("i/photo1.jpg","i/photo2.jpg","i/photo3.jpg","i/photo4.jpg","i/photo5.jpg")
//specify corresponding links
var slidelinks=new Array()

var imageholder=new Array()
var ie55=window.createPopup
for (i=0;i<slideimages.length;i++){
imageholder[i]=new Image()
imageholder[i].src=slideimages[i]
}

function gotoshow(){
window.location=slidelinks[whichlink]
}

//-->
</script>


</head>
<body>



<div id="wrap">
	<div id="head">
		<h1 class="title"><font size="5px">Cyphertek.com</font></h1><div style="position:relative" style="top:-70px" style="left:400px"><img src="i/photo1.jpg" name="slide" border=0 style="filter:progid:DXImageTransform.Microsoft.Pixelate(MaxSquare=15,Duration=1)"></div>
        <div style="position:relative" style="top:-184px" style="left:460px" style="z-index:800">
        <?
$tm=time();
//$today=getdate(mktime(0,0,0,2,14,2008));
// Use the above line and comment below line for changing the days and test the script. 

srand ((double) microtime( )*1000000);
$random_number = rand(0,6);


switch($random_number)
{

case 0:
echo "<img src=\"i/g1.gif\">";
break;

case 1:
echo "<img src=\"i/g7.gif\">";
break;

case 2:
echo "<img src=\"i/g3.gif\">";
break;

case 3:
echo "<img src=\"i/g4.gif\">";
break;

case 4:
echo "<img src=\"i/g5.gif\">";
break;

case 5:
echo "<img src=\"i/g6.gif\">";
break;

case 6:
echo "<img src=\"i/g7.gif\">";
break;

default:
echo "<img src=\"i/g1.gif\">";

}

?>
</div>
	</div>
	<div id="main">
    
<div class="chromestyle" id="chromemenu" style="width:739px" align="center" style="position:relative" style="left:8px">
<ul>
<li><a href="#" rel="dropmenu1">Personal</a></li>
<li><a href="#" rel="dropmenu2">Reading</a></li>
<li><a href="#" rel="dropmenu3">Programing</a></li>
<li><a href="#" rel="dropmenu4">Shopping</a></li>
<li><a href="#" rel="dropmenu5">Download</a></li>
<li><a href="http://news.google.com/">News</a></li>		
</ul>
</div>

<!--1st drop down menu -->                                                   
<div id="dropmenu1" class="dropmenudiv">
<a href="http://www.Antonizick.com/">Antonizick.com</a>
<a href="http://cp.serversys852.com:8080/">admin</a>
<a href="http://webmail.serversys852.com/">eMail</a>
<a href="https://gmail.google.com/">gMail</a>
<a href="http://webmail.west.cox.net/">cMail</a>
<a href="http://69.73.160.200:2095/">XMail</a>
<a href="http://69.73.160.200:2086/">XPnl Admin</a>
<a href="http://69.73.160.200:2082/">XPnl</a>
<a href="http://192.168.1.1/">Router</a>
<a href="http://www.joanasworld.com/members/">Joanas</a>
</div>

<!--2nd drop down menu -->                                                
<div id="dropmenu2" class="dropmenudiv" style="width: 150px;">
<a href="http://www.grc.com/securitynow.htm">Security Now</a>
<a href="http://www.2600.com">2600</a>
<a href="http://www.wired.com">Wired</a>
<a href="http://www.eff.org/">EFF</a>
<a href="http://www.tvguide.com/myprofile/setup/login.asp?referrerid=0&returnurl=%2Flistings%2Findex%2Easp%3F&regMode=0">TV Guide</a>
<a href="http://www.imdb.com/">IMDB</a>
<a href="http://xtremeradio.com/pages/697986.php">Extreme 107.5</a>
<a href="http://www.mix941.fm/pages/808862.php">MIX 94.1</a>
<a href="http://www.dictionary.com/">Dictionary</a>
</div>

<!--3rd drop down menu -->                                                   
<div id="dropmenu3" class="dropmenudiv" style="width: 150px;">
<a href="http://www.flashkit.com/index.shtml">Flashkit</a>
<a href="http://dynamicdrive.com">Dynamic Drive</a>
<a href="http://psworkshop.net/psworkshop/">Photoshop</a>
<a href="http://www.aqa-d.se/ny/pstips/fwf_all.htm">Photoshop +</a>
<a href="http://promos.mcafee.com/speedometer/test_0600.asp">Speed Test</a>
<a href="http://support.microsoft.com/default.aspx?scid=fh;EN-US;DOWNLOADOVER">Microsoft</a>
</div>

<div id="dropmenu4" class="dropmenudiv" style="width: 150px;">
<a href="http://www.amazon.com/">Amazon</a>
<a href="http://www.ebay.com/">eBay</a>
<a href="http://www.Pricewatch.com/">Pricewatch</a>
<a href="http://www.crucial.com/">Crucial</a>
<a href="http://www.mysimon.com/">My Simon</a>
<a href="http://www.bestwebbuys.com/books/">Bestbookbuys</a>
</div>

<div id="dropmenu5" class="dropmenudiv" style="width: 150px;">
<a href="http://www.download.com/">Download.com</a>
<a href="http://www.5star-shareware.com/">FiveStar</a>
<a href="http://www.majorgeeks.com/">Major Geeks</a>
</div>

<script type="text/javascript">cssdropdown.startchrome("chromemenu")</script>
 
      <div id="splash">
        <h2 class="subtitle">Antonizick's Portal</h2>
        
        <script language="JavaScript1.1">
<!--
var whichlink=0
var whichimage=0
var pixeldelay=(ie55)? document.images.slide.filters[0].duration*1000 : 0
function slideit(){
if (!document.images) return
if (ie55) document.images.slide.filters[0].apply()
document.images.slide.src=imageholder[whichimage].src
if (ie55) document.images.slide.filters[0].play()
whichlink=whichimage
whichimage=(whichimage<slideimages.length-1)? whichimage+1 : 0
setTimeout("slideit()",slidespeed+pixeldelay)
}
slideit()

//-->
</script>
        
        
      </div> 
	  <div id="content">
 
   <div class="box3" id="nxcon">
   <form action="http://www.google.com/search" target="_top" name=f>

<input type=hidden name=oe value="UTF-8"><input type=hidden name=ie value="UTF-8"><input type=hidden name=hl value=en>

<table border="0" width="100%">

  <tr>

    <td width="48%" rowspan="2">

<p align="center"><a href="http://www.google.com">

<IMG src="i/giroux1.gif" 

border="0" ALT="Google" align="middle" width="143" height="59"></a>
  <input maxlength=256 size=20 name=q value="" />
</p>    </td>

    <td width="52%" colspan="2"><input type=submit value="Google Search" name=btnG /></td>
  </tr>
  <tr>
    <td><input type=submit value="I'm Feeling Lucky" name=btnI /></td>
    <td><div align="center"><table border="0"><tr><td><a href="http://members.easynews.com/"><img src="i/homeicon.jpg" alt="" width="31" height="31" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://members.easynews.com/zipmanager.html"><img src="i/zip.jpg" border="0" alt="" width="31" height="31" /></a></td>
    </tr></table></div></td>
  </tr>

  <tr>
</td>
  </tr>
</table>

</form>
          <form action="http://members.easynews.com/global4/search.html" method="get" name="global" onSubmit="return check_submit(this)">
        <table>
          <tr>
            <td valign="top"><table>
                <tr>
                  <td width="71">Keywords: </td>
                  <td width="418"><input tabindex="1" size="50" type="text" title="Regex Keywords field search input" name="gps" value=""></td>
                </tr>
                <tr>
                  <td>Subject: </td>
                  <td><input tabindex="2" type="text" size="50" title="Regex Subject field search input" name="sbj" value=""></td>
                </tr>
                <tr>
                  <td>Poster: </td>
                  <td><input tabindex="3" type="text" size="50" title="Regex Poster field search input" name="from" value=""></td>
                </tr>
                <tr>
                  <td>Newsgroups: </td>
                  <td><input tabindex="4" type="text" size="50" title="Regex Newsgroups field search input" name="ns" value="alt.binaries"></td>
                </tr>
                <tr>
                  <td valign="middle">Filename: &nbsp;</td>
                  <td nowrap><input tabindex="5" type="text" title="Regex Filename field search input" name="fil" size="20%" value="">
                    &nbsp;File Ext:  &nbsp;
                    <input tabindex="6" type="text" title="Regex File Ext field search input" name="fex" size="20%" value=""></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">VCodec: &nbsp;</td>
                  <td nowrap><input tabindex="7" type="text" title="Regex VCodec field search input" name="vc" size="20%" value="">
                    &nbsp;ACodec:  &nbsp;
                    <input tabindex="8" type="text" title="Regex ACodec field search input" name="ac" size="20%" value=""></td>
                </tr>
                <tr>
                  <td>Type:</td>
                  <td><span style="white-space:nowrap">
                    <input tabindex="9" class="checkbox" type="checkbox" id="chxidARCHIVE" name="fty[]" value="ARCHIVE" >
                    <label for="chxidARCHIVE" title="rar|r[0-9]{2,3}|zip|ace|bz2|c[0-9]{2,3}|cab|cbz|cbr|gz|kar|s[0-9]{2,3}|sit|t[0-9]{2,3}|tar|tgz|z|z[0-9]{2,3}|[0-9][0-9][0-9]">ARCHIVE</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="10" class="checkbox" type="checkbox" id="chxidAUDIO" name="fty[]" value="AUDIO" >
                    <label for="chxidAUDIO" title="mp3|m3u|ogg|ape|wav|wma|flac|mid|aif|m4a|it|lqt|mma|mod|ram|s3m|xm">AUDIO</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="11" class="checkbox" type="checkbox" id="chxidDOCUMENT" name="fty[]" value="DOCUMENT" >
                    <label for="chxidDOCUMENT" title="nzb|txt|pdf|nfo|doc|asc|rtf|xls">DOCUMENT</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="12" class="checkbox" type="checkbox" id="chxidMOVIE" name="fty[]" value="MOVIE" >
                    <label for="chxidMOVIE" title="mpg|mpeg|avi|wmv|mp4|ogm|\.ts|asf|vob|asx|mov|mkv|ram|rmvb|001|\.qt|\.rm|swf|m2v|divx">MOVIE</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="13" class="checkbox" type="checkbox" id="chxidEXECUTABLE" name="fty[]" value="EXECUTABLE" >
                    <label for="chxidEXECUTABLE" title="exe|bat|com|asp|dll|chm|vb">EXECUTABLE</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="14" class="checkbox" type="checkbox" id="chxidIMAGE" name="fty[]" value="IMAGE" >
                    <label for="chxidIMAGE" title="jpg|jpeg|png|gif|bmp|tga">IMAGE</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="15" class="checkbox" type="checkbox" id="chxidMISC" name="fty[]" value="MISC" >
                    <label for="chxidMISC" title="crc|cue|dat|nes|pgp|smc|ttf">MISC</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="16" class="checkbox" type="checkbox" id="chxidPARITY" name="fty[]" value="PARITY" >
                    <label for="chxidPARITY" title="par2|p[0-9]{2,3}|par|sfv|md5">PARITY</label>
                    </span> &nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">Sort: <span style="white-space:nowrap">1st:
                    <select name="s1" tabindex="17" >
                      <option  value="nrfile">Filename</option>
                      <option  value="next">Extension</option>
                      <option  value="dsize">Size</option>
                      <option  value="xtime">Expire</option>
                      <option selected value="dtime">Date & Time</option>
                      <option  value="nsubject">Subject</option>
                      <option  value="nfrom">From</option>
                      <option  value="sgroup">Group</option>
                      <option  value="head">Header</option>
                      <option  value="thmparnzb">TPN</option>
                      <option  value="set">Set</option>
                      <option  value="svcodec">Video Codec</option>
                      <option  value="sacodec">Audio Codec</option>
                      <option  value="dpixels">Image Size</option>
                      <option  value="druntime">A/V Length</option>
                      <option  value="dbps">Bitrate</option>
                      <option  value="dhz">Sample rate</option>
                      <option  value="dfps">Frames per sec</option>
                      <option  value="otime">Day</option>
                    </select>
                    <select name="s1d" tabindex="18" >
                      <option  value="+">Asc</option>
                      <option selected value="-">Desc</option>
                    </select>
                    &nbsp; </span> <span style="white-space:nowrap">2nd:
                    <select name="s2" tabindex="19" >
                      <option selected value="nrfile">Filename</option>
                      <option  value="next">Extension</option>
                      <option  value="dsize">Size</option>
                      <option  value="xtime">Expire</option>
                      <option  value="dtime">Date & Time</option>
                      <option  value="nsubject">Subject</option>
                      <option  value="nfrom">From</option>
                      <option  value="sgroup">Group</option>
                      <option  value="head">Header</option>
                      <option  value="thmparnzb">TPN</option>
                      <option  value="set">Set</option>
                      <option  value="svcodec">Video Codec</option>
                      <option  value="sacodec">Audio Codec</option>
                      <option  value="dpixels">Image Size</option>
                      <option  value="druntime">A/V Length</option>
                      <option  value="dbps">Bitrate</option>
                      <option  value="dhz">Sample rate</option>
                      <option  value="dfps">Frames per sec</option>
                      <option  value="otime">Day</option>
                    </select>
                    <select name="s2d" tabindex="20" >
                      <option selected value="+">Asc</option>
                      <option  value="-">Desc</option>
                    </select>
                    &nbsp; </span> <span style="white-space:nowrap">3rd:
                    <select name="s3" tabindex="21" >
                      <option  value="nrfile">Filename</option>
                      <option  value="next">Extension</option>
                      <option selected value="dsize">Size</option>
                      <option  value="xtime">Expire</option>
                      <option  value="dtime">Date & Time</option>
                      <option  value="nsubject">Subject</option>
                      <option  value="nfrom">From</option>
                      <option  value="sgroup">Group</option>
                      <option  value="head">Header</option>
                      <option  value="thmparnzb">TPN</option>
                      <option  value="set">Set</option>
                      <option  value="svcodec">Video Codec</option>
                      <option  value="sacodec">Audio Codec</option>
                      <option  value="dpixels">Image Size</option>
                      <option  value="druntime">A/V Length</option>
                      <option  value="dbps">Bitrate</option>
                      <option  value="dhz">Sample rate</option>
                      <option  value="dfps">Frames per sec</option>
                      <option  value="otime">Day</option>
                    </select>
                    <select name="s3d" tabindex="22" >
                      <option selected value="+">Asc</option>
                      <option  value="-">Desc</option>
                    </select>
                    </span></td>
                </tr>
                <tr>
                  <td colspan="2" align="center" >Results per Page:
                    <input type="text" tabindex="23" name="pby" value="500" title="Number of results per page input" size="5%">
                    &nbsp;Result Page #:
                    <input type="text" tabindex="24" name="pno" value="1" title="Specific page of results input" size="5%">
                    &nbsp;Output Style:
                    <select name="sS" tabindex="25" >
                      <option value="0" selected>Standard</option>
                      <option value="1">Thumbnails</option>
                      <option value="2">Hybrid 1</option>
                      <option value="3">Hybrid 2</option>
                      <option value="4">Img Viewer</option>
                      <option value="5">RSS</option>
                    </select>
                    <input type="hidden" name="grpF[]" multiple title="Hold CTRL on your keyboard to select or deselect multiple groups" size="5" />
                    &nbsp;&nbsp;</td>
                </tr>
            </table></td>
            <td valign="top"><table>
                <tr>
                  <td valign="top"><span style="white-space:nowrap;">
                    <input class="checkbox" tabindex="27" type="checkbox" title="Only Display Unique Results"  name="u" value="1" id="chxu">
                    <label for="chxu" title="Only Display Unique Results">Remove Duplicates</label>
                    </span><br>
                    <span style="white-space:nowrap;">
                    <input class="checkbox" tabindex="28" type="checkbox" title="Show thumbnails in a tooltip"  name="hthm" value="1" id="chxhthm">
                    <label for="chxhthm" title="Show thumbnails in a tooltip">Hover Thumbnails</label>
                    </span><br>
                    <span style="white-space:nowrap;">
                    <input class="checkbox" tabindex="29" type="checkbox" title="Show post information in a tooltip"  name="hInfo" value="1" id="chxhInfo">
                    <label for="chxhInfo" title="Show post information in a tooltip">Hover Information</label>
                    </span><br>
                    <span style="white-space:nowrap;">
                    <input class="checkbox" tabindex="30" type="checkbox" title="Reduced page layout, less html"  name="plain" value="1" id="chxplain">
                    <label for="chxplain" title="Reduced page layout, less html">Light Output</label>
                    </span><br>
                    <span style="white-space:nowrap;">
                    <input class="checkbox" tabindex="31" type="checkbox" title="Set Current options as default"  name="setDefs" value="1" id="chxsetDefs">
                    <label for="chxsetDefs" title="Set Current options as default">Set as Default</label>
                    </span><br>
                    <span style="white-space:nowrap;">
                    <input class="checkbox" tabindex="32" type="checkbox" title="Reduce results to one file from the set"  name="sc" value="1" id="chxsc">
                    <label for="chxsc" title="Reduce results to one file from the set">Collapse Sets</label>
                    </span><br>
                    <span style="white-space:nowrap;">
                    <input class="checkbox" tabindex="33" type="checkbox" title="Only show valid thumbnails in a thumbnail view, No DRM or un-thumbnailable shown"  name="vv" value="1" id="chxvv">
                    <label for="chxvv" title="Only show valid thumbnails in a thumbnail view, No DRM or un-thumbnailable shown">Only show valid thumbnails</label>
                    </span><br>
                    <span style="white-space:nowrap;">
                    <input class="checkbox" tabindex="34" type="checkbox" title="Save as a daily search"  name="svS" value="1" id="chxsvS">
                    <label for="chxsvS" title="Save as a daily search">Save Search</label>
                    </span><br>
                    <span style="white-space:nowrap;">Save Label:
                    <input type="text" size="5%" maxlength="50" name="svL" title="Label for saved Search" value="">
                    </span><br>
                  </td>
                </tr>
              </table></td>
            <td valign="top"><table>
                <tr>
                  <td nowrap><span style="white-space:nowrap">
                    <input tabindex="35" type="hidden" size="20%" name="d1" title="Lower Date & Time input" value="">
                    <input type="hidden" tabindex="36" name="d1t">

                    <input tabindex="37" type="hidden" size="20%" name="d2" title="Upper Date & Time input" value="">
                    <input type="hidden"tabindex="38" name="d2t">
                  </span></td>
                </tr>
                <tr>
                  <td nowrap><span style="white-space:nowrap">
                    <input tabindex="39" type="hidden" size="20%" name="b1" title="Lower Size input" value="">
                    <input type="hidden" tabindex="40" name="b1t">
                      
                    <input tabindex="41" type="hidden" size="20%" name="b2" title="Upper Size input" value="">
                    <input type="hidden" tabindex="42" name="b2t">                      </td>
                </tr>
                <tr>
                  <td nowrap><span style="white-space:nowrap">
                    <input tabindex="43" type="hidden" size="20%" name="px1" title="Lower Pixels input" value="">
                    <input type="hidden" tabindex="44" name="px1t">
                    <input tabindex="45" type="hidden" size="20%" name="px2" title="Upper Pixels input" value="">
                    <input type="hidden" tabindex="46" name="px2t">
                    </span></td>
                </tr>
                <tr>
                  <td nowrap><span style="white-space:nowrap">
                    <input tabindex="47" type="hidden" size="20%" name="fps1" title="Lower FPS input" value="">
                    <input type="hidden" tabindex="48" name="fps1t">
                    <input tabindex="49" type="hidden" size="20%" name="fps2" title="Upper FPS input" value="">
                    <input type="hidden" tabindex="50" name="fps2t">
                    </span></td>
                </tr>
                <tr>
                  <td nowrap><span style="white-space:nowrap">
                    <input tabindex="51" type="hidden" size="20%" name="bps1" title="Lower BPS input" value="">
                    <input type="hidden" tabindex="52" name="bps1t">

                    </span><span style="white-space:nowrap">
                    <input tabindex="53" type="hidden" size="20%" name="bps2" title="Upper BPS input" value="">
                    <input type="hidden" tabindex="54" name="bps2t">
                    </span></td>
                </tr>
                <tr>
                  <td nowrap><span style="white-space:nowrap">
                    <input tabindex="55" type="hidden" size="20%" name="hz1" title="Lower Hz input" value="">
                    <input type="hidden" tabindex="56" name="hz1t">
                    </span><span style="white-space:nowrap">
                    <input tabindex="57" type="hidden" size="20%" name="hz2" title="Upper Hz input" value="">
                    <input type="hidden" tabindex="58" name="hz2t">

                  </span></td>
                </tr>
                <tr>
                  <td nowrap><span style="white-space:nowrap">
                    <input tabindex="59" type="hidden" size="20%" name="rn1" title="Lower Runtime input" value="">
                    <input type="hidden" tabindex="60" name="rn1t">

                    </span><span style="white-space:nowrap">
                    <input tabindex="61" type="hidden" size="20%" name="rn2" title="Upper Runtime input" value="">
                    <input type="hidden" tabindex="62" name="rn2t">
                    </span></td>
                </tr>
                <tr>
                  <td colspan="3"><center>
                  </center></td>
                </tr>
            </table></td>
            <td valign="top"><table>
                <tr></tr>
              </table></td>
          </tr>
          <tr>
            <td colspan="3" align="center" valign="top"><div align="left">
              <input type="submit" tabindex="63" name="submit" value="Search">
              &nbsp;
              <input type="button" tabindex="64" onClick="clearForm();" value="Clear">
  &nbsp
  <input type="reset" onClick="submitted=false;document.global.submit.disabled = false;document.global.submit.value = 'Search'" tabindex="65">
              <br>
              <input id="hfchx" type="hidden" name="hf" value="1">
            </div>
            <label for="hfchx"></label></td>
          </tr>
        </table>
        <input type="hidden" name="fly" value="2">
      </form>
        </div>     
        
        
        
        
        
  </div>
</div>
<div id="footer">
		<p>&copy; Knights Development LLC | Cyphertek.com</p>
	</div>
</div>

</body>
</html>
