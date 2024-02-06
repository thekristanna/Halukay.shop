<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Remix icon -->
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css"
            rel="stylesheet"
        />
        <!-- Box icons -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
        />
        <!-- CSS -->
        <link rel="stylesheet" href="../css/seller_notification.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="../img/halukay-favicon.png"
            type="image/x-icon"
        />
        <!-- Page Title -->
        <!-- <title>Halukay</title> -->
    </head>
    <body>
        <!-- seller notification -->
        <div class="container">
            <p class="notifs"><i class="ri-notification-3-fill"></i>Notifications</p>
            <div class="notifications">
                <!-- notif -->
                    <p class="current-notif"><span class="date">2020-10-10</span><span class="time">10:30 AM</span><span class="details">@daiben angelo is awaiting your reponse</span>
                     <button class="check">
                        <i class="ri-checkbox-line"></i>
                        <i class="ri-checkbox-fill"></i>
                    </button>
                    <button class="delete">
                        <i class="ri-delete-bin-line"></i>
                        <i class="ri-delete-bin-fill"></i>
                    </button>
                    </p>
               <!-- notif -->
               <p class="current-notif"><span class="date">2020-10-10</span><span class="time">10:30 AM</span><span class="details">@daiben angelo is awaiting your reponse Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, laudantium molestiae! Tempore quos obcaecati neque, placeat perferendis facilis aperiam ratione praesentium eveniet nihil cumque facere nisi, quasi nobis! A, autem Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem itaque sit incidunt minima architecto, eaque sint expedita aliquid dolor nemo molestiae temporibus quo rem mollitia officia placeat natus illum quibusdam error nesciunt rerum harum omnis? Labore dolore recusandae earum! Numquam incidunt facilis velit quod distinctio nobis exercitationem. Nemo, nam unde.</span>
                <button class="check">
                   <i class="ri-checkbox-line"></i>
                   <i class="ri-checkbox-fill"></i>
               </button>
               <button class="delete">
                   <i class="ri-delete-bin-line"></i>
                   <i class="ri-delete-bin-fill"></i>
               </button>
               </p>
               <!-- notif -->
               @foreach($notifications as $n)
               <p class="current-notif"><span class="date">{{$n -> date_sent->format('Y-m-d')}}</span><span class="time">{{ \Carbon\Carbon::parse($n->date_sent)->format('h:i A') }}</span><span class="details">{{$n -> content}}</span>
                @if($n->marked_seen == 0)
                <form action="/shopper/notifications/seen/{{$n -> notif_id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="check">
                        <i class="ri-checkbox-line"></i>
                        <i class="ri-checkbox-fill"></i>
                    </button>
                </form>
               @elseif($n->marked_seen == 1)
               <button class="check" disabled>
                <i class="ri-checkbox-fill" id="cb-seen"></i>
               </button>
                @endif
                <form action="/shopper/notifications/{{$n -> notif_id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="delete" type="submit">
                        <i class="ri-delete-bin-line"></i>
                        <i class="ri-delete-bin-fill"></i>
                    </button>
                </form>
               </p>
               @endforeach
            </div>
        </div>
    </body>
</html>
