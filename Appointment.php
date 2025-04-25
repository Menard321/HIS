<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #d9e2d9;
        }

        .modal {
            background-color: rgb(243, 247, 244);
            border: 2px solid #0d0e0d;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 10px rgba(199, 6, 6, 0.1);
        }

        .modal h2 {
            text-align: center;
            margin-top: 0;
        }

        .modal input {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            box-sizing: border-box;
        }
        .modal button {
            margin-top: 10px;
            padding: 8px 12px;
            width: 48%;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .modal button:hover {
            background-color: #0056b3;
        }


        .modal button:first-of-type {
            margin-right: 4%;
        }
    </style>
</head>
<body>
    <div id="appointmentModal" class="modal">
        <h2>Make an Appointment</h2>
        <form id="appointmentForm" onsubmit="event.preventDefault(); bookAppointment();">
            <label for="patient">Patient:</label>
            <input type="text" id="patient" placeholder="Enter patient name" />
            <br /><br />
            <label for="doctor">Doctor:</label>
            <input type="text" id="doctor" placeholder="Enter doctor name" />
            <br /><br />
            <label for="date">Date:</label>
            <input type="date" id="date" />
            <br /><br />
            <label for="time">Time:</label>
            <input type="time" id="time" />
            <br /><br />
            <button type="submit">Book</button>
            <button type="button" onclick="closeAppointmentModal()">Close</button>
        </form>
    </div>
</body>
</html>
