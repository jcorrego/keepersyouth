<section id="materials" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Materiales</h2>
                <h3 class="section-subheading text-muted">Algunos de nuestros materiales</h3>
                <br>
            </div>
            @foreach($materials as $material)
                <div class="col-md-3 col-sm-6">
                    @include('materials.summary',['material'=>$material])
                </div>
            @endforeach
        </div>
    </div>
</section>