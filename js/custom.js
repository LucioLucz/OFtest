/* HTML document is loaded. DOM is ready.
-------------------------------------------*/
$(function(){

    /* start typed element */
    //http://stackoverflow.com/questions/24874797/select-div-title-text-and-make-array-with-jquery
    var subElementArray = $.map($('.sub-element'), function(el) { return $(el).text(); });    
    $(".element").typed({
        strings: subElementArray,
        typeSpeed: 30,
        contentType: 'html',
        showCursor: false,
        loop: true,
        loopCount: true,
    });
    /* end typed element */

    /* Smooth scroll and Scroll spy (https://github.com/ChrisWojcik/single-page-nav)    
    ---------------------------------------------------------------------------------*/ 
    $('.templatemo-nav').singlePageNav({
        offset: $(".templatemo-nav").height(),
        filter: ':not(.external)',
        updateHash: false
    });

    /* start navigation top js */
    $(window).scroll(function(){
        if($(this).scrollTop()>58){
            $(".templatemo-nav").addClass("sticky");
        }
        else{
            $(".templatemo-nav").removeClass("sticky");
        }
    });
    
    /* Hide mobile menu after clicking on a link
    -----------------------------------------------*/
    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });
	
	$('.ver_mas').click(function(){
		 var item=$(this).data('div');
		 
		 if($("#"+item).hasClass("active")){
			 
			  //$("#"+item).animate('height',310);
		 	  $("#"+item).removeClass('active');
			  $(this).html('Leer más');
			
		 }else{
				 
        	 //$("#"+item).animate('height','auto');
		 	 $("#"+item).addClass('active');
			  $(this).html('Cerrar');
			
		 }
    });


/* ***** MODAL CATALOGO ***** */

    		// Get the modal
		let modal = document.getElementById("myModal");

        let modalContent = document.getElementsByClassName("modal-content")[0];

		// Get the button that opens the modal
		// let btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		let span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		// btn.onclick = function() {
		// 	modal.style.display = "block";
		// }

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	
	
// TEST MODAL 
$('.ver_modal').click(function(){
    let item=$(this).data('div');
    let contenido = document.getElementById(item).innerHTML;
    modalContent.innerHTML = `<div class="team-wrapper"> ${contenido}` + `</div><span class="close" id="cerrarModal">&times;</span>`;
    let modalVerMas = $(".modal-content .team-wrapper p.boton")[0];
    modalVerMas.style.display="none";
    modal.style.display = "block";
    let cerrarModal = document.getElementById("cerrarModal");
    cerrarModal.onclick = function() {
        modal.style.display = "none";
    }
});

/* ***** MODAL CATALOGO Fin ***** */


    /* end navigation top js */

    $('body').bind('touchstart', function() {});

    /* wow
    -----------------*/
    new WOW().init();
});

/* start preloader */
$(window).load(function(){
	$('.preloader').fadeOut(1000); // set duration in brackets    
});
/* end preloader */

