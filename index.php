<?php
@$response=file_get_contents("http://covid19-india-adhikansh.herokuapp.com/summary");
//echo $response;
@$data=json_decode($response,true);
@$total_confirmed=$data["Total Confirmed cases"];
@$cured=$data["Cured/Discharged/Migrated"];
@$death=$data["Death"];



//state wise data
@$response=file_get_contents("http://covid19-india-adhikansh.herokuapp.com/states");
//echo $response;
@$data=json_decode($response,true);








?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Corona Tracker</title>
    <link rel="stylesheet" href="index2.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> 
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <style>

    </style>



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
							 <script>
					$(document).ready(function(){
					  // Add smooth scrolling to all links
					  $("a").on('click', function(event) {

						// Make sure this.hash has a value before overriding default behavior
						if (this.hash !== "") {
						  // Prevent default anchor click behavior
						  event.preventDefault();

						  // Store hash
						  var hash = this.hash;

						  // Using jQuery's animate() method to add smooth page scroll
						  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
						  $('html, body').animate({
							scrollTop: $(hash).offset().top
						  }, 800, function(){
					   
							// Add hash (#) to URL when done scrolling (default click behavior)
							window.location.hash = hash;
						  });
						} // End if
					  });
					});
					</script>
</head>

<body>
   
   
   
   
   <!--Main Navigation-->
<header>

    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark grey ">
        <a class="navbar-brand" href="#"><strong>COVID-19</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#Overview">Overview </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Prevention">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Symptoms">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Stats">Stats</a>
        </li>
      </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </nav>

</header>
<!--Main Navigation-->



   
   
   
   
   
   
	
	

    <div class="image">
        <img src="corona.jpg">
    </div>

    <div class="container">
	<br><br>
	   <section id="overview">
	   <br><br>
	   <h2>Overview</h2>
        <div class="overview samedata">

            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
            <p>
                Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and
                recover
                without requiring special treatment. Older people, and those with underlying medical problems like
                cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop
                serious
                illness.
            </p>
            <p>
                The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the
                disease it
                causes and how it spreads. Protect yourself and others from infection by washing your hands or using an
                alcohol
                based rub frequently and not touching your face.
            </p>

            <p>

                The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an
                infected
                person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example,
                by
                coughing into a flexed elbow).
            </p>
            <p>

                At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing
                clinical trials evaluating potential treatments. WHO will continue to provide updated information as
                soon as
                clinical findings become available.</p>
            </p>
        </div>
		</section>
		
		<section id="prevention">
		<br><br>
		 <h2>Prevention</h2>
		 
        <div class="prevention samedata">
            <p>To prevent infection and to slow transmission of COVID-19, do the following:
            </p>
            <ul>
                <li>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.
                    <br></li>
                <li>Maintain at least 1 metre distance between you and people coughing or sneezing.
                    <br></li>
                <li>Avoid touching your face.
                    <br></li>
                <li>Cover your mouth and nose when coughing or sneezing.
                    <br></li>
                <li>Stay home if you feel unwell.
                    <br></li>
                <li>Refrain from smoking and other activities that weaken the lungs.
                    <br></li>
                <li>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of
                    people.

            </ul>
        </div>
		</section>
		
		<section id="symtoms">
		<br><br>
		 <h2>Symptoms</h2>
        <div class="symptoms samedata">
            <p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate
                illness and recover without hospitalization.</p>
            <p>Most common symptoms: <br></p>
            <ul>
                <li>fever.</li>
                <li>dry cough.</li>
                <li>tiredness.</li>

            </ul>
            <p>Less common symptoms: <br></p>
            <ul>
                <li>aches and pains.</li>
                <li>sore throat.</li>
                <li>diarrhoea.</li>
                <li>conjunctivitis.</li>
                <li>headache.</li>
                <li>loss of taste or smell.</li>
                <li>a rash on skin, or discolouration of fingers or toes.</li>
            </ul>
            <p>Serious symptoms: <br></p>
            <ul>
                <li>difficulty breathing or shortness of breath.</li>
                <li>chest pain or pressure.</li>
                <li>loss of speech or movement.</li>
            </ul>

            <p>Seek immediate medical attention if you have serious symptoms.&nbsp; Always call before visiting your
                doctor or health facility.&nbsp;</p>
            <p>People with mild symptoms who are otherwise healthy should manage their symptoms at home.&nbsp;</p>
            <p>On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however
                it can take up to 14 days.&nbsp;</p>
        </div>
		</section>
    </div>
  <section id="stats">
  <br>
    <div class="coronastats">
        <div class="time">
            <h5>
			<?php
			date_default_timezone_set('Asia/Kolkata');
			echo date('d M ,h:i A ').'IST';
			
			?>
			</h5>
        </div>
        <div class="Level">
            <div class="confirmed level-item is-cherry fadeInUp">
                <h5>Confirmed</h5>
               
                <h1><?php echo $total_confirmed; ?></h1>
            </div>
            <div class="level-item is-blue fadeInUp" >
                <h5 class="heading">Active</h5>
               
                <h1 class="title has-text-info"><?php echo $total_confirmed-$cured-$death  ?></h1>
            </div>
            <div class="level-item is-green fadeInUp" >
                <h5 class="heading">Recovered</h5>
               
                <h1 class="title has-text-success"><?php echo $cured;   ?></h1>
            </div>
            <div class="level-item is-gray fadeInUp" >
                <h5 class="heading">Deceased</h5>
               
                <h1 class="title has-text-grey"><?php echo $death; ?></h1>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th class="state-heading">
                        <div class="heading-content"><abbr title="State">State/UT</abbr></div>
                    </th>
                    <th>
                        <div class="heading-content"><abbr class="" title="confirmed">Confirmed</abbr></div>
                    </th>
                    <th>
                        <div class="heading-content"><abbr class="" title="active">Active</abbr></div>
                    </th>
                    <th>
                        <div class="heading-content"><abbr class="" title="recovered">Recovered</abbr></div>
                    </th>
                    <th>
                        <div class="heading-content"><abbr class="" title="deaths">Deceased</abbr>
                    </th>

                </tr>
                </thead>

            <tbody>
			<?php
			
			
			
			   foreach($data['state'] as $key=>$value)
					{
						
					?>
			
                <tr class="state is-highlighted">
                    <td>
                        <div class="title-chevron"><span ><?php echo $value['name']; ?></span></div>
                    </td>
                    <td><span class="total"><?php  echo $value['confirmed']; ?></span></td>
                    <td><span class="total"><?php  echo $value['confirmed']-$value['cured']-$value['death']; ?></span></td>
                    <td><span class="total"><?php  echo $value['cured']; ?></span></td>
                    <td><span class="total"><?php  echo $value['death']; ?></span></td>
                </tr>
				
				<?php
					}
				?>
            </tbody>
          
        </table>
    </div>
	</section>
	 
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
				<script>
			var prevScrollpos = window.pageYOffset;
			window.onscroll = function() {
			var currentScrollPos = window.pageYOffset;
			  if (prevScrollpos > currentScrollPos) {
				document.getElementById("navbar").style.top = "0";
			  } else {
				document.getElementById("navbar").style.top = "-1500px";
			  }
			  prevScrollpos = currentScrollPos;
			}
			</script>
</body>

</html>
