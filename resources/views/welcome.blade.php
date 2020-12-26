@extends('layouts.front')


@section('content')


    <!-- START HERO -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="mt-md-4">
                        <div>
                            <span class="badge badge-danger badge-pill">New</span>
                            <span class="text-white-50 ml-1">Welcome to new landing page</span>
                        </div>
                        <h2 class="text-white font-weight-normal mb-4 mt-3 hero-title">
                           Freelance World
                        </h2>

                        <p class="mb-4 font-16 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto dolore doloremque, eligendi incidunt inventore magnam, nulla quae quas rem, rerum sapiente tenetur unde? Alias debitis doloribus excepturi nesciunt quis?</p>

                        <a href="{{ route('login') }}" class="btn btn-success">Preview <i
                                class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="text-md-right mt-3 mt-md-0">
                        <img src="assets/images/startup.svg" alt="" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO -->

    <!-- START FAQ -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-frequently-asked-questions"></i></h1>
                        <h3>Frequently Asked <span class="text-primary">Questions</span></h3>
                        <p class="text-muted mt-2">Here are some of the basic types of questions for our customers. For more
                            <br>information please contact us.</p>

                        <button type="button" class="btn btn-success btn-sm mt-2"><i class="mdi mdi-email-outline mr-1"></i> Email us your question</button>
                        <button type="button" class="btn btn-info btn-sm mt-2 ml-1"><i class="mdi mdi-twitter mr-1"></i> Send us a tweet</button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-5 offset-lg-1">
                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">Can I use this template for my client?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">Yup, the marketplace license allows you to use this theme
                            in any end products.
                            For more information on licenses, please refere <a href="https://themes.getbootstrap.com/licenses/" target="_blank">here</a>.</p>
                    </div>

                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">How do I get help with the theme?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">Use our dedicated support email (support@coderthemes.com) to send your issues or feedback. We are here to help anytime.</p>
                    </div>

                </div>
                <!--/col-lg-5 -->

                <div class="col-lg-5">
                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">Can this theme work with Wordpress?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">No. This is a HTML template. It won't directly with
                            wordpress, though you can convert this into wordpress compatible theme.</p>
                    </div>

                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">Will you regularly give updates of Hyper?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">Yes, We will update the Hyper regularly. All the
                            future updates would be available without any cost.</p>
                    </div>

                </div>
                <!--/col-lg-5-->
            </div>
            <!-- end row -->

        </div> <!-- end container-->
    </section>
    <!-- END FAQ -->

@endsection
