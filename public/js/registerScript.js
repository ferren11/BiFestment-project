$(document).ready(function() {
    let data = null;

    $('.regist-btn').click(function() {
        var eventId = $(this).data('event-id');
        console.log(eventId);
        data = eventId;
        console.log($('#registerEventModal').val('event-id', eventId));
      $('#registerEventModal').data('event-id', eventId);
      $('#registerEventModal').modal('show');
    });

    $('.confirm-regist-btn').click(function() {
        console.log(data);
        evid = {dataCof: data};
        console.log(evid);
        $('#registEventForm').val(evid);
        $('#registEventForm').submit();

        $('#registerEventModal').modal('hide');

        // Add event listener to the registerSuccessModal
        $('#registerSuccessModal').on('hidden.bs.modal', function() {
            // Perform the desired redirection or action after the modal is closed
            window.location.href = "homepage";
        });

        // Show the registerSuccessModal
        $('#registerSuccessModal').modal('show');
    });
});
