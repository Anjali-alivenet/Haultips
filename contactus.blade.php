@extends('layouts.front-body')
@section('title')
    Contact Us
@endsection

@section('body')


    <div class="contact-slide iner-slide">

        <h1>Contact Us</h1>

    </div>


    <div class="container">
        <div class="row">

            <h1>Let's Talk!</h1>

            <div class="home-text">Contact us today to enquire about our services</div>

        </div>
    </div>


    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">

                <form id="contact-form" method="post" action="#" role="form">
                    <div id="msgStatus">

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">

                            <input id="form_name" type="text" name="name" class="form-control form-text" placeholder="Please enter your Full Name *" required="required" data-error="Firstname is required.">

                            <input id="form_phone" type="text" name="phone" class="form-control form-text" placeholder="Please enter your Phone *" required="required" data-error="Lastname is required.">


                            <input id="form_email" type="email" name="email" class="form-control form-text" placeholder="Please enter your Email *" required="required" data-error="Valid email is required.">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea id="form_message" name="message" class="form-control form-text1" placeholder="Message for me *" rows="4" required data-error="Please,leave us a message."></textarea>

                            <div> <input type="submit" class="btn btn-danger btn-lg" onClick= "submitContact();" value="Get A Quote"></div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                </form>

            </div><!-- /.8 -->

        </div> <!-- /.row-->
        <br>

        <hr>
        <br>


        <div class="col-lg-4"><div class="form-foot-text-hd"><strong>QuickBooks ProAdvisor</strong></div>
            <div class="form-foot-text"> Lorem ipsum 525 The Print Rooms<br>
                425 Union Street London SE1 0LH
                Lorem ipsum</div></div>

        <div class="col-lg-4">
            <div class="form-foot-text-hd"><strong>Sales</strong></div>
            <div class="form-foot-text"><strong>Tel:</strong>234-567-8910<br>
                <strong>Email:</strong> info@quickbooks.com</div></div>

        <div class="col-lg-4"><div class="form-foot-text-hd"><strong>Support</strong></div>
            <div class="form-foot-text"><strong>Email:</strong>support@quickbooks.com<br>
                <strong>Phone:</strong> 0234-567-8901</div></div>



    </div>
    <br>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26372472.32939229!2d-113.73907545808902!3d36.20800122385796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1498806024719" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>



@endsection

@section('script')

    <script>

        $(document).ready(function () {

            $('.bookingform').attr('style','display:none');
        })
        
        function submitContact(){
           var name=$('#form_name').val();
           var phone=$('#form_phone').val();
           var email=$('#form_email').val();
           var message=$('#form_message').val();
           
           $.ajax({
                    url:"submitContact",
                    type:"post",
                    data:{"_token":"{{ csrf_token() }}","name":name, "phone":phone, "email":email, "message":message},
                    success:function (res)
                    {
                      $('#msgStatus').html(res);                       
                    }
                });
        }

    </script>

    @endsection