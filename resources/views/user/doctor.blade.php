@extends('templates.navbar')

@section('container')
    <!-- Doctor Section Starts -->
    <section class="doctor" id="doctor">
        <div class="doctors">
            <h1 class="heading">our <span>doctors</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="../image/doc-1.jpg" alt="">
                    <h3>dr. Deirdre Roulina, Sp.JP</h3>
                    <p>specialist heart <br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-7.jpg" alt="">
                    <h3>dr. Nur Kumala, Sp.A</h3>
                    <p>Pediatrician<br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-8.jpg" alt="">
                    <h3> dr. Wijaya Kusuma, Sp.S</h3>
                    <p>neurologist <br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-4.jpg" alt="">
                    <h3>dr. Surya, Sp.THT-KL</h3>
                    <p>ENT specialist<br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-5.jpg" alt="">
                    <h3>dr. Kevin, Sp.M</h3>
                    <p>ophthalmologist.<br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-9.jpg" alt="">
                    <h3>dr. Chrisna Putri, Sp.KK</h3>
                    <p>dermatologist<br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-8.jpg" alt="">
                    <h3>dr. Helita Juliet</h3>
                    <p>General Practitioner (GP)<br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-10.jpg" alt="">
                    <h3>dr. Reisya Nasywa, Sp.OG</h3>
                    <p>Obgyn<br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-11.jpg" alt="">
                    <h3>dr. Dewi Susanti</h3>
                    <p>General Practitioner (GP)<br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-12.jpg" alt="">
                    <h3>dr. Irfan Setiawan, Sp.OT</h3>
                    <p>orthopedic surgeon<br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
                <div class="box">
                    <img src="../image/doc-13.jpg" alt="">
                    <h3>dr. Ali Assagaf, Sp.P(K)</h3>
                    <p>pulmonologistr<br></p>
                    <a href="appointment.html" class="btn"> Appointment <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
        </div>

        <div class="schedule">
            <h1 class="heading">doctor's <span>schedule</span></h1>
            <table>
                <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dr. Deirdre Roulina, Sp.JP</td>
                        <td>08:00 - 15:00</td>
                        <td>Off</td>
                        <td>08:00 - 15:00</td>
                        <td>Off</td>
                        <td>08:00 - 15:00</td>
                        <td>Off</td>
                        <td>07.00 - 13.00</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Nur Kumala, Sp.A</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 15.00</td>
                        <td>08:00 - 15:00</td>
                        <td>Off</td>
                        <td>08:00 - 15:00</td>
                        <td>Off</td>
                        <td>Off</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Wijaya Kusuma, Sp.S</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 15.00</td>
                        <td>08:00 - 15:00</td>
                        <td>Off</td>
                        <td>08:00 - 15:00</td>
                        <td>Off</td>
                        <td>Off</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Surya, Sp.THT-KL</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 15.00</td>
                        <td>08:00 - 15:00</td>
                        <td>09.00 - 15.30</td>
                        <td>08:00 - 15:00</td>
                        <td>07.00 - 11.00</td>
                        <td>Off</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Kevin, Sp.M</td>
                        <td>07.00 - 15:00</td>
                        <td>off</td>
                        <td>08:00 - 15:00</td>
                        <td>09.00 - 15.30</td>
                        <td>08:00 - 15:00</td>
                        <td>07.00 - 11.00</td>
                        <td>Off</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Chrisna Putri, Sp.KK</td>
                        <td>07.00 - 15:00</td>
                        <td>off</td>
                        <td>08:00 - 15:00</td>
                        <td>09.00 - 15.30</td>
                        <td>off</td>
                        <td>07.00 - 11.00</td>
                        <td>Off</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Helita Juliet</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 15:00</td>
                        <td>08:00 - 15:00</td>
                        <td>09.00 - 15.30</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 11.00</td>
                        <td>09.00 - 15.30</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Reisya Nasywa, Sp.OG</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 15:00</td>
                        <td>08:00 - 15:00</td>
                        <td>09.00 - 15.30</td>
                        <td>07.00 - 15:00</td>
                        <td>off</td>
                        <td>off</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Dewi Susanti</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 15:00</td>
                        <td>08:00 - 15:00</td>
                        <td>09.00 - 15.30</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 11.00</td>
                        <td>off</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Irfan Setiawan, Sp.OT</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 15:00</td>
                        <td>off</td>
                        <td>off</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 11.00</td>
                        <td>off</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>Dr. Ali Assagaf, Sp.P(K)</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 15:00</td>
                        <td>09.00 - 15.30</td>
                        <td>off</td>
                        <td>07.00 - 15:00</td>
                        <td>07.00 - 11.00</td>
                        <td>off</td>
                    </tr>
            </table>
    </section>
    <!-- Doctor section End -->
@endsection
