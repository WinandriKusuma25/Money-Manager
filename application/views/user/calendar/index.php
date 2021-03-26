<html>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Calendar</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"> <a href="<?php echo base_url("user/home"); ?>">Dashboard</a></div>
                <div class="breadcrumb-item ">Calendar</div>
            </div>
        </div>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <script>
    $(document).ready(function() {
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: "<?= base_url(); ?>user/calendar/load",
            selectable: true,
            selectHelper: true,
            eventColor: '#6188ff',
            eventTextColor: 'white',
          
            select: function(start, end, allDay) {
                var title = prompt("Enter Event Title");
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: "<?php echo base_url(); ?>user/calendar/insert",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end
                        },
                        success: function() {
                            calendar.fullCalendar('refetchEvents');
                            alert("Added Successfully");
                        }
                    })
                }
            },
            editable: true,
            eventResize: function(event) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                var title = event.title;

                var id = event.id;

                $.ajax({
                    url: "<?php echo base_url(); ?>user/calendar/update",
                    type: "POST",
                    data: {
                        title: title,
                        start: start,
                        end: end,
                        id: id
                    },
                    success: function() {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Update");
                    }
                })
            },
            eventClick: function(event) {
                if (confirm("Are you sure you want to remove it?")) {
                    var id = event.id;
                    $.ajax({
                        url: "<?php echo base_url(); ?>user/calendar/delete",
                        type: "POST",
                        data: {
                            id: id
                        },
                        success: function() {
                            calendar.fullCalendar('refetchEvents');
                            alert('Event Removed');
                        }
                    })
                }
            }
        });
    });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kalender Keuangan</h6>
            </div>
            <div class="card-body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</body>


</html>