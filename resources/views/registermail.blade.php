<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h2>Registration Details</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Group ID</td>
            <td>{{ $msg['Group_id'] }}</td>
        </tr>
        <tr>
            <td>College Name</td>
            <td>{{ $msg['college_name'] }}</td>
        </tr>
        <tr>
            <td>Leader Name</td>
            <td>{{ $msg['leader_name'] }}</td>
        </tr>
        <tr>
            <td>Leader Class</td>
            <td>{{ $msg['leader_class'] }}</td>
        </tr>
        <tr>
            <td>Leader Roll No</td>
            <td>{{ $msg['leader_rollno'] }}</td>
        </tr>
        <tr>
            <td>Leader Phone No</td>
            <td>{{ $msg['leader_phoneno'] }}</td>
        </tr>
        <tr>
            <td>Leader Email</td>
            <td>{{ $msg['leader_email'] }}</td>
        </tr>
        <tr>
            <td>Member 1 Name</td>
            <td>{{ $msg['member1_name'] }}</td>
        </tr>
        <tr>
            <td>Member 1 Class</td>
            <td>{{ $msg['member1_class'] }}</td>
        </tr>
        <tr>
            <td>Member 1 Roll No</td>
            <td>{{ $msg['member1_rollno'] }}</td>
        </tr>
        <tr>
            <td>Member 1 Phone No</td>
            <td>{{ $msg['member1_phoneno'] }}</td>
        </tr>
        <tr>
            <td>Member 1 Email</td>
            <td>{{ $msg['member1_email'] }}</td>
        </tr>
        <tr>
            <td>Member 2 Name</td>
            <td>{{ $msg['member2_name'] }}</td>
        </tr>
        <tr>
            <td>Member 2 Class</td>
            <td>{{ $msg['member2_class'] }}</td>
        </tr>
        <tr>
            <td>Member 2 Roll No</td>
            <td>{{ $msg['member2_rollno'] }}</td>
        </tr>
        <tr>
            <td>Member 2 Phone No</td>
            <td>{{ $msg['member2_phoneno'] }}</td>
        </tr>
        <tr>
            <td>Member 2 Email</td>
            <td>{{ $msg['member2_email'] }}</td>
        </tr>
        <tr>
            <td>Member 3 Name</td>
            <td>{{ $msg['member3_name'] }}</td>
        </tr>
        <tr>
            <td>Member 3 Class</td>
            <td>{{ $msg['member3_class'] }}</td>
        </tr>
        <tr>
            <td>Member 3 Roll No</td>
            <td>{{ $msg['member3_rollno'] }}</td>
        </tr>
        <tr>
            <td>Member 3 Phone No</td>
            <td>{{ $msg['member3_phoneno'] }}</td>
        </tr>
        <tr>
            <td>Member 3 Email</td>
            <td>{{ $msg['member3_email'] }}</td>
        </tr>
        <tr>
            <td>Transaction ID</td>
            <td>{{ $msg['transaction_id'] }}</td>
        </tr>
        <tr>
            <td>Created At</td>
            <td>{{ $msg['created_at'] }}</td>
        </tr>
        <tr>
            <td>Updated At</td>
            <td>{{ $msg['updated_at'] }}</td>
        </tr>
    </table>
</body>

</html>