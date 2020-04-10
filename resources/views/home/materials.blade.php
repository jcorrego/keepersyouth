<section id="materials" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Materiales</h2>
                <h3 class="section-subheading text-muted">Contamos con recursos y materiales para el 
                    liderazgo de jóvenes y adolescentes así como para los mismos jóvenes 
                    contextualizados a sus necesidades y vivencias.</h3>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="service-heading">Material para jóvenes</h4>
                        <div class="row">
                            @foreach($materials as $material)
                                <div class="col-sm-6">
                                    @include('materials.summary',['material'=>$material])
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="service-heading">Ministerio y liderazgo juvenil</h4>
                        <div class="row">
                            @foreach($courses as $material)
                                <div class="col-sm-6">
                                    @include('materials.summary',['material'=>$material])
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>