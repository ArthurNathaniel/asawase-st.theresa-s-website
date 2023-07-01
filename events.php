<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
</head>

<body>
    <div id="eventForm"></div>
    <div id="calendar"></div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            $('#eventForm').load('form.html', function() {
                // Initialize FullCalendar after the form is loaded
                $('#calendar').fullCalendar({
                    defaultView: 'month',
                    editable: true,
                    events: JSON.parse(localStorage.getItem('calendarEvents')) || []
                });
            });
        });
    </script>
</body>

</html>