<div id="cookie-banner" class="cookie-banner" style="display: none;">
    <div class="cookie-content">
        <h2>Welcome to Semzo Global</h2>
        <p>
            We use cookies that are essential to operate our website and enhance your experience. These include:
            <strong>Functional cookies</strong> — to remember preferences and improve usability,
            <strong>Performance cookies</strong> — to analyze site performance, and
            <strong>Marketing cookies</strong> — to personalize content and offers.
        </p>
        <div class="cookie-buttons">
            <button id="declineCookies">I decline optional cookies</button>
            <button id="acceptCookies">I accept all cookies</button>
        </div>
    </div>
</div>
<style>
    .cookie-banner {
    position: fixed;
    bottom: 0px;
    width: 100%;
    display: flex;
    justify-content: start;
    align-items: center;
    z-index: 9999;
    font-family: Arial, sans-serif;
}

.cookie-content {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    max-width: 600px;
    text-align: center;
    color: #fff;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
}
.cookie-content p,.cookie-content strong{
    font-size:14px!important;
    margin-bottom:0px!important;
}
.cookie-content h2{
    font-size:22px!important;
    margin-top:10px !important;
}

.cookie-buttons {
    margin-top: 8px;
}

.cookie-buttons button {
    margin: 10px;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
    font-size:14px!important
}

#acceptCookies {
    background: #eed484;
    color: #000;
}

#declineCookies {
    background: #fff;
    color: #000;
    border: 1px solid #555;
}

.cookie-link {
    display: block;
    margin-top: 10px;
    color: #ccc;
    text-decoration: underline;
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Show banner after 10 seconds if user hasn't already made a choice
    setTimeout(function() {
        if (localStorage.getItem('cookiesAccepted') === null) {
            document.getElementById('cookie-banner').style.display = 'flex';
        }
    }, 1000);

    // Accept button
    document.getElementById('acceptCookies').addEventListener('click', function() {
        localStorage.setItem('cookiesAccepted', 'true');
        document.getElementById('cookie-banner').style.display = 'none';
    });

    // Decline button
    document.getElementById('declineCookies').addEventListener('click', function() {
        localStorage.setItem('cookiesAccepted', 'false');
        document.getElementById('cookie-banner').style.display = 'none';
    });
});
</script>
