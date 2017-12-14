<section id="gallery" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Galería</h2>
                <h3 class="section-subheading text-muted">Imágenes de algunos eventos y actividades recientes realizadas por el equipo de Keepers</h3>
                <br>
            </div>
            @foreach($gallery as $folder)
                @foreach(Storage::disk('gallery')->files('./'.$folder) as $image)
                    <div class="col-md-3 col-sm-6" style="display:{{ $loop->index == 0?'block':'none' }}">
                        <a class="thumbnail" href="/images/gallery/{{ $image }}" data-lightbox="{{ str_slug($folder) }}">
                            <div class="thumb-image" style="background: url('/images/gallery/{{ $image }}');background-position: center;"></div>
                            <div class="caption">{{ $folder }} <br><span class="details">{{ $loop->count }} imágenes</span></div>
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>