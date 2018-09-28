// Initiate the Pusher JS library
var pusher = new Pusher('c704c07a87b11b822dfb', {
    encrypted: true
});

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('notification-arrived');

//Variable
var notificationsWrapper   = $('.dropdown-notifications');
var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('i[data-count]');
var notificationsCount     = parseInt(notificationsCountElem.data('count'));
var notifications          = notificationsWrapper.find('ul.dropdown-menu');

var allNotif;

//Get Notifications from database
$(function(){
    $.ajax({
        url: '/getNotif',
        type: "GET",
        dataType: 'json',
        success: function(data)
        {
            console.log(data);
            allNotif = data;
            notificationsCount = data.data.length;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);

            // if(notificationsCount != 0){
            //     var notification_counter = document.getElementById("notification_counter");
            //     notification_counter.classList.add("notification-icon");
            // }

            for(var i=0; i<data.data.length; i++) {
                var existingNotifications = notifications.html();
                if(data.data[i].body != null)
                    description = "<p class=\"notification-desc\">"+data.data[i].body+"</p>";
                else
                    description = "";
                if(data.data[i].object_id)
                // var link = `<small class="timestamp pull-left"><a href="/object/`+data.data[i].object_id+`">Перейти к объекту</a></small>`;

                var newNotificationHtml = `
                      <li class="notification active">
                          <div class="media">
                            <div class="media-left">
                              <div class="media-object">
                                 <img src="/uploads/avatars/`+data.data[i].user_from_avatar+`" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                              </div>
                            </div>
                            <div class="media-body">
                              <strong class="notification-title">`+data.data[i].title+`</strong>
                              `+description+`
                              <div class="notification-meta">
                                <small class="timestamp pull-right">`+data.data[i].created_at+`</small>
                              </div>
                            </div>
                          </div>
                      </li>
                    `;
                notifications.html(newNotificationHtml + existingNotifications);
            }
        }
    });
});

//Action on a link Marl All As Read
//Set all notifications as read
function markAllAsRead() {
    $.ajax({
        url: '/delNotif',
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function()
        {
            console.log('marked as readed');
            document.getElementById('notifications_list').innerHTML="";
            notificationsCount=0;
            notificationsWrapper.find('.notif-count').text('0');
            notificationsCountElem.attr('data-count', '0');
        }
    });
}

Echo.private('notification-arrived.'+authUserId)
    .listen('NotificationArrived', (data) => {
        // Handle event
        console.log(data);
        var existingNotifications = notifications.html();
        if(data.data.notif.object_id)
            var link = `<small class="timestamp pull-left"><a href="/object/`+data.data.notif.object_id+`/chat">Перейти в чат</a></small>`;
        var newNotificationHtml = `
              <li class="notification active">
                  <div class="media">
                    <div class="media-left">
                      <div class="media-object">
                        <img src="/uploads/avatars/`+data.data.user_from.avatar+`" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                      </div>
                    </div>
                    <div class="media-body">
                      <strong class="notification-title">`+data.data.notif.title+`</strong>
                      <p class="notification-desc">`+data.data.notif.body+`</p>
                      <div class="notification-meta">
                        `+link+`
                        <small class="timestamp pull-right">`+data.data.notif.created_at+`</small>
                      </div>
                    </div>
                  </div>
              </li>
            `;
        notifications.html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);

        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
    });
// Bind a function to a Event (the full Laravel class)
// channel.bind('App\\Events\\NotificationArrived', function(data) {
    // this is called when the event notification is received...
    // console.log('asd');
    // var existingNotifications = notifications.html();
    // var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
    // var newNotificationHtml = `
    //       <li class="notification active">
    //           <div class="media">
    //             <div class="media-left">
    //               <div class="media-object">
    //                 <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
    //               </div>
    //             </div>
    //             <div class="media-body">
    //               <strong class="notification-title">`+data.data.notif.title+`</strong>
    //               <p class="notification-desc">`+data.data.notif.body+`</p>
    //               <div class="notification-meta">
    //                 <small class="timestamp">`+data.data.notif.created_at+`</small>
    //               </div>
    //             </div>
    //           </div>
    //       </li>
    //     `;
    // notifications.html(newNotificationHtml + existingNotifications);
    //
    // notificationsCount += 1;
    // notificationsCountElem.attr('data-count', notificationsCount);
    // notificationsWrapper.find('.notif-count').text(notificationsCount);
    // notificationsWrapper.show();
// });