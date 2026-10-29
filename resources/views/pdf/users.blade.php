<!DOCTYPE html>
<html>
<head>
    <title>Users List PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 6px 8px; text-align: left; }
        th { background-color: #f3f4f6; }
        tr:nth-child(even) { background-color: #f9fafb; }
    </style>
</head>
<body>
    <h2>User Data Export (PDF)</h2>
    <table>
        <thead>
            <tr>
                
              
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th>ID</th>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Company Name</th>
                    <td>{{ $user->cname }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <th>Whatsapp Number</th>
                    <td>{{ $user->wphone }}</td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td>{{ $user->country }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>    
                    <th>Partnership</th>
                    <td>{{ $user->partnership }}</td>
                </tr>
                <tr>    
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>    
                    <th>Message</th>
                    <td>{{ $user->message }}</td>
                </tr>
                <tr>    
                    <th>Signature</th>
                    <td>
    @if(!empty($user->imageName) && file_exists(public_path('signature/' . $user->imageName)))
        <img src="{{ public_path('signature/' . $user->imageName) }}" alt="Signature" width="100%" >
    @else
        No Signature
    @endif
</td>

                </tr>
                <tr>    
                    <th>IP address</th>
                    <td>{{ $user->ipaddress }}</td>
                </tr>
                <tr>   
                    <th>Location</th>
                    <td>{{ $user->clocation }}</td>
                </tr>
                <tr>    
                    <th>Created Date</th>
                    <td>{{ $user->created_at }}</td>
                </tr>
                <br>
            @endforeach
        </tbody>
    </table>
</body>
</html>
