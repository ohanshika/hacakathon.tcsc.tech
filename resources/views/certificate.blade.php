<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            border: 10px solid gold;
            padding: 20px;
        }

        .certificate {
            width: 100%;
            margin: auto;
            padding: 20px;
            border: 5px solid black;
            text-align: center;
        }

        h1 {
            color: darkblue;
        }

        .details {
            text-align: left;
            margin-top: 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="certificate">
        <h1>Certificate of Participation</h1>
        <p>This is to certify that</p>
        <h2>{{ $participant['leader_name'] }}</h2>
        <p>From <strong>{{ $participant['college_name'] }}</strong></p>
        <p>Has successfully participated in the event.</p>

        <div class="details">
            <p><strong>Leader Details:</strong></p>
            <p>Name: {{ $participant['leader_name'] }}</p>
            <p>Class: {{ $participant['leader_class'] }}</p>
            <p>Roll No: {{ $participant['leader_rollno'] }}</p>
            <p>Phone No: {{ $participant['leader_phoneno'] }}</p>
            <p>Email: {{ $participant['leader_email'] }}</p>

            <p><strong>Team Members:</strong></p>
            @for ($i = 1; $i <= 3; $i++)
                @if(isset($participant['member' . $i . '_name']))
                    <p>Member {{ $i }}: {{ $participant['member' . $i . '_name'] }} (Class:
                        {{ $participant['member' . $i . '_class'] }}, Roll No: {{ $participant['member' . $i . '_rollno'] }},
                        Phone:
                        {{ $participant['member' . $i . '_phoneno'] }}, Email: {{ $participant['member' . $i . '_email'] }})
                    </p>
                @endif
            @endfor
        </div>

        <p><strong>Date:</strong> {{ date('d-m-Y') }}</p>
        <p><strong>Authorized Signature</strong></p>
    </div>
</body>

</html>