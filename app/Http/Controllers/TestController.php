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
            'answer1' => 'Red',
            'answer2' => 'Dog',
            'answer3' => 'Coffee',
            'answer4' => 'Cat',
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
        $validated = $request->validate([
            'answer1' => 'nullable|string',
            'answer2' => 'nullable|string',
            'answer3' => 'nullable|string',
            'answer4' => 'nullable|string',
            'answer5' => 'nullable|string',
            'answer6' => 'nullable|string',
            'answer7' => 'nullable|string',
            'answer8' => 'nullable|string',
            'answer9' => 'nullable|string',
            'answer10' => 'nullable|string',
            'answer11' => 'nullable|string',
            'answer12' => 'nullable|string',
            'answer13' => 'nullable|string',
            'answer14' => 'nullable|string',
            'answer15' => 'nullable|string',
            'answer16' => 'nullable|string',
            'answer17' => 'nullable|string',
            'answer18' => 'nullable|string',
            'answer19' => 'nullable|string',
            'answer20' => 'nullable|string',
        ]);

        $testRecord = TestTable::where('Group_id', $groupId)->first();

        $data = ['test_taken' => $test_taken];
        foreach ($correctAnswers as $key => $correctAnswer) {
            $data[$key] = ($request->input($key) === $correctAnswer) ? 1 : 0;
        }

        for ($i = 1; $i <= 20; $i++) {
            $data['Q' . $i] = $data['answer' . $i];
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
