<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Student;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class MessageController extends Controller
{
    public function newMessage(Request $request): RedirectResponse
    {
        $request->validate([
           "promotion" => "required",
           "subject" => "required",
           "message" => "required"
        ]);
        $students = Student::where("promotion_id",$request->promotion)->get();
        $message = Message::create([
            "promotion_id" => $request->promotion,
            "subject" => $request->subject,
            "content" => $request->message
        ]);

        foreach ($students as $student) {
            try {
                $this->send($message,$student->phone);
            } catch (Exception $exception) {

            }
        }

        return redirect()->back();
    }

    /**
     * @throws TwilioException
     * @throws ConfigurationException
     */
    private function send(Message $message,$studentsNumbers) {
        $client = new Client(
            env("TWILIO_SID"),env("TWILIO_AUTH_TOKEN")
        );

        $client->messages->create($studentsNumbers,array(
            "from" => env("TWILIO_NUMBER"),
            "body" => $message->content
        ));
    }
}
