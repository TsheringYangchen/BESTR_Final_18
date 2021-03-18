
    @extends('layouts.app')
    @section('content')
    <style>
      *
      {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body
      {
        width: 100%;
        height: 100vh;
        display: grid;
        align-items: center;
      }

      .contact-in
      {
        width: 90%;
        height: auto;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px #666;
      }
    .contact-map
    {
      width: 100%;
      height: auto;
      flex: 50%;
    }

    .contact-map iframe
    {
      width: 100%;
      height: 100%;
    }
    .contact-form
    {
      width: 100%;
      height: 300px;
      flex: 50%;
      text-align: center;
    }

    .contact-form h4
    {
      margin-bottom: 10px;
    }
    </style>
      
      <div class="contact-in">
        <div class="contact-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.89059566602!2d89.63232821421407!3d27.472665182889696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e1941a00697d83%3A0x882b6118b900cc7d!2sMinistry%20of%20Economic%20Affairs!5e0!3m2!1sen!2sbt!4v1616013759441!5m2!1sen!2sbt" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div><br>
          <div class="contact-form">       
                 <div>
                  <h5>Contact Us:</h5><br>
                    <i class="fas fa-phone text-info">&nbsp;+975-2-322407/325588</i><br><br>
                            
                    <i class="fas fa-envelope text-info">&nbsp;dot@moea.gov.bt</i><br><br>
                          
                    <i class="fas fa-atlas text-info">&nbsp;https:/www.moea.gov.bt</i><br><br>

                    <i class="fab fa-facebook text-info">&nbsp;Department-of-Trade</i>
                </div>
          </div>
      </div>

      
    @endsection