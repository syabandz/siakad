function appendTable(result) {
    $("#tableList").empty().append(result);
}
function JoinList(groupType, hubName) {
    hubName.server.join(groupType);
    console.log("server joined " + groupType);
}
function RemoveList(groupType) {
    notifHub.server.leave(groupType);
}
function hubConnection(groupType) {
    var notifHub = $.connection.notifHub;

    $.connection.hub.start()
        .done(function () {
            //url = tableUrl();
            //callAjax(url, null, appendTable);
            JoinList(groupType, notifHub);
        });

    notifHub.client.updatedClients = function (notif) {
        //callAjax(url, null, appendTable);
        Push.create('New Email', {
            body: 'Ada email logbook yg ditujukan untukmu.',
            icon: '@Url.Content("~/Assets/Image/Mail.png")',
            timeout: 10000,                  // Timeout before notification closes automatically.
            vibrate: [100, 100, 100],       // An array of vibration pulses for mobile devices.
            onClick: function () {
                // Callback for when the notification is clicked. 
                window.focus(); this.close();
                console.log(this);
            }
        });
    };
}