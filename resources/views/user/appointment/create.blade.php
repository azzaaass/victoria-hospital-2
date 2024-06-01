@extends('templates.navbar')

@section('container')
    <!-- Appointment Section Starts -->
    <section class="book" id="book">
        <div class="row">
            <div class="image">
                <img src="{{ asset('images/appointment.svg') }}" alt="">
            </div>
            <form>

                <input type="text" name="id_user" value="{{ Auth::user()->id }}" hidden>
                <input type="text" id="day" name="day">

                <h3>book appointment</h3>
                <label for="name">Full name</label>
                <input type="text" placeholder="your name" class="box">

                <label for="number">Phone number</label>
                <input type="number" placeholder="phone number" class="box">

                <label>Doctor & Specialist</label>
                <input type="text" class="box"
                    value="Doctor {{ $doctor->user->fullname }} | Specialis {{ $doctor->specialis->name }}" readonly>

                <label for="date">Select date</label>
                <input type="date" id="date" class="box" onclick="getPlan(this,{{ $doctor->id }})">

                <label for="id_plan">Select schedule</label>
                <select name="id_plan" id="id_plan" class="box">
                    <option value="" disabled selected>Chose schedule</option>
                </select>

                <label for="description">disease complaint</label>
                <textarea name="description" id="description" class="box" rows="1" style="resize: vertical"></textarea>
                <a href="/doctor" class="btn">Back</a>
                <input type="submit" value="Submit" class="btn" style="margin-left: 15px;">
            </form>
        </div>
    </section>
    <!-- Appointment Section End -->
    <script>
        function getPlan(element, idDoctor) {

            var hours = ['07:00 - 07:30',
                '07:30 - 08:00',
                '08:00 - 08:30',
                '08:30 - 09:00',
                '09:00 - 09:30',
                '09:30 - 10:00',
                '10:00 - 10:30',
                '10:30 - 11:00',
                '11:00 - 11:30',
                '11:30 - 12:00',
                '12:00 - 12:30',
                '12:30 - 13:00',
                '13:00 - 13:30',
                '13:30 - 14:00',
                '14:00 - 14:30',
                '14:30 - 15:00',
                '15:00 - 15:30',
                '15:30 - 16:00',
                '16:00 - 16:30',
                '16:30 - 17:00',
                '17:00 - 17:30',
                '17:30 - 18:00',
                '18:00 - 18:30',
                '18:30 - 19:00',
                '19:00 - 19:30',
                '19:30 - 20:00',
                '20:00 - 20:30',
                '20:30 - 21:00'
            ];

            // get day in numeric
            var date = new Date(element.value);
            var day = date.getDay();
            $("#day").val(day);

            $("#id_plan").empty();

            $.ajax({
                type: "GET",
                url: "http://127.0.0.1:8000/api/plan",
                dataType: "json",
                headers: {
                    "doctor": idDoctor,
                    "day": day,
                },
                success: function(response) {
                    $.each(response.plans, function(key, value) {
                        $("#id_plan").append("<option value='" +
                            value.id + "'>" + hours[value.hour] +
                            "</option>");
                    });
                }
            });

        }
    </script>
@endsection
