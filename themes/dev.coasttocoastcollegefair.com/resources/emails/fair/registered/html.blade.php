<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Thanks for Registering | {{ config('app.name') }}</title>
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
		    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #F4F4F4;border-top: 1px solid #FFFFFF;border-bottom: 1px solid #CCCCCC;border-collapse: collapse !important;">
		      <tr>
			<td valign="top" class="bodyContent" mc:edit="body_content00" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #505050;font-family: Helvetica;font-size: 14px;line-height: 150%;padding-top: 20px;padding-right: 20px;padding-bottom: 20px;padding-left: 20px;text-align: left;">
			  <h1 style="display: block;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 100%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;color: #202020 !important;">Coast-to-Coast College Fair</h1>
			  <h3 style="display: block;font-family: Helvetica;font-size: 16px;font-style: italic;font-weight: normal;line-height: 100%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;color: #606060 !important;">Registration Confirmation</h3>
			  <p>Dear {{ $user->contact->name->first }},</p>

			  <p>The Coast to Coast College Fair will be held at the Chattanooga Convention Center on {{ $event->starts_at->format('l, F jS, Y') }} from 6:30pm to 8:30pm - be sure to save the date! Dinner will be provided before hand and for those needing lodging, a block of rooms is reserved at the downtown <a href="https://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Coast%20to%20Coast%20College%20Fair%5Echadt%60ctcctca%7Cctcctcb%7Cctcctcf%60149.00%60USD%60false%605%603/4/19%603/6/19%6002/11/19&app=resvlink&stop_mobi=yes">Chattanooga Marriott</a>.</p>

                          <h2 style="display: block;font-family: Helvetica;font-size: 20px;font-style: normal;font-weight: bold;line-height: 100%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;color: #404040 !important;">Payment Details</h2>

			  <p>Thanks for paying by credit card. The following is a summary of the charge to your account:</p>
			  
			  <ul style="list-style:none;">
			    <li><strong>Name: </strong> <code>{{ $user->contact->name->fullName }}</code></li>
			    <li><strong>Organization: </strong> <code>{{ $user->contact->defaultOrganization->name_display }}</code></li>
			    <li><strong>Amount: </strong> <code>${{ number_format($charge->amount/100,2) }}</code></li>
			    @if(isset($charge->source))
			    <li><strong>Reference Number: </strong> <code>{{ $charge->source->brand }} *{{ $charge->source->last4 }}</code></li>
			    <li><strong>Date: </strong> <code>{{ \Carbon\Carbon::createFromTimestamp($charge->created)->toDateTimeString() }}</code></li>
			    @endif
			    <li><strong>Reps: </strong> <code>{{ 1 + $additional }}</code></li>
			    <li><strong>Scanner: </strong> <code>{{ ucfirst($scanner) }}</code></li>
			  </ul>

			  <p>Thank you,<br />
			  Anne Exum<br />Fair Coordinator</p>
			  
			</td>
		      </tr>
		      <tr>
			<td align="center" valign="top" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
			  <!-- BEGIN COLUMNS // -->
			  <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateColumns" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #F4F4F4;border-top: 1px solid #FFFFFF;border-bottom: 1px solid #CCCCCC;border-collapse: collapse !important;">
			    <tr mc:repeatable>
			      <td align="center" valign="top" class="templateColumnContainer" style="padding-top: 20px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 260px;">
				<table border="0" cellpadding="20" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
				  <tr>
				    <td valign="top" class="leftColumnContent" mc:edit="left_column_content" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #505050;font-family: Helvetica;font-size: 14px;line-height: 150%;padding-top: 0;padding-right: 20px;padding-bottom: 20px;padding-left: 20px;text-align: left;">
				      <h3 style="display: block;font-family: Helvetica;font-size: 16px;font-style: italic;font-weight: normal;line-height: 100%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;color: #606060 !important;">Additional Information</h3>

				      <p>For more information, or if you have any questions or concerns, about the Fair, please contact us directly. Look here to <a href="{{ url('/files/2018_C2C_W9.pdf') }} ">download our W-9</a>.<p>
				      
					</td>
				      </tr>
				    </table>
				  </td>
				    <td align="center" valign="top" class="templateColumnContainer" style="padding-top: 20px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 260px;">
				      <table border="0" cellpadding="20" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
					<tr>
					  <td valign="top" class="rightColumnContent" mc:edit="right_column_content" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #505050;font-family: Helvetica;font-size: 14px;line-height: 150%;padding-top: 0;padding-right: 20px;padding-bottom: 20px;padding-left: 20px;text-align: left;">
					    <h3 style="display: block;font-family: Helvetica;font-size: 16px;font-style: italic;font-weight: normal;line-height: 100%;letter-spacing: normal;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;color: #606060 !important;">Contact Us</h3>

					    <p>Coast-to-Coast College Fair<br />
					      P.O. Box 4221<br />
					      Chattanooga, TN 37405<br />
					      (423) 505-4036</p>
					    
					      </td>
					    </tr>
					  </table>
					</td>
					</tr>
				      </table>
				      <!-- // END COLUMNS -->
				    </td>
				                                </tr>
		      </table>
		      <!-- // END BODY -->
		    </td>
		</tr>
		<tr>
		  <td align="center" valign="top" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
		    <!-- BEGIN FOOTER // -->
		    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #F4F4F4;border-top: 1px solid #FFFFFF;border-collapse: collapse !important;">
		      <tr>
			<td valign="top" class="footerContent" style="padding-top: 20px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #808080;font-family: Helvetica;font-size: 10px;line-height: 150%;padding-right: 20px;padding-bottom: 20px;padding-left: 20px;text-align: left;" mc:edit="footer_content01">
			  <em>Copyright &copy; 2015-{{ date('Y') }} {{ config('app.name') }}.  All rights reserved.</em>
			</td>
			<td valign="top" class="footerContent" style="padding-top: 20px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #808080;font-family: Helvetica;font-size: 10px;line-height: 150%;padding-right: 20px;padding-bottom: 20px;padding-left: 20px;text-align: left;" mc:edit="footer_content01">
			  <!--<a href="#" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #606060;font-weight: normal;text-decoration: underline;">unsubscribe</a>
			  &nbsp;&nbsp;&nbsp;
			  <a href="#" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #606060;font-weight: normal;text-decoration: underline;">preferences</a>
			  &nbsp;&nbsp;-->
			  <a href="http://www.coasttocoastcollegefair.com" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #606060;font-weight: normal;text-decoration: underline;">www.coasttocoastcollegefair.com</a>	
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
