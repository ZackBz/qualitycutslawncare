
@if(Session::has('Success'))
<notification>{{ Session::get('Success') }}</notification>
@endif












<form class="small-sect" action="/contact" method="post" style="width: 100%;">
  {{ csrf_field() }}
  <h1 class="is-size-1">Request an estimate:</h1>
  <div class="field">
    <label class="label">Name:</label>
    <div class="control">
      <input class="input" type="text" placeholder="Enter Name" name="name" required>
    </div>
  </div>

  <div class="field">
    <label class="label">Phone Number:</label>
    <div class="control">
      <input class="input" type="tel" pattern="^\d{3}[- ]?\d{3}[- ]?\d{4}$" placeholder="Enter Phone Number" name="phone" required oninvalid="this.setCustomValidity('Phone format should be 123-123-1234')"
    oninput="setCustomValidity('')">
    </div>
  </div>

  <div class="field">
    <label class="label">Email:</label>
    <div class="control">
      <input class="input" type="email" placeholder="Enter Email" name="email">
    </div>
  </div>

  <div class="field">
    <label class="label">Address:</label>
    <div class="control">
      <input class="input" type="text" placeholder="Enter Address" required name="field">
    </div>
  </div>

  <div class="field">
    <label class="label">Property Type:</label>
    <div class="control">
      <label class="radio">
        <input type="radio" name="property"  value="residential" required>
        Residential
      </label>
      <label class="radio">
        <input type="radio" name="property" value="commerical" required>
        Commerical
      </label>
    </div>
  </div>

  <div class="field">
    <label class="label">Message:</label>
    <div class="control">
      <textarea class="textarea" placeholder="Enter Message" name="message" required></textarea>
    </div>
  </div>


  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
</form>
