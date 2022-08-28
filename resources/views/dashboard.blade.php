<div class="card">
    <div class="card-body">
        <h4 class="card-title">Book the appointment</h4>


        <form action="{{ route('booking.store') }}" method="POST">
            @csrf

            <label for="name">Appointment For:</label>
            <br>
            <textarea name="name" id="name" cols="60" rows="3"></textarea>

            <br>

            <label for="meeting_time">Choose a time for you appointment</label>
            <br>

            <input type="date" name="meeting_date" />
            <input type="time" name="meeting_time" />

            <br>
            <br>

            <input type="submit" value="Submit" />
        </form>
    </div>
</div>
