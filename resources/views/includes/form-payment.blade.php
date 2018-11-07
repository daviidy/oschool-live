<style media="screen">
.checkout {
  max-width: 24rem;
  margin-left: auto;
  margin-right: auto;
  background-color: #ECECEE;
  border-radius: .25rem;
  box-shadow: 0 0 8em #373D46;
  min-width: 20rem;
}
.checkout::after {
  clear: both;
  content: "";
  display: block;
}
.checkout__inner {
  max-width: 20rem;
  margin-left: auto;
  margin-right: auto;
  bottom: 2em;
  position: relative;
}
.checkout__inner::after {
  clear: both;
  content: "";
  display: block;
}

.card2 {
  border-radius: 1rem;
  color: #ECECEE;
  font-family: 'Droid Sans Mono', monospace;
  height: 12.611rem;
  margin-bottom: 2rem;
  position: relative;
  text-transform: uppercase;
  width: 20rem;
}
.card2__front {
  height: 50%;
  padding: .5rem 1.5rem 0;
  position: relative;
  top: 50%;
}
.card2__front:before, .card2__front:after {
  content: "";
  bottom: 2rem;
  color: #9EA1A7;
  font-size: .5rem;
  position: absolute;
}
.card2__front:before {
  content: "Card Holder";
}
.card2__front:after {
  content: "Expires";
  right: 1.5rem;
}
.card2__logo {
  background-image: url("https://s32.postimg.org/9g0hrlhyt/visa_logo.png");
  background-position: center center;
  background-repeat: no-repeat;
  background-size: contain;
  height: 2.75rem;
  position: absolute;
  width: 4rem;
  z-index: 3;
}
.card2__logo.top-right {
  top: -6rem;
  right: 1rem;
}
.card2__logo.bottom-right {
  bottom: .75rem;
  right: 1rem;
}
.card2__chip {
  background: url("http://s32.postimg.org/bs9qd2q05/card_chip.png") no-repeat center center;
  background-size: cover;
  height: 3rem;
  left: 1.4rem;
  position: absolute;
  top: -3rem;
  width: 3rem;
}
.card2__number {
  font-size: 1.325rem;
  left: 1.5rem;
  letter-spacing: .1rem;
  position: absolute;
}
.card2__holder-name {
  bottom: 1rem;
  display: inline-block;
  float: left;
  font-size: .8rem;
  left: 1.5rem;
  max-width: 14rem;
  overflow: hidden;
  position: absolute;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.card2__exp {
  bottom: 1rem;
  display: inline-block;
  float: right;
  font-size: .8rem;
  position: absolute;
  right: 1.5rem;
}
.card2__strip {
  background-color: #222;
  height: 2rem;
  margin-top: 1.5rem;
  width: 100%;
}
.card2__ccv {
  background-color: #fff;
  border-radius: .25rem;
  color: #373D46;
  font-size: .75rem;
  font-style: italic;
  font-weight: 600;
  height: 1.5rem;
  line-height: 1.5rem;
  margin: 1.5rem auto 0;
  max-width: 17rem;
  padding-right: .5rem;
  position: relative;
  text-align: right;
}
.card2__ccv:before {
  content: "CCV";
  color: #ECECEE;
  font-size: .5rem;
  font-style: normal;
  font-weight: 400;
  position: absolute;
  right: .5rem;
  top: -1.25rem;
}

.flip {
  -webkit-transition: 250ms ease;
  transition: 250ms ease;
  border-radius: 1rem;
  height: 100%;
  position: absolute;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  width: 100%;
}
.flip__front, .flip__back {
  -webkit-transition: 250ms ease;
  transition: 250ms ease;
  background-color: #373D46;
  border-radius: 1rem;
  left: 0;
  height: 100%;
  opacity: 0;
  position: absolute;
  top: 0;
  width: 100%;
  visibility: hidden;
  z-index: 1;
}
.flip__front.shown, .flip__back.shown {
  opacity: 1;
  visibility: visible;
  z-index: 2;
}
.flip__back {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.form {
  padding: 0 1rem;
}
.form > * + * {
  margin-top: 1rem;
}
.form__label {
  display: block;
  font-size: .75rem;
  margin-bottom: .25rem;
  max-width: 8rem;
  text-transform: uppercase;
}
.form__input, .form__select, .form__btn {
  background-color: transparent;
  border: 1px solid rgba(158, 161, 167, 0.5);
  border-radius: .25rem;
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 1rem;
  font-weight: 500;
  height: 2rem;
  line-height: normal;
  outline: none;
  margin: 0;
  padding: .25rem;
  appearance: none;
  -moz-appearance: none;
  -webkit-appearance: none;
}
.form__input:active, .form__input:hover, .form__input:focus, .form__select:active, .form__select:hover, .form__select:focus, .form__btn:active, .form__btn:hover, .form__btn:focus {
  outline: none;
}
.form__input.small, .form__select.small {
  float: left;
  display: block;
  margin-right: 2.35765%;
  width: 23.23176%;
}
.form__input.small:last-child, .form__select.small:last-child {
  margin-right: 0;
}
.form__input.large, .form__select.large {
  width: 100%;
}
.form__btn.submit {
  width: 100%;
  background-color: #0659f4;
  box-shadow: 0 2px 4px #9EA1A7;
  color: #ECECEE;
  cursor: pointer;
  height: auto;
  margin-top: 1rem;
  padding: 1rem;
  position: relative;
  text-transform: uppercase;
}
.form__btn i {
  position: relative;
  top: .05rem;
  margin-left: .5rem;
}







</style>

<!-- Checkout-->
<div class="checkout" id="modal" style="display: none;">
  <!-- Checkout content-->
  <div class="checkout__inner">
    <!-- Credit card-->
    <div class="card2">
      <!-- Flip container-->
      <div class="flip">
        <!-- Flip front-->
        <div class="flip__front shown">
          <!-- Card front-->
          <div class="card2__front">
            <!-- Card logo-->
            <div class="card2__logo top-right"></div>
            <!-- Card chip-->
            <div class="card2__chip"></div>
            <!-- Card number-->
            <div class="card2__number"></div>
            <!-- Card name-->
            <div class="card2__holder-name"></div>
            <!-- Card expiration-->
            <div class="card2__exp"></div>
          </div>
        </div>
        <!-- Flip back-->
        <div class="flip__back">
          <!-- Card back-->
          <div class="card2__back">
            <!-- Card strip-->
            <div class="card2__strip"></div>
            <!-- Card ccv-->
            <div class="card2__ccv"></div>
            <!-- Card logo-->
            <div class="card2__logo bottom-right"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Checkout form-->
    <form class="form">
      <!-- Card number-->
      <fieldset>
        <label class="form__label" for="card-number-1">Card number</label>
        <input class="form__input small" id="card-number-1" type="tel" minlength="4" maxlength="4" placeholder="1234"/>
        <input class="form__input small" id="card-number-2" type="tel" maxlength="4" placeholder="5678"/>
        <input class="form__input small" id="card-number-3" type="tel" maxlength="4" placeholder="9000"/>
        <input class="form__input small" id="card-number-4" type="tel" maxlength="4" placeholder="4321"/>
      </fieldset>
      <!-- Card name-->
      <fieldset>
        <label class="form__label" for="card-holder-name">Card Holder</label>
        <input class="form__input large" id="card-holder-name" type="text" placeholder="Name"/>
      </fieldset>
      <!-- Card expiration-->
      <fieldset>
        <label class="form__label" for="card-exp-month">Expiration Date</label>
        <select class="form__select small" id="card-exp-month">
          <option value="">MM</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
        <select class="form__select small" id="card-exp-year">
          <option value="">YYYY</option>
          <option value="16">2016</option>
          <option value="17">2017</option>
          <option value="18">2018</option>
          <option value="19">2019</option>
          <option value="20">2020</option>
          <option value="21">2021</option>
          <option value="22">2022</option>
          <option value="23">2023</option>
          <option value="24">2024</option>
          <option value="25">2025</option>
        </select>
      </fieldset>
      <!-- Card ccv-->
      <fieldset>
        <label class="form__label" for="card-ccv">CCV</label>
        <input class="form__input small" id="card-ccv" type="tel" maxlength="3" placeholder="123"/>
      </fieldset>
      <!-- Form submit-->
      <fieldset>
        <button class="form__btn submit">Submit Payment<i class="fa fa-lock"></i></button>
      </fieldset>
    </form>
  </div>
</div>
