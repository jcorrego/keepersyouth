<section id="goals" class="bg-light-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Nuestras metas</h2>
                <h3 class="section-subheading text-muted"></h3>
                <br>
            </div>
            @foreach($goals as $goal)
                <div class="col-md-2 col-sm-6">
                    <div class="goal">{{ $goal }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>