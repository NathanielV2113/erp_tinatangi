<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Http\Requests\StorereservationRequest;
use App\Http\Requests\UpdatereservationRequest;
use App\Http\Controllers\SendEmail;
use Symfony\Component\Mailer\Transport\SendmailTransport;

// //Load Composer's autoloader (created by composer, not included with PHPMailer)
// require 'vendor/autoload.php';

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StorereservationRequest $request)
    {
        $reservation = new reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->date = $request->date;
        $reservation->timein = $request->timein;
        $reservation->timeout = $request->timeout;
        $reservation->table = $request->table;
        $reservation->save();
        $table = '';
        switch ($request->table) {
            case 1:
                $table = 'Gazebo Spot, 1 to 4 Persons';
                break;
            case 2:
                $table = 'Library Hall, 6 to 10 Persons';
                break;
            case 3:
                $table = 'Function Hall, 10 or more Persons';
                break;
        }
        $date = \Carbon\Carbon::parse($request->date)->format('M d, Y');
        $data = new \stdClass();
        $data->email = $request->email;
        $data->name = $request->name;
        $data->subject = 'Tinatangi | Table Reservation';
        $data->body = '
                        <div style="text-align: start; background-color: #f3e9dc; border-radius: 10px; padding: 20px;">
                            <div style="margin-left:30px;">
                                <h1>Table Reservation</h1>
                                <h3>Dear ' . $request->name . ',</h3>
                                <h3>Your table reservation has been confirmed.</h3>
                                <h4>Reservation Details:</h4>
                                <p><strong>Name:</strong> ' . $request->name . '</p>
                                <p><strong>Email:</strong> ' . $request->email . '</p>
                                <p><strong>Date:</strong> ' . $date . '</p>
                                <p><strong>Time In:</strong> ' . $request->timein . '</p>
                                <p><strong>Time Out:</strong> ' . $request->timeout . '</p>
                                <p><strong>Table:</strong> ' . $table . '</p>
                                <p>We look forward to serving you!</p>
                                <p>Thank you for choosing Tinatangi Cafe!</p>
                                <p>Best regards,<br>Tinatangi Cafe</p>
                            </div>
                        </div>
                            ';
        $email = new SendEmail();
        $email->sendEmail($data);
        return redirect()->route('tinatangi.home')->with('success', 'Reservation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereservationRequest $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
