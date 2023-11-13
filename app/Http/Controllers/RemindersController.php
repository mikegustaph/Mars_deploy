<?php

namespace App\Http\Controllers;


use App\Models\Reminders;
use App\Http\Controllers\View;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RemindersController extends Controller
{
    public function reminder()
    {
        $reminders = Reminders::all();
        $now = Carbon::now();
        $dateNow = $now->format('Y-m-d');
        $timeNow = $now->format('H:i:s');
        return view('reminder.reminder', compact('reminders', 'dateNow', 'timeNow'));
    }

    public function createReminder(Request $request)
    {
        return view('reminder.createreminder');
    }
    public function createReminderdata(Request $request)
    {
        $reminder = new Reminders();
        $reminder->name          =   $request->input('name');
        $reminder->description   =   $request->input('description');
        $reminder->date          =   $request->input('date');
        $reminder->time          =   $request->input('time');
        $reminder->frequency     =   $request->input('frequency');

        $reminder->save();
        return redirect()->back()->with('message', 'Reminder created successfully');
    }
    public function calendar()
    {
        return view('reminder.calendar');
    }

    public function updateview($id)
    {
        $reminderId = Reminders::find($id);
        return view('reminder.reminder', compact('reminderId'));
    }

    public function update(Request $request)
    {
        $reminderUpdate =  new Reminders();

        $reminderUpdate->name          =   $request->reminder_name;
        $reminderUpdate->description   =   $request->description;
        $reminderUpdate->date          =   $request->reminder_date;
        $reminderUpdate->time          =   $request->reminder_time;
        $reminderUpdate->frequency     =   $request->frequency;
    }
    public function reminderdelete($id)
    {
        $reminder = Reminders::find($id);
        $reminder->delete();
        return redirect()->back()->with('message', 'Reminder is successfuly deleted!');
    }
}
