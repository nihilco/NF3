<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Invitation | Coast-to-Coast College Fair</title>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;margin: 0;padding: 0;background-color: #DEE0E2;height: 100% !important;width: 100% !important;">
      <center>
	<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;margin: 0;padding: 0;background-color: #DEE0E2;border-collapse: collapse !important;height: 100% !important;width: 100% !important;">
	  <tr>
	    <td align="center" valign="top" id="bodyCell" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;margin: 0;padding: 20px;border-top: 4px solid #BBBBBB;height: 100% !important;width: 100% !important;">
	      <!-- BEGIN TEMPLATE // -->
	      <table border="0" cellpadding="0" cellspacing="0" id="templateContainer" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 600px;border: 1px solid #BBBBBB;border-collapse: collapse !important;">
		<tr>
		  <td align="center" valign="top" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
		    <!-- BEGIN HEADER // -->
		    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader" style="width:100%!important;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #00447C;border-top: 1px solid #FFFFFF;border-bottom: 1px solid #CCCCCC;border-collapse: collapse !important;">
		      <tr>
			<td valign="top" class="headerContent" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #505050;font-family: Helvetica;font-size: 20px;font-weight: bold;line-height: 100%;padding-top: 0;padding-right: 0;padding-bottom: 0;padding-left: 0;text-align: center;vertical-align: middle;">
			  <img src="{{ url('/img/Logo2019.png') }}" alt="Coast-to-Coast College Fair" style="width:200px; height:200px; padding:25px;"/>
			  </td>
			</tr>
		      </table>
		      <!-- // END HEADER -->
		    </td>
		  </tr>
		<tr>
		  <td align="center" valign="top" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
		    <!-- BEGIN BODY // -->
		    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #FFFFFF;border-top: 1px solid #FFFFFF;border-bottom: 1px solid #CCCCCC;border-collapse: collapse !important;">
		      <tr>
			<td valign="top" class="bodyContent" mc:edit="body_content00" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #505050;font-family: Helvetica;font-size: 14px;line-height: 150%;padding-top: 20px;padding-right: 20px;padding-bottom: 20px;padding-left: 20px;text-align: left;">
			  <p>Dear {{ $issue->creator->contact->name->nickname ?? 'Contact' }},</p>

			  <p>Thanks for contacting us.  Here is the info you submitted:</p>

			  <h5 style="margin-bottom:0;padding-bottom:0;padding-left:1rem;">Name:</h5>
			  <p style="margin-top:0;padding-top:0;padding-left:1rem;">{{ $issue->creator->contact->name->fullName }}</p>
			  
			  <h5 style="margin-bottom:0;padding-bottom:0;padding-left:1rem;">Email:</h5>
			  <p style="margin-top:0;padding-top:0;padding-left:1rem;">{{ $issue->creator->email }}</p>

			  @if($issue->creator->contact->defaultPhone)
 			  <h5 style="margin-bottom:0;padding-bottom:0;padding-left:1rem;">Phone:</h5>
			  <p style="margin-top:0;padding-top:0;padding-left:1rem;">{{ $issue->creator->contact->defaultPhone }}</p>
			  @endif
			  
 			  <h5 style="margin-bottom:0;padding-bottom:0;padding-left:1rem;">Message:</h5>
			  <p style="margin-top:0;padding-top:0;padding-left:1rem;">{{ $issue->content }}</p>

			  <p>We will get back to you shortly.</p>
			  
			  <p>Anne Exum<br />
			  C2C Coordinator</p>
			</td>
		      </tr>
		      </table>
		      <!-- // END BODY -->
		    </td>
		</tr>
		<tr>
		  <td align="center" valign="top" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
		    <!-- BEGIN FOOTER // -->
		    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #FFFFFF;border-top: 1px solid #FFFFFF;border-collapse: collapse !important;">
		      <tr>
			<td valign="top" class="footerContent" style="padding-top: 20px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #808080;font-family: Helvetica;font-size: 10px;line-height: 150%;padding-right: 20px;padding-bottom: 20px;padding-left: 20px;text-align: left;" mc:edit="footer_content01">
			  <em>Copyright &copy; {{ date('Y') }} Coast-to-Coast College Fair.<br />  All rights reserved.</em>
			</td>
			<td valign="top" class="footerContent" style="padding-top: 20px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #808080;font-family: Helvetica;font-size: 10px;line-height: 150%;padding-right: 20px;padding-bottom: 20px;padding-left: 20px;text-align: left;" mc:edit="footer_content01">
			  <a href="https://www.coasttocoastcollegefair.com" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #606060;font-weight: normal;text-decoration: underline;">coasttocoastcollegefair.com</a>	
			</td>
		      </tr>
			    </table>
			    <!-- // END FOOTER -->
			  </td>
			</tr>
		      </table>
		      <!-- // END TEMPLATE -->
		    </td>
		  </tr>
		</table>
		</center>
		</body>
		</html>
