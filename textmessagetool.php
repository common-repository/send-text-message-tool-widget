<?php
$basesdir = $_SERVER["PHP_SELF"];
$domainnametext=$_SERVER['HTTP_HOST'];
	if(isset($_POST['submittext']))
	{
		$number = $_POST['number'];
		$prov = $_POST['prov'];
                $message = $_POST['message'];
		$importanttext = $_POST['importanttext'];if($importanttext){echo 'haha';exit;}

		if((strlen($message))>110){$message='';}
		$wrong_data=='1';
		if($message==NULL){$wrong_data='jytvurrDSgfdger54e3    hcbh6EGjtu76';}
		
if((is_numeric($number)) && (is_numeric($prov)) && ((strlen($message))<110) && ($wrong_data!='jytvurrDSgfdger54e3    hcbh6EGjtu76') && ((strlen($number))==10) && ($prov<17) && ($prov>0)){

if($prov == '1'){$ext='@message.alltel.com';}
elseif($prov == '2'){$ext='@cingularme.com';}
elseif($prov == '3'){$ext='@mms.mycricket.com';}
elseif($prov == '4'){$ext='@mymetropcs.com';}
elseif($prov == '4'){$ext='@metropcs.sms.us';}
elseif($prov == '4'){$ext='@metropcs.com';}
elseif($prov == '5'){$ext='@messaging.nextel.com';}
elseif($prov == '6'){$ext='@messaging.sprintpcs.com';}
elseif($prov == '7'){$ext='@tmomail.net';}
elseif($prov == '8'){$ext='@email.uscc.net';}
elseif($prov == '9'){$ext='@vtext.com';}
elseif($prov == '10'){$ext='@vmobl.com';}
elseif($prov == '11'){$ext='@txt.bellmobility.ca';}
elseif($prov == '12'){$ext='@fido.ca';}
elseif($prov == '13'){$ext='@text.mts.net';}
elseif($prov == '14'){$ext='@pcs.rogers.com';}
elseif($prov == '15'){$ext='@sms.sasktel.com';}
elseif($prov == '16'){$ext='@msg.telus.com';}

$to="$number$ext";

				$headers = 	'From: noreply@' .$domainnametext . "\r\n" .
	    					'Reply-To: noreply@' .$domainnametext . "\r\n" .
	    					'X-Mailer: PHP/' . phpversion();
				$message_sms = $message. "\n\n";
				if(mail($to, '', $message_sms, $headers))
				{
					$msg = 'Sent Successfuly';$to='';$message='';
				}
				else {
					$msg = 'Error! Please return shortly.';
				}

}else{$msg='Try again. Fill all fields';}
	}
?>
<div style="width:100%;" align="center">
<div style="width:200px" align="center">
<form method="post" action="<?php echo $basesdir;?>" name="submittext">
<table border="0" cellpadding="5" align="center" cellspacing="0" width="160px" style="font-size: 1em; font-family: Arial, Helvetica, sans-serif; background-color: #f4f7f9; border-bottom: 1px solid #fff; font-size: .75em;">
<?php if($msg){?><tr><td style="background-color: orange; border-bottom: 1px solid #fff; font-weight: 700; font-size:13px; text-align:center; height:22px; vertical-align:middle; color: black;"><?php echo $msg;?></td></tr><?php }?>
<tr><td style="background-color: #000; border-bottom: 1px solid #fff; font-weight: 700; font-size:14px; text-align:center; height:22px; vertical-align:middle; color: #fff;">Send Text Message</td>
</tr><tr>
<td width="86%"><div align="center"><strong>To: (10 digits)<br />
</strong>
<input name="number" style="width:76%" type="text" value="<?php echo $number;?>" maxlength="10" size="12" />
</div></td>
</tr>
<tr>
<td width="86%"><div align="center"><strong>Select Provider<br />
</strong><style>.importanttext{display:none;}</style><select name="prov" style="font-size:11px;width:86%;"><option>Select Carrier</option><option value='1'>Alltel</option><option value='2'>AT&T</option><option value='3'>Cricket</option><option value='4'>Metro PCS</option></option><option value='5'>Nextel</option><option value='6'>Sprint PCS</option><option value='7'>T-Mobile</option><option value='8'>Us Cellular</option><option value='9'>Verizon</option><option value='10'>Virgin Mobile</option><option value='11'>Bell (CA)</option><option value='12'>Fido (CA)</option><option value='13'>MTS (CA)</option><option value='14'>Rogers (CA)</option><option value='15'>Sasktel (CA)</option><option value='16'>Telus (CA)</option></select><p class="importanttext" id="importanttext"><label>If you're human leave this blank:</label><input name="importanttext" type="text" id="importanttext" class="importanttext" /></p>
</div></td>
</tr>
<tr>
<td width="86%"><div align="center"><strong>Message<br />
</strong>
<textarea name="message" type="text" style="width:86%;height:52px;font-size:11px;" onkeyup="if (this.value.length > 110) { alert('Up to 110 characters only'); this.value = this.value.substr(0,110); }"><?php echo $message;?></textarea>
</div></td>
</tr>
<tr>
<td>
<div align="center">
<input type="submit" name="submittext" value="Send" />
<br /><font style="font-size:11px;"><br />No Spam - US & Canada only</font>
</div></td></tr>
<tr>
<td><div id="status"></div></td>
</tr> </table></form>
</div></div>