<?php

namespace App\Http\Controllers;

use App\Models\TestTable;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('testlogin');
    }

    public function viewPage()
    {
        if (session()->has('group_id')) {
            $testRecord = session('testRecord');
            return view('testpage', compact('testRecord'));
        }
        return redirect('/testlogin')->with('error', 'You must log in to access this page.');
    }


    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'leader_name' => 'required|string',
            'group_id' => 'required|string',
        ]);

        $testRecord = TestTable::where('leader_name', $validatedData['leader_name'])
            ->where('Group_id', $validatedData['group_id'])
            ->first();

        if ($testRecord) {
            if ($testRecord->test_taken == 0) {

                session([
                    'group_id' => $testRecord->Group_id,
                    'testRecord' => $testRecord,
                ]);

                return redirect('/teststarted');
            } else {
                return back()->with('error', 'Test has already been taken.');
            }
        } else {
            return back()->with('error', 'Invalid leader name or group ID.');
        }
    }
    public function submit(Request $request)
    {
        // Define the correct answers for validation
        $correctAnswers = [
            'answer1' => '240',
            'answer2' => '32',
            'answer3' => '7.5',
            'answer4' => '1/3',
            'answer5' => 'Juice',
            'answer6' => 'Blue',
            'answer7' => 'Bird',
            'answer8' => 'Green',
            'answer9' => 'Apple',
            'answer10' => 'Banana',
            'answer11' => 'Orange',
            'answer12' => 'Grapes',
            'answer13' => 'Fish',
            'answer14' => 'Tea',
            'answer15' => 'Water',
            'answer16' => 'Dog',
            'answer17' => 'Yellow',
            'answer18' => 'Cat',
            'answer19' => 'Bird',
            'answer20' => 'Fish',
        ];

        // Get the Group_id from the session
        $groupId = session('group_id');
        $test_taken = 1;

        // Validate the request (ensure all answers are strings or null)
        $correctAnswers = [
            'question1' => '240',
            'question2' => '32',
            'question3' => '7.5',
            'question4' => '1/3',
            'question5' => '6',
            'question6' => '35',
            'question7' => '12',
            'question8' => '29',
            'question9' => '30',
            'question10' => '40',
            'question11' => '6',
            'question12' => '2',
            'question13' => 'Jupiter',
            'question14' => '56',
            'question15' => 'Paris',
            'question16' => '9',
            'question17' => '100',
            'question18' => '7',
            'question19' => '40',
            'question20' => 'H2O',
        ];


        $testRecord = TestTable::where('Group_id', $groupId)->first();

        $data = ['test_taken' => $test_taken];
        foreach ($correctAnswers as $key => $correctAnswer) {
            $data[$key] = ($request->input($key) === $correctAnswer) ? 1 : 0;
        }

        for ($i = 1; $i <= 20; $i++) {
            $data['Q' . $i] = $data['question' . $i];
        }

        $data['total'] = array_sum(array_slice($data, 1, 20)); // Sum up Q1 to Q20 scores

        if ($testRecord) {
            $testRecord->update($data);
        } else {
            return redirect('/error')->with('message', 'Group not found');
        }

        return redirect('/logout')->with('message', 'Test submitted successfully');
    }


}
