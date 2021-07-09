@extends('layouts.main')

@section('content')
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>FAQ</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
         <!-- Start FAQ area -->
        <div class="faq-area bg-color page-padding">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Some important FAQ</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <!-- Start Column Start -->
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="company-faq">
                            <div class="faq-full">
								<div class="faq-details">
									<div class="panel-group" id="accordion">
										<!-- Panel Default -->
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="check-title">
													<a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
														<span class="acc-icons"></span>How to successful our mission and vision
													</a>
												</h4>
											</div>
											<div id="check1" class="panel-collapse collapse in">
												<div class="panel-body">
													<p>
														When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
													</p>		
												</div>
											</div>
										</div>
										<!-- End Panel Default -->
										<!-- Panel Default -->
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="check-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#check2">
														<span class="acc-icons"></span>Clients satisfaction make company Value.
													</a>
												</h4>
											</div>
											<div id="check2" class="panel-collapse collapse">
												<div class="panel-body">
													<p>
														When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
													</p>										
												</div>
											</div>
										</div>
										<!-- End Panel Default -->
										<!-- Panel Default -->
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="check-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#check3">
														<span class="acc-icons"></span>World class creative design and development firm. 
													</a>
												</h4>
											</div>
											<div id="check3" class="panel-collapse collapse ">
												<div class="panel-body">
													<p>
														When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
													</p>	
												</div>
											</div>
										</div>
										<!-- End Panel Default -->	
										<!-- Panel Default -->
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="check-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#check4">
														<span class="acc-icons"></span>We are the best online flatform 
													</a>
												</h4>
											</div>
											<div id="check4" class="panel-collapse collapse ">
												<div class="panel-body">
													<p>
														When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
													</p>	
												</div>
											</div>
										</div>
										<!-- End Panel Default -->
										<!-- Panel Default -->
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="check-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#check5">
														<span class="acc-icons"></span>Clients satisfaction make company Value.
													</a>
												</h4>
											</div>
											<div id="check5" class="panel-collapse collapse">
												<div class="panel-body">
													<p>
														When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
													</p>										
												</div>
											</div>
										</div>
										<!-- End Panel Default -->										
									</div>
								</div>
								<!-- End FAQ -->
							</div>
                        </div>
                    </div>
                    <!-- End Column -->
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="faq-content">
                        	<h4>Have a any qustion?</h4>
							<div class="faq-quote">
								<div class="row">
									<form id="contactForm" method="POST" action="contact.php" class="contact-form">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
											<input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
											<input type="text" id="msg_subject" class="form-control" placeholder="Subject" required="" data-error="Please enter your message subject">
											<div class="help-block with-errors"></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
											<div class="help-block with-errors"></div>
											<button type="submit" id="submit" class="quote-btn">Submit</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div> 
											<div class="clearfix"></div>
										</div>   
									</form>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- End Column -->
                </div>
            </div>
        </div>
        <!-- End FAQ area -->
@endsection