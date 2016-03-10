<?php
$title = "Cotización de Precios | HoteleroTech";
include("includes/header.php");

?>

<!-- End Section Header style3 -->

<!-- Start Pages Title Style1 -->

<section id="Page-title" class="Page-title-Style1">
	<div class="container inner-Pages">
    	<div class="row">
            <div class="Page-title">
				<div class="col-md-6 Title-Pages">
                	<h2>Cotización</h2>
                </div>
                <div class="col-md-6 Catogry-Pages">
					<p>Usted está aquí :  <a href="#">Inicio</a> / <a href="#">Cotización</a></p>
                </div>
            </div>
 		</div>
    </div>
</section>

<!-- End Pages Title Style1 -->


<!-- Start Contact -->

<section id="Contact" class="light-wrapper"> 
	<div class="container inner">
    	<div class="row">
        	<div class="col-md-12">
                <div class="title-section text-center">
                    <h3>Solicita una Cotización!</h3>
                    <div class="line-break"></div>
                </div>
                <div class="description-section text-center">
                    <p> Nuestro motor de reservas que te permitira cobrar NO SHOWS no tiene ningun costo mensual! unicamente $ 30 de instalacion!  No cobramos ninguna cantidad mensual por mantenimiento. Si estás interesado en conocer más sobre HoteleroTECH y nuestros precios, por favor solicita una cotización rellenando el siguiente formulario. 
Nuestro equipo se pondrá en contacto con usted en 24 horas.
</p>
                </div>
            </div>
        </div>

        <div class="divcod30"></div>
                    
        <div class="row">
			<div class="col-md-8">	
				<div class="Contact-Form">
                
					<form class="leave-comment contact-form" method="post" action="style/php/contact.php" id="cform" autocomplete="on">
                       
						<div class="Contact-us">
							<div class="form-input">
								<input type="text" placeholder="Nombre" required>
							</div>
							<div class="form-input">
								<input type="email" placeholder="Email" required>
							</div>
                            
                            <div class="form-input" style="margin-right:30px;">
								<input type="text" placeholder="Télefono" required>
							</div>
                            
                            <div class="form-input">
								<input type="text" placeholder="Compañia*" required>
							</div>
                            
                            
							<div class="form-textarea">
								<textarea class="txt-box textArea" name="message" cols="40" rows="7" id="messageTxt" placeholder="Mensaje" spellcheck="true" required></textarea>
							</div>
							<div class="form-submit">
								<input type="submit" class="btn btn-large main-bg" value="Enviar">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<div class="Contact-Info">
					<div class="Title-Contact">
						<h3>Datos de Contacto:</h3>
					</div>
					<div class="Block-Contact">
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>
								<p>Calle 24 de septiembry Tobias Trujillo E, Tababela, Quito - Ecuador</p>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<p>+593 995470312</p>
							</li>
							<li>
								<i class="fa fa-fax"></i>
								<p>+593 22150100</p>
							</li>
							<li>
								<i class="fa fa-envelope"></i>
								<p>info@hotelerotech.com</p>
							</li>
						</ul>	
					</div>					
				</div>
				
			</div>

        </div>
    </div>
</section>

<!-- End Contact -->




<?php
include("includes/footer.php");
?>
