@extends('layouts.core')
@section('title', 'Meet our interns')
@section('content')
@section('nav')
<div class="jumbotron-fluid">
      @parent
      <div class="container">
          <header class="row meet-intern">
              <div class="col-xs-12 col-sm-6">
                  <img class="meet-image-intern" src="https://res.cloudinary.com/abisalde/image/upload/v1557141430/meet-hng-interns.png" alt="hotel.ng interns">
              </div>
              <div id="meet-intern-text" class="col-xs-12 col-sm-6">
                  <h1 class="hp-header1">Meet Our Interns</h1>
              </div>
          </header>
          <div class="intern-section">
              <ul class="nav nav-pills nav-fill">
                  <li role="hng-intern"><a href="#intern-1">HNG 1.0 INTERNS</a></li>
                  <li role="hng-intern"><a href="#">HNG 2.0 INTERNS</a></li>
                  <li role="hng-intern"><a href="#">HNG 3.0 INTERNS</a></li>
                  <li role="hng-intern"><a href="#">HNG 4.0 INTERNS</a></li>
                  <li role="hng-intern" class="active"><a href="#">HNG 5.0 INTERNS</a></li>
              </ul>
              <!-- HNG INTERNS -->
              <div id="intern-1" class="row no-gutters">
                  <a href="/views/interns/a_maker.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/a_maker.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/ozymandiase/image/upload/c_scale,h_151,w_151/v1554403456/me.jpg" alt="hng-interns">
                              <h5>Nkwocha Emeka</h5>
                              <p>Frontend Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/Abdullahicap.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/Abdullahicap.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/pace/image/upload/c_scale,h_151,w_151/v1524535256/My_photo.jpg" alt="hng-interns">
                              <h5>Abdullahi Abdulkabir</h5>
                              <p>Systems Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/Ahmzyjazzy.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/Ahmzyjazzy.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/eventdp/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_0px_solid_red,b_rgb:262c35/v1536625961/ahmzy_corp_j0s3yx.jpg" alt="hng-interns">
                              <h5>Ahmed Olanrewaju</h5>
                              <p>Fullstack Developer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/abiokay.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/abiokay.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/devnomic/image/upload/c_scale,h_151,w_151/v1554422876/d54ba70c-404f-4bcd-bb8e-fb6a836587a2.jpg" alt="hng-interns">
                              <h5>Kolade Abiodun</h5>
                              <p>Frontend Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/abiolafakorede.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/abiolafakorede.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/fabdev/image/upload/c_scale,h_151,w_151/v1554328557/fab.jpg" alt="hng-interns">
                              <h5>Fakorede Abiola</h5>
                              <p>Backend Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/abisalde.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/abisalde.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/abisalde/image/upload/c_scale,h_151,w_151/v1554328980/abisalde.png" alt="hng-interns">
                              <h5>Isaiah Abiodun</h5>
                              <p>Frontend Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/abson.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/abson.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/abonzone/image/upload/v1554374789/cfd91f6f-d08e-4426-bee3-e7124e45e68e_1.png" alt="hng-interns">
                              <h5>Abubakar A. Abubakar</h5>
                              <p>Fullstack Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/Abubakar.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/Abubakar.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/dmeoibkzo/image/upload/c_scale,h_151,w_151/v1554412090/Abubakar.png" alt="hng-interns">
                              <h5>Abubakar Diallo</h5>
                              <p>Frontend Developer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/adaglow.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/adaglow.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/eddieglowada/image/upload/c_scale,h_151,w_151/v1554554079/new-profile-pic.png" alt="hng-interns">
                              <h5>Ada Glory</h5>
                              <p>Frontend Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/adaobi.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/adaobi.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/missada/image/upload/c_scale,h_151,w_151/v1523634470/squarequick_201671715640975.jpg" alt="hng-interns">
                              <h5>Aniuchi Adaobi</h5>
                              <p>Frontend Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/Adavize.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/Adavize.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/dfky4apck/image/upload/c_scale,h_151,w_151/v1554381965/WhatsApp_Image_2019-03-28_at_4.51.51_PM_1.jpg" alt="hng-interns">
                              <h5>Aliyu Isreal Adaviza</h5>
                              <p>Frontend Developer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/ade.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/ade.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" class="rounded-corners" src="https://res.cloudinary.com/adetohun/image/upload/c_scale,h_151,w_151/v1554321363/_BUZ0373_edit.jpg" alt="hng-interns">
                              <h5>Adetohun Ogunbowale</h5>
                              <p>Frontend Developer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/Adebayo.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/Adebayo.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/baystef/image/upload/c_scale,h_151,w_151/v1554513965/cloud_pic.jpg" alt="hng-interns">
                              <h5>Daramola Adebayo</h5>
                              <p>Frontend Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/Adesire.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/Adesire.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/drkxylwcp/image/upload/c_scale,h_151,w_151/v1554660800/meDp_2.jpg" alt="hng-interns">
                              <h5>Badejo Adesire</h5>
                              <p>Software Developer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/adex001.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/adex001.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/adex001/image/upload/v1554312560/samples/adex001-edited.jpg" alt="hng-interns">
                              <h5>Olatunbosun Adeoye</h5>
                              <p>Fullstack Developer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/adisen.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/adisen.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/adisen/image/upload/c_scale,h_151,w_151/v1554370919/WP_20180320_13_14_10_Pro_LI_2.jpg" alt="hng-interns">
                              <h5>Israel Adetunji</h5>
                              <p>Software Developer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/ADMINIXTRATOR.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/ADMINIXTRATOR.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/adminixtrator/image/upload/c_scale,h_151,w_151/v1554387563/IMG_20190402_173044.png" alt="hng-interns">
                              <h5>Sadiq Heritage Ayodele</h5>
                              <p>Software Developer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/adroit.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/adroit.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/dc9kfp5gt/image/upload/c_scale,h_151,w_151/v1554307276/IMG_20180227_214951_697_o3buej_rstc5c.jpg" alt="hng-interns">
                              <h5>Ogundeji Bolade</h5>
                              <p>Backend Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/afeez.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/afeez.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/afeezdev/image/upload/c_scale,h_151,w_151/v1554479791/234_816_708_9828_20170510_142357.jpg" alt="hng-interns">
                              <h5>Abdulyekeen Olawale</h5>
                              <p>Frontend Developer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/AgentPeter.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/AgentPeter.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/peteryar19/image/upload/c_scale,h_151,w_151/v1554536612/Peteryar.jpg" alt="hng-interns">
                              <h5>Agent Peter</h5>
                              <p>Frontend Engineer</p>
                          </div>
                      </div>
                  </a>
                  <a href="/views/interns/Lekia.php">
                      <div style="cursor: pointer;" onclick="window.location='/views/interns/AgentPeter.php';" class="col-xs-12 col-sm-6 col-lg-3">
                          <div class="intern-content">
                              <img style="width: 151px; height: 151px;" class="rounded-corners" src="https://res.cloudinary.com/lekia/image/upload/v1554320457/Lekia.png" alt="Gospel Lekia">
                              <h5>Gospel Lekia</h5>
                              <p>Backend Engineer</p>
                          </div>
                      </div>
                  </a>

        <?php

        if($getInterns = opendir('interns/')){
        while (false !== ($interns=readdir($getInterns)))
         {


              if ($interns != 'interns/' &&  strtolower(substr($interns, strrpos($interns, '.') + 1))=='php')
              {
echo file_get_contents('interns/'.$interns);

}

}
closedir($getInterns);

// }



              ?>



              <div class="pagination-link">
                  <a class="intern-link" href="#">&larr;</a>
                  <a class="intern-link active" href="#">1</a>
                  <a class="intern-link" href="#">2</a>
                  <a class="intern-link" href="#">3</a>
                  <a class="intern-link" href="#">4</a>
                  <a class="intern-link" href="#">5</a>
                  <a class="intern-link" href="#">&rarr;</a>
              </div>
          </div>
      </div>

    </div>
@endsection


@endsection
