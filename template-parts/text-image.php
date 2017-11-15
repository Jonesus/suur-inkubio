<!-- Begin section -->
<style>
    
    html,body {
        width: 100%;
        height: 100%;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden; 
    }
    
    .page-section{
        padding-bottom: 0px;
    }
    
/*=====================================================================================   Style for jumbotron and it's divs
=====================================================================================*/
    
    .jumbotron {
        background: url(http://localhost/wp-content/themes/suurinkubio/assets/images/frontpage/etu.jpg) center center;
        background-size: cover;
        border-radius: 0;
        height: 800px;
        box-shadow: inset 0px 0px 0px 1000px rgba(35,172,120,0.7);
        margin-bottom: 0px;
        margin-right: 0px;
    }
    
    .jumbotron-text{
        font-size: 19px;
        letter-spacing: 2px;
        font-weight: lighter;
        color: white;
        text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
        margin-bottom: 0px;
        
    }
    
    h1{
        font-size: 4em
    }
    
    
/*=====================================================================================   End for jubotron styles
=====================================================================================*/
   
/*=====================================================================================   Style for twisted content
=====================================================================================*/
    
    .twist{
        margin-left: 0px;
        margin-right: 0px;
        box-shadow: 0px 0px 40px -6px #000;
    }
    
    .title{
        font-size: 35px;
        font-weight: bold;
    }
    
/*=====================================================================================   End for twisted content styles
=====================================================================================*/
    
/*=====================================================================================   Card-deck content styles
=====================================================================================*/
    .section2 {
        font-family: coves;
        font-weight: bold;
    }
    
    .flip-container {
        perspective: :1000px;
        margin: 25px;
    }
    

    .flip1.hover, .flip2.hover, .flip3.hover, .flip4.hover, .flip5.hover, .flip6.hover {
	   transform: rotateY(180deg);
    }
    
    .flip-container, .front, .back {
        width: 325px;
        height: 350px;
        transition: 0.6s;
        transform-style: preserve-3d;
        background-color: white;
        box-shadow: 0 5px 10px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        border-radius: 7px;
        position: relative;
        
    }
    
    h4 {
        margin-top: 15px;
    }
    
    .front, .back {
        backface-visibility: hidden;
        position: absolute;
        top:0;
        left: 0;
    }
    
    .front {
        z-index:1;
        transform: rotateY(0deg);
    }
    
    .image{
        width: 275px;
        height: 300px;
        margin-left: 25px;
    }
    
    .back{
        transform: rotateY(180deg);
    }
    
    .para {
        text-align: justify;
        padding: 20px;
    }

    .rivi {
        background-color: transparent;
        min-height: 70vh;
        margin-top: 25px;
        margin-bottom: 25px;
    }
    
    .rivi2 {
        background-color: transparent;
        min-height: 70vh;
        margin-bottom: 25px;
    }
    
    
/*=====================================================================================   End for card-deck content styles
=====================================================================================*/

/*=====================================================================================   Yheistyö-section styles
=====================================================================================*/
    
    .content-page{
        
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        min-height: 50vh;
        padding: 40px;
        padding-top: 20px;
        margin-top: 80px;
        margin-bottom: 80px;
        background-color: rgb(255, 255, 255);
        height: 100%;
        
    }
    
    .content-page h1{
        margin: 10px;
        font-family: coves;
        font-size: 35px;
        font-weight: bold;
        margin-bottom: 35px;
        color: #333;
        border-bottom: 2px solid black;
        text-shadow: none;
    }
    
    .green-text{
        color: #0ba360;
        font-size: 25px;
    }
    
    .card-header{
        background-color: white;
        border-bottom: none;
    }
        
    #accordion > .card, #accordion2 > .card {
        box-shadow: none;
        border-width: 2px;
    }
                
    a {
       color: #0ba360;
       text-decoration: none; 
    }
    
    a:hover, a:active {
       color: forestgreen;
       text-decoration: none; 
    }
    

/*=====================================================================================  End for Yheistyö-section styles
=====================================================================================*/
    
/*=====================================================================================  Contact section styles
=====================================================================================*/
    .fig img{
        box-shadow: 0px 10px 10px rgba(0,0,0,0.5);
    }
/*=====================================================================================  End for contact section styles
=====================================================================================*/
    
</style>

<!--Jumbotron-->
<div class="jumbotron">
    
        <div class="container">
            
            <div class ="row">
                <div class="col-md-12 title-text text-center">    
                    <p class="jumbotron-text">
                        BIOINFORMAATIOTEKNOLOGIA ON
                    </p>
                    <h1>
                        Tulevaisuuden ala
                    </h1>                    
                </div>
            </div> 
            
        </div>
</div><!--jumbotron end-->

<!--Fist twisted section-->
<div class="page-section">
    
    <div class="twist upper">
        <div class="row twist-content justify-content-center">
            <div class="row justify-content-center">
                <div class="title text-center">
                    MILLAINEN ON BIOLAINEN?
                </div>
            </div>
        </div>
        <div class="row twist-content justify-content-center">
            <div class="col-md-4 text-justify">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in tincidunt lacus. Nunc ut tellus dictum, hendrerit arcu quis, tincidunt elit. Proin in molestie neque. Nulla elementum rhoncus lacus, in pretium libero dictum nec. Vestibulum sed elit auctor, efficitur arcu nec, pellentesque lacus. Etiam sodales a nulla a auctor. In hac habitasse platea dictumst. Vestibulum cursus nibh in gravida maximus. Morbi convallis tincidunt.
                    <br /><br />
                    Maecenas ultricies quis odio et fringilla. Fusce facilisis nisl erat, quis sollicitudin nisi sagittis sit amet. Nullam congue malesuada enim, ac finibus ligula auctor ac. Morbi lacinia leo a urna ullamcorper, id bibendum ex efficitur. Quisque iaculis tristique augue vel sagittis. Curabitur mauris libero, rhoncus non nisi nec, vestibulum consequat diam. Quisque egestas nibh non egestas varius. Donec ut placerat odio. Aenean cursus ipsum eu congue commodo. Fusce in lectus dolor. Integer a gravida urna. Cras convallis mattis tempus. Fusce tincidunt elit ornare nisi convallis, et efficitur velit blandit. Nunc imperdiet tempor augue id viverra.
                </p>
            </div>
        </div>       
    </div><!--End of twist upper-->


    <!--Card-deck section-->
    <div class="container section2"> 

        <!--first card-->
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 mx-auto">
                 <div class="card text-center">
                    <div class="card-body">

                        <div class="title text-center">
                            LSD-MAISTERIOHJELMA
                        </div>

                    </div>
                </div>
            </div>    
        </div>

        <!--first card-deck-->  
        <div class="row justify-content-center rivi align-items-center">
            
            <!--first card-->  
            <div class="flip-container flip1">
                
                
                <!--frontside of the card-->    
                <div class="front text-center">
                    <h4 class="card-title">Biosensing and bioelectronics</h4>
                    <div class="image">
                        <img alt src="http://localhost/wp-content/themes/suurinkubio/assets/images/paa-ainelogot/biosensing_and_bioelectronics.svg">    
                    </div>
                </div>
                
                <!--backside of the card-->
                <div class="back text-center">
                    <h4 class="card-title">Biosensing and bioelectronics</h4>
                    <p class="para">
                        Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo. juuuuuuuuu uuuuuuupajuuuuu uuuuuuuuuuuuuu juuuu juuu juuu juuj uuuju juuj ujju juuuj Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane
                    </p>
                </div>
                
            </div>
            
            <!--second card-->
            <div class="flip-container flip2">
                
                <!--frontside of the card-->
                <div class="front text-center">
                    <h4 class="card-title">Human neuroscience and -technology</h4>
                    <div class="image">
                        <img alt src="http://localhost/wp-content/themes/suurinkubio/assets/images/paa-ainelogot/human_neuroscience_and_technology.svg">
                    </div>
                </div>


                <!--backside of the card-->
                <div class="back text-center">
                    <h4 class="card-title">Human neuroscience and -technology</h4>
                    <p class="para">
                        Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo. juuuuuuuuu uuuuuuupajuuuuu uuuuuuuuuuuuuu juuuu juuu juuu juuj uuuju juuj ujju juuuj Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane  
                    </p>
                </div>
                
            </div>
            
            <!--third card-->
            <div class="flip-container flip3">
                
                <!--frontside of the card-->
                <div class="front text-center">
                    <h4 class="card-title">Biosystems and biomaterials engineering</h4>
                    <div class="image">
                        <img alt src="http://localhost/wp-content/themes/suurinkubio/assets/images/paa-ainelogot/biosystems_and_biomaterials_engineering.svg">
                    </div>
                </div>


                <!--backside of the card-->
                <div class="back text-center">
                    <h4 class="card-title">Biosystems and biomaterials engineering</h4>
                    <p class="para">
                        Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo. juuuuuuuuu uuuuuuupajuuuuu uuuuuuuuuuuuuu juuuu juuu juuu juuj uuuju juuj ujju juuuj Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane  
                    </p>
                </div>
                
            </div>
                
            
        </div><!--end of first card-deck-->
        
        <!--second card-deck-->  
        <div class="row justify-content-center rivi2 align-items-center">
            
            <!--fourth card-->  
            <div class="flip-container flip4">
                
                
                <!--frontside of the card-->    
                <div class="front text-center">
                    <h4 class="card-title">Biomedical engineering</h4>
                    <div class="image">
                        <img alt src="http://localhost/wp-content/themes/suurinkubio/assets/images/paa-ainelogot/biomedical_engineering.svg">    
                    </div>
                </div>
                
                <!--backside of the card-->
                <div class="back text-center">
                    <h4 class="card-title">Biomedical engineering</h4>
                    <p class="para">
                        Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo. juuuuuuuuu uuuuuuupajuuuuu uuuuuuuuuuuuuu juuuu juuu juuu juuj uuuju juuj ujju juuuj Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane
                    </p>
                </div>
                
            </div>
            
            <!--fifth card-->
            <div class="flip-container flip5">
                
                <!--frontside of the card-->
                <div class="front text-center">
                    <h4 class="card-title">Complex systems</h4>
                    <div class="image">
                        <img alt src="http://localhost/wp-content/themes/suurinkubio/assets/images/paa-ainelogot/complex_systems.svg" >
                    </div>
                </div>


                <!--backside of the card-->
                <div class="back text-center">
                    <h4 class="card-title">Complex systems</h4>
                    <p class="para">
                        Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo. juuuuuuuuu uuuuuuupajuuuuu uuuuuuuuuuuuuu juuuu juuu juuu juuj uuuju juuj ujju juuuj Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane  
                    </p>
                </div>
                
            </div>
            
            <!--sixth card-->
            <div class="flip-container flip6">
                
                <!--frontside of the card-->
                <div class="front text-center">
                    <h4 class="card-title">Bioinformatics</h4>
                    <div class="image">
                        <img alt src="http://localhost/wp-content/themes/suurinkubio/assets/images/paa-ainelogot/bioinformatics.svg">
                    </div>
                </div>


                <!--backside of the card-->
                <div class="back text-center">
                    <h4 class="card-title">Bioinformatics</h4>
                    <p class="para">
                        Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo. juuuuuuuuu uuuuuuupajuuuuu uuuuuuuuuuuuuu juuuu juuu juuu juuj uuuju juuj ujju juuuj Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane Propane  
                    </p>
                </div>
                
            </div>
                
            
        </div><!--end of second card-deck-->
        
    </div><!--Card-deck section end-->

    <!--Yhteistyö section-->
    <div class="row justify-content-center">
        
        <!--white "A4-paper"-box -->
        <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 content-page">
            
            <!--Title-->
            <div class="row justify-content-center">
                <div class="title text-center">
                    MIKSI YHTEISTYÖ?
                </div>
            </div>
            
            <!--First row inside white box-->
            <div class="row justify-content-center">
                
                <!--left text-->
                <div class="col-sm-12 col-md-6 col-xl-5 text-justify">
                    <p class="paragraph-text">
                        <span class="green-text">Opiskelijayhteistyö </span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in tincidunt lacus. Nunc ut tellus dictum, hendrerit arcu quis, tincidunt elit. Proin in molestie neque. Nulla elementum rhoncus lacus, in pretium libero dictum nec. Vestibulum sed elit auctor, efficitur arcu nec, pellentesque lacus. Etiam sodales a nulla a auctor. In hac habitasse platea dictumst. Vestibulum cursus nibh in gravida maximus. Morbi convallis tincidunt.
                    </p>
                </div>
                
                <!--right text-->
                <div class="col-sm-12 col-md-6 col-xl-5 text-justify">
                    <p class="paragraph-text">
                        <span class="green-text">Kiltayhteistyö </span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in tincidunt lacus. Nunc ut tellus dictum, hendrerit arcu quis, tincidunt elit. Proin in molestie neque. Nulla elementum rhoncus lacus, in pretium libero dictum nec. Vestibulum sed elit auctor, efficitur arcu nec, pellentesque lacus. Etiam sodales a nulla a auctor. In hac habitasse platea dictumst. Vestibulum cursus nibh in gravida maximus. Morbi convallis tincidunt.
                    </p>
                </div>
                
            </div><!--End of first row in white box-->
            
            <!--Second title-->
            <div class="row justify-content-center">
                <div class="title text-center">
                    YHTEISTYÖ INKUBION KANSSA
                </div>
            </div>
            
            <!--bottom text-->
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-xl-5 text-justify">
                    <p class="paragraph-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in tincidunt lacus. Nunc ut tellus dictum, hendrerit arcu quis, tincidunt elit. Proin in molestie neque. Nulla elementum rhoncus lacus, in pretium libero dictum. <br /><br /> 

                        <span class="green-text">Biopartners-ohjelma</span> Vestibulum sed elit auctor, efficitur arcu nec, pellentesque lacus. Etiam sodales a nulla a auctor. In hac habitasse platea dictumst. Vestibulum cursus nibh in gravida maximus. Morbi convallis tincidunt.
                    </p>
                </div>
            </div><!--end of bottom text row -->

            <!--Collapse tabs-->
            <div class="row justify-content-center">

                <!--left column of collapse tabs-->
                <div class="col-sm-12 col-md-6 col-xl-5">
                    <div id="accordion" role="tablist">

                        <!--first collapse tab-->
                        <div class="card border-success">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    
                                    <!--fontawesome chevron-->
                                    <i class="fa fa-fw fa-chevron-down"></i>
                                    HAALARIT

                                </a>
                                </h5>
                            </div>

                            <!--collapsing content-->
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                      </div> <!--End of first tab-->

                        <!--second collapse tab-->    
                        <div class="card border-success">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                    <i class="fa fa-fw fa-chevron-right"></i>
                                    KILTALEHTI SNAPSI

                                </a>
                                </h5>
                            </div>

                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>

                    <!--thid collapse item -->    
                    <div class="card border-success">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                                <i class="fa fa-fw fa-chevron-right"></i>
                                KILTAHUONE

                            </a>
                            </h5>
                        </div>
                        
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>

                    </div><!--Accordion-->
                </div><!--Left column grid-->

                <!--second column of collapse-items -->
                <div class="col-sm-12 col-md-6 col-xl-5">
                    <div id="accordion2" role="tablist">

                      <div class="card border-success">
                        <div class="card-header" role="tab" id="headingFour">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

                                <i class="fa fa-fw fa-chevron-down"></i>
                                APOPTOOSI

                            </a>
                          </h5>
                        </div>

                        <div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion2">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>

                      <div class="card border-success">
                        <div class="card-header" role="tab" id="headingFive">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">

                                <i class="fa fa-fw fa-chevron-right"></i>
                                YRITYSBRUNSSI

                            </a>
                          </h5>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion2">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>

                      <div class="card border-success">
                        <div class="card-header" role="tab" id="headingSix">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">

                                <i class="fa fa-fw fa-chevron-right" aria-hidden="true"></i>
                                DIPPAFUKSIKILTIS

                            </a>
                          </h5>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion2">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>

                    </div> <!--End of accordion-->
                </div><!--End for right tab-panel row-->

            </div><!--End of collapse-tab-row -->
        </div><!--End of yhteistyö-section-row -->
    </div><!--End of yhteistyö section-->
    
    <div class="contact">
        <div class="twist upper">
            <div class="row twist-content justify-content-center">
                <div class="row justify-content-center">
                    <div class="title text-center">
                        OTA YHTEYTTÄ!
                    </div>
                </div>
            </div>
            <div class="row twist-content justify-content-center align-items-center">
                <div class="col-md-2 text-center text-justify fig">
                    <img class="rounded-circle img-fluid" alt src="http://localhost/wp-content/themes/suurinkubio/assets/images/hallitus/nettisivuvastaava.jpg"><br /><br />
                    <p class="card-title">Joonas Palosuo</p>
                    <p class="card-title">Nettisivutoimari<p>
                    <p class="card-title">joonas.palosuo@aalto.fi</p>
                    
                </div>
                <div class="col-md-3 text-center text-justify fig">
                    <img class="rounded-circle img-fluid" alt src="http://localhost/wp-content/themes/suurinkubio/assets/images/hallitus/nettisivuvastaava.jpg"><br /><br />
                    <p class="card-title">Joonas Palosuo</p>
                    <p class="card-title">Nettisivutoimari<p>
                    <p class="card-title">joonas.palosuo@aalto.fi</p>
                </div>
                <div class="col-md-2 text-center text-justify fig">
                    <img class="rounded-circle img-fluid" alt src="http://localhost/wp-content/themes/suurinkubio/assets/images/hallitus/nettisivuvastaava.jpg"><br /><br />
                    <p class="card-title">Joonas Palosuo</p>
                    <p class="card-title">Nettisivutoimari<p>
                    <p class="card-title">joonas.palosuo@aalto.fi</p>
                </div>
            </div>       
        </div><!--End of twist upper-->
    </div>
    
</div>
<!-- End section -->