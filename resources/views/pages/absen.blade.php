<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Form</title>
        {{-- <link rel="stylesheet" href="style.css" /> --}}
        <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
        ></script>
        @vite(['resources/css/absen.css', 'resources/js/absen.js'])
    </head>
    <body>
        <div class="container">
            <span class="big-circle"></span>
            <img src="img/shape.png" class="square" alt="" />
            <div class="form">
                <div class="contact-info">
                    
                    <img loading="lazy" class="skada-logo" src="{{ asset('assets/images/icon/logo-green.png') }}" alt="">
                    {{-- <p class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Saepe dolorum adipisci recusandae praesentium dicta!
                    </p> --}}
                    <div class="timer-container">
                        <h1 id="" class="current-time"><span id="current-time"></span><span id="" class="current-second">.<span id="current-second"></span></span></h1>
                        <h3 class="title">Jam pelajaran saat ini</h3>
                    </div>
                    <script>
                        let time = document.getElementById('current-time');
                        let second = document.getElementById('current-second');
                        
                        function updateTimer() {
                            var currentTime = new Date();
                    
                            // Time
                            var timeOptions = { hour12: false, hour: '2-digit', minute: '2-digit' };
                            var formattedTime = currentTime.toLocaleTimeString(undefined, timeOptions);
                            time.innerHTML = formattedTime;
                    
                            // Seconds
                            var secondsOptions = { second: '2-digit' };
                            var secondsFormatter = new Intl.DateTimeFormat('en-US', secondsOptions);
                            var formattedSecond = secondsFormatter.format(currentTime);
                            second.innerHTML = formattedSecond;
                        }
                    
                        // Update the timer every second
                        setInterval(updateTimer, 1000);
                    
                        // Initial call to display the timer immediately
                        updateTimer();
                    </script>
                </div>

                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="index.html" autocomplete="off">
                        <h3 class="title">Absen guru</h3>
                        <div class="input-container">
                            {{-- <input type="text" name="name" class="input" /> --}}
                            <select name="" class="input" id="">
                                <option value="">Guru</option>
                            </select>
                            {{-- <label for="">Nama Guru</label>
                            <span>Nama Guru</span> --}}
                        </div>
                        <div class="input-container">
                            <input type="email" name="email" class="input" />
                            <label for="">Email</label>
                            <span>Email</span>
                        </div>
                        <div class="input-container">
                            <input type="tel" name="phone" class="input" />
                            <label for="">Phone</label>
                            <span>Phone</span>
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input"></textarea>
                            <label for="">Message</label>
                            <span>Message</span>
                        </div>
                        <input type="submit" value="Send" class="btn" />
                    </form>
                </div>
            </div>
        </div>
        <script src="main.js"></script>
    </body>
</html>
