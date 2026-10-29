<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">
            <tr>
              <td style="padding:30px; color:#333333; font-size:15px; line-height:1.6;">
                <table role="presentation" width="100%" cellpadding="8" cellspacing="0" style="background-color:#f9fafb; border:1px solid #e5e7eb; border-radius:6px; margin-top:15px;">
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Name:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['name'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Company Name:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['cname'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Phone:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['phone'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Whatsapp Number:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['wphone'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Country:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['country'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Address:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['address'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Partnership:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['partnership'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Email:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['email'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" valign="top" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Message:</td>
                    <td style="color:#374151; white-space:pre-line;border:1px solid #e5e7eb;">{{ $mailData['message'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" valign="top" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Signature:</td>
                    <td style="color:#374151; white-space:pre-line;border:1px solid #e5e7eb;"><img src="{{ $message->embed(public_path('signature/' . $mailData['imageName'])) }}" alt="Signature"></td>
                  </tr>

                  
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">IP:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['ip'] ?? 'N/A' }}</td>
                  </tr>
<tr style="border:1px solid #e5e7eb;">
  <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Location:</td>
  <td style="color:#374151;border:1px solid #e5e7eb;">
    @if(!empty($mailData['location']))
      Source: {{ $mailData['location']['source'] ?? 'ip' }}<br>
      @if(isset($mailData['location']['city'])){{ $mailData['location']['city'] }}, @endif
      @if(isset($mailData['location']['region'])){{ $mailData['location']['region'] }}, @endif
      @if(isset($mailData['location']['country'])){{ $mailData['location']['country'] }}@endif
      @if(isset($mailData['location']['latitude']))
        <br>Lat: {{ $mailData['location']['latitude'] }}, Lon: {{ $mailData['location']['longitude'] }}
      @endif
    @else
      Not available
    @endif
  </td>
</tr>
                </table>
              </td>
            </tr>
          </table>