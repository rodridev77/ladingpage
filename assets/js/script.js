const BASE_URL = "http://127.0.0.1/LandingpageCopia/";

$(function() {
    $('#mod-endereco').on('change', function() {
        if (this.checked) {
            $("#endereco").prop('disabled', false);
        } else {
            $("#endereco").prop('disabled', true);
        }
    });
});

$('.search-header').on('click',function () {
    $('.navbar-form').toggleClass('show');
  })

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("main-slider");
    var dots = document.getElementsByClassName("demo");
    
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-white";
}

var slideIndex2 = 1;
showDivs2(slideIndex2);

function plusDivs2(m) {
    showDivs2(slideIndex2 += m);
}

function currentDiv2(m) {
    showDivs2(slideIndex2 = m);
}

function showDivs2(m) {
    var j;
    var y = document.getElementsByClassName("secundary-slider");
    
    if (m > y.length) {slideIndex2 = 1}
    if (m < 1) {slideIndex2 = y.length}
    for (j = 0; j < y.length; j++) {
        y[j].style.display = "none";  
    }
   
    y[slideIndex2-1].style.display = "block";  
}

$(function() {
    let errorMessage = '<div class="form-error">Preencha o campo</div>';
    let success = true;
    let inputName = $("input[name='name']");
    let inputEmail = $("input[name='email']");
    let inputSubject = $("select[name='subject']");
    let textMessage = $(".contact-message");

    inputName.blur(function() {
        if (!inputName.val() || inputName.val().length < 3) {
            if ($(".form-error").length == 0) {
                inputName.after(errorMessage);
            }
            success = false;
            $(inputName).focus();
            return;
        } else {
            success = true;
            $(".form-error").remove();
        }
    });

    inputEmail.blur(function() {
        if (!inputEmail.val() || inputEmail.val().length < 6) {
            if ($(".form-error").length == 0) {
                inputEmail.after(errorMessage);
            }
            success = false;
            $(inputEmail).focus();
            return;
        } else {
            success = true;
            $(".form-error").remove();
        }
    });

    inputSubject.change(function() {
        if (!inputSubject.val() || inputSubject.val() == 'Assunto') {
            if ($(".form-error").length == 0) {
                inputSubject.after(errorMessage);
            }
            success = false;
            $(inputSubject).focus();
            return;
        } else {
            success = true;
            $(".form-error").remove();
        }
    });

    textMessage.blur(function() {
        if (!textMessage.val() || textMessage.val().length < 3) {
            if ($(".form-error").length == 0) {
                textMessage.after(errorMessage);
            }
            success = false;
            $(textMessage).focus();
            return;
        } else {
            success = true;
            $(".form-error").remove();
        }
    });

    $("#form-submit").click(function(event) {
        event.preventDefault();
        let name = $("input[name='name']").val();
        let email = $("input[name='email']").val();
        let subject = $("select[name='subject']").val();
        let message = $(".contact-message").val();

        if ((name.length == 0) || (email.length == 0) || (subject == 'Assunto') || (message.length == 0)) {
            success = false;
        }
        
        if (success) {
            $.ajax({
                url: BASE_URL + "contact/store",
                type:"POST",
                crossDomain: true,
                contentType: "application/json",
                data: JSON.stringify({name:name, email:email, subject:subject, message:message}),
                success: function(response) { 
                    let icon = 'success';
                    
                    if (response.success === false)
                        icon = 'error'
                    if (response.success === true) {
                        $("input[type='text'], input[type='email'], textarea").each(function() {
                            $(this).val('');
                        });
                        $("select option[value='Assunto']").prop("selected","selected");
                        $("textarea[name='message']").val('');
                    }
    
                    Swal.fire({
                    position: 'top-end',
                    icon: icon,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500
                    })
                }
            });
        }
    });

    $("#search-form").click(function(event) {
        event.preventDefault();

        let searchTerm = $("input[name='search-term']").val();

        if ((searchTerm == '') || (searchTerm.length < 3)) {
            return;
        }
        
        if (success) {
            $.ajax({
                url: BASE_URL + "contact/search",
                type: "GET",
                crossDomain: true,
                contentType: "application/json",
                data: JSON.stringify({search:searchTerm}),
                success: function(response) {
                    let icon = 'success';
                    
                    // if (data.success === true) {
                    //     $("input[name='search-term'']").val('');
                    // }
                    let searchResult = 
                        '<div class="container whous-article search-result" style="display:flex; flex-direction:column">'+
                            '<h1 style="width="100%;margin-bottom:200px">Resultados para a busca: </h1>'+
                            '<div class="search-content"><p style="font-size:30px!important;color:red">'+response.result+'</p></div>'+
                        '</div>';

                    $("#template-main").html(searchResult);
                }
            });
        }
    });
});
