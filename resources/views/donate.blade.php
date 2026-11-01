@extends('templates.front.main')
@section('customcss')
<title>Donate | NextGen Impact</title>
<link rel="stylesheet" href="/assets/css/front/about.css" />
<link rel="stylesheet" href="/assets/css/front/donate.css" />
<style>
    /* Donate page. Change --don-accent to match the site's main colour. */
.don-grid, .don-legal {
  --don-accent: #1d6b52;
  --don-accent-ink: #ffffff;
  --don-gold: #e9a21b;
  --don-gold-soft: #fbefd2;
  --don-ink: #12261f;
  --don-muted: #55675f;
  --don-line: #d9e2dd;
  --don-bg: #f5f8f6;
  --don-surface: #ffffff;
  --don-err: #b3261e;
  color: var(--don-ink);
}
.don-grid {
  display: grid; gap: 28px 56px; max-width: 1080px; margin: 0 auto;
  grid-template-columns: minmax(0, 1fr) minmax(0, 430px);
  grid-template-areas: "intro side" "impact side"; align-items: start;
}
.don-intro { grid-area: intro; min-width: 0; }
.don-impact { grid-area: impact; min-width: 0; }
.don-side { grid-area: side; min-width: 0; position: sticky; top: 16px; }
@media (max-width: 860px) {
  .don-grid { grid-template-columns: minmax(0, 1fr); grid-template-areas: "intro" "side" "impact"; }
  .don-side { position: static; }
}
.don-eyebrow { font-size: .8rem; letter-spacing: .12em; text-transform: uppercase; font-weight: 700; color: var(--don-accent); margin: 0 0 10px; }
.don-title { font-size: clamp(1.7rem, 4.5vw, 2.6rem); line-height: 1.15; margin: 0 0 14px; text-wrap: balance; }
.don-lede { color: var(--don-muted); max-width: 56ch; margin: 0 0 20px; }
.don-trust { display: flex; flex-wrap: wrap; gap: 8px; list-style: none; margin: 0; padding: 0; }
.don-trust li { background: var(--don-gold-soft); border-radius: 999px; padding: 5px 12px; font-size: .86rem; font-weight: 500; }

.don-impact h3 { font-size: 1.25rem; margin: 0 0 12px; }
.don-tiers { list-style: none; margin: 0; padding: 0; border-top: 1px solid var(--don-line); }
.don-tiers li { display: grid; grid-template-columns: 5.5rem minmax(0, 1fr); gap: 14px; padding: 14px 10px; border-bottom: 1px solid var(--don-line); transition: background .15s; }
.don-tiers .amt { font-weight: 700; font-variant-numeric: tabular-nums; }
.don-tiers li.on { background: var(--don-gold-soft); }
.don-tiers li.on .amt { color: var(--don-accent); }

.don-box { background: var(--don-surface); border: 1px solid var(--don-line); border-radius: 14px; padding: 22px; box-shadow: 0 10px 30px -18px rgba(18, 38, 31, .35); }
.don-box h3 { font-size: 1.3rem; margin: 0 0 16px; }
.don-box [hidden] { display: none !important; }
.don-fs { border: 0; margin: 0 0 16px; padding: 0; min-width: 0; }
.don-fs legend, .don-field label { display: block; font-size: .85rem; font-weight: 600; color: var(--don-muted); margin: 0 0 8px; padding: 0; width: auto; float: none; }
.don-seg { display: grid; grid-template-columns: 1fr 1fr; background: var(--don-bg); border-radius: 10px; padding: 4px; gap: 4px; }
.don-seg input, .don-chips input { position: absolute; opacity: 0; pointer-events: none; }
.don-seg label { text-align: center; padding: 9px 8px; border-radius: 7px; cursor: pointer; font-weight: 600; margin: 0; }
.don-seg input:checked + label { background: var(--don-surface); box-shadow: 0 1px 3px rgba(0,0,0,.18); color: var(--don-accent); }
.don-chips { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 8px; }
.don-chips label { border: 1.5px solid var(--don-line); border-radius: 10px; padding: 12px 8px; text-align: center; cursor: pointer; font-weight: 700; font-variant-numeric: tabular-nums; background: var(--don-surface); margin: 0; }
.don-chips input:checked + label { border-color: var(--don-accent); background: var(--don-accent); color: var(--don-accent-ink); }
.don-seg input:focus-visible + label, .don-chips input:focus-visible + label { outline: 3px solid var(--don-gold); outline-offset: 2px; }

.don-field { margin-bottom: 14px; }
.don-field input[type="text"], .don-field input[type="email"], .don-field input[type="tel"], .don-field input[type="number"] {
  width: 100%; font: inherit; color: var(--don-ink); background: var(--don-surface); border: 1.5px solid var(--don-line); border-radius: 10px; padding: 11px 12px; box-sizing: border-box;
}
.don-field input:focus-visible { outline: 3px solid var(--don-gold); outline-offset: 1px; border-color: var(--don-accent); }
.don-hint { font-size: .8rem; color: var(--don-muted); margin-top: 5px; }
.don-err { font-size: .82rem; color: var(--don-err); margin-top: 5px; }
.don-err:empty { display: none; }
.don-prefix { position: relative; }
.don-prefix span { position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: var(--don-muted); font-weight: 600; }
.don-prefix input { padding-left: 28px !important; }
.don-row2 { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
@media (max-width: 420px) { .don-row2 { grid-template-columns: minmax(0, 1fr); } }
.don-now { background: var(--don-gold-soft); border-radius: 10px; padding: 10px 12px; font-size: .92rem; margin-bottom: 16px; min-height: 3.2em; }
.don-check { display: flex; gap: 10px; align-items: flex-start; margin: 4px 0 8px; font-size: .88rem; }
.don-check input { margin-top: 4px; flex: none; width: 18px; height: 18px; }
.don-check label { margin: 0; }
.don-check a { color: var(--don-accent); }

.don-btn { width: 100%; font: inherit; font-weight: 700; font-size: 1.05rem; padding: 14px; border: 0; border-radius: 10px; cursor: pointer; background: var(--don-accent); color: var(--don-accent-ink); margin-top: 8px; }
.don-btn:hover { filter: brightness(1.1); }
.don-ghost { width: 100%; font: inherit; font-weight: 600; background: none; border: 1.5px solid var(--don-line); color: var(--don-ink); border-radius: 10px; padding: 11px 14px; cursor: pointer; margin-top: 10px; }
.don-btn:focus-visible, .don-ghost:focus-visible, .don-copy:focus-visible, .don-tabs button:focus-visible { outline: 3px solid var(--don-gold); outline-offset: 2px; }
.don-fine { font-size: .8rem; color: var(--don-muted); margin: 12px 0 0; text-align: center; }

.don-summary { display: flex; justify-content: space-between; align-items: baseline; gap: 12px; flex-wrap: wrap; border-bottom: 1px solid var(--don-line); padding-bottom: 12px; margin-bottom: 14px; }
.don-summary b { font-size: 1.6rem; font-variant-numeric: tabular-nums; }
.don-setup { background: #fff3d6; color: #5c3d00; border-radius: 10px; padding: 10px 12px; font-size: .88rem; margin-bottom: 14px; }
.don-tabs { display: grid; grid-template-columns: 1fr 1fr; background: var(--don-bg); border-radius: 10px; padding: 4px; gap: 4px; margin-bottom: 14px; }
.don-tabs button { font: inherit; font-weight: 600; border: 0; background: none; color: var(--don-ink); padding: 9px; border-radius: 7px; cursor: pointer; }
.don-tabs button[aria-selected="true"] { background: var(--don-surface); color: var(--don-accent); box-shadow: 0 1px 3px rgba(0,0,0,.18); }
.don-qr { display: grid; place-items: center; background: #fff; border: 1px solid var(--don-line); border-radius: 12px; padding: 14px; width: fit-content; margin: 0 auto 14px; max-width: 100%; color: #333; font-size: .85rem; }
.don-qr img, .don-qr canvas { max-width: 100%; height: auto; }
.don-note { font-size: .88rem; color: var(--don-muted); margin: 0 0 14px; }
.don-details { margin: 0 0 14px; display: grid; gap: 10px; }
.don-details > div { display: grid; grid-template-columns: 6.5rem minmax(0, 1fr) auto; gap: 8px; align-items: center; }
.don-details dt { color: var(--don-muted); font-size: .85rem; font-weight: 400; }
.don-details dd { margin: 0; font-weight: 600; overflow-wrap: anywhere; font-variant-numeric: tabular-nums; }
.don-copy { font: inherit; font-size: .8rem; font-weight: 600; color: var(--don-accent); background: none; border: 1.5px solid var(--don-line); border-radius: 8px; padding: 4px 10px; cursor: pointer; }
.don-legal { max-width: 1080px; margin: 40px auto 0; padding-top: 16px; border-top: 1px solid var(--don-line); color: var(--don-muted); font-size: .85rem; }
@media (prefers-reduced-motion: reduce) { .don-tiers li { transition: none; } }
</style>
@endsection
@section('body')
<x-mainbanner name="Donate" para="Help us bring smart classrooms and safe drinking water to government schools"
    imgs="/assets/imgs/our-team.jpeg" />
<main>
    <div class="container-fluid my-5">
        <div class="don-grid">

            <section class="don-intro">
                <p class="don-eyebrow">Support NextGen Impact</p>
                <h2 class="don-title">Give once, or give every month.</h2>
                <p class="don-lede">NextGen Impact is a unit of Earth Initiative Foundation. Through the Build My School
                    Mission and our community programmes, your gift helps children in rural government schools learn in
                    better classrooms with clean drinking water. Choose an amount, choose how often, and pay by UPI or
                    bank transfer. No account is needed.</p>
                <ul class="don-trust" id="donTrust"></ul>
            </section>

            <section class="don-impact" aria-labelledby="donImpactH">
                <h3 id="donImpactH">What your gift does</h3>
                <ul class="don-tiers" id="donTiers"></ul>
            </section>

            <section class="don-side" aria-label="Donation form">
                <div class="don-box">

                    {{-- STEP 1: amount and donor details --}}
                    <form id="donForm" novalidate>
                        <h3>Your donation</h3>

                        <fieldset class="don-fs">
                            <legend>How often</legend>
                            <div class="don-seg">
                                <input type="radio" name="freq" id="fOnce" value="once" checked>
                                <label for="fOnce">One time</label>
                                <input type="radio" name="freq" id="fMonth" value="monthly">
                                <label for="fMonth">Monthly</label>
                            </div>
                        </fieldset>

                        <fieldset class="don-fs">
                            <legend>Amount (INR)</legend>
                            <div class="don-chips" id="donChips"></div>
                        </fieldset>

                        <div class="don-field">
                            <label for="donCustom">Or enter another amount</label>
                            <div class="don-prefix"><span>&#8377;</span>
                                <input type="number" id="donCustom" inputmode="numeric" min="1" step="1"
                                    placeholder="Other amount">
                            </div>
                            <div class="don-err" id="errAmt" role="alert"></div>
                        </div>

                        <div class="don-now" id="donNow" aria-live="polite"></div>

                        <div class="don-field">
                            <label for="donName">Full name</label>
                            <input type="text" id="donName" autocomplete="name">
                            <div class="don-err" id="errName" role="alert"></div>
                        </div>
                        <div class="don-row2">
                            <div class="don-field">
                                <label for="donEmail">Email</label>
                                <input type="email" id="donEmail" autocomplete="email">
                                <div class="don-err" id="errEmail" role="alert"></div>
                            </div>
                            <div class="don-field">
                                <label for="donPhone">Mobile</label>
                                <input type="tel" id="donPhone" autocomplete="tel" inputmode="tel"
                                    placeholder="10 digits">
                                <div class="don-err" id="errPhone" role="alert"></div>
                            </div>
                        </div>
                        <div class="don-field">
                            <label for="donPan">PAN (optional)</label>
                            <input type="text" id="donPan" maxlength="10" autocapitalize="characters"
                                placeholder="ABCDE1234F">
                            <div class="don-hint">Only needed for a tax receipt.</div>
                            <div class="don-err" id="errPan" role="alert"></div>
                        </div>

                        <div class="don-check">
                            <input type="checkbox" id="donAgree">
                            <label for="donAgree">I am 18 or older and I have read the
                                <a href="/privacy-policy" target="_blank" rel="noopener">Privacy Policy</a>.</label>
                        </div>
                        <div class="don-err" id="errAgree" role="alert"></div>

                        <button class="don-btn" type="submit" id="donGo">Continue</button>
                        <p class="don-fine">Our UPI and bank details appear on the next step.</p>
                    </form>

                    {{-- STEP 2: payment details --}}
                    <div id="donPay" hidden>
                        <h3>Complete your payment</h3>
                        <div class="don-summary"><span id="sumWho"></span><b id="sumAmt"></b></div>
                        <div class="don-setup" id="donSetup" hidden>Payment details are not set yet. Add the UPI ID and
                            bank account in donate.js (CONFIG) before this page goes live.</div>
                        <div class="don-tabs" role="tablist">
                            <button type="button" role="tab" id="tabUpi" aria-selected="true"
                                aria-controls="paneUpi">UPI</button>
                            <button type="button" role="tab" id="tabBank" aria-selected="false"
                                aria-controls="paneBank">Bank transfer</button>
                        </div>
                        <div id="paneUpi" role="tabpanel" aria-labelledby="tabUpi">
                            <div class="don-qr" id="donQr" aria-label="UPI QR code"></div>
                            <p class="don-note">Scan with any UPI app, or pay to the UPI ID below.</p>
                            <dl class="don-details" id="upiDetails"></dl>
                        </div>
                        <div id="paneBank" role="tabpanel" aria-labelledby="tabBank" hidden>
                            <dl class="don-details" id="bankDetails"></dl>
                        </div>
                        <p class="don-note" id="donPayNote"></p>
                        <button class="don-btn" type="button" id="donPaid">I have paid</button>
                        <button class="don-ghost" type="button" id="donEdit">Change amount or details</button>
                    </div>

                    {{-- STEP 3: thank you --}}
                    <div id="donThanks" hidden>
                        <h3>Thank you<span id="thanksName"></span>.</h3>
                        <p class="don-note" id="thanksMsg"></p>
                        <button class="don-ghost" type="button" id="donAgain">Make another donation</button>
                    </div>

                </div>
            </section>
        </div>

        <p class="don-legal" id="donLegal"></p>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>
<script src="/assets/js/front/donate.js" defer></script>
<script>
    /* ============ CONFIG: edit this block, nothing else needs to change ============ */
var DON_CONFIG = {
  trust: ["Receipt sent by email", "We never sell your data", "Children's photos handled with care"],
  legalLine: "NextGen Impact, a unit of Earth Initiative Foundation · Plot No. 36, Portion Left, Ground Floor, Block-F14, Phase II, Model Town, Delhi – 110009 · Reg. No. [add] · PAN [add]",
  minAmount: 100,
  amounts: [500, 1000, 2500, 5000],
  defaultAmount: 1000,
  /* Each tier applies from that amount upward. Replace with real costs from your programmes. */
  tiers: [
    { min: 100,  text: "Contributes toward clean drinking water for a school." },
    { min: 500,  text: "Contributes toward smart classroom learning material for students." },
    { min: 1000, text: "Helps cover the running costs of a school visit and installation." },
    { min: 2500, text: "Funds a large share of a classroom upgrade for one government school." },
    { min: 5000, text: "Sponsors a major part of a Build My School Mission project." }
  ],
  upi: { id: "REPLACE-WITH-YOUR-UPI-ID", payeeName: "Earth Initiative Foundation" },
  bank: {
    "Account name": "REPLACE",
    "Account number": "REPLACE",
    "IFSC": "REPLACE",
    "Bank and branch": "REPLACE"
  },
  /* Optional: a Laravel route that receives the donor details by POST (JSON).
     The page sends the CSRF token from <meta name="csrf-token"> if your layout has one. Leave empty to skip. */
  endpoint: ""
};
/* ================================================================================ */

(function () {
  var C = DON_CONFIG;
  var $ = function (id) { return document.getElementById(id); };
  var fmt = function (n) { return "₹" + Number(n).toLocaleString("en-IN"); };
  var state = { amount: C.defaultAmount, freq: "once", donor: null, ref: "" };

  C.trust.forEach(function (t) { var li = document.createElement("li"); li.textContent = t; $("donTrust").appendChild(li); });
  $("donLegal").textContent = C.legalLine;

  C.amounts.forEach(function (a, i) {
    var id = "donA" + i;
    var inp = document.createElement("input"); inp.type = "radio"; inp.name = "amt"; inp.id = id; inp.value = a;
    if (a === state.amount) inp.checked = true;
    var lab = document.createElement("label"); lab.setAttribute("for", id); lab.textContent = fmt(a);
    $("donChips").appendChild(inp); $("donChips").appendChild(lab);
    inp.addEventListener("change", function () { $("donCustom").value = ""; state.amount = a; refresh(); });
  });

  var tierEls = C.tiers.map(function (t) {
    var li = document.createElement("li");
    var a = document.createElement("span"); a.className = "amt"; a.textContent = fmt(t.min) + "+";
    var d = document.createElement("span"); d.textContent = t.text;
    li.appendChild(a); li.appendChild(d); $("donTiers").appendChild(li); return li;
  });

  function tierFor(amt) { var idx = -1; C.tiers.forEach(function (t, i) { if (amt >= t.min) idx = i; }); return idx; }

  function refresh() {
    var amt = state.amount, monthly = state.freq === "monthly", idx = tierFor(amt), valid = amt >= C.minAmount;
    tierEls.forEach(function (el, i) { el.classList.toggle("on", i === idx); });
    $("donNow").textContent = valid && idx >= 0
      ? fmt(amt) + (monthly ? " every month. " : ". ") + C.tiers[idx].text
      : "Enter an amount of " + fmt(C.minAmount) + " or more.";
    $("donGo").textContent = valid ? (monthly ? "Give " + fmt(amt) + " every month" : "Donate " + fmt(amt)) : "Continue";
  }

  document.querySelectorAll('input[name="freq"]').forEach(function (r) {
    r.addEventListener("change", function () { state.freq = r.value; refresh(); });
  });
  $("donCustom").addEventListener("input", function () {
    var v = parseInt($("donCustom").value, 10);
    if (!isNaN(v)) {
      document.querySelectorAll('input[name="amt"]').forEach(function (r) { r.checked = false; });
      state.amount = v;
    } else { state.amount = 0; }
    refresh();
  });

  function setErr(id, msg) { $(id).textContent = msg || ""; return !msg; }
  function validate() {
    var ok = true;
    ok = setErr("errAmt", state.amount >= C.minAmount ? "" : "Minimum donation is " + fmt(C.minAmount) + ".") && ok;
    ok = setErr("errName", $("donName").value.trim().length >= 2 ? "" : "Enter your full name.") && ok;
    ok = setErr("errEmail", /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test($("donEmail").value.trim()) ? "" : "Enter a valid email address.") && ok;
    var ph = $("donPhone").value.replace(/[\s+-]/g, "").replace(/^91/, "");
    ok = setErr("errPhone", /^[6-9]\d{9}$/.test(ph) ? "" : "Enter a 10-digit Indian mobile number.") && ok;
    var pan = $("donPan").value.trim().toUpperCase();
    ok = setErr("errPan", pan === "" || /^[A-Z]{5}[0-9]{4}[A-Z]$/.test(pan) ? "" : "PAN looks like ABCDE1234F.") && ok;
    ok = setErr("errAgree", $("donAgree").checked ? "" : "Please confirm to continue.") && ok;
    return ok;
  }

  function selectText(node) {
    try { var r = document.createRange(); r.selectNodeContents(node); var s = window.getSelection(); s.removeAllRanges(); s.addRange(r); } catch (e) {}
  }
  function row(dl, k, v, copyable) {
    var wrap = document.createElement("div");
    var dt = document.createElement("dt"); dt.textContent = k;
    var dd = document.createElement("dd"); dd.textContent = v;
    wrap.appendChild(dt); wrap.appendChild(dd);
    if (copyable) {
      var b = document.createElement("button"); b.type = "button"; b.className = "don-copy"; b.textContent = "Copy";
      b.setAttribute("aria-label", "Copy " + k);
      b.addEventListener("click", function () {
        var done = function () { b.textContent = "Copied"; setTimeout(function () { b.textContent = "Copy"; }, 1500); };
        try { navigator.clipboard.writeText(v).then(done, function () { selectText(dd); }); } catch (e) { selectText(dd); }
      });
      wrap.appendChild(b);
    } else { wrap.appendChild(document.createElement("span")); }
    dl.appendChild(wrap);
  }

  function show(view) {
    $("donForm").hidden = view !== "form";
    $("donPay").hidden = view !== "pay";
    $("donThanks").hidden = view !== "thanks";
    $("donForm").scrollIntoView({ block: "start" });
  }
  function tab(which) {
    var upi = which === "upi";
    $("tabUpi").setAttribute("aria-selected", upi); $("tabBank").setAttribute("aria-selected", !upi);
    $("paneUpi").hidden = !upi; $("paneBank").hidden = upi;
  }
  $("tabUpi").addEventListener("click", function () { tab("upi"); });
  $("tabBank").addEventListener("click", function () { tab("bank"); });

  function buildPay() {
    var d = state.donor, unset = C.upi.id.indexOf("REPLACE") === 0;
    $("donSetup").hidden = !unset;
    $("sumWho").textContent = d.name + (state.freq === "monthly" ? " · first month" : " · one time");
    $("sumAmt").textContent = fmt(state.amount);

    var upi = $("upiDetails"); upi.innerHTML = "";
    row(upi, "UPI ID", C.upi.id, true);
    row(upi, "Amount", fmt(state.amount), false);
    row(upi, "Payment note", state.ref, true);

    var bank = $("bankDetails"); bank.innerHTML = "";
    Object.keys(C.bank).forEach(function (k) { row(bank, k, C.bank[k], k !== "Bank and branch"); });
    row(bank, "Amount", fmt(state.amount), false);
    row(bank, "Remarks", state.ref, true);

    $("donPayNote").textContent = "Put the payment note in your UPI or bank remarks so we can match your payment and send your receipt." +
      (state.freq === "monthly" ? " We will email you a link to set up the monthly repeat after this first payment." : "");

    var qr = $("donQr"); qr.innerHTML = "";
    if (!unset && window.QRCode) {
      var link = "upi://pay?pa=" + encodeURIComponent(C.upi.id) + "&pn=" + encodeURIComponent(C.upi.payeeName) +
        "&am=" + state.amount + "&cu=INR&tn=" + encodeURIComponent(state.ref);
      try { new QRCode(qr, { text: link, width: 176, height: 176, colorDark: "#000000", colorLight: "#ffffff" }); }
      catch (e) { qr.textContent = "QR could not load. Use the UPI ID below."; }
    } else {
      qr.textContent = unset ? "QR appears once the UPI ID is set." : "QR could not load. Use the UPI ID below.";
    }
  }

  $("donForm").addEventListener("submit", function (e) {
    e.preventDefault();
    if (!validate()) {
      var bad = document.querySelector(".don-err:not(:empty)");
      if (bad) { var f = bad.parentElement.querySelector("input"); if (f) f.focus(); }
      return;
    }
    state.donor = {
      name: $("donName").value.trim(), email: $("donEmail").value.trim(),
      phone: $("donPhone").value.trim(), pan: $("donPan").value.trim().toUpperCase()
    };
    state.ref = "NGI" + Date.now().toString(36).toUpperCase().slice(-6);
    buildPay(); tab("upi"); show("pay");
  });
  $("donEdit").addEventListener("click", function () { show("form"); });
  $("donAgain").addEventListener("click", function () { show("form"); });

  $("donPaid").addEventListener("click", function () {
    var d = state.donor;
    if (C.endpoint) {
      var meta = document.querySelector('meta[name="csrf-token"]');
      var headers = { "Content-Type": "application/json", "Accept": "application/json" };
      if (meta) headers["X-CSRF-TOKEN"] = meta.getAttribute("content");
      try {
        fetch(C.endpoint, { method: "POST", headers: headers,
          body: JSON.stringify({ ref: state.ref, amount: state.amount, frequency: state.freq, donor: d }) }).catch(function () {});
      } catch (e) {}
    }
    $("thanksName").textContent = ", " + d.name.split(" ")[0];
    $("thanksMsg").textContent = "We will match your payment (ref " + state.ref + ") and email your receipt to " + d.email + "." +
      (state.freq === "monthly" ? " Watch for a second email with the monthly repeat link." : "");
    show("thanks");
  });

  refresh();
})();
</script>
@endsection