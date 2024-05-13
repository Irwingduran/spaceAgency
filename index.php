<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <title>Space Agency</title>

  <link rel="stylesheet" href="style.css" />

</head>

<body>
	<div class="hero" id="hero">
		<h1>SpaceAgency</h1>
		<p>Flight Booking Space Travel and Tours</p>
	</div>

	<nav id="menu">
		<a href="#1">Mars</a>
		<a href="#2">Moon</a>
		<a href="#3">Titan</a>
		<a href="#4">Europa</a>

		<span class="indicador" id="indicador"></span>
	</nav>

	<div class="secciones">
		<div class="seccion" id="1">
        <div id="destinations"></div>
                <div id="crew"></div>
                <div id="technology"></div>
			</div>
		</div>

		<div class="seccion" id="2">
			<div>
            <div id="destinations"></div>
                <div id="crew"></div>
                <div id="technology"></div>
            </div>
		</div>

		<div class="seccion" id="3">
			<ddivclass="card">
				<div id="destinations"></div>
                <div id="crew"></div>
                <div id="technology"></div>
			</div>
		</div>

		<div class="seccion" id="4">
			<div class="card">
            <div id="destinations"></div>
                <div id="crew"></div>
                <div id="technology"></div>
			</div>
		</div>

		
	</div>

     <!-- Boostrap Section Book Start -->
  <section class="book" id="book">
    <div class="container">
    div class="main-text">
        <h1>Book</h1>
      </div>

      <!-- <div class="row"> -->
      <div class="col-md-12 py-3 py-md-0">
        <form action="book_flight.php" method="post">
          <div class="row">
            <div class="col-sm-6">
              <div class="personal-info form-control p-4">
                <h3>Personal Information</h3>
                <!-- Traveler's Full Name -->
                <div class="field">
                  <label for="travelers_name">Name <span class="required">*</span></label>
                  <input required type="text" name="travelers_name" id="travelers_name" class="form-control" />
                </div>
                <br />
                <!-- Gender -->
                <div class="field">
                  <label for="gender">Gender <span class="required">*</span></label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <br />
                <!-- Birthdate -->
                <div class="field">
                  <label for="birthdate">Birthday <span class="required">*</span></label>
                  <input required type="date" name="birthdate" id="birthdate" class="form-control" />
                </div>
                <br />
                <!-- Nationality -->
                <div class="field">
                  <label for="nationality">Nationality <span class="required">*</span></label>
                  <input required type="text" name="nationality" id="nationality" class="form-control" />
                </div>
                <br />
                <!-- Contact -->
                <div class="field">
                  <label for="contact_number">Contact Number <span class="required">*</span></label>
                  <input required type="tel" name="contact_number" id="contact_number" class="form-control" />
                </div>
                <br />
              </div>
            </div>
            <br />
            <div class="col-sm-6">
              <div class="flight-details form-control p-4">
                <h3>Flight Details</h3>
                <!-- Departure Airport -->
                <div class="field">
                  <label for="departure_airport">Departure Airport <span class="required">*</span></label>
                  <select id="departure_airport" name="departure_airport" class="form-control">
                    <option value="MNL">
                      Manila Ninoy Aquino International  (MNL)
                    </option>
                    <option value="CEB">
                      Mactan-Cebu International  (CEB)
                    </option>
                   
                  </select>
                </div>
                <br />
                <!-- Destination Airport -->
                <div class="field">
                  <label for="destination_airport">Destination Airport <span class="required">*</span></label>
                  <select id="destination_airport" name="destination_airport" class="form-control">
                    <optgroup label="France">
                      <option value="CDG">
                        Charles de Gaulle Airport (CDG)
                      </option>
                      <option value="ORY">Paris Orly Airport (ORY)</option>
                    </optgroup>
                    <optgroup label="Spain">
                      <option value="MAD">
                        Madrid Barajas Airport (MAD)
                      </option>
                      <option value="BCN">
                        Barcelona El Prat Airport (BCN)
                      </option>
                    </optgroup>
                    <optgroup label="United States">
                      <option value="JFK">
                        John F. Kennedy International Airport (JFK)
                      </option>
                      <option value="LAX">
                        Los Angeles International Airport (LAX)
                      </option>
                    
                    </optgroup>
                  </select>
                </div>
                <br />
                <!-- Departure Date -->
                <div class="field departure-date">
                  <label for="departure_date">Departure Date <span class="required">*</span></label>
                  <input required type="date" name="departure_date" id="departure_date" class="form-control" />
                </div>
                <br />
                <!-- Return Date -->
                <div class="field return-date">
                  <label for="return_date">Return Date <span class="required">*</span></label>
                  <input required type="date" name="return_date" id="return_date" class="form-control" />
                </div>
                <br />
                <!-- Preferred Cabin Class -->
                <div class="field preffered-cabin-class">
                  <label for="cabin_class">Preferred Cabin Class: <span class="required">*</span></label>
                  <select id="cabin_class" name="cabin_class" class="form-control">
                    <option value="economy">Economy</option>
                    <option value="business">Business</option>
                    <option value="first-class">First Class</option>
                  </select>
                </div>
                <br />
                <!-- Number of Passengers -->
                <div class="field adult-passengers">
                  <label for="passenger_adults">Number of Adults: <span class="required">*</span></label>
                  <input required type="number" id="passenger_adults" name="passenger_adults" min="0" value="1" class="form-control" />
                </div>
                <br />
                <!-- Number of Children -->
                <div class="field children-passengers">
                  <label for="passenger_children">Number of Children: <span class="required">*</span></label>
                  <input required type="number" id="passenger_children" name="passenger_children" min="0" value="0" class="form-control" />
                </div>
                <br />
                <!-- Number of Infants -->
                <div class="field infants-passengers">
                  <label for="passenger_infants">Number of Infants: <span class="required">*</span></label>
                  <input required type="number" id="passenger_infants" name="passenger_infants" min="0" value="0" class="form-control" />
                </div>
                <br />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="passport-info form-control p-4">
                <h3>Passport Info</h3>
                <div class="field">
                  <label for="passport_number">Passport Number: <span class="required">*</span></label>
                  <input required type="text" id="passport_number" name="passport_number" class="form-control" />
                </div>
                <br />
                <div class="field">
                  <label for="passport_expiration">Passport Expiration Date: <span class="required">*</span></label>
                  <input required type="date" id="passport_expiration" name="passport_expiration" class="form-control" />
                </div>
                <br />
                <div class="field">
                  <label for="country_of_issue">Country of Issue: <span class="required">*</span></label>
                  <input required type="text" id="country_of_issue" name="country_of_issue" class="form-control" />
                </div>
                <br />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="payment-info form-control p-4">
                <h3>Payment Info</h3>
                <div class="field">
                  <label for="cardholder_name">Cardholder Name: <span class="required">*</span></label>
                  <input required type="text" id="cardholder_name" name="cardholder_name" class="form-control" />
                </div>
                <br />
                <div class="field">
                  <label for="card_number">Card Number: <span class="required">*</span></label>
                  <input required type="text" id="card_number" name="card_number" class="form-control" />
                </div>
                <br />
                <div class="field">
                  <label for="expiration_date">Expiration Date: <span class="required">*</span></label>
                  <input required type="text" id="expiration_date" name="expiration_date" class="form-control" />
                </div>
                <br />
                <div class="field">
                  <label for="cvv">CVV: <span class="required">*</span></label>
                  <input required type="text" id="cvv" name="cvv" class="form-control" />
                </div>
                <br />
                <div class="field">
                  <label for="billing_address">Billing Address: <span class="required">*</span></label>
                  <textarea id="billing_address" name="billing_address" class="form-control"></textarea>
                </div>
                <br />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
              <button type="submit" id="book_flight" name="book_flight" class="submit btn btn-primary">Book Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- Boostrap Section Book End -->

  <footer id="footer">
    <h1>SpaceAgency</h1>
    <p>The company itself is a very successful company.</p>
    <div class="social-links">
      <i class="fa-brands fa-twitter"> </i>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-instagram"></i>
    </div>
    <div class="copyright">
      <p>&copy;Flight Booking Space Travel and Tours</p>
    </div>
  </footer>

	<script src="app.js"></script>
</body>
</html>