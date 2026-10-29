<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">
            <tr>
              <td style="padding:30px; color:#333333; font-size:15px; line-height:1.6;">
                <table role="presentation" width="100%" cellpadding="8" cellspacing="0" style="background-color:#f9fafb; border:1px solid #e5e7eb; border-radius:6px; margin-top:15px;">
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Name:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['name'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Email:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['email'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Phone:</td>
                    <td style="color:#374151;border:1px solid #e5e7eb;">{{ $mailData['phone'] }}</td>
                  </tr>
                  <tr style="border:1px solid #e5e7eb;">
                    <td width="120" valign="top" style="font-weight:bold; color:#111827;border:1px solid #e5e7eb;">Message:</td>
                    <td style="color:#374151; white-space:pre-line;border:1px solid #e5e7eb;">{{ $mailData['message'] }}</td>
                  </tr>
                  <tr>
                    <td width="120" style="font-weight:bold; color:#111827;">IP:</td>
                    <td style="color:#374151;">{{ $mailData['ip'] ?? 'N/A' }}</td>
                  </tr>
<tr>
  <td width="120" style="font-weight:bold; color:#111827;">Location:</td>
  <td style="color:#374151;">
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