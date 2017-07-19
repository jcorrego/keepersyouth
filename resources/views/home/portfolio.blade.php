<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Áreas de alcance y servicio</h2>
                <h3 class="section-subheading text-muted">En estas áreas estamos trabajando...</h3>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal{{ $service['id'] }}" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ $service['thumbnail'] }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{ $service['name'] }}</h4>
                        <p class="text-muted">{{ $service['subtitle'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->
@foreach($services as $service)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $service['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-responsive img-centered" src="{{ $service['image'] }}" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h2>{{ $service['name'] }}</h2>
                                        <p class="item-intro text-muted">{{ $service['subtitle'] }}</p>
                                        <p>{!! $service['description']  !!}</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach