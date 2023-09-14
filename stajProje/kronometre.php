<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: "Times New Roman", serif;
            text-align: center;
            background-color: #310d3d;
            padding: 260px;
        }

        .container {
            background-color: #8241a6;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(220, 212, 212, 0.2);
            border-radius: 5px;
        }

        .counter {
            font-size: 2em;
            margin: 20px;
        }

        button {
            font-family: "Times New Roman", bold;

            font-size: 1em;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 10px;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Kronometre</title>
</head>
<body>
<div class="container">
    <h1 class="counter" id="counter">00:00:00</h1>
    <button id="start">Başlat</button>
    <button id="stop">Durdur</button>
    <button id="reset">Sıfırla</button>
</div>

<script src="script.js"></script>
<script>
    let timer;
    let isRunning = false;
    let seconds = 0;
    let minutes = 0;
    let hours = 0;

    const counterElement = document.getElementById('counter');
    const startButton = document.getElementById('start');
    const stopButton = document.getElementById('stop');
    const resetButton = document.getElementById('reset');

    function startCounter() {
        if (!isRunning) {
            isRunning = true;
            timer = setInterval(updateCounter, 1000);
            startButton.disabled = true;
        }
    }

    function stopCounter() {
        if (isRunning) {
            isRunning = false;
            clearInterval(timer);
            startButton.disabled = false;
        }
    }

    function resetCounter() {
        stopCounter();
        seconds = 0;
        minutes = 0;
        hours = 0;
        updateCounterDisplay();
    }

    function updateCounter() {
        seconds++;
        if (seconds === 60) {
            seconds = 0;
            minutes++;
            if (minutes === 60) {
                minutes = 0;
                hours++;
            }
        }
        updateCounterDisplay();
    }

    function updateCounterDisplay() {
        const formattedTime = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        counterElement.textContent = formattedTime;
    }

    startButton.addEventListener('click', startCounter);
    stopButton.addEventListener('click', stopCounter);
    resetButton.addEventListener('click', resetCounter);

</script>
</body>
</html>
