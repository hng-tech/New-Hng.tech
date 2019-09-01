

$(document).ready(() => {
    // price modal
   
    
        let slick = $('.bi-tracks-slick').css('display')
    if (slick == 'flex'){

    }else{
        $('.bi-tracks-slick').slick({
            dots: true,
            arrows: true,
            center: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
            ]
          })
    }


    // create invite modal and send invite mail
   
    $('#invite').click(()=> {
        $('#priceModal').modal('show');
        $('#exampleModalLabel').html('Invite a Friend')
        $('.modal-body').html('')
        $('.modal-body').append(`
            <p> Input the email address you want to invite </p>
            <form method="POST" action="" id="invite">
                <div class="form-group sp-form">
                    <input type="email" class="form-control" name="email" id="invitee" required>
                    <span class="floating-label"> Email </span>
                    <p class="modal-error">
                        <small> Please fill the email field</small>
                    <p>
                </div>
                <div class="form-group sp-form">
                    <input type="text" class="form-control" name="name" id="inviter" required>
                    <span class="floating-label"> Your Name </span>
                    <p class="modal-error">
                        <small> Please fill the your name field</small>
                    <p>
                </div>
            
            </form>
        `)
        $('.modal-footer').html('')
        $('.modal-footer').append(`
            <button id="sendInvite" type="button" class="btn btn-primary">Invite</button>
        `)

        $('#sendInvite').click(()=>{
            let email = $('#invitee').val()
            let name = $('#inviter').val()
            if(email == '' || name == ''){
                $('.modal-error').css('display', 'block')
            }else{
                let data = {
                    'email' : email,
                    'name' : name
                }
                $.post({
                    url: '../functions/mail.php',
                    data: data,
                    success : (response) => {
                        console.log(response)
                        $('#priceModal').modal('hide');
                    } 
                })
            }
        })
    })


    let circle = $('.ap-circles').css('user-select')
    if (circle != 'none'){
        $('.ap-circles').slick({
            dots: true,
            arrows: true,
            center: true,
            autoplay:true,
        })
    }
    let flow = $('.ap-works-info').css('user-select')
    if (flow != 'none'){
        $('.ap-works-info').slick({
            dots: true,
            arrows: true,
            center: true,
            autoplay:true,
        })
    }
    

})


