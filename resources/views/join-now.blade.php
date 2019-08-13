@extends('layouts.core')
@section('title', 'Join now')
@section('content')
@section('nav')
      @parent
      <div class="container">
                    <div class="row">
                        <div class="col-md-5">

                            <div class="join-now-img ">
                                <img src="{{ asset('img/join-now-laptop.png')}}" class="">
                                </div>
                            </div>

                    <div class="col-md-7">
                            <header class="join-header">
    				            <h1 class="h1">Join Now</h1>
    			            </header>

                            <div class="hide join-message">
                                Thank you for joining us...see you at the next internship!
                                <div>
                                   <a href="index" class="">Go to Home Page<a>
                                </div>
                                <!-- <div>
                                    <a href="blog" class="primary-button join-btn">Read Intern Stories<a>
                                </div> -->
                            </div>

                        <?php
                            if(isset($_POST['submit'])){
                                $_POST = array_map( 'stripslashes', $_POST);

                                //collect form data
                                extract($_POST);

                                $db = new DB;

                                $pdo = $db->connection();

                                try {

                                    //insert into database
                                    $stmt = $pdo->prepare('INSERT INTO interns (full_name,email,phone_number,tech_interest,experience,internship_reason) VALUES (:full_name, :email, :phone_number, :tech_interest, :experience, :internship_reason)');
                                    $stmt->execute(array(
                                        ':full_name' => $full_name,
                                        ':email' => $email,
                                        ':phone_number' => $phone_number,
                                        ':tech_interest' => $tech_interest,
                                        ':experience' => $experience,
                                        ':internship_reason' => $internship_reason
                                    ));

                                    //redirect after submission
                                    echo '<script>
                                            const message = document.querySelector(".join-message");
                                            console.log(message);
                                            message.classList.remove("hide");
                                        </script>';
                                    exit;

                                }   catch(PDOException $e) {
                                        echo $e->getMessage();
                                }

                            }
                        ?>

                        <form action="" id="join-form" method="post">
                            <div class="form-row row">
                                <div class=" col-md-6">
                                    <label class="join-labels" for="full_name">Full Name</label>
                                    <input type="text" name="full_name" class="form-control join-input" id="full_name" placeholder="Full name" pattern="[A-Z\sa-z.-]{4,35}" required>
                                </div>
                                <div class=" col-md-6">
                                    <label class="join-labels" for="email">Email</label>
                                    <input type="email" name="email" class="form-control join-input" id="join-email" placeholder="you@example.com" required>
                                </div>
                            </div>

                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label class="join-labels" for="phone_number">Phone Number</label>
                                    <input type="tel" name="phone_number" class="form-control join-input" id="phone_number" placeholder="Phone number"  pattern=" (+)[0-9]" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="join-labels" for="tech_interest">Learning Track</label>
                                    <select name="tech_interest" class="form-control join-input" id="tech_interest" required>
                                        <option selected disabled>Choose...</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Mobile Development">Mobile Development</option>
                                        <option value="Machine Learning">Machine Learning</option>
                                        <option value="UI/UX Design">UI/UX Design</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label class="join-labels" for="experience">What Is Your Experience So Far?</label>
                                    <select name="experience" class="form-control join-input" id="experience" required>
                                        <option selected disabled>Choose...</option>
                                        <option value="Less than 1 year">Less than 1 year</option>
                                        <option value="1 - 2 years">1 - 2 years</option>
                                        <option value="Above 2 years">Above 2 years</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="join-labels" for="internship_reason">Why Choose HNG Internship?</label>
                                    <select name="internship_reason" class="form-control join-input" id="internship_reason" required>
                                        <option selected disabled>Choose...</option>
                                        <option value="To gain work experience">To gain work experience</option>
                                        <option value="To improve my skills">To improve my skills</option>
                                        <option value="To make a career switch">To make a career switch</option>
                                        <option value="To learn">To learn</option>
                                        <option value="I heard it is dope!">I heard it is dope!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="btn-container">
    			                <button class="primary-button join-btn" name="submit" id="sumbit" style="padding: 14px 30px">Submit</button>
    		                </div>
                        </form>
                    </div>

                </div>
            </div>
@endsection
<footer class="join-footer">


@endsection
