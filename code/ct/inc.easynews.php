          <form action="https://members.easynews.com/global4/search.html" method="get" name="global" onSubmit="return check_submit(this)">
        <table>
          <tr>
            <td valign="top"><table>
                <tr>
                  <td width="71">Keywords: </td>
                  <td width="418"><input tabindex="1" size="50" type="text" title="Regex Keywords field search input" name="gps" value="" /></td>
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

<tr><td>Size:</td><td nowrap><span style="white-space:nowrap"><input tabindex="40" type="text" size="10%" name="b1" title="Lower Size input" value=""> <select tabindex="41" name="b1t"><option value="">Any</option><option value="1" >1k</option><option value="2" >20k</option><option value="3" >50k</option><option value="4" >75k</option><option value="5" >100k</option><option value="6" >256k</option><option value="7" >512k</option><option value="8" >1M</option><option value="9" >5M</option><option value="10" >15M</option><option value="11" >25M</option><option value="12" >30M</option><option value="13" >40M</option><option value="14" >50M</option><option value="15" >75M</option><option value="16" >100M</option><option value="17" >200M</option><option value="18" >300M</option><option value="19" >400M</option><option value="20" >500M</option><option value="21" >750M</option><option value="22" >1G</option><option value="23" >1.5G</option><option value="24" >2G</option><option value="25" >2.5G</option><option value="26" >3G</option><option value="27" >3.5G</option><option value="28" >4G</option><option value="29" >5G</option><option value="30" >6G</option><option value="31" >7G</option><option value="32" >8G</option></select>
</span> to <span style="white-space:nowrap"><input tabindex="42" type="text" size="10%" name="b2" title="Upper Size input" value=""> <select tabindex="43" name="b2t"><option value="">Any</option><option value="1" >1k</option><option value="2" >20k</option><option value="3" >50k</option><option value="4" >75k</option><option value="5" >100k</option><option value="6" >256k</option><option value="7" >512k</option><option value="8" >1M</option><option value="9" >5M</option><option value="10" >15M</option><option value="11" >25M</option><option value="12" >30M</option><option value="13" >40M</option><option value="14" >50M</option><option value="15" >75M</option><option value="16" >100M</option><option value="17" >200M</option><option value="18" >300M</option><option value="19" >400M</option><option value="20" >500M</option><option value="21" >750M</option><option value="22" >1G</option><option value="23" >1.5G</option><option value="24" >2G</option><option value="25" >2.5G</option><option value="26" >3G</option><option value="27" >3.5G</option><option value="28" >4G</option><option value="29" >5G</option><option value="30" >6G</option><option value="31" >7G</option><option value="32" >8G</option></select>
</span></td></tr><tr>

                <tr>
                  <td>Type:</td>
                  <td><span style="white-space:nowrap">
                    <input tabindex="9" class="checkbox" type="checkbox" id="chxidARCHIVE" name="fty[]" value="ARCHIVE" >
                    <label for="chxidARCHIVE" title="rar|r[0-9]{2,3}|zip|ace|bz2|c[0-9]{2,3}|cab|cbz|cbr|gz|kar|s[0-9]{2,3}|sit|t[0-9]{2,3}|tar|tgz|z|z[0-9]{2,3}|[0-9][0-9][0-9]">ARCHIVE</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="10" class="checkbox" type="checkbox" id="chxidAUDIO" name="fty[]" value="AUDIO" CHECKED>
                    <label for="chxidAUDIO" title="mp3|m3u|ogg|ape|wav|wma|flac|mid|aif|m4a|it|lqt|mma|mod|ram|s3m|xm">AUDIO</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="11" class="checkbox" type="checkbox" id="chxidDOCUMENT" name="fty[]" value="DOCUMENT" >
                    <label for="chxidDOCUMENT" title="nzb|txt|pdf|nfo|doc|asc|rtf|xls">DOCUMENT</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="12" class="checkbox" type="checkbox" id="chxidMOVIE" name="fty[]" value="MOVIE" onclick="nxalert()">
                    <label for="chxidMOVIE" title="mpg|mpeg|avi|wmv|mp4|ogm|\.ts|asf|vob|asx|mov|mkv|ram|rmvb|001|\.qt|\.rm|swf|m2v|divx">MOVIE</label>
                    </span><br /><span style="white-space:nowrap">
                    <input tabindex="13" class="checkbox" type="checkbox" id="chxidEXECUTABLE" name="fty[]" value="EXECUTABLE" >
                    <label for="chxidEXECUTABLE" title="exe|bat|com|asp|dll|chm|vb">EXECUTABLE</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="14" class="checkbox" type="checkbox" id="chxidIMAGE" name="fty[]2" value="IMAGE" onclick="nxalert()" />
                    <label for="chxidIMAGE" title="jpg|jpeg|png|gif|bmp|tga">IMAGE</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="15" class="checkbox" type="checkbox" id="chxidMISC" name="fty[]" value="MISC" >
                    <label for="chxidMISC" title="crc|cue|dat|nes|pgp|smc|ttf">MISC</label>
                    </span> &nbsp;<span style="white-space:nowrap">
                    <input tabindex="12" class="checkbox" type="checkbox" id="chxxidMOVIE" name="ftyx[]" value="PARITYx" onclick="nxalert2()">
                    <label for="chxidMOVIE" title="mpg|mpeg|avi|wmv|mp4|ogm|\.ts|asf|vob|asx|mov|mkv|ram|rmvb|001|\.qt|\.rm|swf|m2v|divx">PARITY</label>
                    </span> &nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">Sort: <span style="white-space:nowrap">1st:
                    <select name="s1" tabindex="17" >
                      <option  value="nrfile">Filename</option>
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
                      <option selected value="druntime">A/V Length</option>
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
                    &nbsp; </span> <br />
                    <span style="white-space:nowrap">3rd:
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
                    <input class="checkbox" tabindex="27" type="checkbox" title="Only Display Unique Results"  name="u" value="1" id="chxu" checked="checked" />
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
                    <input class="checkbox" tabindex="33" type="checkbox" title="Only show valid thumbnails in a thumbnail view, No DRM or un-thumbnailable shown"  name="vv" value="1" id="chxvv" checked="checked">
                    <label for="chxvv" title="Only show valid thumbnails in a thumbnail view, No DRM or un-thumbnailable shown">Only show valid thumbnails</label>
                    </span><br>
                    <span style="white-space:nowrap;">
                    <input class="checkbox" tabindex="34" type="checkbox" title="Save as a daily search"  name="svS" value="1" id="chxsvS">
                    <label for="chxsvS" title="Save as a daily search">Save Search</label>
                    </span><br>
                    <span style="white-space:nowrap;">Save Label:
                    <input type="text" size="5%" maxlength="50" name="svL" title="Label for saved Search" value="">
                    </span><br>                  </td>
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
                    <input tabindex="39" type="hidden" size="20%" name="b1xxx" title="Lower Size input" value="">
                    <input type="hidden" tabindex="40" name="b1txxx">
                      
                    <input tabindex="41" type="hidden" size="20%" name="b2xxx" title="Upper Size input" value="">
                    <input type="hidden" tabindex="42" name="b2txxx">                      </td>
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
