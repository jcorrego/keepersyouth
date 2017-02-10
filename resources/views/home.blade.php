@extends('layouts.app')

@section('content')
    <div class="header" class=" container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4 logo">
                    <img src="{{ asset('images/logos/keepers-500.png') }}" alt="{{ config('app.name') }}" class="img-fluid m-x-auto d-block">
                    <h2>Salmo 119:9</h2>
                </div>
                <div class="col-md-8 title">
                    <h1>Keepers Youth Ministries</h1>
                    <hr>
                    <h2>Iniciamos, equipamos y acompañamos procesos en el ministerio juvenil</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-deck-wrapper">
                        <div class="card-deck">
                            <div class="card card-inverse card-blue1">
                                <div class="card-header"><h4 class="card-title">Misión</h4></div>
                                <div class="card-block ">
                                    <p class="card-text">Formamos y facilitamos “REDES” Recursos básicos y profundos para la Enseñanza, el Discipulado y el Estudio de la Palabra para el ministerio juvenil dentro y fuera de la Iglesia. Nuestra base primordial son las Escrituras.</p>
                                </div>
                            </div>
                            <div class="card card-inverse card-blue1">
                                <div class="card-header"><h4 class="card-title">Visión</h4></div>
                                <div class="card-block">
                                    <p class="card-text">Seremos un ministerio autosostenible, cuya intervención ha facilitado las “REDES” en medio de iglesias, grupos juveniles, colegios y medios audiovisuales en Colombia, Estados Unidos y otros países que así lo requieran. Se reconocerá nuestra profundidad, seriedad y respeto por la Palabra de Dios, además de la pertinencia,accesibilidad y el dinamismo de las herramientas ofrecidas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-inverse card-red1">
                        <div class="card-header"><h4 class="card-title">Nuestras metas</h4></div>
                        <div class="card-block">
                            <ul>
                                <li>Implementar el uso de materiales y diferentes recursos para desarrollar estudios bíblicos y reflexiones con jóvenes.</li>
                                <li>Ser referente para los jóvenes con el carácter de Cristo, que anhelan servirle, entendiendo la importancia de estar anclados a la Palabra de Dios.</li>
                                <li>Facilitar materiales de estudio y discipulado para jóvenes.</li>
                                <li>Empoderar a líderes en sus propios dones y talentos, activándoles en el servicio y ministerio juvenil.</li>
                                <li>Transmitir y extender la importancia de la Palabra de Dios como principal herramienta de crecimiento en los ministerios juveniles.</li>
                                <li>Ofrecer recursos, materiales y capacitación para el trabajo con los padres en las áreas de desarrollo de la vida de sus hijos.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card-deck-wrapper">
                        <div class="card-deck">
                            <div class="card card-inverse card-orange2">
                                <div class="card-header"><h4 class="card-title">Áreas de alcance y servicio</h4></div>
                                <div class="card-block">
                                    <ul>
                                        <li>H2J</li>
                                        <li>Cápsulas bíblicas juveniles</li>
                                        <li>Apologética juvenil</li>
                                        <li>Keepers School</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card card-inverse card-pink1">
                                <div class="card-header"><h4 class="card-title">Algunos materiales</h4></div>
                                <div class="card-block">
                                    <ul>
                                        <li>Siete aspectos que apagan el Espíritu</li>
                                        <li>¿Cómo puede el joven tomar decisiones sabias?</li>
                                        <li>¿Qué sucede con el joven que evangeliza y sirve?</li>
                                        <li>Tatuajes, pornografía y masturbación ¿Qué dice la Biblia?</li>
                                        <li>El ministerio juvenil generacional</li>
                                        <li>Cómo ayudar a jóvenes y adolescentes frente al matoneo?</li>
                                        <li>El ministerio juvenil transcultural</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
