<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class RegisrtController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'collegeName' => 'required|string|max:255',
            'leaderName' => 'required|string|max:255',
            'leaderclass' => 'required|string|max:255',
            'leaderrollNo' => 'required|string|max:255',
            'leaderphoneNo' => 'required|string|max:15',
            'leaderemail' => 'required|email|max:255',
            'transactionId' => 'required|string|max:255',
        ]);

        Participant::create([
            'college_name' => $request->input('collegeName'),
            'leader_name' => $request->input('leaderName'),
            'leader_class' => $request->input('leaderclass'),
            'leader_rollno' => $request->input('leaderrollNo'),
            'leader_phoneno' => $request->input('leaderphoneNo'),
            'leader_email' => $request->input('leaderemail'),
            'member1_name' => $request->input('member1Name'),
            'member1_class' => $request->input('member1Class'),
            'member1_rollno' => $request->input('member1RollNo'),
            'member1_phoneno' => $request->input('member1PhoneNo'),
            'member1_email' => $request->input('member1Email'),
            'member2_name' => $request->input('member2Name'),
            'member2_class' => $request->input('member2Class'),
            'member2_rollno' => $request->input('member2RollNo'),
            'member2_phoneno' => $request->input('member2PhoneNo'),
            'member2_email' => $request->input('member2Email'),
            'member3_name' => $request->input('member3Name'),
            'member3_class' => $request->input('member3Class'),
            'member3_rollno' => $request->input('member3RollNo'),
            'member3_phoneno' => $request->input('member3PhoneNo'),
            'member3_email' => $request->input('member3Email'),
            'transaction_id' => $request->input('transactionId'),
        ]);

        // Redirect to a success page or back to the form with a success message
        return redirect('/')->with('success', 'Registration completed successfully You will recieve a Mail!');
    }
}
