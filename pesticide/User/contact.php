<?php 
require('top.php');					
?>

        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">SEND A MAIL</h2>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" id="name" name="name" placeholder="Your Name*">
                                        <input type="email" id="email" name="email" placeholder="Email*">
										<input type="email" id="mobile" name="mobile" placeholder="Mobile*">
                                    </div>
                                </div>
                                
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="button" onclick="send_message()" class="fv-btn">Send MESSAGE</button>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
      
<?php require('footer.php')?>        